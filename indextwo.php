<?php
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html>
<head>
  <h1><i class="fa fa-"></i> Memes <i class="fa fa-"></i></h1>

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

</head>

<body>

  <div id="container">
    <div id="heading"> <!-- the heading -->
      <h1>Gallery</h1>
    </div>

    <div id="gallery"> <!-- this is the containing div for the images -->
    <?php
      include ('gallery.php');
    ?>
    </div>
    
    <div class="clear"></div> <!-- using clearfix -->
    </div>

    <div id="footer"> <!-- some tutorial info -->
    </div>
  </div>

<!--   <div id="navigation">
    <ul>
      <li id="home"><a href="#">Home</a></li>
      <li id="contact"><a href="#">Contact</a></li>
    </ul>
  </div> -->

  <form action='contact.php'>
    <div class="form-group">
      <label for="InputName">Name</label>
      <input type="name" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="InputEmail">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email address">
    </div>
    <div class="form-group">
      <label for="InputSubject">Subject</label>
      <input type="subject" class="form-control" name="subject" placeholder="Subject">
    </div>
    <div class="form-group">
      <label for="InputMessage">Message</label>
      <textarea class="form-control" rows="3" name="message" placeholder="Speak your mind or forever hold your peace"></textarea>
    </div>
    <div class="form-group">
      <label for="InputMessage">Spam Check: <strong>2+3 = </strong></label>
      <input type="message" name="spamcheck" placeholder="">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  <form>

<!--     <div style="">
      <h1>Niceeeee</h1>
         <p>Thank you <strong><?php $name;?></strong>, your message is sent!</p>
    </div>
 -->

  <!--
  <form action="test.php">
    <input type='text' name='userName' value='sham' />
    <input type='submit' />
  </form>
  -->

</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</html>

<!-- Use bootstrap, php, js -->
<!-- Nav bar, image gallery, contact page -->
<!-- how to validate emails?! -->