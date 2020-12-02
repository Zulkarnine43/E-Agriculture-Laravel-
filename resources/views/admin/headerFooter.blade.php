<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('public/final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/final_eagri/vendor/bootstrap/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="" rel="stylesheet">
    <link href="{{url('public/final_eagri/css/simple-sidebar.css')}}" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right text-center mt-5" id="sidebar-wrapper">
        <h3 class="sidebar-heading">E-Agriculture</h3>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>

           <!--  <div class="dropdown">
                <a class=" dropdown-toggle list-group-item list-group-item-action bg-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    News
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Add News</a>
                    <a class="dropdown-item" href="">Manage News</a>
                </div>
            </div>


            <div class="dropdown">
                <a class=" dropdown-toggle list-group-item list-group-item-action bg-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Comments
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Manage Comments</a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
            <button class="btn btn-primary" id="menu-toggle"> DashboardMenu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('a_home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Users
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark " aria-labelledby="navbarDropdown">
                           <a class="dropdown-item text-light" href="{{route('all_farmer')}}">Farmers</a>
                            <a class="dropdown-item text-light" href="{{route('all_customer')}}">Customer</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Crops
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item text-light" target="_blank" href="{{route('home')}}">Collection_crops</a>
                            <a class="dropdown-item text-light" href="{{route('verified_crops')}}">Approved crops</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-light" href="{{route('Unverified_crops')}}">UnApproved crops</a>
                             <a class="dropdown-item text-light" href="{{route('deleted_crops')}}">Deleted crops</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            News
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item text-light" href="{{route('add_news')}}">Add News</a>
                            <a class="dropdown-item text-light" href="{{route('manage_news')}}">Manage News</a>
                        </div>
                    </li>

                     <li class="nav-item active">
                        <a class="nav-link" href="{{route('manage_Comments')}}">Manage messages<span class="sr-only">(current)</span></a>
                       </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                            <i class="fa fa-user" style="font-size: 28px;">{{Session::get('a_username')}}</i>
                        </a>
                        <div class="dropdown-menu nav-item bg-dark" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item text-light" href="{{route('a_profile')}}">profile</a>
                            <a class="dropdown-item text-light" href="{{route('logout',['name'=>'a_username'])}}">logout</a>
                        </div>
                    </li>


                </ul>
                <form class="form-inline my-2 my-lg-0 mr-4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0 text-dark" type="submit">
                        <i class="fa fa-search">search</i>
                    </button>
                </form>
            </div>
        </nav>

        <div class="container-fluid">
         @yield('body')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->





<!-- Top  -->
<div>
    <a class="btn btn-warning float-right" href="#top">Top</a>
</div>
<div class="clearfix"></div>

<!-- Footer -->
<footer class="py-5 bg-dark">

    <div class="row nav text-light mx-auto">
        <div class="col-lg-3">
            <h2 class="text-center">Our website</h2>
            <h5 class=" text-left text-justify" style="font-size: 20px" >At e_agriculture,
                Innovation and simplicity makes us happy: our goal is to remove any technical or financial
                barriers that can prevent crops sell and buy. We're excited to
                help you on your journey!?</h5>
        </div>

        <div class="col-lg-3">
            <h2 class="text-center">Quick Menu</h2>
            <li class="nav-item"><a class="nav-link text-center" href="">Home</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">About</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">Services</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">Message Us</a></li>
        </div>



        <div class="col-lg-3 text-left">
            <h2 class="text-center">News</h2>
            <li class="nav-item"><a class="nav-link text-center" href="">kharif crop</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">rabi crop</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">zerind crop</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">Guest Post</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">Live Support</a></li>
        </div>



        <div class="col-lg-3 text-center">
            <h2 class="">Social Links</h2>
            <li class="nav-item" style="font-size: 22px">
                <a class="fa fa-facebook" href=""></a>
                <a class="fa fa-instagram ml-2" href=""></a>
                <a class="fa fa-youtube ml-2" href=""></a>
                <a class="fa fa-github ml-2" href=""></a>
            </li>

        </div>
    </div>

    <p class="m-0 text-center text-white">Copyright &copy; E_agriculture 2020</p>

</footer>


<!-- Bootstrap core JavaScript -->
<script src="{{url('public/final_eagri/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('public/final_eagri/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function() {
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>







