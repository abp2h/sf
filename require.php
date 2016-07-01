<?php

require('xmlrpcinc.php');
	function checkapp($the_app)
	{
		$deactivateMe = "UNIQUE_APP_SHORTCODE"; // to disable a webapp, enter it's short code here
		if (isset($the_app) && $the_app == $deactivateMe)
			return true; // Application Disabled
		else
			return false; // All systems go
	}
	$server = new IXR_Server(array('activation.checkapp' => 'checkapp'));

  ?>
