ALTER TABLE `lh_chat` ADD `customer_id` int(11) NULL, COMMENT='';

ALTER TABLE `lh_chat` ADD INDEX `customer_id` (`customer_id`);