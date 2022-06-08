<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transacción</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <style>
        h1 {
            font-size: 75px;
        }

        /*body {
            background-image: url("dist/img/backgr2.jpg");
        }*/
    </style>

</head>

<body>
    <div class="text-center">
        <h1 class=text-white>Proceso de transaccion
    </div>
    <div id="container p-3 my-3 border">
        <div class="card fixed text-left" style="width: 30rem;">
            <form>

                <div class="form-group text-black">
                    <label for="exampleInputName">Cantidad requerida en pesos</label>
                    <br>
                    <input type="number" min="0" step="1" />
                    <div class="form-group text-black">
                        <label for="exampleInputDate">Plazo establecido en días</label>
                        <br>
                        <input type="number" min="0" step="1" />
                    </div>
                    <label for="exampleInputDate text-black">Plazo establecido en mesess</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecciona un mes</option>
                        <option value="0">Cero</option>
                        <option value="1">Uno a tres</option>
                        <option value="2">Tres a seis</option>
                        <option value="3">Seis a nueve</option>
                        <option value="4">Nueve a doce</option>
                    </select>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-black">Descripcion detallada de lo requerido</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-check text">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <p class="text-black">He leido y acepto los terminos y condiciones</p>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn btn-dark">Realizar transaccion</button>
                    </div>
            </form>
        </div>
    </div>
    <p>&nbsp;&nbsp;</p>
    </div>
    <br>
</body>

</html>