@extends('layouts/admin')
@section('title', 'Reporte de ventas')
@section('style')
	<style type="text/css">
		.unstyled-button {
			border: none;
			padding: 0;
			background: none;
			cursor: pointer;
		}
	</style>
@endsection

@section('content')

	<div class="content-wrapper">
	  <div class="page-header">
		    <h3 class="page-title">
		      Reporte de ventas
		    </h3>
		    <nav aria-label="breadcrumb">
		  	<ol class="breadcrumb">
		  		<li class="breadcrumb-item"><a href="#">Panel| Administrador</a></li>
		  		<li class="breadcrumb-item active" aria-current="page">Reporte de ventas</li>
		  	</ol>
		  </nav>
	  </div>
	  	  <div class="row">
	    <div class="col-md-12 grid-margin stretch-card">
	      <div class="card">
	        <div class="card-body">
				<div class="row">
					<div class="col-12 col-md-4 text-center">
						<span>Fecha de consulta: <b> </b></span>
						<div class="form-group">
							<strong>{{\Carbon\Carbon::now()->format('d/m/Y')}}</strong>
						</div>
					</div>
					<div class="col-12 col-md-4 text-center">
						<span>Cantidad de registros: <b> </b></span>
						<div class="form-group">
							<strong>{{ $sales->count() }}</strong>
						</div>
					</div>

					<div class="col-12 col-md-4 text-center">
						<span>Todal de ingreso: <b> </b></span>
						<div class="form-group">
							<strong>$ {{ $total }}</strong>
						</div>
					</div>
				</div>


	          <div class="table-responsive">
	          	<table id="order-listing" class="table">

	          		<thead>
	          			<tr>
	          				<th>ID</th>
	          				<th>FECHA</th>
	          				<th>TOTAL</th>
	          				<th>ESTADO</th>
	          				<th>ACCIONES</th>
	          			</tr>
	          		</thead>

	          		<tbody>
	          			@foreach($sales as $sale)
	          				<tr>
	          					<th scope="row">{{ $sale->id }}</th>
	          					<td>
	          						{{ $sale->date }}
	          					</td>
	          					<td>
	          						{{ $sale->total }}
	          					</td>
	          					<td>
	          						{{ $sale->status }}
	          					</td>
	          					<td style="width: 50px;">
	          						{!! Form::open(['route' =>['sales.destroy', $sale], 'method' => 'DELETE']) !!}

		          						<a href="{{ route('sales.edit', $sale) }}" class="jsgrid-button jsgrid-edit-button" title="Editar">
		          							<i class="far fa-edit"></i>
		          						</a>

		          						<button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar">
		          							<i class="far fa-trash-alt"></i>
		          						</button>

	          						{!! Form::close() !!}
	          					</td>
	          				</tr>
	          			@endforeach
	          		</tbody>

	          	</table>
	          </div>
	        </div>
	        <div class="card-footer text-muted">

	        </div>
	      </div>
	    </div>

	  </div>

@endsection

@section('script')
	{!! Html::script('melody/js/data-table.js') !!}
@endsection