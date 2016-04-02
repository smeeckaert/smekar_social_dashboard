CREATE TABLE IF NOT EXISTS `smekar_url` (
  `url_id`         INT(11)      NOT NULL AUTO_INCREMENT,
  `url_url`      VARCHAR(255) NOT NULL,
  `url_created_at` TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `url_updated_at` TIMESTAMP    NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`url_id`)
)
  ENGINE = MyISAM
  DEFAULT CHARSET = utf8
  AUTO_INCREMENT = 1;

  CREATE TABLE IF NOT EXISTS `smekar_url_stat` (
  `stat_id`         INT(11)      NOT NULL AUTO_INCREMENT,
  `stat_url_id`    INT(11)      NOT NULL,
  `stat_service`     VARCHAR(255) NOT NULL,
  `stat_key`      VARCHAR(255) NOT NULL,
  `stat_value`    INT(111)   NOT NULL DEFAULT 0,
  PRIMARY KEY (`stat_id`)
)
  ENGINE = MyISAM
  DEFAULT CHARSET = utf8
  AUTO_INCREMENT = 1;