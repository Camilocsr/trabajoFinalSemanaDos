<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!--FRAMEWORK BOOSTRAP-5-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--flexboxgrid-->
    <link rel="stylesheet" href="../css/flexboxgrid.min.css">
    <!--css Principal-->
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div>
                        <div class="desplegable">
                            <button class="boton">Tablas de multiplicar</button>
                            <div class="links">
                                <button id="uno"><strong>1</strong></button>
                                <button id="dos"><strong>2</strong></button>
                                <button id="tres"><strong>3</strong></button>
                                <button id="cuatro"><strong>4</strong></button>
                                <button id="sinco"><strong>5</strong></button>
                                <button id="seis"><strong>6</strong></button>
                                <button id="siete"><strong>7</strong></button>
                                <button id="ocho"><strong>8</strong></button>
                                <button id="nueve"><strong>9</strong></button>
                                <button id="diez"><strong>10</strong></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <form>
                            <div>
                                <label for="">Numero 1:</label>
                                <input id="inpt2" type="text">
                            </div>
                            <div>
                                <label for="">Numero 2:</label>
                                <input id="inpt1" type="text">
                            </div>
                            <div>
                                <label for="">sumar</label>
                                <input id="radio1" type="radio">
                            </div>
                            <div>
                                <label id="radio2" for="">Restar</label>
                                <input style="background-color: red;" type="radio">
                            </div>
                            <p id="parrafo" style="color: darkmagenta;"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/tabla.js"></script>
</body>
</html>