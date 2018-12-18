-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.13 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para tony-veiculos
DROP DATABASE IF EXISTS `tony-veiculos`;
CREATE DATABASE IF NOT EXISTS `tony-veiculos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `tony-veiculos`;


-- Copiando estrutura para tabela tony-veiculos.nomes
DROP TABLE IF EXISTS `nomes`;
CREATE TABLE IF NOT EXISTS `nomes` (
  `NOM_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_NOME` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`NOM_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela tony-veiculos.nomes: ~0 rows (aproximadamente)
DELETE FROM `nomes`;
/*!40000 ALTER TABLE `nomes` DISABLE KEYS */;
INSERT INTO `nomes` (`NOM_CODIGO`, `NOM_NOME`) VALUES
	(10, 'TESTE NUMERO UM'),
	(11, 'TESTE NÚMERO DOIS'),
	(12, 'TESTE NUMERO 3'),
	(13, 'TESTE NÚMERO 4');
/*!40000 ALTER TABLE `nomes` ENABLE KEYS */;


-- Copiando estrutura para tabela tony-veiculos.telefones
DROP TABLE IF EXISTS `telefones`;
CREATE TABLE IF NOT EXISTS `telefones` (
  `TEL_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_CODIGO` int(11) DEFAULT NULL,
  `TEL_NUMERO` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`TEL_CODIGO`),
  KEY `NOM_CODIGO` (`NOM_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela tony-veiculos.telefones: ~0 rows (aproximadamente)
DELETE FROM `telefones`;
/*!40000 ALTER TABLE `telefones` DISABLE KEYS */;
INSERT INTO `telefones` (`TEL_CODIGO`, `NOM_CODIGO`, `TEL_NUMERO`) VALUES
	(2, 10, '(21) 31242-1412'),
	(4, 10, '(12) 34322-3434'),
	(6, 11, '(21) 32321-3231'),
	(7, 12, '(11) 11111-1111'),
	(8, 13, '(12) 31241-4352'),
	(9, 13, '(45) 43534-5345');
/*!40000 ALTER TABLE `telefones` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
