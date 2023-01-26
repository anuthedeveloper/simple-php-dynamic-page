<?php
$call_type = isset($_GET['callType']) ? $_GET['callType'] : "";

// Request to API for dynamic page

$home = array(
		'status' =>'success',
		'title' => 'Home Page',
		'description' => 'Home description',
		'url' => '',
		'content' => '<span>This is <strong>Home</strong> content coming from ajax url</span>'
	);

	if ( $call_type == "about") :
		
		$response = array(
			'status' => 'success',
			'title' => 'About Page',
			'description' => 'About description',
			'url' => $call_type,
			'content' => '<span>This is <strong>About</strong> content coming from ajax url</span>'
		);
	
	elseif ($call_type == "contact") :
		
		$response = array(
			'status' =>'success',
			'title' => 'Contact Page',
			'description' => 'Contact description',
			'url' => $call_type,
			'content' => '<span>This is <strong>Contact</strong> content coming from ajax url</span>'
		);

	elseif ($call_type == "home") :
		$response = $home;
	elseif ($call_type == "invoice") :

		$response = array(
			'status' => 'success',
			'title' => 'Invoice receipt Page',
			'description' => 'Invoice receipt description',
			'url' => $call_type,
			'content' => file_get_contents('pages/invoice.html'),
		);

	else :
		$response = $home;
	endif; 

echo json_encode($response);