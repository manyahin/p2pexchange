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

CREATE TABLE IF NOT EXISTS `request_methods` (
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

INSERT INTO countries VALUES(0,'Israel');

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