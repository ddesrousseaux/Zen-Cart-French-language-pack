<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright Joseph Schilz
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Integrated COWOA v2.2 - 2007 - 2012
 */

define('NAVBAR_TITLE', 'Informations de facturation');

define('HEADING_TITLE', 'Etape 1 sur 5 - Informations de facturation');

define('TEXT_ORIGIN_LOGIN', 'Si vous avez un compte chez nous, vous pouvez vous identifier sur la <a href="%s"><u>Page de login</u></a>.');
define('TEXT_LEGEND_HEAD', 'Cr&eacute;er un nouveau compte');
define('TEXT_MORE', 'Pendant un temps limit&eacute;, les nouveaux clients recoivent un coupon de r&eacute;duction de 10% pour toute commande.  Vous recevrez ce coupon juste apres avoir cree votre compte, et vous pourrez l\'utiliser pour votre premier commande.<br /><br />Pour commencer la cr&eacute;ation de votre compte, veuillez entrer les informations demand&eacute;es ci-dessous.');

// greeting salutation
define('EMAIL_SUBJECT', 'Bienvenue chez ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Cher Mr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Ch&egrave;re Mme %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Cher %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Nous vous souhaitons la bienvenue chez <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'F&eacute;licitations! Pour vous remercier de votre prochaine visite, vous trouverez ci-dessous les informations du coupon de r&eacute;duction que nous venons de vous cr&eacute;er !' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Pour utiliser ce bon de r&eacute;duction, entrez le code ' . TEXT_GV_REDEEM . ' pendant votre commande:  <strong>%s</strong>' . "\n\n");

define('EMAIL_GV_INCENTIVE_HEADER', 'Nous vous avons envoy&eacute; un ' . TEXT_GV_NAME . ' pour %s!' . "\n");
define('EMAIL_GV_REDEEM', 'Le ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' est: %s ' . "\n\n" . 'Vous pouvez entrer le ' . TEXT_GV_REDEEM . ' pendant votre commande, apr&egrave;s avoir s&eacute;lectionn&eacute; vos produits dans la boutique. ');
define('EMAIL_GV_LINK', ' Ou, vous pouvez l\'utiliser maintenant en suivant ce lien: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Quand vous aurez ajout&eacute; le ' . TEXT_GV_NAME . ' dans votre compte, vous pourrez utiliser le ' . TEXT_GV_NAME . ' pour vous, ou l\'envoyer &agrave; un ami!' . "\n\n");

define('EMAIL_TEXT', 'Avec votre compte, vous pouvez maintenant prendre connaissance des <strong>nombreux services</strong> que nous vons proposons. En voici quelques-uns:' . "\n\n" . '<li><strong>Panier permanent</strong> - Tous les produits ajout&eacute;s à votre panier en ligne restent dedans tant que vous ne les avez pas supprim&eacute;, ou acheté.' . "\n\n" . '<li><strong>Carnet d\'adresses</strong> - Nous pouvons envoyer les produits &agrave; une autre adresse que la v&ocirc;tre. Ceci est utile pour envoyer des cadeaux d\'anniversaire directement &agrave; la personne concern&eacute;e.' . "\n\n" . '<li><strong>Historique de commandes</strong> - Pour voir l\'historique des commandes que vous avez passé chez nous.' . "\n\n" . '<li><strong>Avis de produits</strong> - Partager vos avis sur les produits avec les autres clients.');
define('EMAIL_CONTACT', 'Pour obtenir de l\'aide sur nos services en ligne, veuillez envoyer un email au marchand: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','Cordialement,' . "\n\n" . STORE_OWNER . "\nStore Owner\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Cette adresse email nous a &eacute;t&eacute; fournie par vous ou un de nos clients. Si vous n\'avez pas demand&eacute; de compte, ou pensez avoir re&ccirc;u cet email par erreur, veuillez nous envoyer un mail &agrave; %s ');

define('TABLE_HEADING_CONTACT_DETAILS', 'Coordonn&eacute;es');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Continuer &agrave; l\'Etape 2');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- fournir les informations de livraison.');

define('EMAIL_TEXT_COWOA', ' Un adresses E-Mail valide est necessaire pour r&eacute;cup&eacute;rer votre commande');
// eof
