<?php
	$_PLUGIN['name'] = $_LANG['PLUGIN_picasa_name'];
	$_PLUGIN['info'] = $_LANG['PLUGIN_picasa_info'];
	$_PLUGIN['version'] = '1.0 beta';
	$_PLUGIN['redate'] = '04/18/2010';
	$_PLUGIN['developer'] = 'Kelly Galvin';
	$_PLUGIN['license'] = '<a href="http://creativecommons.org/licenses/GPL/2.0/">GPL-2</a>';
	$_PLUGIN['web'] = 'http://www.betaverse.com';
?>

<?php

	function plugin_picasa()
	{
		//include globals
		global $_LANG;
		global $blog_info;
		
				
		// add yourplugin_language_snippet.txt to the bottom of your language file
		echo '
		<div class="siderbar_plugin_container">
		<!-- start picasa files-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  	<link rel="stylesheet" href="'.$blog_info['path'].'/includes/plugins/picasa/css/slimbox2.css" type="text/css" media="screen" />
  	<script type="text/javascript" src="'.$blog_info['path'].'/includes/plugins/picasa/js/slimbox2.js"></script>
  	<script type="text/javascript" src="'.$blog_info['path'].'/includes/plugins/picasa/js/jquery.EmbedPicasaGallery.js"></script>
  	<!-- end picasa files -->
			<div class="sidebar_plugin_title">'.$_LANG['PLUGIN_picasa_name'].'</div>
			<div class="sidebar_plugin_content">
		';
		
		//call the picasa function		
		$sidebar_picasa = '
		<script type="text/javascript">
		jQuery(document).ready(function() {
		jQuery("#picasa").EmbedPicasaGallery(\'hardmile.com\',{
			  matcher:    /./,  // string or regexp matching album title
			  size:      \'72\',  // thumb size (32,48,64,72,144,160))
			  msg_loading_list :  \'Loading images from Picasa\',
			  msg_back :   \'Back\'
		});
		});
		</script>
		
		<!-- picasa container -->
		<div id="picasa"></div>
		';
		
		// output picasa	
		echo $sidebar_picasa;

		echo '
			</div>
		</div>
		';
	}

?>
