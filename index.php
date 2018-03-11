<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ANOTERO - PLATFORM</title>

    <link href="asset/css/bootstrap.css" rel="stylesheet">
    <link href="asset/css/input-menu.css" rel="stylesheet" type="text/css">
    <link href="asset/css/rounded-image.css" rel="stylesheet">
    <link href="asset/css/landing-page.css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="asset/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

    </style>

  </head>

  <body>
    <?php
        include "/control/User.php";
        $user = new User();
    ?>  
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">

          <div class="col-xl-5 mx-auto" style="opacity: 0.8;cursor: default;">
            <h1 class="mb-5">Pesan Menu Sekarang Gak Perlu Teriak-teriak gansis!<br/><small><a href="#" class="btn btn-secondary active"><i class="fa fa-registered"></i> E S T O D E R . I D</a></small></h1>
          </div>

          <div class="col-xl-5 mx-auto" style="margin-top: 10%;">
            <form method="post" action="">
              <div class="form-row">
                <div class="col-12 col-md-8 mb-10 mb-md-0">
                  <select name="business_name" class="form-control form-control-lg">
                    <?php 
                      $row = $user->nama_usaha();
                      foreach($row as $rows) {
                        $usaha = $rows['business_name'];
                    ?>
                    <option value="<?php echo $usaha; ?>"><?php echo $usaha; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-12 col-md-4 mb-10 mb-md-0" align="center">
                  <button type="button" class="btn btn-block btn-lg btn-primary" data-toggle="modal" data-target="#exampleModal">Lihat Menu</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div> 
    </header>

     <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog modal-lg" role="document">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pilih Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-menu">
              <div class="form-group">
                <label for="inputAddress">Nama Pelanggan</label>
                <input type="text" class="form-control" id="rounded-corner">
              </div>
              <div class="form-group">
                <label for="inputAddress">Pilih Meja</label>
                <input type="text" class="form-control" id="rounded-corner">
              </div>
              <br />
              <br />
              <center>Menu Makanan</center>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3 "></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="asset/img/large/bg-cafe.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>DOMBA GARUT</h5>
                      <p>DUA</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="asset/img/large/bg-cafe.png" alt="IMG">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>SATU</h5>
                      <p>DUA</p>
                    </div>
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
              <br />
              <br />
              <center>Menu Minuman</center>
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3 "></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="asset/img/large/bg-cafe.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>DOMBA GARUT</h5>
                      <p>DUA</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="asset/img/large/bg-cafe.png" alt="IMG">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>SATU</h5>
                      <p>DUA</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <br />
              <br />
              <div class="form-group">
                  <label for="inputAddress2">Harga</label>
                  <input type="number" class="form-control" id="rounded-corner" >
              </div>
              <div class="form-group">
                  <label for="inputAddress2">Jumlah</label>
                  <input type="number" class="form-control" id="rounded-corner" >
              </div>
              <button type="submit" class="btn btn-primary" id="rounded-corner">Pesan</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <div id="map"></div>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">Restorder Wiki</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Kontak Kami</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Registrasi</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; restorder.id 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script>
      
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaEU2Ycb-7bVUwXaKY9GX99u0cJMihH6k&callback=initMap">
    </script>
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/bootstrap.js"></script>
  </body>