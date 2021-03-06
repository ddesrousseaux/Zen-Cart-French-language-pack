<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_shipping.php 4042 2006-07-30 23:05:39Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
if($_SESSION['COWOA']) $COWOA=TRUE;

  define('NAVBAR_TITLE_1', 'Commander');
  define('NAVBAR_TITLE_2', 'Mode de livraison');

if($COWOA)
define('HEADING_TITLE', 'Etape 2 sur 5 - Information de Livraison');
else
define('HEADING_TITLE', 'Etape 1 sur 3 - Information de Livraison');

  define('TABLE_HEADING_SHIPPING_ADDRESS', 'Adresse de livraison');
  define('TEXT_CHOOSE_SHIPPING_DESTINATION', 'Votre Commande sera livr&eacute;e &agrave; cette adresse. Vous pouvez aussi choisir une autre Adresse de livraison en cliquant sur le bouton <em>changer l\'adresse</em>.');
  define('TITLE_SHIPPING_ADDRESS', 'Adresse de livraison :');

  define('TABLE_HEADING_SHIPPING_METHOD', 'Mode de livraison');
  define('TEXT_CHOOSE_SHIPPING_METHOD', 'Veuillez choisir votre mode de livraison pr&eacute;f&eacute;r&eacute; pour cette commande.');
  define('TITLE_PLEASE_SELECT', 'Veuillez S&eacute;lectionner');
  define('TEXT_ENTER_SHIPPING_INFORMATION', 'C\'est actuellement le seul mode de livraison disponible pour cette commande.');
  define('TITLE_NO_SHIPPING_AVAILABLE', 'Non disponible actuellement');
  define('TEXT_NO_SHIPPING_AVAILABLE','<span class="alert">D&eacute;sol&eacute;s, nous ne livrons dans votre pays ou r&eacute;gion actuellement.</span><br />Veuillez nous contacter pour des solutions alternatives.');

  define('TABLE_HEADING_COMMENTS', 'Instructions sp&eacute;ciales ou commentaires sur votre commande');

if($COWOA)
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Continuer vers l\'Etape 3');
else
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Continuer vers l\'Etape 2');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- choisissez votre moyen de paiement.');

// when free shipping for orders over $XX.00 is active
define('FREE_SHIPPING_TITLE', 'Livraison Gratuite');
define('FREE_SHIPPING_DESCRIPTION', 'Livraison Gratuite pour des commande d\'un montant sup&eacute;rieur &agrave; %s');
define('ERROR_PLEASE_RESELECT_SHIPPING_METHOD', 'Vos options de livraison disponibles ont chang&eacute;. Veuillez s&eacute;lectionnez de nouveau votre moyen de livraison pr&eacute;f&eacute;r&eacute;.');

