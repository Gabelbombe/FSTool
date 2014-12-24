<?php require 'header.php' ?>

<p>Welcome to my home page for a context sensitive login/logout sample application.</p>

<?php if (! empty($user))
{
    echo "<p>Hi $user";
} ?>

<?php require 'footer.php' ?>