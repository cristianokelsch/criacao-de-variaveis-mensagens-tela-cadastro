<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>
    <body>
        <div class="container-fluid">                  
            <div  class="alert alert-success" role="alert"> 
                <p class="text-center"><strong> Cadastro </strong></p>
            </div>

            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                <fieldset>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="nome">Nome</label>  
                        <div class="col-md-5">
                            <input type="text" placeholder="Nome" class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="email">Email</label>  
                        <div class="col-md-5">
                            <input type="email" placeholder="E-mail" class="form-control input-md" required=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button type="submit" id="gravar_usuario" name="gravar_usuario" class="btn btn-success" >Salvar</button>
                        </div>
                    </div>
                </fieldset>
            </form>        
        </div>

    </body>
</html>