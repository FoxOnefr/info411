-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 16 Mars 2025 à 14:20
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `meme_generator`
--

-- --------------------------------------------------------

--
-- Structure de la table `memes`
--

CREATE TABLE `memes` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `votes` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `memes`
--

INSERT INTO `memes` (`id`, `image`, `text`, `votes`) VALUES
(1, 'https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/02/01/13/jameson-pfeiffer-syndrome.jpg', 'J\'ai arrêté un bus avec ma tête', 0),
(2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNIvCHLJlLdfWjZ6M7jo4zxNf81I-PtTCf5g&s', 'Moi après 3 cafés ???', 0),
(3, 'https://i.pinimg.com/474x/35/25/3f/35253f64facc999e781f9d679feb1841.jpg', 'huh', 0),
(4, 'https://us-tuna-sounds-images.voicemod.net/a594cc56-2b00-4202-90d0-0de460861df5-1663985224805.png', 'Amogus', 0),
(5, 'https://images.steamusercontent.com/ugc/2044108594145854221/7591EFF18A70AA34DBC34839D1AABF111318C709/', 'HIN HIN', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `memes`
--
ALTER TABLE `memes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `memes`
--
ALTER TABLE `memes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
