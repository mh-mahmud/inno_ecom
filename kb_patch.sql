-- 16/11/2024 => code for slider

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

ALTER TABLE `sliders` ADD `status` TINYINT NOT NULL DEFAULT '1' AFTER `slider_description`;
ALTER TABLE `sliders` CHANGE `slider_image` `slider_image` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL;
ALTER TABLE `sliders` CHANGE `slider_image` `slider_image` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL;
ALTER TABLE `products` ADD `how_to_order` TEXT NULL DEFAULT NULL AFTER `description`, ADD `return_policy` TEXT NULL DEFAULT NULL AFTER `how_to_order`;
ALTER TABLE `products` ADD `product_short_message` VARCHAR(255) NULL DEFAULT NULL AFTER `return_policy`;
ALTER TABLE `products` ADD `xxs_stock` INT NOT NULL DEFAULT '0' AFTER `img_path`, ADD `xs_stock` INT NOT NULL DEFAULT '0' AFTER `xxs_stock`, ADD `s_stock` INT NOT NULL DEFAULT '0' AFTER `xs_stock`, ADD `m_stock` INT NOT NULL DEFAULT '0' AFTER `s_stock`, ADD `l_stock` INT NOT NULL DEFAULT '0' AFTER `m_stock`, ADD `xl_stock` INT NOT NULL DEFAULT '0' AFTER `l_stock`, ADD `xxl_stock` INT NOT NULL DEFAULT '0' AFTER `xl_stock`, ADD `xxxl_stock` INT NOT NULL DEFAULT '0' AFTER `xxl_stock`, ADD `xxxxl_stock` INT NOT NULL DEFAULT '0' AFTER `xxxl_stock`;

ALTER TABLE `products` ADD `colors` VARCHAR(255) NULL DEFAULT NULL AFTER `xxxxl_stock`;
ALTER TABLE `products` ADD `img_path_2` VARCHAR(255) NULL DEFAULT NULL AFTER `img_path`, ADD `img_path_3` VARCHAR(255) NULL DEFAULT NULL AFTER `img_path_2`, ADD `img_path_4` VARCHAR(255) NULL DEFAULT NULL AFTER `img_path_3`, ADD `img_path_5` VARCHAR(255) NULL DEFAULT NULL AFTER `img_path_4`, ADD `img_path_6` VARCHAR(255) NULL DEFAULT NULL AFTER `img_path_5`;
ALTER TABLE `products` ADD `product_specification` TEXT NULL DEFAULT NULL AFTER `description`; 

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,        
    invoice_no VARCHAR(20) NOT NULL,                
    customer_name VARCHAR(100),                     
    mobile_number VARCHAR(15),                      
    area ENUM('Inside Dhaka', 'Outside Dhaka'),     
    address TEXT,                                   
    product_code VARCHAR(20) NOT NULL,              
    product_name VARCHAR(255),                      
    product_color VARCHAR(50),                      
    product_size VARCHAR(10),                       
    unit_price DECIMAL(10, 2) NOT NULL,            
    quantity INT NOT NULL,                          
    total_price DECIMAL(10, 2) NOT NULL,
    sub_total DECIMAL(10, 2) NOT NULL,              
    shipping_charge DECIMAL(10, 2) DEFAULT 0,       
    payable_amount DECIMAL(10, 2) NOT NULL,         
    discount DECIMAL(10, 2) DEFAULT 0,              
    status ENUM('New','Pending','Processing','Completed','Cancelled') DEFAULT 'New', 
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP
);


