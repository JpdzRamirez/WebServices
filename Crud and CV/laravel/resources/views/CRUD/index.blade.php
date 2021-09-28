@extends('layouts.plantilla')

@section('title', 'Indice')

@section('content')
    
    <div class="card text-center" id="principalCard.index">
        <div class="card-header">
            Index Table
        </div>
        <img src="{{ asset('img/Earth.svg') }}" width="50px" height="300px" class="card-img-top" alt="...">
        <div class="card-body">

           
            <h2 class="card-title "><p class="dataCentral">Data Central</p></h2>
            <p class="card-text">If you want to create a new user.</p>
            <a  href="{{ route('crud.create')}}" >
                <img width="100px" height="100px" src="{{ asset('./img/iconsButtons/addUser.svg') }}">
                <br>
                Click
            </a>

            <div class="container">
                <div class="table-responsive">
                    <table id="userList" class="table table-striped table-hover">
                        <thead class="thead-light">
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">id</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Username</th>
                                <th scope="col">E-mail</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($allUsers as $pivote)

                                <tr>

                                    <td scope='row'>{{ $pivote->no }} </td>
                                    <td> {{ $pivote->id }} </td>
                                    <td> {{ $pivote->name }} </td>
                                    <td> {{ $pivote->last_name }} </td>
                                    <td> {{ $pivote->user }} </td>
                                    <td> {{ $pivote->email }} </td>
                                    <td>
                                        <a href="{{ route('crud.show', $pivote->id) }}" title="show">
                                            <i class="fas fa-eye text-success  fa-lg"></i>
                                        </a>-
                                        <a href="{{ route('crud.edit', $pivote->id) }}" title="edit">
                                            <i class='fas fa-edit'></i>
                                        </a>-
                                        <button class="text-danger noBackground " onclick="eliminar({{ $pivote->id }})">
                                            <i class="fas fa-user-times"></i>

                                        </button>
                                        <script> 
                                        function eliminar(eliminar) {
                                            Swal.fire({
                                                title: 'Error!',
                                                text: 'Do you want to continue',
                                                icon: 'error',
                                                confirmButtonText: 'Cool'
                                            })
                                        };
                                        </script>
                                            

                                       

                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"
                                            id="confirmDelete">
                                            <div class="toast-body">
                                                Are you sure you want to delete?.
                                                <div class="mt-2 pt-2 border-top">
                                                    <form method='POST' action="{{ route('crud.delete', $pivote->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            type="submit">Delete</button>
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            data-bs-dismiss="toast">Close</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>








    <!--Importamos script iniciar tabla -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



    <!-- Font Awesome JS ICONOS DE TOOLS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <!--Seccion scripts Tablas -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">


    <!-- Los iconos tipo Solid de Fontawesome OK-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


    <script type="text/javascript" src="{{ asset('js/tableScript.js') }}"></script>
    <a href="{{ route('crud.index') }}">ir a listados</a>

@endsection
