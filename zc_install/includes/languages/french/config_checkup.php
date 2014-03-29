<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: config_checkup.php 7403 2007-11-11 04:09:16Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
/**
 * defining language components for the page
 */
  define('TEXT_MAIN', '<h2>Veuillez v&eacute;rifier vos fichiers de configuration</h2><p>Vos fichiers configure.php ne peuvent pas &ecirc;tre valid&eacute;s. Cela signifie en g&eacute;n&eacute;ral qu\'ils contiennent des informations invalides.</p>');
  define('TEXT_EXPLANATION2', '<p>Apr&egrave;s avoir collect&eacute; les informations aupr&egrave;s de vous, nous avons tent&eacute; d\'&eacute;crire ces informations collect&eacute;es dans les fichiers configure.php de votre serveur. Vous voyez cet &eacute;cran car le processus a &eacute;chou&eacute;. Vous allez donc certainement devoir &eacute;crire leurs contenus manuellement.</p>');
  define('TEXT_PAGE_HEADING', 'Installation de Zen Cart&trade; - V&eacute;rification de la configuration');
  define('TEXT_CONFIG_FILES', 'Param&egrave;tres de configuration - fichiers configure.php');
  define('TEXT_CONFIG_INSTRUCTIONS', 'Vous devez utiliser le presse-papiers de votre ordinateur pour copier/coller le contenu appropri&eacute; en utilisant les boites suivantes.  Cliquez dans la boîte, copiez dans votre presse-papiers, ouvrez le bon fichier configure.php &agrave; l\'aide de votre &eacute;diteur de texte pr&eacute;f&eacute;r&eacute;, puis collez le contenu du presse-papiers dans le fichier, sauvegardez et uploadez en &eacute;crasant l\'ancien. R&eacute;p&eacute;tez l\'op&eacute;ration pour l\'autre fichier.<br /><br />Lorsque vous avez termin&eacute;, cliquez sur le bouton "Rev&eacute;rifier les fichiers" ci-dessous pour relancer la v&eacute;rification.');

  define('TEXT_CATALOG_CONFIGFILE', '/includes/configure.php');
  define('TEXT_ADMIN_CONFIGFILE', '/admin/includes/configure.php');

  define('CONTINUE_BUTTON', 'Ignorer et continuer');
  define('RECHECK', 'Rev&eacute;rifier les fichiers');
?>