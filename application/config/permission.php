<?php
// TABLE TAKES REFRENCES FROM authentication.php IN community_auth CONFIG FILE
$config['user_role_permissions'] = array(
  'admin' => array(
    'customer'         => array('index', 'add', 'edit', 'remove'),
    'orders'           => array('index', 'add', 'edit', 'remove'),
    'myauth'           => array('login', 'logout', 'recover', 'recovery_verification'),
  ),

);


$config['user_role_permissions'] = array(
					'modules' =>'All modules',
					'url'   => 'admin/interests/all',
					'title'   => 'To view all Interests',
					'permissions' => array('admin','manager')
					);
?>
