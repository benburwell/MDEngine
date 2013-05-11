<?php

function url_is_directory($path) {
	return substr($path, strlen($path)-1, 1) == '/' || $path == '';
}

function google_analytics_code() {
	
	global $mdengine;

	if ($mdengine['google_analytics_id'] !== false) {

		echo '<!-- Google Analytics -->';
		echo '<script type="text/javascript">';
		echo 'var _gaq = _gaq || [];';
		echo '_gaq.push([\'_setAccount\', \''. $mdengine['google_analytics_id'] .'\']);';
		echo '_gaq.push([\'_trackPageview\']);';
		echo '(function() {';
		echo 'var ga = document.createElement(\'script\');';
		echo 'ga.type = \'text/javascript\'; ga.async = true;';
		echo 'ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';';
		echo 'var s = document.getElementsByTagName(\'script\')[0];';
		echo 's.parentNode.insertBefore(ga, s);';
		echo '})();';
		echo '</script>';

	}
}

?>