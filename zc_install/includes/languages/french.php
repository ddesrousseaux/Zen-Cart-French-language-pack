<?php
/**
 * Main English language file for installer *
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: french.php 7411 2007-11-11 05:47:10Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
/**
 * defining language components for the page
 */
  define('YES', 'OUI');
  define('NO', 'NON');
  define('REFRESH_BUTTON', 'Rev&eacute;rifier');
  define('OKAY', 'OK');

  // Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="fr"');

  // charset for web pages and emails
  define('CHARSET', 'iso-8859-1');

  // META TAG TITLE
  define('META_TAG_TITLE', (defined('TEXT_PAGE_HEADING') ? TEXT_PAGE_HEADING : 'Programme d\'installation de Zen Cart&trade;'));

  define('INSTALLATION_IN_PROGRESS','Installation en cours...');

  if (isset($_GET['main_page']) && ($_GET['main_page']== 'index' || $_GET['main_page']== 'license')) {
    define('TEXT_ERROR_WARNING', 'ATTENTION: Il y a quelques petits probl&egrave;mes &agrave; r&eacute;soudre avant de continuer.');
  } else {
    define('TEXT_ERROR_WARNING', '<span class="errors"><strong>ATTENTION:&nbsp; Probl&egrave;mes trouv&eacute;s</strong></span>');
  }

  define('DB_ERROR_NOT_CONNECTED', 'Erreur d\'installation: Impossible de se connecter &agrave; la base de donn&eacute;es');
	define('SHOULD_UPGRADE','Vous devriez envisager une mise &agrave; jour !');
  define('MUST_UPGRADE','Vous devez mettre &agrave; jour ceci avant d\'installer Zen Cart&trade;');

  define('UPLOAD_SETTINGS','La taille maximum d\'upload support&eacute;e sera LA PLUS BASSE de ces valeurs:.<br />
<em>upload_max_filesize</em> dans php.ini %s <br />
<em>post_max_size</em> dans php.ini: %s <br />' . 
//'<em>Zen Cart&trade;</em> Upload Setting: %s <br />' .
'Vous pouvez avoir des param&egrave;tres Apache qui vous emp&ecirc;chent d\'uploader des fichiers ou qui limitent ces fichiers &agrave; une taille maximum.  
Voir la documentation Apache pour plus d\'information.');

  define('TEXT_HELP_LINK', ' plus d\'infos...');
  define('TEXT_CLOSE_WINDOW', '[Fermer la fen&ecirc;tre]');
  define('STORE_ADDRESS_DEFAULT_VALUE', 'Nom de la boutique
  Adresse
  Pays
  T&eacute;l&eacute;phone');

  define('ERROR_TEXT_ADMIN_CONFIGURE', 'Fichier /admin/includes/configure.php inexistant');
  define('ERROR_CODE_ADMIN_CONFIGURE', '2');

  define('ERROR_TEXT_STORE_CONFIGURE', 'Fichier /includes/configure.php inexistant');
  define('ERROR_CODE_STORE_CONFIGURE', '3');

  define('ERROR_TEXT_PHYSICAL_PATH_ISEMPTY', 'Le chemin physique est vide');
  define('ERROR_CODE_PHYSICAL_PATH_ISEMPTY', '9');

  define('ERROR_TEXT_PHYSICAL_PATH_INCORRECT', 'Le chemin physique est incorrect');
  define('ERROR_CODE_PHYSICAL_PATH_INCORRECT', '10');

  define('ERROR_TEXT_VIRTUAL_HTTP_ISEMPTY', 'Le chemin virtuel HTTP est vide');
  define('ERROR_CODE_VIRTUAL_HTTP_ISEMPTY', '11');

  define('ERROR_TEXT_VIRTUAL_HTTPS_ISEMPTY', 'Le chemin virtuel HTTPS est vide');
  define('ERROR_CODE_VIRTUAL_HTTPS_ISEMPTY', '12');

  define('ERROR_TEXT_VIRTUAL_HTTPS_SERVER_ISEMPTY', 'Le serveur virtuel HTTPS est vide');
  define('ERROR_CODE_VIRTUAL_HTTPS_SERVER_ISEMPTY', '13');

  define('ERROR_TEXT_DB_USERNAME_ISEMPTY', 'Le nom d\'utilisateur de la base de donn&eacute;es est vide');
  define('ERROR_CODE_DB_USERNAME_ISEMPTY', '16'); // re-using another one, since message is essentially the same.

  define('ERROR_TEXT_DB_HOST_ISEMPTY', 'L\'h&ocirc;te de la base de donn&eacute;es vide');
  define('ERROR_CODE_DB_HOST_ISEMPTY', '24');

  define('ERROR_TEXT_DB_NAME_ISEMPTY', 'Le nom de la base de donn&eacute;es est vide'); 
  define('ERROR_CODE_DB_NAME_ISEMPTY', '25');

  define('ERROR_TEXT_DB_SQL_NOTEXIST', 'Fichier SQL d\'installation inexistant');
  define('ERROR_CODE_DB_SQL_NOTEXIST', '26');

  define('ERROR_TEXT_DB_NOTSUPPORTED', 'Base de donn&eacute;es non support&eacute;e');
  define('ERROR_CODE_DB_NOTSUPPORTED', '27');

  define('ERROR_TEXT_DB_CONNECTION_FAILED', '&Eacute;chec de la connexion &agrave; la base de donn&eacute;es');
  define('ERROR_CODE_DB_CONNECTION_FAILED', '28');

  define('ERROR_TEXT_STORE_ZONE_NEEDS_SELECTION', 'La Zone de la boutique doit &ecirc;tre sp&eacute;cifi&eacute;e.');
  define('ERROR_CODE_STORE_ZONE_NEEDS_SELECTION', '29');

  define('ERROR_TEXT_DB_NOTEXIST', 'Base de donn&eacute;es inexistante');
  define('ERROR_CODE_DB_NOTEXIST', '30');

  define('ERROR_TEXT_STORE_NAME_ISEMPTY', 'Le nom de la boutique est vide');
  define('ERROR_CODE_STORE_NAME_ISEMPTY', '31');

  define('ERROR_TEXT_STORE_OWNER_ISEMPTY', 'Le nom du propri&eacute;taire de la boutique est vide');
  define('ERROR_CODE_STORE_OWNER_ISEMPTY', '32');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_ISEMPTY', 'L\'adresse email de la boutique est vide');
  define('ERROR_CODE_STORE_OWNER_EMAIL_ISEMPTY', '33');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_NOTEMAIL', 'L\'adresse email de la boutique est invalide');
  define('ERROR_CODE_STORE_OWNER_EMAIL_NOTEMAIL', '34');

define('ERROR_TEXT_STORE_ADDRESS_ISEMPTY', 'L\'adresse postale de la boutique est vide');
define('ERROR_CODE_STORE_ADDRESS_ISEMPTY', '35');

define('ERROR_TEXT_DEMO_SQL_NOTEXIST', 'Fichier SQL des produits de d&eacute;mo inexistant');
define('ERROR_CODE_DEMO_SQL_NOTEXIST', '36');

define('ERROR_TEXT_ADMIN_USERNAME_ISEMPTY', 'Le nom d\'administrateur est vide');
define('ERROR_CODE_ADMIN_USERNAME_ISEMPTY', '46');

define('ERROR_TEXT_ADMIN_EMAIL_ISEMPTY', 'Email de l\'administrateur vide');
define('ERROR_CODE_ADMIN_EMAIL_ISEMPTY', '47');

define('ERROR_TEXT_ADMIN_EMAIL_NOTEMAIL', 'Email de l\'administrateur invalide');
define('ERROR_CODE_ADMIN_EMAIL_NOTEMAIL', '48');

define('ERROR_TEXT_ADMIN_PASS_ISEMPTY', 'Mot de passe administrateur vide');
define('ERROR_CODE_ADMIN_PASS_ISEMPTY', '49');

define('ERROR_TEXT_ADMIN_PASS_NOTEQUAL', 'Les mots de passe ne correspondent pas');
define('ERROR_CODE_ADMIN_PASS_NOTEQUAL', '50');

define('ERROR_TEXT_4_1_2', 'La version PHP est 4.1.2');
define('ERROR_CODE_4_1_2', '1');
define('ERROR_TEXT_PHP_OLD_VERSION', 'Version de PHP non support&eacute;e');
define('ERROR_CODE_PHP_OLD_VERSION', '55');
define('ERROR_TEXT_PHP_VERSION', 'Version de PHP non support&eacute;e');
define('ERROR_CODE_PHP_VERSION', '91');

define('ERROR_TEXT_ADMIN_CONFIGURE_WRITE', 'Impossible d\'&eacute;crire dans le fichier configure.php de l\'administration');
define('ERROR_CODE_ADMIN_CONFIGURE_WRITE', '56');

define('ERROR_TEXT_STORE_CONFIGURE_WRITE', 'Impossible d\'&eacute;crire dans le fichier configure.php de la boutique');
define('ERROR_CODE_STORE_CONFIGURE_WRITE', '57');

define('ERROR_TEXT_CACHE_DIR_ISEMPTY', 'Le r&eacute;pertoire de cache Sessions/SQL est vide');
define('ERROR_CODE_CACHE_DIR_ISEMPTY', '61');

define('ERROR_TEXT_CACHE_DIR_ISDIR', 'R&eacute;pertoire de cache Sessions/SQL inexistant');
define('ERROR_CODE_CACHE_DIR_ISDIR', '62');

define('ERROR_TEXT_CACHE_DIR_ISWRITEABLE', 'Impossible d\'&eacute;crire dans le r&eacute;pertoire de cache Session/SQL');
define('ERROR_CODE_CACHE_DIR_ISWRITEABLE', '63');

define('ERROR_TEXT_PHPBB_CONFIG_NOTEXIST', 'Fichiers de configuration de phpBB inexistants');
define('ERROR_CODE_PHPBB_CONFIG_NOTEXIST', '68');

define('ERROR_TEXT_REGISTER_GLOBALS_ON', 'Register Globals est activ&eacute;');
define('ERROR_CODE_REGISTER_GLOBALS_ON', '69');

define('ERROR_TEXT_SAFE_MODE_ON', 'Safe Mode est activ&eacute;');
define('ERROR_CODE_SAFE_MODE_ON', '70');

