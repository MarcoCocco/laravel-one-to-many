@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-secondary m-4 text-center">
        {{ __('Dashboard') }}
    </h1>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">Ciao, {{ Auth::user()->name }}!</div>

                <div class="card-body text-center">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __("Hai effettuato l'accesso all'area amministrativa.") }}
                </div>
                <div class="text-center p-4">
                    <a href="{{ route('admin.projects.index') }}">Vai alla lista dei Progetti</a>
                    <p class='pt-3'>Oppure</p>
                    <a href="{{ url('/')}}">Torna all'Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
