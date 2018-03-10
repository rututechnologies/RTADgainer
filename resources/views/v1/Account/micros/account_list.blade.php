@if(count($accountsList)>0)
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover dataTables-example" id="user_list_div">
        <thead>
            <th class="align_content_column">Option</th>

            <th>Account Name</th>
            <th>Username</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Country</th>
            <th>State</th>
            <th>Zipcode</th>
        </thead>
        <tbody>
            @foreach($accountsList as $accountList)
                <tr>
                        <td>
                            <div class="btn-group btn-group-xs ">
                            

                                    <button class="btn btn-default" title="Edit" onclick="edit_account({{$accountList->id}})"> <i class="fa fa-edit "></i> </button>
                                    <button class="btn btn-default " title="Delete" onclick="delete_account({{$accountList->id}})"> <i class="fa fa-trash-o"></i> </button>

                            </div>
                        </td>
                        <td>{{$accountList->accountName}}</td>
                        <td>{{$accountList->username}}</td>
                        <td>{{$accountList->contact}}</td>
                        <td>{{$accountList->email}}</td>
                        <td>{{$accountList->country}}</td>
                        <td>{{$accountList->state}}</td>
                        <td>{{$accountList->zip}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@else
    <label class="label label-danger">No Account found.</label>
 @endif