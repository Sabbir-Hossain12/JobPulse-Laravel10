<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Mail\EmployerMail;
use App\Models\Employer;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Validation\Rules;

class EmployerController extends Controller
{
    public function create(): View
    {
        return view('employer.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        if( Auth::guard('employer')->attempt($request->validated()))
        {
            //  $request->authenticate();

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::EMPLOYER);
        }
        else
        {
           return redirect()->back();
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('employer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

//    Registration

    /**
     * Display the registration view.
     */
    public function createReg(): View
    {
        return view('employer.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeReg(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Employer::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Employer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('employer')->login($user);

        return redirect(RouteServiceProvider::EMPLOYER);
    }

//    Forget password

    public function createForgot(): View
    {
        return view('employer.auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeForgot(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $employer= Employer::where('email',$request->email)->first();

        if(!$employer)
        {
            return redirect()->back()->with('error','email not found');
        }

        $token= hash('sha256',time());
        $employer->token= $token;
        $employer->update();

        $reset_link= url('/employer/reset-password/'.$token);
        $subject="RESET PASSWORD";
        $message="Please Click the below link to reset your password <br><br>";
       $message.="<a href='".$reset_link."'>Reset Password</a>";


        Mail::to($request->email)->send(new EmployerMail($subject,$message));

        return redirect()->back()->with('success','Reset Password link sent to your Email');
    }

    //Password Reset

    /**
     * Display the password reset view.
     */
    public function createReset(Request $request): View
    {
        return view('employer.auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeReset(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $employer= Employer::where('email',$request->email)->where('token',$request->token)->first();

        $employer->password= Hash::make($request->password);
        $employer->token="";
        $employer->update();

        return redirect()->route('employer.login')->with('success','password reset successful');


    }
}
