<!DOCTYPE html>
<html>
  <head lang="es">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"> </script>
     <script type="text/javascript" src="Validacion.js"></script>
  <!--  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
   <script type="text/javascript" src="Validacion.js"></script>
    <link rel="stylesheet" type="text/css" href="Css/Registro.css">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <style>
    .form-search input, .form-inline input, .form-horizontal input, .form-search textarea, .form-inline textarea, .form-horizontal textarea, .form-search select, .form-inline select, .form-horizontal select, .form-search .help-inline, .form-inline .help-inline, .form-horizontal .help-inline, .form-search .uneditable-input, .form-inline .uneditable-input, .form-horizontal .uneditable-input, .form-search .input-prepend, .form-inline .input-prepend, .form-horizontal .input-prepend, .form-search .input-append, .form-inline .input-append, .form-horizontal .input-append {
    display: inline-block !important;
    *display: inline;
    margin-bottom: 0 !important;
    vertical-align: middle !important;
    *zoom: 1 !important;
}
textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    background-color: #fff;
    border: 1px solid #ccc;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    -webkit-transition: border linear .2s,box-shadow linear .2s;
    -moz-transition: border linear .2s,box-shadow linear .2s;
    -o-transition: border linear .2s,box-shadow linear .2s;
    transition: border linear .2s,box-shadow linear .2s;
}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    display: inline-block;
    height: 20px;
    padding: 4px 6px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 20px;
    color: #555;
    vertical-align: middle;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
