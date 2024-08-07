<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Snoobix4') }}</title> -->
	<title>SNOOBIX 4</title>

   
    <link href="{{ url('/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ url('/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.5.0/css/rowReorder.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css">
    
    <script src="{{ url('/assets/ckeditor4/ckeditor.js') }}"></script>

    @php
        date_default_timezone_set("Africa/Johannesburg");   //India time (GMT+5:30)
        //echo date('d-m-Y H:i:s');
    @endphp

	
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/NicEdit/0.93/nicEdit.min.js"></script>
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
	 <script src="{{ url('/assets/designer/mozila_dragndrop_script.js') }}"></script>
	
    <script>
    
   
	</script>
	
</head>
<body>
<div id="layout-wrapper">
            @auth
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ url('/assets/images/logo-sm.png') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ url('/assets/images/logo-dark.png') }}" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ url('/assets/images/logo-sm.png') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ url('/assets/images/logo-light.png') }}" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    </div>

                    <div class="d-flex">


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               
                                <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">
                                
                                    @auth
                                        {{ Auth::user()->name }}
                                    @else
                                        Guest
                                    @endauth
                                
                                </span>
                                <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                               
                                <a class="dropdown-item" href="{{route('backend.logout')}}" ><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                               
                            </div>
                        </div>


                        <script>
                            function exec_logout(){
                                $('#frmLogout').submit();    
                            }
                        </script>


                        <form id="frmLogout" name="frmLogout" method="POST" action="{{ route('backend.logout') }}">
                            @csrf
                            
                        </form>
            
                    </div>
                </div>
            </header>
          
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ url('/assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ url('/assets/images/logo-dark.png') }}" alt="" height="20">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ url('/assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ url('/assets/images/logo-light.png') }}" alt="" height="20">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu"> 
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <!-- <li class="menu-title">Menu</li> -->
                            <li>
                                <a href="home">
                                    <i class="uil-home-alt"></i>
                                    <!-- <span class="badge rounded-pill bg-primary float-end">01</span> -->
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            
                            @php 
                                echo display_menu();
                            @endphp 


                           


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <div class="main-content">
            @endauth
           

    <div id="app">
       
        <main class="py-4">
            @yield('content')
        </main>
    </div>

                @auth
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Snoobix.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                     Developed by <a href="https://thetatech.org/" target="_blank" class="text-reset">Theta Technologies (Pvt) Ltd.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                @endauth
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">

                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Item Properties</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto" title="cancle / close">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>

                </div>

                <div id="right_bar_item_properties" style="margin-left:15px;margin-right:10px;">
                    <p>display properties here</p>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ url('/assets/libs/jquery/jquery.min.js') }}"></script>
       
        <script src="{{ url('/assets/libs/bootstrap/js/popper.min.js') }}"  crossorigin="anonymous"></script>
        <script src="{{ url('/assets/libs/bootstrap/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ url('/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ url('/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ url('/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ url('/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ url('/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>

        <script src="{{ url('/assets/libs/select2/js/select2.min.js') }}"></script>
        <!-- apexcharts -->
        <script src="{{ url('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="{{ url('/assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ url('/assets/js/app.js') }}"></script>
        <script src="{{ url('/assets/js/pages/modal.init.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('.select2').select2({
                    tags: true,
                    tokenSeparators: [',', ' ']
                });
            });
        </script>
        <!-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> -->
        <script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/dataTables.rowReorder.js"></script>
        <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/rowReorder.dataTables.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>

        <script>
            $(document).ready(function() {
                $('.datatable').DataTable({
                    responsive: true,
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    }
                });
            });
        </script>

</body>
</html>
