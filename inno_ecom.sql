-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2025 at 10:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inno_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_image` varchar(255) DEFAULT NULL,
  `brand_description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` char(10) DEFAULT NULL,
  `category_name` varchar(191) NOT NULL,
  `category_description` varchar(255) DEFAULT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `category_name`, `category_description`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Men', 'Category Description', '3_1751223491.jpg', 1, '2025-06-29 18:58:11', '2025-06-29 18:58:11'),
(4, '3', 'T-shirt', 'Category Description', '3_1751223621.jpg', 1, '2025-06-29 19:00:21', '2025-06-29 19:00:21'),
(5, '3', 'Short sleeve shirt', 'Category Description', '3_1751223689.jpg', 1, '2025-06-29 19:01:29', '2025-06-29 19:01:29'),
(6, '3', 'Long sleeve shirt', 'Category Description', '3_1751223727.jpg', 1, '2025-06-29 19:02:07', '2025-06-29 19:02:07'),
(7, NULL, 'Women', 'Category Description', '3_1751223793.jpg', 1, '2025-06-29 19:03:13', '2025-06-29 19:03:13'),
(8, '7', 'T-shirt', 'Category Description', '3_1751223832.jpg', 1, '2025-06-29 19:03:52', '2025-07-05 06:29:44'),
(9, '7', 'Denim pant', 'Category Description', '3_1751223869.jpg', 1, '2025-06-29 19:04:29', '2025-06-29 19:04:29'),
(10, '7', 'Plazo', 'Category Description', '3_1751223899.jpg', 1, '2025-06-29 19:04:59', '2025-06-29 19:04:59'),
(11, NULL, 'Others', 'description', 'download_1730282093_1751697061.jpeg', 1, '2025-07-05 06:31:01', '2025-07-05 06:31:01'),
(12, '11', 'Eid Collection', 'category', '1702457402_images_1720609258_1751697102.jpg', 1, '2025-07-05 06:31:42', '2025-07-05 06:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'United States', 1, '2024-10-06 03:35:55', NULL),
(5, 'England', 1, '2024-10-06 03:35:55', NULL),
(6, 'Bangladesh', 1, '2024-10-06 03:36:16', NULL),
(7, 'Australia', 1, '2024-10-06 03:36:16', NULL),
(8, 'Saudi Arabia', 1, '2024-10-06 03:41:22', NULL),
(9, 'Iran', 1, '2024-10-06 03:41:22', NULL),
(11, 'pakistan', 1, '2024-10-30 00:11:49', '2024-10-30 00:11:49'),
(13, 'Iceland', 0, '2024-10-30 00:17:25', '2024-10-30 00:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `symbol` varchar(10) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `status`, `created_at`, `updated_at`) VALUES
(4, 'USD', '$', 1, '2024-08-25 01:03:24', '2024-08-25 01:03:24'),
(5, 'BDT', NULL, 0, NULL, NULL),
(6, 'EURO', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_id` char(10) DEFAULT NULL,
  `customer_id` varchar(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `contact_address` text DEFAULT NULL,
  `customer_group` varchar(20) DEFAULT NULL,
  `customer_notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `lead_id`, `customer_id`, `name`, `mobile_number`, `email_address`, `contact_address`, `customer_group`, `customer_notes`, `created_at`, `updated_at`) VALUES
(7, '411', '93HFL', 'jamal hosen', '0173145673', NULL, NULL, 'NEW CLIENT', 'This is our new customer', '2024-11-05 12:00:27', '2024-11-05 12:00:27'),
(8, '418', '5CE2K', 'jamal hosen 2', '0173145673', NULL, NULL, 'SERVICE BASED', 'service based product', '2024-11-06 04:37:07', '2024-11-06 04:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '778181e1-8bd2-4449-a6b7-2f59ffd9d571', 'database', 'default', '{\"uuid\":\"778181e1-8bd2-4449-a6b7-2f59ffd9d571\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"singara(breakfast)\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"singara(breakfast)\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51'),
(2, '1c1146b9-867f-493c-b7af-c0a4306bc57e', 'database', 'default', '{\"uuid\":\"1c1146b9-867f-493c-b7af-c0a4306bc57e\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:13:\\\"buscuit,badam\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"buscuit,badam\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51'),
(3, '4495fef4-1d28-427e-8126-815a9a984ffb', 'database', 'default', '{\"uuid\":\"4495fef4-1d28-427e-8126-815a9a984ffb\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"singara(breakfast)\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"singara(breakfast)\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51'),
(4, '7ecc1aff-3bb5-4150-8048-54ce88e6e2f0', 'database', 'default', '{\"uuid\":\"7ecc1aff-3bb5-4150-8048-54ce88e6e2f0\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:9:\\\"ice cream\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"ice cream\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51'),
(5, 'f814b60b-5c06-43de-a48e-513e174092e4', 'database', 'default', '{\"uuid\":\"f814b60b-5c06-43de-a48e-513e174092e4\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:19:\\\"labang,borhani,mojo\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"labang,borhani,mojo\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51'),
(6, '225088b6-a74f-4bb2-945e-fbf831aa33b8', 'database', 'default', '{\"uuid\":\"225088b6-a74f-4bb2-945e-fbf831aa33b8\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:14:\\\"peyara,kasundi\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"peyara,kasundi\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(7, 'c927f8e3-c1d5-4e1e-a456-6a718c75fffe', 'database', 'default', '{\"uuid\":\"c927f8e3-c1d5-4e1e-a456-6a718c75fffe\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"singara(breakfast)\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"singara(breakfast)\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51'),
(8, '0cc9cc28-a422-4630-b125-8302615539e1', 'database', 'default', '{\"uuid\":\"0cc9cc28-a422-4630-b125-8302615539e1\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:14:\\\"Mojo- 4(litre)\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"Mojo- 4(litre)\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51'),
(9, 'e2d4728e-0646-42e1-bfe8-187b989fbc10', 'database', 'default', '{\"uuid\":\"e2d4728e-0646-42e1-bfe8-187b989fbc10\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:14:\\\"Ice cream,Mojo\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"Ice cream,Mojo\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51'),
(10, '5fa15165-fd1d-488e-ab13-5b3e7396fb71', 'database', 'default', '{\"uuid\":\"5fa15165-fd1d-488e-ab13-5b3e7396fb71\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"singara(breakfast)\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"singara(breakfast)\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51'),
(11, '8b8eeaf6-c862-454d-90d9-347aaa383421', 'database', 'default', '{\"uuid\":\"8b8eeaf6-c862-454d-90d9-347aaa383421\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:14:\\\"Labang,RC,mojo\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"Labang,RC,mojo\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51'),
(12, '0c9a06ad-bd1f-4c2c-b1f5-8eef47dc8777', 'database', 'default', '{\"uuid\":\"0c9a06ad-bd1f-4c2c-b1f5-8eef47dc8777\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:28:\\\"Peyara,biscuit,badam,kasundi\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"Peyara,biscuit,badam,kasundi\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(13, '2ca095c3-655a-450b-a53a-68be23a37627', 'database', 'default', '{\"uuid\":\"2ca095c3-655a-450b-a53a-68be23a37627\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:12:\\\"labang,matha\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mime\\Exception\\RfcComplianceException: Email \"labang,matha\" does not comply with addr-spec of RFC 2822. in /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/mime/Address.php:54\nStack trace:\n#0 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(246): Symfony\\Component\\Mime\\Address->__construct()\n#1 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Message.php(110): Illuminate\\Mail\\Message->addAddresses()\n#2 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(433): Illuminate\\Mail\\Message->to()\n#3 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(207): Illuminate\\Mail\\Mailable->buildRecipients()\n#4 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(317): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#5 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(205): Illuminate\\Mail\\Mailer->send()\n#6 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale()\n#8 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(83): Illuminate\\Mail\\Mailable->send()\n#9 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle()\n#10 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#12 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#13 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#14 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#15 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#16 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#17 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#18 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#19 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#20 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#21 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#22 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#23 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call()\n#24 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\\Queue\\Worker->process()\n#26 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\\Queue\\Worker->runJob()\n#27 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon()\n#28 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#29 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#32 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#33 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\\Container\\BoundMethod::call()\n#34 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\\Container\\Container->call()\n#35 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#36 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Symfony\\Component\\Console\\Command\\Command->run()\n#37 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(1096): Illuminate\\Console\\Command->run()\n#38 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand()\n#39 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/symfony/console/Application.php(175): Symfony\\Component\\Console\\Application->doRun()\n#40 /usr/local/apache2/htdocs/gplexCRM_resource/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\\Component\\Console\\Application->run()\n#41 /usr/local/apache2/htdocs/gplexCRM_resource/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#42 {main}', '2024-11-05 08:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(115, 'default', '{\"uuid\":\"1e8f25af-9d62-48f3-963f-625fd3dbda1a\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:18:\\\"khadija@genusys.us\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1730803383, 1730803383),
(116, 'default', '{\"uuid\":\"87fffdcb-30c1-4e52-bb4d-075ce7e9e6b9\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:26:\\\"akterkhadija309@genusys.us\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1730803383, 1730803383),
(117, 'default', '{\"uuid\":\"ff0e2ca3-05fc-4957-a9c2-c31bdeb12bfe\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:20:\\\"khadija+1@genusys.us\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1730803383, 1730803383),
(118, 'default', '{\"uuid\":\"ad199b5f-3712-4c99-b716-476e0fdd278b\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:16:\\\"Faisal@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1730803383, 1730803383),
(119, 'default', '{\"uuid\":\"afad3600-e0b0-4286-96f9-8e40eff6be9c\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:16:\\\"shoshe@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1730803383, 1730803383),
(120, 'default', '{\"uuid\":\"665b237a-1665-41c8-b40b-83cbeed51683\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:15:\\\"rakib@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1730803383, 1730803383),
(121, 'default', '{\"uuid\":\"813f12a4-d919-4807-892d-7f18950f5566\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:13:\\\"wer@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1730803383, 1730803383),
(122, 'default', '{\"uuid\":\"91130cc7-617b-4a3c-959f-4ec89acb87d5\",\"displayName\":\"App\\\\Mail\\\\BulkEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:18:\\\"App\\\\Mail\\\\BulkEmail\\\":4:{s:7:\\\"subject\\\";s:13:\\\"Moni template\\\";s:4:\\\"body\\\";s:26:\\\"<p>Moni email template<\\/p>\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:14:\\\"rony@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1730803383, 1730803383);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` char(50) NOT NULL,
  `sub_name` char(50) DEFAULT NULL,
  `show_in_menu` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `name`, `sub_name`, `show_in_menu`, `status`, `created_at`, `updated_at`) VALUES
