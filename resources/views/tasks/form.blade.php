{{ csrf_field() }}
<div class="row">
	<div class="col-lg-3"> 
		<div class="form-group">
			<label for="name">Name:</label>
			<input class="form-control" name="name" type="text" value="{{ old('name', $task->name) }}" id="name">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3"> 
		<div class="form-group">
			<label for="name">Show In History:</label><br>
			<label class="radio-inline"><input type="radio" name="is_in_history" value="1" {{ (old('is_in_history', $task->is_in_history) == 1) ? 'checked="checked"' : '' }}>Yes</label>
			<label class="radio-inline"><input type="radio" name="is_in_history" value="0" {{ (old('is_in_history', $task->is_in_history) == 0) ? 'checked="checked"' : '' }}>No</label>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-2"> 
		<div class="form-group">
			<label for="Order">Order (Optional):</label>
			<input class="form-control" name="order" type="text" value="{{ old('order', $task->order) }}" id="order">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6"> 
		<div class="form-group">
			<label for="description">Description (Optional):</label>
			<input class="form-control" name="description" type="text" value="{{ old('description', $task->description) }}" id="description">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6"> 
		<div class="form-group">
			<label for="link">Link (Optional):</label>
			<input class="form-control" name="link" type="text" value="{{ old('link', $task->link) }}" id="link">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3"> 
		<div class="form-group">
			<label for="image">Image (<a target="_blank" href="http://www.flaticon.com/">Link</a>):</label>
			<input name="image" type="file" id="image">
		</div>
	</div>

	@if ($task->image_url)
		<div class="col-lg-4">
			<div>
				<h4>Current image</h4>
				<img src="{!! url($task->image_url); !!}">
			</div>
		</div>
	@endif
</div>

<div class="row">
	<div class="col-lg-12" style="margin-top: 25px"> 
		<input class="btn btn-primary" type="submit" value="{{ $submitButtonText }}">
	</div>
</div>