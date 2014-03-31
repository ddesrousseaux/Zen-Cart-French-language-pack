<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: popup_coupon_help.php 14141 2009-08-10 19:34:47Z wilt $
 *
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France.
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com
 * Package : zen-cart-v1.3.9-FR
 */


define('HEADING_COUPON_HELP', 'Aide concernant les Coupons de R&eacute;ductions');
define('TEXT_CLOSE_WINDOW', '[ Fermer [x] ]');
define('TEXT_COUPON_HELP_HEADER', 'F&eacute;licitations, vous avez re&ccedil;u un Coupon de R&eacute;duction.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nom du Coupon : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Ce Coupon vous donne droit &agrave; %s de remise sur votre commande');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Vous devez d&eacute;penser %s pour utiliser ce coupon');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Ce Coupon vous donne droit &agrave; une livraison gratuite de votre commande');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Description du Coupon : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Ce Coupon est valable du %s au %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Restriction sur les Produits et/ou Cat&eacute;gories');
define('TEXT_COUPON_HELP_CATEGORIES', 'Cat&eacute;gories');
define('TEXT_COUPON_HELP_PRODUCTS', 'Produits');
define('TEXT_ALLOW', 'Autoris&eacute;');
define('TEXT_DENY', 'Refus&eacute;');

define('TEXT_ALLOWED', ' (Autoris&eacute;)');
define('TEXT_DENIED', ' (Refus&eacute;)');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Ce coupon a des restrictions sur certains produits.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Ce coupon est valide pour toutes les cat&eacute;gories.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Ce coupon est valide pour tous les produits.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','Les Coupons de R&eacute;ductions ne peuvent &ecirc;tre utilis&eacute;s pour l\'Achat de ' . TEXT_GV_NAMES . '.');
define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Des restrictions en rapport &agrave; l\'adresse de facturation s\'appliquent.');
?>