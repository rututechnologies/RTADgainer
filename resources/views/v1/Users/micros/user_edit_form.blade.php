<form id="user_edit_form" method="post">
	{{csrf_field()}}
	<input type="hidden" name="user" value="{{$user->id}}">

	<div class="row">
  <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Select Account</label>
                 {!! Form::select('account',$accountList,$user->account_id,['id'=>'accountList','class'=>'form-control','required'=>'true','placeholder'=>'Select Account'])!!}
                 </div>
              </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{$user->username}}">
                </div> 
            </div>            
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{$user->password}}">
                </div> 
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                </div> 
            </div>
             <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Phone</label>
                    <input type="integer" name="phone" class="form-control" placeholder="Phone" value="{{$user->phone_number}}">
                </div> 
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Chat User</label>
                    <?php $chatUser = ['1'=>'Yes','0'=>'No'];  ?>
                 		{!! Form::select('chatUser',$chatUser,$user->chat_user,['id'=>'chatUser','class'=>'form-control','required'=>'true','placeholder'=>'Select Option'])!!}
                 </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Chat User Department</label>
                      <input type="text" name="chat_user_dept" class="form-control" placeholder="Chat User Dept" value="{{$user->dept}}">
                 </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Level</label>
 <?php $levels = ['1'=>'Admin','2'=>'Manager','3'=>'Client','4'=>'Agency','5'=>'Sales Repo','6'=>'Accounting'];  ?>
                 {!! Form::select('level',$levels,$user->level,['id'=>'chatUser','class'=>'form-control','required'=>'true','placeholder'=>'Select Option'])!!}                 </div>
              </div>







<!-- 

		<div class="col-md-3">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{$user->username}}">
                </div> 
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                </div> 
                
            </div>

            
	 -->
	
	
	<div class="row">

		<div class="col-md-12">
			<div class="form-group">
				<input type="submit" name="" value="Update" class="btn btn- btn-success pull-right"></div>
		</div>
	</div>



</form>