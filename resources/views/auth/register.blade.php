<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
</head>
<body>
    <h1>Registro Usuarios</h1>
        <div class="container">
            <form action="{{ route ( 'guarda_usuarios' )}}" method="POST">
            {{ csrf_field() }}

                <div class="wrap-input100">
                    <label for="">Id usuario</label>
                    <input class="input100" type="text" name="idu" value="{{$idesigue}}" placeholder="ID" disabled>
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Nombre</label>
                    <input class="input100" type="text" name="nombre" value="" placeholder="Nombre Usuario" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Empresa</label>
                    <input class="input100" type="text" name="empresa" value="" placeholder="Empresa" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Detalles</label>
                    <input class="input100" type="text" name="detalles" value="" placeholder="Detalles" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Tipo usuario</label>
                    <input class="input100" type="text" name="tipou" value="" placeholder="Tipo usuario" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Foto de perfil</label>
                    <input class="input100" type="file" name="fotou" value="" placeholder="ID" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Correo</label>
                    <input class="input100" type="text" name="correo" value="" placeholder="Correo" >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Password</label>
                    <input class="input100" type="text" name="password" value="" placeholder="Password">
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div><br>
    
                <div>
                    <button>guardar usuario</button>
                </div>
            </form>
        </div>
</body>
</html>