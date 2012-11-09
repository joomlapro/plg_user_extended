CREATE TABLE `#__products_clients` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `cpf` char(14) NOT NULL DEFAULT '',
  `sex` char(1) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `phone` char(14) NOT NULL DEFAULT '',
  `mobile` char(15) NOT NULL DEFAULT '',
  `address_zip_code` varchar(10) NOT NULL DEFAULT '',
  `address_street` varchar(50) NOT NULL DEFAULT '',
  `address_number` varchar(10) NOT NULL DEFAULT '',
  `address_district` varchar(20) NOT NULL DEFAULT '',
  `address_city` varchar(20) NOT NULL DEFAULT '',
  `address_state` char(2) NOT NULL DEFAULT '',
  `company` varchar(255) NOT NULL DEFAULT '',
  `fantasy` varchar(255) NOT NULL DEFAULT '',
  `cnpj` char(18) NOT NULL DEFAULT '',
  `ie` char(14) NOT NULL,
  `activity` int(10) NOT NULL DEFAULT '0',
  `phone2` char(14) NOT NULL DEFAULT '',
  `website` varchar(255) NOT NULL DEFAULT '',
  `featured` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `#__address_states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prefix` char(2) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `region_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

INSERT INTO `#__address_states` VALUES ('1', 'AC', 'Acre', '3');
INSERT INTO `#__address_states` VALUES ('2', 'AL', 'Alagoas', '2');
INSERT INTO `#__address_states` VALUES ('3', 'AM', 'Amazonas', '3');
INSERT INTO `#__address_states` VALUES ('4', 'AP', 'Amapá', '3');
INSERT INTO `#__address_states` VALUES ('5', 'BA', 'Bahia', '2');
INSERT INTO `#__address_states` VALUES ('6', 'CE', 'Ceará', '2');
INSERT INTO `#__address_states` VALUES ('7', 'DF', 'Distrito Federal', '1');
INSERT INTO `#__address_states` VALUES ('8', 'ES', 'Espírito Santo', '4');
INSERT INTO `#__address_states` VALUES ('9', 'GO', 'Goiás', '1');
INSERT INTO `#__address_states` VALUES ('10', 'MA', 'Maranhão', '2');
INSERT INTO `#__address_states` VALUES ('11', 'MG', 'Minas Gerais', '4');
INSERT INTO `#__address_states` VALUES ('12', 'MS', 'Mato Grosso do Sul', '1');
INSERT INTO `#__address_states` VALUES ('13', 'MT', 'Mato Grosso', '1');
INSERT INTO `#__address_states` VALUES ('14', 'PA', 'Pará', '3');
INSERT INTO `#__address_states` VALUES ('15', 'PB', 'Paraíba', '2');
INSERT INTO `#__address_states` VALUES ('16', 'PE', 'Pernambuco', '2');
INSERT INTO `#__address_states` VALUES ('17', 'PI', 'Piauí', '2');
INSERT INTO `#__address_states` VALUES ('18', 'PR', 'Paraná', '5');
INSERT INTO `#__address_states` VALUES ('19', 'RJ', 'Rio de Janeiro', '4');
INSERT INTO `#__address_states` VALUES ('20', 'RN', 'Rio Grande do Norte', '2');
INSERT INTO `#__address_states` VALUES ('21', 'RO', 'Rondônia', '3');
INSERT INTO `#__address_states` VALUES ('22', 'RR', 'Roraima', '3');
INSERT INTO `#__address_states` VALUES ('23', 'RS', 'Rio Grande do Sul', '5');
INSERT INTO `#__address_states` VALUES ('24', 'SC', 'Santa Catarina', '5');
INSERT INTO `#__address_states` VALUES ('25', 'SE', 'Sergipe', '2');
INSERT INTO `#__address_states` VALUES ('26', 'SP', 'São Paulo', '4');
INSERT INTO `#__address_states` VALUES ('27', 'TO', 'Tocantins', '3');
