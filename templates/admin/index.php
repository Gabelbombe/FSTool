<?php require 'header.php';
//http://go.themeforest.net/the-corporate-trends-bundle/?ref=flipstorm
?>

    <div class="jumbotron">
        <div style='position: absolute' id="content">
            <div id="content-main">
                <article class="module">
                    <blockquote>
                        <h2>
                            <a href="/admin/auth" title="Models in the Auth application">Auth</a>
                        </h2>

                        <section>
                            <a href="/admin/auth/group/">Groups</a>
                            <a class="symbol c" href="/admin/auth/group/" class="changelink">Change</a>
                            <a class="symbol a" href="/admin/auth/group/add/" class="addlink">Add</a>
                        </section>

                        <section>
                            <a href="/admin/auth/user/">Users</a>
                            <a class="symbol c" href="/admin/auth/user/" class="changelink">Change</a>
                            <a class="symbol a" href="/admin/auth/user/add/" class="addlink">Add</a>
                        </section>

                    </blockquote>
                </article>

                <article class="module">
                    <blockquote>
                        <h2>
                            <a href="/admin/filesystem/" class="section" title="Models in the Filesystem application">Filesystem</a>
                        </h2>
                        <section>
                            <a href="/admin/filesystem/application/">Applications</a>
                            <a class="symbol c" href="/admin/filesystem/application/" class="changelink">Change</a>
                            <a class="symbol a" href="/admin/filesystem/application/add/" class="addlink">Add</a>
                        </section>

                    </blockquote>
                </article>

                <article class="module">
                    <blockquote>
                        <h2>
                            <a href="/admin/sites/" class="section" title="Models in the Sites application">Sites</a>
                        </h2>
                        <section>
                            <a href="/admin/sites/site/">Sites</a>
                            <a class="symbol c" href="/admin/filesystem/site/" class="changelink">Change</a>
                            <a class="symbol a" href="/admin/filesystem/site/add/" class="addlink">Add</a>
                        </section>

                    </blockquote>
                </article>
            </div>
            <br class="clear" />
        </div>
    </div>

    <div class="row jumbotronBottom">
        <div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-5">&nbsp;</div>
    </div>


        <?php //require APP_PATH . '/templates/widgets/history.php' ?>

    <div class="row whiteBG">
        <div class="col-xs-12">

        </div>
    </div>

    <div class="row quicklinks">
        <div class="col-xs-12">

            <div class="itemsNav textAlignCenter">
                <h3>Linklist</h3>
                <ul class="quickLinksList">
                    <li><a href="#">???</a></li>
                </ul>
            </div>

        </div>
    </div>

<?php require 'footer.php'; ?>