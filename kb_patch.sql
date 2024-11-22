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