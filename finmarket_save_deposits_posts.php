<?php
	  $email =   $_POST['acf']['field_5a781a66ce9a0']['field_5a781a66e8e78'];
    $pass =    $_POST['acf']['field_5a781a66ce9a0']['field_5a781a66e8f1b'];
    $name =    $_POST['acf']['field_5a781a66ce9a0']['field_5a781a66e8fb6'];
    $surname = $_POST['acf']['field_5a781a66ce9a0']['field_5a781a66e9052'];
    $website = "http://finbazar.com.mk";



   $_SESSION['username'] = $email;
   $_SESSION['password'] = $pass;


    $userdata = array(
    'user_login'  =>  $name,
    'user_email'  =>  $email,
    'user_url'    =>  $website,
    'user_pass'   =>  $pass,
    'first_name'  =>  $name,
    'last_name'   =>  $surname,
    'role' => "author" // When creating an user, `user_pass` is expected.
  );
  $user_id = wp_insert_user( $userdata );

 /** Assign post to newly created  user **/
  $arg = array(
      'ID' => $post_id,
      'post_author' => $user_id,
   );
 wp_update_post($arg);




?>