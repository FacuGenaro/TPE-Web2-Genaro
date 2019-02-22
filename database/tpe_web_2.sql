-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 03:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpe web 2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `titulo_categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `titulo_categoria`) VALUES
(8, 'Memes'),
(9, 'Futbol');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `user` varchar(300) NOT NULL,
  `id_noticia` int(11) NOT NULL,
  `comentario` varchar(800) NOT NULL,
  `puntaje` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `user`, `id_noticia`, `comentario`, `puntaje`) VALUES
(17, 'admin', 32, 'Comentario de admin', 5),
(18, 'userprueba', 32, 'Comentario de usuario', 5);

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `contenidoPreview` text NOT NULL,
  `imagen` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `contenidoFull` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `contenidoPreview`, `imagen`, `id_categoria`, `contenidoFull`) VALUES
(32, 'Meme', 'Regalo para la catedra', 'https://scontent.fmdq1-1.fna.fbcdn.net/v/t1.0-9/52938321_1966804356779582_8559570113815117824_n.jpg?_nc_cat=102&_nc_ht=scontent.fmdq1-1.fna&oh=179ae927243c29843b1bc034b8e9b40c&oe=5CEFE8F3', 8, 'Me pasó muy seguido :('),
(33, 'Noticia 2', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.', 'https://images.clarin.com/2019/02/03/0txTHRygr_1256x620__1.jpg', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean enim ante, facilisis sit amet ante quis, pretium finibus ipsum. Donec suscipit, magna et placerat lobortis, libero tellus ullamcorper leo, ut dignissim ex magna ac mauris. Fusce quis interdum ipsum, a ullamcorper orci. Quisque luctus, nunc sit amet vestibulum ornare, justo tellus fermentum libero, eu tincidunt lectus dolor quis lectus. Nullam finibus bibendum erat nec hendrerit. Aenean sed velit nisi. Morbi nec fringilla eros. Cras sollicitudin ultricies sodales. Vestibulum sit amet euismod elit. Proin sollicitudin volutpat mi vel venenatis. Praesent urna eros, sollicitudin ut ex posuere, rhoncus fermentum quam. Duis tempus congue dapibus. Ut fermentum pellentesque tortor.          Ut dapibus, est ut luctus venenatis, ligula quam convallis quam, id iaculis tortor justo in lacus. Proin semper arcu turpis, ac pretium odio vestibulum nec. Fusce luctus commodo massa, vitae consequat nisl. Curabitur a viverra eros. Nulla et rutrum dui, sit amet fringi');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `user` varchar(300) NOT NULL,
  `pass` varchar(3000) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `user`, `pass`, `admin`) VALUES
(27, 'admin', '$2y$10$NL/V.dpW0x1/Mf6CLfEzEu1aNfgsNzLCkv0BYF5dlauMHyf7rj5fK', 1),
(28, 'userprueba', '$2y$10$q72Aaomgw47viRPSXXitsusV274EK2H8z/6S/PeKQNbmipoQbN3FG', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario` (`user`,`id_noticia`),
  ADD KEY `id_noticia` (`id_noticia`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_noticia`) REFERENCES `noticia` (`id_noticia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
