<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Dawn Summerall Module 2 Course Project</title>
    <style>
      .pages {
        max-height: 70vh;
        margin: 50px 20px 0px 20px;
      }
      .carousel-indicators {
        opacity: .75;
      }
      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        height: 75px;
        width: 75px;
      }
      .carousel-indicators {
        width: 50%;
      }
      #bookslider {
        height: 90vh;
        padding-left: 20px;
        padding-right: 20px;
      }
      @media only screen and (max-width: 360px) {
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
          height: 30px;
          width: 30px;
        }
        .carousel-indicators {
          width: 75%;
        }
        .pages {
          max-height: 75vh;
        }
        #bookslider {
          height: 80vh;
        }
      }
        @media only screen and (max-width: 800px) {
          .pages {
            max-height: 85vh;
          }
          #bookslider {
            height: 90vh;
          }
        }
    </style>
  </head>
  <body class="bg-success">
    <?php include 'navbar2.html';?>

    <div class="container bg-success">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto mb-2">
        	<br />
          <div id="bookslider" class="carousel slide bg-dark rounded" data-ride="carousel">
          <ol class="carousel-indicators bg-secondary rounded p-3 mx-auto">
            <li data-target="#bookslider" data-slide-to="0" class="active"></li>
            <li data-target="#bookslider" data-slide-to="1"></li>
            <li data-target="#bookslider" data-slide-to="2"></li>
            <li data-target="#bookslider" data-slide-to="3"></li>
            <li data-target="#bookslider" data-slide-to="4"></li>
            <li data-target="#bookslider" data-slide-to="5"></li>
            <li data-target="#bookslider" data-slide-to="6"></li>
            <li data-target="#bookslider" data-slide-to="7"></li>
            <li data-target="#bookslider" data-slide-to="8"></li>
            <li data-target="#bookslider" data-slide-to="9"></li>
            <li data-target="#bookslider" data-slide-to="10"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block mx-auto rounded pages img-fluid" src="book01/IMG_0002.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto rounded pages img-fluid" src="book01/IMG_0003.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto rounded pages img-fluid" src="book01/IMG_0004.png" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto rounded pages img-fluid" src="book01/IMG_0005.png" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto rounded pages img-fluid" src="book01/IMG_0006.png" alt="Fifth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto rounded pages img-fluid" src="book01/IMG_0007.png" alt="Sixth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto rounded pages img-fluid" src="book01/IMG_0008.png" alt="Seventh slide">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto rounded pages img-fluid" src="book01/IMG_0009.png" alt="Eight slide">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto rounded pages img-fluid" src="book01/IMG_0010.png" alt="Ninth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto rounded pages" src="book01/IMG_0011.png" alt="Tenth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#bookslider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#bookslider" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
    <?php include 'footer.html'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
