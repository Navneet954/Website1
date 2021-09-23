    <!DOCTYPE html>
    <html>
      <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.js"> </script>
        
        <title>Surjeet Memrorial Sr. Secondary School</title>
        <style>
        .dotted{
        border-top: 1px dotted;
        }
        h3{
        text-shadow: 0 0 1px #c23616, 0 0 3px #192a56;
        
        }
        hr{
        width: 30%;
        }
        </style>
      </head>
      <body>
        <img src="logo.png" alt="" class="mx-auto d-block img-fluid">
        &nbsp;
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
          <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link active active"href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " href="chairman.php">Chairman Message</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " href="infra.php">Infrastructure</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="vision.php">Vision & Mission</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " href="contact.php">Contactus</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        &nbsp;
        <!-- second row start -->
        <h3 class="text-center font-weight-bold">Picture Gallery</h3>
        <hr class="text-center  bg-dark">
        &nbsp;
        <div class="container">
          <div class="row gallerys">
            <div class="col-sm-3">
              <a href="1.jpg"><img src="1.jpg" alt="1"class="img-thumbnail border-dark"></a>
            </div>
            <div class="col-sm-3">
              <a href="4.jpg"><img src="4.jpg" alt="4" class="img-thumbnail border-dark"></a>
            </div>
            <div class="col-sm-3">
              <a href="3.jpg"><img src="3.jpg" alt="3" class="img-thumbnail border-dark"></a>
            </div>
            <div class="col-sm-3">
              <a href="2.jpg"><img src="2.jpg" alt="2" class="img-thumbnail border-dark"></a>
            </div>
          </div>
          <div class="row gallerys">
            <div class="col-sm-3">
              <a href="5.jpg"><img src="5.jpg" alt="5" class="img-thumbnail border-dark"></a>
            </div>
            <div class="col-sm-3">
              <a href="6.jpg"><img src="6.jpg" alt="6" class="img-thumbnail border-dark"></a>
            </div>
            <div class="col-sm-3">
              <a href="7.jpg"><img src="7.jpg" alt="7" class="img-thumbnail border-dark"></a>
            </div>
          </div>
        </div>
        &nbsp;
        <!-- forth row start -->
        
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active" href="chairman.php">Chairman Message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active " href="infra.php">Infrastructure</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active" href="vision.php">Vision & Mission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active" href="contact.php">Contactus</a>
            </li>
          </ul>
        </nav>
        <!-- fifth row start -->
        <div class="container-fluid">
          <div class="row bg-dark text-white">
            <div class="col-sm-6">
              <p class="text-left"><br>© All rights reserved by SME Group<br></p>
            </div>
            <div class="col-sm-6">
              <p class="text-right"><br>Designed by SLR Technologies<br></p>
            </div>
          </div>
        </div>
        <script>
        $(document).ready(function() {
        $('.gallerys').magnificPopup({type:'image',
        delegate:'a',
          gallery:{enabled: true}


        });
        
        });
        </script>
      </body>
    </html>