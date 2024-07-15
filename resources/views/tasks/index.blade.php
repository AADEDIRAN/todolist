@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="my-4">To-Do List</h2>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add New Task</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Completed</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->is_completed ? 'Yes' : 'No' }}</td>
                            <td>
                                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
