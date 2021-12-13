<?php

include "database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $db = new database();

    $sql = "INSERT INTO user VALUES (:user_id, :name, :email, :telNo, :message)";

        $placeholders = [
        'user_id'=> NULL,
        'name'=> $_POST['name'],
        'email'=> $_POST['email'],
        'telNo'=> $_POST['telNo'],
        'message'=> $_POST['message']
        ];
             $db->insert($sql, $placeholders);

                if($db) {
                  
                    
                    header("Location:index.html");

                    echo '<script language="javascript">';
  
                    echo 'alert("Uw bericht is verstuurd. We nemen zo snel mogelijk contact met u.")';
  
                    echo '</script>';

                }

}
 

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// // require_once "vendor/autoload.php";


// /* ... */
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {



//   $userEmail = $_POST['email'];
//   $nameUser = $_POST['name'];
//   $messageUser = $_POST['message'];
//   $telno = $_POST['telno'];
  
//   $mailAdmin = 'osman.oz01120@gmail.com';
  
  
  
//   try {
  
  
  
//     $mail = new PHPMailer(TRUE);
  
//     $mail->isSMTP();
  
//     $mail->Port = 465;
  
//     $mail->SMTPAuth = true;
  
  
  
//       $mail->Username = $mailAdmin;
  
//       $mail->Password = 'Osmanosman1.';
  
  
  
//         $mail->isHTML(true);
  
//         $mail->From = $userEmail;
  
//         $mail->FromName = $nameUser;
  
  
  
  
//           $mail->addAddress($mailAdmin);
  
   
  
//                 $mail->Subject = 'Verstuurd door: ' .$userEmail . ' Telefoonnummer= ' . $telno;
  
//                 $mail->Body = $messageUser;
  
//                 $mail->Host = 'smtp.gmail.com';
  
//                 $mail->SMTPSecure = 'ssl';
  
//                 $mail->send();
  
  
  
//                     echo '<script language="javascript">';
  
//                     echo 'alert("Uw bericht is verstuurd. We nemen zo snel mogelijk contact met u.")';
  
//                     echo '</script>';
  
//   }
  
//       catch (Exception $e) {
  
//         echo $e->errorMessage();
  
//   }
  
  
  
//   }
  
  ?>




<!DOCTYPE html>
<html lang="en">
<head>

     <title>Mom Buddy</title>
     <link rel="icon" href="images/logo.jpg" type="image/icon type">

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body>

     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg">
      <div class="container">
          <a class="navbar-brand" href="index.html">
            <img class="logo" src="images/logo.jpg" aria-hidden="true">
            Mom<strong>Buddy</strong> Movement
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="contact.php" class="nav-link contact">Contact</a>
              </li>
                  <li class="nav-item">
                       <a href="https://nl-nl.facebook.com/groups/321859778847879/" class="nav-link contact">Facebook</a>
                   </li>
                   <li class="nav-item">
                       <a href="https://www.instagram.com/mombuddymovement/" class="nav-link contact">Instagram</a>
                   </li>
                   <li class="nav-item">
                  <a href="admin.php" class="nav-link contact">Admin</a>
              </li>

              </ul>
          </div>
      </div>
  </nav>
                      <form method="POST" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-4 col-12">
                            <input type="text" class="form-control" name="name" placeholder="Uw naam">
                          </div>
                          
                          <div class="col-lg-4 col-12">
                            <input type="email" class="form-control" name="email" placeholder="Uw Email adress">
                          </div>

                          <div class="col-lg-4 col-12">
                            <input type="text" class="form-control" name="telNo" placeholder="Uw telefoonnummer (optioneel)">
                          </div>

                          <div class="col-lg-6 col-10">
                            <textarea class="form-control" rows="10" cols="50" name="message" placeholder="Uw message" required></textarea>
                          </div>
                  
                          <div class="col-lg-4 mx-auto col-8">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Stuur</button>
                          </div>
                        </div>
                        <input type="hidden" name="body" />

                      </form>
                    </div>

               </div>
          </div>
     </section>
     <br> <br>

     

     <div class="google-map" data-aos="zoom-in">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2437.1365414398642!2d4.979410615669499!3d52.34980877978229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60eafaa22bdef%3A0xd2e374615f2d8898!2sFregat%20279%2C%201113%20EH%20Diemen!5e0!3m2!1snl!2snl!4v1633953258066!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>

</div>
</div>

<!-- 

<footer class="site-footer">
<div class="container">
<div class="row">

<div class="col-lg-5 mx-lg-auto col-md-8 col-10">
<h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Mom <strong>Buddy</strong></h1>
</div>

<div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
<h4 class="my-4">Contact Informatie</h4>

<p class="mb-1">
<i class="fa fa-phone mr-2 footer-icon"></i> 
+99 080 070 4224
</p>

<p>
<a href="#">
<i class="fa fa-envelope mr-2 footer-icon"></i>
hello@company.com
</a>
</p>
</div>

<div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
<h4 class="my-4">Onze Stichting</h4>

<p class="mb-1">
<i class="fa fa-home mr-2 footer-icon"></i> 
Fregat 279 - 1113 EH - Diemen, Amsterdam
</p>
</div>

<div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

<ul class="footer-link">
<li><a href="#">Privacy</a></li>
</ul>
</div>

<div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
<ul class="social-icon">
<li><a href="https://nl-nl.facebook.com/groups/321859778847879/" class="fa fa-facebook"></a></li>
<li><a href="https://www.instagram.com/mombuddymovement/" class="fa fa-instagram"></a></li>

</ul>
</div>
</div>
</div>
</footer> -->


</body>
</html>