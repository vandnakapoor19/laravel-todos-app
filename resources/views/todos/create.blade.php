@extends('layouts.app')

@section('title')
    Add Todo
@endsection

@section('content')

    <h1 class="text-center">Add Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Add Todo</div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <ul class="list-group">
                                <li class="list-group-item">
                                    {{$error}}
                                </li>
                            </ul>
                        @endforeach
                    </div>
                @endif
                <form action="/store-todos" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <textarea name="description"cols="5" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                     <button type="submit" class="btn btn-success">Save Todo</button>
                    </div>
                </form>
            </div>
        </div>
          
        </div>
    </div>
@endsection