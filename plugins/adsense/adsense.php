<?php
	$_PLUGIN['name'] = $_LANG['PLUGIN_adsense_name'];
	$_PLUGIN['info'] = $_LANG['PLUGIN_adsense_info'];
	$_PLUGIN['version'] = '1.0';
	$_PLUGIN['redate'] = '04/18/2010';
	$_PLUGIN['developer'] = 'Kelly Galvin';
	$_PLUGIN['license'] = '<a href="http://creativecommons.org/licenses/GPL/2.0/">GPL-2</a>';
	$_PLUGIN['web'] = 'http://www.betaverse.com';
?>

<?php

	function plugin_adsense()
	{
		// include globals
		global $_LANG;
		global $blog_info;
		
		// add yourplugin_language_snippet.txt to the bottom of your language file 
		echo '
		<div class="siderbar_plugin_container">
			<div class="sidebar_plugin_title">'.$_LANG['PLUGIN_adsense_name'].'</div>
			<div class="sidebar_plugin_content">
		';
		
		// add your google adsense javascript below
		$sidebar_adsense = '
		<script type="text/javascript"><!--
google_ad_client = "pub-1048025573063425";
/* Nibble 2b7 250x250, created 4/18/10 */
google_ad_slot = "0591733162";
google_ad_width = 250;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
		';
		
		// output adsense	
		echo $sidebar_adsense;

		echo '
			</div>
		</div>
		';
	}

?>
