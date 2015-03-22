<?php
  include("header.php");
?>

<html>
<head>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <style>
      @import url(http://fonts.googleapis.com/css?family=Lato:300);
      
      body {
        font-family: 'Lato', sans-serif;
        background: #D1EEEE;
      }

      form {
        margin-left: auto;
        margin-right: auto;
        width: 960px;
        height: 450px;
        padding: 30px;
        display: block;
      }

      textarea {
        width: 900px;
        height: 110px;
        border: none;
        border-radius: 10px;
        font-size: 20px;
        padding: 12px 20px 20px 45px;  
        margin-bottom: 10px;   
      }

      .form-control {
        width: 900px;
        height: 50px;
        border: none;
        border-radius: 10px;
        font-size: 20px;
        padding: 12px 20px 20px 45px; 
        margin-bottom: 10px;
      }

      .btn {
        width: 200px;
        height: 50px;
        border: none;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
        float: right;
      }
    </style>
</head>

<body>
  <div id="email">
    <form action='sendmail.php' method="post">
      <div class="name">
        <!-- <label for="InputName">Name</label> -->
        <input type="name" class="form-control" name="name" placeholder="Name">
      </div>

      <div class="email">
        <!-- <label for="InputEmail">Email</label> -->
        <input type="email" class="form-control" name="email" placeholder="Email address">
      </div>

      <div class="subject">
        <!-- <label for="InputSubject">Subject</label> -->
        <input type="subject" class="form-control" name="subject" placeholder="Subject">
      </div>

      <div class="form-group">
        <!-- <label for="InputMessage">Message</label> -->
        <textarea rows="3" name="message" placeholder="Speak your mind or forever hold your peace"></textarea>
      </div>

      <div class="spamcheck">
        <!-- <label for="InputMessage">Spam Check: <strong>2+3 = </strong></label> -->
        <input type="message" class="form-control" name="spamcheck" placeholder="Spam Check: 2+3 =">
      </div>

      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</body>

</html>