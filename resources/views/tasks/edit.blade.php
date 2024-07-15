@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="my-4">Edit Task</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('tasks.update',['task'=>$task->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
                </div>
                <div class="form-group form-check">
                    <input type="hidden" name="is_completed" value="0">
                    <input type="checkbox" class="form-check-input" id="is_completed" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_completed">Completed</label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
