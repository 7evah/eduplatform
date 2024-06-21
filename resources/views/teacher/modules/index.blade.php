
@extends('layouts.apps')

@section('content')
<div class="container">
    <h1>Modules</h1>
    <a href="{{ route('modules.create') }}" class="btn btn-primary">Create Module</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($modules as $module)
            <tr>
                <td>{{ $module->title }}</td>
                <td>{{ $module->description }}</td>
                <td>
                    <a href="{{ route('modules.edit', $module->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('modules.destroy', $module->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('lessons.index', $module->id) }}" class="btn btn-info">Lessons</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
