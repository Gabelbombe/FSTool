<?php require 'header.php'; ?>

        <!-- Content -->
        <div id="content" class="colMS">

            <h1>Site administration</h1>

            <div id="content-main">



                <div class="module">
                    <table>
                        <caption>
                            <a href="/admin/auth/" class="section" title="Models in the Auth application">
                                Auth
                            </a>
                        </caption>

                        <tr>

                            <th scope="row"><a href="/admin/auth/group/">Groups</a></th>



                            <td><a href="/admin/auth/group/add/" class="addlink">Add</a></td>



                            <td><a href="/admin/auth/group/" class="changelink">Change</a></td>

                        </tr>

                        <tr>

                            <th scope="row"><a href="/admin/auth/user/">Users</a></th>



                            <td><a href="/admin/auth/user/add/" class="addlink">Add</a></td>



                            <td><a href="/admin/auth/user/" class="changelink">Change</a></td>

                        </tr>

                    </table>
                </div>

                <div class="module">
                    <table>
                        <caption>
                            <a href="/admin/filesystem/" class="section" title="Models in the Filesystem application">
                                Filesystem
                            </a>
                        </caption>

                        <tr>

                            <th scope="row"><a href="/admin/filesystem/application/">Applications</a></th>



                            <td><a href="/admin/filesystem/application/add/" class="addlink">Add</a></td>



                            <td><a href="/admin/filesystem/application/" class="changelink">Change</a></td>

                        </tr>

                    </table>
                </div>

                <div class="module">
                    <table>
                        <caption>
                            <a href="/admin/sites/" class="section" title="Models in the Sites application">
                                Sites
                            </a>
                        </caption>

                        <tr>

                            <th scope="row"><a href="/admin/sites/site/">Sites</a></th>



                            <td><a href="/admin/sites/site/add/" class="addlink">Add</a></td>



                            <td><a href="/admin/sites/site/" class="changelink">Change</a></td>

                        </tr>

                    </table>
                </div>


            </div>


            <div id="content-related">
                <div class="module" id="recent-actions-module">
                    <h2>Recent Actions</h2>
                    <h3>My Actions</h3>



                    <ul class="actionlist">

                        <li class="changelink">

                            <a href="filesystem/application/46/">TMAP</a>

                            <br/>

                            <span class="mini quiet">Application</span>

                        </li>

                        <li class="changelink">

                            <a href="filesystem/application/46/">TMAP</a>

                            <br/>

                            <span class="mini quiet">Application</span>

                        </li>

                        <li class="changelink">

                            <a href="filesystem/application/71/">RETA</a>

                            <br/>

                            <span class="mini quiet">Application</span>

                        </li>

                        <li class="changelink">

                            <a href="filesystem/application/89/">DWCI</a>

                            <br/>

                            <span class="mini quiet">Application</span>

                        </li>

                        <li class="changelink">

                            <a href="filesystem/application/57/">DWCP</a>

                            <br/>

                            <span class="mini quiet">Application</span>

                        </li>

                        <li class="changelink">

                            <a href="filesystem/application/89/">DWCI</a>

                            <br/>

                            <span class="mini quiet">Application</span>

                        </li>

                        <li class="changelink">

                            <a href="filesystem/application/46/">TMAP</a>

                            <br/>

                            <span class="mini quiet">Application</span>

                        </li>

                        <li class="changelink">

                            <a href="filesystem/application/71/">RETA</a>

                            <br/>

                            <span class="mini quiet">Application</span>

                        </li>

                        <li class="changelink">

                            <a href="filesystem/application/28/">DWCP (CQ5 - TMO) Authoring</a>

                            <br/>

                            <span class="mini quiet">Application</span>

                        </li>

                        <li class="changelink">

                            <a href="filesystem/application/28/">DWCP (CQ5 - TMO) Authoring</a>

                            <br/>

                            <span class="mini quiet">Application</span>

                        </li>

                    </ul>

                </div>
            </div>

            <br class="clear" />
        </div>
        <!-- END Content -->

    <!-- END Container -->

<?php require 'footer.php'; ?>