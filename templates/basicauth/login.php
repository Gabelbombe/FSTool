<?php require 'header.php' ?>

<?php if (empty($user)) { ?>

  <div class="page-container center">
    <h1>Login</h1>
    <form action="/login" method="POST">
      <input type="text" name="email" class="username" placeholder="Email" value="<?=$email_value?>" />
      <input type="password" name="password" class="password" placeholder="Password">
      <button type="submit" value="Login">Sign me in</button>
      <div class="error"><span>+</span></div>
    </form>

    <!-- // reason
       Error: <?=$email_error?> <?=$password_error?>
    -->

    <?php if(! empty($urlRedirect)) { ?>
      <p style="margin-top: 15px; font-size: 10px; color: red;">(You will redirect to "<?=$urlRedirect?>" upon login)</p>
    <?php } ?>

    <div class="connect">
      <p>Or connect with:</p>
      <p>
        <a class="facebook" href=""></a>
        <a class="twitter" href=""></a>
      </p>
    </div>
  </div>

<?php } else {

  echo '
    <div class="center" style="margin-top: 250px">Already logged in, redirecting....</div>
    <script>
      // Your application has indicated there\'s an error
      window.setTimeout(function() {
        window.location.href = "/";
      }, 1000);
    </script>';

} ?>

<?php require 'footer.php' ?>
