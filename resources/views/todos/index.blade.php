<!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  crossorigin="anonymous">
        </head> 
        <body>
        <div class="container">
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
                                    <li class="list-group-item">{{$data->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        </body>
    </html>