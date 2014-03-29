<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: database_setup.php 7411 2007-11-11 05:47:10Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
/**
 * defining language components for the page
 */
  define('SAVE_DATABASE_SETTINGS', 'Sauvegarder la configuration BDD');//this comes before TEXT_MAIN
  define('TEXT_MAIN', "Ensuite, nous avons besoin de conna&icirc;tre quelques informations sur vos param&egrave;tres de base de donn&eacute;es. Veuillez entrer soigneusement chaque param&egrave;tre dans le champ appropri&eacute; et appuyez sur <em>Sauvegarder la configuration BDD</em> pour continuer.");
  define('TEXT_PAGE_HEADING', 'Installation de Zen Cart&trade; - Param&egrave;trage de la base de donn&eacute;es');
  define('DATABASE_INFORMATION', 'Informations sur la base de donn&eacute;es');
  define('DATABASE_OPTIONAL_INFORMATION', 'Base de donn&eacute;es - Param&egrave;tres OPTIONNELS');
  define('DATABASE_OPTIONAL_INSTRUCTION', 'Il est recommand&eacute; de ne pas modifier ces param&egrave;tres, sauf si vous avez une bonne raison de le faire.');
  define('DATABASE_TYPE', 'Type de la base de donn&eacute;es');
  define('DATABASE_TYPE_INSTRUCTION', 'Choisissez le type de base de donn&eacute;es que vous utilisez.');
  define('DATABASE_HOST', 'H&ocirc;te de la base de donn&eacute;es');
  define('DATABASE_HOST_INSTRUCTION', 'Qu\'est-ce que le nom d\'h&ocirc;te de la base de donn&eacute;es ? L\'h&ocirc;te de la base de donn&eacute;es peut &ecirc;tre sous la forme d\'un nom d\'h&ocirc;te, comme \'db1.myserver.com\', ou d\'une adresse IP, comme \'192.168.0.1\'.');
  define('DATABASE_USERNAME', 'Utilisateur de la base de donn&eacute;es');
  define('DATABASE_USERNAME_INSTRUCTION', 'Avec quel nom d\'utilisateur se connecte t\'on &agrave; votre base de donn&eacute;es ? Un exemple de nom d\'utilisateur est \'root\'.');
  define('DATABASE_PASSWORD', 'Mot de passe de la base de donn&eacute;es');
  define('DATABASE_PASSWORD_INSTRUCTION', 'Avec quel mot de passe se connecte t\'on &agrave; votre base de donn&eacute;es ? Le mot de passe va de pair avec le nom d\'utilisateur pour former un compte utilisateur de votre base de donn&eacute;es.');
  define('DATABASE_NAME', 'Nom de la base de donn&eacute;es');
  define('DATABASE_NAME_INSTRUCTION', 'Quel est le nom de la base de donn&eacute;es utilis&eacute;e pour enregistrer toutes vos donn&eacute;es ? Un exemple de nom de BDD est \'zencart\' ou \'moncompte_zencart\'.');
  define('DATABASE_PREFIX', 'Pr&eacute;fixe des tables (identifiant boutique) ');
  define('DATABASE_PREFIX_INSTRUCTION', 'Quel pr&eacute;fixe voulez-vous utiliser pour les tables &agrave; cr&eacute;er dans votre base de donn&eacute;es ?  Exemple: \'zen_\'. Laissez vide si vous n\'avez pas besoin de pr&eacute;fixe.<br />Vous pouvez utiliser les pr&eacute;fixes pour avoir plusieurs boutiques dans une m&ecirc;me base de donn&eacute;es.');
  define('DATABASE_CREATE', 'Cr&eacute;er la base de donn&eacute;es ?');
  define('DATABASE_CREATE_INSTRUCTION', 'Voulez-vous que Zen Cart&trade; cr&eacute;&eacute;e la base de donn&eacute;es ?');
  define('DATABASE_CONNECTION', 'Connection permanente');
  define('DATABASE_CONNECTION_INSTRUCTION', 'Voulez-vous activer les connexions permanentes &agrave; la base de donn&eacute;es ? Cliquez sur \'non\' si vous n\'&ecirc;tes pas s&ucirc;r.');
  define('DATABASE_SESSION', 'Sessions en base de donn&eacute;es');
  define('DATABASE_SESSION_INSTRUCTION', 'Voulez-vous stocker les sessions dans votre base de donn&eacute;es ? Cliquez sur \'oui\' si vous n\'&ecirc;tes pas s&ucirc;r.');
  define('CACHE_TYPE', 'M&eacute;thode de cache SQL');
  define('CACHE_TYPE_INSTRUCTION', 'S&eacute;lectionnez la m&eacute;thode &agrave; utiliser pour la mise en cache SQL.');
  define('SQL_CACHE', 'R&eacute;pertoire de cache SQL/Sessions');
  define('SQL_CACHE_INSTRUCTION', 'Entrez le r&eacute;pertoire &agrave; utiliser pour la mise en cache bas&eacute;e sur des fichiers.');
  define('ONLY_UPDATE_CONFIG_FILES','Mettre &agrave; jour uniquement les fichiers de configuration');


  define('REASON_TABLE_ALREADY_EXISTS','CREATE TABLE %s impossible car elle existe d&eacute;j&agrave;');
  define('REASON_TABLE_DOESNT_EXIST','DROP TABLE %s impossible car elle n\'existe pas.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','INSERT configuration_key "%s" impossible car elle existe d&eacute;j&agrave;');
  define('REASON_COLUMN_ALREADY_EXISTS','ADD COLUMN %s impossible car elle existe d&eacute;j&agrave;.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','DROP COLUMN %s impossible car elle n\'existe pas.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','CHANGE COLUMN %s impossible car elle n\'existe pas.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','INSERT prod-type-layout configuration_key "%s" impossible car elle existe d&eacute;j&agrave;');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','DROP INDEX %s ON TABLE %s impossible car il n\'existe pas.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','DROP PRIMARY KEY ON TABLE %s impossible car elle n\'existe pas.');
  define('REASON_INDEX_ALREADY_EXISTS','ADD INDEX %s ON TABLE %s impossible car il existe d&eacute;j&agrave;.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','ADD PRIMARY KEY TO TABLE %s impossible car une cl&eacute; primaire existe d&eacute;j&agrave;.');
  define('REASON_NO_PRIVILEGES','L\'utilisateur %s@%s n\'a pas les privil&egrave;ges %s sur la base de donn&eacute;es.');

?>