<!DOCTYPE html>
<html lang="en">

<head> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sewa Kamera</title>

   @include('includes.styles')

</head>

<body id="page-top">

    <!-- Page Wrapper/Pembungkus Halaman -->
    <div id="wrapper">

        <!-- Sidebar/bilah sisi -->
        @include('includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper /isi hal -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content/isi utama -->
            <div id="content">

                <!-- Topbar -->
                @include('includes.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content/isi hal awal  -->
                <div class="container-fluid">

                    <!-- Page Heading/judul halaman -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('includes.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


   @include('includes.scripts')

</body>

</html>