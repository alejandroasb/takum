@extends('store.template')

@section('content')
	<h1> detalle producto</h1>

	<div class="product-block">
		<img src="{{ $product->image}}" width="300">
	</div>

	<div class="product-block">
		<h3>{{ $product->name }}</h3>
		<div class="product-info">
			<p>{{ $product->description }}</p>
		</div>
	</div>

	<p><a href="{{ route('home')}}"> regresar</a></p>

@stop