@include('header')



	<div class="row mt-3">
	
		<div class="col-8">

			<h2 class="text-info title-list"> # numero de usuario {{$id}}</h2>

				 MOSTRAR DETALLES DE USUARIO {{ $id }}
		</div>

		<div class="col-4 sidebar ">
			  <button type="button"  class="btn btn-danger">done</button>
			 @include('sidebar')
		</div>

	</div>



@include('footer')

