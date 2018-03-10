@if(count($navigationList)>0)
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover dataTables-example" id="nav_list_div">
        <thead>
            <th class="align_content_column">Option</th>

            <th>Link Parent</th>
            <th>Link Text</th>
             <th>Link URL</th>
            <th>Link Viewable Levels</th>
            <th>Dashboard Nav</th>
        </thead>
        <tbody>
            @foreach($navigationList as $navList)
                <tr>
                        <td>
                            <div class="btn-group btn-group-xs ">
                            

                                    <button class="btn btn-default" title="Edit" onclick="edit_navigation({{$navList->id}})"> <i class="fa fa-edit "></i> </button>
                                    <button class="btn btn-default " title="Delete" onclick="delete_navigation({{$navList->id}})"> <i class="fa fa-trash-o"></i> </button>

                            </div>
                        </td>
                        <td>{{$navList->link_parent}}</td>
                        <td>{{$navList->link_text}}</td>
                        <td>{{$navList->link_url}}</td>
                        <td>{{$navList->viewable_levels}}</td>
                        <td>{{$navList->dashboard_nav}}</td>

                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@else
    <label class="label label-danger">No Navigation Data</label>
 @endif