-- # date: 22-11-2024
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `product_specification` text COLLATE utf8mb4_unicode_ci,
  `how_to_order` text COLLATE utf8mb4_unicode_ci,
  `return_policy` text COLLATE utf8mb4_unicode_ci,
  `product_short_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` tinyint(1) NOT NULL,
  `product_cost` double(20,2) DEFAULT NULL,
  `product_value` double(20,2) DEFAULT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `product_code` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_purchase_limit` tinyint DEFAULT NULL,
  `stock_status` char(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'In Stock',
  `stock_quantity` int NOT NULL DEFAULT '1',
  `xxs_stock` int NOT NULL DEFAULT '0',
  `xs_stock` int NOT NULL DEFAULT '0',
  `s_stock` int NOT NULL DEFAULT '0',
  `m_stock` int NOT NULL DEFAULT '0',
  `l_stock` int NOT NULL DEFAULT '0',
  `xl_stock` int NOT NULL DEFAULT '0',
  `xxl_stock` int NOT NULL DEFAULT '0',
  `xxxl_stock` int NOT NULL DEFAULT '0',
  `xxxxl_stock` int NOT NULL DEFAULT '0',
  `colors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` bigint DEFAULT NULL,
  `updated_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `order_info` (
  order_id INT(11) NOT NULL AUTO_INCREMENT,
  invoice_no VARCHAR(20) NOT NULL,
  customer_id INT(11) DEFAULT NULL,
  mobile_number VARCHAR(15) DEFAULT NULL,
  area ENUM('Inside Dhaka', 'Outside Dhaka'),
  contact_address TEXT DEFAULT NULL,
  sub_total DECIMAL(10,2) NOT NULL,
  order_tax DECIMAL(10,2) DEFAULT 0.00,
  shipping_charge DECIMAL(10,2) DEFAULT 0.00,
  discount DECIMAL(10,2) DEFAULT 0.00,
  payable_amount DECIMAL(10,2) NOT NULL,
  status ENUM('New', 'Pending', 'Processing', 'Completed', 'Cancelled') DEFAULT 'New',
  order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (order_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `order_details` (
  `detail_id` INT(11) NOT NULL AUTO_INCREMENT,
  `order_id` INT(11) NOT NULL,                    
  `product_id` BIGINT UNSIGNED NOT NULL,          
  `product_code` VARCHAR(20) NOT NULL,            
  `product_name` VARCHAR(255) DEFAULT NULL,       
  `product_color` VARCHAR(50) DEFAULT NULL,       
  `product_size` VARCHAR(10) DEFAULT NULL,        
  `unit_price` DECIMAL(10,2) NOT NULL,            
  `mprize` DECIMAL(10,2) DEFAULT NULL,            
  `quantity` INT(11) NOT NULL,                    
  `total_price` DECIMAL(10,2) NOT NULL,          
  `created_at` TIMESTAMP NULL DEFAULT NULL,       
  `updated_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`detail_id`),
  KEY `fk_order_id` (`order_id`),          
  KEY `fk_product_id` (`product_id`),
  CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `order_info` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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

ALTER TABLE `products` ADD `discount_price` DECIMAL(10,2) NULL DEFAULT NULL AFTER `product_code`;
ALTER TABLE `products` CHANGE `product_type` `product_type` CHAR(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL; 
ALTER TABLE `products` ADD `category_id` INT NULL DEFAULT NULL AFTER `id`, ADD `brand_id` INT NULL DEFAULT NULL AFTER `category_id`;

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int DEFAULT NULL,
  `brand_id` int DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `product_specification` text COLLATE utf8mb4_unicode_ci,
  `how_to_order` text COLLATE utf8mb4_unicode_ci,
  `return_policy` text COLLATE utf8mb4_unicode_ci,
  `key_features` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `club_point` int DEFAULT '0',
  `product_type` char(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_cost` double(20,2) DEFAULT NULL,
  `product_value` double(20,2) DEFAULT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `product_code` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_purchase_limit` tinyint DEFAULT NULL,
  `stock_status` char(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'In Stock',
  `stock_quantity` int NOT NULL DEFAULT '1',
  `xxs_stock` int NOT NULL DEFAULT '0',
  `xs_stock` int NOT NULL DEFAULT '0',
  `s_stock` int NOT NULL DEFAULT '0',
  `m_stock` int NOT NULL DEFAULT '0',
  `l_stock` int NOT NULL DEFAULT '0',
  `xl_stock` int NOT NULL DEFAULT '0',
  `xxl_stock` int NOT NULL DEFAULT '0',
  `xxxl_stock` int NOT NULL DEFAULT '0',
  `xxxxl_stock` int NOT NULL DEFAULT '0',
  `colors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` bigint DEFAULT NULL,
  `updated_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `description`, `product_specification`, `how_to_order`, `return_policy`, `key_features`, `club_point`, `product_type`, `product_cost`, `product_value`, `discount_price`, `product_code`, `img_path`, `img_path_2`, `img_path_3`, `img_path_4`, `img_path_5`, `img_path_6`, `max_purchase_limit`, `stock_status`, `stock_quantity`, `xxs_stock`, `xs_stock`, `s_stock`, `m_stock`, `l_stock`, `xl_stock`, `xxl_stock`, `xxxl_stock`, `xxxxl_stock`, `colors`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(20, 1, 2, 'crm', 'Test case reviews are just as important during test automation as they are during manual testing. In fact, they can be even more critical in the automation context because once test cases are automated, any defects in the test cases can be repeated quickly and consistently.', NULL, NULL, NULL, NULL, 2147483647, 'Service', 120000.00, 12.00, NULL, '0001234', '459034868_7582905898476855_8435146881143564591_n_1732601328.jpg', NULL, NULL, NULL, NULL, NULL, 1, 'In Stock', 1000, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 1, 1, '2024-10-27 22:19:24', '2024-11-26 06:08:48'),
(21, NULL, 2, 'call center solution', 'Imagine that every QA member maintains their own document for test cases. This will only lead to confusion when you work as a team, and there is a high chance of losing track of the test plan and execution. If you don’t maintain a proper test case repository, then it might lead to missed execution of test cases, patchy test coverage, and, eventually, poor product quality. That is why maintaining a test case repository is highly important for medium to large projects.', NULL, NULL, NULL, NULL, 0, '0', 50.00, 150.00, NULL, '000123456', '', NULL, NULL, NULL, NULL, NULL, NULL, 'In Stock', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 1, NULL, '2024-10-27 22:21:29', '2024-10-28 03:01:32'),
(22, NULL, 3, 'ticket system', 'Imagine that every QA member maintains their own document for test cases. This will only lead to confusion when you work as a team, and there is a high chance of losing track of the test plan and execution. If you don’t maintain a proper test case repository, then it might lead to missed execution of test cases, patchy test coverage, and, eventually, poor product quality. That is why maintaining a test case repository is highly important for medium to large projects.\r\n\r\nBesides, testing is a repeatable procedure. Reusing test cases is one of the major advantages, as it helps save time. In large projects, frequent testing will be required. And, when you have a test case repository, it will let you reuse your previous test resources wherever required and accelerate the testing process. Also, maintaining a test repository is quite easy!\r\n\r\nHere are some of the top benefits of a test case repository:\r\n\r\nAll the authorized test cases will be stored in a test case repository.\r\nQA team will always have a complete backup of the test case repository in case of a crash that might affect the application.\r\nIt can be easily updated whenever required.\r\nIt helps save time.\r\nTesters’ test case creation skills can be assessed on a performance basis.\r\nIt helps achieve comprehensive test coverage.\r\nIt helps with test reports.\r\nThe status of test cases can be easily displayed via a chart with values like pass, fail, or not tested.\r\nBoosts application quality and knowledge.', NULL, NULL, NULL, NULL, 0, '3', 200.00, 300.00, NULL, '001234567890', '', NULL, NULL, NULL, NULL, NULL, NULL, 'In Stock', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 1, NULL, '2024-10-27 22:26:02', '2024-10-28 22:23:40'),
(23, NULL, 4, 'kbs', 'Imagine that every QA member maintains their own document for test cases. This will only lead to confusion when you work as a team, and there is a high chance of losing track of the test plan and execution. If you don’t maintain a proper test case repository, then it might lead to missed execution of test cases, patchy test coverage, and, eventually, poor product quality. That is why maintaining a test case repository is highly important for medium to large projects.\r\n\r\nBesides, testing is a repeatable procedure. Reusing test cases is one of the major advantages, as it helps save time. In large projects, frequent testing will be required. And, when you have a test case repository, it will let you reuse your previous test resources wherever required and accelerate the testing process. Also, maintaining a test repository is quite easy!\r\n\r\nHere are some of the top benefits of a test case repository:\r\n\r\nAll the authorized test cases will be stored in a test case repository.\r\nQA team will always have a complete backup of the test case repository in case of a crash that might affect the application.\r\nIt can be easily updated whenever required.\r\nIt helps save time.\r\nTesters’ test case creation skills can be assessed on a performance basis.\r\nIt helps achieve comprehensive test coverage.\r\nIt helps with test reports.\r\nThe status of test cases can be easily displayed via a chart with values like pass, fail, or not tested.\r\nBoosts application quality and knowledge.', NULL, NULL, NULL, NULL, 0, '1', 100.00, 250.00, NULL, '1234509867', '', NULL, NULL, NULL, NULL, NULL, NULL, 'In Stock', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 1, NULL, '2024-10-28 01:02:23', '2024-10-28 03:02:14'),
(24, NULL, 1, 'ems', 'product in the market, it’s essential to test whether both the frontend and backend of the application are working correctly. Frontend testing is the testing of the user interface visible to the user by which users interact with the application. In contrast, backend testing is about testing the actual database and server logic under the hood, which is not visible to the application users.\r\n\r\nIn this article, you will learn about fronted and backend testing and the difference between both tests. You will also learn about the various tools and techniques used in frontend and backend testing.', NULL, NULL, NULL, NULL, 0, '0', 12345678910.00, 12345678.00, NULL, '0021111', 'Capture_1730354206.PNG', NULL, NULL, NULL, NULL, NULL, NULL, 'In Stock', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 1, 1, '2024-10-29 04:34:50', '2024-10-30 23:56:46'),
(26, NULL, 3, 'Social', NULL, NULL, NULL, NULL, NULL, 0, '3', 1200.00, 15000.00, NULL, '0023', 'andi-rieger-vfEqA8sKe6A-unsplash_1730358844_1730865590.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'In Stock', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 69, 69, '2024-11-06 03:59:50', '2024-11-06 04:00:13'),
(27, NULL, 2, 'Well Food', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-weight: 400; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px; color: rgb(119, 119, 119); letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><i><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Mobil 1 5W-30 is an advanced full synthetic engine oil designed to keep your engine running like new by providing exceptional wear protection, cleaning power and overall performance. Mobil 1 5W-30 meets or exceeds the requirements of the industry’s toughest standards and outperforms our conventional oils. Mobil 1 technology comes as standard equipment in many different vehicles, including select high-performance vehicles.r r Country Of Import: SINGAPORE &amp; USAr r Country Of Origin: USA &amp; SINGAPOREr r Unit Size: 4Lr r SAE: 5W-30r r Oil Type: SYNTHETICr r API: SPr r ACEA: DEXOS Gen2r r Appropriate Use: For Car&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:4993,&quot;3&quot;:{&quot;1&quot;:0},&quot;10&quot;:1,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;Open Sans&quot;}\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px;\">Mobil 1 5W-30 is an advanced full synthetic engine oil designed to keep your engine running like new by providing exceptional wear protection, cleaning power and overall performance. Mobil 1 5W-30 meets or exceeds the requirements of the industry’s toughest standards and outperforms our conventional oils. Mobil 1 technology comes as standard equipment in many different vehicles, including select high-performance vehicles.</span></i></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-weight: 400; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px; color: rgb(119, 119, 119); letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><u><b>Country Of Import: SINGAPORE &amp; USA</b></u></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px; color: rgb(119, 119, 119); letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><u><b>Country Of Origin: USA &amp; SINGAPORE</b></u></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px; color: rgb(119, 119, 119); letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><u><b>Unit Size: 4L</b></u></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px; color: rgb(119, 119, 119); letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><u><b>SAE: 5W-30</b></u></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px; color: rgb(119, 119, 119); letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><u><b>Oil Type: SYNTHETIC</b></u></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px; color: rgb(119, 119, 119); letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><u><b>API: SP</b></u></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px; color: rgb(119, 119, 119); letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><u><b>ACEA: DEXOS Gen2</b></u></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-right: 0px; margin-bottom: var(--wd-tags-mb); margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-weight: 400; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px; color: rgb(119, 119, 119); letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><u><b>Appropriate Use: For Car</b></u></p>', '<i><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Mobil 1 5W-30 is an advanced full synthetic engine oil designed to keep your engine running like new by providing exceptional wear protection, cleaning power and overall performance. Mobil 1 5W-30 meets or exceeds the requirements of the industry’s toughest standards and outperforms our conventional oils. Mobil 1 technology comes as standard equipment in many different vehicles, including select high-performance vehicles.r r Country Of Import: SINGAPORE &amp; USAr r Country Of Origin: USA &amp; SINGAPOREr r Unit Size: 4Lr r SAE: 5W-30r r Oil Type: SYNTHETICr r API: SPr r ACEA: DEXOS Gen2r r Appropriate Use: For Car&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:4993,&quot;3&quot;:{&quot;1&quot;:0},&quot;10&quot;:1,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;Open Sans&quot;}\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 15px;\">Mobil\r\n 1 5W-30 is an advanced full synthetic engine oil designed to keep your \r\nengine running like new by providing exceptional wear protection, \r\ncleaning power and overall performance. Mobil 1 5W-30 meets or exceeds \r\nthe requirements of the industry’s toughest standards and outperforms \r\nour conventional oils. Mobil 1 technology comes as standard equipment in\r\n many different vehicles, including select high-performance vehicles.</span></i>', NULL, NULL, NULL, 0, 'Digital', 2452354.00, 234324.00, 3000.00, '4325', '27164663_987829178034171_2149106983021255887_o_1732445810.jpg', NULL, NULL, NULL, NULL, NULL, 32, 'Out of Stock', 340, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 1, 1, '2024-11-24 10:56:50', '2024-11-25 10:37:27'),
(28, 1, 1, 'Joyroom JR-PBF04 20000mAh 65W Fast Charging Power Bank', '<p>fv fer<br></p>', '<p>&nbsp;erger<br></p>', NULL, NULL, '<h2 style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; font-weight: normal; font-size: 18px; line-height: 26px; color: rgb(0, 0, 0); font-family: &quot;Trebuchet MS&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Key Features</h2><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Trebuchet MS&quot;, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 10px; display: block; line-height: 20px;\">Model: JR-PBF04</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 10px; display: block; line-height: 20px;\">Battery Capacity: 20000mAh, 3.7V (74Wh)</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 10px; display: block; line-height: 20px;\">Battery Type: Polymer Lithium Battery</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 10px; display: block; line-height: 20px;\">Output Ports: 1x USB-A, 2x Type-C</li><li style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 10px; display: block; line-height: 20px;\">1.2M 100W Type-C to Type-C Cable Included</li></ul><p></p>', 100, 'Digital', 324.00, 32432432.00, 32424.00, '43242', '452234221_7902742419833503_2282562716542664690_n_1732538664.jpg', NULL, NULL, NULL, NULL, NULL, 12, 'In Stock', 111, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 1, 1, '2024-11-25 12:44:24', '2024-11-26 10:35:05');


CREATE TABLE `bloggers_category` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category_id` int DEFAULT NULL,
  `blog_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;