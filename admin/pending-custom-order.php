<?php


        $title = 'Reports';
        require_once('include/head.php');

    ?>
<body class="nav-fixed">
   <?php
   require_once('include/navbar.php');
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
                                            Pending Custom Order
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
                                <div class="col-lg-6 col-xl-3 mb-4">
                                    <div class="card bg-primary text-white h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="me-3">
                                                    <div class="text-white-75 small">Pending Custom Order</div>
                                                    <div class="text-lg fw-bold">2</div>
                                                </div>
                                                <i class="feather-xl text-white-50" data-feather="edit"></i>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between small">
                                            <a class="text-white stretched-link" href="pending-custom-order.html ">View Report</a>
                                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 mb-4">
                                    <div class="card bg-warning text-white h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="me-3">
                                                    <div class="text-white-75 small">All Pending Orders</div>
                                                    <div class="text-lg fw-bold">11</div>
                                                </div>
                                                <i class="feather-xl text-white-50" data-feather="book-open"></i>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between small">
                                            <a class="text-white stretched-link" href="all-pending-orders.html">View Report</a>
                                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 mb-4">
                                    <div class="card bg-success text-white h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="me-3">
                                                    <div class="text-white-75 small">Orders Today</div>
                                                    <div class="text-lg fw-bold">5</div>
                                                </div>
                                                <i class="feather-xl text-white-50" data-feather="clipboard"></i>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between small">
                                            <a class="text-white stretched-link" href="orders-today.html">View Report</a>
                                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 mb-4">
                                    <div class="card bg-danger text-white h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="me-3">
                                                    <div class="text-white-75 small">Completed Orders This Month</div>
                                                    <div class="text-lg fw-bold">25</div>
                                                </div>
                                                <i class="feather-xl text-white-50" data-feather="check-square"></i>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between small">
                                            <a class="text-white stretched-link" href="completed-orders-this-month.html">View Report</a>
                                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                    <th>Payment Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Order Date</th>
                                                    <th>Delivery/Pickup Date</th>
                                                    <th>Payment Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Xavier Balita</td>
                                                    <td>1</td>
                                                    <td>180</td>
                                                    <td>10/24/2024</td>
                                                    <td>10/27/2024</td>
                                                    <td><div class="badge bg-primary text-white rounded-pill">Paid</div></td>
                                                    <td>
                                                        <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></button>
                                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Regine Bagalangit</td>
                                                    <td>1</td>
                                                    <td>180</td>
                                                    <td>10/25/2024</td>
                                                    <td>10/27/2024</td>
                                                    <td><div class="badge bg-warning rounded-pill">Pending</div></td>
                                                    <td>
                                                        <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="more-vertical"></i></button>
                                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
