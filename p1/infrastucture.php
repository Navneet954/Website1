<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    <title>Surjeet Memrorial Sr. Secondary School</title>
    <style>
    .dotted{
    border-top: 1px dotted;
    }
    .nav-link{
    background-color: #00FF7F;
    color: #000;
    }
    .nav-link1{
    line-height:50px;
    }
    a:hover{
    color: red;
    }
    </style>
  </head>
  <body>
    <img src="logo.png" alt="" class="mx-auto d-block">
    &nbsp;
    <?php include 'Header.php'; ?>
    <!-- third row start -->
    
    <div class="row">
      <div class="col-sm-3">
        <h4>Photo Gallery</h4>
        <p><img src="002.jpg"></p>
        <p><img src="callBackImg.png"></p>
      </div>
      <div class="col-sm-9">
        <h3 class="text-center">Infrastucture</h3>
        <p>Area of School</p>
        <ol>
          <li>Total Area</li>
          <li>Covered Area</li>
          <li>Playground Area</li>
          <li>Total No of Rooms</li>
          <li>Class Rooms</li>
        </ol>
        <table class="table table-bordered table-hover table-striped"  cellpadding="5px;" >
          <th class="bg-dark text-light">#</th>
          <th class="bg-dark text-light">Qty of Rooms</th>
          <th class="bg-dark text-light">Purpose</th>
          <th class="bg-dark text-light">Dimensions</th>
        </tr>
        <tr>
          <td>1.</td>
          <td>01</td>
          <td>Principal Office</td>
          <td>22*18</td>
        </tr>
        <tr>
          <td>2.</td>
          <td>01</td>
          <td>Clerk Room</td>
          <td>22*10</td>
        </tr>
        <tr>
          <td>3.</td>
          <td>01</td>
          <td>Staff Room</td>
          <td>18*11</td>
        </tr>
        <tr>
          <td>4.</td>
          <td>04</td>
          <td>Laboratories</td>
          <td>20*30</td>
        </tr>
        <tr>
          <td>5.</td><td>05</td><td>Libra
          <tr>
            <td>6.</td>
            <td>12</td>
            <td>Class Room</td>
            <td>18*21</td>
          </tr>
          <tr>
            <td>7.</td>
            <td>06</td>
            <td>Class Room</td>
            <td>18*22</td>
          </tr>
          <tr>
            <td>8.</td>
            <td>06</td>
            <td>Class Room</td>
            <td>25*15</td>
          </tr>
          <tr>
            <td>9.</td>
            <td>02</td>
            <td>Class Room</td>
            <td>20*30</td>
          </tr>
          <tr>
            <td>10.</td>
            <td>01</td>
            <td>Sports Room</td>
            <td>25*15</td>
          </tr>
          <tr>
            <td>11.</td>
            <td>01</td>
            <td>Canteen</td>
            <td>25*15</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  &nbsp;
  <?php include 'Footer.php'; ?>
  
</body>
</html>