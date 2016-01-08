<?php 


	$params = explode('/', $_GET['url']);
    $resource = $params[0];
    $action = $params[1];

    var_dump($_GET['url']);
    var_dump($resource);

    var_dump($action);

    //$action = $_GET['action'];
    
    require('controllers/'.$resource.'_controller.php');
    
    

?>