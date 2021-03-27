@extends('layouts.main')

@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-center" style="width: 40%">
            <h1 class="display-2">Todo App</h1>
            <form action="{{ route('task.update', $task->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="input-group mb-3 w-100">
                    <input type="text"class="form-control form-control-lg" name="message" value="{{ $task->message }}" placeholder="Type here...">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit" >Edit Todo</button>
                    </div>
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
