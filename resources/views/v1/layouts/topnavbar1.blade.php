<div class="row border-bottom">
    <nav class="navbar navbar-fixed-top" role="navigation"
         style="margin-bottom: 0;    background: #2F4050 !important;">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn"
               style="background-color: #dd4b39 !important;color: #fff;"><i
                        class="fa fa-bars"></i> </a>
        </div>
        <?php
        if (count($hospital = Auth::user()->hospital))
            $hospital_name = $hospital->hospital_name;
        else
            $hospital_name = Auth::user()->name;
        ?>
        <ul >
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
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a class="btn-flat right-sidebar2-toggle"
                   style="color: white;">
                    <i class="fa fa-ambulance"></i>
                </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown"
                   href="#">
                    <i class="fa fa-envelope"></i> <span
                            class="label label-warning">16</span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="" class="pull-left">
                                <img alt="image" class="img-circle" src="">
                            </a>
                            <div>
                                <small class="pull-right">46h ago</small>
                                <strong>Mike Loreipsum</strong> started
                                following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">3 days ago at 7:58 pm
                                    - 10.06.2014
                                </small>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown"
                   href="#">
                    <i class="fa fa-bell"></i> <span
                            class="label label-primary">8</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> You have 16
                                messages
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a data-toggle="dropdown" class="dropdown-toggle">

                            <span class="block m-t-xs">
                                <strong class="font-bold"><i
                                            class="fa fa-user"></i></strong><b
                                        class="caret"></b>
                            </span>
                </a>
                <ul class="dropdown-menu animated fadeInRight m-t-xs"
                    id="profile_dropdown">
                    <li>
                        <a href="https://www.ambulance.run/privacypolicy"
                           target="_blank"><span class="fa fa-lock"></span>
                            Privacy
                            Policies</a>
                    </li>
                    <li>
                        <a href="https://www.ambulance.run/termcondition"
                           target="_blank"><span
                                    class="fa fa-cogs"></span> Terms &
                            Conditions
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/Support')}}"> <span
                                    class="fa fa-support"></span>
                            Support</a>
                    </li>
                    <li>
                        <!--  <a data-toggle="modal" href="" id="faq" data-id="5" style="color:#777 ;margin-left: 50px!important" tabindex="-1"
                         onclick="load_faq()"><span class="fa fa-question-circle"></span>
                             FAQ</a></li> -->

                        <a href="{{url('/faq')}}" id="faq" style="color:#777 ;">
                            <span class="fa fa-question-circle"></span>
                            FAQ</a></li>
                    <li>
                        <!--  <a data-toggle="modal" href="" id="faq" data-id="5" style="color:#777 ;margin-left: 50px!important" tabindex="-1"
                         onclick="load_faq()"><span class="fa fa-question-circle"></span>
                             FAQ</a></li> -->

                        <a href="{{url('/configuration')}}" id="faq" style="color:#777 ;">
                            <span class="fa fa-wheel"></span>
                            Configuration</a></li>
                    <li><a
                                href="{{url('/troubleshoot')
                                        }}" style="color:#777;"
                                tabindex="-1"><span class="fa
                                        fa-wrench "></span>
                            Troubleshoot</a></li>
                    <li>
                        <a data-toggle="modal" id="languages"
                           data-id="5"
                           style="color:#777 ;" tabindex="-1"
                           onclick="load_languages()"><span
                                    class="fa fa-language"></span>
                            Language</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}"><span
                                    class="fa
                                        fa-sign-out"></span> Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<div id="right-sidebar" class="animated">
    <div class="sidebar-container">
        <ul class="nav nav-tabs navs-3">
            <li class="active"><a data-toggle="tab" href="#tab-1">
                    <i class="fa fa-envelope"> </i>
                </a></li>
            <li><a data-toggle="tab" href="#tab-2">
                    <i class="fa fa-bell"></i>
                </a></li>
            <li class=""><a data-toggle="tab" href="#tab-3">
                    <i class="fa fa-sticky-note"></i>
                </a></li>
        </ul>

        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">
                <div class="sidebar-title">
                    <h3><i class="fa fa-comments-o"></i> Latest Notes</h3>
                    <small><i class="fa fa-tim"></i> You have 10 new message.
                    </small>
                </div>
                <div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image"
                                     class="img-circle message-avatar"
                                     src="">
                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">

                                There are many variations of passages of Lorem
                                Ipsum available.
                                <br>
                                <small class="text-muted">Today 4:21 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image"
                                     class="img-circle message-avatar"
                                     src="">
                            </div>
                            <div class="media-body">
                                The point of using Lorem Ipsum is that it has a
                                more-or-less normal.
                                <br>
                                <small class="text-muted">Yesterday 2:45 pm
                                </small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image"
                                     class="img-circle message-avatar"
                                     src="">
                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                Mevolved over the years, sometimes by accident,
                                sometimes on purpose (injected humour and the
                                like).
                                <br>
                                <small class="text-muted">Yesterday 1:10 pm
                                </small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image"
                                     class="img-circle message-avatar"
                                     src="">
                            </div>
                            <div class="media-body">
                                Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the
                                <br>
                                <small class="text-muted">Monday 8:37 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image"
                                     class="img-circle message-avatar"
                                     src="">
                            </div>
                            <div class="media-body">

                                All the Lorem Ipsum generators on the Internet
                                tend to repeat.
                                <br>
                                <small class="text-muted">Today 4:21 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image"
                                     class="img-circle message-avatar"
                                     src="">
                            </div>
                            <div class="media-body">
                                Renaissance. The first line of Lorem Ipsum,
                                "Lorem ipsum dolor sit amet..", comes from a
                                line in section 1.10.32.
                                <br>
                                <small class="text-muted">Yesterday 2:45 pm
                                </small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image"
                                     class="img-circle message-avatar"
                                     src="">

                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                The standard chunk of Lorem Ipsum used since the
                                1500s is reproduced below.
                                <br>
                                <small class="text-muted">Yesterday 1:10 pm
                                </small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image"
                                     class="img-circle message-avatar"
                                     src="">
                            </div>
                            <div class="media-body">
                                Uncover many web sites still in their infancy.
                                Various versions have.
                                <br>
                                <small class="text-muted">Monday 8:37 pm</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane">
                <div class="sidebar-title">
                    <h3><i class="fa fa-cube"></i> Latest projects</h3>
                    <small><i class="fa fa-tim"></i> You have 14 projects. 10
                        not completed.
                    </small>
                </div>
                <ul class="sidebar-list">
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago
                            </div>
                            <h4>Business valuation</h4>
                            It is a long established fact that a reader will be
                            distracted.

                            <div class="small">Completion with: 22%</div>
                            <div class="progress progress-mini">
                                <div style="width: 22%;"
                                     class="progress-bar progress-bar-warning"></div>
                            </div>
                            <div class="small text-muted m-t-xs">Project end:
                                4:00 pm - 12.06.2014
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago
                            </div>
                            <h4>Contract with Company </h4>
                            Many desktop publishing packages and web page
                            editors.

                            <div class="small">Completion with: 48%</div>
                            <div class="progress progress-mini">
                                <div style="width: 48%;"
                                     class="progress-bar"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago
                            </div>
                            <h4>Meeting</h4>
                            By the readable content of a page when looking at
                            its layout.
                            <div class="small">Completion with: 14%</div>
                            <div class="progress progress-mini">
                                <div style="width: 14%;"
                                     class="progress-bar progress-bar-info"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-primary pull-right">NEW</span>
                            <h4>The generated</h4>
                            There are many variations of passages of Lorem Ipsum
                            available.
                            <div class="small">Completion with: 22%</div>
                            <div class="small text-muted m-t-xs">Project end:
                                4:00 pm - 12.06.2014
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago
                            </div>
                            <h4>Business valuation</h4>
                            It is a long established fact that a reader will be
                            distracted.

                            <div class="small">Completion with: 22%</div>
                            <div class="progress progress-mini">
                                <div style="width: 22%;"
                                     class="progress-bar progress-bar-warning"></div>
                            </div>
                            <div class="small text-muted m-t-xs">Project end:
                                4:00 pm - 12.06.2014
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago
                            </div>
                            <h4>Contract with Company </h4>
                            Many desktop publishing packages and web page
                            editors.

                            <div class="small">Completion with: 48%</div>
                            <div class="progress progress-mini">
                                <div style="width: 48%;"
                                     class="progress-bar"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago
                            </div>
                            <h4>Meeting</h4>
                            By the readable content of a page when looking at
                            its layout.

                            <div class="small">Completion with: 14%</div>
                            <div class="progress progress-mini">
                                <div style="width: 14%;"
                                     class="progress-bar progress-bar-info"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-primary pull-right">NEW</span>
                            <h4>The generated</h4>
                            <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                            There are many variations of passages of Lorem Ipsum
                            available.
                            <div class="small">Completion with: 22%</div>
                            <div class="small text-muted m-t-xs">Project end:
                                4:00 pm - 12.06.2014
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="tab-3" class="tab-pane">
                <div class="sidebar-title">
                    <h3><i class="fa fa-gears"></i> Settings</h3>
                    <small><i class="fa fa-tim"></i> You have 14 projects. 10
                        not completed.
                    </small>
                </div>
                <div class="setings-item">
                    <span>
                        Show notifications
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu"
                                   class="onoffswitch-checkbox" id="example">
                            <label class="onoffswitch-label" for="example">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Disable Chat
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" checked
                                   class="onoffswitch-checkbox" id="example2">
                            <label class="onoffswitch-label" for="example2">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Enable history
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu"
                                   class="onoffswitch-checkbox" id="example3">
                            <label class="onoffswitch-label" for="example3">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Show charts
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu"
                                   class="onoffswitch-checkbox" id="example4">
                            <label class="onoffswitch-label" for="example4">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Offline users
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" checked name="collapsemenu"
                                   class="onoffswitch-checkbox" id="example5">
                            <label class="onoffswitch-label" for="example5">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Global search
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" checked name="collapsemenu"
                                   class="onoffswitch-checkbox" id="example6">
                            <label class="onoffswitch-label" for="example6">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Update everyday
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu"
                                   class="onoffswitch-checkbox" id="example7">
                            <label class="onoffswitch-label" for="example7">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="sidebar-content">
                    <h4>Settings</h4>
                    <div class="small">
                        I belive that. Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.
                        And typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s.
                        Over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="right-sidebar2" class="animated">
    <div class="sidebar-container">
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">
                <div class="sidebar-title">
                    <h3>Ambulance Booking
                        Console</h3>
                </div>
                <div>
                    <div class="sidebar-message">
                        <!-- /.box-header -->
                        <div class="box-body" style="margin-bottom: -28px;">
                            <form method="post" role="form"
                                  id="registerRequest">
                                <div class="form-group">
                                    {{csrf_field()}}
                                    <?php
                                    $ambulance_select = ['own' => 'Own Inventory', 'thirdp' => 'Third Party Inventory', 'open' => 'Open Inventory'];
                                    ?>
                                    <label>Select Ambulance from</label><br>
                                    {!! Form::select('selectfrom',$ambulance_select,null,
                                    ['id'=>'selectfrom','class'=>'form-control',
                                    'required'=>'true','placeholder'=>"Select Ambulance from",
                                    'onchange'=>'listTAmbulance(this.value)']
                                    )!!}
                                </div>
                                <div class="form-group" id="hidebar">
                                    <select class="form-control"
                                            name="ambulance_id"
                                            id="listofamb"></select>
                                </div>
                                <div class="input-group input-group-xs has-feedback{{ $errors->has('pickup_address') ? ' has-error' : 'has-feedback' }}">
                                    <input type="hidden" name="pickup_lat"
                                           id="pickup_lat">
                                    <input type="hidden" name="pickup_long"
                                           id="pickup_long">
                                    <input type="text" name="pickup_address"
                                           class="form-control" id="origin"
                                           placeholder="From" required>
                                    <span class="input-group-btn">
                      <button type="button" title="Pick-up Address"
                              class="btn btn-default btn-flat" name="currentLoc"
                              onclick="currentLocation('origin')"><i
                                  class="glyphicon glyphicon-map-marker icon"
                                  style="color: red;"></i></button>
                    </span>
                                    @if ($errors->has('pickup_address'))
                                        <span class="help-block">
                                  <strong>{{ $errors->first('pickup_address') }}</strong>
                         </span>
                                    @endif
                                </div>
                                <br>
                                <div class="input-group input-group-xs has-feedback{{ $errors->has('drop_address') ? ' has-error' : 'has-feedback' }}">
                                    <input type="hidden" name="drop_lat"
                                           id="drop_lat">
                                    <input type="hidden" name="drop_long"
                                           id="drop_long">
                                    <input type="text" name="drop_address"
                                           class="form-control" id="destination"
                                           placeholder="To" required>
                                    <span class="input-group-btn">
                      <button type="button" title="Drop Address"
                              class="btn btn-default btn-flat"
                              onclick="currentLocation('destination')"><i
                                  class="glyphicon glyphicon-map-marker icon"
                                  style="color: green;"></i></button>
                                        @if ($errors->has('drop_location'))
                                            <span class="help-block">
                                  <strong>{{ $errors->first('drop_location') }}</strong>
                         </span>
                                        @endif
                </span>
                                </div>
                                <br>
                                <div class="form-group has-feedback{{ $errors->has('emergency_type') ? ' has-error' : 'has-feedback' }}">
                                    <label for="emergency_type">Emergency
                                        Type</label> &nbsp;&nbsp;
                                    <select title="Emergency Type"
                                            name="emergency_type"
                                            id="emergency_type"
                                            class="form-control" required>
                                        <option value="heartStroke">Heart
                                            Stroke
                                        </option>
                                        <option value="accident">Accident
                                        </option>
                                        <option value="maternity">Maternity
                                        </option>
                                        <option value="burnt">Burnt</option>
                                        <option value="drowning">Drowning
                                        </option>
                                        <option value="electricShock">Electric
                                            Shock
                                        </option>
                                        <option value="disaster">Disaster
                                        </option>
                                        <option value="death">Death</option>
                                    </select>
                                    @if($errors->has('emergency_type'))
                                        <span class="help-block">
                    <strong>{{$errors->first('emergency_type')}}</strong>
                </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback{{ $errors->has('ambulance_type') ? ' has-error' : 'has-feedback' }}">
                                    <label for="ambulance_type">Ambulance
                                        Type</label> &nbsp;&nbsp;
                                    <select title="Ambulance Type"
                                            name="ambulance_type"
                                            id="ambulance_type"
                                            class="form-control" required>
                                        <option value="1">ALS (Advanced Life
                                            Support)
                                        </option>
                                        <option value="2">BLS (Basic Life
                                            Support)
                                        </option>
                                        <option value="3">Hearse (For Dead Body
                                            Transfers)
                                        </option>
                                    </select>
                                    @if($errors->has('ambulance_type'))
                                        <span class="help-block">
                            <strong>{{$errors->first('ambulance_type')}}</strong>
                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback{{ $errors->has('patientName') ? ' has-error' : 'has-feedback' }}">
                                    <label>Patient Details</label>
                                    <input type="text" class="form-control"
                                           name="patientName"
                                           placeholder="Patient Name"
                                           pattern="[ A-Za-z]{1,64}"
                                           title="Please enter only characters">
                                    @if($errors->has('patientName'))
                                        <span class="help-block">
                    <strong>{{$errors->first('patientName')}}</strong>
                </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback{{ $errors->has('mobileNumber') ? ' has-error' : 'has-feedback' }}">
                                    <input type="text" class="form-control"
                                           name="mobileNumber"
                                           placeholder="Mobile Number"
                                           min-length="10" maxlength="10"
                                           pattern="^[7-9]\d{9}$"
                                           title="Format : 9876543212" required>
                                    @if($errors->has('mobileNumber'))
                                        <span class="help-block">
                    <strong>{{$errors->first('mobileNumber')}}</strong>
                </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2"
                                              id="add_info"
                                              placeholder="Additional info,if any"></textarea>
                                </div>
                                <div class="form-group book_btn">
                                    <div class="form-group">
                                        <button type="submit"
                                                class="btn btn-primary btn-block btn-flat"
                                                style="line-height: 0.971429;">
                                            Book Ambulance
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </form>
                            <div id="customLoader" class="overlay"
                                 style="display: none;">
                                <i class="fa fa-refresh fa-spin"></i>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <script>
                    $('#save_additional_info').click(function () {
                        var info = $('#text_additional_info').val();
                        $('#additional_info').modal('hide');
                        $('#show_additional_info').html(info);

                    })
                </script>
            </div>
        </div>
    </div>
</div>