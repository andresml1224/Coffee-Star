<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/formlogin.css">
</head>
<body>
<div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Registro</h1>
						 </div>
					</div>
                    <form action="Registrar.php" method="post" name="registro">

<div class="form-group"> <!-- Full Name -->
    <label for="full_name_id" class="control-label">Nombre</label>
    <input type="text" class="form-control" id="full_name_id" name="Nombre">
</div>    

<div class="form-group"> <!-- Street 1 -->
    <label for="street1_id" class="control-label">Documento</label>
    <input type="text" class="form-control" id="street1_id" name="Documento">
</div>                    
                        
<div class="form-group"> <!-- Street 2 -->
    <label for="street2_id" class="control-label">Correo</label>
    <input type="email" class="form-control" id="street2_id" name="Correo">
</div>                                    
                        
<div class="form-group"> <!-- State Button -->
    <label for="state_id" class="control-label">Rol</label>
    <select class="form-control" id="state_id" name="Rol">
    <option value="0" selected>---------</option>
    <option value="1">Administrador</option>
    <option value="3">Chef</option>
    <option value="2">Mesero</option>
    <option value="4">Cliente</option>
    </select>                    
</div>       

<div class="col-md-12 text-center ">
    <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" value="Registrar" name="Registrar">Registrar</button><br>
    
</div>  
</form>

    <a href="Login.php"><button class="btn btn-block mybtn btn-primary tx-tfm" value="Regresar">Regresar</button></a>      
</body>
</html>