<?php require 'header.php'; ?>

    <div id="content">
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

        <?php //require APP_PATH . '/templates/widgets/history.php' ?>

        <br class="clear" />
    </div>

<?php require 'footer.php'; ?>