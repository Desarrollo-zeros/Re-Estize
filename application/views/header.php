<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $fxtitle ?></title>
	<link rel="canonical" href="http://re-estize.cf" />
	<link rel="publisher" href="http://re-estize.cf"/>
  
  <!-- OpenGraph metadata-->
	  <meta charset="utf-8">
	  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	  <meta name="robots" content="index,follow" />
	  <meta property="og:locale" content="es_co" />
	  <meta property="og:type" content="website" />
	  <meta property="og:title" content="<?= $this->config->item('ProjectName'); ?>" />
	  <meta property="og:description" content="Servidor Multi Reinos, 7.3.5, 4.3.4, 3.3.5" />
	  <meta property="og:url" content="http://re-estize.cf" />
	  <meta property="og:site_name" content="Re-Estize" />
	  <meta property="og:image" content="http://legion.re-estize.cf/assets/images/news/de366cc3615c8230ae638561ba3059ca4c335356.jpg" />
	  <meta property='fb:admins' content='https://www.facebook.com/carlos.castilla.79'/>
	  <meta property="og:locale:alternate" content="es_co" />
	
  <!-- Multi-language support -->
  <link rel="alternate" href="http://re-estize.cf" hreflang="es" />
  <link rel="alternate" href="http://re-estize.cf" hreflang="en" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- UIkit -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css"/>
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>

    <!-- Font Awesome and Rpg Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?=base_url('core/rpg_awesome/css/rpg-awesome.css')?>">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/css/blizzcms-general.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('theme/'); ?><?= $this->config->item('theme_name'); ?>/css/<?= $this->config->item('theme_name'); ?>.css"/>

    <!-- Wowhead -->
    <script>var whTooltips = {colorLinks: true, iconizeLinks: false, renameLinks: false};</script>
    <script type="text/javascript" src="//wow.zamimg.com/widgets/power.js"></script>

    <!-- JQuery -->
    <script src="<?= base_url(); ?>core/js/jquery-3.3.1.min.js"></script>

    <?php if($this->m_data->isLogged()) { ?>
        <link type="text/css" rel="stylesheet" media="all" href="<?= base_url() ?>assets/chat/css/chat/chat.css" />
        <link type="text/css" rel="stylesheet" media="all" href="<?= base_url() ?>assets/chat/css/chat/screen.css" />
        <script type="text/javascript" src="<?= base_url() ?>assets/chat/js/chat/jquery.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/chat/js/chat/chat.js"></script>
    <?php } ?>

    <!-- notify -->
    <link rel="stylesheet" href="<?= base_url() ?>core/amaranjs/dist/css/amaran.min.css">
    <script src="<?= base_url() ?>core/amaranjs/dist/js/jquery.amaran.min.js"></script>

    <link rel="stylesheet" href="<?= base_url() ?>core/cookieconsent/cookieconsent.min.css"/>
    <script type="text/javascript" src="<?= base_url() ?>core/cookieconsent/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#252e39"
        },
        "button": {
          "background": "#14a7d0"
        }
      },
      "theme": "edgeless",
      "position": "bottom-right",
      "content": {
        "message": "This website uses cookies to ensure you get the best experience on our website. ",
        "dismiss": "Got it!",
        "link": "Learn more",
        "href": "<?= base_url(); ?>cookies"
      }
    })});
    </script>
	




</head>

<body class="<?= $this->config->item('theme_name'); ?>">

<?php $this->load->view('general/menu'); ?>