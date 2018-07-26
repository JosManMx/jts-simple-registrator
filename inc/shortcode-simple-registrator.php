<?php

function jts_simple_registrator_shortcode() {
  if ( !get_option( 'users_can_register' ) ) {
    ?>
    <h3 style="background-color:red; color:#fff; padding:0.5rem;"> 
      <?php
        _e('ERROR: please, enable "anyone can register" in General -> General -> Membership.')  
      ?>
    </h3>
    <?php 
  }else{
    if( ! is_user_logged_in()){
      /**
       * Include form registration
       */
      include_once(JTS_REGISTRATOR_URI . 'public/form-registration.php');
    }
  }
}
add_shortcode( 'jts-simple-registrator', 'jts_simple_registrator_shortcode' );
