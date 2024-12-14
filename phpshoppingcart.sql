-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         11.6.2-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para phpshoppingcart
CREATE DATABASE IF NOT EXISTS `phpshoppingcart` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `phpshoppingcart`;

-- Volcando estructura para tabla phpshoppingcart.about_contact_title
CREATE TABLE IF NOT EXISTS `about_contact_title` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `project_title` varchar(250) NOT NULL,
  `about` text NOT NULL,
  `contact` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla phpshoppingcart.about_contact_title: ~1 rows (aproximadamente)
INSERT INTO `about_contact_title` (`id`, `project_title`, `about`, `contact`) VALUES
	(1, 'FOXSTORE ', '<h1 style="color: #ff0000;"><span style="font-family: comic sans ms, sans-serif; font-size: x-large; color: #000000;"><strong><span style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><img src="https://www.google.com/url?sa=i&amp;url=https%3A%2F%2Fes.vecteezy.com%2Farte-vectorial%2F687598-ilustracion-de-zapatillas-en-graffiti&amp;psig=AOvVaw3nRd8yhu7M68ZJaTIuMNIQ&amp;ust=1734239557299000&amp;source=images&amp;cd=vfe&amp;opi=89978449&amp;ved=0CBQQjRxqFwoTCNjfkajApooDFQAAAAAdAAAAABAE" alt="" /></span></strong></span></h1>\r\n<h1 style="color: #ff0000;"><span style="font-family: comic sans ms, sans-serif; font-size: xx-large; color: #000000;"><strong><span style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Foxstore es una tienda en l&iacute;nea dise&ntilde;ada para los amantes de los zapatos, los usuarios podr&aacute;n realizar compras de distintos zapatos, para todo p&uacute;blico, podr&aacute;n visualizar distintas marcas de zapatos y permite hacer compras desde cualquier ubicaci&oacute;n que se encuentre dentro del territorio de El Salvador</span></strong></span></h1>\r\n<h1 style="color: #ff0000;"><span style="font-family: comic sans ms, sans-serif; font-size: x-large; color: #000000;"><strong><span style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><br /></span></strong></span></h1>', '<p><em><strong><span style="color: #202124; font-family: book antiqua, palatino; font-size: large; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">&iquest;Tienes alguna duda o necesitas ayuda con tu compra? </span></strong></em></p>\r\n<p><em><strong><span style="color: #202124; font-family: book antiqua, palatino; font-size: large; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">&iexcl;Estamos aqu&iacute; para ayudarte! </span></strong></em></p>\r\n<p><em><strong><span style="font-family: book antiqua, palatino; font-size: large;"><span style="color: #202124; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Correo Electr&oacute;nico: </span><span style="color: #202124; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">info@foxstore.com</span></span></strong></em></p>\r\n<p><em><strong><span style="color: #202124; font-family: book antiqua, palatino; font-size: large; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Tel&eacute;fono: +503 1234-5678 </span></strong></em></p>\r\n<p><em><strong><span style="color: #202124; font-family: book antiqua, palatino; font-size: large; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">WhatsApp: +503 9876-5432 </span></strong></em></p>\r\n<p><em><strong><span style="color: #202124; font-family: book antiqua, palatino; font-size: large; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Ubicaci&oacute;n: Atendemos en todo el territorio de El Salvador.</span></strong></em></p>\r\n<p><em><strong><span style="color: #202124; font-family: book antiqua, palatino; font-size: large; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"> Horario de Atenci&oacute;n: Lunes a Viernes: 8:00 AM - 6:00 PM S&aacute;bados: 9:00 AM - 1:00 PM</span></strong></em></p>\r\n<p><em><strong><span style="color: #202124; font-family: book antiqua, palatino; font-size: large; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"> Redes Sociales: S&iacute;guenos y cont&aacute;ctanos en nuestras redes sociales: Facebook Instagram Twitter</span></strong></em></p>');

-- Volcando estructura para tabla phpshoppingcart.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla phpshoppingcart.admin: ~1 rows (aproximadamente)
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'admin');

