@include('fixed.admin.head')
<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('fixed.admin.nav')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        @include('fixed.admin.header')
        <!--  Header End -->
        <div class="container-fluid">
            @yield('content')
            @include('fixed.admin.footer')
        </div>
    </div>
</div>

@yield('script')

<script src="https://kit.fontawesome.com/231b95a13a.js" crossorigin="anonymous"></script>
<script src="../assets/js/admin/jquery.min.js"></script>
<script src="../assets/js/admin/bootstrap.bundle.min.js"></script>
<script src="../assets/js/admin/sidebarmenu.js"></script>
<script src="../assets/js/admin/app.min.js"></script>
<script src="../assets/js/admin/simplebar.js"></script>
<script src="../assets/js/admin/dashboard.js"></script>
</body>
</html>
