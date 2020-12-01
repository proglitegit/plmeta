DELETE FROM `{#}widgets` WHERE `name` = 'plmeta';
INSERT INTO `{#}widgets` (`controller`, `name`, `title`, `author`, `url`, `version`) VALUES 
(NULL, 'plmeta', 'PLMETA', 'vladimird', 'https://www.proglite.ru', '1.0.0');