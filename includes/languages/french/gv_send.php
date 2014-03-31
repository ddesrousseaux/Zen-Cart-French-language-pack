<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */



  define('HEADING_TITLE', 'Envoi de ' . TEXT_GV_NAME);
  define('HEADING_TITLE_CONFIRM_SEND', 'Confirmation de l\'envoi de ' . TEXT_GV_NAME);
  define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' envoy&eacute');  
  define('NAVBAR_TITLE', 'Envoi de ' . TEXT_GV_NAME);
  define('EMAIL_SUBJECT', 'Message de ' . STORE_NAME);
  define('HEADING_TEXT','<br />Veuillez entrer les d&eacute;tails du ' . TEXT_GV_NAME . ' que vous souhaitez envoyer. Pour de plus amples informations, veuillez consulter notre <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a><br />');
  define('ENTRY_NAME', 'Nom du Destinataire :');
  define('ENTRY_EMAIL', 'Adresse email du destinataire :');
  define('ENTRY_MESSAGE', 'Message au destinataire :');
  define('ENTRY_AMOUNT', 'Montant du ' . TEXT_GV_NAME . ' &agrave; envoyer :');
  define('ERROR_ENTRY_TO_NAME_CHECK', 'Vous n\'avez pas envoy&eacute; de nom du destinataire. Veuillez remplir le champ correspondant ci-dessous. ');  
  define('ERROR_ENTRY_AMOUNT_CHECK', '&nbsp;&nbsp;<span class="errorText">Montant Invalide</span>. Veuillez r&eacute;essayer.');
  define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', '&nbsp;&nbsp;<span class="errorText">Adresse E-mail Invalide</span>');
  define('MAIN_MESSAGE', 'Vous avez choisi d\'envoyer un ' . TEXT_GV_NAME . ' d\'une valeur de %s &agrave; %s dont l\'adresse E-Mail est %s<br /><br />Le texte accompagnant l\'E-mail est le suivant<br /><br />Cher %s<br /><br />' .
                        'Vous recevez un ' . TEXT_GV_NAME . ' d\'une valeur de %s adress&eacute; par %s');
  define('SECONDARY_MESSAGE', 'Cher(e) %s,<br /><br />' . 'Vous avez recu un ' . TEXT_GV_NAME . ' d\'une valeur de %s par %s');
  define('PERSONAL_MESSAGE', '%s dit');
  define('TEXT_SUCCESS', 'F&eacute;licitations, votre ' . TEXT_GV_NAME . ' a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s');
  define('TEXT_SEND_ANOTHER', 'Voulez-vous envoyer un autre ' . TEXT_GV_NAME . '?');
  define('TEXT_AVAILABLE_BALANCE','Balance actuelle disponible : ');

  define('EMAIL_GV_TEXT_SUBJECT', 'Un Cadeau de %s');
  define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
  define('EMAIL_GV_TEXT_HEADER', 'F&eacute;licitations, Vous Recevez un ' . TEXT_GV_NAME . ' d\'une valeur de %s');
  define('EMAIL_GV_FROM', 'Ce ' . TEXT_GV_NAME . ' vous a &eacute;t&eacute; adress&eacute; par %s');
  define('EMAIL_GV_MESSAGE', 'avec le message suivant : ');
  define('EMAIL_GV_SEND_TO', 'Bonjour, %s');
  define('EMAIL_GV_REDEEM', 'Pour encaisser ce ' . TEXT_GV_NAME . ', veuillez suivre le lien ci-dessous. Pensez &eacute;galement &agrave; noter par &eacute;crit, ou imprimer les r&eacute;f&eacute;rences du ' . TEXT_GV_REDEEM . ': %s afin d\'&eacute;viter toute erreur possible.');
  define('EMAIL_GV_LINK', 'Pour vous rendre sur la Page d\'encaissement, veuillez cliquer sur le lien suivant');
  define('EMAIL_GV_VISIT', ' ou visitez ');
  define('EMAIL_GV_ENTER', ' et entrez le ' . TEXT_GV_REDEEM . ' ');
  define('EMAIL_GV_FIXED_FOOTER', 'Si vous &eacute;prouvez des difficult&eacute;s pour encaisser le ' . TEXT_GV_NAME . ' via le lien automatique ci-dessus, ' . "\n" .
                                'nous vous informons que vous pouvez par ailleurs entrer le ' . TEXT_GV_REDEEM . ' du ' . TEXT_GV_NAME . ' lors de la validation de votre commande.');
  define('EMAIL_GV_SHOP_FOOTER', '');
?>