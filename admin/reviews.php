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
                    <div class="container-xl px-4 mt-n10">
                            <div class="row">
                            
                                
                                    <div class="container-xl px-4 mt-3">
                                        <div class="card mb-4">
                                            <div class="card-header">Custom Table</div>
                                                <div class="card-body">
                                                    <table id="datatablesSimple">
                                                        <thead>
                                                            <tr>
                                                                <th>Review ID</th>
                                                                <th>Customer Name</th>
                                                                <th>Email</th>
                                                                <th>Type of Review</th>
                                                                <th>Contact Number</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Xavier Balita</td>
                                                                <td>xavier@gasdasd</td>
                                                                <td>Product Review</td>
                                                                <td>09123123123</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <button class="btn btn-datatable btn-icon btn-transparent-dark me-2" type="button" data-bs-toggle="modal" data-bs-target="#detailsModal">
                                                                            <i data-feather="info"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Item Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="customerName" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="customerName" value="John Doe" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="johndoe@example.com" readonly>
                </div>
                <div class="mb-3">
                    <label for="contactNumber" class="form-label">Contact Number</label>
                    <input type="tel" class="form-control" id="contactNumber" value="+1234567890" readonly>
                </div>
                <div class="mb-3">
                    <label for="productReview" class="form-label">Product to Review</label>
                    <input type="text" class="form-control" id="productReview" value="Product XYZ" readonly>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" readonly>This is a sample review message.</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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