<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_setup.php 7411 2007-11-11 05:47:10Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
/**
 * defining language components for the page
 */
  define('TEXT_PAGE_HEADING', 'Installation de Zen Cart&trade; - Param&egrave;trage du compte Administrateur');
  define('SAVE_ADMIN_SETTINGS', 'Sauvegarder les param&egrave;tres Admin');//this comes before TEXT_MAIN
  define('TEXT_MAIN', "Pour g&egrave;rer votre boutique Zen Cart&trade;, vous aurez besoin d'un compte Administrateur. Veuillez choisir un nom d'administrateur, un mot de passe, et entrer une adresse email vers laquelle les &eacute;ventuelles r&eacute;initialisations du mot de passe vous seront envoy&eacute;es. V&eacute;rifiez bien vos informations et cliquez sur <em>".SAVE_ADMIN_SETTINGS.'</em> lorsque c\'est fait.');
  define('ADMIN_INFORMATION', 'Informations Administrateur');
  define('ADMIN_USERNAME', 'Identifiant de l\'Administrateur');
  define('ADMIN_USERNAME_INSTRUCTION', 'Entrez le nom d\'utilisateur &agrave; utiliser pour votre compte Administrateur de Zen Cart&trade;.');
  define('ADMIN_PASS', 'Mot de passe Administrateur');
  define('ADMIN_PASS_INSTRUCTION', 'Entrez le mode de passe &agrave; utiliser pour votre compte Administrateur de Zen Cart&trade;.');
  define('ADMIN_PASS_CONFIRM', 'Confirmez le mot de passe');
  define('ADMIN_PASS_CONFIRM_INSTRUCTION', 'Confirmez le mot de passe de votre compte Administrateur de Zen Cart&trade;.');
  define('ADMIN_EMAIL', 'Email Administrateur');
  define('ADMIN_EMAIL_INSTRUCTION', 'Entrez l\'adresse email &agrave; utiliser pour votre compte administrateur de Zen Cart&trade;.');
  define('UPGRADE_DETECTION','D&eacute;tection des mises &agrave; jour');
  define('UPGRADE_INSTRUCTION_TITLE','V&eacute;rifier les mises &agrave; jour de Zen Cart&trade; lors de la connexion &agrave; l\'espace d\'Administration');
  define('UPGRADE_INSTRUCTION_TEXT','Le serveur de versions de Zen Cart&trade; sera contact&eacute; pour d&eacute;terminer si une mise &agrave; jour est disponible ou non. Si une mise &agrave; jour est disponible, un message appara&icirc;tra dans l\'administration.  La mise &agrave; jour NE s\'installe PAS automatiquement<br />Vous pouvez changer ce param&egrave;tre plus tard dans Administration->Configuration->Ma boutique->V&eacute;rifier si une mise &agrave; jour est disponible.');

?>