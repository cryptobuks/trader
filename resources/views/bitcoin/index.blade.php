@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="card col-md-6">
		  <img class="card-img-top" src="..." alt="">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">Price</th>
			      <th scope="col">Bitcoin</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($buyers as $buyer)
			    <tr>
			    
			      <td>${{ $buyer->price }}</td>
			      <td>{{ $buyer->bitcoin }}</td>
			   
			    </tr>
			     @endforeach
			  </tbody>
			</table>
		    <a href="{{ url('bitcoin/buy') }}" class="btn btn-primary">Buy</a>
		  </div>
		</div>
		<div class="card col-md-6">
		  <img class="card-img-top" src="..." alt="">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">Price</th>
			      <th scope="col">Bitcoin</th>
			    </tr>
			  </thead>
			  <tbody>
			    @foreach($sellers as $seller)
			    <tr>
			      
			      <td>${{ $seller->price }}</td>
			      <td>{{ $seller->bitcoin }}</td>

			    </tr>
			    @endforeach
			    </tr>
			  </tbody>
			</table>
		    <a href="#" class="btn btn-primary">Sell</a>
		  </div>
		</div>
	</div>

	<div class="row" style="padding-top: 10px;">
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
		    <a href="{{ url('bitcoin/sell') }}" class="btn btn-primary">Sell</a>
		  </div>
		</div>
	</div>
	
</div>
	
@endsection