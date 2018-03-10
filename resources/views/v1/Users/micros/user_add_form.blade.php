    <form method="post" id="save_new_user_form">
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
                    <label for="username">Select Account</label>
                 {!! Form::select('account',$accountList,null,['id'=>'accountList','class'=>'form-control','required'=>'true','placeholder'=>'Select Account'])!!}
                 </div>
              </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{$userAccount->username}}">
                </div> 
            </div>            
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{$userAccount->password}}">
                </div> 
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div> 
            </div>
             <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Phone</label>
                    <input type="integer" name="phone" class="form-control" placeholder="Phone">
                </div> 
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Chat User</label>
                    <?php $chatUser = ['1'=>'Yes','0'=>'No'];  ?>
                 {!! Form::select('chatUser',$chatUser,null,['id'=>'chatUser','class'=>'form-control','required'=>'true','placeholder'=>'Select Option'])!!}
                 </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Chat User Department</label>
                      <input type="text" name="chat_user_dept" class="form-control" placeholder="Chat User Dept">
                 </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Level</label>
 <?php $levels = ['1'=>'Admin','2'=>'Manager','3'=>'Client','4'=>'Agency','5'=>'Sales Repo','6'=>'Accounting'];  ?>
                 {!! Form::select('level',$levels,null,['id'=>'chatUser','class'=>'form-control','required'=>'true','placeholder'=>'Select Option'])!!}                 </div>
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
                   value="Add User" style="margin-right: 25px;">
        </div>

       

      
    </form>