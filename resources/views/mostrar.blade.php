<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-center">
        <main style="width: 30%;" class="">
            <h1 class="text-center">Informacion del Cliente</h1>
                <div class="container-fluid border border-2 border-secondary rounded-4 p-4 bg-light">
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label fw-bold">Nombres:</label>
                        <label class="form-label"><?=$_POST["name"] ?></label>
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label fw-bold">Apellidos:</label>
                        <label class="form-label">Nombres y nombres</label>
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label fw-bold">Fecha de nacimiento:</label>
                        <label class="form-label">Nombres y nombres</label>
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label for="" class="form-label fw-bold">Direccion:</label>
                        <label class="form-label">Nombres y nombres</label>
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label for="" class="form-label fw-bold">Productos favoritos:</label>
                        <label class="form-label">Nombres y nombres</label>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="" class="btn btn-primary me-4">Editar</a>
                        <a href="" class="btn btn-danger">Borrar</a>
                    </div>
                    
                </div>
        </main>
    </div>
    
</body>
</html>