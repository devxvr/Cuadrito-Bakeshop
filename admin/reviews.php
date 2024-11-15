<?php


        $title = 'Reviews';
        require_once('include/head.php');

    ?>
<body class="nav-fixed">
   <?php
   require_once('include/navbar.php');
   ?>

<?php
   require_once('include/sidebar.php');
   ?>
        
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="edit-2"></i></div>
                                            Reviews
                                        </h1>
                                        <div class="page-header-subtitle"></div>
                                    </div>
                                    <!-- 
                                    <div class="col-12 col-xl-auto mt-4">
                                        <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                                            <span class="input-group-text"><i class="text-primary" data-feather="calendar"></i></span>
                                            <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
                                        </div>
                                        
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="container-xl px-4">
                        <div class="card mt-n10">
                            
                            <div class="card-body"> 
                                
                            </div>
                        </div>
                    </div>
                </main>
                    <footer class="footer-admin mt-auto footer-light">
                        <div class="container-xl px-4">
                            <div class="row">
                                <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                                <div class="col-md-6 text-md-end small">
                                    <a href="#!">Privacy Policy</a>
                                    &middot;
                                    <a href="#!">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </body>
        <?php
    
        require_once('include/scripts.php');
    
        ?>
    </html>