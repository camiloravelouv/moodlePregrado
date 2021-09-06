<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">

    @font-face {
        font-family: 'Swiss721CondensedBT';
        src: url('./bridge/Swiss721CondensedBT.ttf') format('truetype');
    }

    .init {
        width: 100%;
        height: 100%;
        padding-top: 7%;
        text-align: center;
        position: fixed;
        background-color: #004A7C !important;
    }

    body{
	margin: 0px;
        font-family: "Swiss721CondensedBT", Fallback, sans-serif !important;
    }

</style>

</head>
 <?php
    //$password=$_GET["pa1"];
    //$username=$_GET["pa2"];
    list($username, $password, $url) = explode('&', base64_decode($_GET["data"]));

    $username=explode('=', $username)[1];
    $password=explode('=', $password)[1];
    $url=base64_decode(explode('=', $url)[1]);


 ?>
 <form action="https://aulavirtualpre2020.uv.cl/login/index.php" name="formulario" method="POST">
 
   <input name="username" type="hidden" id="username" value="<?php echo "$username";?>">
   <input name="password" type="hidden" id="password" value="<?php echo "$password";?>">
 
 </form>
<script>
   window.onload=function(){
   document.formulario.submit()};
</script>

<body>
    <div class="init">
      <br />
      <br />
      <br />
      <img src="./bridge/loading.gif" height="125">
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <span style="color:white;font-size: 2em">AULA VIRTUAL<br>PREGRADO</span>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />

      <!-- LOGO UV -->
      <img src="https://repositorio.uv.cl/imagenes/logouv/logoUV.png" style="display:initial !important;height: 116px;">
    </div>
</body>

</html>
