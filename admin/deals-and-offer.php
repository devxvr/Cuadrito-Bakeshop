<?php


        $title = 'Deals and Offer';
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
                                            <div class="page-header-icon"><i data-feather="tag"></i></div>
                                            Deals and Offer
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
    <div class="card mt-n10" style="background-color: #D9D9D9;">
        <div class="card-body">
            <div class="row">
                <!-- First card -->
                <div class="col-md-6">
                    <div class="card bg-light text-black shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <p class="mb-0">Senior Citizen Discount</p>
                                </div>
                                <div class="d-flex align-item-center">
                                    <input type="number" class="form-control me-2" id="percentage" placeholder="0%" style="width: 90px">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="toggle1">
                                        <label class="form-check-label" for="toggle1">Off</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second card -->
                <div class="col-md-6">
                    <div class="card bg-light text-black shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <p class="mb-0">Custom Cake Orders</p>
                                </div>
                                <div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="toggle2">
                                        <label class="form-check-label" for="toggle2">Off</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <!-- Third card -->
                <div class="col-md-6">
                    <div class="card bg-light text-black shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <p class="mb-0">PWD Discount</p>
                                </div>
                                <div class="d-flex align-item-center">
                                    <input type="number" class="form-control me-2" id="percentage" placeholder="0%" style="width: 90px">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="toggle1">
                                        <label class="form-check-label" for="toggle1">Off</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fourth card -->
                <div class="col-md-6">
                    <div class="card bg-light text-black shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <p class="mb-0">Product Table</p>
                                </div>
                                <div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="toggle4">
                                        <label class="form-check-label" for="toggle4">Off</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <!-- Fifth card -->
                <div class="col-md-6">
                    <div class="card bg-light text-black shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <p class="mb-0">Whole Sale</p>
                                </div>
                                <div class="d-flex align-item-center">
                                    <input type="number" class="form-control me-2" id="percentage" placeholder="0%" style="width: 90px">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="toggle1">
                                        <label class="form-check-label" for="toggle1">Off</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sixth card -->
                <div class="col-md-6">
                    <div class="card bg-light text-black shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <p class="mb-0">Seasonal Cake Sales</p>
                                </div>
                                <div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="toggle6">
                                        <label class="form-check-label" for="toggle6">Off</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <!-- Seventh card -->
                <div class="col-md-6">
                    <div class="card bg-light text-black shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <p class="mb-0">Special Offer Sales</p>
                                </div>
                                <div class="d-flex align-item-center">
                                    <input type="number" class="form-control me-2" id="percentage" placeholder="0%" style="width: 90px">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="toggle1">
                                        <label class="form-check-label" for="toggle1">Off</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
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