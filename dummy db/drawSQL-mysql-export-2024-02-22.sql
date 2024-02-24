CREATE TABLE `job_experiences`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `designation` BIGINT NOT NULL,
    `company_name` BIGINT NOT NULL,
    `joinig date` BIGINT NOT NULL,
    `depurture date` BIGINT NOT NULL,
    `candidate_id` BIGINT NOT NULL
);
ALTER TABLE
    `job_experiences` ADD UNIQUE `job_experiences_candidate_id_unique`(`candidate_id`);
CREATE TABLE `admins`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `email_varified_at` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `remember_token` VARCHAR(255) NOT NULL,
    `token` VARCHAR(255) NOT NULL,
    `role` ENUM('') NOT NULL
);
CREATE TABLE `employers`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `email_varified_at` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `remember_token` VARCHAR(255) NOT NULL,
    `token` VARCHAR(255) NOT NULL,
    `role` ENUM('') NOT NULL
);
CREATE TABLE `jobs`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `employer_id` BIGINT NOT NULL,
    `job title` VARCHAR(255) NOT NULL,
    `Job Description` VARCHAR(255) NOT NULL,
    `other details` VARCHAR(255) NOT NULL,
    `status` BIGINT NOT NULL DEFAULT '0' COMMENT '0,1',
    `location` BIGINT NOT NULL,
    `job_tags` BIGINT NOT NULL,
    `job_categories` BIGINT NOT NULL,
    `salary_range` BIGINT NOT NULL,
    `status` BIGINT NOT NULL DEFAULT '0' COMMENT '0 for inactive 1 for active',
    `requirements` TEXT NOT NULL,
    `job_types` ENUM('') NOT NULL COMMENT 'fulltime, parttime, contractual',
    `posted_at` BIGINT NOT NULL,
    `expires_at` BIGINT NOT NULL
);
ALTER TABLE
    `jobs` ADD UNIQUE `jobs_employer_id_unique`(`employer_id`);
ALTER TABLE
    `jobs` ADD UNIQUE `jobs_job_tags_unique`(`job_tags`);
ALTER TABLE
    `jobs` ADD UNIQUE `jobs_job_categories_unique`(`job_categories`);
CREATE TABLE `candidate_profiles`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `first_name` BIGINT NOT NULL,
    `last_name` BIGINT NOT NULL,
    `email` BIGINT NOT NULL,
    `phone_number` BIGINT NOT NULL,
    `address` BIGINT NOT NULL,
    `skill` BIGINT NOT NULL,
    `portfolio_url` BIGINT NOT NULL,
    `linkdin_url` BIGINT NOT NULL,
    `picture` BIGINT NOT NULL,
    `resume` BIGINT NOT NULL,
    `candidate_id` BIGINT NULL
);
ALTER TABLE
    `candidate_profiles` ADD UNIQUE `candidate_profiles_candidate_id_unique`(`candidate_id`);
CREATE TABLE `educational_informations`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `candidate_id` BIGINT NOT NULL,
    `degree` BIGINT NOT NULL,
    `major` BIGINT NOT NULL,
    `school_name` BIGINT NOT NULL,
    `passed_year` BIGINT NOT NULL
);
ALTER TABLE
    `educational_informations` ADD UNIQUE `educational_informations_candidate_id_unique`(`candidate_id`);
CREATE TABLE `professional_trainings`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `training_name` BIGINT NOT NULL,
    `institution_name` BIGINT NOT NULL,
    `completion_year` BIGINT NOT NULL,
    `candidate_id` BIGINT NOT NULL
);
ALTER TABLE
    `professional_trainings` ADD UNIQUE `professional_trainings_candidate_id_unique`(`candidate_id`);
CREATE TABLE `table_14`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
);
CREATE TABLE `employer_details`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `address` BIGINT NOT NULL,
    `location` BIGINT NOT NULL,
    `website` BIGINT NOT NULL,
    `employer_id` BIGINT NOT NULL,
    `employer_type` ENUM('') NOT NULL COMMENT 'NGO, Government, private',
    `employer details` BIGINT NOT NULL,
    `company_size` BIGINT NOT NULL
);
ALTER TABLE
    `employer_details` ADD UNIQUE `employer_details_employer_id_unique`(`employer_id`);
CREATE TABLE `job_tags`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `tag_name` VARCHAR(255) NOT NULL,
    `job_category_id` BIGINT NOT NULL
);
CREATE TABLE `users(candidates)`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `email_varified_at` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `remember_token` VARCHAR(255) NOT NULL,
    `token` VARCHAR(255) NOT NULL,
    `role` ENUM('') NOT NULL
);
CREATE TABLE `table_15`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
);
CREATE TABLE `applications`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `jobs_id` BIGINT NOT NULL,
    `user_id` BIGINT NOT NULL,
    `application_status` ENUM('') NOT NULL DEFAULT 'Applied' COMMENT 'applied,shortlisted,rejected'
);
ALTER TABLE
    `applications` ADD UNIQUE `applications_jobs_id_unique`(`jobs_id`);
ALTER TABLE
    `applications` ADD UNIQUE `applications_user_id_unique`(`user_id`);
CREATE TABLE `job_category`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `category_name` BIGINT NOT NULL
);
ALTER TABLE
    `jobs` ADD CONSTRAINT `jobs_employer_id_foreign` FOREIGN KEY(`employer_id`) REFERENCES `employers`(`id`);
ALTER TABLE
    `candidate_profiles` ADD CONSTRAINT `candidate_profiles_candidate_id_foreign` FOREIGN KEY(`candidate_id`) REFERENCES `users(candidates)`(`id`);
ALTER TABLE
    `candidate_profiles` ADD CONSTRAINT `candidate_profiles_id_foreign` FOREIGN KEY(`id`) REFERENCES `professional_trainings`(`id`);
ALTER TABLE
    `applications` ADD CONSTRAINT `applications_jobs_id_foreign` FOREIGN KEY(`jobs_id`) REFERENCES `jobs`(`id`);
ALTER TABLE
    `educational_informations` ADD CONSTRAINT `educational_informations_candidate_id_foreign` FOREIGN KEY(`candidate_id`) REFERENCES `candidate_profiles`(`id`);
ALTER TABLE
    `job_experiences` ADD CONSTRAINT `job_experiences_candidate_id_foreign` FOREIGN KEY(`candidate_id`) REFERENCES `candidate_profiles`(`id`);
ALTER TABLE
    `jobs` ADD CONSTRAINT `jobs_job_categories_foreign` FOREIGN KEY(`job_categories`) REFERENCES `job_category`(`category_name`);
ALTER TABLE
    `employer_details` ADD CONSTRAINT `employer_details_employer_id_foreign` FOREIGN KEY(`employer_id`) REFERENCES `employers`(`id`);
ALTER TABLE
    `jobs` ADD CONSTRAINT `jobs_job_tags_foreign` FOREIGN KEY(`job_tags`) REFERENCES `job_tags`(`id`);
ALTER TABLE
    `applications` ADD CONSTRAINT `applications_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users(candidates)`(`id`);