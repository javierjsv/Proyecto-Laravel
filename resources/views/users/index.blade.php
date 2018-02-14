@extends('layout')



@section ('content')
<!-- @include('header') -->

	<div class="row mt-3">
	
		<div class="col-8">
			
		@if (!empty($Users))
			<ul>
			@foreach ($Users as $user)
				<li>{{ $user->name }}</li>		
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


