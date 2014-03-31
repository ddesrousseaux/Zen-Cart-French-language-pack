<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_confirmation.php 4067 2006-08-06 07:26:21Z drbyte $
 * @version $Id: Integrated COWOA v2.2 - 2007 - 2012
 */
if($_SESSION['COWOA']) $COWOA=TRUE;

define('NAVBAR_TITLE_1', 'Checkout');
define('NAVBAR_TITLE_2', 'Confirmation');

if($COWOA)
define('HEADING_TITLE', 'Etape 4 sur 5 - Confirmation de commande');
else
define('HEADING_TITLE', 'Etape 3 sur 3 - Confirmation de commande');

  define('HEADING_BILLING_ADDRESS', 'Coordonn&eacute;es de facturation');
  define('HEADING_DELIVERY_ADDRESS', 'Adresse de livraison');
  define('HEADING_SHIPPING_METHOD', 'Mode de livraison :');
  define('HEADING_PAYMENT_METHOD', 'Mode de paiement :');
  define('HEADING_PRODUCTS', 'Contenu du Panier');
  define('HEADING_TAX', 'Taxes');
  define('HEADING_ORDER_COMMENTS', 'Instructions Sp&eacute;ciales ou Commentaires');
// no comments entered
  define('NO_COMMENTS_TEXT', 'Aucun');
  define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Derni&egrave;re Etape</strong>');
  define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- continuer pour confirmer votre commande. Merci !');  define('OUT_OF_STOCK_CAN_CHECKOUT', 'Les produits identifi&eacute;s par ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' sont hors stock<br />Des articles pas en stock seront plac&eacute;s sur la commande en attente.');
  define('OUT_OF_STOCK_CAN_CHECKOUT', 'Les produits identifi&eacute;s par ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' sont hors stock<br />Des articles pas en stock seront plac&eacute;s sur la commande en attente.');

