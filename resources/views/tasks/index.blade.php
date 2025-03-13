@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="float-end mb-4">
                <a href="{{ route('tasks.create') }}" class="btn btn-success">Neue Aufgabe</a>
            </div>

            @if(session('erfolg'))
                <div class="alert alert-success">
                    {{ session('erfolg') }}
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titel</th>
                        <th>Status</th>
                        <th>Aktionen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->titel }}</td>
                            <td>
                                @if($task->erledigt)
                                    <span class="badge bg-success">Erledigt</span>
                                @else
                                    <span class="badge bg-warning">Offen</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('tasks.edit', $task->id) }}"
                                   class="btn btn-sm btn-primary">Bearbeiten</a>

                                <form action="{{ route('tasks.destroy', $task->id) }}"
                                      method="POST"
                                      style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Löschen</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