define('ERROR_TEXT_CACHE_CUSTOM_NEEDED','Un r&eacute;pertoire de cache est n&eacute;cessaire pour utiliser la mise en cache des fichiers');
define('ERROR_CODE_CACHE_CUSTOM_NEEDED', '71');

define('ERROR_TEXT_TABLE_RENAME_CONFIGUREPHP_FAILED','Impossible de mettre &agrave; jour tous vos fichiers configure.php avec le nouveau pr&eacute;fixe');
define('ERROR_CODE_TABLE_RENAME_CONFIGUREPHP_FAILED', '72');

define('ERROR_TEXT_TABLE_RENAME_INCOMPLETE','Impossible de renommer toutes les tables');
define('ERROR_CODE_TABLE_RENAME_INCOMPLETE', '73');

define('ERROR_TEXT_SESSION_SAVE_PATH','Impossible d\'&eacute;crire dans le PHP "session.save_path"');
define('ERROR_CODE_SESSION_SAVE_PATH','74');

define('ERROR_TEXT_MAGIC_QUOTES_RUNTIME','PHP "magic_quotes_runtime" est actif');
define('ERROR_CODE_MAGIC_QUOTES_RUNTIME','75');

define('ERROR_TEXT_DB_VER_UNKNOWN','Version inconnue du moteur de base de donn&eacute;es');
define('ERROR_CODE_DB_VER_UNKNOWN','76');

define('ERROR_TEXT_DB_MYSQL5','La compatibilit&eacute; avec MySQL 5 n\'est pas compl&egrave;tement test&eacute;e');
define('ERROR_CODE_DB_MYSQL5','90');

define('ERROR_TEXT_UPLOADS_DISABLED','L\'Upload de fichiers est d&eacute;sactiv&eacute;');
define('ERROR_CODE_UPLOADS_DISABLED','77');

define('ERROR_TEXT_ADMIN_PWD_REQUIRED','Le mot de passe Admin est n&eacute;cessaire pour faire la mise &agrave; jour');
define('ERROR_CODE_ADMIN_PWD_REQUIRED','78');

define('ERROR_TEXT_PHP_SESSION_SUPPORT','Le support des sessions PHP est n&eacute;cessaire');
define('ERROR_CODE_PHP_SESSION_SUPPORT','80');

define('ERROR_TEXT_PHP_AS_CGI','Il n\'est pas recommand&eacute; que PHP s\'ex&eacute;cute en cgi sauf pour les serveurs Windows');
define('ERROR_CODE_PHP_AS_CGI','81');

define('ERROR_TEXT_DISABLE_FUNCTIONS','Des fonctions PHP n&eacute;cessaires sont d&eacute;sactiv&eacute;es sur votre serveur');
define('ERROR_CODE_DISABLE_FUNCTIONS','82');

define('ERROR_TEXT_OPENSSL_WARN','OpenSSL est "une" des mani&egrave;res de configurer un serveur pour utiliser SSL (https://) sur votre site.<br /><br />S\'il est indiqu&eacute; comme indisponible, les causes possibles peuvent &ecirc;tre les suivantes:<br />(a) votre h&eacute;bergeur ne supporte pas le SSL<br />(b) votre serveur web n\'a pas OpenSSL install&eacute;, mais PEUT avoir le service SSL disponible sous une autre forme<br />(c) votre h&eacute;bergeur n\'est peut-&ecirc;tre pas encore au courant des d&eacute;tails de votre certificat SSL pour qu\'il puisse l\'activer sur votre nom de domaine<br />(d) PHP n\'est pas encore configur&eacute; pour OpenSSL.<br /><br />Dans tous les cas, si vous avez besoin du cryptage sur vos pages web (SSL), vous devriez contacter votre h&eacute;bergeur pour de l\'aide.');
define('ERROR_CODE_OPENSSL_WARN','79');

define('ERROR_TEXT_DB_PREFIX_NODOTS','Les pr&eacute;fixes de tables ne peuvent contenir que des lettres, nombres, et tirets bas (_).');
define('ERROR_CODE_DB_PREFIX_NODOTS','83');

define('ERROR_TEXT_PHP_SESSION_AUTOSTART','PHP Session.autostart doit &ecirc;tre d&eacute;sactiv&eacute;e.');
define('ERROR_CODE_PHP_SESSION_AUTOSTART','84');
define('ERROR_TEXT_PHP_SESSION_TRANS_SID','PHP Session.use_trans_sid doit &ecirc;tre d&eacute;sactiv&eacute;e.');
define('ERROR_CODE_PHP_SESSION_TRANS_SID','86');
define('ERROR_TEXT_DB_PRIVS','Des permissions sont n&eacute;cessaires pour l\'utilisateur de la base de donn&eacute;es');
define('ERROR_CODE_DB_PRIVS','87');
define('ERROR_TEXT_COULD_NOT_WRITE_CONFIGURE_FILES','Erreur lors de l\'&eacute;criture dans le fichier /includes/configure.php');
define('ERROR_CODE_COULD_NOT_WRITE_CONFIGURE_FILES','88');
define('ERROR_TEXT_GD_SUPPORT','D&eacute;tails du support GD');
define('ERROR_CODE_GD_SUPPORT','89');

define('ERROR_TEXT_OPEN_BASEDIR','Il peut y avoir des probl&egrave;mes en envoyant des fichiers ou en faisant des sauvegardes');
define('ERROR_CODE_OPEN_BASEDIR','92');
define('ERROR_TEXT_CURL_SUPPORT','La prise en charge de cURL n\'a pas &eacute;t&eacute; d&eacute;tect&eacute;e ou cURL est d&eacute;sactiv&eacute;');
define('ERROR_CODE_CURL_SUPPORT','93');
define('ERROR_TEXT_CURL_NOT_COMPILED', 'cURL non compil&eacute; avec PHP - Notifier l\'administrateur du serveur');
define('ERROR_TEXT_CURL_PROBLEM_GENERAL', 'Probl&egrave;mes d&eacute;tect&eacute;s avec cURL: ');
define('ERROR_TEXT_CURL_SSL_PROBLEM', 'cURL n&eacute;cessite SSL. Veuillez notifier votre webmaster ou h&eacute;bergeur.');
define('ERROR_CODE_CURL_SSL_PROBLEM','95');

define('ERROR_TEXT_MAGIC_QUOTES_SYBASE','PHP "magic_quotes_sybase" est actif');
define('ERROR_CODE_MAGIC_QUOTES_SYBASE','94');

$error_code ='';
if (isset($_GET['error_code'])) {
  $error_code = $_GET['error_code'];
  }