(49, NULL, 'Products', 'products', 1, 1, '2024-07-08 00:11:35', '2024-07-08 00:11:35'),
(50, 49, 'Product List', 'product-list', 1, 1, '2024-07-08 00:12:04', '2024-07-08 00:12:04'),
(51, 49, 'Add Product', 'add-product', 1, 1, '2024-07-08 00:12:24', '2024-07-08 00:12:24'),
(119, NULL, 'User Management', NULL, 1, 1, '2024-09-17 23:31:53', '2024-09-17 23:31:53'),
(209, 49, 'Add Category', 'category-create', 1, 1, '2025-07-08 19:51:50', '2025-07-08 19:51:50'),
(120, 119, 'User List', 'users.index', 1, 1, '2024-09-17 23:33:14', '2024-09-17 23:33:14'),
(121, 119, 'User Show', 'user.show', 0, 1, '2024-09-17 23:34:32', '2024-09-17 23:35:38'),
(122, 119, 'Create User', 'create-user', 1, 1, '2024-09-17 23:36:09', '2024-09-17 23:36:09'),
(124, 119, 'User Edit', 'user.edit', 0, 1, '2024-09-17 23:37:05', '2024-09-17 23:37:05'),
(126, 119, 'User Destroy', 'user.destroy', 0, 1, '2024-09-17 23:38:21', '2024-09-17 23:38:21'),
(128, 119, 'Profile Edit', 'profile-edit', 1, 1, '2024-09-17 23:39:55', '2024-09-17 23:39:55'),
(129, 119, 'User Details', 'show', 0, 1, '2024-09-17 23:40:58', '2024-09-17 23:40:58'),
(130, 119, 'Profile Update', 'profile-update', 0, 1, '2024-09-17 23:41:42', '2024-09-17 23:41:42'),
(208, 49, 'Category List', 'category-list', 1, 1, '2025-07-08 19:51:06', '2025-07-08 19:51:06'),
(132, 119, 'Update Profile Image', 'update-profile-image', 0, 1, '2024-09-17 23:42:47', '2024-09-17 23:42:47'),
(133, 119, 'Permissions', 'permission.index', 1, 1, '2024-09-17 23:47:41', '2024-09-17 23:48:28'),
(134, 119, 'Permission Show', 'permission.show', 0, 1, '2024-09-17 23:49:11', '2024-09-17 23:49:11'),
(135, 119, 'Create Permission', 'create-permission', 1, 1, '2024-09-17 23:49:43', '2024-09-17 23:49:43'),
(137, 119, 'Permission Edit', 'permission.edit', 0, 1, '2024-09-17 23:51:38', '2024-09-17 23:51:38'),
(139, 119, 'Permission Show', 'permission_show', 0, 1, '2024-09-17 23:52:43', '2024-09-17 23:52:43'),
(140, 119, 'Permission Destroy', 'permission.destroy', 0, 1, '2024-09-17 23:53:31', '2024-09-17 23:53:31'),
(142, 119, 'Roles', 'role-list', 1, 1, '2024-09-17 23:54:50', '2024-09-17 23:54:50'),
(143, 119, 'Role Show', 'role.show', 0, 1, '2024-09-17 23:55:15', '2024-09-17 23:55:15'),
(144, 119, 'Create Role', 'role-create', 1, 1, '2024-09-17 23:56:51', '2024-09-17 23:56:51'),
(146, 119, 'Role Edit', 'role-edit', 0, 1, '2024-09-17 23:58:11', '2024-09-17 23:58:11'),
(148, 119, 'Role Destroy', 'role-destroy', 0, 1, '2024-09-17 23:59:07', '2024-09-17 23:59:07'),
(170, 49, 'Product Delete', 'product-delete', 0, 1, '2024-09-18 00:38:50', '2024-09-18 00:38:50'),
(171, 49, 'Product Show', 'product-show', 0, 1, '2024-09-18 00:39:21', '2024-09-18 00:39:21'),
(172, 49, 'Product Edit', 'product-edit', 0, 1, '2024-09-18 00:39:55', '2024-09-23 21:57:57'),
(206, NULL, 'Orders', 'orders', 1, 1, '2024-11-20 20:22:42', '2024-11-20 20:22:42'),
(207, 206, 'All Orders', 'orders-index', 1, 1, '2024-11-20 20:24:18', '2024-11-20 20:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_19_033501_create_sessions_table', 1),
(6, '2023_11_19_051107_create_products_table', 1),
(7, '2023_12_21_061156_create_salesman_table;', 1),
(8, '2024_01_03_072535_create_country_table', 1),
(9, '2024_01_03_072636_create_state_table', 1),
(10, '2024_01_03_085517_create_branches_table', 1),
(11, '2024_01_03_085813_create_city_table', 1),
(12, '2024_01_23_105143_create_sms_templates_table', 1),
(13, '2024_01_23_122842_create_email_templates_table', 1),
(14, '2024_01_29_100457_create_table_sms_queue_table', 1),
(15, '2024_01_29_100510_create_table_sms_log_table', 1),
(16, '2024_02_01_035044_add_additional_fields_to_users_table', 1),
(17, '2024_02_07_074144_create_email_queue_table', 2),
(18, '2024_02_07_074625_create_email_log_table', 3),
(19, '2024_04_24_090556_create_leads_table', 4),
(22, '2024_04_25_110936_create_promotions_table', 5),
(23, '2024_04_25_111147_create_campaigns_table', 6),
(24, '2024_04_28_095043_create_leads_forms_table', 7),
(25, '2024_04_28_103607_create_lead_form_details_table', 8),
(26, '2024_04_28_121706_create_leads_table', 9),
(27, '2024_04_28_124539_create_leads_custom_data_table', 10),
(28, '2024_04_28_125650_create_leads_form_json_table', 11),
(29, '2024_04_29_034649_create_lead_survey_people_table', 12),
(30, '2024_04_29_035234_create_lead_survey_child_table', 13),
(31, '2024_04_30_044646_create_users_table', 14),
(32, '2024_04_30_050803_create_leads_form_table', 15),
(33, '2024_04_30_053636_create_lead_form_details_table', 16),
(34, '2024_04_30_074713_create_permission_groups_table', 17),
(35, '2024_04_30_073603_create_permissions_table', 18),
(36, '2024_04_30_092116_create_roles_table', 19),
(37, '2024_04_30_101349_create_roles_table', 20),
(38, '2024_04_30_101511_create_permissions_table', 21),
(39, '2024_04_30_102006_create_roles_permissions_table', 22),
(40, '2024_05_13_092102_create_agents_table', 23),
(41, '2024_05_13_095540_create_agents_table', 24),
(42, '2024_05_13_130323_create_agents_table', 25),
(43, '2024_05_13_131409_create_agents_table', 26),
(44, '2024_05_15_092501_create_users_table', 27),
(45, '2024_05_15_095923_create_agents_table', 28),
(46, '2024_05_16_085211_create_users_table', 29),
(47, '2024_05_16_085710_create_agents_table', 30),
(48, '2024_05_20_041755_create_users_table', 31),
(49, '2024_05_20_042013_create_agents_table', 32),
(50, '2024_05_28_034337_create_lead_form_details_table', 33),
(51, '2024_05_28_034612_create_lead_form_details_table', 34);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(20) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `area` enum('Inside Dhaka','Outside Dhaka') DEFAULT NULL,
  `address` text DEFAULT NULL,
  `product_code` varchar(20) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_color` varchar(50) DEFAULT NULL,
  `product_size` varchar(10) DEFAULT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `shipping_charge` decimal(10,2) DEFAULT 0.00,
  `payable_amount` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) DEFAULT 0.00,
  `status` enum('New','Pending','Processing','Completed','Cancelled') DEFAULT 'New',
  `order_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_no`, `customer_name`, `mobile_number`, `area`, `address`, `product_code`, `product_name`, `product_color`, `product_size`, `unit_price`, `quantity`, `total_price`, `sub_total`, `shipping_charge`, `payable_amount`, `discount`, `status`, `order_date`) VALUES
(1, '32356', 'Md.Hasan Ali', '01731566784', 'Inside Dhaka', '442/5,senpara parbata', '45678', 'Panjabi', 'White', 'M', 25.00, 2, 50.00, 50.00, 60.00, 110.00, 0.00, 'New', '2024-11-21 01:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_code` varchar(20) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_color` varchar(50) DEFAULT NULL,
  `product_size` varchar(10) DEFAULT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `mprize` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(11) NOT NULL,
  `invoice_no` varchar(20) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `area` enum('Inside Dhaka','Outside Dhaka') DEFAULT NULL,
  `contact_address` text DEFAULT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `order_tax` decimal(10,2) DEFAULT 0.00,
  `shipping_charge` decimal(10,2) DEFAULT 0.00,
  `discount` decimal(10,2) DEFAULT 0.00,
  `payable_amount` decimal(10,2) NOT NULL,
  `status` enum('New','Pending','Processing','Completed','Cancelled') DEFAULT 'New',
  `order_date` datetime DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_id`, `invoice_no`, `customer_id`, `mobile_number`, `area`, `contact_address`, `sub_total`, `order_tax`, `shipping_charge`, `discount`, `payable_amount`, `status`, `order_date`, `created_at`, `updated_at`) VALUES
