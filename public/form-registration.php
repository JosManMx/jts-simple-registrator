<h2><?php _e('Register form:' , 'jts-simple-registrator') ?></h2>
<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
  <fieldset>
    <legend><?php _e('Login data:' , 'jts-simple-registrator');?></legend>
    <label>
      <?php _e('Username:' , 'jts-simple-registrator');?>
      <input type="text" name="username" id="jts-registrator-username" required>
    </label>
    <label>
      <?php _e('E-Mail:' , 'jts-simple-registrator');?>
      <input type="email" name="email" id="jts-registrator-username" required>
    </label>
    <label>
      <?php _e('Password:' , 'jts-simple-registrator');?>
      <input type="password" id="password" name="password" id="jts-registrator-username" required>
    </label>
    <label>
      <?php _e('Confirm your password:' , 'jts-simple-registrator');?>
      <input type="password" id="confirmPassword" name="password-confirm" id="jts-registrator-username" required>
    </label>
  </fieldset>
  <input type="hidden" name="action" value="form_simple_registrator">
  <input type="submit" onclick="validatePassword()" value="<?php _e('Register' , 'jts-simple-registrator') ?>">

</form> 

<script>

var password = document.getElementById("password"), 
    confirmPassword = document.getElementById("confirmPassword");

function validatePassword(){
  if(password.value != confirmPassword.value) {
    confirmPassword.setCustomValidity('<?php _e('Passwords Do not Match' , 'jts-simple-registrator'); ?>');
  } else {
    confirmPassword.setCustomValidity('');
  }
}

</script>