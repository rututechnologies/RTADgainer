    <form method="post" id="save_new_navigation_form">
    {{csrf_field()}}

        <div class="row">
            <div class="col-md-12">
                <div class="ibox">

                    <div class="ibox-title">General Details
                      <div class="ibox-tools pull-right">
                         {{--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>--}}
                          <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                          </a>
                    </div>
                </div>
                <div class="ibox-content">
              <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Link Parent</label>
                    <select class="form-control"
                                                    name="link_parent">
                                                     <option>Select Parent Link
                                                </option>
                                                <option value="driver">Dashboard
                                                </option>
                                                <option value="paramedic">
                                                    Campaign Tools
                                                </option>
                                                <option value="doctor">Accounts
                                                </option>
                                                <option value="support staff">
                                                     Reports
                                                </option>
                                                <option value="others">My Campaigns
                                                </option>
                                                <option value="others">Message Center
                                                </option>
                                                <option value="others">Sales
                                                </option>
                                                <option value="others">PPC Management
                                                </option>
                                                <option value="others">Agency
                                                </option>
                                                <option value="others">Admin
                                                </option>
                                                <option value="others">Accounting
                                                </option>
                                            </select>
                </div> 
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Link Text</label>
                    <input type="text" name="link_text" class="form-control" placeholder="Link Text">
                </div> 
                
            </div>

             <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Link Url</label>
                    <input type="text" name="link_url" class="form-control" placeholder="Link Url">
                </div> 
                
            </div>
             <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Link Vieweable Levels</label>
                    <?php $levels= array('Admin'=> 'Admin','Campaign Manager'=>'Campaign Manager','Sales'=>'Sales','Agency'=>'Agency','Client'=>'Client','Accounting'=>'Accounting'); ?>
                      {!! Form::select('viewable_levels[]', 
                ($levels), 
                null, 
                ['multiple'=>true,'class' => 'form-control margin']) !!}
                </div> 
                
            </div>
             <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Dashboard Nav</label>
                    <input type="text" name="dashboard_nav" class="form-control" placeholder="Dashboard Nav">
                </div> 
                
            </div>
           
            
        </div>
    </div>
               <!--.box-->
            </div>
           
                   
                <!--.box-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                   <!--.box-->
            </div>
            <input class="btn btn-sm btn-primary pull-right" type="submit"
                   value="Add Link" style="margin-right: 25px;">
        </div>

       

      
    </form>