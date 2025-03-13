@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Aufgabe bearbeiten</h2>

            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- PUT-Anfrage zur Aktualisierung -->
                <div class="mb-3">
                    <label for="titel" class="form-label">Titel</label>
                    <input type="text"
                           class="form-control @error('titel') is-invalid @enderror"
                           id="titel"
                           name="titel"
                           value="{{ old('titel', $task->titel) }}">
                    @error('titel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="beschreibung" class="form-label">Beschreibung</label>
                    <textarea class="form-control"
                              id="beschreibung"
                              name="beschreibung">{{ old('beschreibung', $task->beschreibung) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Speichern</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Zurück</a>
            </form>
        </div>
    </div>
@endsection
