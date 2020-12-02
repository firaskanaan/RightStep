<!-- header -->
@include('dashboard.includes.header')
<!-- /header -->
<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('dashboard.includes.sidebar')
        <!-- /Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar (nav) -->
                @include('dashboard.includes.nav')
                <!-- /Topbar (nav) -->
                <!-- Container Fluid-->
                @yield('content')
                <!-- /Container Fluid-->
                <!-- Modal -->
                @include('dashboard.includes.modal')
                <!-- /Modal -->
            </div>
            <!-- Footer -->
            @include('dashboard.includes.footer')
            <!-- /Footer -->
        </div>
    </div>
    <!-- Footer Js + Scroll to top -->
    @include('dashboard.includes.footerJs')
    <!-- /Footer Js + Scroll to top -->
</body>







