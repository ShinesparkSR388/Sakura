<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <main>
        <h1 class="p-0 m-0 mt-5">Nuevo Usuario</h1>
        <form action="http://127.0.0.1:8000/RegistroUsuario" method="POST" id="miFormulario">
            @csrf
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <input class="form-control" type="text" name="name" placeholder="Name">
                </div>
                <div class="col">
                    <input class="form-control" type="text" name="email" placeholder="example@example.com">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <input class="form-control" type="text" name="age" placeholder="Age">
                </div>
                <div class="col"></div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <input class="form-control" type="text" name="user" placeholder="Username">
                </div>
                <div class="col">
                    <input class="form-control" type="password" name="pass" placeholder="Password">
                </div>
                <input class="btn btn-success mt-3" type="submit" value="Guardar">
            </div>
        </form>
    </main>
    <script src="/a.js"></script>
</body>
</html>

