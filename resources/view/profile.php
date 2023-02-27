<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../css/asset/akmdrhan.png">
    <link rel="stylesheet" href="../css/style.css">
    <title>Akmdrhan</title>
</head>
<body>
<section class="layout">
  <div class="header">
    <!-- header kiri -->
    <div class="header-left"> 
    <div class="bg-image-hover-zoom1">
    <div class="dropdown show">
      <a class="btn btn-secondary dropdown-toggle" style="background: none;border:none;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img id="menu" src="../css/asset/menu.png" ></a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="../../index.php">Home</a>
    <a class="dropdown-item" href="#">Portofolio</a>
    <a class="dropdown-item" href="#">Certificate</a>
    <a class="dropdown-item" href="profile.php">Profile</a>
      </div>
    </div>
    </div>
      <img id="akmdrhan" src="../css/asset/akmdrhan.png" alt="akmdrhan">
    </div>
    <!-- header kanan -->
    <div class="header-right"> 
      <a href="https://www.linkedin.com/in/akmdrhan/">
        <div class="bg-image-hover-zoom">
          <img id="linkdn" src="../css/asset/linkedin.png" alt="linkdn">
        </div>
      </a>
      <a href="https://github.com/Akmdrhannn">
      <div class="bg-image-hover-zoom">
        <img id="github" src="../css/asset/github.png" alt="github">
      </div>  
      </a>
    </div>
  </div>

  <!-- Konten utama -->
  <div class="main">
    
  <div class="container py-3">
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <h2 class="card-title">Akhmad Raihan Aulia Fikri</h2>
          <p class="card-text">
            Hai, perkenalkan namaku seperti pada judul. Panggil saja saya Raihan. Saya lahir pada 28 Mei 2002 di kota Bangkalan, Madura, Indonesia. Sekarang umur saya 20 tahun dan saya sedang menempuh pendidikan S1 prodi Teknik Informatika di Universitas Trunojoyo Madura. Salam kenal dan be the 1%.
          </p>
          <hr>
          <p class="card-text">Hello, my complete name same like the tittle. You can call me Raihan. I was born on 28th May 2002 in Bangkalan City, Madura, Indonesia. Im twenty (20) right now and i currently pursuing a bachelor's degree in informatics engineering at Trunojoyo Madura University. Nice to meet you and be the 1%.</p>
          <br>
          <button onclick="myFunction()">Click me to see something</button> 
          <p id="boo"></p>
        </div>
      </div>
      <!-- Carousel start -->
      <div class="col-md-5">
        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
            <li data-target="#CarouselTest" data-slide-to="1"></li>
            <li data-target="#CarouselTest" data-slide-to="2"></li>
            <li data-target="#CarouselTest" data-slide-to="2"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block" src="../css/asset/prof11.JPG" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="../css/asset/prof22.JPG" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="../css/asset/prof33.JPG" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="../css/asset/prof44.JPG" alt="">
            </div>
            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
          </div>
        </div>
      </div>
      <!-- End of carousel -->
    </div>
  </div>
  <!-- End of card -->

</div>

  </div>
  
  <!-- footer -->
  <div class="footer">
    <footer  class="bg-dark text-center text-lg-start text-white" >
      <div class="container d-flex justify-content-center py-5">
        <div class="bg-image-hover-zoom">
          <button type="button" class="btn btn-secondary btn-lg btn-floating mx-2" style="background-color: #1C1C1C;border-radius: 50px;">
            <a href="mailto:akh.raihanaf@gmail.com"><img src="../css/asset/gmail.png"></a>
          </button>
        </div>
        <div class="bg-image-hover-zoom">
          <button type="button" class="btn btn-secondary btn-lg btn-floating mx-2" style="background-color: #1C1C1C;border-radius: 50px;">
            <a href="https://www.instagram.com/akmdrhannn_/"><img src="../css/asset/instagram.png"></a>
          </button>
      </div>
      <div class="bg-image-hover-zoom">
        <button type="button" class="btn btn-secondary btn-lg btn-floating mx-2" style="background-color: #1C1C1C;border-radius: 50px;">
          <a style="color: black;text-decoration:none;" href="https://wa.me/6282234086611"><img src="../css/asset/whatsapp.png"><span>(Chat Only)</span></a>       
        </button>
      </div>
    </div>

      <!-- Copyright -->
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="#">Akmdrhan</a>
      </div>
    </footer>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../js/script.js"></script>
</body>
</html>