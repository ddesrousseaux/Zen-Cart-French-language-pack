<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 7419 2007-11-11 07:04:26Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.9 par Zen Cart France. 
 * Auteur : Damien Desrousseaux : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.9-FR
 */
/**
 * defining language components for the page
 */
  define('TEXT_PAGE_HEADING', 'Installation de Zen Cart&trade; Setup - Time Out');
  define('TEXT_MAIN','<h2>Probl&egrave;me d&eacute;tect&eacute;</h2><h3>D&eacute;sol&eacute;, un probl&egrave;me a &eacute;t&eacute; d&eacute;tect&eacute;.</h3>
<p>Ce programme d\'installation a besoin de pouvoir d&eacute;marrer une session PHP pour terminer l\'installation.</p>
<p><strong>Voici les raisons possibles de l\'affichage de cette page:</strong>
<ul>
<li><h3>Le d&eacute;lai est peut-&ecirc;tre expir&eacute;</h3>Si vous avez laiss&eacute; l\'installation inactive pendant plus de 20 minutes, alors les informations que vous avez entr&eacute; dans les pages pr&eacute;c&eacute;dentes ne sont plus disponibles.  Dans ce cas, vous devez relancer le programme d\'installation.<br />
<br />
Ne laissez pas l\'installation inactive pendant un long moment. L\'installation ne prend que 5 minutes en situation normale.<br /><br /></li>
<li><h3>Le serveur n\'a plus de place pour &eacute;crire ses fichiers de sessions.</h3>Si vous n\'avez pas encore mis les permissions en &eacute;criture sur le r&eacute;pertoire "cache", veuillez le faire maintenant pour que l\'installation puisse continuer. Les d&eacute;tails pour mettre les bonnes permissions peuvent &ecirc;tre consult&eacute;es dans les <a href="../docs/index.html" target="_blank">instructions d\'installation</a> ou dans la <a href="http://tutorials.zen-cart.com/index.php?article=9" target="_blank">FAQ en ligne</a>.<br /><br /></li>
<li><h3>Les sessions PHP ne sont peut-&ecirc;tre pas fonctionnelles sur votre serveur</h3>Pour utiliser Zen Cart&trade;, vous aurez besoin d\'utiliser les "sessions" de PHP. Il se pourrait que la configuration de votre serveur n\'autorise pas actuellement les sessions PHP &agrave; d&eacute;marrer et &agrave; int&eacute;ragir correctement.  Par ailleurs, si vous avez les cookies d&eacute;sactiv&eacute;s dans votre navigateur, vous ne pourrez pas utiliser les sessions PHP. Par pr&eacute;caution , veuillez d&eacute;sactiver les outils de votre navigateur et pare-feu qui bloquent les cookies. <br /><br />Vous devrez peut-&ecirc;tre prendre contact avec votre administrateur ou h&eacute;bergeur pour vous assurer que les sessions sont configur&eacute;es et peuvent &ecirc;tre utilis&eacute;es sur votre site.<br /><br /></li>
</ul>
</p>');
  define('START_INSTALL', 'Lancer l\'installation');
?>