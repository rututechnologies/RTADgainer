<form class="" id="search_user_form" method="post">
{{csrf_field()}}
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div> 
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control" placeholder="Email">
			</div> 
			
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<input class="btn btn-success pull-right" type="submit"
					   value="Get">
			</div>
		</div>
	</div>

</form>