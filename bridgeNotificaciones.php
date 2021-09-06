<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" charset="utf-8" src="./lib/jquery/jquery-3.4.1.js"></script>
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
    // file_put_contents('/var/log/nginx/error.log', "_GET:".print_r($_GET, TRUE)."\n", FILE_APPEND);
    // $data = base64_decode($_GET["data"]);
    // file_put_contents('/var/log/nginx/error.log', "data: ".print_r($data, TRUE)."\n", FILE_APPEND);
    list($username, $password, $url) = explode('&', base64_decode($_GET["data"]));

    $username=explode('=', $username)[1];
    $password=explode('=', $password)[1];
    $url=base64_decode(explode('=', $url)[1]);

    // file_put_contents('/var/log/nginx/error.log', "username:".print_r($username, TRUE)."\n", FILE_APPEND);
    // file_put_contents('/var/log/nginx/error.log', "password:".print_r($password, TRUE)."\n", FILE_APPEND);
    // file_put_contents('/var/log/nginx/error.log', "url:".print_r($url, TRUE)."\n", FILE_APPEND);
  ?>

  <form id="loginform" name="formulario" method="POST">
    <input name="username" type="hidden" id="username" value="<?php echo "$username";?>">
    <input name="password" type="hidden" id="password" value="<?php echo "$password";?>">
  </form>

  <script>
    try {
      // console.log($("#loginform").serialize());
        $.post('https://aulavirtualpre2020.uv.cl/login/index.php', $("#loginform").serialize(), function(data){
          try{
            // console.log(data);
            
            window.location.replace("<?php echo 'https://aulavirtualpre2020.uv.cl/'.$url;?>");
          } catch(error) {
            console.log(error);
          }
        });
    } catch(error) {
      console.log(error);
    }
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
