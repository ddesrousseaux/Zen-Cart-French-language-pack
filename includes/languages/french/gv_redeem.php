<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: gv_redeem.php 290 2004-09-15 19:48:26Z wilt $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.9 par Zen Cart France.                  |
// | Auteur : Damien Desrousseaux : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.9-FR                                        |
// +----------------------------------------------------------------------+
//


  define('NAVBAR_TITLE', 'Encaissement ' . TEXT_GV_NAME);
  define('HEADING_TITLE', 'Encaissement ' . TEXT_GV_NAME);
  define('TEXT_INFORMATION', 'Pour plus d\'information concernant le ' . TEXT_GV_NAME . ', veuillez prendre connaissance de notre <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
  define('TEXT_INVALID_GV', 'Le Num&eacute;ro du ' . TEXT_GV_NAME . ' doit &ecirc;tre invalide ou a d&eacute;j&agrave; &eacute;t&eacute; encaiss&eacute;. Veuillez contacter la Boutique.');
  define('TEXT_VALID_GV', 'F&eacute;licitations, vous avez encaiss&eacute; un ' . TEXT_GV_NAME . ' d\'une valeur de %s.');
  
define('ERROR_GV_CREATE_ACCOUNT', 'Vous devez cr&eacute;er un compte pour pouvoir utiliser le bon de r&eacute;duction.');
define('ERROR_GV_COWOA', 'Vous devez cr&eacute;er un compte pour pouvoir utiliser le bon de r&eacute;duction. Vous ne pourrez pas entrer un bon de r&eacute;duction apres avoir commenc&eacute; un processus de commande sans compte. Si vous voulez utiliser un bon de r&eacute;duction, vous pouvez <a href="' . zen_href_link(FILENAME_LOGOFF, '', 'SSL', false) . '">cliquez ici</a> pour terminer votre session, vider votre panier, et recommencer.');
// eof