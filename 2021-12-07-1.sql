/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.22-MariaDB : Database - laravel_boilerplate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel_boilerplate` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `laravel_boilerplate`;

/*Table structure for table `client_events` */

DROP TABLE IF EXISTS `client_events`;

CREATE TABLE `client_events` (
                                 `id` int(11) NOT NULL AUTO_INCREMENT,
                                 `client_id` int(11) DEFAULT NULL,
                                 `notification_id` int(11) DEFAULT NULL,
                                 `start_time` datetime DEFAULT NULL,
                                 `frequency` int(11) DEFAULT NULL,
                                 `status` int(11) DEFAULT NULL,
                                 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `client_events` */

insert  into `client_events`(`id`,`client_id`,`notification_id`,`start_time`,`frequency`,`status`) values
    (1,1,2,'2021-12-07 06:07:37',60,1);

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `company_name` varchar(255) DEFAULT NULL,
                           `business_number` varchar(255) DEFAULT NULL,
                           `first_name` varchar(255) DEFAULT NULL,
                           `last_name` varchar(255) DEFAULT NULL,
                           `phone_number` varchar(255) DEFAULT NULL,
                           `cell_number` varchar(255) DEFAULT NULL,
                           `carriers` varchar(255) DEFAULT NULL,
                           `hst` varchar(255) DEFAULT NULL,
                           `website` varchar(255) DEFAULT NULL,
                           `status` int(11) DEFAULT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `clients` */

insert  into `clients`(`id`,`company_name`,`business_number`,`first_name`,`last_name`,`phone_number`,`cell_number`,`carriers`,`hst`,`website`,`status`) values
                                                                                                                                                            (1,'company01','1','mason','johnson','43774','23092_239','94332','hst001','hst001',1),
                                                                                                                                                            (2,'a','b','c','d','e','f','g','h','h',0),
                                                                                                                                                            (4,'sadfsd','afsdf','sdfsd','fsdafsad','fasdfasd','fasdfas','dfasdfas','fsaf','fsaf',0);

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `employee_id` int(11) DEFAULT NULL,
                        `module` varchar(255) DEFAULT NULL,
                        `action` varchar(255) DEFAULT NULL,
                        `action_time` datetime DEFAULT NULL,
                        `ip_address` varchar(255) DEFAULT NULL,
                        PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `logs` */

insert  into `logs`(`id`,`employee_id`,`module`,`action`,`action_time`,`ip_address`) values
                                                                                         (1,1,'client','add client','2021-12-07 07:08:00','127.0.0.1'),
                                                                                         (2,7,'notification','view notification','2021-12-07 01:32:16','127.0.0.1'),
                                                                                         (4,7,'employees','show employee','2021-12-07 01:42:13','127.0.0.1'),
                                                                                         (5,7,'clients','add client','2021-12-07 01:42:20','127.0.0.1'),
                                                                                         (6,7,'client events','show client event','2021-12-07 01:42:25','127.0.0.1');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
                              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                              `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `batch` int(11) NOT NULL,
                              PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values
                                                        (1,'2017_04_10_000000_create_users_table',1),
                                                        (2,'2017_04_10_000001_create_password_resets_table',1),
                                                        (3,'2017_04_10_000002_create_social_accounts_table',1),
                                                        (4,'2017_04_10_000003_create_roles_table',1),
                                                        (5,'2017_04_10_000004_create_users_roles_table',1),
                                                        (6,'2017_06_16_000005_create_protection_validations_table',1),
                                                        (7,'2017_06_16_000006_create_protection_shop_tokens_table',1),
                                                        (8,'2019_10_31_152451_add_last_login_to_users',1);

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
                                 `id` int(11) NOT NULL AUTO_INCREMENT,
                                 `name` varchar(255) DEFAULT NULL,
                                 `type` varchar(255) DEFAULT NULL,
                                 `status` int(11) DEFAULT NULL,
                                 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `notifications` */

