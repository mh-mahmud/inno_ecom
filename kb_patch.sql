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


CREATE TABLE order_info (
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


ALTER TABLE `products` CHANGE `product_type` `product_type` CHAR(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL; 
ALTER TABLE `products` ADD `category_id` INT NULL DEFAULT NULL AFTER `id`, ADD `brand_id` INT NULL DEFAULT NULL AFTER `category_id`;