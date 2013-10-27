<?php
require_once 'DBConfig.php';
require_once 'openid.php';
$openid = new LightOpenID(SITE_PATH);
 
$openid->identity = 'https://www.google.com/accounts/o8/id';
$openid->required = array(
  'namePerson/first',
  'namePerson/last',
  'contact/email',
);

$openid->returnUrl = SITE_PATH.'/login.php';
?>
 
<a href="<?php echo $openid->authUrl() ?>">Login with Google</a>

