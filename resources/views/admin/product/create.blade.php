@extends('admin.layout.admin')

@section('content')
	
	<h3>Add Product</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			
			@if(count($errors))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>

	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>

@endif	</div>
		
			{!! Form::open(['route' => 'product.store', 'method'=>'post', 'files'=>true])!!}
				<div class="form-group">
					{{Form::label('name', 'Name')}}
					{{Form::text('name', null, array('class' => 'form-control'))}}
				</div>
				<div class="form-group">
					{{ Form::label('description', 'Description')}}
					{{Form::text('description', null, array('class' => 'form-control'))}}
				</div>
				<div class="form-group">
					{{ Form::label('price', 'Price')}}
					{{Form::text('price', null, array('class' => 'form-control'))}}
				</div>
				<div class="form-group">
					{{ Form::label('size', 'Size')}}
					{{Form::select('size', ['small'=>'Small', 'medium'=>'Medium', 'large'=>'Large'], null, ['class' => 'form-control'])}}
				</div>
				 <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', [1=>'men'], null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
            </div>
				 <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

				{{Form::submit('Create', array('class' => 'btn btn-success'))}}
			{!! Form::close()!!}

		</div>
	</div>



@endsection