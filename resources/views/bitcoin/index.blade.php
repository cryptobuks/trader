@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="card col-md-6">
		  <img class="card-img-top" src="..." alt="">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Latest Price Table</p>
		    <a href="{{ url('bitcoin/buy') }}" class="btn btn-primary">Buy</a>
		  </div>
		</div>
		<div class="card col-md-6">
		  <img class="card-img-top" src="..." alt="">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Latest Price Table</p>
		    <a href="#" class="btn btn-primary">Sell</a>
		  </div>
		</div>
	</div>
	
</div>
	
@endsection