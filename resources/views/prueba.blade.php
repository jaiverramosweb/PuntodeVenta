@extends('layouts.admin')

@section('title', 'Gestion de Categorias')
    
@section('create')
{{-- <li class="nav-item d-none d-lg-flex">
    <a class="nav-link" href="{{ route('categories.create') }}">
        <span class="btn btn-primary">+ Crear Categoria</span>
    </a>
</li> --}}
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Gestion de Categorias
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                    <li class="breadcrumb-item active">Categoria</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Categorias</h4>
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('categories.create') }}" class="dropdown-item">Agregar</a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row">{{ $category->id }}</th>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                {{-- {!! Form::open(['route' => 'categories.delete',$category], 'method' => 'DELETE') !!}

                                                    <a href="{{ route('categories.edit', $category) }}" title="Editar" class="jsgrid-button jsgrid-edit-button">
                                                        <i class="far fa-edit"></i>
                                                    </a>

                                                    <a href="{{ route('categories.delete', $category) }}" type="submit" title="Eliminar" class="jsgrid-button jsgrid-edit-button">
                                                        <i class="far fa-trash-all"></i>
                                                    </a>

                                                {!! Form::close() !!} --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    {!! Html::script('melody/js/data-table.js') !!}
@endsection