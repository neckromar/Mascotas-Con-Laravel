@extends('layouts.app')
@section('title','Ingresar')

@section('content')
<div class="wrapper">

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('images/usuarios/ingresar.jpg'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card tarjeta-registro">
                            <form class="form" method="" action="">
                                <div class="header header-primary text-center">
                                    <h4>Ingresar</h4>
                                </div>
                                <p class="text-divider">¡Volviste! Bienvenido nuevamente &#10084;</p><br>
                                <div class="content">

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Correo electrónico...">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" placeholder="Contraseña..." class="form-control" />
                                    </div><br>


                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes" checked>
                                            Recordar mis datos
                                        </label>
                                    </div><br>
                                </div>
                                <div class="footer text-center">
                                    <a href="#" class="btn btn-simple btn-primary btn-lg">Ingresar <i class="material-icons">fingerprint</i></a>
                                </div>

                                <div class="password"><a href=""><span class="label label-danger">¿Olvidaste la contraseña?</span></a></div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
