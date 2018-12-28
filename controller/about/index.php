<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
if(isset($uri_segments[3])!=''){
$url3 =$uri_segments[3];
}else {
$url3 ='';
}
switch ($url3) {
    case '':
      require  'controller/about/view/index.php';
    break;
    default:
      require  'controller/about/view/error.php';
    break;

}
 ?>
