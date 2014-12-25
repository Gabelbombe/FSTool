<?php require 'header.php' ?>

<?php if (! empty($user)) { ?>

    <div class="page-container">
        <h1>Login</h1>
        <form action="" method="post">
            <input type="text" name="username" class="username" placeholder="Username">
            <input type="password" name="password" class="password" placeholder="Password">
            <button type="submit">Sign me in</button>
            <div class="error"><span>+</span></div>
        </form>
        <div class="connect">
            <p>Or connect with:</p>
            <p>
                <a class="facebook" href=""></a>
                <a class="twitter" href=""></a>
            </p>
        </div>
    </div>

<?php } ?>

<?php require 'footer.php' ?>