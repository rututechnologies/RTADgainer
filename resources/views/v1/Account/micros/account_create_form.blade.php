<form method="post" id="save_new_accounts_general_form">
    {{csrf_field()}}
   <!--  <div class="row">
        <input type="hidden" value="" name="registerfor">
    </div> -->
    <div class="row">
        <div class="col-md-6">
            <div class="ibox ">
                <div class="ibox-title bg-muted">
                    <strong>Account Details</strong>
                    <div class="ibox-tools pull-right">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Account Name<span
                                        class="required_inputs_star text-danger">*</span></label>
                               <input placeholder="Account name" type="text"
                                   class="form-control" name="account_name"
                                   id="account_name">                         
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Username</label>
                            <input type="text" class="form-control"
                                   name="username"
                                   id="username"
                                   placeholder="Username"
                                   >
                          
                        </div>
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input placeholder="Password" type="password"
                                
                                   class="form-control" name="password"
                                   id="password"
                                   >
                           
                        </div>
                    </div>
               
                </div>
                <!--.box-body-->
            </div>
            <!--.box-->
        </div>
              <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-title bg-muted">
                    <strong>Contact Details</strong>
                    <div class="ibox-tools pull-right">
                       
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                  <div class="row">
                        <div class="form-group col-md-12">
                            <label>Telephone<span
                                        class="required_inputs_star text-danger">*</span></label>
                               <input placeholder="Account name" type="text"
                                   
                                   class="form-control" name="telephone"
                                   id="telephone">                         
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Contact</label>
                            <input type="text" class="form-control"
                                   name="contact"
                                   id="contact"
                                   placeholder="contact">
                          
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input placeholder="Email" type="email"
                                   
                                   class="form-control" name="email"
                                   id="email">
                           
                        </div>
                    </div>
                   
                </div>
                <!--.box-body-->
            </div>
            <!--.box-->
        </div>
        <div class="col-md-12">
            <!--.box-->
            <div class="ibox">
                <div class="ibox-title bg-muted">
                    <strong>Address Details</strong>
                    <div class="ibox-tools pull-right">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="form-group col-md-6 ">
                            <label>Address 1<span
                                        class="required_inputs_star text-danger">*</span></label>
                            <input id="address1" type="text"
                                   name="address1" required="true" class="form-control col-md-6"
                                   >
                           
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label>Address 2</label>
                            <input type="text" name="address2"
                                   id="address2" class="form-control col-md-6"
                                   >
                          
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 ">
                        <label>Country</label>
                        <input type="text" name="country"
                                   id="country" class="form-control"
                                   >
                           
                        </div>
                          <div class="form-group col-md-6 ">
                            <label>State</label>
                            <input type="text" name="state"
                                   id="state" class="form-control"
                                   >
                           
                        </div>
                        
                          <div class="form-group col-md-6 ">
                            <label>City</label>
                           <input type="text" name="city"
                                   id="city" class="form-control"
                                   >

                           
                        </div>
                         <div class="form-group col-md-6 ">
                            <label>Zipcode</label>
                            <input type="text" name="zipcode"
                                   id="zipcode" class="form-control"
                                   >
                           
                        </div>
                         
                    </div>
                </div>
                <!--.box-body-->
            </div>
            </div>
   
    </div>
     <div class="row">
        <div class="col-md-6">
        </div>
        <input class="btn btn-sm btn-primary pull-right" type="submit"
               value="Save & Click on Billing Information" style="margin-right: 14px;">
    </div> 
</form>