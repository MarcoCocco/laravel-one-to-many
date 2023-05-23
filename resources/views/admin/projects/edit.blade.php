@extends('layouts/admin')

@section('content')
    <h1 class="m-4 text-center">Modifica un progetto</h1>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                value="{{ old('title') ?? $project->title }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"
                class="form-control  @error('description') is-invalid @enderror">{{ old('description') ?? $project->description }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="github_link">GitHub</label>
            <input type="text" name="github_link" id="github_link"
                class="form-control @error('github_link') is-invalid @enderror"
                value="{{ old('github_link') ?? $project->github_link }}">
            @error('github_link')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="language">Linguaggio di programmazione</label>
            <input type="text" name="language" id="language"
                class="form-control @error('language') is-invalid @enderror"
                value="{{ old('language') ?? $project->language }}">
            @error('language')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="creation_date">Data di creazione</label>
            <input type="date" name="creation_date" id="creation_date"
                class="form-control @error('creation_date') is-invalid @enderror"
                value="{{ old('creation_date') ?? $project->creation_date }}">
            @error('creation_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="is_complete">Il progetto è completo?</label>
            <select name="is_complete" id="is_complete" class="form-select @error('is_complete') is-invalid @enderror"
                aria-label="Default select example">
                <option selected>Seleziona</option>
                <option value="1" @if (old('is_complete', $project->is_complete) == '1') selected @endif>Sì</option>
                <option value="0" @if (old('is_complete', $project->is_complete) == '0') selected @endif>No</option>
            </select>
            @error('is_complete')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Modifica</button>
    </form>
@endsection
