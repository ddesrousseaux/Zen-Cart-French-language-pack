<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: system_setup.php 7411 2007-11-11 05:47:10Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
/**
 * defining language components for the page
 */
  define('SAVE_SYSTEM_SETTINGS', 'Enregistrer les param&egrave;tres syst&egrave;me'); //this comes before TEXT_MAIN
  define('TEXT_MAIN', "Nous allons maintenant configurer l'environnement syst&egrave;me de Zen Cart&trade;.  Veuillez v&eacute;rifier soigneusement chaque param&egrave;tre, et changer si n&eacute;cessaire selon votre arborescence. Cliquez ensuite sur <em>".SAVE_SYSTEM_SETTINGS.'</em> pour continuer.');
  define('TEXT_PAGE_HEADING', 'Installation de Zen Cart&trade; - Param&egrave;trage syst&egrave;me');
  define('SERVER_SETTINGS', 'Param&egrave;tres du Serveur/Site');
  define('PHYSICAL_PATH', 'Chemin physique vers Zen Cart&trade;');
  define('PHYSICAL_PATH_INSTRUCTION', 'Chemin physique vers votre <br />r&eacute;pertoire Zen Cart&trade;.<br />Sans slash &agrave; la fin.');
  define('VIRTUAL_HTTP_PATH', 'URL vers votre boutique Zen Cart&trade;');
  define('VIRTUAL_HTTP_PATH_INSTRUCTION', 'Chemin virtuel/URL vers votre<br />r&eacute;pertoire Zen Cart&trade;.<br />Sans slash &agrave; la fin.');
  define('VIRTUAL_HTTPS_PATH', 'URL du serveur HTTPS');
  define('VIRTUAL_HTTPS_PATH_INSTRUCTION', 'Chemin virtuel complet vers votre<br />r&eacute;pertoire s&eacute;curis&eacute; Zen Cart&trade;.<br />Sans slash &agrave; la fin.');
  define('VIRTUAL_HTTPS_SERVER', 'Domaine HTTPS');
  define('VIRTUAL_HTTPS_SERVER_INSTRUCTION', 'Serveur virtuel pour votre<br />r&eacute;pertoire s&eacute;curis&eacute; Zen Cart&trade;.<br />Sans slash &agrave; la fin.');
  define('TEXT_SSL_INTRO', '<strong>Avez-vous d&eacute;j&agrave; un certificat SSL ? Si oui, entrez les d&eacute;tails ci-dessous.</strong> Si c\'est votre premi&egrave;re installation, les valeurs fournies sont *devin&eacute;es au mieux*. Veuillez v&eacute;rifier les informations avec votre h&eacute;bergeur si vous n\'&ecirc;tes pas s&ucirc;r de celles-ci.');
  define('TEXT_SSL_WARNING', 'Si votre certificat SSL fonctionne d&eacute;j&agrave;, choisissez vos param&egrave;tres SSL ci-dessous. <br /><strong>N\'ACTIVEZ PAS SSL ICI si vous n\'avez pas d&eacute;j&agrave; SSL d\'activ&eacute; sur votre h&eacute;bergement.</strong><br /> Si vous activez SSL, mais que l\'adresse SSL que vous indiquez ne fonctionne pas, vous ne pourrez plus acc&eacute;der &agrave; votre espace d\'administration ni vous connecter sur votre boutique. Vous pourrez activer SSL plus tard en &eacute;ditant les param&egrave;tres de votre fichier configure.php.');
  define('SSL_OPTIONS', 'D&eacute;tails SSL');
  define('ENABLE_SSL', 'Activer SSL');
  define('ENABLE_SSL_INSTRUCTION', 'Voulez-vous activer Secure Sockets Layer dans l\'espace Client ?<br />Laissez sur NON sauf si vous &ecirc;tes absolument s&ucirc;r d\'avoir SSL en fonctionnement.');
  define('ENABLE_SSL_ADMIN', 'Activer SSL dans l\'espace Administration');
  define('ENABLE_SSL_ADMIN_INSTRUCTION', 'Voulez-vous activer Secure Sockets Layer dans l\'espace Administration ?<br />Laissez sur NON sauf si vous &ecirc;tes absolument s&ucirc;r d\'avoir SSL en fonctionnement.');
  define('REDISCOVER', 'Red&eacute;tecter les valeurs par d&eacute;faut pour cet h&ocirc;te');
?>