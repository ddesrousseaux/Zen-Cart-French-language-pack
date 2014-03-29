<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: onlyFor139.php 15788 2010-04-02 10:44:40Z drbyte $
 *
 *
 * NOTE: Ce fichier n'est utile qu'en v1.3.9, et doit être supprimé lors de l'upgrade en v2.x, puisque son contenu sera fusionné avec le fichier de langue principal
 *
 *
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Acces interdit');
}

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'ATTENTION: <a href="http://tutorials.zen-cart.com/index.php?article=33" target="_blank">Votre r&eacute;pertoire /admin/ devrait &ecirc;tre renomm&eacute; en quelque chose de moins commun</a>, pour emp&ecirc;cher les acc&egrave;s non autoris&eacute;s.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'AVERTISSEMENT: Le syst&egrave;me email est d&eacute;sactiv&eacute;. Aucun email ne sera envoy&eacute; tant qu\'il n\'est pas r&eacute;activ&eacute; dans Admin->Configuration->Options Email.');
define('TEXT_CURRENT_VER_IS', 'Vous utilisez en ce moment: ');
define('ERROR_NO_DATA_TO_SAVE', 'ERREUR: Les donn&eacute;es que vous avez envoy&eacute;es semblent vides. VOS MODIFICATIONS N\'ONT *PAS* ETE SAUVEGARDEES. Vous avez peut-&ecirc;tre un probl&egrave;me avec votre navigateur ou votre connexion internet.');
define('TEXT_HIDDEN', 'Cach&eacute;');
define('TEXT_VISIBLE', 'Visible');
define('TEXT_HIDE', 'Cacher');
define('TEXT_EMAIL', 'Email');
define('TEXT_NOEMAIL', 'Aucun Email');