(1, '32356', 7, '0173145672', 'Inside Dhaka', 'senpara', 1200.00, 0.00, 40.00, 0.00, 1240.00, 'New', '2024-11-25 01:39:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `permission_group_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'gpleCRMToken', '0970f2e9be65303bee4b46dd2c7cf229d55ec3a94520768872b4fab7196431a9', '[\"*\"]', NULL, NULL, '2024-04-30 03:39:52', '2024-04-30 03:39:52'),
(2, 'App\\Models\\User', 1, 'gpleCRMToken', '3d2c3352dd17459faac06bf4f2a2f7352dca86f488321ddaa0a3e5627e64f44a', '[\"*\"]', NULL, NULL, '2024-05-04 23:55:07', '2024-05-04 23:55:07'),
(3, 'App\\Models\\User', 1, 'gpleCRMToken', 'a0c7fbeb9117eb8a2cd220b47e0381b035218a70fb95615f1a17c88d0891510f', '[\"*\"]', '2024-05-05 00:32:16', NULL, '2024-05-04 23:56:06', '2024-05-05 00:32:16'),
(4, 'App\\Models\\User', 1, 'gpleCRMToken', '2858a3a1658d14c48d2b22e9737ece0c79a33dbd83fbdb008950f3c88f4ae3fe', '[\"*\"]', '2024-05-05 00:31:57', NULL, '2024-05-05 00:30:34', '2024-05-05 00:31:57'),
(5, 'App\\Models\\User', 1, 'gpleCRMToken', '6834f92012607dce3757beb3b051fa7ca816ed66697533035e16374b9c9b8a2b', '[\"*\"]', '2024-05-07 06:48:27', NULL, '2024-05-05 01:25:59', '2024-05-07 06:48:27'),
(6, 'App\\Models\\User', 1, 'gpleCRMToken', 'c7e87624bf37316db967aa11e69d29ce25986a898828d8faa7eba29d5a7098ea', '[\"*\"]', '2024-05-07 06:47:52', NULL, '2024-05-05 02:58:12', '2024-05-07 06:47:52'),
(7, 'App\\Models\\User', 1, 'gpleCRMToken', '068b7d9dcfdb1998324d54275c37856078ae44277a5afa73167c97166523d052', '[\"*\"]', '2024-05-05 03:53:54', NULL, '2024-05-05 03:38:15', '2024-05-05 03:53:54'),
(8, 'App\\Models\\User', 1, 'gpleCRMToken', '474a0f9194148a5ea7b78e5bca25ba2b66371ebdb41ce38c1dc2fe813e164d90', '[\"*\"]', NULL, NULL, '2024-05-05 03:40:34', '2024-05-05 03:40:34'),
(9, 'App\\Models\\User', 1, 'gpleCRMToken', 'e8de52ea86403848356bf96d04232ede81bbbe05b0498cf95bf27b2261836c99', '[\"*\"]', '2024-05-07 06:48:24', NULL, '2024-05-05 03:40:58', '2024-05-07 06:48:24'),
(10, 'App\\Models\\User', 4, 'gpleCRMToken', '70a6abf5b1b961e39cb3bd6f78bbb5b45d4cd876ab50987da5839dd174293e7d', '[\"*\"]', NULL, NULL, '2024-05-13 06:20:17', '2024-05-13 06:20:17'),
(11, 'App\\Models\\User', 2, 'gpleCRMToken', '860eca8582c2c8f2713aca3eed8704c90572d2ca9106d105921c062dee8a89d3', '[\"*\"]', NULL, NULL, '2024-05-15 04:44:35', '2024-05-15 04:44:35'),
(12, 'App\\Models\\User', 1, 'gpleCRMToken', 'e7afa19f6d684a2fee3b5d82d52b7263ab841717e950174af3798747a4c73253', '[\"*\"]', NULL, NULL, '2024-05-16 03:17:59', '2024-05-16 03:17:59'),
(13, 'App\\Models\\User', 1, 'gpleCRMToken', 'c64612dccc667876dcf0137036d1e5ca032f82ac9369207de24b21ff022c258d', '[\"*\"]', NULL, NULL, '2024-05-19 22:24:44', '2024-05-19 22:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `product_specification` text DEFAULT NULL,
  `key_features` text DEFAULT NULL,
  `club_point` int(11) DEFAULT 0,
  `how_to_order` text DEFAULT NULL,
  `return_policy` text DEFAULT NULL,
  `product_short_message` varchar(255) DEFAULT NULL,
  `product_type` char(25) DEFAULT NULL,
  `product_cost` double(20,2) DEFAULT NULL,
  `product_value` double(20,2) DEFAULT NULL,
  `old_price` double(20,2) DEFAULT NULL,
  `product_code` char(20) DEFAULT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `img_path` varchar(180) DEFAULT NULL,
  `img_path_2` varchar(255) DEFAULT NULL,
  `img_path_3` varchar(255) DEFAULT NULL,
  `img_path_4` varchar(255) DEFAULT NULL,
  `img_path_5` varchar(255) DEFAULT NULL,
  `img_path_6` varchar(255) DEFAULT NULL,
  `max_purchase_limit` tinyint(4) DEFAULT NULL,
  `stock_status` char(15) NOT NULL DEFAULT 'In Stock',
  `stock_quantity` int(11) NOT NULL DEFAULT 1,
  `xxs_stock` int(11) NOT NULL DEFAULT 0,
  `xs_stock` int(11) NOT NULL DEFAULT 0,
  `s_stock` int(11) NOT NULL DEFAULT 0,
  `m_stock` int(11) NOT NULL DEFAULT 0,
  `l_stock` int(11) NOT NULL DEFAULT 0,
  `xl_stock` int(11) NOT NULL DEFAULT 0,
  `xxl_stock` int(11) NOT NULL DEFAULT 0,
  `xxxl_stock` int(11) NOT NULL DEFAULT 0,
  `xxxxl_stock` int(11) NOT NULL DEFAULT 0,
  `colors` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `product_tag` varchar(100) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `description`, `product_specification`, `key_features`, `club_point`, `how_to_order`, `return_policy`, `product_short_message`, `product_type`, `product_cost`, `product_value`, `old_price`, `product_code`, `discount_price`, `img_path`, `img_path_2`, `img_path_3`, `img_path_4`, `img_path_5`, `img_path_6`, `max_purchase_limit`, `stock_status`, `stock_quantity`, `xxs_stock`, `xs_stock`, `s_stock`, `m_stock`, `l_stock`, `xl_stock`, `xxl_stock`, `xxxl_stock`, `xxxxl_stock`, `colors`, `status`, `product_tag`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(30, 4, NULL, '6 Pcs Combo Pack', '<p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">Fabrics: Oxford Cotton<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Size: M, L,XL, 2XL,3XL<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Made in Bangladesh<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Measurement In Inch<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">M= Chest-38, Length-28<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">L= Chest-40, Length-29<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">XL= Chest-42, Length-30<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">2XL= Chest-44, Lenth-31</p><p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">3XL= Chest-46, Lenth-31</p>', '<p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">Fabrics: Oxford Cotton<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Size: M, L,XL, 2XL,3XL<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Made in Bangladesh<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Measurement In Inch<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">M= Chest-38, Length-28<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">L= Chest-40, Length-29<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">XL= Chest-42, Length-30<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">2XL= Chest-44, Lenth-31</p><p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">3XL= Chest-46, Lenth-31</p>', NULL, 3, NULL, NULL, NULL, 'Virtual', 500.00, 550.00, NULL, '33333', 20.00, 'product_1696444302_9016_1751533660.jpg', 'product_1696444302_9016_1751533660.jpg', 'product_1696444302_9016_1751533660.jpg', 'product_1696444302_9016_1751533660.jpg', 'product_1696444302_9016_1751533660.jpg', 'product_1696444302_9016_1751533660.jpg', 10, 'In Stock', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'orange,green', 1, 'New Arrival', 1, NULL, '2025-07-03 09:07:40', '2025-07-03 09:07:40'),
(31, 4, NULL, '4 Pcs Combo Pack', '<p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">Mens Full Sleeve Casual Shirt</p><p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">Fabrics: Oxford Cotton<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Size: M, L,XL, 2XL,3XL<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Made in Bangladesh<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Measurement In Inch<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">M= Chest-38, Length-28<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">L= Chest-40, Length-29<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">XL= Chest-42, Length-30<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">2XL= Chest-44, Lenth-31</p><p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">3XL= Chest-46, Lenth-31</p>', '<p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">Fabrics: Oxford Cotton<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Size: M, L,XL, 2XL,3XL<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Made in Bangladesh<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Measurement In Inch<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">M= Chest-38, Length-28<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">L= Chest-40, Length-29<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">XL= Chest-42, Length-30<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">2XL= Chest-44, Lenth-31</p><p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">3XL= Chest-46, Lenth-31</p>', NULL, 3, NULL, NULL, NULL, 'Virtual', 600.00, 650.00, NULL, '444444', 20.00, 'product_1696442845_5303_1751533828.jpg', 'product_1696442845_5303_1751533828.jpg', 'product_1696442845_5303_1751533828.jpg', 'product_1696442845_5303_1751533828.jpg', 'product_1696442845_5303_1751533828.jpg', 'product_1696442845_5303_1751533828.jpg', 7, 'In Stock', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'orange,green', 1, 'New Arrival', 1, NULL, '2025-07-03 09:10:28', '2025-07-03 09:10:28'),
(32, 4, NULL, '6 Pcs Combo Pack', '<p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">Fabrics: Oxford Cotton<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Size: M, L,XL, 2XL,3XL<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Made in Bangladesh<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Measurement In Inch<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">M= Chest-38, Length-28<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">L= Chest-40, Length-29<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">XL= Chest-42, Length-30<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">2XL= Chest-44, Lenth-31</p><p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">3XL= Chest-46, Lenth-31</p>', '<p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">Fabrics: Oxford Cotton<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Size: M, L,XL, 2XL,3XL<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Made in Bangladesh<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">Measurement In Inch<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">M= Chest-38, Length-28<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">L= Chest-40, Length-29<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">XL= Chest-42, Length-30<br style=\"font-family: &quot;Work Sans&quot;, sans-serif;\">2XL= Chest-44, Lenth-31</p><p style=\"font-family: Lorenza-lgdp5; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\">3XL= Chest-46, Lenth-31</p>', NULL, 2, NULL, NULL, NULL, 'Virtual', 700.00, 750.00, NULL, '66666', 20.00, 'product_1696444301_3256_1751534297.jpg', 'product_1696444301_3256_1751534297.jpg', 'product_1696444301_3256_1751534297.jpg', 'product_1696444301_3256_1751534297.jpg', 'product_1696444301_3256_1751534297.jpg', 'product_1696444301_3256_1751534297.jpg', NULL, 'In Stock', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'orange,green', 1, 'New Arrival', 1, NULL, '2025-07-03 09:18:17', '2025-07-03 09:18:17'),
(33, 4, NULL, '4 Pcs Combo Pack', '<p><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">Fabrics: Oxford Cotton</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">Size: M, L,XL, 2XL,3XL</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">Made in Bangladesh</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">Measurement In Inch</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">M= Chest-38, Length-28</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">L= Chest-40, Length-29</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">XL= Chest-42, Length-30</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">2XL= Chest-44, Lenth-31</span></p>', '<p><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">Fabrics: Oxford Cotton</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">Size: M, L,XL, 2XL,3XL</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">Made in Bangladesh</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">Measurement In Inch</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">M= Chest-38, Length-28</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">L= Chest-40, Length-29</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">XL= Chest-42, Length-30</span><br style=\"font-family: &quot;Work Sans&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px;\"><span style=\"font-family: Lorenza-lgdp5; color: rgb(33, 37, 41); font-size: 16px;\">2XL= Chest-44, Lenth-31</span></p>', NULL, 2, NULL, NULL, NULL, 'Virtual', 800.00, 880.00, NULL, '434343', 20.00, 'product_1696442341_5286_1751535197.jpg', 'product_1696442341_5286_1751535197.jpg', 'product_1696442341_5286_1751535197.jpg', 'product_1696442341_5286_1751535197.jpg', 'product_1696442341_5286_1751535197.jpg', 'product_1696442341_5286_1751535197.jpg', 20, 'In Stock', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'orange,green', 1, 'New Arrival', 1, NULL, '2025-07-03 09:33:17', '2025-07-03 09:33:17'),
(34, 9, NULL, 'PREMIUM DENIM PANT', '<ul style=\"font-family: &quot;Work Sans&quot;, sans-serif; padding-left: 0px; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Semi Narrow Stretch Fit Jeans</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Export Quality Jeans Pants</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Fabric:NEED Denim Cotton</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Stretchable</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Semi Narrow Fit</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Traditional 4 Pocket</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Soft fabric</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Fashionable and comfortable</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Size: 28,30,32,34,36,38</span></li></ul>', '<ul style=\"font-family: &quot;Work Sans&quot;, sans-serif; padding-left: 0px; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Semi Narrow Stretch Fit Jeans</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Export Quality Jeans Pants</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Fabric:NEED Denim Cotton</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Stretchable</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Semi Narrow Fit</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Traditional 4 Pocket</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Soft fabric</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Fashionable and comfortable</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Size: 28,30,32,34,36,38</span></li></ul>', NULL, 2, NULL, NULL, NULL, 'Physical', 500.00, 550.00, NULL, '45454', 20.00, 'product_1742320005_6196_1751544273.jpg', 'product_1742320005_6196_1751544273.jpg', 'product_1742320005_6196_1751544273.jpg', 'product_1742320005_6196_1751544273.jpg', 'product_1742320005_6196_1751544273.jpg', 'product_1742320005_6196_1751544273.jpg', 8, 'In Stock', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'orange,green', 1, 'Top Selling', 1, 1, '2025-07-03 11:54:28', '2025-07-03 12:04:33'),
(35, 9, NULL, 'Denim pant', '<ul style=\"font-family: &quot;Work Sans&quot;, sans-serif; padding-left: 0px; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Semi Narrow Stretch Fit Jeans</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Export Quality Jeans Pants</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Fabric:NEED Denim Cotton</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Stretchable</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Semi Narrow Fit</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Traditional 4 Pocket</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Soft fabric</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Fashionable and comfortable</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Size: 28,30,32,34,36,38</span></li></ul>', '<ul style=\"font-family: &quot;Work Sans&quot;, sans-serif; padding-left: 0px; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Semi Narrow Stretch Fit Jeans</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Export Quality Jeans Pants</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Fabric:NEED Denim Cotton</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Stretchable</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Semi Narrow Fit</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Traditional 4 Pocket</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Soft fabric</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Fashionable and comfortable</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Size: 28,30,32,34,36,38</span></li></ul>', NULL, 4, NULL, NULL, NULL, 'Physical', 788.00, 777.00, NULL, '4545454', 77.00, 'product_1742321142_9278_1751544103.jpg', 'product_1742321142_9278_1751544103.jpg', 'product_1742321142_9278_1751544103.jpg', 'product_1742321142_9278_1751544103.jpg', 'product_1742321142_9278_1751544103.jpg', 'product_1742321142_9278_1751544103.jpg', 33, 'In Stock', 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'orange,green', 1, 'Top Selling', 1, 1, '2025-07-03 12:01:43', '2025-07-03 12:16:47'),
(36, 9, NULL, 'premium Truser', '<ul style=\"font-family: &quot;Work Sans&quot;, sans-serif; padding-left: 0px; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><li style=\"list-style: none;\">Product Type: Men\'s Trouser</li><li style=\"list-style: none;\">Fabric:&nbsp;interlock china febric</li><li style=\"list-style: none;\">Production Country: Bangladesh</li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Size:- M, L, XL,XXL</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Trouser Measurements:</span></li><li style=\"list-style: none;\"><br></li></ul>', '<ul style=\"font-family: &quot;Work Sans&quot;, sans-serif; padding-left: 0px; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><li style=\"list-style: none;\">Product Type: Men\'s Trouser</li><li style=\"list-style: none;\">Fabric:&nbsp;interlock china febric</li><li style=\"list-style: none;\">Production Country: Bangladesh</li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Size:- M, L, XL,XXL</span></li><li style=\"list-style: none;\"><span style=\"font-weight: bolder;\">Trouser Measurements:</span></li><li style=\"list-style: none;\"><br></li></ul>', NULL, 2, NULL, NULL, NULL, 'Physical', 900.00, 950.00, 1500.00, '35644', 20.00, 'product_1750764210_6921_1751545371.jpg', 'product_1750764210_6921_1751545371_1751918315_img_path_2.jpg', 'product_1750764210_6921_1751545371_1751918315_img_path_3.jpg', NULL, NULL, NULL, 2, 'In Stock', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 'Top Selling', 1, 1, '2025-07-03 12:21:17', '2025-07-07 19:58:35'),
(37, 9, NULL, 'Men\'s Stylish Premium Cargo', '<ul style=\"font-family: &quot;Work Sans&quot;, sans-serif; padding-left: 0px; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><li style=\"list-style: none;\">Men\'s Stylish Cargo Pant</li><li style=\"list-style: none;\">Fabrics: Kaizer Cotton Febrics</li><li style=\"list-style: none;\">Quality: High Quality</li><li style=\"list-style: none;\">Size: 30-31, 32-33, 34-35, 36-37,38-39,40-41</li><li style=\"list-style: none;\"><i><span style=\"font-weight: bolder;\">Measurements:</span></i></li><li style=\"list-style: none;\">30= Waist-30-31, Length-38</li><li style=\"list-style: none;\">32= Waist-32-33, Length-38.5</li><li style=\"list-style: none;\">34= Waist-34-35, Length-39</li><li style=\"list-style: none;\">36= Waist-36-37, Length-39.5</li><li style=\"list-style: none;\">38= Waist-38-39, Length-40</li><li style=\"list-style: none;\">40= Waist-40-41, Length-40.5</li></ul>', '<ul style=\"font-family: &quot;Work Sans&quot;, sans-serif; padding-left: 0px; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><li style=\"list-style: none;\">Men\'s Stylish Cargo Pant</li><li style=\"list-style: none;\">Fabrics: Kaizer Cotton Febrics</li><li style=\"list-style: none;\">Quality: High Quality</li><li style=\"list-style: none;\">Size: 30-31, 32-33, 34-35, 36-37,38-39,40-41</li><li style=\"list-style: none;\"><i><span style=\"font-weight: bolder;\">Measurements:</span></i></li><li style=\"list-style: none;\">30= Waist-30-31, Length-38</li><li style=\"list-style: none;\">32= Waist-32-33, Length-38.5</li><li style=\"list-style: none;\">34= Waist-34-35, Length-39</li><li style=\"list-style: none;\">36= Waist-36-37, Length-39.5</li><li style=\"list-style: none;\">38= Waist-38-39, Length-40</li><li style=\"list-style: none;\">40= Waist-40-41, Length-40.5</li></ul>', NULL, NULL, '<ul data-v-1b296865=\"\" style=\"font-family: &quot;Work Sans&quot;, sans-serif; padding-left: 0px; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><li data-v-1b296865=\"\" class=\"h-b-li\" style=\"list-style: square; padding: 2px;\">Select number of product you want to buy.</li><li data-v-1b296865=\"\" class=\"h-b-li\" style=\"list-style: square; padding: 2px;\">Click&nbsp;<span data-v-1b296865=\"\" style=\"font-weight: bolder;\">Add To Cart</span>&nbsp;Button</li><li data-v-1b296865=\"\" class=\"h-b-li\" style=\"list-style: square; padding: 2px;\">Then go to checkout page</li><li data-v-1b296865=\"\" class=\"h-b-li\" style=\"list-style: square; padding: 2px;\">If you are a new user, please click on Sign Up.provide us your valid information.</li><li data-v-1b296865=\"\" class=\"h-b-li\" style=\"list-style: square; padding: 2px;\">Complete your checkout, we received your order, and for order confirmation or customer service contact with you</li></ul>', '<ul data-v-1b296865=\"\" style=\"font-family: &quot;Work Sans&quot;, sans-serif; padding-left: 0px; margin-bottom: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><li data-v-1b296865=\"\" class=\"h-b-li\" style=\"list-style: square; padding: 2px;\">If your product is damaged, defective, incorrect or incomplete at the time of delivery, please file a return request on call to customer care support number within 3 days of the delivery date</li><li data-v-1b296865=\"\" class=\"h-b-li\" style=\"list-style: square; padding: 2px;\">Change of mind is not applicable as a Return Reason for this product</li></ul>', NULL, 'Physical', 900.00, 950.00, NULL, '2342232', 50.00, 'product_1750790489_8946_1751545618.jpg', 'product_1750790489_8946_1751545618_1751918268_img_path_2.jpg', 'product_1750790489_8946_1751545618_1751918268_img_path_3.jpg', 'product_1750790489_8946_1751545618_1751918268_img_path_4.jpg', 'product_1750790489_8946_1751545618_1751918268_img_path_5.jpg', NULL, 21, 'In Stock', 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 'Top Selling', 1, 1, '2025-07-03 12:26:58', '2025-07-07 19:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `menu_details` longtext DEFAULT NULL,
  `permission_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `permission_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0 => Inactive, 1 => Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `menu_details`, `permission_details`, `permission_ids`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Super Admin', 'super_admin', '{\"Products\":{\"product-list\":\"Product List\",\"add-product\":\"Add Product\",\"category-create\":\"Add Category\",\"category-list\":\"Category List\"},\"Orders\":{\"orders-index\":\"All Orders\"}}', '{\"Products\":{\"product-list\":\"Product List\",\"add-product\":\"Add Product\",\"category-create\":\"Add Category\",\"category-list\":\"Category List\",\"product-delete\":\"Product Delete\",\"product-show\":\"Product Show\",\"product-edit\":\"Product Edit\"},\"Orders\":{\"orders-index\":\"All Orders\"}}', '{\"Products\":[\"50\",\"51\",\"209\",\"208\",\"170\",\"171\",\"172\"],\"Orders\":[\"207\"]}', 1, '2024-06-01 22:47:22', '2025-07-08 19:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `role_id` char(16) NOT NULL,
  `permission_id` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `slider_title` varchar(50) NOT NULL,
  `slider_image` varchar(255) DEFAULT NULL,
  `slider_description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_image`, `slider_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Title one', '469035975_122123887214567360_9175044117079506625_n_1751912672.jpg', 'Slider Description', 1, '2025-06-24 20:33:04', '2025-07-07 18:24:32'),
(2, 'Title Two', 'S1__1751222034.jpg', 'Slider Description 2', 1, '2025-06-24 20:33:32', '2025-06-29 18:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` char(20) DEFAULT NULL,
  `username` varchar(191) DEFAULT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `user_type` char(16) DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `profile_image` varchar(191) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role_id` char(16) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `first_name`, `last_name`, `email`, `phone_number`, `user_type`, `gender`, `profile_image`, `address`, `role_id`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, '6798657284978', 'root', 'Khan1', 'Riyad', 'khan@gmail.com', '01731415537', 'admin', NULL, 'e3_1733682773.jpg', NULL, '5', NULL, '$2y$12$xMRtVlhnTNai8mxkNWTVSeY4ci2VTywBqCwfGmArbHVmJ7WbQ7.1u', NULL, '1', '2024-05-19 22:24:44', '2024-12-08 18:32:53'),
(4, '7620974445398', NULL, 'jaman', 'hasan', 'jaman@gmail.com', NULL, 'agent', NULL, '', NULL, NULL, NULL, '$2y$12$Ziq2l7sIjCx1o6wQOheqC.A.8AW/vEYK51qVZL93NuW7UzrgQKI/C', NULL, NULL, '2024-05-26 23:59:32', '2024-05-29 22:43:46'),
(8, '2633647266941', NULL, 'xxx', 'yyy', 'xxx@gmail', '0176465564qst', 'user', 'Female', NULL, NULL, '8', NULL, '$2y$12$afb9oGqqf9ekVnvjf2Wx2.DhpaQWCgISf4X8hA5MCJBExcJ8K3V/i', NULL, '1', '2024-06-19 21:10:28', '2024-06-19 22:14:20'),
(19, '7652749967907', NULL, 'sayma', 'sarker', 'sayma@gmail.com', '01658987452e', 'user', 'female', NULL, NULL, NULL, NULL, '$2y$12$31hzRU8V8I1tc7GEO3rB4uin337ULzmVB2..9G8exE5QN3uqEAebS', NULL, '1', '2024-06-29 23:33:21', '2024-06-29 23:33:21'),
(20, '9286312105337', 'safi', 'safi', 'alam', 'safi@gmail.com', '01658974563', 'user', NULL, 'evidence_1719730076.PNG', NULL, '20', NULL, '$2y$12$xMRtVlhnTNai8mxkNWTVSeY4ci2VTywBqCwfGmArbHVmJ7WbQ7.1u', NULL, '1', '2024-06-29 23:38:17', '2024-09-30 05:42:13'),
(21, '1736742147463', 'agent_one', 'shoshe', 'islam', 'shoshe@gmail.com', '01764698523', 'agent', NULL, '2_1730787717.png', 'In those cases, you are more likely to capitalize the beginning word of the block quotation.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi mi, pharetra sit amet mi vitae,\r\ncommodo accumsan dui. Donec non scelerisque quam. Pellentesque ut est sed neque.', '23', NULL, '$2y$12$Z6qHIlESC1rqkCwvL4sNLec32nf8LmG0HD.CO2cd73ynjrs5koAxa', NULL, '1', '2024-07-01 02:58:39', '2024-11-05 11:49:02'),
(25, '1182322357949', NULL, 'abc', 'xyz', 'a@gmail.com', '017623er456', 'user', 'female', NULL, NULL, NULL, NULL, '$2y$12$WHqhJ3/dsIiyVYOfuon4xex1f1E/1yEM8OsSFjWVAHhX99VacW0PK', NULL, '1', '2024-07-02 23:26:17', '2024-07-02 23:26:17'),
(42, '9257685857141', 'khadija123@', 'khadija', 'akter', 'khadija@gmail.com', '01764655640', 'user', 'Female', NULL, NULL, '17', NULL, '$2y$12$C3agpyXFjTihRhaT6x.xDeoBn/4FXJ3kcFo5uYX0BEsLcjNQJJIm6', NULL, '1', '2024-07-07 21:50:11', '2024-09-17 04:41:01'),
(45, '7495768314050', 'rifa123', 'rifa', 'tasfia', 'rifa@gmail.com', '01763217890', 'user', 'Female', 'setup_1721102757.PNG', 'road 12,house umber 123,gulshan dhaka', '18', NULL, '$2y$12$2LzmOc.ecdJZ200f.UhWp.IPnhbMsx/G/mFKV6C1ytAGKY7858Zmm', NULL, '1', '2024-07-15 21:52:34', '2024-09-30 01:18:41'),
(47, '5721651410082', 'asif123', 'asif', 'alam', 'asif@gmail.com', '01764655809', 'user', 'Female', NULL, 'road no:1/2A  house no: 123 gulshan ,dhaka', NULL, NULL, '$2y$12$CM89U.HvziAOnXQpv3c8n.h8d0gfOpiW5GmvPAfSR6msbP1enVQye', NULL, '1', '2024-09-11 03:41:17', '2024-09-11 03:50:04'),
(50, '218020341981', 'puja123', 'puja', 'das', 'puja@gmail.com', NULL, 'user', 'Female', NULL, NULL, '5', NULL, '$2y$12$BQE7FQK6ZZc5hxgfokOm6e5dwZZu12KBClV5DFRfllatsKYydy5w2', NULL, '1', '2024-09-17 03:48:15', '2024-09-17 04:25:08'),
(52, '1895563756464', 'khadija123', 'khadija', 'akter', 'khadija+1@gmail.com', '01769541236', 'user', 'Female', '1726558629_1727149616.png', 'road number:123,house no:12,Gulshan', NULL, NULL, '$2y$12$NBEHIXUBoEmMI7sJCE4B.OicEr6Zh7HAKnSJRoS9kUuHQkJWYhR7G', NULL, '1', '2024-09-23 21:41:33', '2024-09-23 21:46:56'),
(57, '295060196785', 'rafi123', 'rafi', 'alam', 'rafi@gmail.com', NULL, 'agent', 'Male', '', NULL, '18', NULL, '$2y$12$YhccEYysb8e6vdUEuzZiT.L6mDqYjwfbI.tNPauqO2GkRkaJRHezK', NULL, '1', '2024-09-23 22:17:14', '2024-09-23 23:54:32'),
(61, '5967219622849', 'kasfi123', 'kasfi', 'islam', 'kasfi@gmail.com', NULL, 'agent', NULL, '', NULL, '17', NULL, '$2y$12$NetxDQkFQGbG/14c2ze0cOTfzQoMBumIo9Ieexpy227pT.GB.9gDC', NULL, '1', '2024-09-24 22:11:33', '2024-09-24 22:14:44'),
(64, '4252410838087', 'tisha123', 'tisha', 'alam', 'tisha@gmail.com', '01767890654', 'user', 'Female', '1726117505 (1) (1)_1727776352.png', 'banani', '21', NULL, '$2y$12$Ic4g.1DrQUZskTLS8yYSf.CdeemvGGURgeN8d8aYXKqsKuIEwPYPa', NULL, '1', '2024-10-01 03:07:15', '2024-10-01 03:52:32'),
(68, '7189832681237', 'ertet', 'ertet', 'ertet', 'etr@gmail.com', NULL, 'user', NULL, NULL, NULL, '21', NULL, '$2y$12$.lr8wQQUoqvHxvjdbQczW.GAZZgMxoKomklNAFVrOj/PObmqGgM1O', NULL, '1', '2024-10-03 05:45:40', '2024-10-03 05:45:56'),
(69, '5813119490709', 'moni123', 'moni', 'akter', 'moni@gmail.com', '01764679087', 'agent', NULL, '', NULL, '23', NULL, '$2y$12$EOOBkT7RNpDGCzOVQwNgKe1Fkq6qB1Siy2ozyBcthQ8Gu2pTgZdPu', NULL, '1', '2024-10-21 03:19:09', '2024-11-05 09:17:51'),
(71, '7925371950217', 'shimla123', 'shimla', 'sharkar', 'shimla@gmail.com', '01794563214', 'user', 'Female', 'andi-rieger-vfEqA8sKe6A-unsplash_1730783884.jpg', 'house no. 123 rd no.12 banani ,dhaka', NULL, NULL, '$2y$12$XG1/2RzG/3Y42zkrwkFlM.3DZx.tWM0DbLcvd18723eIyinb4eoym', NULL, '1', '2024-11-05 05:13:10', '2024-11-05 05:20:30'),
(72, '4273309321137', 'shimla1234', 'shimla', 'sharkar', 'shimla+1@gmail.com', NULL, 'user', NULL, NULL, NULL, NULL, NULL, '$2y$12$y15Sk2YxV0beNFK7qZGyZ.ggDUAPlt.FjwOEFGKeQDOFMGULJHSWO', NULL, '1', '2024-11-05 05:22:24', '2024-11-05 05:22:24'),
(74, '3709272473613', 'shimla123456', 'shimla', 'lslam', 'shimla1234@gmail.com', NULL, 'user', NULL, NULL, NULL, NULL, NULL, '$2y$12$92dANiceejL8VdBozVPRyufCiSsf/TbSvkIB6mH17qYcIZKUYc6GW', NULL, '1', '2024-11-05 05:24:03', '2024-11-05 05:24:03'),
(75, '1824592063347', 'shimla1236', 'shimla', 'sarkar', 'shimla123@gmail.com', '01764655236', 'agent', 'Female', 'andi-rieger-vfEqA8sKe6A-unsplash_1730358844_1730785609.jpg', 'banani', '23', NULL, '$2y$12$YbkxqS4t.zpkrzDzT.b0p./qI0Ux/4qqGyEfsnY46KYh9ZhJCjJ4O', NULL, '1', '2024-11-05 05:46:34', '2024-11-05 05:55:54'),
(78, '8112529737019', 'kz-prince', 'Kamruzzaman', 'Prince', 'prince@genesys.us', '01713384891', 'user', 'Male', NULL, NULL, '24', NULL, '$2y$12$B5MW9UEPXn7HaDmaqaEbVOrfVVlwZcsfUS7IK2df1A05bx6mkJLTe', NULL, '1', '2024-11-06 05:03:15', '2024-11-07 07:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` char(20) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `fk_order_id` (`order_id`),
  ADD KEY `fk_product_id` (`product_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_permission_group_id_foreign` (`permission_group_id`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`),
  ADD KEY `roles_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `order_info` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_permission_group_id_foreign` FOREIGN KEY (`permission_group_id`) REFERENCES `permission_groups` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
