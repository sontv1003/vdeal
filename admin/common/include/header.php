<link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/reset.css" />
<link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/grid.css" />
<link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/uniform.default.css" />
<link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/chosen.css" />
<link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/plugins/jqueryui/all/themes/base/jquery.ui.all.css" />
<link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/plugins/dialogs/jquery-fallr-1.0.css" />
<link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/plugins/validator/css/validationEngine.jquery.css" />
<link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/style.css" />
<link rel="stylesheet" href="<?php echo $hostname . '/admin/common' ?>/css/config.css" />
<!--[if gte IE 8]><link rel="stylesheet" href="<?php echo $hostname . "/admin/common" ?>/css/ie8.css" /><![endif]-->
<!--============ JQUERY =============-->
<script src="<?php echo $hostname . "/admin/common" ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $hostname . "/admin/common" ?>/js/jquery.uniform.js" type="text/javascript"></script>
<script src="<?php echo $hostname . "/admin/common" ?>/js/chosen.jquery.js" type="text/javascript"></script>
<script src="<?php echo $hostname . "/admin/common" ?>/js/jquery.placeholder.js" type="text/javascript"></script>
<script src="<?php echo $hostname . "/admin/common" ?>/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="<?php echo $hostname . "/admin/common" ?>/plugins/dialogs/jquery-fallr-1.2.js" type="text/javascript"></script>
<script src="<?php echo $hostname . "/admin/common" ?>/plugins/jqueryui/all/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $hostname . "/admin/common" ?>/plugins/validator/js/languages/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo $hostname . "/admin/common" ?>/plugins/validator/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php echo $hostname . "/admin/common" ?>/plugins/gvchart/jquery.gvChart-1.0.1.min.js"></script>
<script type="text/javascript" src="<?php echo $hostname . "/admin/common" ?>/js/scriptbreaker-multiple-accordion-1.js"></script>
<script src="<?php echo $hostname . "/admin/common" ?>/js/head_scripts.js" type="text/javascript"></script>
<!--=== ENABLE HTML5 TAGS FOR IE ===-->
<!--[if IE]><script src="<?php echo $hostname . "/admin/common" ?>/js/html5.js"></script><![endif]-->

<title>vDeal.asia - Admin Control Panel</title>

<?php
require_once('../admin/class/login/authentication.php');
$checkAuth = new authentication();
echo isset($_SESSION['admin']);
$checkAuth->preventUserNotLogin($Util);
?>