switch ($error_code) {
  case ('1'):
    define('POPUP_ERROR_HEADING', 'PHP Version 4.1.2 d&eacute;tect&eacute;');
    define('POPUP_ERROR_TEXT', 'Certaines versions de PHP Version 4.1.2 ont un bug qui affecte les tableaux super globaux. Cela peut rendre inaccessible la partie d\'administration de Zen Cart&trade;. Nous vous conseillons de mettre &agrave; jour votre version de PHP si possible.<br /><br />PHP 4.3.2 ou plus serait un minimum pour que Zen Cart&trade; tourne bien.<br />Nous vous recommandons FORTEMENT d\'utiliser PHP 4.3.11 ou sup&eacute;rieur (dans la s&eacute;rie des v4.x).');
    
  break;
  case ('2'):
    define('POPUP_ERROR_HEADING', '/admin/includes/configure.php inexistant');
    define('POPUP_ERROR_TEXT', 'Le fichier /admin/includes/configure.php est inexistant. Vous pouvez cr&eacute;er un fichier vide de ce nom ou renommer le fichier /admin/includes/dist-configure.php en configure.php.  Apr&egrave;s l\'avoir cr&eacute;&eacute;, vous devez lui mettre les permissions en lecture et &eacute;criture, soit CHMOD 666 ou CHMOD 777.');
    
  break;
  case ('3'):
    define('POPUP_ERROR_HEADING', '/includes/configure.php does inexistant');
    define('POPUP_ERROR_TEXT', 'Le fichier /includes/configure.php est inexistant. Vous pouvez cr&eacute;er un fichier vide de ce nom ou renommer le fichier /includes/dist-configure.php en configure.php.  Apr&egrave;s l\'avoir cr&eacute;&eacute;, vous devez lui mettre les permissions en lecture et &eacute;criture, soit CHMOD 666 ou CHMOD 777.');
    
  break;
  case ('4'):
    define('POPUP_ERROR_HEADING', 'Chemin physique');
    define('POPUP_ERROR_TEXT', 'Le chemin physique est le chemin absolu vers le r&eacute;pertoire dans lequel se trouvent vos fichiers de Zen Cart&trade;. Par exemple, sur certains syst&egrave;mes Linux, les fichiers HTML sont stock&eacute;s dans /var/www/html. Si vous mettez donc vos fichiers de Zen Cart&trade; dans un r&eacute;pertoire appel&eacute; \'store\', le chemin physique sera /var/www/html/store. La plupart du temps, le programme d\'installation devinera ce chemin correctement.');
    
  break;
  case ('5'):
    define('POPUP_ERROR_HEADING', 'Chemin virtuel HTTP');
    define('POPUP_ERROR_TEXT', 'C\'est l\'adresse que vous devrez saisir dans votre navigateur pour voir votre boutique Zen Cart&trade;. Si le site est &agrave; la racine de votre domaine, ce sera quelque chose comme \'http://www.example.com\'. Si vous avez mis vos fichiers dans un r&eacute;pertoire appel&eacute; \'store\' alors l\'adresse sera \'http://www.example.com/store\'.');
    
  break;
  case ('6'):
    define('POPUP_ERROR_HEADING', 'Serveur virtuel HTTPS');
    define('POPUP_ERROR_TEXT', 'C\'est l\'adresse de votre serveur web s&eacute;curis&eacute;/SSL. Cette adresse d&eacute;pend de la fa&ccedil;on dont le mode s&eacute;curis&eacute;/SSL est impl&eacute;ment&eacute; sur votre serveur. Il est conseill&eacute; de lire la <a href="http://www.zen-cart.com/forum/faq.php?faq=install_misc#faq_configure_ssl" target="_blank">partie de la FAQ sur SSL</a> pour vous assurer d\'avoir une configuration correcte.');
    
  break;
  case ('7'):
    define('POPUP_ERROR_HEADING', 'Chemin virtuel HTTPS');
    define('POPUP_ERROR_TEXT', 'C\'est l\'adresse que vous devrez saisir dans un navigateur pour voir votre boutique Zen Cart&trade; en mode s&eacute;curis&eacute;/SSL. Il est conseill&eacute; de lire la <a href="http://www.zen-cart.com/forum/faq.php?faq=install_misc#faq_configure_ssl" target="_blank">partie de la FAQ sur SSL</a> pour vous assurer d\'avoir une configuration correcte.');
    
  break;
  case ('8'):
    define('POPUP_ERROR_HEADING', 'Activer SSL');
    define('POPUP_ERROR_TEXT', 'Ce param&egrave;tre d&eacute;termine si le mode s&eacute;curis&eacute;/SSL (HTTPS:) est utilis&eacute; sur les pages &agrave; risque de votre boutique Zen Cart&trade;.<br /><br />Chaque page sur laquelle des informations personnelles sont saisies (par exemple: connexion, encaissement, compte client) peut &ecirc;tre prot&eacute;g&eacute;e par le mode s&eacute;curis&eacute;/SSL.  Ce mode peut aussi &ecirc;tre activ&eacute; pour la partie administration du site.<br /><br />Vous devez avoir acc&egrave;s &agrave; un serveur SSL (par l\'utilisation de HTTPS au lieu de HTTP). <br /><br />SI VOUS N\'ETES PAS SUR d\'avoir un serveur SSL alors laissez ce param&egrave;tre sur NON pour le moment, et v&eacute;rifiez aupr&egrave;s de votre h&eacute;bergeur. Note: comme tous les param&egrave;tres, ceci peut &ecirc;tre modifi&eacute; ult&eacute;rieurement en &eacute;ditant le fichier configure.php.');
    
  break;
  case ('9'):
    define('POPUP_ERROR_HEADING', 'Le chemin physique est vide');
    define('POPUP_ERROR_TEXT', 'Vous avez laiss&eacute; le champ du chemin absolu vide. Vous devez le remplir correctement.');
    
  break;
  case ('10'):
    define('POPUP_ERROR_HEADING', 'Le chemin physique est incorrect');
    define('POPUP_ERROR_TEXT', 'La valeur que vous avez entr&eacute; pour le chemin absolu semble &ecirc;tre invalide. Veuillez corriger et r&eacute;essayer.');
    
  break;
  case ('11'):
    define('POPUP_ERROR_HEADING', 'Chemin virtuel HTTP vide');
    define('POPUP_ERROR_TEXT', 'Vous avez laiss&eacute; le champ de l\'adresse HTTP vide. Vous devez le remplir correctement.');
    
  break;
  case ('12'):
    define('POPUP_ERROR_HEADING', 'Chemin virtuel HTTPS vide');
    define('POPUP_ERROR_TEXT', 'Vous avez laiss&eacute; le champ de l\'adresse HTTPS vide, alors que le mode SSL est activ&eacute;. Vous devez le remplir correctement ou d&eacute;sactiver le mode SSL.');
    
  break;
  case ('13'):
    define('POPUP_ERROR_HEADING', 'Serveur HTTPS vide');
    define('POPUP_ERROR_TEXT', 'Vous avez laiss&eacute; le champ de l\'adresse du serveur HTTPS vide, alors que le mode SSL est activ&eacute;. Vous devez le remplir correctement ou d&eacute;sactiver le mode SSL.');
    
  break;
  case ('14'):
    define('POPUP_ERROR_HEADING', 'Type de base de donn&eacute;es');
    define('POPUP_ERROR_TEXT', 'Zen Cart&trade; est conçu pour prendre en charge diff&eacute;rent types de base de donn&eacute;es. Malheureusement, cela n\'est pas encore finalis&eacute; pour le moment. Vous devez utiliser uniquement le type MySQL pour l\'instant.');
    
  break;
  case ('15'):
    define('POPUP_ERROR_HEADING', 'H&ocirc;te de base de donn&eacute;es');
    define('POPUP_ERROR_TEXT', 'C\'est le nom du serveur web sur lequel tourne le moteur de base de donn&eacute;es. Dans la plupart des cas, cela peut &ecirc;tre laiss&eacute; sur \'localhost\'. Dans certains cas particuliers, vous devrez demander &agrave; votre h&eacute;bergeur le nom du serveur de la base de donn&eacute;es.<br /><br />La plupart utilisent "localhost".<br />Yahoo Hosting utilise toujours "mysql".<br />Les autres h&ocirc;tes vous fourniront leur nom d\'h&ocirc;te via leur panneau de contr&ocirc;le.');
    
  break;
  case ('16'):
    define('POPUP_ERROR_HEADING', 'Nom d\'utilisateur Base de donn&eacute;es');
    define('POPUP_ERROR_TEXT', 'Toutes les bases de donn&eacute;es n&eacute;cessitent un nom d\'utilisateur et un mot de passe pour pouvoir y acc&eacute;der. Le nom d\'utilisateur de votre base de donn&eacute;es peut avoir &eacute;t&eacute; configur&eacute; par votre h&eacute;bergeur, auquel cas vous devrez le contacter pour avoir les d&eacute;tails.<br /><br />Parfois le nom est pr&eacute;fix&eacute; par votre nom de compte h&eacute;berg&eacute;, suivi du nom d\'utilisateur de base de donn&eacute;es que vous avez choisi. Par exemple: moncompte_zencartuser.');
    
  break;
  case ('17'):
    define('POPUP_ERROR_HEADING', 'Mot de passe de Base de donn&eacute;es');
    define('POPUP_ERROR_TEXT', 'Toutes les bases de donn&eacute;es n&eacute;cessitent un nom d\'utilisateur et un mot de passe pour pouvoir y acc&eacute;der. Le mot de passe de votre base de donn&eacute;es peut avoir &eacute;t&eacute; assign&eacute; par votre h&eacute;bergeur, auquel cas vous devrez le contacter pour avoir les d&eacute;tails.<br /><br />Faites attention car il est sensible &agrave; la casse (majuscules et minuscules).');
    
  break;
  case ('18'):
    define('POPUP_ERROR_HEADING', 'Nom de la base de donn&eacute;es');
    define('POPUP_ERROR_TEXT', 'C\'est le nom de la base de donn&eacute;es qu\'utilisera Zen Cart&trade;. Si vous n\'&ecirc;tes pas s&ucirc;r de cela, vous devriez contacter votre h&eacute;bergeur pour plus d\'informations.<br /><br />Parfois le nom est pr&eacute;fix&eacute; par votre nom de compte h&eacute;berg&eacute;, suivi du nom de base de donn&eacute;es que vous avez choisi. Par exemple: moncompte_zencartdb.');
    
  break;
  case ('19'):
    define('POPUP_ERROR_HEADING', 'Pr&eacute;fixe de tables');
    define('POPUP_ERROR_TEXT', 'Zen Cart&trade; vous permet d\'ajouter un pr&eacute;fixe au nom des tables utilis&eacute;es pour stocker les donn&eacute;es. C\'est particuli&egrave;rement utile si votre h&eacute;bergeur ne vous autorise qu\'une seule base de donn&eacute;es, et que vous voulez y faire cohabiter plusieurs scripts qui partagent cette m&ecirc;me base de donn&eacute;es, cela identifiera clairement les tables de Zen Cart&trade; en leur ajoutant un pr&eacute;fixe. <br /><br /><strong>Normalement vous avez juste &agrave; laisser ce param&egrave;tre tel quel (c\'est &agrave; dire vide).</strong><br /><br />Seuls les caract&egrave;res suivants sont valides: nombres, lettres, et tirets bas (_).');
    
  break;
  case ('20'):
    define('POPUP_ERROR_HEADING', 'Cr&eacute;ation de la base de donn&eacute;es');
    define('POPUP_ERROR_TEXT', 'Ce param&egrave;tre d&eacute;termine si le programme d\'installation doit essayer de cr&eacute;er la base de donn&eacute;es pour Zen Cart&trade;. Note: \'cr&eacute;ation\' dans ce contexte, n\'a rien &agrave; voir avec la cr&eacute;ation des tables de Zen Cart&trade;, laquelle sera r&eacute;alis&eacute; automatiquement de toute fa&ccedil;on. La plupart des h&eacute;bergeurs n\'autorisent pas la \'cr&eacute;ation\' de base de donn&eacute;es, mais fournissent une autre m&eacute;thode pour le faire, comme cPanel ou phpMyAdmin.');
    
  break;
  case ('21'):
    define('POPUP_ERROR_HEADING', 'Connexion base de donn&eacute;es');
    define('POPUP_ERROR_TEXT', 'Les connexions permanentes sont une m&eacute;thode pour r&eacute;duire la charge sur la base de donn&eacute;es. Vous devriez consulter votre h&eacute;bergeur avant d\'activer cette option.  Activer les "connexions permanentes" peut causer des probl&egrave;mes de base de donn&eacute;es &agrave; votre h&eacute;bergeur s\'il ne l\'a pas correctement configur&eacute;.<br /><br />Encore une fois, assurez-vous aupr&egrave;s de votre h&eacute;bergeur que vous pouvez utiliser les connections permanentes, sinon ne les utilisez pas.');
    
  break;
  case ('22'):
    define('POPUP_ERROR_HEADING', 'Sessions en base de donn&eacute;es');
    define('POPUP_ERROR_TEXT', 'Cela d&eacute;termine si les informations de sessions sont stock&eacute;es dans un fichier ou dans la base de donn&eacute;es. Bien que les sessions stock&eacute;es dans des fichiers soient plus rapides, <strong>les sessions en base de donn&eacute;es</strong> sont recommand&eacute;es pour toutes les boutiques en ligne qui utilisent des connexions SSL, par s&eacute;curit&eacute;.');
    
  break;
  case ('23'):
    define('POPUP_ERROR_HEADING', 'Activer SSL');
    define('POPUP_ERROR_TEXT', 'Mettre cela sur "true" modifie simplement le comportement de Zen Cart&trade; &agrave; TENTER d\'op&eacute;rer certaines pages en mode SSL.  La r&eacute;ussite des cette op&eacute;ration d&eacute;pend de la validit&eacute; du nom de serveur et du chemin HTTPS que vous avez entr&eacute;. Votre h&eacute;bergeur devrait vous fournir ces informations.<br />Si vous n\'avez pas encore le SSL, vous pourriez l\'acheter. Cela inclut un co&ucirc;t mensuel pour avoir une adresse IP d&eacute;di&eacute;e ainsi qu\'un co&ucirc;t annuel pour le certificat SSL.');
    
  break;
  case ('24'):
    define('POPUP_ERROR_HEADING', 'H&ocirc;te de base de donn&eacute;es vide');
    define('POPUP_ERROR_TEXT', 'Le champ de l\'h&ocirc;te de base de donn&eacute;es est vide. Veuillez entrer un nom d\'h&ocirc;te de serveur de base de donn&eacute;es valide. <br />C\'est le nom du serveur sur lequel votre h&eacute;bergeur fait tourner le moteur de base de donn&eacute;es. Dans la plupart des cas, cela peut rester sur \'localhost\'. Dans certains cas, vous devrez demander &agrave; votre h&eacute;bergeur de vous fournir le nom du serveur de leur base de donn&eacute;es.');
  break;
  
  case ('25'):
    define('POPUP_ERROR_HEADING', 'Nom de la base de donn&eacute;es vide');
    define('POPUP_ERROR_TEXT', 'Le champ du nom de la base de donn&eacute;es est vide. Veuillez entrez le nom de la base de donn&eacute;es que vous souhaitez utiliser pour Zen Cart&trade;.<br />C\'est le nom de la base de donn&eacute;es qui sera utilis&eacute; pour Zen Cart&trade;. Si vous n\'&ecirc;tes pas s&ucirc;r de la valeur &agrave; mettre ici, vous devriez contacter votre h&eacute;bergeur pour plus d\'informations.');
    
  break;
  case ('26'):
    define('POPUP_ERROR_HEADING', 'Le fichier d\'installation SQL inexistant');
    define('POPUP_ERROR_TEXT', 'Le programme d\'installation ne peut trouver le fichier d\'installation .SQL n&eacute;cessaire. Ce fichier doit se trouver dans le r&eacute;pertoire \'zc_install/sql\' et se nommer \'mysql_zencart.sql\'.');
    
  break;
  case ('27'):
    define('POPUP_ERROR_HEADING', 'Base de donn&eacute;es incompatible');
    define('POPUP_ERROR_TEXT', 'Le type de base de donn&eacute;es que vous avez choisi ne semble pas &ecirc;tre support&eacute; par la version de PHP que vous avez install&eacute;. Vous devriez v&eacute;rifier avec votre h&eacute;bergeur que le type de base de donn&eacute;es que vous avez s&eacute;lectionn&eacute; est pris en charge. Si c\'est votre propre serveur, assurez-vous que le type de base de donn&eacute;es que vous utilisez a &eacute;t&eacute; correctement compil&eacute; avec PHP, et que les extensions/modules/dll n&eacute;cessaires sont charg&eacute;es (v&eacute;rifiez notamment dans php.ini les lignes du type "extension=mysql.so", etc).');
    
  break;
  case ('28'):
    define('POPUP_ERROR_HEADING', 'La connexion &agrave; la base de donn&eacute;es a &eacute;chou&eacute;');
    define('POPUP_ERROR_TEXT', 'Impossible de se connecter &agrave; la base de donn&eacute;es. Cela peut arriver pour un certain nombre de raisons. <br /><br />
Vous pouvez avoir donn&eacute; un mauvais nom d\'h&ocirc;te de base de donn&eacute;es, le nom d\'utilisateur ou le <em>mot de passe</em> sont erron&eacute;s. <br /><br />
Vous pouvez aussi avoir donn&eacute; un mauvais nom de base de donn&eacute;es (<strong>existe-t\'il ?</strong> <strong>L\'avez-vous cr&eacute;&eacute;e ?</strong> -- NOTE: Zen Cart&amp;trade; ne cr&eacute;&eacute; pas la base de donn&eacute;es &agrave; votre place).<br /><br />Veuillez revoir tous les champs et vous assurer qu\'ils sont corrects.');
    
  break;
  case ('29'):
    define('POPUP_ERROR_HEADING', 'Impossible de cr&eacute;er la base de donn&eacute;es');
    define('POPUP_ERROR_TEXT', 'Vous ne semblez pas avoir les permissions n&eacute;cessaires pour cr&eacute;er une nouvelle base de donn&eacute;es vide. Vous devriez peut &ecirc;tre contacter votre h&eacute;bergeur pour qu\'il le fasse pour vous. Vous pouvez aussi utiliser cpanel or phpMyAdmin pour cr&eacute;er une nouvelle base de donn&eacute;es. Une fois la base de donn&eacute;es cr&eacute;&eacute;e manuellement, RETIREZ l\'option \'Cr&eacute;er la base de donn&eacute;es\' dans le programme d\'installation de Zen Cart&trade; avant de poursuivre l\'installation.');
    
  break;
  case ('30'):
    define('POPUP_ERROR_HEADING', 'Base de donn&eacute;es inexistante');
    define('POPUP_ERROR_TEXT', 'Le nom de base de donn&eacute;es que vous avez sp&eacute;cifi&eacute; ne semble pas exister.<br />(<strong>L\'avez-vous bien cr&eacute;&eacute;e ?</strong> -- NOTE: Zen Cart&trade; ne cr&eacute;&eacute; pas la base de donn&eacute;es &agrave; votre place).<br /><br />Veuillez v&eacute;rifier les informations de votre base de donn&eacute;es, et modifier ce champ si n&eacute;cessaire.<br /><br />Vous pourrez avoir besoin d\'utiliser votre panneau d\'h&eacute;bergement pour la cr&eacute;er. Lorsque vous la cr&eacute;erez, notez bien le nom d\'utilisateur et son mot de passe, ainsi que le nom de base de donn&eacute;es utilis&eacute;, car vous en aurez besoin pour remplir les champs de cette fen&ecirc;tre d\'installation.');
    
  break;
  case ('31'):
    define('POPUP_ERROR_HEADING', 'Le nom de la boutique est vide');
    define('POPUP_ERROR_TEXT', 'Veuillez indiquer le nom que vous voulez donner &agrave; votre boutique.');
    
  break;
  case ('32'):
    define('POPUP_ERROR_HEADING', 'Le propri&eacute;taire de la boutique est vide');
    define('POPUP_ERROR_TEXT', 'Veuillez indiquer le nom du propri&eacute;taire de la boutique.  Cette information appra&icirc;tra sur la page  \'Nous Contacter\', dans les emails de \'Bienvenue\', et &agrave; d\'autres endroits de la boutique.');
    
  break;
  case ('33'):
    define('POPUP_ERROR_HEADING', 'L\'adresse email de la boutique est vide');
    define('POPUP_ERROR_TEXT', 'Veuillez indiquer l\'adresse email primaire de la boutique. C\'est l\'adresse qui sera mentionn&eacute;e comme contact informatif dans les emails envoy&eacute;s depuis la boutique. Elle ne sera pas affich&eacute;e sur les pages de la boutique, sauf si vous le sp&eacute;cifiez explicitement dans la configuration.');
    
  break;
  case ('34'):
    define('POPUP_ERROR_HEADING', 'L\'adresse email de la boutique est invalide');
    define('POPUP_ERROR_TEXT', 'Vous devez indiquer une adresse email valide.');
    
  break;
  case ('35'):
    define('POPUP_ERROR_HEADING', 'L\'adresse de la boutique est vide');
    define('POPUP_ERROR_TEXT', 'Veuillez indiquer l\'adresse postale de votre boutique.  Cela s\'affichera sur la page de contact (d&eacute;sactivable si n&eacute;cessaire), et sur les factures/bons de livraison. Cela s\'affichera aussi si un client choisit de payer par ch&egrave;que/esp&egrave;ces &agrave; l\'encaissement.');
    
  break;
  case ('36'):
    define('POPUP_ERROR_HEADING', 'Fichier SQL des produits de d&eacute;mo inexistant');
    define('POPUP_ERROR_TEXT', 'Nous n\'avons pas pu trouver le fichier SQL contenant les produits de d&eacute;monstration de Zen Cart&trade; pour les installer dans la boutique.  Veuillez v&eacute;rifier que le fichier /zc_install/demo/xxxxxxx_demo.sql existe. (xxxxxxx = votre type de base de donn&eacute;es).');
    
  break;
  case ('37'):
    define('POPUP_ERROR_HEADING', 'Nom de la boutique');
    define('POPUP_ERROR_TEXT', 'Le nom de votre boutique. Il sera utilis&eacute; dans les emails envoy&eacute;s par le syst&egrave;me, et dans certains cas, dans le titre du navigateur.');
    
  break;
  case ('38'):
    define('POPUP_ERROR_HEADING', 'Propri&eacute;taire de la boutique');
    define('POPUP_ERROR_TEXT', 'Le nom du propri&eacute;taire de la boutique pourra &ecirc;tre utilis&eacute; dans les emails envoy&eacute;s par le syst&egrave;me.');
    
  break;
  case ('39'):
    define('POPUP_ERROR_HEADING', 'Email du propri&eacute;taire de la boutique');
    define('POPUP_ERROR_TEXT', 'L\'adresse email principale pour pouvoir vous contacter. La plupart des emails envoy&eacute;s par le syst&egrave;me l\'utiliseront, tout comme la page de contact.');
    
  break;
  case ('40'):
    define('POPUP_ERROR_HEADING', 'Pays de la boutique');
    define('POPUP_ERROR_TEXT', 'Le pays dans lequel se situe votre boutique. Il est IMPORTANT de configurer cela correctement pour s\'assurer que les taxes et options de livraison vont bien fonctionner.  Il d&eacute;termine &eacute;galement la mise en page de l\'&eacute;tiquette d\'adresse sur les factures, etc.');
    
  break;
  case ('41'):
    define('POPUP_ERROR_HEADING', 'Zone de la boutique');
    define('POPUP_ERROR_TEXT', 'Ceci r&eacute;pr&eacute;sente une sous-division g&eacute;ographique de votre pays. Exemple: un &eacute;tat aux USA.');
    
  break;
  case ('42'):
    define('POPUP_ERROR_HEADING', 'Adresse de la boutique');
    define('POPUP_ERROR_TEXT', 'L\'adresse de votre boutique, utilis&eacute;e sur les factures et confirmations de commande');
    
  break;
  case ('43'):
    define('POPUP_ERROR_HEADING', 'Langue par d&eacute;faut de la boutique');
    define('POPUP_ERROR_TEXT', 'La langue par d&eacute;faut que votre boutique utilisera. Zen Cart&trade; g&egrave;re le multi-lingue, &agrave; partir du moment o&ugrave; le pack de langue correct est install&eacute;. Pour l\'instant, Zen Cart&trade; ne contient que le pack de langue anglaise par d&eacute;faut.  D\'autres packs de langues peuvent &ecirc;tre obtenus dans la rubrique de t&eacute;l&eacute;chargement de www.zen-cart.com.');
    
  break;
  case ('44'):
    define('POPUP_ERROR_HEADING', 'Devise par d&eacute;faut de la boutique');
    define('POPUP_ERROR_TEXT', 'S&eacute;lectionnez la devise par d&eacute;faut pour votre boutique.  Si votre devise n\'est pas list&eacute;e ici, cela peut &ecirc;tre chang&eacute; facilement par l\'administration une fois l\'installation termin&eacute;e.');
    
  break;
  case ('45'):
    define('POPUP_ERROR_HEADING', 'Installer les produits de D&eacute;mo');
    define('POPUP_ERROR_TEXT', 'Veuillez indiquer si vous souhaitez installer les produits de d&eacute;monstration dans la base de donn&eacute;es pour avoir un aper&ccedil;u des m&eacute;thodes par lesquelles les diff&eacute;rentes fonctionnalit&eacute;s de Zen Cart&trade; op&egrave;rent.');
    
  break;
  case ('46'):
    define('POPUP_ERROR_HEADING', 'Le nom de l\'Administrateur est vide');
    define('POPUP_ERROR_TEXT', 'Pour vous identifier sur l\'espace d\'administration quand l\'installation sera termin&eacute;e, vous devez fournir un identifiant d\'Administrateur ici.');
    
  break;
  case ('47'):
    define('POPUP_ERROR_HEADING', 'L\'adresse email est vide');
    define('POPUP_ERROR_TEXT', 'L\'adresse email de l\'Administrateur est n&eacute;cessaire pour pouvoir vous envoyer un nouveau mot de passe en cas d\'oubli.');
    
  break;
  case ('48'):
    define('POPUP_ERROR_HEADING', 'L\'email de l\'Administrateur est invalide');
    define('POPUP_ERROR_TEXT', 'Veuillez indiquer une adresse email valide.');
    
  break;
  case ('49'):
    define('POPUP_ERROR_HEADING', 'Le mot de passe de l\'Administrateur est vide');
    define('POPUP_ERROR_TEXT', 'Pour votre s&eacute;curit&eacute;, le mot de passe de l\'Administrateur ne peut &ecirc;tre vide.');
    
  break;
  case ('50'):
    define('POPUP_ERROR_HEADING', 'Les mots de passe ne correspondent pas');
    define('POPUP_ERROR_TEXT', 'Veuillez entrer &agrave; nouveau le mot de passe de l\'Administrateur et sa confirmation.');
    
  break;
  case ('51'):
    define('POPUP_ERROR_HEADING', 'Nom de l\'Administrateur');
    define('POPUP_ERROR_TEXT', 'Pour pouvoir vous connecter sur l\'espace d\'administration quand l\'installation sera termin&eacute;e, vous devez fournir un identifiant d\'Administrateur ici.');
    
  break;
  case ('52'):
    define('POPUP_ERROR_HEADING', 'Adresse email de l\'Administrateur');
    define('POPUP_ERROR_TEXT', 'L\'adresse email de l\'Administrateur est n&eacute;cessaire pour pouvoir vous envoyer un nouveau mot de passe en cas d\'oubli.');
    
  break;
  case ('53'):
    define('POPUP_ERROR_HEADING', 'Mot de passe de l\'Administrateur');
    define('POPUP_ERROR_TEXT', 'Le mot de passe de l\'Administrateur est le mot de passe qui permet l\'acc&egrave;s &agrave; votre espace d\'administration.');
    
  break;
  case ('54'):
    define('POPUP_ERROR_HEADING', 'Confirmation du mot de passe de l\'Administrateur');
    define('POPUP_ERROR_TEXT', 'Naturellement, vous devez fournir une confirmation &agrave; l\'identique du mot de passe avant qu\'il ne soit enregistr&eacute; pour usage ult&eacute;rieur.');
    
  break;
  case ('55'):
    define('POPUP_ERROR_HEADING', 'Version de PHP non prise en charge');
    define('POPUP_ERROR_TEXT', 'La version de PHP que vous utilisez sur votre serveur web n\'est pas prise en charge par Zen Cart&trade;. <br /><br />PHP 4.3.2 est le minimum requis. <br />Toutefois, nous recommandons d\'utiliser au moins PHP v4.3.11 si possible.<br /><br />PHP 5.x n\'est pas compl&egrave;tement test&eacute; avec Zen Cart&trade; pour le moment, et n\'est pas recommand&eacute;.<br /><br />Si vous essayez d\'utiliser une version plus ancienne de PHP, notez que cela peut rendre votre espace d\'administration inaccessible, peut rendre votre site vuln&eacute;rable &agrave; des attaques de hackers, et peut perturber une partie du code des sessions PHP qui garde les connexions d\'un client uniques et s&eacute;par&eacute;es des autres clients. Nous vous conseillons de mettre &agrave; jour votre version PHP.');
    
  break;
  case ('56'):
    define('POPUP_ERROR_HEADING', 'Impossible d\'&eacute;crire dans le fichier configure.php de l\'administration');
    define('POPUP_ERROR_TEXT', '<em><strong>FAQs en rapport:</strong></em><br /><a href="http://tutorials.zen-cart.com/index.php?article=9" target="_blank">Comment mettre les bonnes permissions ?</a><br /><a href="http://tutorials.zen-cart.com/index.php?article=148" target="_blank">Qu\'est-ce que CHMOD et que veulent dire les chiffres ?</a><br /><a href="http://tutorials.zen-cart.com/index.php?article=107#configurephp" target="_blank">Comment mettre les bonnes permissions sur les fichiers configure.php pour l\'installation ?</a><br /><br />Impossible d\'&eacute;crire dans le fichier <strong>admin/includes/configure.php</strong>.<br /><br />Si vous utilisez un syst&egrave;me Unix ou Linux alors veuillez faire un CHMOD 777 ou 666 sur le fichier jusqu\'&agrave; ce que l\'installation de Zen Cart&trade; soit termin&eacute;e.  En g&eacute;n&eacute;ral, cela peut &ecirc;tre fait avec votre logiciel FTP (clic droit ou &eacute;diter les propri&eacute;t&eacute;s du fichier, etc).<br /><br />Sur un syst&egrave;me Windows, c\'est plus simple, le fichier est certainement en lecture/&eacute;criture.<br /><br />Sur un serveur Windows, et tout particuli&egrave;rement si vous utilisez IIS, faites un clic droit sur le fichier, cliquez sur Securit&eacute;, et assurez-vous que le "Compte Internet invit&eacute;" ou IUSR_xxxxxxx a les permissions en lecture et &eacute;criture.<br /><br /><strong>Lorsque l\'installation sera termin&eacute;e,</strong> vous devrez r&eacute;tablir les permissions en lecture seule (CHMOD 644 ou 444, ou sur Windows, d&eacute;cochez l\'option "&eacute;criture", ou cochez la case lecture seule).');
    
  break;
  case ('57'):
    define('POPUP_ERROR_HEADING', 'Impossible d\&eacute;crire dans le fichier configure.php de la boutique');
    define('POPUP_ERROR_TEXT', '<em><strong>FAQs en rapport:</strong></em><br /><a href="http://tutorials.zen-cart.com/index.php?article=9" target="_blank">Comment mettre les bonnes permissions ?</a><br /><a href="http://tutorials.zen-cart.com/index.php?article=148" target="_blank">Qu\'est-ce que CHMOD et que veulent dire les chiffres ?</a><br /><a href="http://tutorials.zen-cart.com/index.php?article=107#configurephp" target="_blank">Comment mettre les bonnes permissions sur les fichiers configure.php pour l\'installation ?</a><br /><br />Impossible d\'&eacute;crire dans le fichier <strong>admin/includes/configure.php</strong>.<br /><br />Si vous utilisez un syst&egrave;me Unix ou Linux alors veuillez faire un CHMOD 777 ou 666 sur le fichier jusqu\'&agrave; ce que l\'installation de Zen Cart&trade; soit termin&eacute;e.  En g&eacute;n&eacute;ral, cela peut &ecirc;tre fait avec votre logiciel FTP (clic droit ou &eacute;diter les propri&eacute;t&eacute;s du fichier, etc).<br /><br />Sur un syst&egrave;me Windows, c\'est plus simple, le fichier est certainement en lecture/&eacute;criture.<br /><br />Sur un serveur Windows, et tout particuli&egrave;rement si vous utilisez IIS, faites un clic droit sur le fichier, cliquez sur Securit&eacute;, et assurez-vous que le "Compte Internet invit&eacute;" ou IUSR_xxxxxxx a les permissions en lecture et &eacute;criture.<br /><br /><strong>Lorsque l\'installation sera termin&eacute;e,</strong> vous devrez r&eacute;tablir les permissions en lecture seule (CHMOD 644 ou 444, ou sur Windows, d&eacute;cochez l\'option "&eacute;criture", ou cochez la case lecture seule).');
    
  break;
  case ('58'):
    define('POPUP_ERROR_HEADING', 'Pr&eacute;fixe des tables BDD');
    define('POPUP_ERROR_TEXT', 'Zen Cart&trade; vous permet d\'ajouter un pr&eacute;fixe aux noms des tables qu\'il utilise pour stocker ses informations. C\'est particuli&egrave;rement utile si votre h&eacute;bergeur ne vous permet de cr&eacute;er qu\'une seule base de donn&eacute;es, et si vous voulez installer d\'autres scripts dans celle-ci. <strong>Normalement, vous devez laisser ce param&egrave;tre vide.</strong>');
    
  break;
  case ('59'):
    define('POPUP_ERROR_HEADING', 'R&eacute;pertoire de cache SQL');
    define('POPUP_ERROR_TEXT', 'Les requ&ecirc;tes SQL peuvent &ecirc;tre mises en cache soit dans la base de donn&eacute;es, soit dans un fichier sur votre serveur, soit pas du tout. Si vous choisissez de mettre en cache les requ&ecirc;tes SQL dans un fichier sur votre serveur, alors vous devez fournir le r&eacute;pertoire o&ugrave; ces informations seront enregistr&eacute;es. <br /><br />L\'installation standard de Zen Cart&trade; inclut un r&eacute;pertoire \'cache\'.  Vous devez mettre ce r&eacute;pertoire en lecture/&eacute;criture pour que votre serveur web (c\'est &agrave; dire apache) puisse y acc&eacute;der.<br /><br />Veuillez vous assurer que le r&eacute;pertoire que vous choisissez existe et que le serveur web puisse &eacute;crire dedans (CHMOD 777 ou au moins 666).');
    
  break;
  case ('60'):
    define('POPUP_ERROR_HEADING', 'M&eacute;thode de cache SQL');
    define('POPUP_ERROR_TEXT', 'Certaines requ&ecirc;tes SQL peuvent &ecirc;tre mises en cache. Cela signifie que si elles sont mises en cache, elles peuvent s\'ex&eacute;cuter plus rapidement. Vous pouvez d&eacute;cider de la m&eacute;thode de cache &agrave; utiliser pour les requ&ecirc;tes SQL.<br /><br /><strong>Aucune</strong>. Les requ&ecirc;tes SQL ne seront pas mises en cache. Si vous n\'avez que tr&egrave;s peu de produits/cat&eacute;gories, cela peut donner la plus grande vitesse &agrave; votre site.<br /><br /><strong>Base de donn&eacute;es</strong>. Les requ&ecirc;tes SQL sont mises en cache dans une table de la base de donn&eacute;es. &Eacute;trangement, cela peut acc&eacute;lerer la vitesse des sites qui ont un nombre moyen de produits/cat&eacute;gories.<br /><br /><strong>Fichier</strong>. Les requ&ecirc;tes SQL sont mises en cache dans des fichiers sur le disque dur. Pour que cela fonctionne, vous devez vous assurer que le serveur web puisse &eacute;crire dans le r&eacute;pertoire dans lequel les requ&ecirc;tes doivent &ecirc;tre mises en cache. Cette m&eacute;thode semble &ecirc;tre la meilleure pour les sites qui poss&egrave;dent un grand nombre de produits/cat&eacute;gories.');
    
  break;
  case ('61'):
    define('POPUP_ERROR_HEADING', 'Le r&eacute;pertoire de cache Session/SQL est vide');
    define('POPUP_ERROR_TEXT', 'Si vous voulez utiliser la mise en cache par fichiers des requ&ecirc;tes Session/SQL, vous devez sp&eacute;cifier un r&eacute;pertoire valide sur votre serveur web, et vous assurer que le serveur web a les droits d\'&eacute;criture sur ce r&eacute;pertoire.');
    
  break;
  case ('62'):
    define('POPUP_ERROR_HEADING', 'R&eacute;pertoire de cache Session/SQL inexistant');
    define('POPUP_ERROR_TEXT', 'Si vous voulez utiliser le mise en cache par fichiers des requ&ecirc;tes Session/SQL, vous devez sp&eacute;cifier un r&eacute;pertoire valide sur votre serveur web, et vous assurer que le serveur web a les droits d\'&eacute;criture sur ce r&eacute;pertoire.');
    
  break;
  case ('63'):
    define('POPUP_ERROR_HEADING', 'Impossible d\'&eacute;crire dans le champ du r&eacute;pertoire de cache Session/SQL');
    define('POPUP_ERROR_TEXT', 'Si vous voulez utiliser le mise en cache par fichiers des requ&ecirc;tes Session/SQL, vous devez sp&eacute;cifier un r&eacute;pertoire valide sur votre serveur web, et vous assurer que le serveur web a les droits d\'&eacute;criture sur ce r&eacute;pertoire.  CHMOD 666 ou 777 le plus souvent sur Linux/Unix.  Lecture/&eacute;criture pour les serveurs Windows (sur IIS, il faut le mettre pour le compte internet Invit&eacute;).');
    
  break;
  case ('64'):
    define('POPUP_ERROR_HEADING', 'Voulez-vous un lien sur un forum phpBB dans votre site ?');
    define('POPUP_ERROR_TEXT', 'Si vous voulez connecter votre boutique Zen Cart&trade; &agrave; un forum phpBB existant, choisissez "OUI" ici.');
    
  break;
  case ('65'):
    define('POPUP_ERROR_HEADING', 'Pr&eacute;fixe des tables phpBB');
    define('POPUP_ERROR_TEXT', 'Veuillez indiquer le pr&eacute;fixe de vos tables phpBB dans leur base de donn&eacute;es. Souvent c\'est \'phpBB_\'');
    
  break;
  case ('66'):
    define('POPUP_ERROR_HEADING', 'Nom de la base de donn&eacute;es phpBB');
    define('POPUP_ERROR_TEXT', 'Veuillez indiquer le nom de la base de donn&eacute;es dans laquelle vos tables phpBB sont install&eacute;es.');
  break;
  case ('67'):
    define('POPUP_ERROR_HEADING', 'R&eacute;pertoire phpBB');
    define('POPUP_ERROR_TEXT', 'Veuillez indiquer le chemin complet du r&eacute;pertoire dans lequel se trouvent vos fichiers phpBB. Cela permettra &agrave; Zen Cart&trade; de savoir vers quel endroit rediriger les utilisateurs qui cliqueront sur le lien phpBB de votre boutique.<br /><br />Le chemin entr&eacute; ici est relatif &agrave; la racine de votre serveur. Donc, si votre installation de phpBB est dans <strong>/home/users/username/public_html/phpbb </strong>, alors vous devrez entrer <strong>/home/users/username/public_html/phpbb/</strong> ici. S\'il est dans d\'autres sous-r&eacute;pertoires, vous devrez les ajouter au chemin.<br /><br />Nous essaierons de trouver votre fichier "<em>config.php</em>" dans ce r&eacute;pertoire.');
  break;
  case ('68'):
    define('POPUP_ERROR_HEADING', 'R&eacute;pertoire phpBB');
    define('POPUP_ERROR_TEXT', 'Aucun fichier de configuration phpBB n\'a pu &ecirc;tre trouv&eacute; dans le r&eacute;pertoire que vous avez sp&eacute;cifi&eacute;. Vous devez avoir d&eacute;j&agrave; install&eacute; phpBB si vous voulez utiliser cette configuration automatique. Dans le cas contraire, vous devrez ignorer la configuration automatique de phpBB et le configurer manuellement plus tard.<br /><br />Le chemin entr&eacute; ici est relatif &agrave; la racine du serveur. Donc, si votre installation de phpBB est dans <strong>/home/users/username/public_html/phpbb </strong>, alors vous devrez entrer <strong>/home/users/username/public_html/phpbb/</strong> ici. S\'il est dans d\'autres sous-r&eacute;pertoires, vous devrez les ajouter au chemin.<br /><br />Nous essaierons de trouver le fichier "<em>config.php</em>" dans ce r&eacute;pertoire.');
  break;
  case ('69'):
    define('POPUP_ERROR_HEADING', 'Register Globals');
    define('POPUP_ERROR_TEXT', 'Zen Cart&trade; peut fonctionner avec le param&egrave;tre "Register Globals" actif ou non.  Toutefois, le d&eacute;sactiver ("off") s&eacute;curisera un peu plus votre syst&egrave;me.<br /><br />Si vous voulez le d&eacute;sactiver, et que votre h&eacute;bergeur ne vous le permet pas, vous pouvez essayer d\'ajouter ceci dans un fichier .htaccess &agrave; la racine de votre boutique (vous pouvez avoir besoin de le cr&eacute;er s\'il est inexistant):<br /><br /><code>php_value session.use_trans_sid off<BR />php_value register_globals off<br />#php_value register_globals off<BR />&lt;Files ".ht*"&gt;<BR />deny from all<BR />&lt;/Files&gt;</code><br /><br />ou demander assistance &agrave; votre h&eacute;bergeur.');
  break;
  case ('70'):
    define('POPUP_ERROR_HEADING', 'Safe Mode est actif');
    define('POPUP_ERROR_TEXT', 'Zen Cart&trade;, en tant qu\'application compl&egrave;te de e-commerce, ne fonctionne pas bien sur les serveurs qui ont le Safe Mode actif.<br /><br />Un syst&egrave;me de e-commerce n&eacute;cessite beaucoup de services qui sont souvent restreints chez les h&eacute;bergeurs mutualis&eacute;s &agrave; bas co&ucirc;t. Pour faire tourner votre boutique en ligne de mani&egrave;re optimale, il est n&eacute;cessaire de configurer le service d\'h&eacute;bergement pour qu\'il n\'ex&eacute;cute pas votre espace web en "Safe Mode".  Il faut pour cela que votre h&eacute;bergeur &eacute;crive "SAFE_MODE=OFF" dans le fichier php.ini.');
  break;
  case ('71'):
    define('POPUP_ERROR_HEADING', 'R&eacute;pertoire de cache requis pour utiliser la mise en cache par fichiers');
    define('POPUP_ERROR_TEXT', 'Si vous voulez utiliser le "cache SQL par fichiers" dans Zen Cart&trade;, il vous faudra mettre les bonnes permissions sur le r&eacute;pertoire de cache de votre espace web.<br /><br />Autrement, vous pouvez choisir la "mise en cache en base de donn&eacute;es" ou "pas de mise en cache" si vous pr&eacute;f&eacute;rez ne pas utiliser de r&eacute;pertoire de cache. Dans ce cas, vous DEVEZ d&eacute;sactiver aussi le "stockage des sessions", parce que le suivi des sessions utilise aussi la mise en cache par fichiers.<br /><br />Pour configurer le r&eacute;pertoire de cache correctement, utilisez votre client FTP ou un acc&egrave;s SHELL &agrave; votre serveur web pour faire un CHMOD 666 ou 777 sur le r&eacute;pertoire afin de lui mettre les permissions en lecture et &eacute;criture.<br /><br />Plus particuli&egrave;rement, l\'userID de votre serveur web (ex: \'apache\' ou \'www-user\' ou peut être \'IUSR_something\' sous Windows) doit avoir toutes les permissions \'lecture-&eacute;criture-suppression\' etc sur le r&eacute;pertoire de cache.');
  break;
  case ('72'):
    define('POPUP_ERROR_HEADING', 'ERREUR: Impossible de mettre &agrave; jour vos fichiers configure.php avec le nouveau pr&eacute;fixe');
    define('POPUP_ERROR_TEXT', 'Il y a eu une erreur en essayant de mettre &agrave; jour vos fichiers configure.php apr&egrave;s avoir renomm&eacute; vos tables.  Vous devrez &eacute;diter manuellement les fichiers /includes/configure.php et /admin/includes/configure.php et vous assurer qu\'ils contiennent le pr&eacute;fixe correct dans le "define" pour "DB_PREFIX", pour pouvoir acc&eacute;der &agrave; vos tables de Zen Cart&trade;.');
  break;
  case ('73'):
    define('POPUP_ERROR_HEADING', 'ERREUR: Impossible d\'appliquer le nouveau pr&eacute;fixe &agrave; toutes les tables');
    define('POPUP_ERROR_TEXT', 'Il y a eu une erreur en essayant de renommer les tables avec le nouveau pr&eacute;fixe de table.  Vous devrez v&eacute;rifier manuellement les noms de vos tables de base de donn&eacute;es. Dans le pire des cas, vous devrez restaurer votre sauvegarde.');
  break;
  case ('74'):
    define('POPUP_ERROR_HEADING', 'NOTE: Impossible d\'&eacute;crire dans PHP "session.save_path"');
    define('POPUP_ERROR_TEXT', '<strong>Ceci est JUSTE une note</strong> pour vous informer que vous n\'avez pas la permission d\'&eacute;crire dans le r&eacute;pertoire sp&eacute;cifi&eacute; par le param&egrave;tre PHP session.save_path.<br /><br />Cela signifie simplement que vous ne pouvez pas utiliser ce r&eacute;pertoire param&egrave;tr&eacute; pour stocker temporairement des fichierse.  &Agrave; la place, utilisez le "r&eacute;litpertoire de cache sugg&eacute;r&eacute;" dessous.<br /><br /><br />Alternativement, si le chemin est inconnu, alors il est possible que le param&egrave;tre ne soit pas configur&eacute; dans le fichier php.ini de votre serveur. Ce n\'est pas un probl&egrave;me. C\'est juste un avertissement. Parlez en &agrave; votre h&eacute;bergeur pour plus de clarification si vous le souhaitez.');
  break;
  case ('75'):
    define('POPUP_ERROR_HEADING', 'NOTE: PHP "magic_quotes_runtime" est actif');
    define('POPUP_ERROR_TEXT', 'Il est n&eacute;cessaire que "magic_quotes_runtime" soit d&eacute;sactiv&eacute;. Lorsqu\'il est activ&eacute;, il peut &ecirc;tre la cause d\'erreurs SQL inattendues de type 1064, et d\'autres probl&egrave;mes d\'ex&eacute;cution de code.<br /><br />Si vous ne pouvez pas le d&eacute;sactiver pour le serveur entier, il est possible de le d&eacute;sactiver par un fichier .htaccess ou votre propre fichier php.ini dans votre espace web priv&eacute;.  Parlez en &agrave; votre h&eacute;bergeur pour plus d\'infos.');
  break;
  case ('76'):
    define('POPUP_ERROR_HEADING', 'Version de votre moteur de base de donn&eacute;es inconnue');
    define('POPUP_ERROR_TEXT', 'La version de votre moteur de base de donn&eacute;es n\'a pas pu &ecirc;tre obtenue.<br /><br />Ce n\'est PAS N&Eacute;CESSAIREMENT un probl&egrave;me s&eacute;rieux. En fait, cela peut m&ecirc;me &ecirc;tre courant sur un serveur en production, comme &agrave; cette &eacute;tape de la v&eacute;rification, nous ne connaissons pas forc&eacute;ment vos informations d\'identit&eacute; pour se connecter sur le serveur, puisque celles ci ne sont demand&eacute;s que plus tard dans le processus d\'installation.<br /><br />Vous pouvez en g&eacute;n&eacute;ral continuer m&ecirc;me si cette information est annonc&eacute;e comme inconnue.');
  break;
  case ('77'):
    define('POPUP_ERROR_HEADING', 'L\'upload de fichiers est D&Eacute;SACTIV&Eacute;');
    define('POPUP_ERROR_TEXT', 'L\'upload de fichiers est D&Eacute;SACTIV&Eacute;. Pour l\'activer, v&eacute;rifiez que <em><strong>file_uploads = on</strong></em> dans le fichier php.ini de votre serveur.');
  break;
  case ('78'):
    define('POPUP_ERROR_HEADING', 'MOT DE PASSE ADMINISTRATEUR N&Eacute;CESSAIRE POUR MISE À JOUR');
    define('POPUP_ERROR_TEXT', 'L\'identifiant Administrateur et son mot de passe sont requis pour faire des changements sur la base de donn&eacute;es.<br /><br />Veuillez entrer un identifiant Administrateur et un mot de passe valides pour votre boutique Zen Cart&trade;.');
  break;
  case ('79'):
    define('POPUP_ERROR_HEADING','Informations OpenSSL');
    define('POPUP_ERROR_TEXT','OpenSSL est "une" des mani&egrave;res de configurer un serveur pour utiliser SSL (https://) sur votre site.<br /><br />S\'il est indiqu&eacute;lit comme indisponible, les causes possibles peuvent &ecirc;tre les suivantes:<br />(a) votre h&eacute;bergeur ne supporte pas le SSL<br />(b) votre serveur web n\'a pas OpenSSL install&eacute;, mais PEUT avoir le service SSL disponible sous une autre forme<br />(c) votre h&eacute;bergeur n\'est peut-&ecirc;tre pas encore au courant des d&eacute;tails de votre certificat SSL pour qu\'il puisse l\'activer sur votre nom de domaine<br />(d) PHP n\'est pas encore configur&eacute; pour OpenSSL.<br /><br />Dans tous les cas, si vous avez besoin du cryptage sur vos pages web (SSL), vous devriez contacter votre h&eacute;bergeur pour de l\'aide.');
  break;
  case ('80'):
    define('POPUP_ERROR_HEADING', 'La prise en charge des Sessions PHP est requise');
    define('POPUP_ERROR_TEXT', 'Vous devez activer la prise en charge des Sessions PHP sur votre serveur web.  Vous devriez essayer d\'installer ce module: php4-session<br /><br /><br />La prise en charge des Sessions PHP est n&eacute;cessaire pour pouvoir g&egrave;rer les connexions utilisateurs et proc&eacute;dures de paiements/commandes. Veuillez en parler &agrave; votre h&eacute;bergeur pour reconfigurer PHP afin de pouvoir utiliser les Sessions.');
  break;
  case ('81'):
    define('POPUP_ERROR_HEADING', 'Il n\'est pas recommand&eacute; que PHP s\'ex&eacute;cute en CGI sauf sur Windows');
    define('POPUP_ERROR_TEXT', 'Ex&eacute;cuter PHP en CGI peut &ecirc;tre probl&eacute;matique sur certains serveurs Linux/Unix.<br /><br />Les serveurs Windows, toutefois, ex&eacute;cutent "toujours" PHP comme un module cgi, dans ce cas l\'avertissement peut &ecirc;tre ignor&eacute;.');
  break;
  case ('82'):
    define('POPUP_ERROR_HEADING', ERROR_TEXT_DISABLE_FUNCTIONS);
    define('POPUP_ERROR_TEXT', 'Votre configuration PHP a une ou plusieurs des fonctions suivantes marqu&eacute;es comme "d&eacute;sactiv&eacute;es" dans le fichier PHP.INI de votre serveur:<br /><ul><li>set_time_limit</li><li>exec</li></ul>Votre serveur peut souffrir de diminution de performance due &agrave; l\'utilisation de ces mesures de s&eacute;curit&eacute; qui sont habituellement impl&eacute;ment&eacute;es sur des serveurs publics utilis&eacute;s par beaucoup de monde... Elles ne sont pas toujours id&eacute;ales pour faire tourner un syst&egrave;me de e-Commerce.<br /><br />Il est recommand&eacute; de parler avec votre h&eacute;bergeur pour d&eacute;terminer s\'ils ont un autre serveur sur lequel votre site pourrait &ecirc;tre plac&eacute; sans ces restrictions.');
  break;
  case ('83'):
    define('POPUP_ERROR_HEADING','Caract&egrave;res invalides dans le pr&eacute;fixe des tables de la base de donn&eacute;es');
    define('POPUP_ERROR_TEXT','Le pr&eacute;fixe des tables doit contenir seulement des lettres, nombres, et tirets bas (_). <br /><br />Veuillez choisir un pr&eacute;fixe diff&eacute;rent. <strong>Nous vous recommandons de le laisser vide</strong> ou d\'utiliser quelque chose de simple comme "zen_" .');
  break;
  case ('84'):
    define('POPUP_ERROR_HEADING','PHP Session.autostart doit &ecirc;tre d&eacute;sactiv&eacute;.');
    define('POPUP_ERROR_TEXT','Le param&egrave;tre session.auto_start du fichier PHP.INI de votre serveur est actif ("On"). <br /><br />Cela pourrait vous causer des probl&egrave;mes avec la gestion des sessions, car Zen Cart&trade; est con&ccedil;u pour d&eacute;marrer les sessions quand il est temps de les activer. Avoir les sessions qui d&eacute;marrent automatiquement peut &ecirc;tre un probl&egrave;me avec quelques configurations serveur.<br /><br />Si vous voulez essayer de d&eacute;sactiver cela vous-m&ecirc;me, vous pouvez essayer de mettre la ligne suivante dans un fichier .htaccess &agrave; la racine de votre site (m&ecirc;me r&eacute;pertoire que index.php):<br /><br /><code>php_value session.auto_start 0</code><br /><br /> (Vous pouvez avoir besoin de cr&eacute;er ce fichier s\'il est inexistant.)');
  break;
  case ('85'):
    define('POPUP_ERROR_HEADING','Quelques mise &agrave; jour SQL de la BDD ne sont pas install&eacute;es.');
    define('POPUP_ERROR_TEXT','Pendant le processus de mise &agrave; jour, quelques requ&ecirc;tes SQL n\'ont pas pu &ecirc;tre ex&eacute;cut&eacute;es car celles-ci auraient cr&eacute;&eacute; des entr&eacute;es en double dans la base de donn&eacute;es, ou les pr&eacute;-requis (comme une colonne qui doit exister pour &ecirc;tre chang&eacute;e ou supprim&eacute;e) n\&eacute;littaient pas remplis.<br /><br />LA CAUSE LA PLUS COURANTE de ces erreurs est que vous avez install&eacute; une contribution/add-on qui a alt&eacute;r&eacute; la structure de la BDD. La mise &agrave; jour essaye de ne pas vous cr&eacute;er de probl&egrave;mes. <br /><br />VOTRE BOUTIQUE DEVRAIT BIEN MARCHER sans approfondir ces erreurs, toutefois, nous vous recommandons de les v&eacute;rifier pour &ecirc;tre s&ucirc;r. <br /><br />Si vous voulez en savoir plus, regardez dans la table "upgrade_exceptions" de la base de donn&eacute;es pour trouver le d&eacute;tail des requ&ecirc;tes qui ont &eacute;chou&eacute; &agrave; l\'ex&eacute;cution et leur raison.');
  break;
  case ('86'):
    define('POPUP_ERROR_HEADING','PHP Session.use_trans_sid doit &ecirc;tre d&eacute;sactiv&eacute;e.');
    define('POPUP_ERROR_TEXT','Le param&egrave;tre session.use_trans_sid du fichier PHP.INI de votre serveur est actif ("On"). <br /><br />Cela pourrait vous causer des probl&egrave;mes avec la gestion des sessions ainsi que des probl&egrave;mes de s&eacute;curit&eacute;.<br /><br />Vous pouvez contourner cela en utilisant un param&egrave;tre dans un .htaccess comme d&eacute;crit ici : <a href="http://www.olate.com/articles/252">http://www.olate.com/articles/252</a>, ou vous pouvez le d&eacute;sactiver dans votre fichier PHP.INI si vous avez acc&egrave;s &agrave; celui-ci.<br /><br />Pour plus d\'informations sur les risques de s&eacute;curit&eacute; qu\'il impose, regardez: <a href="http://shh.thathost.com/secadv/2003-05-11-php.txt">http://shh.thathost.com/secadv/2003-05-11-php.txt</a>.<br /><br />(Vous pouvez avoir besoin de cr&eacute;er le fichier .htaccess s\'il est inexistant.)');
  break;
  case ('87'):
    define('POPUP_ERROR_HEADING','Permissions n&eacute;cessaires pour l\'utilisateur BDD');
    define('POPUP_ERROR_TEXT','Les op&eacute;rations r&eacute;alis&eacute;es par Zen Cart&trade; n&eacute;cessitent les privil&egrave;ges suivants sur la base de donn&eacute;es:<ul><li>ALL PRIVILEGES<br /><em>ou</em></li><li>SELECT</li><li>INSERT</li><li>UPDATE</li><li>DELETE</li><li>CREATE</li><li>ALTER</li><li>INDEX</li><li>DROP</li></ul>Les activit&eacute;s journali&egrave;res de votre boutique n\'ont pas besoin normalement des privil&egrave;ges "CREATE" et "DROP", mais ceux-ci sont n&eacute;cessaires pour l\'installation, la mise &agrave; jour, et l\'ex&eacute;litcution de patches SQL.');
  break;
  case ('88'):
    define('POPUP_ERROR_HEADING','Erreur rencontr&eacute;e en &eacute;crivant dans /includes/configure.php');
    define('POPUP_ERROR_TEXT','En essayant d\'enregistrer vos param&egrave;tres, le programme d\'installation de Zen Cart&trade; n\'a pas pu v&eacute;rifier l\'&eacute;criture correcte dans le fichier de configuration configure.php. Veuillez v&eacute;rifier que votre serveur web a bien les permissions d\'&eacute;criture sur les fichiers configure.php d&eacute;crits ci-dessous.<br /><br />- /includes/configure.php<br />- /admin/includes/configure.php<br /><br />V&eacute;rifiez &eacute;galement qu\'il y a assez d\'espace disque (ou de quota disponible) pour pouvoir &eacute;crire les mises &agrave; jour dans ces fichiers. <br /><br />Si les fichiers font 0-octets en taille quand vous avez cette erreur, alors l\'espace disque disponible est certainement en cause.<br /><br /> Les permissions id&eacute;ales sur les h&eacute;bergements Unix/Linux sont CHMOD 777 jusqu\'&agrave; ce que l\'installation soit termin&eacute;e. Ensuite, elles peuvent &ecirc;tre remises sur 644 or 444 par s&eacute;curit&eacute; apr&egrave;s l\'installation.<br /><br />Si vous &ecirc;tes sur un h&eacute;bergement de type Windows, vous pouvez &eacute;galement trouv&eacute; n&eacute;cessaire de faire un clic droit sur chacun de ces fichiers, choisir "Propri&eacute;t&eacute;s", et l\'onglet "S&eacute;curit&eacute;". Cliquez alors sur "Ajouter" et choisissez "tout le monde", et donnez les acc&egrave;s en &eacute;criture/lecture pour "Tout le monde" jusqu\'&agrave; la fin de l\'installation. Apr&egrave;s remettez en lecture seule.');
  break;
  case ('89'):
    define('POPUP_ERROR_HEADING','D&eacute;tails fonctions GD');
    define('POPUP_ERROR_TEXT','Zen Cart&trade; utilise la librairie GD avec PHP, si elle est disponible, pour manipuler les fichiers images.  Il est bien d\'avoir au moins la version 2.0 disponible.<br /><br />Si la librairie GD n\'est pas compil&eacute;e avec votre PHP, vous pouvez avoir besoin de demander &agrave; votre h&eacute;bergeur de le faire.');
  break;
  case ('90'):
    define('POPUP_ERROR_HEADING','MySQL 5.2 (et sup&eacute;rieur) pas compl&egravetement compatible dans la v1.3.x');
    define('POPUP_ERROR_TEXT','NOTE: Zen Cart&trade; v2.0 et sup&eacute;rieur seront compatibles avec MySQL 5 et PHP 5.<br />Mais, vous installez en ce moment la v1.3.9.<br /><br />Malgr&eacute; tous nos efforts pour nous assurer que les requ&ecirc;tes sur la base de donn&eacute;es dans Zen Cart&trade; v1.3.x sont compatibles with MySQL 5, les versions v2.x sont test&eacute;es plus en profondeur.<br /><br />Vous pouvez proc&eacute;der &agrave; l\'installation; mais veuillez noter que pour une compatibilit&eacute; optimale, vous devez utiliser la version la plus r&eacute;cente de Zen Cart.');
  break;
  case ('91'):
    define('POPUP_ERROR_HEADING','Alerte de version PHP');
    define('POPUP_ERROR_TEXT','Zen Cart&trade; v1.x est con&ccedil;u pour s\'ex&eacute;cuter sur PHP versions 4.3.2 et plus.<br /><br />Il y a plusieurs fonctions PHP (pour la plupart relative &agrave; l\'authentification et aux sessions) utilis&eacute;es dans Zen Cart&trade; qui n\'existent pas ou qui contiennent des bugs dans les versions ant&eacute;rieures &agrave; v4.3.2.<br /><br />Nous vous recommandons fortement de mettre &agrave; jour votre version de PHP si vous comptez utiliser Zen Cart&trade; sur ce serveur.');
  break;
  case ('92'):
    define('POPUP_ERROR_HEADING','La restriction open_basedir peut poser des probl&egrave;mes');
    define('POPUP_ERROR_TEXT','Votre PHP est configur&eacute; de fa&ccedil;on &agrave; emp&ecirc;cher les utilisateurs d\'ex&eacute;cuter des scripts en dehors du r&eacute;pertoire "basedir" sp&eacute;cifi&eacute;. De plus, les fichiers de votre site web sont conserv&eacute;s dans un dossier en dehors de la zone autoris&eacute;e "basedir".<br /><br />Entres autres choses, vous pouvez avoir des probl&egrave;mes pour uploader des fichiers ou faire des sauvegardes.<br /><br />Parlez en &agrave; votre h&eacute;bergeur pour changer ou retirer cette restriction.');
  break;
  case ('93'):
    define('POPUP_ERROR_HEADING','cURL non d&eacute;tect&eacute;');
    define('POPUP_ERROR_TEXT','Quelques modules de paiement et de livraison utilisent cURL pour communiquer avec un serveur externe afin de r&eacute;cup&eacute;rer des cotations ou des autorisations de paiement en temps r&eacute;el. <br /><br />Par exemple, si vous comptez utiliser les modules PayPal Express Checkout, Website Payments Pro, ou Authorize.net AIM, vous aurez besoin de la fonctionnalit&eacute; cURL.<br /><br />Il semble que votre serveur n\'ait pas cURL configur&eacute; ou activ&eacute; pour votre compte. Si vous avez besoin d\'un outil tiers qui utilise cURL, vous devrez en parler avec votre h&eacute;bergeur pour installer la fonctionnalit&eacute; cURL sur votre serveur.<br /><br />Vous trouverez plus d\'informations sur cURL sur l\'adresse <a href="http://curl.haxx.se" target="_blank">le site cURL</a>');
  break;
  case ('94'):
    define('POPUP_ERROR_HEADING', 'NOTE: PHP "magic_quotes_sybase" est actif');
    define('POPUP_ERROR_TEXT', 'Il est pr&eacute;f&eacute;rable que "magic_quotes_sybase" soit d&eacute;sactiv&eacute;. Lorsqu\'il est activ&eacute;, il peut cause des erreurs SQL 1064 inattendues, ou d\'autres probl&egrave;mes d\'ex&eacute;cution de code.<br /><br />Si vous ne pouvez pas le d&eacute;sactiver pour tout le serveur, il est possible de le d&eacute;sactiver par un fichier .htaccess ou votre propre fichier php.ini sur votre espace web priv&eacute;.  Parlez en &agrave; votre h&eacute;bergeur pour de l\'aide.');
  break;
  case ('95'):
    define('POPUP_ERROR_HEADING','CURL n&eacute;cessite la fonction SSL. Veuillez notifier le webmaster ou l\'h&eacute;bergeur.');
    define('POPUP_ERROR_TEXT','Zen Cart&trade; utilise CURL et SSL pour communiquer avec certains services de paiement et de livraison.<br />Le programme d\'installation a juste test&eacute; le fonctionnement de CURL SSL et cela a &eacute;chou&eacute;.<br /><br />Vous ne pourrez donc pas utiliser les modules de paiement PayPal ou Authorize.net ou Firstdata/Linkpoint, ou d\'autres modules de paiement/livraison tiers tant que vous n\'avez pas activer le support de SSL avec CURL et PHP.<br /><br />Vous pouvez trouver plus d\'infos sur CURL sur <a href="http://curl.haxx.se" target="_blank">le site CURL</a>');
  break;

}
