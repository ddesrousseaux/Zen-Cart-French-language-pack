<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: coupon_restrict.php 15883 2010-04-11 16:41:26Z wilt $
 *
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France.
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com
 * Package : zen-cart-v1.3.9-FR
 */

define('HEADING_TITLE', 'Coupons de r&eacute;duction, restrictions Produit/Cat&eacute;gorie');
define('HEADING_TITLE_CATEGORY', 'Restrictions de Cat&eacute;gories');
define('HEADING_TITLE_PRODUCT', 'Restrictions de Produits');

define('HEADER_COUPON_ID', 'ID du Coupon');
define('HEADER_COUPON_NAME', 'Nom du Coupon');
define('HEADER_CATEGORY_ID', 'ID de la Cat&eacute;gorie');
define('HEADER_CATEGORY_NAME', 'Nom de la Cat&eacute;gorie');
define('HEADER_PRODUCT_ID', 'ID du Produit');
define('HEADER_PRODUCT_NAME', 'Nom du produit');
define('HEADER_RESTRICT_ALLOW', 'Autoriser');
define('HEADER_RESTRICT_DENY', 'Interdire');
define('HEADER_RESTRICT_REMOVE', 'Enlever');
define('IMAGE_ALLOW', 'Permettre');
define('IMAGE_DENY', 'Interdire');
define('IMAGE_REMOVE', 'Enlever');
define('TEXT_ALL_CATEGORIES', 'Toutes les cat&eacute;gories');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Ajouter les produits de toutes les cat&eacute;gories');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Supprimer les produits de toutes les cat&eacute;gories');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Pour l\'ajout des produits de toutes les cat&eacute;gories, seuls les produits qui ne sont pas d&eacute;j&agrave; marqu&eacute; en restriction seront ajout&eacute;s.<br />
                    Pour la suppression de tous les produits, seuls les produits qui sont marqu&eacute;s en Deny ou Allow seront supprim&eacute;s.</strong>');

define('TEXT_MANUFACTURER', 'Fabricant: ');
define('TEXT_CATEGORY', 'Cat&eacute;gorie: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Cat&eacute;gorie non termin&eacute;e');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Produit non termin&eacute;');
