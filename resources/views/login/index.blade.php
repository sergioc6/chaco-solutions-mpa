@extends('layout.base')
@section('title', 'Login')

@section('content')
    <div class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <img src="{{asset('ChacoSolutions_logo.png')}}" width="30%" height="30%">
                <a href="../../index2.html"><b>Chaco</b>SOLUTIONS</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Inicia sesión para comenzar</p>

                    <form action="../../index3.html" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>


                    <p class="mb-1">
                        <a href="forgot-password.html">Olvidé mi contraseña</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
@endsection
