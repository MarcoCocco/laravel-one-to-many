@extends('layouts/admin')

@section('content')
    <h2 class="text-center m-4">Tutti i progetti di tipo {{ $type->name }} </h2>
    <table class="mt-5 table table-striped">
        <thead>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Linguaggio di programmazione</th>
        </thead>
        <tbody>
            @foreach ($type->projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->language }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
