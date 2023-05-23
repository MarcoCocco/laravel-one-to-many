@extends('layouts/admin')

@section('content')
    <table class="mt-5 table table-striped">
        <thead>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Link alla Repository</th>
            <th>Linguaggio di Programmazione</th>
            <th>Data di creazione</th>
            <th>Completo</th>
            <th>Slug</th>
        </thead>

        <tbody>

            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->github_link }}</td>
                    <td>{{ $project->language }}</td>
                    <td>{{ $project->creation_date }}</td>
                    <td>{{ $project->is_complete ? 'Sì' : 'No' }}</td>
                    <td>{{ $project->slug }}</td>
                    <td><a href="{{ route('admin.projects.show', $project->slug) }}"><i
                                class="fa-solid fa-magnifying-glass"></i></a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="d-flex justify-content-around m-4">
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
            Aggiungi un progetto
        </a>
    </div>
@endsection
