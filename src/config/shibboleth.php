<?php

return array(

	'package' => 'saitswebuwm/shibboleth',

	/*
	|--------------------------------------------------------------------------
	| Default Authentication Driver
	|--------------------------------------------------------------------------
	|
	| This option controls the authentication driver that will be utilized.
	| This driver manages the retrieval and authentication of the users
	| attempting to get access to protected areas of your application.
	|
	| Supported: "database", "eloquent"
	|
	*/

    'port' => ':443',
    'idp_login' => '/Shibboleth.sso/Login',
    'idp_logout' => '/Shibboleth.sso/Logout',
    'local_logout' => 'shibboleth::local',
    'login_fail' => 'shibboleth::unauthorized',

	/*
	|--------------------------------------------------------------------------
	| IdP Emulation
	|--------------------------------------------------------------------------
	|
	| Allows you to emulate an IdP without setting up a test Shibboleth env.
	| Do NOT use this in production for any reason whatsoever.
	| You have been warned.
	|
	*/
	'emulate_idp' => 'false',
	'emulate_idp_users' => array(
		'admin' => array(
			'uid' => 'admin',
			'displayName' => 'Admin User',
			'givenName' => 'Admin',
			'sn' => 'User',
			'mail' => 'admin@uwm.edu',
		),
		'staff' => array(
			'uid' => 'staff',
			'displayName' => 'Staff User',
			'givenName' => 'Staff',
			'sn' => 'User',
			'mail' => 'staff@uwm.edu',
		),
		'user' => array(
			'uid' => 'user',
			'displayName' => 'User User',
			'givenName' => 'User',
			'sn' => 'User',
			'mail' => 'user@uwm.edu',
		),
	),
	
	/*
	|--------------------------------------------------------------------------
	| Default Views
	|--------------------------------------------------------------------------
	|
	| Default views, to change to the views you made you can change the following
	| lines.
	|
	*/

    'login_view' => 'shibboleth::local', // View that local users should use to login
    'shibboleth_view' => 'shibboleth::authorized', // View shibboleth users see after authenticating
    'default_view' => 'shibboleth::authorized', // View users see after authenticating
    'default_unauth' => 'shibboleth::unauthorized', // View users see when rejected

	/*
	|--------------------------------------------------------------------------
	| Defaults Settings 
	|--------------------------------------------------------------------------
	|
	| Change these setting do the proper values for your idp.
	|
	*/

	'local_login_user_field' => 'local_email', //post field used to get username
	'local_login_pass_field' => 'local_password', //post field used to get password
	'idp_login_email' => 'mail', //idp server variable for email address
	'idp_login_first' => 'givenName', //idp server variable for first name
	'idp_login_last' => 'sn', //idp server variable for last name

	/*
	|--------------------------------------------------------------------------
	| Groups Settings
	|--------------------------------------------------------------------------
	|
	| Change the group setting according to your database and program requirements.
	|
	*/

	'shibboleth_group' => '1', // Default group ID shibboleth users will be added to

);
