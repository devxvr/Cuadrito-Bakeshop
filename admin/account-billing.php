<?php


        $title = 'Reports';
        require_once('include/head.php');

    ?>
<body class="nav-fixed">
   <?php
   require_once('include/navbar.php');
   ?>
        <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
            <!-- Sidenav Toggle Button-->
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
            <!-- Navbar Brand-->
            <!-- * * Tip * * You can use text or an image for your navbar brand.-->
            <!-- * * * * * * When using an image, we recommend the SVG format.-->
            <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
            <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="reports.html">Cuadrito Bakeshop</a>
            <!-- Navbar Search Input-->
            <!-- * * Note: * * Visible only on and above the lg breakpoint-->
            <ul class="navbar-nav align-items-center ms-auto">
                <!-- Alerts Dropdown-->
                <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="me-2" data-feather="bell"></i>
                            Alerts Center
                        </h6>
                        <!-- Example Alert 1-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 29, 2021</div>
                                <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing serious, but it requires your attention.</div>
                            </div>
                        </a>
                        
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                    </div>
                </li>
                <!-- Messages Dropdown-->
                <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="me-2" data-feather="mail"></i>
                            Message Center
                        </h6>
                        <!-- Example Message 1  -->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-2.png" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Thomas Wilcox · 58m</div>
                            </div>
                        </a>
                        
                        <!-- Footer Link-->
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                    </div>
                </li>
                <!-- User Dropdown-->
                <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="assets/img/illustrations/profiles/profile-1.png" /></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="assets/img/illustrations/profiles/profile-1.png" />
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">Valerie Luna</div>
                                <div class="dropdown-user-details-email">vluna@aol.com</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="account-profile.html">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Account
                        </a>
                        <a class="dropdown-item" href="#!">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <!-- Sidenav Menu Heading (Account)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <div class="sidenav-menu-heading d-sm-none">Account</div>
                            <!-- Sidenav Link (Alerts)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                                Alerts
                                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                            </a>
                            <!-- Sidenav Link (Messages)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                                Messages
                                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                            </a>
                            <!-- Sidenav Menu Heading (Core)-->
                            <div class="sidenav-menu-heading"></div>
                            
                            <!-- Sidenav Accordion (Dashboard)-->
                            
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                Dashboards
                                
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                    <a class="nav-link" href="reports.html">
                                        Reports
                                        <!--
                                        <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                                    -->
                                    </a>
                                    <a class="nav-link" href="pending-custom-order.html">Pending Custom Order</a>
                                    <a class="nav-link" href="all-pending-orders.html">All Pending Orders</a>
                                    <a class="nav-link" href="orders-today.html">Order Today</a>
                                    <a class="nav-link" href="completed-orders-this-month.html">Completed Orders This Month</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="order-request.html">
                                <div class="nav-link-icon"><i data-feather="bookmark"></i></div>
                                Order Request
                            </a>
                            <a class="nav-link" href="product-and-ad-ons.html">
                                <div class="nav-link-icon"><i data-feather="package"></i></div>
                                Products and Ad-ons
                            </a>
                            <a class="nav-link" href="calendar.html">
                                <div class="nav-link-icon"><i data-feather="calendar"></i></div>
                                Calendar
                            </a>
                            <a class="nav-link" href="deals-and-offer.html">
                                <div class="nav-link-icon"><i data-feather="tag"></i></div>
                                Deals and Offer
                            </a>
                            <a class="nav-link" href="reviews.html">
                                <div class="nav-link-icon"><i data-feather="edit-2"></i></div>
                                Reviews
                            </a>
                        </div>
                    </div>
                    <!-- Sidenav Footer-->
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">Valerie Luna</div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="user"></i></div>
                                            Account Settings - Billing
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-4">
                        <!-- Account page navigation-->
                        <nav class="nav nav-borders">
                            <a class="nav-link ms-0" href="account-profile.html">Profile</a>
                            <a class="nav-link active" href="account-billing.html">Billing</a>
                            <a class="nav-link" href="account-security.html">Security</a>
                           
                        </nav>
                        <hr class="mt-0 mb-4" />
                        <div class="row">
                             <!--
                            <div class="col-lg-4 mb-4">
                                 Billing card 1
                                <div class="card h-100 border-start-lg border-start-primary">
                                    <div class="card-body">
                                        <div class="small text-muted">Current monthly bill</div>
                                        <div class="h3">$20.00</div>
                                        <a class="text-arrow-icon small" href="#!">
                                            Switch to yearly billing
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                 Billing card 2--
                                <div class="card h-100 border-start-lg border-start-secondary">
                                    <div class="card-body">
                                        <div class="small text-muted">Next payment due</div>
                                        <div class="h3">July 15</div>
                                        <a class="text-arrow-icon small text-secondary" href="#!">
                                            View payment history
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                 Billing card 3--
                                <div class="card h-100 border-start-lg border-start-success">
                                    <div class="card-body">
                                        <div class="small text-muted">Current plan</div>
                                        <div class="h3 d-flex align-items-center">Freelancer</div>
                                        <a class="text-arrow-icon small text-success" href="#!">
                                            Upgrade plan
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    -->
                        <!-- Payment methods card-->
                        <div class="card card-header-actions mb-4">
                            <div class="card-header">
                                Payment Methods
                                <button class="btn btn-sm btn-primary" type="button">Add Payment Method</button>
                            </div>
                            <div class="card-body px-0">
                                <!-- Payment method 1-->
                                <div class="d-flex align-items-center justify-content-between px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-cc-visa fa-2x cc-color-visa"></i>
                                        <div class="ms-4">
                                            <div class="small">Visa ending in 1234</div>
                                            <div class="text-xs text-muted">Expires 04/2024</div>
                                        </div>
                                    </div>
                                    <div class="ms-4 small">
                                        <div class="badge bg-light text-dark me-3">Default</div>
                                        <a href="#!">Edit</a>
                                    </div>
                                </div>
                                <hr />
                                <!-- Payment method 2-->
                                <div class="d-flex align-items-center justify-content-between px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-cc-mastercard fa-2x cc-color-mastercard"></i>
                                        <div class="ms-4">
                                            <div class="small">Mastercard ending in 5678</div>
                                            <div class="text-xs text-muted">Expires 05/2022</div>
                                        </div>
                                    </div>
                                    <div class="ms-4 small">
                                        <a class="text-muted me-3" href="#!">Make Default</a>
                                        <a href="#!">Edit</a>
                                    </div>
                                </div>
                                <hr />
                                <!-- Payment method 3-->
                                <div class="d-flex align-items-center justify-content-between px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-cc-amex fa-2x cc-color-amex"></i>
                                        <div class="ms-4">
                                            <div class="small">American Express ending in 9012</div>
                                            <div class="text-xs text-muted">Expires 01/2026</div>
                                        </div>
                                    </div>
                                    <div class="ms-4 small">
                                        <a class="text-muted me-3" href="#!">Make Default</a>
                                        <a href="#!">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Billing history card-->
                        <div class="card mb-4">
                            <div class="card-header">Billing History</div>
                            <div class="card-body p-0">
                                <!-- Billing history table-->
                                <div class="table-responsive table-billing-history">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-gray-200" scope="col">Transaction ID</th>
                                                <th class="border-gray-200" scope="col">Date</th>
                                                <th class="border-gray-200" scope="col">Amount</th>
                                                <th class="border-gray-200" scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#39201</td>
                                                <td>06/15/2021</td>
                                                <td>$29.99</td>
                                                <td><span class="badge bg-light text-dark">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>#38594</td>
                                                <td>05/15/2021</td>
                                                <td>$29.99</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>#38223</td>
                                                <td>04/15/2021</td>
                                                <td>$29.99</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>#38125</td>
                                                <td>03/15/2021</td>
                                                <td>$29.99</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
