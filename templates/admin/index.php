<?php require 'header.php'; ?>

    <div class="jumbotron">
        <div class="container">
            <div class="row-fluid">
                <div class="col-6-xs col-lg-3">
                    <h2>
                        <span class="module-title" title="Models in the Auth application">Auth</span>
                    </h2>

                    <section>
                        <a class="section-header" href="/admin/group/">Groups</a>
                        <a class="r glyphicon glyphicon-cog" href="/admin/group/">&nbsp;</a>
                        <a class="r glyphicon glyphicon-import" href="/admin/group/add/">&nbsp;</a>
                    </section>

                    <br />

                    <section>
                        <a class="section-header" href="/admin/user/">Users</a>
                        <a class="r glyphicon glyphicon-cog" href="/admin/user/">&nbsp;</a>
                        <a class="r glyphicon glyphicon-import" href="/admin/user/add/">&nbsp;</a>
                    </section>
                </div>


                <div class="col-6-xs col-lg-4">
                    <h2>
                        <span class="module-title" title="Models in the Filesystem application">Filesystem</span>
                    </h2>
                    <section>
                        <a class="section-header" href="/admin/app/">Applications</a>
                        <a class="r glyphicon glyphicon-cog" href="/admin/app/">&nbsp;</a>
                        <a class="r glyphicon glyphicon-import" href="/admin/app/add/">&nbsp;</a>
                    </section>
                </div>


                <div class="col-6-xs col-lg-3">
                    <h2>
                        <span class="module-title" title="Models in the Sites application">Sites</span>
                    </h2>
                    <section>
                        <a class="section-header" href="/admin/sites/site/">Sites</a>
                        <a class="r glyphicon glyphicon-cog" href="/admin/site/">&nbsp;</a>
                        <a class="r glyphicon glyphicon-import" href="/admin/site/add/">&nbsp;</a>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid jumbotronBottom">
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