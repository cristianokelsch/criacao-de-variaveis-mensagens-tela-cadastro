<html>
    <head>
        <meta charset="UTF-8">
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>
    <body>
        
        <?php
        $nome = 'meu nome';
        $idade = 12;
        $verificado = true;
        
        echo 'Nome:'. $nome.'<br/>';
        echo 'Idade:'. $idade.'<br/>';
        echo 'Verificado:'. $verificado;   
        ?>
        
        <div class="form-group">
            <div class="col-md-1">
                <a href="cadastro.php"> <button type="button" id="cadastro" name="cadastro" class="btn btn-warning">Cadastro</button> </a>
            </div>
        </div>
    </body>
</html>
