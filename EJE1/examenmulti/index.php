<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilologin.css">
</head>

<body>
    <div class="conte">
        <div class="bar">
            <div class="titulo">
                BIENVENIDO A LA FACULTAD DE CIENCIAS PURAS Y NATURALES
            </div>
        </div>
        <div class="contenido">
            <div class="login">
                <div>
                    Login Docentes
                </div>
                <br>
                <div id="formulario">
                <form action="./entrada/entra.php" method="post">
                
                    <label for="usuario">Usuario: </label>
                            <input type="text" id="usuario" name="usu"><BR><BR>
                    <label for="pass">Password: </label>
                            <input type="password" id="pass" name="pass"><BR><BR>
                    <input class="boton" type="submit" value="Ingresar" >
                    
                </form>
                </div>
            </div>
            <div class="login">
                <div>
                    Login Estudiantes
                </div>
                <br>
                <div id="formulario">
                <form action="./entrada/entra.php" method="post">
                
                    <label for="usuario">Usuario: </label>
                            <input type="text" id="usuario" name="usu"><BR><BR>
                    <label for="pass">Password: </label>
                            <input type="password" id="pass" name="pass"><BR><BR>
                    <input class="boton" type="submit" value="Ingresar" >
                    
                </form>
                </div>
            </div>
            
        </div>
        
    </div>
    
</body>

</html>