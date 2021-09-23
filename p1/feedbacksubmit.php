<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $suggestion=$_POST['suggestion'];
    $mailto='navdhillon954@gmail.com';
    $subject='Feed back form';
    $mailBody="Name : $name\n\r  Subject : $subject \r\n Contact No : $mobile \r\nAddress :$address \r\n  Suggestion : $suggestion";
        if(mail($mailto,$subject,$mailBody,"From: $name \r\n $email"))
        {
            $msg="Thanks for your submission, it will assist us in future to provide you better service ";
            if(mail($email,"Thanks",$msg,"From: Surjeet Memorial Senior Secondary School"))
            $msg=$msg.'<br/> Replied';
        }
        else
        {
            $msg="Sorry! Unable to submit your request";
        }
        //echo($msg);
}
?>
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
                    <p>&nbsp;</p>
                   <h3 class="text-center">
                       <?php echo($msg); ?>
                   </h3><br/>
                   
               </div>
              </div>
             </div>
              &nbsp;
              <!-- forth row start -->
             <?php include 'Footer.php'; ?>
             </body>
             </html>