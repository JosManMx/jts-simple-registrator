<?php

function register_simple_registrator() {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $response = wp_create_user( $username, $password, $email );
  if(is_wp_error($response)){
    echo $response->get_error_message();
  }else {
    wp_safe_redirect(home_url()); exit;
  }
}
add_action( 'admin_post_nopriv_form_simple_registrator', 'register_simple_registrator' );