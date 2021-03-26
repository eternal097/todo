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
            <div class="w-100">
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <div class="p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                    <p>Привет!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
