<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #99B6C6">
            <div class="container-fluid">
              <a class="navbar-brand" href="../index.html">Anasayfa</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="../sehrim.html">Şehrim</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../iletisim.html">İletişim</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../ozgecmis.html">Özgeçmiş</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../mirasimiz.html">Mirasımız</a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="../login.html" data-target="#myModal" data-toggle="modal">Giriş Yap</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <section class="gradient-custom">
        <div class="container py-5 mt-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card text-white" style="background-color: #93B1C1; border-radius: 1rem;">
                <div class="card-body p-5 text-left">
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <?php

                      $hesapMail = 'b211210010@sakarya.edu.tr';
                      $hesapSifre = 'b211210010';
                      $girilenMail = $_POST['inputMail'];
                      $girilenSifre = $_POST['inputPassword'];
                      if($girilenMail == $hesapMail && $girilenSifre == $hesapSifre){
                        echo '<p style = "text-align:center">Giriş işlemi başarılı.</p>';
                        echo '<h2 class="fw-bold mb-2" style="text-align: center;">Hoşgeldiniz B211210010</h2>';
                      }
                      else{
                        echo '<p class="text-italic" style = "text-align:center">Giriş işlemi başarısız.</p>';
                        echo '<p class="fw-bold text-center giris-uyari mb-2">Kullanıcı bilgileri yanlış.</p>';
                      }
                    
                    
                    
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

   
</body>
</html>