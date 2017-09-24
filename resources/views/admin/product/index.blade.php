@extends('admin.layout.admin')

@section('content')

	<h3>Products</h3>
		@forelse($products as $product)
			<ul>
				<li><h4>Name of product: {{$product->name}}</h4></li>
			</ul>
		@empty
		<h3> No hay resultados</h3>

		@endforelse



@endsection