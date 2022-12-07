<?php 
include "pages/header_admin.php";
?>
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box page-title-box-alt">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Adminto</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Datatables</li>
                </ol>
            </div>
            <h4 class="page-title">Datatables</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Manage Produk</h4>
    
                                        <table id="key-table" class="table table-bordered dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>Id_produk</th>
                                                <th>Name Product</th>
                                                <th>stock</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Greyrosse</td>
                                                <td>3</td>
                                                <td>
                                                    <a href="Hapus.php">Hapus</a> / 
                                                    <a href="Ubah.php">Ubah</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12345</td>
                                                <td>Clingy</td>
                                                <td>10</td>
                                                <td>
                                                    <a href="Hapus.php">Hapus</a> /
                                                    <a href="Ubah.php">Ubah</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2345</td>
                                                <td>fragnant</td>
                                                <td>4</td>
                                                <td>
                                                    <a href="Hapus.php">Hapus</a> / 
                                                    <a href="Ubah.php">Ubah</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <script>document.write(new Date().getFullYear())</script> &copy; Adminto theme by <a href="">Coderthemes</a> 
            </div>
            <div class="col-md-6">
                <div class="text-md-end footer-links d-none d-sm-block">
                    <a href="javascript:void(0);">About Us</a>
                    <a href="javascript:void(0);">Help</a>
                    <a href="javascript:void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
<div class="right-bar">

    <div data-simplebar class="h-100">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
        </div>
        
        <!-- Tab panes -->
        <div class="tab-content pt-0">  

            <div class="tab-pane active" id="settings-tab" role="tabpanel">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, Layout, etc.
                    </div>

                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Width -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="width" value="fluid" id="fluid-check" checked />
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="width" value="boxed" id="boxed-check" />
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>

                    <!-- Menu positions -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="menus-position" value="fixed" id="fixed-check"
                            checked />
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="menus-position" value="scrollable"
                            id="scrollable-check" />
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <!-- Topbar -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                            checked />
                        <label class="form-check-label" for="darktopbar-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                        <label class="form-check-label" for="lighttopbar-check">Light</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                        <a href="https://1.envato.market/admintoadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>

                </div>

            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- third party js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>