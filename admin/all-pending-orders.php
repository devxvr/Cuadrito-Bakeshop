<?php


        $title = 'All Pending Order';
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
                                            All Pending Order
                                            
                                        </h1>
                                        <div class="page-header-subtitle"></div>
                                    </div>
                                    <div class="col-12 col-xl-auto mt-4">
                                        <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                                            <span class="input-group-text"><i class="text-primary" data-feather="calendar"></i></span>
                                            <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
                                        </div>
                                        
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
                    <div class="container-xl px-4">
                        <div class="card mt-3">
                            <div class="card">
                                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                    <ul class="nav nav-tabs card-header-tabs" id="cardTab" role="tablist" style="">
                                        <li class="nav-item mb-n1">
                                            <a class="nav-link active" id="custom-tab" href="#custom" data-bs-toggle="tab" role="tab" aria-controls="custom" aria-selected="true">Custom</a>
                                        </li>
                                        <li class="nav-item mb-n1">
                                            <a class="nav-link" id="regular-tab" href="#regular" data-bs-toggle="tab" role="tab" aria-controls="regular" aria-selected="false">Regular</a>
                                        </li>
                                    </ul>
                        
                                             <!-- Add Button -->
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">
                                        Add
                                    </button>
                                        </div>
                                        
                            <div class="card-body">
                                <div class="tab-content" id="cardTabContent">
                                    <!-- Custom Tab -->
                                    <div class="tab-pane fade show active" id="custom" role="tabpanel" aria-labelledby="custom-tab">
                                        <div class="container-xl px-2 mt-2">
                                            <table id="datatablesCustom">
                                                <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>Customer Name</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                        <th>Order Date</th>
                                                        <th>Scheduled Date</th>
                                                        <th>Payment Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Regine</td>
                                                        <td>1</td>
                                                        <td>180</td>
                                                        <td>10/24/2024</td>
                                                        <td>10/24/2024</td>
                                                        <td><div class="badge bg-primary text-white rounded-pill">Paid</div></td>
                                                       
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
                                                    <!-- Add more rows as needed -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            
                                    <!-- Regular Tab -->
                                    <div class="tab-pane fade" id="regular" role="tabpanel" aria-labelledby="regular-tab">
                                        <div class="container-xl px-2 mt-2">
                                            <table id="datatablesRegular">
                                                <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>Customer Name</th>
                                                        
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                        <th>Order Date</th>
                                                        <th>Scheduled Date</th>
                                                        <th>Payment Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Regine</td>
                                                        
                                                        <td>1</td>
                                                        <td>180</td>
                                                        <td>10/24/2024</td>
                                                        <td>10/24/2024</td>
                                                        <td><div class="badge bg-primary text-white rounded-pill">Paid</div></td>
                                                       
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <button class="btn btn-datatable btn-icon btn-transparent-dark me-2" type="button" data-bs-toggle="modal" data-bs-target="#detailsModal">
                                                                    <i data-feather="info"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                    <!-- Add more rows as needed -->
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
                            <!-- Succes Alert Modal -->
                            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <i class="text-success" data-feather="check-circle" style="width: 50px; height: 50px;"></i>
                                            <p class="mt-3">Operation completed successfully!</p>
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Button -->
                            <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalAddLabel">Add New Item</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="itemName" class="form-label">Item Name</label>
                                                    <input type="text" class="form-control" id="itemName" placeholder="Enter item name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="itemPrice" class="form-label">Price</label>
                                                    <input type="number" class="form-control" id="itemPrice" placeholder="Enter item price">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add Item</button>
                                            </form>
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
