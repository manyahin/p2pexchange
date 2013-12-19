CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `roles` (`id`, `name`, `description`) VALUES(1, 'login', 'Login privileges, granted after account confirmation');
INSERT INTO `roles` (`id`, `name`, `description`) VALUES(2, 'admin', 'Administrative user, has access to everything.');

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_login` int(10) UNSIGNED,
  `date_registration` int(10) UNSIGNED NOT NULL,
  `phone` varchar(100),
  `verified` int(1) UNSIGNED NOT NULL DEFAULT '0',
  `accept_terms` int(1) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) UNSIGNED NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(32) NOT NULL,
  `want_sum` float(10) NOT NULL,
  `want_currency` int(3) NOT NULL,
  `sell_sum` float(10) NOT NULL,
  `sell_currency` int(3) NOT NULL,
  `comment` varchar(255) NULL,
  `date_created` DATETIME NOT NULL,
  `method_id` int(3) NULL,
  `country_id` int(3) NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `categories_currency` (
  `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- INSERT INTO categories_currency VALUES(1,'Banks');
INSERT INTO categories_currency VALUES(2,'Electronic carrency');
INSERT INTO categories_currency VALUES(3,'Cryptocurrency');
INSERT INTO categories_currency VALUES(4,'Cash');

CREATE TABLE IF NOT EXISTS `currencies` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(3) NOT NULL,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- INSERT INTO currencies VALUES(0,1,'[20] Mizrahi Tefahot Bank');
-- INSERT INTO currencies VALUES(0,1,'[34] Arab Israel Bank');
-- INSERT INTO currencies VALUES(0,1,'[12] Bank Hapoalim');
-- INSERT INTO currencies VALUES(0,1,'[10] Bank Leumi Le-Israel');
-- INSERT INTO currencies VALUES(0,1,'[46] Bank Massad');
-- INSERT INTO currencies VALUES(0,1,'[54] Bank of Jerusalem');
-- INSERT INTO currencies VALUES(0,1,'[14] Bank Otsar Ha-hayal');
-- INSERT INTO currencies VALUES(0,1,'[52] Bank Poalei Agudat Israel');
-- INSERT INTO currencies VALUES(0,1,'[4] Bank Yahav');
-- INSERT INTO currencies VALUES(0,1,'[68] Dexia Israel Bank');
-- INSERT INTO currencies VALUES(0,1,'[11] Israel Discount Bank');
-- INSERT INTO currencies VALUES(0,1,'[17] Mercantile Discount Bank');
-- INSERT INTO currencies VALUES(0,1,'[31] The First International Bank of Israel');
-- INSERT INTO currencies VALUES(0,1,'[26] Ubank');
-- INSERT INTO currencies VALUES(0,1,'[13] Union Bank (Igud)');
INSERT INTO currencies VALUES(0,2,'WebMoney');
INSERT INTO currencies VALUES(0,2,'Yandex.Money');
INSERT INTO currencies VALUES(0,2,'Skrill');
INSERT INTO currencies VALUES(0,2,'PayPal');
INSERT INTO currencies VALUES(0,2,'Ukash');
INSERT INTO currencies VALUES(0,2,'Paysavecard');
INSERT INTO currencies VALUES(0,2,'Easypay');
INSERT INTO currencies VALUES(0,2,'OKpay');
INSERT INTO currencies VALUES(0,2,'Netteler');
INSERT INTO currencies VALUES(0,2,'Cellarix');
INSERT INTO currencies VALUES(0,2,'Perfect Money');
INSERT INTO currencies VALUES(0,2,'Liqpay');
INSERT INTO currencies VALUES(0,2,'EgoPay');
INSERT INTO currencies VALUES(0,2,'Qiwi');
INSERT INTO currencies VALUES(0,3,'Bitcoin');
INSERT INTO currencies VALUES(0,3,'Litecoin');
INSERT INTO currencies VALUES(0,3,'PPCoin');
INSERT INTO currencies VALUES(0,3,'Namecoin');
INSERT INTO currencies VALUES(0,4,'ILS');
INSERT INTO currencies VALUES(0,4,'USD');
INSERT INTO currencies VALUES(0,4,'EUR');
INSERT INTO currencies VALUES(0,4,'Mezuman BeZman');

CREATE TABLE IF NOT EXISTS `methods` (
  `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `methods_requests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `request_id` int(10) NOT NULL,
  `method_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


INSERT INTO methods VALUES(0,'Cash');
INSERT INTO methods VALUES(0,'[20] Mizrahi Tefahot Bank');
INSERT INTO methods VALUES(0,'[34] Arab Israel Bank');
INSERT INTO methods VALUES(0,'[12] Bank Hapoalim');
INSERT INTO methods VALUES(0,'[10] Bank Leumi Le-Israel');
INSERT INTO methods VALUES(0,'[46] Bank Massad');
INSERT INTO methods VALUES(0,'[54] Bank of Jerusalem');
INSERT INTO methods VALUES(0,'[14] Bank Otsar Ha-hayal');
INSERT INTO methods VALUES(0,'[52] Bank Poalei Agudat Israel');
INSERT INTO methods VALUES(0,'[4] Bank Yahav');
INSERT INTO methods VALUES(0,'[68] Dexia Israel Bank');
INSERT INTO methods VALUES(0,'[11] Israel Discount Bank');
INSERT INTO methods VALUES(0,'[17] Mercantile Discount Bank');
INSERT INTO methods VALUES(0,'[31] The First International Bank of Israel');
INSERT INTO methods VALUES(0,'[26] Ubank');
INSERT INTO methods VALUES(0,'[13] Union Bank (Igud)');

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO countries VALUES(0,'All world');
INSERT INTO countries VALUES(0,'Israel');
INSERT INTO countries VALUES(0,'USA');

CREATE TABLE IF NOT EXISTS `acceptors` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `request_id` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `accept_user_id` int(11) NOT NULL,
  `date_created` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

ALTER TABLE `users` ADD COLUMN `phone` varchar(100) AFTER `username`;
ALTER TABLE `users` ADD COLUMN `date_registration` DATETIME AFTER `last_login`;

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `accept_id` int(10) NOT NULL,
  `from_user_id` int(10) NOT NULL,
  `to_user_id` int(10) NOT NULL,
  `rating` INT(1) NOT NULL,
  `comment` varchar(254) NULL,
  `date_created` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

INSERT INTO `ratings` VALUES(0,11,2,'First rating',NOW());

***
requests.user_id => requests.user_created_id
active or not in requests

VasyaVasya
BabraBabra


[11/12/13, 1:21:18 PM] Alen Kaminski: Bank Code Name
20  Mizrahi Tefahot Bank
34  Arab Israel Bank
12  Bank Hapoalim
10  Bank Leumi Le-Israel
46  Bank Massad
54  Bank of Jerusalem
14  Bank Otsar Ha-hayal
52  Bank Poalei Agudat Israel
4 Bank Yahav
68  Dexia Israel Bank
11  Israel Discount Bank
17  Mercantile Discount Bank
31  The First International Bank of Israel
26  Ubank
13  Union Bank (Igud)
[11/12/13, 1:21:26 PM] Alen Kaminski: lList of bank Israel