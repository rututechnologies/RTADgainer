<nav class="navbar-default navbar-static-side" role="navigation" style="background: #075f98" >
    <div class="sidebar-collapse" id="Menu">
        <ul class="nav metismenu" id="side-menu">   
            <li class="nav-header" style="background: #ffffff !important;    height: 10vh;
    padding-top: 14px;
    padding-bottom: 50px;">
                <div class="dropdown profile-element">
                            <span id="hospital_img_small">
                               <?php $user = Auth::user()->name; ?>
                                    <img src="{{asset('images/logo.jpg')}}"
                                         class="user-image img-rounded
                                         center-block" alt="User Image"
                                         id="">
                            </span>
                </div>
                <div class="logo-element">
                    AD
                </div>
            </li>
            <li class="{{ isActiveRoute('Dashboard') }}">
                <a href="{{ url('/dashboard') }}"><i class="fa
                fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href=""><i class="fa fa-check-square-o"></i> <span
                            class="nav-label">Admin Panel</span> <span class="fa
                            arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li class="{{ isActiveRoute(' NavigationList') }}"><a
                                href="{{ url('/navigationList/')}}"><i
                                    class="fa fa-location-arrow"></i>Navigation Links</a>
                    </li>
                    <li class="{{ isActiveRoute(' UsersList') }}"><a
                                href="{{ url('/usersList/')}}"><i
                                    class="fa fa-users"></i>Managing Users</a>
                    </li>
                     <li class="{{ isActiveRoute(' UserAccounts') }}"><a
                                href="{{ url('/userAccountsMgmt/')}}"><i
                                    class="fa fa-list"></i>Managing User Accounts</a>
                    </li>
                     <li class="{{ isActiveRoute(' UserAccounts') }}"><a
                                href="{{ url('/Translation/')}}"><i
                                    class="fa fa-list"></i>Translation</a>
                    </li>

                    
                </ul>
            </li>
            <li class="{{ isActiveRoute('Center') }}">
                <a href="{{ url('/abc') }}"><i class="fa
                fa-dashboard"></i> <span class="nav-label">Center</span></a>
            </li>
            <li>
                <a href=""><i class="fa fa-inr"></i> <span
                            class="nav-label">Sales</span> <span class="fa
                            arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li class="{{ isActiveRoute(' TrafficEstimator') }}"><a
                                href="{{ url('/trafficEstimator/')}}"><i
                                    class="fa fa-arrow"></i>Adwards Traffic Estimator</a>
                    </li>
                    <li class="{{ isActiveRoute(' Documents') }}"><a
                                href="{{ url('/documentsList/')}}"><i
                                    class="fa fa-users"></i>Documents</a>
                    </li>
                </ul>
            </li>
             <li class="{{ isActiveRoute('Accounting') }}">
                <a href="{{ url('/accounting') }}"><i class="fa
                fa-money"></i> <span class="nav-label">Accounting</span></a>
            </li>
            <li class="{{ isActiveRoute('CampaignList') }}">
                <a href="{{ url('/Campaigntools') }}"><i class="fa
                fa-dashboard"></i> <span class="nav-label">Campaign Tools</span></a>
            </li>s
            <li class="{{ isActiveRoute('Accounts') }}">
                <a href="{{ url('/accountsList') }}"><i class="fa
                fa-lock"></i> <span class="nav-label">Accounts</span></a>
            </li>
            <li class="{{ isActiveRoute('Reports') }}">
                <a href="{{ url('/center') }}"><i class="fa
                fa-file"></i> <span class="nav-label">Reports</span></a>
            </li>
            <li class="{{ isActiveRoute('MyCampaign') }}">
                <a href="{{ url('/mycampiagn') }}"><i class="fa
                fa-dashboard"></i> <span class="nav-label">My Campaign</span></a>
            </li>
            <li class="{{ isActiveRoute('MessageCenter') }}">
                <a href="{{ url('/message') }}"><i class="fa
                fa-commenting"></i> <span class="nav-label">Message Center</span></a>
            </li>
            <li class="{{ isActiveRoute('Autoissue') }}">
                <a href="{{ url('/autoissue') }}">
                    <i class="fa fa-phone"></i> <span class="nav-label">Autoissue</span>
                </a>
            </li>
            <li class="{{ isActiveRoute('PPCManagement') }}">
                <a href="{{ url('/center') }}"><i class="fa
                fa-dashboard"></i> <span class="nav-label">PPC Management</span></a>
            </li>
            <li class="{{ isActiveRoute('Agency') }}">
                <a href="{{ url('/agencyd') }}"><i class="fa
                fa-user-secret"></i> <span class="nav-label">Agency</span></a>
            </li>
            <li class="{{ isActiveRoute('japanese') }}">
                <a href="{{ url('/japanese') }}"><i class="fa
                fa-dashboard"></i> <span class="nav-label">電話転送先設定</span></a>
            </li>

        </ul>
    </div>
</nav>
