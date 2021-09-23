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
        border-top: 1px dotted ;
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
        <?php include 'Header.php'; ?>      <!-- third row start -->
              &nbsp;
                 <div class="row">
                <div class="col-sm-3">
                  <h2>Photo Gallery</h2>
                  <p><img src="002.jpg"></p>
                  <p><img src="callBackImg.png"></p>
                </div>
                <div class="col-sm-9 ">
                   <h3 class="text-center">Feedback</h3><br/>
                   <form action="feedbacksubmit.php" method="POST">
                   <label>Name</label>
                   <span class="text-danger">*</span>
                   <input type="text" name="name" class="form-control" required>
                   <label>Email</label>
                   <span class="text-danger">*</span>
                   <input type="email" name="email" class="form-control" required>
                   <label>Mobile Number</label>
                   <span class="text-danger">*</span>
                   <input type="text" name="mobile" value="" class="form-control" required>
                   <label>Address</label>
                   <span class="text-danger">*</span>
                   <textarea class="form-control" name="address" required ></textarea>
                   <label>Suggestion</label>
                   <textarea class="form-control" name="suggestion"></textarea>
                   <button type="submit" name="submit" class="btn btn-outline-primary mx-3 " style="width: 20%">Submit</button>
                   <button type="reset" class="btn btn-outline-danger my-3 mx-3" style="width: 15%">Reset</button>
                 </form>
               </div>
              </div>
             </div>
              &nbsp;
              <!-- forth row start -->
             <?php include 'Footer.php'; ?>
             </body>
             </html>