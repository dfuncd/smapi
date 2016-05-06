CREATE TABLE `users` (
	`id` int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	`user_group_id` int(11) UNSIGNED DEFAULT 0,
	`username` varchar(255),
	`created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
	`updated_at` datetime DEFAULT null,
	`deleted_at` datetime DEFAULT null
) Engine=InnoDB Charset=utf8;

CREATE TABLE `user_groups` (
	`id` int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	`name` varchar(255),
	`created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
	`updated_at` datetime DEFAULT null,
	`deleted_at` datetime DEFAULT null
) Engine=InnoDB Charset=utf8;