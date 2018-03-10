<!-- <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse" id="Menu">
     
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <div id="hospital_img_small">
                        <img src="{{ asset('images/logo.jpg')}}"
                             height="55px !important" width="800px !important"
                             style="background-color: white;"/>
                    </div>
                </div>
                <div class="logo-element">AD</div>
            </li>
            {{--Hospital menus--}}
            <li class="{{ isActiveRoute('Dashboard') }}">
                <a href="{{ url('/dashboard') }}"><i
                            class="fa fa-dashboard"></i> <span
                            class="nav-label">Dashboard</span></a>
            </li>
            <li class="{{ areActiveRoutes(['Operator', 'Ambulance', 'Driver'])}}">
                <a href="#"><i class="fa fa-check-square-o"></i> <span
                            class="nav-label">Inventory</span> <span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ isActiveRoute('Operator') }}"><a
                                href="{{ url('/Operator') }}"><i
                                    class="fa fa-user"></i> Operator</a></li>
                    <li class="{{ isActiveRoute('Ambulance') }}"><a
                                href="{{ url('/Ambulance')}}"><i
                                    class="fa fa-ambulance"></i>Ambulance</a>
                    </li>
                    <li class="{{ isActiveRoute('Driver') }}"><a
                                href="{{ url('/Driver') }}"><i
                                    class="fa fa-support"></i>Driver</a></li>
                </ul>
            </li>
            <li class="{{ areActiveRoutes(['EmergencyTripList', 'Enquiry']) }}">
                <a href="#"><i class="fa fa-bell-o"></i> <span
                            class="nav-label">Emergencies</span> <span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ isActiveRoute('EmergencyTripList') }}"><a
                                href="{{ url('/emergencyTripList/')}}"><i
                                    class="fa fa-ambulance"></i>From
                            Ambulance.run</a></li>
                    <li class="{{ isActiveRoute('Enquiry') }}"><a
                                href="{{ url('/Enquiry/') }}"><i
                                    class="fa fa-support"></i>From Others</a>
                    </li>
                </ul>
            </li>
            {{--NHM menus--}}
            <li class="{{ isActiveRoute('Log') }}">
                <a href="{{ url('/Expense') }}"><i class="fa fa-money"
                                                   aria-hidden="true"></i> <span
                            class="nav-label">Expense Log</span> </a>
            </li>
            <li class="{{ areActiveRoutes(['Profile', 'ChangePassword']) }}">
                <a href="#"><i class="fa fa-cogs"></i> <span
                            class="nav-label">Settings</span> <span class="fa
                            arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ isActiveRoute('Profile') }}"><a href="{{ url
                    ('/Profile/')
                    }}"><i class="fa fa-user"></i>Profile</a></li>
                    <li class="{{ isActiveRoute('ChangePassword') }}"><a href="{{ url('/Change-Password')
                    }}"><i class="fa fa-key"></i>Change Password</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav> -->


<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong>
                             </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{url('/logout')}}">Logout</a></li>
                            </ul>
                    </div>
                    <div class="logo-element">
                        AD
                    </div>
                </li>
                <li class="active">
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">User Panel</span></a>
                </li>
                <li>
                    <a href="minor.html"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                 <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i> {{Auth::user()->name}}
                        </a>
                    </li>
                </ul> 

            </nav>
        </div>
        <div class="wrapper pwrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center m-t-lg">
                        <h1>
                            Welcome in INSPINIA Static SeedProject
                        </h1>
                        <small>
                            It is an application skeleton for a typical web app. You can use it to quickly bootstrap your webapp projects and dev environment for these projects.
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

    </div>
</div>