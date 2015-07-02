CREATE TABLE `product` (
  `id`          INTEGER(11)  NOT NULL AUTO_INCREMENT,
  `name`        VARCHAR(100) NOT NULL,
  `description` TEXT,
  `price`       FLOAT(9, 3)           DEFAULT NULL,
  `fk_origin`   INTEGER(11)           DEFAULT NULL,
  `picture`     VARCHAR(100)          DEFAULT NULL,
  `stock`       INTEGER(11)  NOT NULL,
  PRIMARY KEY (`id`)
    COMMENT ''
)
  ENGINE = InnoDB
  CHECKSUM = 0
  DELAY_KEY_WRITE = 0
  PACK_KEYS = 0
  AUTO_INCREMENT = 0
  AVG_ROW_LENGTH = 0
  MIN_ROWS = 0
  MAX_ROWS = 0
  ROW_FORMAT = DEFAULT
  KEY_BLOCK_SIZE = 0;

ALTER TABLE `product` ADD INDEX (`fk_origin`)
  COMMENT '';
ALTER TABLE `product` ADD CONSTRAINT `product_fk1` FOREIGN KEY (`fk_origin`) REFERENCES `origin` (`id`);

ALTER TABLE `product` MODIFY COLUMN `price` DOUBLE(15, 2) DEFAULT NULL;
