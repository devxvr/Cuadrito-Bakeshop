<?php


        $title = 'Products and Ad-Ons';
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
                                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                                            Completed Orders This Month
                                        </h1>
                                        <div class="page-header-subtitle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="row">
                            <div class="row">
                            
                            <?php
                                require_once('include/report-cards.php');
                                ?>
                            <div class="row">
                            <div class="container-xl px-4 mt-3">
                                <div class="card mb-4">
                                    <div class="card-header">Custom Table</div>
                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Order Date</th>
                                                    <th>Delivery/Pickup Date</th>
                                                    <th>Type of Cake</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Xavier Balita</td>
                                                    <td>1</td>
                                                    <td>180</td>
                                                    <td>10/24/2024</td>
                                                    <td>10/27/2024</td>
                                                    <td>Regular</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn btn-datatable btn-icon btn-transparent-dark me-2" type="button" data-bs-toggle="modal" data-bs-target="#detailsModal">
                                                                <i data-feather="info"></i>
                                                            </button>
                                                            <!-- Concfirm Button --
                                                            <button class="btn btn-datatable btn-icon btn-transparent-dark me-2" type="button" data-bs-toggle="modal" data-bs-target="#successModal">
                                                                <i data-feather="check"></i>
                                                            </button>
                                                        -->
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Details Modal -->
                        <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="detailsModalLabel">Item Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Here are the details of the selected item.</p>
                                        <!-- You can add more details or content here -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