-- Volcando estructura para tabla phpshoppingcart.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla phpshoppingcart.category: ~4 rows (aproximadamente)
INSERT INTO `category` (`id`, `category_name`) VALUES
	(15, 'Niños '),
	(16, 'Niñas'),
	(17, 'Mujeres'),
	(18, 'Hombres');

-- Volcando estructura para tabla phpshoppingcart.order_item
CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(5) NOT NULL,
  `product_id` varchar(5) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_images` varchar(500) NOT NULL,
  `product_qty` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla phpshoppingcart.order_item: ~3 rows (aproximadamente)
INSERT INTO `order_item` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_images`, `product_qty`) VALUES
	(1, '1', '3', 'test1 this is for testing', '1', 'images/871703260bb6a34caa8d36aa066f15edprod-1.jpg', '1'),
	(2, '2', '5', 'Logitech 12', '5', 'images/953f4a3e6f16633ff5a0d6fe8eeeba89mouse1.jpg', '2'),
	(3, '3', '12', 'canon printer', '5', 'images/0b0e7c5b6a08db7b20f6e9d4a1071205canon.jpg', '1');

-- Volcando estructura para tabla phpshoppingcart.order_user
CREATE TABLE IF NOT EXISTS `order_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) NOT NULL,
  `orderno` varchar(10) NOT NULL,
  `purchase_date` varchar(20) NOT NULL,
  `purchase_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla phpshoppingcart.order_user: ~3 rows (aproximadamente)
INSERT INTO `order_user` (`id`, `user_email`, `orderno`, `purchase_date`, `purchase_time`) VALUES
	(1, 'zala@gmail.com', '453818', '21/08/19', '07:08:55'),
	(2, 'amit.andipara@gmail.com', '896357', '24/08/19', '03:08:57'),
	(3, 'amit.andipara@gmail.com', '234146', '24/08/19', '08:08:15');

-- Volcando estructura para tabla phpshoppingcart.photo_gallery
CREATE TABLE IF NOT EXISTS `photo_gallery` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla phpshoppingcart.photo_gallery: ~3 rows (aproximadamente)
INSERT INTO `photo_gallery` (`id`, `image_path`) VALUES
	(9, 'images/efce6e6f18321838cd8750a1f1ad46c9QWDAWDS (1).jpg'),
	(11, 'images/2e556e582c349eec6469cabf5ba1f6c3QWDAWDSs.jpg'),
	(12, 'images/127c15ea2c767fc0f13ac6614e014230dsdfc.jpeg');

-- Volcando estructura para tabla phpshoppingcart.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_qty` varchar(10) NOT NULL,
  `product_img` varchar(1000) NOT NULL,
  `product_descriptions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla phpshoppingcart.products: ~20 rows (aproximadamente)
