<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php 
require_once('../includes/config.php'); 
require_once('../includes/util.php'); 
$Util = new Util();

?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> 

	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta charset="UTF-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<?php 
                    include '../admin/common/include/header.php';
                ?>
					
		<!--=== ENABLE HTML5 TAGS FOR IE ===-->
		<!--[if IE]><script src="<?php echo dirname(__FILE__)."admin/common"?>/js/html5.js"></script><![endif]-->
		
		<title>Admin theme </title>
	</head>

	<body>
		<section class="sidebar">
			<a class="logo" href="index.html"></a>
			<form method="get" id="searchform" action="#">
				<input placeholder="Search..." type="text" name="s" id="s" />
			</form>
			<ul id="menu">
				<li><a href="index.html" class="active">Dashboard<span class="icon1"></span></a></li>
				<li><a href="#">Plugins<span class="icon6"></span></a>
					<ul>	 
						<li><a href="calendar.html">Advanced calendar</a></li>
						<li><a href="file_explorer.html">File explorer</a></li>
						<li><a href="charts.html">Charts</a></li>
						<li><a href="tables.html">Data Tables</a></li>
						<li><a href="lightbox.html">LightBox Evolution</a></li>
						<li><a href="alerts.html">Alert messages</a></li>
						<li><a href="dialogs.html">Fallr - Dialogs, modal boxes...</a></li>
					</ul>
				</li>
				<li><a href="#">Example forms<span class="icon2"></span></a>
					<ul>
						<li><a href="forms.html">Basic forms</a></li>
						<li><a href="forms_validation.html">Forms validation</a></li>
					</ul>
				</li>
				<li><a href="#">Icons<span class="icon7"></span></a>
					<ul>
						<li><a href="glyphish_icons.html">Glyphish icons</a></li>
						<li><a href="fugue_icons.html">Fugue icons</a></li>
					</ul>
				</li>
				<li><a href="gallery.html">Image gallery<span class="icon3"></span></a></li>
				<li><a href="grid.html">Grid<span class="icon8"></span></a></li>
				<li><a href="typography.html">Typography<span class="icon10"></span></a></li>
			</ul><!--End of #menu-->
		</section><!-- End of .sidebar -->
		
		<section class="container">
			<section class="container_12">
				<section id="page_content" class="page_content">				
						
					<div class="grid_12">
						<div class="box">
							<h2>
								Statistics
								<span class="l"></span><span class="r"></span>
							</h2>
							<div class="hide"><span class="s">Show</span><span class="h">Hide</span></div>
							<div class="block">
								<div class="block_in">
									<div class="grid_6">
										hjh
									</div>
									<div class="grid_6">
										ggg
									</div>
								</div>
							</div>
						</div>
					</div><!-- End of grid_12 -->
					
				</section><!-- end of #page_content -->
			</section><!-- end of #container_12 -->
		</section><!-- end of #container -->
		
	<script src="<?php echo dirname(__FILE__)."admin/common"?>/js/ui_calls.js" type="text/javascript"></script>
	<script src="<?php echo dirname(__FILE__)."admin/common"?>/js/scripts.js" type="text/javascript"></script>
	</body>

</html>