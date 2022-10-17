--
-- Contenu de la table `Animateur`
--

INSERT INTO `animateur` ( `nom`, `prenom`) VALUES
('ROB', 'Xavier'),
('BALI', 'Antoine');

-- --------------------------------------------------------

--
-- Contenu de la table `Client`
--

INSERT INTO `client` ( `nom`, `prenom`) VALUES
('Lon', 'Babi'),
('Kech', 'Mara');

-- --------------------------------------------------------

--
-- Contenu de la table `Intervenir`
--

INSERT INTO `intervenir` ( `nb_heures`, `specialiste_id`, `stage_id`) VALUES
(1, 3,3),
(3, 1,2);

-- --------------------------------------------------------

--
-- Contenu de la table `Specialiste`
--

INSERT INTO `specialiste` ( `nom`, `prenom`) VALUES
('Go', 'Chica'),
('York', 'New'),
('Teil', 'Cre');

-- --------------------------------------------------------

--
-- Contenu de la table `Stage`
--

INSERT INTO `stage` ( `animateur_id`, `date_debut`,`nb_jours`) VALUES
(1, '2022/05/02',5),
(2, '2022/05/10',3),
(1, '2022/06/01',1);

-- --------------------------------------------------------