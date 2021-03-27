@extends('layouts.main')

@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-center" style="width: 40%">
            <h1 class="display-2">Todo App</h1>
            <form action="" method="post">
            @csrf
            <div class="input-group mb-3 w-100">
                <input type="text"class="form-control form-control-lg" name="title" placeholder="Type here...">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit" >Add to the list</button>
                </div>
            </div>
            </form>

            <h2 class="display-6">My Todo's:</h2>
            @if(count($tasks) != 0)
                <div class="card-body">
                    @foreach($tasks as $task)
                        <div class="row mt-1">
                            <div class="col-1">
                                @if($task->completed == 0)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                @endif
                            </div>
                            <div class="col-8">
                                <p class="lead">{{$task->message}}</p>
                            </div>
                            <div class="col-1">
                                @if($task->completed == 0)
                                    <form action="" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="completed" value="1" hidden>
                                        <button class="btn btn-success btn-sm" type="submit">
                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                                            </svg>
                                        </button>
                                    </form>
                                @else
                                    <form action="" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="completed" value="0" hidden>
                                        <button class="btn btn-warning btn-sm" type="submit">
                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-app" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M11 2H5a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"/>
                                            </svg>
                                        </button>
                                    </form>
                                    @endif
                                    </form>
                            </div>
                            <div class="col-1">
                                <form action="" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-info btn-sm" type="submit" name="button"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                        </svg></button>
                                </form>
                            </div>
                            <div class="col-1">
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit" name="button">
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="m-3">
                    <p>Here will be your tasks</p>
                </div>
            @endif
        </div>
    </div>
@endsection
