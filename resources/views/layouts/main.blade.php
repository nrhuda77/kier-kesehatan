<!DOCTYPE html>

<!-- =========================================================
   * Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
   ==============================================================

   * Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
   * Created by: ThemeSelection
   * License: You must have a valid license purchased in order to legally use the theme for your project.
   * Copyright ThemeSelection (https://themeselection.com)

   =========================================================
-->
<!-- beautify ignore:start -->
<html
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="../../assets/" 
 data-template="vertical-menu-template-free"
>
<head>
   <meta charset="utf-8" />
   <meta
   name="viewport"
   content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
   />

   <title>Admin</title>

   <meta name="description" content="" />

   <!-- Favicon -->
   {{-- <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon/favicon.ico') }}" /> --}}

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link
   href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
   rel="stylesheet"
   />

   <!-- Icons. Uncomment required icon fonts -->
   <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />

   <!-- Core CSS -->
   <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
   <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
   <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
   <link rel="stylesheet" href="{{ asset('admin/assets/datatable/datatables.css') }}" />

   <!-- Vendors CSS -->
   <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

   <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
   <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

   <!-- Page CSS -->

   <!-- Helpers -->
   <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>

   <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
       <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
       <script src="{{ asset('admin/assets/js/config.js') }}"></script>

       <style>
           /* .menu .app-brand.demo{
               justify-content: center;
               align-items: center;
               display: flex;
           } */
           #datatable_list{
               width: 100% !important;
           }
           .nav-item.d-flex.align-items-center{
               font-size: 18px;
               font-weight: 600;
           }

           .center-maps{
               display: flex;
               justify-content: center;
           }

           .tag-maps:hover{
               transform: scale(1.050);
           }
           .tag-maps {
               transition: all 1s;
               transform-origin: 50% 50%;
           }


           @media screen and (max-width: 600px) {
               .svg-maps {
                   width: 3in;
               }
           }
           thead, tbody, tfoot, tr, td, th {
               background-color: white !important;
           }
           .page-link {
               /* border-color: #d9dee3; */
               height: 35px;
               display: flex;
               justify-content: center;
               align-items: center;
           }



       </style>


   </head>

   <body>
       <!-- Layout wrapper -->
       <div class="layout-wrapper layout-content-navbar">
           <div class="layout-container">

            @include('layouts.sidebar')

       <!-- Layout container -->
       <div class="layout-page">
           <!-- Navbar -->

          @include('layouts.navbar')

       <!-- Content wrapper -->
       <div class="content-wrapper">
           <!-- Content -->

           <div class="container-xxl flex-grow-1 container-p-y">
               <div class="row">
                   <div class="col-lg-12 mb-4 order-0">
                       <div class="card">
                           <div class="d-flex align-items-end ">
                            <div class="table-responsive">
                               <div class="card-body">
                                   <div class="row">
                                   
                                       <div class="col-7">
                                           <h2 class="text-success">Admin Dinas Kesehatan</h2>
                                       </div>

                                    @yield('container')
                               </div>
                            </div>
                           </div>
                       </div>

                       <!-- </div>
                           <div class="row"> -->


                               <div class="content-backdrop fade"></div>
                           </div>
                           <!-- Content wrapper -->
                       </div>
                       <!-- / Layout page -->
                   </div>

                   <!-- Overlay -->
                   <div class="layout-overlay layout-menu-toggle"></div>
               </div>
               <!-- / Layout wrapper -->


               <!-- Modal List-->
               <div class="modal fade" id="exampleModalList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog modal-xl">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                               <table id="datatable_list" class="table">
                                   <thead>
                                       <tr>
                                           <th>no</th>
                                           <th>nama</th>
                                           <th>deskripsi</th>
                                           <th>gambbar</th>
                                           <th>action</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>1</td>
                                           <td>fadli</td>
                                           <td>tes123</td>
                                           <td>TES</td>
                                           <td>fadli</td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>


               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog modal-xl">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                               <div class="row">
                                   <div class="col-lg-6">
                                       <div class="mb-3 row">
                                           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                           <div class="col-sm-9">
                                               <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                           <div class="col-sm-9">
                                               <input type="password" class="form-control" id="inputPassword">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                           <div class="col-sm-9">
                                               <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                           <div class="col-sm-9">
                                               <input type="password" class="form-control" id="inputPassword">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                           <div class="col-sm-9">
                                               <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                           <div class="col-sm-9">
                                               <input type="password" class="form-control" id="inputPassword">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                           <div class="col-sm-9">
                                               <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                           <div class="col-sm-9">
                                               <input type="password" class="form-control" id="inputPassword">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                           <div class="col-sm-9">
                                               <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                           <div class="col-sm-9">
                                               <input type="password" class="form-control" id="inputPassword">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-6">
                                       <div class="mb-3 row">
                                           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                           <div class="col-sm-9">
                                               <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                           <div class="col-sm-9">
                                               <input type="password" class="form-control" id="inputPassword">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                           <div class="col-sm-9">
                                               <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                           <div class="col-sm-9">
                                               <input type="password" class="form-control" id="inputPassword">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                           <div class="col-sm-9">
                                               <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                           <div class="col-sm-9">
                                               <input type="password" class="form-control" id="inputPassword">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                           <div class="col-sm-9">
                                               <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                                           </div>
                                       </div>
                                       <div class="mb-3 row">
                                           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                           <div class="col-sm-9">
                                               <textarea name="" id="" cols="30" class="form-control" rows="6"></textarea>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                               <button type="button" class="btn btn-primary">Save changes</button>
                           </div>
                       </div>
                   </div>
               </div>



               <!-- Core JS -->
               <!-- build:js assets/vendor/js/core.js -->
               <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
               <script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
               <script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
               <script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>



               <script>$(document).ready(function(){
                   $('[data-toggle="tooltip"]').tooltip();
               });</script>

               <script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
               <!-- endbuild -->

               <!-- Vendors JS -->
               <script src="{{ asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

               <!-- Main JS -->
               <script src="{{ asset('admin/assets/js/main.js') }}"></script>


               <!-- datatables -->
               <!-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> -->
               <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>

               <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
               <!-- Page JS -->
               <script src="{{ asset('admin/assets/js/dashboards-analytics.js') }}"></script>

               <!-- Place this tag in your head or just before your close body tag. -->
               <script async defer src="https://buttons.github.io/buttons.js"></script>
               <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
               <!-- custom JS -->
               @yield('script')
               <script>
                   $(document).ready(function () {
                       // Setup - add a text input to each footer cell
                       $('#datatables thead tr')
                       .clone(true)
                       .addClass('filters')
                       .appendTo('#datatables thead');

                       var table = $('#datatables').DataTable({
                           orderCellsTop: true,
                           fixedHeader: true,
                           initComplete: function () {
                               var api = this.api();

                               // For each column
                               api
                               .columns()
                               .eq(0)
                               .each(function (colIdx) {
                                   // Set the header cell to contain the input element
                                   var cell = $('.filters th').eq(
                                   $(api.column(colIdx).header()).index()
                                   );
                                   var title = $(cell).text();
                                   $(cell).html('<input type="text" class="form-control" placeholder="' + title + '" />');

                                   // On every keypress in this input
                                   $(
                                   'input',
                                   $('.filters th').eq($(api.column(colIdx).header()).index())
                                   )
                                   .off('keyup change')
                                   .on('change', function (e) {
                                       // Get the search value
                                       $(this).attr('title', $(this).val());
                                       var regexr = '({search})'; //$(this).parents('th').find('select').val();

                                       var cursorPosition = this.selectionStart;
                                       // Search the column for that value
                                       api
                                       .column(colIdx)
                                       .search(
                                       this.value != ''
                                       ? regexr.replace('{search}', '(((' + this.value + ')))')
                                       : '',
                                       this.value != '',
                                       this.value == ''
                                       )
                                       .draw();
                                   })
                                   .on('keyup', function (e) {
                                       e.stopPropagation();

                                       $(this).trigger('change');
                                       $(this)
                                       .focus()[0]
                                       .setSelectionRange(cursorPosition, cursorPosition);
                                   });
                               });
                           },
                       });

                       $('#datatable_list thead tr')
                       .clone(true)
                       .addClass('filters_list')
                       .appendTo('#datatable_list thead');

                       var table = $('#datatable_list').DataTable({
                           orderCellsTop: true,
                           fixedHeader: true,
                           initComplete: function () {
                               var api = this.api();

                               // For each column
                               api
                               .columns()
                               .eq(0)
                               .each(function (colIdx) {
                                   // Set the header cell to contain the input element
                                   var cell = $('.filters_list th').eq(
                                   $(api.column(colIdx).header()).index()
                                   );
                                   var title = $(cell).text();
                                   $(cell).html('<input type="text" class="form-control" placeholder="' + title + '" />');

                                   // On every keypress in this input
                                   $(
                                   'input',
                                   $('.filters_list th').eq($(api.column(colIdx).header()).index())
                                   )
                                   .off('keyup change')
                                   .on('change', function (e) {
                                       // Get the search value
                                       $(this).attr('title', $(this).val());
                                       var regexr = '({search})'; //$(this).parents('th').find('select').val();

                                       var cursorPosition = this.selectionStart;
                                       // Search the column for that value
                                       api
                                       .column(colIdx)
                                       .search(
                                       this.value != ''
                                       ? regexr.replace('{search}', '(((' + this.value + ')))')
                                       : '',
                                       this.value != '',
                                       this.value == ''
                                       )
                                       .draw();
                                   })
                                   .on('keyup', function (e) {
                                       e.stopPropagation();

                                       $(this).trigger('change');
                                       $(this)
                                       .focus()[0]
                                       .setSelectionRange(cursorPosition, cursorPosition);
                                   });
                               });
                           },
                       });
                   });
               </script>

           </body>
           </html>


























{{--
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Povider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <!-- Custom fonts for this template -->
     <link href="{{ asset ('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">

     <!-- Custom styles for this template -->
     <link href="{{ asset('template/css/sb-admin/assets-2.min.css') }}" rel="stylesheet">

     <!-- Custom styles for this page -->
     <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

     <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">



</head>
  <body>
    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
           @include('layouts.sidebar')
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    @include('layouts.navbar')
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container">
                        @yield('container')



                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://kit.fontawesome.com/879083b67d.js" crossorigin="anonymous"></script>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>
        <script src="js/image.js"></script>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
</body>
</html> --}}
