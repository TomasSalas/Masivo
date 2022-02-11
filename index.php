<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso Masivo</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./assets/main.js"></script> 
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
    
?>

<body>
    <div class="container">
        <div class="row pt-5">
            <form method="post" id="form_excel" name="form_excel" enctype="multipart/form-data">
                <div class="mb-3">
                    <!-- <select class="form-select" aria-label="Default select example" id="select_espe">
                        <option selected value = "0">Seleccione:</option>
                        <option value="1">Monitor</option>
                        <option value="2">Computador</option>
                        <option value="3">Impresora</option>
                    </select> -->
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control" name="file" id="file">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-submit" id="btn-submit" name="btn-submit">Importar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>