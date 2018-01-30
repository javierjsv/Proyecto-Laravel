@extends('layout')



@section ('content')
<!-- @include('header') -->



	<div class="row mt-3">
	
		<div class="col-8">
			<!-- 	<h1><?= e($title) ?></h1> -->

<!-- vista sin necesiad de usar balde -->

	<!-- 	<ul>

		<?php foreach ($Users as $user): ?>

			<li><?= e($user) ?></li>



		<?php endforeach; ?>

		</ul> 


<!--  ejemplo con utilizando blade
 -->
<h2 class="text-info title-list">{{$title}}</h2>





 <!-- se debe acmbiar en la view  ej user.blade.php -->

<!-- @<?php if (! empty($Users)): ?>
	

	 @foreach ($Users as $user)

	 <ul>
	 
	 	<li class="">
	 	{{$user}}</li> 

	 	</ul>

	  @endforeach

	  @<?php else: ?>

	  <p>you dont data user</p>

<?php endif ?> -->
  

<!--   condicionales php
 -->
@if (! empty($Users))
		<ul>
	@foreach ($Users as $user)
		
			<li>
				{{$user}}

			</li>
	@endforeach
		</ul>

	  @else  

	  <small class="text-danger">usuarios no encontrados</small>


@endif


		</div>

		<div class="col-4 sidebar   center-block ">
			  <button type="button"  class="btn btn-danger">::: @include('siderbar')</button>
			
		</div>

	</div>

<!--include('footer') -->


@endsection


