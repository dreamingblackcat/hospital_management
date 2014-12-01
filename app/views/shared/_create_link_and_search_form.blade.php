<div class="row">
		{{Form::open(['class' => 'form-inline cm-search-form'])}}
		<div class="form-group">
				<input type="text" class="form-control" placeholder="Text input">		
				<button type="submit" class="btn btn-default">Search</button>
		</div>
		<div class="form-group">
			{{ link_to_route($create_route, "Add",array(), $attributes = array('class' => 'btn btn-success cm-search-button')) }}
		</div>
		{{Form::close()}}
</div>			
