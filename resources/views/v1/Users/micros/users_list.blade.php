@if(count($usersList)>0)
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover dataTables-example" id="user_list_div">
        <thead>
            <th class="align_content_column">Option</th>
            <th>Account</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone Number</th>
            <th>Chat User</th>
            <th>Chat User Dept</th>
            <th>Level</th>
            
        </thead>
        <tbody>
            @foreach($usersList as $userList)
                <tr>
                        <td>
                            <div class="btn-group btn-group-xs ">
                            

                                    <button class="btn btn-default" title="Edit" onclick="edit_user({{$userList->id}})"> <i class="fa fa-edit "></i> </button>
                                    <button class="btn btn-default " title="Delete" onclick="delete_user({{$userList->id}})"> <i class="fa fa-trash-o"></i> </button>

                            </div>
                        </td>
                        <td>{{$userList->account_id}}</td>
                        <td>{{$userList->username}}</td>
                        <td>{{$userList->email}}</td>
                        <td>{{$userList->password}}</td>
                        <td>{{$userList->phone_number}}</td>
                        <td>{{$userList->chat_user}}</td>
                        <td>{{$userList->dept}}</td>
                        <td>{{$userList->level}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@else
    <label class="label label-danger">No Users</label>
 @endif