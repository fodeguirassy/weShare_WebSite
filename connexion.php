<?php
    
    $username = "Sdz";
    $password = "salut";

    class User{
    	public $username;
    	public $password;	
    }

    $user = new User();
    $user->username = $_POST['username'];
    $user->password = $_POST['password'];

    //$r = new HttpRequest('http://vps464005.ovh.net:3000/auth/login/', HttpRequest::METH_POST);
    $client = new Zend_Http_Client($uri);
    $json = json_encode($user);
    $client->setRawData($json, 'application/json')->request('POST');





  /*  echo 1;
    if( isset($_POST['username']) && isset($_POST['password']) ){
    	if($_POST['username'] == $username && $_POST['password'] == $password){
    		 session_start();
            $_SESSION['user'] = $username;
            echo "Success";
    	} 
    	else{
    		echo "Failed";
    	}

    }*/

?>