input, textarea, .uneditable-input {
    margin-left: 0;
}
input, textarea, .uneditable-input {
    width: 206px;
}
input, button, select, textarea {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
label, input, button, select, textarea {
    font-size: 14px;
    font-weight: normal;
    line-height: 20px;
}
button, input {
    *overflow: visible;
    line-height: normal;
}
button, input, select, textarea {
    margin: 0;
        margin-bottom: 0px;
        margin-left: 0px;
    font-size: 100%;
    vertical-align: middle;
}

    </style>
  </head>
  <body>
    <div class="container" style="margin-top:90px">
      <div class="row">
        <div class="col">
            <h1> Completa este formulario </h1><br>
            <h6>y enterate por que somos una marca superior</h6>
        </div>
        <div class="col">
      <form class="noform-inline" style="width:100%"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
        <input type="text" name="Nombre" class="input-lg"placeholder="Nombre:" id="Nombre" style="width:48%">
        <input type="text" name="Apelli" class="input-lg"placeholder="Apellido:" id="Apelli" style="width:48%"><br><br>
        <input type="text" name="Cel" class="input-lg"placeholder="Número de celular:" id="Cel" style="width:48%">
        <label id="Gen">Género:</label>
        <!--Botones:genero:-->
        <div id="bottons">
          <input type="button" class="btn btn-info" id="BtnSx1" value="M" style="max-width: 50px;" active="false" name="btnM"/>
          <input type="button" class="btn btn-info" id="BtnSx2" value="F"  style="max-width: 50px;" active="false" name="btnF"/>
          <input type="hidden" name="Genero" id="Genero" value="-"/>
          <br><br>
        </div>
        <input class="form-control input-lg" type="text" placeholder="Email:" name="Maill" id="Pro" style="width:100%"><br><br>
        <label id="Lb">¿Tiene la intención de cambiar su vehículo a uno nuevo? </label>
          <select class="dropdown" style="height:40px; float:right" name="MiLista">
            <option  value="" selected="selected"></option>
            <option  value="Si">Si</option>
            <option  value="No">No</option>
          </select>
        <br><br>
          <div style="background-color:#6e6e6e; text-align:center; width: 100%; border-radius:5px; color:white; height:40px">
            <span class="label" id="Box">
              ¿En Cuánto tiempo piensa estrenar?</span>
              <!--Botones meses-->
          </div>
              <br><br>
              <div id="Meses">
                <button type="button" class="btn btn-primary btn-meses" id="Uno">1-3 meses</button>
                <button type="button" class="btn btn-primary btn-meses" id="MaTres">3-6 meses</button>
                <button type="button" class="btn btn-primary btn-meses" id="MaSeis">Más de 6 meses</button><br><br>
                <input type="hidden" name="SelMes" id="MiMes" value="-"/>
              </div>
          <label id="Lb2">¿En qué vehículo está interesado?</label>
          <img src="Imagenes/Carros.png" id="Carros"><br>
            <!--Radio botones-->
              <div class="group-radios" style="padding-left:125px" id="Radios">
                <input type="radio" name="optradio" class="radio-inline" style="width:100px !important" value="Transporte" selected="true">
                <input type="radio" name="optradio" class="radio-inline" style="width:100px !important" value="Automovil">
                <input type="radio" name="optradio" class="radio-inline" style="width:100px !important" value="Camion">
              </div>
              <br><br>
                <div style="background-color:#6e6e6e; text-align:center; width: 100%; border-radius:5px; color:white; height:40px">
                  <span class="label" id="Box">¿Requiere financiacion sin intereses?</span><br><br>
                </div>
                <br>
                  <div style="width:28%; float:left">
                      <label id="Lb2">¿A cuanto tiempo?</label>
                  </div>
                    <!--Financiacion-->
                    <div style="width:68% float:right" id="Finan">
                      <button type="button" class="btn btn-primary btn-finan" style="width:23%" id="Ca1">12 meses</button>
                      <button type="button" class="btn btn-primary btn-finan" style="width:23%" id="Ca2">36 meses</button>
                      <button type="button" class="btn btn-primary btn-finan" style="width:23%" id="Ca3">60 meses</button><br><br>
                      <input type="hidden" name="FnCio" id="FnSon" value="-"/>
                    </div>
                        <div class="checkbox" style="float:left;">
                          <input type="checkbox" value=" " style="width:0px; float:left" class="checkbox" id="checkbox" name="Checa">
                          <label id="Lb" style="width:97%; padding-left:6px; text-align:justify; margin-top: -5px; ">Autorizo a Aspen Trucks S.A. a que me envie información comercial via E-mail,Telefono, mensaje de texto,correo.Conozca mas de nuestra política de privacidad haciendo click aqui </label>
                        </div>
                        <br><br><br>
                         <button type="submit" class="btn btn-success" style="float:right; background-color:#2a2943;" id="Enviar" name="BotonEnd">Enviar</button>
                          </form>
                          </div>
                          </div>
                          <br><br>

                      <?php
                      //require('dbconnect.php');
                        if ( (isset($_POST['BotonEnd']))  ) // ah ademas de validar el objeto que dispara el evento en este caso un boton de un form
                        {
                                //&& (isset($_POST['optradio']))
                                $Nombres=$_POST['Nombre'];
                                $Apellidos=$_POST['Apelli'];
                                $Celular=$_POST['Cel'];
                                $Genero=$_POST['Genero'];
                                $Mail=$_POST['Maill'];
                                $OpcList=$_POST['MiLista'];
                                $Vehiculo=$_POST['optradio'];
                                $Mesess=$_POST['SelMes'];
                                $FanZa=$_POST['FnCio'];
                                $Autoriza = isset($_POST['Checa'])  ? "Si" : "No";
                                //echo "$Nombres \n";
                                //  echo "$Apellidos \n";
                                //  echo "$Celular\n";
                                // echo "$Genero\n";
                                // echo "$Mail\n";
                                //  echo "$OpcList \n";
                                // echo " $Mesess \n";
                                //echo "$Vehiculo \n";
                                // echo "$FanZa \n";
                                // echo "$Autoriza \n";
                                //  echo $conexion_db ? 'Conexion exitosa' : 'Conexion fallida';
                                //Inserta en la tabla  Persona:
                              //  $MiInsert="INSERT INTO persona (Nombre,Apellido,Celular,Genero,Email,NueVeh,TieEstrenar,TipoVeh,Financiacion,Autorizo) values('$Nombres ', '$Apellidos', '$Celular', '$Genero','$Mail', '$OpcList', '$Mesess ', '$Vehiculo', '$FanZa','$Autoriza' )";
                                //  echo "$MiInsert";
                              //  $result =  mysql_query($MiInsert,$conexion_db);
                              //  if($result){
                                // echo "Producto creado correctamente.";
                                //Eviando:
                                require("phpmailer/class.phpmailer.php");
                                $mail = new PHPMailer();
                                $mail->From     = $Mail;
                                $mail->FromName = $Nombres;
                                $mail->AddAddress("$Mail"); //
                                $mail->IsHTML(true);
                                $mail->Subject  =  "Contacto";
                                $mail->Body     =  "Nombre: $Nombres \n<br />".
                                "Email: $Mail \n<br />".
                                // Datos del servidor SMTP
                                $mail->IsSMTP();
                                $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
                                $mail->SMTPAuth = true;
                                $mail->Username = "fabiansochabarbon@gmail.com";  // Correo Electrónico
                                $mail->Password = "Vuelta.Por_elUniverso20"; // Contraseña
                                if ($mail->Send())
                                {
                                echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
                                }
                                  else
                                  {
                                      echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
                                  }
                                 //}
                                // else
                              //   {
                              //     echo "Usuario no registrado" ;
                                // }
                          }
      ?>
  </body>
</html>
