<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: phpbb_setup.php 6981 2007-09-12 18:26:56Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
/**
 * defining language components for the page
 */
  define('SAVE_PHPBB_SETTINGS', 'Enregistrer les param&egrave;tres phpBB'); //this comes before TEXT_MAIN
  define('TEXT_MAIN', 'Ensuite, nous avons besoin de savoir si vous avez install&eacute; un forum phpBB et si vous voulez l\'utiliser.  Veuillez entrer soigneusement chaque param&egrave;tre dans les champs appropri&eacute;s et appuyez sur <em>'.SAVE_PHPBB_SETTINGS.'</em> pour continuer.');
  define('TEXT_PAGE_HEADING', 'Installation de Zen Cart&trade; - Param&egrave;trage de phpBB');
  define('PHPBB_INFORMATION', 'Informations de phpBB');
  define('TEXT_PHPBB_USE', 'Voulez-vous utiliser un forum phpBB ?');
  define('PHPBB_USE_INSTRUCTION', 'Choisissez si vous souhaitez utiliser un forum phpBB ou non.');
  define('TEXT_PHPBB_DIR', 'R&eacute;pertoire phpBB');
  define('PHPBB_DIR_INSTRUCTION', 'Le r&eacute;pertoire o&ugrave; est install&eacute; phpBB.');

//possible future use:
  define('PHPBB_DATABASE_NAME', 'Nom de la base de donn&eacute;es phpBB');
  define('PHPBB_DATABASE_NAME_INSTRUCTION', 'Quel est le nom de la base de donn&eacute;es utilis&eacute;e pour stocker les donn&eacute;es du forum phpBB');
  define('PHPBB_DATABASE_PREFIX', 'Pr&eacute;fixe des tables phpBB');
  define('PHPBB_DATABASE_PREFIX_INSTRUCTION', 'Quel pr&eacute;fixe voudriez-vous utiliser pour les tables de la base de donn&eacute;es phpBB ?  Laissez vide si aucun pr&eacute;fixe est n&eacute;cessaire.');
?>