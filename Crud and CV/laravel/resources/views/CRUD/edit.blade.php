@extends('layouts.plantilla_secondary')

@section('Editar Usuario', 'Usuario' . $user->name)

@section('content')

    <h1  class=" text-center "><span id="text-color">UPDATE</span></h1>
    <br>
    <h1  class=" text-center "><span id="text-color">JCS-Pedraza</span></h1>
    <div class="container">
        <div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
            <ul class="nav nav-tabs justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form"
                        aria-selected="true">Form</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="form-tab">
                    <div class="card">
                        <div class="card-header">
                            <h4>User Form</h4>
                        </div>
                        <div class="card-body">
                            <!-- Formulario de usuarios-->

                            <form class="form" role="form" autocomplete="off"
                                action="{{ route('crud.update', $user) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">ID</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="id" value="{{ $user->id }}">
                                    </div>
                                    @error('id')
                                        <br>
                                        <small>*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="name" placeholder="Insert a Name"
                                            value="{{ $user->name }}">
                                    </div>
                                    @error('name')
                                        <br>
                                        <small>*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Last
                                        name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="last_name"
                                            placeholder="Insert a last name" value="{{ $user->last_name }}">
                                    </div>
                                    @error('last_name')
                                        <br>
                                        <small>*{{ $message }}</small>
                                    @enderror
                                </div>
                                <!--CHECK INPUT-->
                                <div class="form-group row ">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                    <div class="col-lg-9">
                                        <div class="form-check col-form-check">
                                        <input class="form-check-input" type="radio" id="male" name="sex_gender"
                                            value="Male">
                                        <label class="form-check-label" for="flexCheckDisabled">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="female" name="sex_gender"
                                            value="Female">
                                        <label class="form-check-label" for="flexCheckDisabled">
                                            Female
                                        </label>
                                    </div>
                                    @error('last_name')
                                        <br>
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    </div>
                                </div>
                               
                                    
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" name="email" placeholder="Inset an Email"
                                            value="{{ $user->email }}">
                                    </div>
                                    @error('email')
                                        <br>
                                        <small>*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" placeholder="Insert an User name" type="text"
                                            name="user" value="{{ $user->user }}">
                                    </div>
                                    @error('user')
                                        <br>
                                        <small>*{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="input-group mb-3">
                                        <label class="col-lg-3 col-form-label form-control-label">Password</label>

                                        <input class="form-control" placeholder="Enter Password" type="password"
                                            name="password" id="pass1">

                                        <button id="show_password" class="btn btn-primary" type="button"> <span id="p1"
                                                class="fa fa-eye-slash icon"></span> </button>


                                        @error('password')
                                            <br>
                                            <small>*{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <span id="errorPass"> </span>
                                <div class="form-group row">
                                    <div class="input-group mb-3">
                                        <label class="col-lg-3 col-form-label form-control-label">Confirm</label>

                                        <input class="form-control" placeholder="Please confirm Password" type="password"
                                            name="confirmPassword" id="pass2">

                                        <button id="show_password_confirm" class="btn btn-primary" type="button"><span
                                                id="p2" class="fa fa-eye-slash icon"></span> </button>


                                        @error('confirmPassword')
                                            <br>
                                            <small>*{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div id="message">
                                    <h3>Password must contain the following:</h3>
                                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                    <p id="number" class="invalid">A <b>number</b></p>
                                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12 text-center">
                                        <p>
                                            <input type="reset" class="btn btn-secondary" value="Clean Form">
                                            <input type="submit" class="btn btn-primary" value="Save Changes"
                                                id="enviarFormulario">
                                            <br>
                                            <input type="button" class="buttonBack"
                                                onclick="location.href='{{ route('crud.index') }}'" value="Return Back">
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
    <br>
    <script type="text/javascript" src="{{ asset('js/crudScript.js') }}"></script>
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

@endsection
