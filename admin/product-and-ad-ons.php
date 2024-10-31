<?php


        $title = 'Products and Ad-Ons';
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
                                            <div class="page-header-icon"><i data-feather="package"></i></div>
                                            Products and Ad-Ons
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
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <ul class="nav nav-tabs card-header-tabs" id="cardTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="product-tab" href="#product" data-bs-toggle="tab" role="tab" aria-controls="product" aria-selected="true">Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="adons-tab" href="#adons" data-bs-toggle="tab" role="tab" aria-controls="adons" aria-selected="false">Ad-Ons</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="cardTabContent">
                                        <!-- Product Tab -->
                                        <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="product-tab">
                                            <div class="container-xl px-2 mt-2">
                                                <table id="datatablesProduct">
                                                    <thead>
                                                        <tr>
                                                            <th>Product ID</th>
                                                            <th>Product Name</th>
                                                            <th>Flavor</th>
                                                            <th>Price</th>
                                                            <th>Date Added</th>
                                                            <th>Status</th>
                                                            <th>Disable Cake</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Product ID</th>
                                                            <th>Product Name</th>
                                                            <th>Flavor</th>
                                                            <th>Price</th>
                                                            <th>Date Added</th>
                                                            <th>Status</th>
                                                            <th>Disable Cake</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Ube Cake</td>
                                                            <td>Ube</td>
                                                            <td>180</td>
                                                            <td>10/24/2024</td>
                                                            <td><div class="badge bg-primary text-white rounded-pill">Available</div></td>
                                                            <td></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="dropdown me-2">
                                                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i data-feather="more-vertical"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</a>
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalDetails">Details</a>
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn-datatable btn-icon btn-transparent-dark" data-bs-toggle="modal" data-bs-target="#modalDeleteWarning">
                                                                        <i data-feather="trash-2"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- Add more rows as needed -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                
                                        <!-- Add-ons Tab -->
                                        <div class="tab-pane fade" id="adons" role="tabpanel" aria-labelledby="adons-tab">
                                            <div class="container-xl px-2 mt-2">
                                                <table id="datatablesAdons">
                                                    <thead>
                                                        <tr>
                                                            <th>Add-on ID</th>
                                                            <th>Add-on Name</th>
                                                            <th>Price</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Add-on ID</th>
                                                            <th>Add-on Name</th>
                                                            <th>Price</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Cup Cake</td>
                                                            <td>10</td>
                                                            <td><div class="badge bg-primary text-white rounded-pill">Available</div></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="dropdown me-2">
                                                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i data-feather="more-vertical"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</a>
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalDetails">Details</a>
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn-datatable btn-icon btn-transparent-dark" data-bs-toggle="modal" data-bs-target="#modalDeleteWarning">
                                                                        <i data-feather="trash-2"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Candle</td>
                                                            <td>10</td>
                                                            <td><div class="badge bg-primary text-white rounded-pill">Available</div></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="dropdown me-2">
                                                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i data-feather="more-vertical"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</a>
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalDetails">Details</a>
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn-datatable btn-icon btn-transparent-dark" data-bs-toggle="modal" data-bs-target="#modalDeleteWarning">
                                                                        <i data-feather="trash-2"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Birthday Letter</td>
                                                            <td>0</td>
                                                            <td><div class="badge bg-primary text-white rounded-pill">Available</div></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="dropdown me-2">
                                                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i data-feather="more-vertical"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</a>
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalDetails">Details</a>
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn-datatable btn-icon btn-transparent-dark" data-bs-toggle="modal" data-bs-target="#modalDeleteWarning">
                                                                        <i data-feather="trash-2"></i>
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
                                
                                <!-- Edit Modal -->
                                <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalEditLabel">Edit Item</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="editField" class="form-label">Edit Field</label>
                                                        <input type="text" class="form-control" id="editField" placeholder="Enter new value">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Details Modal -->
                                <div class="modal fade" id="modalDetails" tabindex="-1" aria-labelledby="modalDetailsLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalDetailsLabel">Item Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Here are the details of the selected item.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Delete Confirmation Modal -->
                                <div class="modal fade" id="modalDeleteWarning" tabindex="-1" aria-labelledby="modalDeleteWarningLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="modalDeleteWarningLabel">Delete Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this item? This action cannot be undone.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
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