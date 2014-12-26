    <!-- Javascript -->
    <script src="assets/js/jquery-1.8.2.min.js"></script>
    <?php if (('login' || 'logout') == substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/") + 1)) {
        require APP_PATH . '/templates/scripts/supersized.php';
    } else { ?>
        <script src="assets/js/foo.js"></script>
    <?php } ?>

</body>

</html>
