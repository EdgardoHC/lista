<!DOCTYPE html>
<html>
    <head>
        <meta lang="en" charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Llenar una lista</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php
        require './inc/conf.php';
        ?>
        <div class="container mt-3">
            <h2>Llenando una lista desplegable con PHP, Jquery y MySQL</h2>
            <p>codeatr</p>
            <form>
                <label for="resultado">Resultado:</label>                                
                <select class="form-select form-select mt-3" id="resultado" name="resultado" aria-label="ejemplo de una lista">
                    <option value="">[Seleccione]</option> 
                </select>
            </form>
        </div>
        <script src="js/index.js" type="text/javascript"></script>
    </body>
</html>
