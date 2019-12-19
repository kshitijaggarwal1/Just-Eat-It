<html>
  <body>
  <?php
$statesA = array('Mississippi', 'Alabama', 'Texas', 'Massachusetts', 'Kansas');
$statesArray = array();

 foreach($statesA as $state) {
 if(preg_match( '/xas$/', ($state)))
 $statesArray[0] = ($state);
  }

 foreach($statesA as $state) {
 if(preg_match('/^k.*s$/i', ($state)))
 $statesArray[1] = ($state);
}

 foreach($statesA as $state) {
if(preg_match('/^M.*s$/', ($state)))
 $statesArray[2] = ($state);
 }

   foreach($statesA as $state) {
if(preg_match('/a$/', ($state)))
 $statesArray[3] = ($state);
}

 foreach($statesA as $state) {
 if(preg_match('/^M/', ($state)))
$statesArray[4] = ($state);
}

 foreach ( $statesArray as $element => $value )
 print( "Element $element of statesArray is $value <br />");


     print( "</p>" );
 ?>