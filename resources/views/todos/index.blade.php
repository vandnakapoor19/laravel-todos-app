@extends('layouts.app')
@section('title')
    Todos
@endsection
@section('content')
       <h1 class="text-center my-5">TODOS</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">
                            Todos
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($todos as $data )
                                    <li class="list-group-item">{{$data->name}}
                                        @if(!$data->completed)
                                            <a href="/todos/{{$data->id}}/updatestatus" class="btn btn-warning btn-sm float-right">Complete</a>
                                        @endif
                                        <a href="/todos/{{$data->id}}" class="btn btn-primary btn-sm float-right">View</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                
                </div>
            </div>
    @endsection