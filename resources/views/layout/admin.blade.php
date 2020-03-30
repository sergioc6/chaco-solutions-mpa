@extends('layout.app')

@section('content')
    <div class="wrapper">
        @include('layout.admin.navbar')
        @include('layout.admin.sidebar')

        <div class="content-wrapper">

        @include('layout.admin.content-header')

            <!-- Main content -->
            <div class="content">
                @show
            </div>
            <!-- /.content -->
        </div>
        @include('layout.admin.footer')
    </div>
