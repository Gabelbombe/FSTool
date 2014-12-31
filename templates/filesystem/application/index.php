<?php require APP_PATH . '/templates/filesystem/header.php'; ?>

    <div class="jumbotron">
        <div class="container">
            <div class="row-fluid">

                <div class="col-6-xs col-lg-12">
                    <form class="form-inline" style="margin-top: 15px; margin-bottom: 10px">
                        <div class="form-group">
                            <div class="input-group">
                                <input id="searchterm" type="text" class="form-control" id="exampleInputAmount" placeholder="Search for Application" />
                                <div class="input-group-addon">Search</div>
                            </div>
                        </div>
                    </form>

                    <div id="results"></div>

                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid jumbotronBottom">
        <div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-5">&nbsp;</div>
    </div>

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

<?php require APP_PATH . '/templates/filesystem/footer.php'; ?>