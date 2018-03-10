<form id="account_edit_form" method="post">
	{{csrf_field()}}
	<input type="hidden" name="account" value="{{$account->id}}">

	<div class="row">
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
                                   id="account_name" value="{{$account->accountName}}">                         
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Username</label>
                            <input type="text" class="form-control"
                                   name="username"
                                   id="username"
                                   placeholder="Username" value="{{$account->username}}"
                                   >
                          
                        </div>
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input placeholder="Password" type="password"
                                
                                   class="form-control" name="password"
                                   id="password" value="{{$account->password}}"
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
                                   id="telephone" value="{{$account->tel}}">                         
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Contact</label>
                            <input type="text" class="form-control"
                                   name="contact"
                                   id="contact"
                                   placeholder="contact" value="{{$account->contact}}">
                          
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input placeholder="Email" type="email"
                                   
                                   class="form-control" name="email"
                                   id="email" value="{{$account->email}}">
                           
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
                                   name="address1" required="true" class="form-control col-md-6" value="{{$account->address}}"
                                   >
                           
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label>Address 2</label>
                            <input type="text" name="address2"
                                   id="address2" class="form-control col-md-6" value="{{$account->address1}}"
                                   >
                          
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 ">
                        <label>Country</label>
                        <input type="text" name="country"
                                   id="country" class="form-control"
                                    value="{{$account->country}}">
                           
                        </div>
                          <div class="form-group col-md-6 ">
                            <label>State</label>
                            <input type="text" name="state"
                                   id="state" class="form-control" value="{{$account->state}}"
                                   >
                           
                        </div>
                         
                          <div class="form-group col-md-6 ">
                            <label>City</label>
                           <input type="text" name="city"
                                   id="city" class="form-control" value="{{$account->city}}"
                                   >

                           
                        </div>
                         <div class="form-group col-md-6 ">
                            <label>Zipcode</label>
                            <input type="text" name="zipcode"
                                   id="zipcode" class="form-control" value="{{$account->zip}}"
                                   >
                           
                        </div>
                         
                    </div>
                </div>
                <!--.box-body-->
            </div>
            </div>
   
    </div>
            
	
	
	</div>
	<div class="row">

		<div class="col-md-12">
			<div class="form-group">
				<input type="submit" name="" value="Update" class="btn btn- btn-success pull-right"></div>
		</div>
	</div>



</form>