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
        border-top: 1px dotted #999;
        }
        h3{
        text-shadow: 0 0 1px #c23616, 0 0 3px #192a56;
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
            <h2>Photo Gallery</h2>
            <p><a href="gallery.php"><img src="002.jpg"></a></p>
            <p><a href="contact.php"><img src="callBackImg.png"></a></p>
          </div>
          <div class="col-sm-9 ">
            <h3 class="text-center">Feedback</h3><br/>
            <label>Name</label>
            <span class="text-danger">*</span>
            <input type="text" name="name" class="form-control form-group">
            <label>Email</label>
            <span class="text-danger">*</span>
            <input type="email" name="email" class="form-control form-group">
            <label>Mobile Number</label>
            <span class="text-danger">*</span>
            <input type="text" name="mobile" value="+91" class="form-control form-group ">
            <label>Address</label>
            <span class="text-danger">*</span>
            <textarea class="form-control form-group"></textarea>
            <label>Suggestion</label>
            <span class="text-danger">*</span>
            <textarea class="form-control form-group"></textarea>
            
            <button type="submit" class="btn btn-primary my-3 text-center">Submit</button>
            <button type="reset" class="btn btn-danger  my-3 text-center">Reset</button>
            
          </div>
        </div>
        
        
        &nbsp;
        <?php include 'Footer.php'; ?>
        
      </body>
    </html>