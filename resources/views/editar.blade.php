<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar propiedad</title>
</head>
<body>    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Editar Propiedad</h2>
                <div class="form-group">
                    <label for="color">Codigo Propiedad</label>
                    <input type="text" class="form-control" name="color" id="color" value="{{ $propiedad->codigoPropiedad}}" readonly/>
                </div>

                <br>
                <form action='{{route('propiedad.actualizar', $propiedad->codigoPropiedad)}}' method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" name="color" id="color" value="{{ $propiedad->color }}"/>
                    </div>
                    <div class="form-group">
                        <label for="metros">Metros:</label>
                        <input type="text"class="form-control" name="metros" value="{{$propiedad->metros}}"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Tipo Propiedad:</label>
                        <input type="text" class="form-control" name="tipoPropiedad" value="{{$propiedad->tipoPropiedad}}"/>
                    </div>
                    <div class="form-group">
                        <label for="costomtr">Costo por metro:</label>
                        <input type="text" class="form-control" name="costomtr" value="{{$propiedad->costoxmtr}}"/>
                    </div>
                    <div class="form-group">
                        <label for="codigoduenio">Codigo duenio:</label>
                        <input type="text" class="form-control" name="codigoduenio" value="{{$propiedad->codigoDuenio}}"/>
                    </div>
                    <div class="form-group">
                        <label for="domicilio">Domicilio:</label>
                        <input type="text" class="form-control" name="domicilio" value="{{$propiedad->domicilio}}"/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>