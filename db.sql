# création de la base de données 
CREATE DATABASE magasins;

# création de la table magasin
CREATE TABLE IF NOT EXISTS `magasins` (
    `magasin_id` int(11) NOT NULL,
    `magasin_name` varchar(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
