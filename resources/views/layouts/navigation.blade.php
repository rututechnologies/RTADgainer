<nav class="navbar-default navbar-static-side" role="navigation" style="background: #075f98" >
    <div class="sidebar-collapse" id="Menu">
        <ul class="nav metismenu" id="side-menu">   
            <li class="nav-header" style="background: #ffffff !important;height: 10vh;
                padding-top: 14px;
                padding-bottom: 50px;">
                <div class="dropdown profile-element">
                    <span id="hospital_img_small">
                        <!--<?php $user = Auth::user()->name;?>-->
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
            <li class="{{ isActiveNav('dashboard') }}">
                <a href="{{ url('/dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="{{ isActiveNav(['navigationList', 'usersList', 'userAccountsMgmt']) }}">
                <a href="">
                    <i class="fa fa-check-square-o"></i> 
                    <span class="nav-label">Admin Panel</span> 
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse {{ isActiveNav(['navigationList', 'usersList', 'userAccountsMgmt'], 'in') }}">
                    <li class="{{ isActiveNav(' navigationList') }}">
                        <a href="{{ url('/navigationList/')}}">
                            <i class="fa fa-location-arrow"></i>Navigation Links
                        </a>
                    </li>
                    <li class="{{ isActiveNav(' usersList') }}">
                        <a href="{{ url('/usersList/')}}">
                            <i class="fa fa-users"></i>Managing Users
                        </a>
                    </li>
                    <li class="{{ isActiveNav(' userAccountsMgmt') }}">
                        <a href="{{ url('/userAccountsMgmt/')}}">
                            <i class="fa fa-list"></i>Managing User Accounts
                        </a>
                    </li>
                    <li class="{{ isActiveNav(' Translation') }}">
                        <a href="{{ url('/Translation/')}}">
                            <i class="fa fa-list"></i>Translation
                        </a>
                    </li>


                </ul>
            </li>

            <li class="{{ isActiveNav(['trafficEstimator', 'documentsList']) }}">
                <a href="">
                    <i class="fa fa-inr"></i> 
                    <span class="nav-label">Sales</span> 
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse {{ isActiveNav(['trafficEstimator', 'documentsList'], 'in') }}">
                    <li class="{{ isActiveNav(' trafficEstimator') }}">
                        <a href="{{ url('/trafficEstimator/')}}">
                            <i class="fa fa-arrow"></i>Adwards Traffic Estimator
                        </a>
                    </li>
                    <li class="{{ isActiveNav(' documentsList') }}">
                        <a href="{{ url('/documentsList/')}}">
                            <i class="fa fa-users"></i>Documents
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ isActiveNav('accounting') }}">
                <a href="{{ url('/accounting') }}">
                    <i class="fa fa-money"></i> <span class="nav-label">Accounting</span>
                </a>
            </li>
            <li class="{{ isActiveNav('campaign') }}">
                <a href="{{ url('/campaign') }}">
                    <i class="fa fa-dashboard"></i> <span class="nav-label">Campaign Tools</span>
                </a>
            </li>s
<!--            <li class="{{ isActiveNav('accountsList') }}">
                <a href="{{ url('/accountsList') }}">
                    <i class="fa fa-lock"></i> <span class="nav-label">Accounts</span>
                </a>
            </li>-->
            <li class="{{ isActiveNav('accounts') }}">
                <a href="{{ url('/app/accounts') }}">
                    <i class="fa fa-users"></i> <span class="nav-label">Accounts</span>
                </a>
            </li>
            <li class="{{ isActiveNav('report1') }}">
                <a href="{{ url('/report1') }}">
                    <i class="fa fa-file"></i> <span class="nav-label">Reports</span>
                </a>
            </li>
            <li class="{{ isActiveNav('mycampagin1') }}">
                <a href="{{ url('/mycampagin1') }}">
                    <i class="fa fa-dashboard"></i> <span class="nav-label">My Campaign</span>
                </a>
            </li>
           
            <li class="{{ isActiveNav('autoissue') }}">
                <a href="{{ url('/autoissue') }}">
                    <i class="fa fa-phone"></i> <span class="nav-label">Autoissue</span>
                </a>
            </li>

            <li class="{{ isActiveNav('agencyd') }}">
                <a href="{{ url('/agencyd') }}">
                    <i class="fa fa-user-secret"></i> <span class="nav-label">Agency</span>
                </a>
            </li>


        </ul>
    </div>
</nav>