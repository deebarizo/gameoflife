@extends('master')

@section('content')
	
	@include('_form_heading')

	<div class="row">

		<form method="POST" action="/daily_tasks" accept-charset="UTF-8" enctype="multipart/form-data">
			{{ csrf_field() }}

			<div class="col-lg-6"> 
				<div class="form-group">
					<label for="name">Name:</label>
						<input class="form-control" name="name" type="text" value="" id="name">
				</div>
			</div>

			<div class="col-lg-9"> 
				<div class="form-group">
					<label for="link">Link:</label>
						<input class="form-control" name="link" type="text" value="" id="link">
				</div>
			</div>

			<div class="col-lg-4" style="margin-bottom: 20px"> 
				<div class="form-group">
					<label for="image">Image:</label>
					<input name="image" type="file" id="image">
				</div>
			</div>

			<div class="col-lg-12"> 
				<input class="btn btn-primary" type="submit" value="Submit">
			</div>

		</form>

	</div>
@stop