<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: finished.php 5924 2007-02-28 08:25:15Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
/**
 * defining language components for the page
 */
  define('TEXT_MAIN','<h2>F&eacute;licitations !</h2><h3>Vous avez install&eacute; Zen Cart&trade; avec succ&egrave;s sur votre syst&egrave;me !</h3>
<h2>&Eacute;TAPES SUIVANTES</h2>Pour votre s&eacute;curit&eacute;, vous devez changer les permissions en mode lecture seule sur vos fichiers <strong>configure.php</strong> se trouvant dans les r&eacute;pertoires <strong>/admin/includes/</strong> et <strong>/includes/</strong> avant de permettre aux utilisateurs d\'acc&eacute;der &agrave; votre boutique.<br /><br />
En plus, vous devez supprimer ou renommer le r&eacute;pertoire <strong>/zc_install</strong> afin que personne ne puisse relancer l\'installation de votre boutique et vider ainsi votre base de donn&eacute;es. Un message d\'avertissement s\'affichera tant que vous n\'aurez pas supprim&eacute; ou renomm&eacute; ce r&eacute;pertoire.
<h2>DONATION</h2>Vous pouvez montrer votre reconnaissance pour notre logiciel gratuit, et encourager les d&eacute;veloppements futurs en faisant une donation au projet Zen Cart: <a href=\"http://www.zen-cart.com/index.php?main_page=infopages&pages_id=14\">Faire une donation quelconque en cliquant ici</a>. Merci d\'avance !
<h2>CONFIGURATION</h2>Nous vous encourageons &agrave; commencer par la <a href=\"http://tutorials.zen-cart.com\"><strong>lecture des FAQs</strong> de notre forum officiel de support</a> afin d\'y trouver des informations utiles pour la configuration et la personnalisation de votre boutique en ligne. <br />
Si vous vous posez des questions, c\'est le premier endroit où aller ! Si vous &ecirc;tes bloqu&eacute;, demandez de l\'aide sur le forum fran&ccedil;ais de support <a href=\"http://www.zencart-france.com/forum/\"><strong>www.zencart-france.com/forum/</strong></a>. Les personnes de notre communaut&eacute; se feront un plaisir de vous aider en partageant leurs connaissances.<br /><br /> 
Il est aussi <strong>important</strong> que vous consultiez les <strong>Documentations</strong> du r&eacute;pertoire <strong><a href=\"../docs\" target=\"_blank\">/docs</a></strong> de votre site. <a href=\"../docs\" target=\"_blank\">Cliquez ici pour afficher la liste.</a>
<h2>NOTES IMPORTANTES</h2>L\'outil principal que vous aurez &agrave; utiliser pour personnaliser votre boutique est la <strong>Boîte &agrave; Outils du D&eacute;veloppeur</strong>, qui est dans l\'<strong>espace d\'administration, sous Outils</strong>. Vous pouvez l\'utiliser pour rechercher presque n\'importe quoi que vous voudriez personnaliser ou changer, en particulier tout texte affich&eacute; sur votre site. <br /><br />
Le concept le plus important &agrave; ma&icirc;triser pour personnaliser votre site est notre <em><strong>syst&egrave;me de templates</strong></em>. Il y a de bons articles sur le syst&egrave;me de templates dans la <a href=\"http://tutorials.zen-cart.com\">section FAQ</a> en ligne.
<h2>NOTES ADDITIONNELLES</h2>
<p>Le <a href=\"http://www.zen-cart.com/wiki\" target=\"_blank\">Wiki Zen Cart&trade;</a> est un endroit utile pour trouver des trucs, astuces, et informations g&eacute;n&eacute;rales. </p>
<p>
  Nous sommes heureux que vous ayez choisi Zen Cart&trade; pour votre solution de e-commerce !<br />
  <br />' . 
'<a href="http://www.zen-cart.com">Visitez le site officiel sur www.zen-cart.com</a><br />' . '
<a href="http://www.zencart-france.com/">Visitez le site fran&ccedil;ais sur www.zencart-france.com</a>' . '
</p>
' .
'<p>Cliquez sur le bouton <em>Boutique</em> ci-dessous pour tester votre boutique, ou sur le bouton <em>Administration</em> pour commencer &agrave; personnaliser votre boutique.</p>');

  define('TEXT_PAGE_HEADING', 'Installation de Zen Cart&trade; - Termin&eacute;e');
  define('STORE', 'Aller sur la Boutique');
  define('ADMIN', 'Ouvrir l\'Administration');
?>