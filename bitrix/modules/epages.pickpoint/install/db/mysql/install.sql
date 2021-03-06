CREATE TABLE IF NOT EXISTS `b_pp_city` (
  `ID` int(18) NOT NULL AUTO_INCREMENT,
  `PP_ID` int(18) NOT NULL,
  `BX_ID` int(18) NOT NULL,
  `PRICE` float(2) NOT NULL,
  `ACTIVE` VARCHAR(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`ID`)
) AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `b_pp_zone` (
  `ID` int(18) NOT NULL AUTO_INCREMENT,
  `ZONE_ID` int(18) NOT NULL,
  `PRICE` float(2) NOT NULL,
  PRIMARY KEY (`ID`)
) AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `b_pp_order_postamat` (
  `ID` int(18) NOT NULL AUTO_INCREMENT,
  `ORDER_ID` int(18) NOT NULL,
  `PP_INVOICE_ID` text NOT NULL,
  `POSTAMAT_ID` text NOT NULL,
  `ADDRESS` text NOT NULL,
  `NAME` text NOT NULL,
  `SMS_PHONE` text NOT NULL,
  `SETTINGS` text NOT NULL,
  PRIMARY KEY (`ID`)
) AUTO_INCREMENT=1;