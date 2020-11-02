<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Style/Design.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid">
    <header>
        <div class="row">
          <img id="logo" src="Image/logo.png" alt="">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="background-color: pink; width: 100%;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="homehtml.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Dollhtml.php">Doll</a>
                    <a class="dropdown-item" href="Cookinghtml.php">Cooking</a>
                    <a class="dropdown-item" href="Carshtml.php">Cars</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Orderhtml.php" tabindex="-1" aria-disabled="true">Order</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
        </div>
    </header>
    
    <main>
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide imghome" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Image/Homepage/toy.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Image/Homepage/toy1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Image/Homepage/toy2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </main>
      <footer>
        <div class="row" style="background-color: #343A40;">
          <div class="col">
            <h2 class="Footer">Branch</h2>
            <p class="Footer">144 Nguyễn Thị Minh Khai, Quận Hải Châu, Đã Nẵng</p>
            <p class="Footer">145 Nguyễn Trãi, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh</p>
            <p class="Footer">19 Khu Hòa Sơn, Thị Trấn Chúc Sơn, Huyện Chương Mỹ, Hà Nội</p>
          </div>
          <div class="col">
            <h2 class="Footer">Follow Us</h2>
            <img class="imgFooter" src="Image/Footer/face.png">
            <img class="imgFooter" src="Image/Footer/Instagram.png">
            <img class="imgFooter" src="Image/Footer/zalo.png">
          </div>
        </div>
      </footer>

    </div>

  </body>
</html>
