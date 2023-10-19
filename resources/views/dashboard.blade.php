@extends('layouts.app')
@section('titulo', 'Dashboard')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <h5 class="fs-2 text-center">Seja bem-vindo, {{ Auth::user()->name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
