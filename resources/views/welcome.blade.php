@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
		  <img class="card-img-top" src="#" alt="">
		  <div class="card-body">
		    <h5 class="card-title">Bitcoin</h5>
		    <p class="card-text">Go to Bitcoin Market</p>
		    <a href="{{ url('bitcoin') }}" class="btn btn-primary">Go to Bitcoin Market</a>
		  </div>
		</div>
		<br>
		<div class="card">
		  <img class="card-img-top" src="#" alt="">
		  <div class="card-body">
		    <h5 class="card-title">Etherium</h5>
		    <p class="card-text">Go to Etherium Market</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		<br>
		<div class="card">
		  <img class="card-img-top" src="#" alt="">
		  <div class="card-body">
		    <h5 class="card-title">Ripple</h5>
		    <p class="card-text">Go to Ripple Market</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
	

@stop