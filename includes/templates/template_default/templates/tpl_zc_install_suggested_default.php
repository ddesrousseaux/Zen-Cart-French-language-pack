<?php
/**
 * Page Template
 *
 * This page is auto-displayed if the configure.php file cannot be read properly. It is intended simply to recommend clicking on the zc_install link to begin installation.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_zc_install_suggested_default.php 14188 2009-08-17 22:59:15Z drbyte $
 */
$relPath = (file_exists('includes/templates/template_default/images/logo.gif')) ? '' : '../';
$instPath = (file_exists('zc_install/index.php')) ? 'zc_install/index.php' : (file_exists('../zc_install/index.php') ? '../zc_install/index.php' : '');
$docsPath = (file_exists('docs/index.html')) ? 'docs/index.html' : (file_exists('../docs/index.html') ? '../docs/index.html' : '');
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" dir="ltr" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" dir="ltr" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Vous devez installer Zen Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta http-equiv="imagetoolbar" content="no">
  <meta name="author" content="The Zen Cart&reg; Team and others">
  <meta name="generator" content="shopping cart program by Zen Cart(R), http://www.zen-cart.com eCommerce software">
  <meta name="robots" content="noindex, nofollow">
  <style type="text/css">
  <!--
  .systemError {color: red; font-weight: bold;}
  -->
  </style>
</head>

<body style="margin: 20px">
<div style="width: 730px; background-color: #ffffff; margin: auto; padding: 10px; border: 1px solid #cacaca;">
<div>
<img src="<?php echo $relPath; ?>includes/templates/template_default/images/logo.gif" alt="Zen Cart&trade;" title=" Zen Cart&trade; " width="192" height="64" border="0" />
</div>
<h1>Merci d'utiliser Zen Cart&trade;.</h1>
<h2>Vous voyez cette page pour une ou plusieurs raisons :</h2>
<ol>
<li>C'est la <strong>première fois que vous utilisez Zen Cart&trade;</strong> et vous n'avez pas encore lancé la procédure d'installation.<br />
Si c'est vraiment le cas pour vous,
<?php if ($instPath) { ?>
<a href="<?php echo $instPath; ?>">Cliquez ici</a> pour lancer l'installation.
<?php } else { ?>
vous devrez télécharger le répertoire "zc_install" en utilisant un logiciel FTP, puis lancer <a href="<?php echo $instPath; ?>">zc_install/index.php</a> dans votre navigateur (ou rechargez cette page pour avoir le lien vers l'installation).
<?php } ?>
<br /><br />
</li>
<li>Votre fichier <tt><strong>/includes/configure.php</strong></tt> et/ou <tt><strong>/admin/includes/configure.php</strong></tt> contient une <em>information de configuration de chemin invalide</em> et/ou <em>une mauvaise configuration de la base de données</em>.<br />
Si vous avez récemment éditer vos fichiers configure.php, ou peut-être déplacé votre site dans un répertoire ou serveur différent, alors il vous faudra revoir et mettre à jour votre configuration.<br />
Lisez la <a href="http://tutorials.zen-cart.com" target="_blank">FAQ en ligne et les Tutoriels</a> sur le site de Zen Cart&trade; pour avoir de l'aide.</li>
<?php if (isset($problemString) && $problemString != '') { ?>
<li class="errorDetails">Informations supplémentaires: <?php echo $problemString; ?></li>
<?php } ?>
</ol>
<br />
<h2>Pour commencer l'installation ...</h2>
<ol>
<?php if ($docsPath) { ?>
<li>La <a href="<?php echo $docsPath; ?>">Documentation d'installation</a> peut être consultée en cliquant ici: <a href="<?php echo $docsPath; ?>">Documentation</a></li>
<?php } else { ?>
<li>La documentation pour l'installation se touve dans le dossier /docs de votre distribution de Zen Cart&trade;. Vous pouvez aussi trouver de la documentation en anglais dans les <a href="http://tutorials.zen-cart.com" target="_blank">FAQs en ligne</a> ou en français sur <a href="http://www.zencart-france.com" target="_blank">Zen Cart France</a>.</li>
<?php } ?>
<?php if ($instPath) { ?>
<li>Lancez <a href="<?php echo $instPath; ?>">zc_install/index.php</a> via votre navigateur.</li>
<?php } else { ?>
<li>Il vous faudra télécharger le répertoire "zc_install" en utilisant un logiciel FTP, puis lancer <a href="<?php echo $instPath; ?>">zc_install/index.php</a> via votre navigateur (ou recharger cette page pour voir le lien direct).</li>
<?php } ?>
<li>La <a href="http://tutorials.zen-cart.com" target="_blank">FAQ en ligne et les Tutoriels</a> sur le site de Zen Cart&trade; seront d'une grande aide si vous rencontrez des difficultés.</li>
</ol>

</div>
    <p style="text-align: center; font-size: small;">Copyright &copy; 2003-<?php echo date('Y'); ?> <a href="http://www.zen-cart.com" target="_blank">Zen Cart&trade;</a></p>
</body></html>
