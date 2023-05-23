@extends('layouts/admin')

@section('content')
    <h2 class="text-center m-4">Tutti i progetti di tipo {{ $type->name }} </h2>
    @if (count($type->projects) > 0)
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
    @else 
    <p class="text-center p-4">Il tipo {{ $type->name }} non ha nessun progetto associato.</p>
    @endif
@endsection
