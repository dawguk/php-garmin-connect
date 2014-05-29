<?php
require_once '../vendor/autoload.php';

$arrCredentials = array(
'username' => 'xxx',
'password' => 'xxx'
);

try {
   $objGarminConnect = new \dawguk\GarminConnect($arrCredentials);

   $objResults = $objGarminConnect->getActivityList(0, 1);
   foreach($objResults->results->activities as $objActivity) {
      print_r($objActivity->activity);
   }

} catch (Exception $objException) {
   echo "Oops: " . $objException->getMessage();
}
