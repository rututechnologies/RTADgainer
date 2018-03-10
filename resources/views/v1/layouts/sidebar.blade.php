    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        {{--<div class="user-panel">--}}
            {{--<div class="pull-left image">--}}
                {{--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
            {{--</div>--}}
            {{--<div class="pull-left info">--}}
                {{----}}
                {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control search-menu-box" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
    </form>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
          <li class="treeview">
            <a href="{{url('/dashboard')}}">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
              </span>
            </a>

          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-check-square-o"></i> <span>Inventory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/operatorConsole') }}"><i class="fa fa-user"></i> Operator</a></li>
            <li>
              <a href="{{ url('/ambulanceList/'.Auth::id())}}"><i class="fa fa-ambulance"></i> Ambulance </a>
             <!--  <ul class="treeview-menu">
                <li>
                  <a href="{{ url('/ambulanceList/'.Auth::id())}}"><i class="fa fa-list-alt"></i> View Ambulance
                  </a>
                </li>
                <li>
                  <a href="{{ url('/addAmbulanceForm') }}"><i class="fa fa-plus-square"></i> Add Ambulance
                  </a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="{{ url('/driverList/'.Auth::id()) }}"><i class="fa fa-support"></i> Driver</a>
          
            </li>
          </ul>
        </li>

        {{--<li class="treeview">--}}
          {{--<a href="{{url('/fleet')}}">--}}
            {{--<i class="fa fa-bar-chart"></i> <span>Fleet</span>--}}
          {{--</a>--}}
        {{--</li>--}}
        <li class="treeview">
          <a href="{{url('/emergencyTripList')}}">
            <i class="fa fa-database"></i> <span>Emergency Attended</span>
          </a>
        </li>
        {{--<li class="treeview">--}}
          {{--<a href="{{url('/show-third-parties')}}">--}}
            {{--<i class="fa  fa-text-width"></i> <span>Third Parties</span>--}}
          {{--</a>--}}
        {{--</li>--}}
        {{--<li class="treeview">--}}
          {{--<a href="#">--}}
            {{--<i class="fa fa-comments"></i> <span>Chat</span>--}}
            {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
          {{--</a>--}}
          {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{ url('/hospitalChat') }}"><i class="fa fa-hospital-o"></i>Hospital</a></li>--}}
            {{--<li><a href="{{ url('/patientChat') }}"><i class="fa fa-wheelchair"></i>Patient</a></li>--}}
          {{--</ul>--}}
        {{--</li>--}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span> Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/profile')}}"><i class="fa fa-user"></i><span> Profile</span></a></li>
            <li><a href="{{url('/Change-Password')}}"><i class="fa fa-key"></i><span> Change Password</span></a></li>

          </ul>
        </li>
      </ul>
    </section>


        <!-- /.sidebar -->