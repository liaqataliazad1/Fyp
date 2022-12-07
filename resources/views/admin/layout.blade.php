<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Inventory Managment System</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('admin_assets/css/font-face.css')  }}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')  }}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')  }}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')  }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')  }}" rel="stylesheet" media="all">

    

    <!-- Main CSS-->
    <link href="{{asset('admin_assets/css/theme.css')  }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
   
    
    <div class="page-wrapper">
      

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/dashboard">
                    <img src="{{asset('admin_assets/images/icon/logo2.png')}}" alt="Inventory management" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a href="{{ url('dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        
                        <!-- inventroy dropdown menue -->

                        <div class="dropdown">
                            <button class="btn btn-primary bg-transparent dropdown-toggle text-dark" type="button" data-toggle="dropdown">Inventory
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu text-center">
                              <li class="has-sub border">
                                <a href="{{ url('addinventory') }}">
                                    <i class="fas fa-plus"></i>Add Inventory</a>
                                    <li class="has-sub">
                                      <a href="{{ url('inventory') }}">
                                          <i class="fas fa-eye"></i>Show Inventory</a>
                                     
                                  </li>
                                  
          
                                  <li class="has-sub border">
                                      <a href="{{ url('remove.inventory') }}">
                                          <i class="fas fa-minus"></i>Remove Inventory</a>
                                     
                                  </li>
          
                                  <li class="has-sub border">
                                      <a href="{{ url('adjust.inventory') }}">
                                          <i class="fas fa-pencil-square "></i>Adjust Inventory</a>
                                     
                                  </li>
                               
                            </li>
                              
                            </ul>
                          </div>

                 
                          <div class="dropdown mt-2">
                            <button class="btn btn-primary bg-transparent hover:bg-blue-500
                            hover:text-white dropdown-toggle text-dark" type="button" data-toggle="dropdown">Departments
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu text-center">
                              <li class="border"><a href="{{  url('departments/create') }}">Add Department</a></li>
                              <li><a href="{{  url('departments') }}">Show Departments</a></li>
                            </ul>
                          </div>

                        <!--  end of dropdown -->

                        <!-- Department dropdown menue -->

                        <div class="dropdown mt-2">
                            <button class="btn btn-primary bg-transparent hover:bg-blue-500
                            hover:text-white dropdown-toggle text-dark" type="button" data-toggle="dropdown">expired Inventory List
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu text-center">
                                <li class="has-sub border">
                                    <a href="{{ url('expired_inventory') }}">
                                        <i class="fas fa-eye"></i>expired Inventory</a>
                                   
                                </li>
                            </ul>
                          </div>
                         

                        <!-- end of dropdown -->

                            <!--Rooms -->
                                
                            {{-- <div class="dropdown mt-2">
                              <button class="btn btn-primary dropdown-toggle text-dark" type="button" data-toggle="dropdown">Rooms
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu text-center">
                                <li class="border"><a href="{{  url('departments/create') }}">Add room</a></li>
                                <li><a href="#">Show Rooms</a></li>
                              </ul>
                            </div> --}}
                            <!----- end of rooms ----- --> 
            

              
              
                                
                            </nav>
                        </div>
                    </aside>
                    <!-- END MENU SIDEBAR-->

                    <!-- PAGE CONTAINER-->
                    <div class="page-container">
                        <!-- HEADER DESKTOP-->
                        <header class="header-desktop">
                            <div class="section__content section__content--p30">
                                <div class="container-fluid">
                                    <div class="header-wrap">
                                        <form class="form-header" action="" method="POST">
                                        
                                        </form>
                                        <div class="header-button">
                                            <div class="noti-wrap">
                                              
                                                
                                                
                                            </div>
                                            
                                            <li class="nav-item">
                                              
                                
                                                    
                                                    
                                                    
                                                          
                                                        
                                                
                                              </li>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        
                        <!-- END HEADER DESKTOP-->

                        <!-- MAIN CONTENT-->
                        <div class="main-content">
                            <div class="section__content section__content--p30">
                                <div class="container-fluid">
                                    @section('container')
                                    @show 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTAINER-->

                </div>
              
                <script src="{{asset('admin_assets/vendor/jquery-3.2.1.min.js')  }}"></script>
                <script src="{{asset('admin_assets/vendor/bootstrap-4.1/popper.min.js')  }}"></script>
                <script src="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js')  }}"></script>
                <script src="{{asset('admin_assets/vendor/wow/wow.min.js') }}"></script>
                <script src="{{asset('admin_assets/js/main.js')  }}"></script>

            </body>

            </html>
            <!-- end document-->