insert  into `notifications`(`id`,`name`,`type`,`status`) values
                                                              (1,'Bill1','SMS',1),
                                                              (2,'Tax','Email',0),
                                                              (4,'fsasg','Email',0);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
                                   `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `protection_shop_tokens` */

DROP TABLE IF EXISTS `protection_shop_tokens`;

CREATE TABLE `protection_shop_tokens` (
                                          `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                                          `user_id` int(10) unsigned NOT NULL,
                                          `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                                          `success_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `cancel_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `success_url_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `cancel_url_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          `shop_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                          PRIMARY KEY (`id`),
                                          UNIQUE KEY `pst_unique_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `protection_shop_tokens` */

insert  into `protection_shop_tokens`(`id`,`user_id`,`number`,`expires`,`success_url`,`cancel_url`,`success_url_title`,`cancel_url_title`,`shop_url`) values
    (1,2,'84760256-1401-4e4d-8f23-e336e0cbec39','2021-12-06 10:31:16','http://localhost:8000/membership/clear-cache?dest=http%3A%2F%2Flocalhost%3A8000%2Fmembership','http://localhost:8000/membership','Return to Laravel Boilerplate','Cancel and return to Laravel Boilerplate','https://go.netlicensing.io/shop/v2/?shoptoken=84760256-1401-4e4d-8f23-e336e0cbec39');

/*Table structure for table `protection_validations` */

DROP TABLE IF EXISTS `protection_validations`;

CREATE TABLE `protection_validations` (
                                          `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                                          `user_id` int(10) unsigned NOT NULL,
                                          `ttl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                                          `validation_result` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                                          PRIMARY KEY (`id`),
                                          UNIQUE KEY `unique_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `protection_validations` */

insert  into `protection_validations`(`id`,`user_id`,`ttl`,`validation_result`) values
    (1,2,'2021-12-06 16:14:23','{\"LB-SUBSCRIPTION-PLAN\":{\"productModuleNumber\":\"LB-SUBSCRIPTION-PLAN\",\"valid\":true,\"expires\":\"2027-09-01T02:42:25.943Z\",\"productModuleName\":\"Membership Plan - Subscription\",\"warningLevel\":\"GREEN\",\"licensingModel\":\"Subscription\"}}');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
                         `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                         `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `weight` smallint(5) unsigned NOT NULL DEFAULT 0,
                         PRIMARY KEY (`id`),
                         UNIQUE KEY `unique_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`weight`) values
                                               (1,'administrator',0),
                                               (2,'authenticated',0);

/*Table structure for table `social_accounts` */

DROP TABLE IF EXISTS `social_accounts`;

CREATE TABLE `social_accounts` (
                                   `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                                   `user_id` int(10) unsigned NOT NULL,
                                   `provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                   `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                   `created_at` timestamp NULL DEFAULT NULL,
                                   `updated_at` timestamp NULL DEFAULT NULL,
                                   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `social_accounts` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
                         `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                         `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `active` tinyint(3) unsigned NOT NULL DEFAULT 1,
                         `confirmation_code` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `confirmed` tinyint(1) NOT NULL DEFAULT 1,
                         `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `email_verified_at` timestamp NULL DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL,
                         `deleted_at` timestamp NULL DEFAULT NULL,
                         `last_login` datetime DEFAULT NULL,
                         `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `cell_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         PRIMARY KEY (`id`),
                         UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`active`,`confirmation_code`,`confirmed`,`remember_token`,`email_verified_at`,`created_at`,`updated_at`,`deleted_at`,`last_login`,`first_name`,`last_name`,`cell_number`,`position`) values
                                                                                                                                                                                                                                             (1,'Admin','admin.laravel@labs64.com','$2y$10$CizMyeVDR57s5.Az1ry8a.hsCA9dRJJlDf7wmEKylBZICT9.8IEMO',1,'dcfd0923-c472-4529-a789-8e39d741ae96',1,NULL,NULL,'2021-12-06 03:45:45','2021-12-06 23:20:44',NULL,'2021-12-06 23:20:44','John','Mercle','12345668','Manager'),
                                                                                                                                                                                                                                             (2,'Demo','demo.laravel@labs64.com','$2y$10$XfxUAXCdEsyPwHGn070gG.NFXeaYTOsZ9Z96aPT1JioeX1CCKsrfe',0,'37804ce4-172b-460f-be24-7fe647187232',1,NULL,NULL,'2021-12-06 03:45:45','2021-12-06 16:15:51',NULL,'2021-12-06 10:00:05','Ron','Donald','232452332','Senior Accountant'),
                                                                                                                                                                                                                                             (7,'xxx','a@b.com','$2y$10$8DSJJAxPEby/UXPnn8LXoORzjuAMV8G0WpUXstHDFaHoLl4YkwLci',1,'365c729f-f8dc-453e-a9d9-e47da2024ed5',1,NULL,NULL,'2021-12-06 15:08:01','2021-12-06 23:22:03',NULL,'2021-12-06 23:22:03','xxx','yyyy','xdsdfsa','Chartered Accountant');

/*Table structure for table `users_roles` */

DROP TABLE IF EXISTS `users_roles`;

CREATE TABLE `users_roles` (
                               `user_id` int(10) unsigned NOT NULL,
                               `role_id` int(10) unsigned NOT NULL,
                               UNIQUE KEY `users_roles_user_id_role_id_unique` (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users_roles` */

insert  into `users_roles`(`user_id`,`role_id`) values
                                                    (1,1),
                                                    (1,2),
                                                    (2,2),
                                                    (7,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
