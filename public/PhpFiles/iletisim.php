<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS-Files/global.css" type="text/css">
  <link rel="stylesheet" href="../CSS-Files/iletisim.css" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
    <title>Document</title>
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

  <div class="phpSize">
      <?php

        if($_POST["submit"]){

            $isim=$_POST["isim"];
            $soyisim=$_POST["soyisim"];
            $mail=$_POST["mail"];
            $cinsiyet=$_POST["cinsiyet"];
            $secim=$_POST["secim"];
            $mesaj=$_POST["mesaj"];

            if($isim!=""&&$soyisim!=""&&$mail!=""&&$cinsiyet!=""&&$secim!="ilkSecim"){
                echo "<span>$isim $soyisim</span> <br>";
                echo "$mail <br>";
                echo "$cinsiyet <br>";
                echo "$secim sayesinde keşfedilmiş<br>";
                echo "<span style=\"font-size:1.5rem\";>$mesaj</span>";
            }else{echo "başaramadık ab";}

        }else{header("Location:../../src/iletisim.html");}

        

      ?>
  </div>
</body>
</html>