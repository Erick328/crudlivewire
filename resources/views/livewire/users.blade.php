<div>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Personas</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-11">
                    <div class="card">
                        <div class="card-header" style="background: skyblue">
                            <h2 style="text-align: center; color: white"><b>CRUD PERSONAS</b></h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-striped">
                                <thead style="background: skyblue">
                                    <tr style="color: white">
                                        <th >ID</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td><a href="{{ route('profile.show') }}" class="btn btn-primary">Ver</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</div>
