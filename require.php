<?php

require('XMLRPC.inc.php');
	function checkapp($the_app)
	{
		$deactivateMe = ""; // to disable a webapp, enter it's short code here
		if (isset($the_app) && $the_app == $deactivateMe)
			return true; // Application Disabled
		else
			return false; // All systems go
	}
	$server = new IXR_Server(array('activation.checkapp' => 'checkapp'));

  ?>
