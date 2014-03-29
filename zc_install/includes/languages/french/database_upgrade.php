<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: database_upgrade.php 7411 2007-11-11 05:47:10Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
/**
 * defining language components for the page
 */
  define('TEXT_PAGE_HEADING', 'Installation de Zen Cart&trade; - Mise &agrave; jour Base de donn&eacute;es');
  define('UPDATE_DATABASE_NOW','Mettre &agrave; jour la BDD maintenant');//this comes before TEXT_MAIN
  define('TEXT_MAIN', '<em>Attention: </em> Ce script doit &ecirc;tre utilis&eacute; UNIQUEMENT pour mettre &agrave; jour le sch&eacute;ma de votre base de donn&eacute;es Zen Cart&trade; vers les version list&eacute;es ci-dessous.  ' .
                      '<span class="emphasis"><strong>Nous vous RECOMMANDONS TR&Egrave;S FORTEMENT de faire une sauvegarde compl&egrave;te de votre base de donn&eacute;es avant de faire quelque mise &agrave; jour !</strong></span>');
  define('TEXT_MAIN_2','<span class="emphasis">Veuillez v&eacute;rifier scrupuleusement les informations d&eacute;taill&eacute;es ci-dessous</span>. Ces informations proviennent de votre fichier configure.php.<br />' .
                      'Ne proc&eacute;dez &agrave; la mise &agrave; jour que si vous &ecirc;tes s&ucirc;r qu\'elles sont correctes, car sinon vous risqueriez de corrompre votre base de donn&eacute;es.');

  define('DATABASE_INFORMATION', 'Informations de la base de donn&eacute;es');
  define('DATABASE_TYPE', 'Type de la base de donn&eacute;es');
  define('DATABASE_HOST', 'H&ocirc;te de la base de donn&eacute;es');
  define('DATABASE_USERNAME', 'Nom d\'utilisateur de la base de donn&eacute;es');
  define('DATABASE_PASSWORD', 'Mot de passe de la base de donn&eacute;es');
  define('DATABASE_NAME', 'Nom de la base de donn&eacute;es');
  define('DATABASE_PREFIX', 'Pr&eacute;fixe des tables');
  define('DATABASE_PRIVILEGES', 'Privil&egrave;ges sur la base de donn&eacute;es');

  define('SNIFFER_PREDICTS','Le <em>d&eacute;tecteur de mises &agrave; jour</em> propose: ');
  define('CHOOSE_UPGRADES','Veuillez confirmer les &eacute;tapes de mise &agrave; jour souhait&eacute;es');
  define('TITLE_DATABASE_PREFIX_CHANGE','Changer le pr&eacute;fixe des tables');
  define('ERROR_PREFIX_CHANGE_NEEDED','<span class="errors">Nous n\'avons pas pu trouver les tables de Zen Cart&trade; dans votre base de donn&eacute;es.<br />Peut-&ecirc;tre que le pr&eacute;fixe de vos tables sp&eacute;cifi&eacute; est incorrect ?</span><br />Si la modification du pr&eacute;fixe des tables ne r&eacute;soud pas votre probl&egrave;me, il vous faudra comparer manuellement vos param&egrave;tres dans configure.php avec votre base de donn&eacute;es courante en utilisant phpMyAdmin ou le panneau de contr&ocirc;le de votre serveur web.');
  define('TEXT_DATABASE_PREFIX_CHANGE','Si vous souhaitez changer le pr&eacute;fixe des tables, entrez le nouveau pr&eacute;fixe ci-dessous. <span class="emphasis">NOTE: Veuillez bien v&eacute;rifier que ce pr&eacute;fixe n\'est pas d&eacute;j&agrave; utilis&eacute; dans votre base de donn&eacute;es</span>, parce que nous ne v&eacute;rifions pas la duplication automatiquement. Utiliser un pr&eacute;fixe d&eacute;j&agrave; existant corrompera votre base de donn&eacute;es.');
  define('TEXT_DATABASE_PREFIX_CHANGE_WARNING','<span class="errors"><strong>ATTENTION: N\'ESSAYEZ PAS DE CHANGER LE PREFIXE DE TABLES SI VOUS N\'AVEZ PAS UNE SAUVEGARDE COMPLETE ET RECENTE DU CONTENU DE VOTRE BASE DE DONNEES. Si quelque chose se passe mal pendant le processus, vous pourrez restaurer les donn&eacute;es &agrave; partir de votre sauvegarde. Si vous n\'&ecirc;tes pas s&ucirc;r de savoir faire cela, alors N\'ESSAYEZ PAS de renommer vos tables.</strong></span>');
  define('DATABASE_OLD_PREFIX','ANCIEN pr&eacute;fixe des tables');
  define('DATABASE_OLD_PREFIX_INSTRUCTION','Entrez l\'ancien pr&eacute;fixe des tables');
  define('ENTRY_NEW_PREFIX','NOUVEAU pr&eacute;fixe des tables ');
  define('DATABASE_NEW_PREFIX_INSTRUCTION','Entrez le nouveau pr&eacute;fixe des tables');
  define('ENTRY_ADMIN_ID','Nom de l\'administrateur (pour acc&eacute;der &agrave; l\'espace d\'administration de Zen Cart&trade;)');
  define('ENTRY_ADMIN_PASSWORD','Mot de passe');
  define('ADMIN_PASSSWORD_INSTRUCTION','Vos identifiants administrateur (ceux que vous utilisez pour acc&eacute;der &agrave; l\'administration de votre boutique) sont n&eacute;cessaires pour faire des changements sur votre base de donn&eacute;es. <em>(Ce ne sont PAS vos identifiants pour MySQL)</em>');
  define('TITLE_SECURITY','S&eacute;curit&eacute; base de donn&eacute;es');

  define('UPDATE_DATABASE_WARNING_DO_NOT_INTERRUPT','<span class="emphasis">Apr&egrave;s avoir cliqu&eacute; ci-dessous, N\'INTERROMPEZ PAS LE PROCESSUS. Veuillez patienter jusqu\'&agrave; la fin de la mise &agrave; jour.</span>');
  define('SKIP_UPDATES','Ne pas faire de mise &agrave; jour');


  define('REASON_TABLE_ALREADY_EXISTS','CREATE TABLE %s impossible car elle existe d&eacute;j&agrave;');
  define('REASON_TABLE_DOESNT_EXIST','DROP TABLE %s impossible car elle n\'existe pas.');
  define('REASON_TABLE_NOT_FOUND', 'ALTER or INSERT/REPLACE INTO TABLE %s impossible car elle n\'existe pas.');
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
  define('REASON_CONFIGURATION_GROUP_KEY_ALREADY_EXISTS','INSERT configuration_group_title "%s" impossible car il existe d&eacute;j&agrave;.');
  define('REASON_CONFIGURATION_GROUP_ID_ALREADY_EXISTS','INSERT configuration_group_id "%s" impossible car il existe d&eacute;j&agrave;.');

?>