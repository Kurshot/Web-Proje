<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/app.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #99B6C6;">
            <div class="container-fluid">
              <a class="navbar-brand" href="../html/index.html">Anasayfa</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="../html/sehrim.html">Şehrim</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../html/iletisim.html">İletişim</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../html/ozgecmis.html">Özgeçmiş</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../html/mirasimiz.html">Mirasımız</a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="../html/login.html" data-target="#myModal" data-toggle="modal">Giriş Yap</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <div class="container mt-4">
      <h1 class="display-5">Mesaj gönderildi</h1>

      <?php

        echo '
        <div class="table-responsive">
          <table class="table table-striped mt-4">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Bilgiler</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Ad Soyad</th>
              <td>'.$_POST['isim'].'</td>
            </tr>
            <tr>
              <th>Mail Adresi</th>
              <td>'.$_POST['mail'].'</td>
            </tr>
            <tr>
              <th>Şehir</th>
              <td>'.$_POST['sehir'].'</td>
            </tr>
            <tr>
              <th>Mesaj Türü</th>
              <td>'.$_POST['mesajTuru'].'</td>
            </tr>
            <tr>
              <th>Mesaj</th>
              <td>'.$_POST['mesaj'].'</td>
            </tr>
            
            
          </tbody>
      </table>
      </div>
      
      '
    
    
      ?>
    </div>

    
    
</body>
</html>