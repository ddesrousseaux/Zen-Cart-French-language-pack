<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: inspect.php 7411 2007-11-11 05:47:10Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
/**
 * defining language components for the page
 */
  define('TEXT_PAGE_HEADING', 'Installation de Zen Cart&trade; - Inspection du syst&egrave;me');
  define('INSTALL_BUTTON', ' Installer '); // this comes before TEXT_MAIN
  define('UPGRADE_BUTTON', 'Mettre &agrave; jour les fichiers de configuration'); // this comes before TEXT_MAIN
  define('DB_UPGRADE_BUTTON', 'Mettre &agrave; jour la base de donn&eacute;es'); // this comes before TEXT_MAIN
//Button meanings: (to be made into help-text for future version):
// "Install" = make new configure.php files, regardless of existing contents.  Load new database by dropping old tables.
// "Upgrade" = read old configure.php files, and write new ones using new structure. Upgrade database, instead of wiping and new install
// "Database Upgrade" = don't write the configure.php files -- simply jump to the database-upgrade page. Only displayed if detected database version is new enough to not require configure.php file updates.

  define('TITLE_DOCUMENTATION', 'Documentation');
  define('TEXT_DOCUMENTATION', '<h3>Avez-vous d&eacute;j&agrave; lu les instructions d\'installation ?</h3>Les <a href="%s" target="_blank">instructions d\'installation</a> seront d\'une grande aide si vous ne les avez pas encore lues.<br />Vous y trouverez des informations sur les permissions que vous devrez mettre sur les divers r&eacute;pertoires/fichiers et d\'autres d&eacute;tails n&eacute;cessaires avant une bonne installation, tout comme les choses &agrave; faire une fois l\'installation termin&eacute;e. Il y a aussi des liens vers les <a href="http://tutorials.zen-cart.com/" target="_blank">FAQs en ligne</a>, et d\'autres ressources utiles.');

  define('TEXT_MAIN', 'Prenez un moment pour v&eacute;rifier si votre serveur web poss&egrave;de toutes les fonctionnalit&eacute;s requises pour faire fonctionner Zen Cart&trade;. &nbsp;Veuillez r&eacute;soudre tous les probl&egrave;mes d&eacute;tect&eacute;s avant de poursuivre. &nbsp;Puis cliquez sur <em>'.INSTALL_BUTTON.'&nbsp;</em> pour continuer.');
  define('SYSTEM_INSPECTION_RESULTS', 'R&eacute;sultats de l\'inspection du syst&egrave;me');
  define('OTHER_INFORMATION', 'Autres informations du syst&egrave;me (uniquement &agrave; titre d\'information)');
  define('OTHER_INFORMATION_DESCRIPTION', 'Les informations suivantes n\'indiquent pas forc&eacute;ment un probl&egrave;me de configuration. Elle servent simplement &agrave; vous r&eacute;capituler les param&egrave;tres.');

  define('NOT_EXIST','NON TROUV&Eacute;');
  define('WRITABLE','inscriptible');
  define('UNWRITABLE',"<span class='errors'>&eacute;criture impossible</span>");
  define('UNKNOWN','inconnnu');
  define('ON','ON');
  define('OFF','OFF');
  define('OK','OK');

  define('UPGRADE_DETECTION','Mode mise &agrave; jour disponible');
  define('LABEL_PREVIOUS_INSTALL_FOUND','Installation ant&eacute;rieure de Zen Cart&trade; trouv&eacute;e');
  define('LABEL_PREVIOUS_VERSION_NUMBER','La base de donn&eacute;es de Zen Cart&trade; semble &ecirc;tre en version %s');
  define('LABEL_PREVIOUS_VERSION_NUMBER_UNKNOWN','<em>Toutefois, la version de votre base de donn&eacute;es n\'a pas pu &ecirc;tre d&eacute;termin&eacute;e, chose qui r&eacute;sulte habituellement de pr&eacute;fixes de tables incorrects, ou d\'autres param&egrave;tre de base de donn&eacute;es erron&eacute;s. <br /><br />ATTENTION: Utilisez seulement l\'option de mise &agrave; jour si vous &ecirc;tes s&ucirc;r que vos param&egrave;tres dans configure.php sont corrects.</em>');
  define('LABEL_UPGRADE_VS_INSTALL', 'Installer ou mettre &agrave; jour ?');
  define('LABEL_INSTALL', 'Pr&ecirc;t &agrave; installer ?  (Cela effacera toutes vos donn&eacute;es existantes. Vous n\'&ecirc;tes PAS en mode mise &agrave; jour !!!)');

  define('IMAGE_STOP_BEFORE_UPGRADING', '<div class="center"><img src="includes/templates/template_default/images/stop.gif" border="0" alt="ATTENTION: Soyez s&ucirc;r de choisir la bonne option ci-dessous." /></div>');

  define('LABEL_ACTION_SELECTION_INSTRUCTIONS','<p class="errors extralarge"><span class="center">NOTE:</span><br />Si vous mettez &agrave; jour, assurez-vous de choisir "<span style="text-decoration: underline;">Mise &agrave; jour de la base de donn&eacute;es</span>" ci-dessous pour conserver vos donn&eacute;es.</p><p class="extralarge">Si vous choisissez "Installer", cela &eacute;crasera tout contenu d&eacute;j&agrave; existant dans votre base de donn&eacute;es.</p>');

  define('DISPLAY_PHP_INFO','Lien PHP Info: ');
  define('VIEW_PHP_INFO_LINK_TEXT','Voir le PHPINFO de votre serveur');
  define('LABEL_WEBSERVER','Serveur web');
  define('LABEL_MYSQL_AVAILABLE','Support de MySQL');
  define('LABEL_MYSQL_VER','Version de MySQL');
  define('LABEL_DB_PRIVS','Privil&egrave;ges base de donn&eacute;es');
  define('LABEL_POSTGRES_AVAILABLE','Support de PostgreSQL');
  define('LABEL_PHP_VER','Version de PHP');
  define('LABEL_PHP_OS','PHP O/S');
  define('LABEL_REGISTER_GLOBALS','register_globals');
  define('LABEL_SET_TIME_LIMIT','Temps d\'ex&eacute;cution PHP maximal par page');
  define('LABEL_DISABLED_FUNCTIONS','Fonctions PHP d&eacute;sactiv&eacute;es');
  define('LABEL_SAFE_MODE','PHP safe_mode');
  define('LABEL_CURRENT_CACHE_PATH','R&eacute;pertoire courant du cache SQL');
  define('LABEL_SUGGESTED_CACHE_PATH','R&eacute;pertoire sugg&eacute;r&eacute; du cache SQL');
  define('LABEL_HTTP_HOST','H&ocirc;te HTTP');
  define('LABEL_PATH_TRANLSATED','PATH_TRANSLATED');
  define('LABEL_REALPATH', 'Chemin r&eacute;el');
  define('LABEL_PHP_API_MODE','PHP API Mode');
  define('LABEL_PHP_MODULES','Modules PHP actifs');
  define('LABEL_PHP_EXT_SESSIONS','Support des sessions');
  define('LABEL_PHP_SESSION_AUTOSTART','PHP session.autostart');
  define('LABEL_PHP_EXT_SAVE_PATH','PHP session.save_path');
  define('LABEL_PHP_EXT_FTP','Support de FTP');
  define('LABEL_PHP_EXT_CURL','Support de cURL');
  define('LABEL_CURL_NONSSL','Capacit&eacute; NON-SSL de cURL');
  define('LABEL_CURL_SSL','Capacit&eacute; SSL de cURL');
  define('LABEL_CURL_NONSSL_PROXY','Capacit&eacute; NON-SSL de cURL via proxy');
  define('LABEL_CURL_SSL_PROXY','Capacit&eacute; SSL de cURL via proxy');
  define('LABEL_PHP_MAG_QT_RUN','PHP magic_quotes_runtime');
  define('LABEL_PHP_MAG_QT_SYBASE','PHP magic_quotes_sybase');
  define('LABEL_PHP_EXT_GD','Support de GD');
  define('LABEL_GD_VER','Version de GD');
  define('LABEL_PHP_EXT_OPENSSL','Support d\'OpenSSL');
  define('LABEL_PHP_UPLOAD_STATUS','PHP file_uploads');
  define('LABEL_PHP_EXT_PFPRO','Support de Payflow Pro');
  define('LABEL_PHP_EXT_ZLIB','Support de la compression ZLIB');
  define('LABEL_PHP_SESSION_TRANS_SID','PHP session.use_trans_sid');
  define('LABEL_DISK_FREE_SPACE','Espace disque libre sur le serveur');
  define('LABEL_XML_SUPPORT','Support de XML');
  define('LABEL_OPEN_BASEDIR','PHP open_basedir (restrictions)');
  define('LABEL_UPLOAD_TMP_DIR','PHP upload_tmp_dir');
  define('LABEL_SENDMAIL_FROM','PHP sendmail_from');
  define('LABEL_SENDMAIL_PATH','PHP sendmail_path');
  define('LABEL_SMTP_MAIL','PHP destination SMTP');
  define('LABEL_GZIP', 'PHP output_buffering (gzip)');
  define('LABEL_INCLUDE_PATH','PHP include_path');

  define('LABEL_CRITICAL','El&eacute;ments critiques');
  define('LABEL_RECOMMENDED','El&eacute;ments recommand&eacute;s');
  define('LABEL_OPTIONAL','El&eacute;ments optionnels');

  define('LABEL_EXPLAIN','&nbsp;Cliquez ici pour plus d\'infos');
  define('LABEL_FOLDER_PERMISSIONS','Permissions sur les fichiers et r&eacute;pertoires');
  define('LABEL_WRITABLE_FILE_INFO', 'Pour que le programme d\'installation puisse enregistrer les param&egrave;tres que vous allez fournir dans les pages suivantes, les fichiers \'configure.php\' indiqu&eacute;s ci-dessous doivent &ecirc;tre inscriptibles.');
  define('LABEL_WRITABLE_FOLDER_INFO','Pour que la plupart des fonctions usuelles et d\'administration de Zen Cart&trade; fonctionnent correctement,
vous devrez mettre la permission en &eacute;criture sur plusieurs fichiers/r&eacute;pertoires.  Voici la liste des r&eacute;pertoires qui doivent avoir les permissions en lecture et &eacute;criture, 
avec les param&egrave;tres recommand&eacute;s pour CHMOD. Veuillez corriger ces permissions avant de continuer l\'installation. 
Actualisez cette page dans votre navigateut pour v&eacute;rifier &agrave; nouveau les permissions.<br /><br />Certains h&eacute;bergeurs ne vous permettent pas de mettre des CHMOD 777, mais seulement 666. Commencez d\'abord avec les permissions les plus grandes, puis baissez en cas de besoin.');
?>