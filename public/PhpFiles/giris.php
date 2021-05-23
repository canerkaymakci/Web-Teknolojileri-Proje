<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="../bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS-Files/global.css" type="text/css">
  <link rel="stylesheet" href="../CSS-Files/giris.css" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
    <title>Hoşgeldiniz!</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light HeaderBackground">
      <div class="container-fluid p-2">
        <a class="navbar-brand" href="../../src/index.html">Caner ile Buram Buram Bursa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="../../src/memleket.html">Memleketim</a>
            <a class="nav-link" href="../../src/miras.html">Miraslarımız</a>
            <a class="nav-link" href="../../src/ozgecmis.html">Özgeçmiş</a>
            <a class="nav-link" href="../../src/iletisim.html">İletişim</a>
            <a class="nav-link" href="../../src/giris.html">Giriş</a>
          </div>
        </div>
      </div>
    </nav>
  </header>


<div class="phpFont">
<?php

error_reporting(0);
if($_POST["submit"]){
    $kullaniciAdi=$_POST["kullaniciAdi"];
    $sifre=$_POST["sifre"];

    if($kullaniciAdi=="b191210095@sakarya.edu.tr"&&$sifre=="b191210095"){
        
      
      echo "Hoşgeldin B191210095!";

      
    }
    else{
        header("Location:../../src/giris.html");
    }
}else{
  header("Location:../../src/giris.html");
}
?>
</div>
</body>
</html>

