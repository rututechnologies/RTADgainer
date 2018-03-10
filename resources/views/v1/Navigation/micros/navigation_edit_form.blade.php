<form id="navigation_edit_form" method="post">
	{{csrf_field()}}
	<input type="hidden" name="nav" value="{{$nav->id}}">

	       <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="username">Link Parent</label>
                    <?php $parent_linkList = ['Dashboard'=>'Dashboard','Accounts'=>'Accounts','Reports'=>'Reports','My Campaigns'=>'My Campaigns','Message Center'=>'Message Center','Sales'=>'Sales','PPC Management'=>'PPC Management','Agency'=>'Agency','Admin'=>'Admin','Accounting'=>'Accounting']; ?>
                      {!! Form::select('link_parent',$parent_linkList,$nav->link_parent,['id'=>'link_parent','class'=>'form-control','placeholder'=>'Select Parent Link'])!!}
                   
                </div> 
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Link Text</label>
                    <input type="text" name="link_text" class="form-control" placeholder="Link Text" value="{{$nav->link_text}}">
                </div> 
                
            </div>

             <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Link Url</label>
                    <input type="text" name="link_url" class="form-control" placeholder="Link Url" value="{{$nav->link_url}}">
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
                    <input type="text" name="dashboard_nav" class="form-control" placeholder="Dashboard Nav" value="{{$nav->dashboard_nav}}">
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