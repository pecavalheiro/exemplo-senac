CREATE TABLE `user` (
  `id`       INTEGER(11)  NOT NULL AUTO_INCREMENT,
  `email`    VARCHAR(100) NOT NULL UNIQUE,
  `password` VARCHAR(40)  NOT NULL,
  `active`   BOOLEAN      NOT NULL DEFAULT '1',
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

ALTER TABLE `user` ADD COLUMN `name` VARCHAR(150) NOT NULL;

INSERT INTO `user` (`email`, `password`, `active`, `name`) VALUES
  ('pedrohc@gmail.com', '1fc854110e5532480000542834f453de31936c2f', 1, 'Pedro');