INSERT INTO `products` (`id`, `category`, `product_name`, `product_price`, `product_qty`, `product_img`, `product_descriptions`) VALUES
	(13, 'Niñas', 'Vans', '80', '40', 'images/bd7eb98f4fb44057a6925879efadc27afile.jpg', ''),
	(14, 'Niñas', 'Nike', '$70', '60', 'images/bb9423dcf21ba2ab9281b8a0dddd1211COURT+BOROUGH+LOW+RECRAFT+(GS).png', ''),
	(15, 'Niñas', 'Nike', '$65', '60', 'images/ed5bd9b014af7e84fa92304f06b7eeddNIKE+REVOLUTION+7+(GS).png', ''),
	(16, 'Niñas', 'Nike', '$80', '40', 'images/cd67fb4f0266b3f40cbb35c4bf13da3bW+AF1+SAGE+LOW.png', ''),
	(18, 'Niños', 'Vans', '$80', '34', 'images/93f34cf2e67f4932fa88a7ced8c7ef62file.jpg', ''),
	(19, 'Niños', 'Nike', '$65', '43', 'images/95b7564a1c949363ef6928ac3e54c7ebAIR+FORCE+1+(GS).png', ''),
	(20, 'Niños', 'Nike', '$65', '46', 'images/d98a665305009e985f7325d5fd1c2709AIR+JORDAN+LEGACY+312+LOW+(GS).png', ''),
	(21, 'Niños', 'Nike', '$90', '46', 'images/c50988b67ba7af45521f7462e16a27f0NIKE+DUNK+HIGH+(GS).png', ''),
	(22, 'Hombres', 'Nike', '$100', '87', 'images/35a0648a9dd4b0a79268681e8bd96ae0NIKE+AIR+MAX+270+(GS).png', ''),
	(23, 'Niños', 'Nike', '$85', '54', 'images/937ce936f35a0d8dd04c451c20da8e41WMNS+AIR+JORDAN+LEGACY+312+LOW.png', ''),
	(24, 'Hombres', 'Nike', '$50', '34', 'images/d0e2a5e1f147ca09723194d1b75adf14NIKE+SB+CHRON+2.png', ''),
	(25, 'Hombres', 'Nike', '$105', '54', 'images/7c0cc6f6602905b143054cc34ba36c2aAIR+MAX+TW.png', ''),
	(26, 'Hombres', 'Nike', '$130', '21', 'images/f1f89fe587f56b9834fabee8492b8ffaAIR+MAX+270.png', '<p><strong id="docs-internal-guid-8b36b92f-7fff-19ad-55b3-93574d6a5fcd" style="font-weight: normal;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Nike Air Max 270</span></strong></p>'),
	(27, 'Hombres', 'Nike', '$60', '24', 'images/41dbc026008050c83ac67ec2ae893e18NIKE+SB+VERTEBRAE.png', ''),
	(28, 'Niñas', 'Nike', '$85', '45', 'images/294a25fd4e669b3e747c026025004b10NIKE+DUNK+LOW+RETRO.png', ''),
	(29, 'Mujeres', 'Nike', '$100', '65', 'images/eba6ce409c8693ed3b33281bd7661c03NIKE+FIELD+GENERAL+82+SP.png', ''),
	(30, 'Mujeres', 'Nike', '$90', '45', 'images/c72a337e5d09ff926386829669e8ff7dW+NIKE+AIR+MAX+PORTAL.png', '<p><strong id="docs-internal-guid-eb84193d-7fff-84cd-12f6-4f5d11583276" style="font-weight: normal;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Nike TC 7900</span></strong></p>'),
	(31, 'Mujeres', 'Nike', '$85', '34', 'images/d74c4b2ef77608b43e1fa2ef284348dbW+NIKE+TC+7900.png', '<p><strong id="docs-internal-guid-057a0dc8-7fff-ec73-6601-6c30e07fc967" style="font-weight: normal;"><span style="font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Nike Free Metcon 6</span></strong></p>'),
	(32, 'Niños', 'Nike', '$105', '56', 'images/2f265b1e501a358df92d8038838b0f5fW+NIKE+TC+7900.png', ''),
	(33, 'Mujeres', 'N', '$45', '56', 'images/df91c744b7f9bdb73b45b9d67df2aae5W+NIKE+FREE+METCON+6.png', '');

-- Volcando estructura para tabla phpshoppingcart.signup
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla phpshoppingcart.signup: ~8 rows (aproximadamente)
INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `password`, `contact`, `address`) VALUES
	(1, 'amit', 'andipara', 'testing@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9925010051', 'rajkot'),
	(2, 'amit', 'andipara', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9925010051', 'rajkot'),
	(3, 'amit', 'andipara', 'testing@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9925010051', 'rajkot'),
	(4, 'amit', 'andipara', 'testing@gmail.com', '82d5984c2a2ad4c62caf1dd073b1c91c', '9925010051', 'rajkot'),
	(5, 'amit', 'andipara', 'testing@gmail.com', 'cc0bd5832b4e1465a6987d953bb767af', '9925010051', 'rajkot'),
	(6, 'amit', 'andipara', 'test@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', '9925010051', 'rajkot'),
	(7, 'amit', 'andipara', 'zala@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9925010051', 'rajkot'),
	(8, 'amit', 'andipara', 'amit.andipara@gmail.com', '0cb1eb413b8f7cee17701a37a1d74dc3', '9925010051', 'rajkot');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
