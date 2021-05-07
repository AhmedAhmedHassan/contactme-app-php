<?php
  if($_POST){
    $emailTo="a7090120@gmail.com";
    $subject=$_POST['subject'];
    $content=$_POST['content'];
    $headers='From: '.$_POST['email'];

    if(mail($emailTo,$subject,$content,$headers)){
      echo '<div class="container alert alert-success text-center">
            Your message was sent, we will get back to you ASAP!</div>';
    }else{
      echo '<div class="container alert alert-danger text-center">
            Your message couldn\'t be sent, please try again later</div>';
    }
  }



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">     <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
  </head>
  <body>



<!-- As a heading -->
<nav class="navbar navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <img src="circle.png" width="50"   alt="">
    <span >A.A.Hassan</span>
  </div>
</nav>





  
      <div class='container mt-5'>
      
      <div class="card" style="height:500px">
  <h5 class="card-header text-center">كل عام و انتم بخير</h5>
  <div class="card-body">
   <div class="mx-auto d-block "><iframe class="w-100" height="370"  src="https://www.youtube.com/embed/He3ZSx476C0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div> 
    <a href="#"  type="button" class="btn btn-primary mt-3 d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Go somewhere</a>
  </div>
</div>


<!-- Modal -->
<div class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


      <h1>Get in touch!</h1>
      <div id='error'></div>
      <form method='POST'>
        <fieldset class='form-group'>
          <label for='email'>Email address</label>
          <input type='email' class='form-control' id='email' name='email'>
          <small class='text-muted'>we'll never share your email with anyone else</small>
        </fieldset>
        <fieldset class='form-group'>
          <label for='subject'>Subject</label>
          <input type='text' class='form-control' id='subject' name='subject'>
        </fieldset>
        <fieldset class='form-group'>
          <label for='content'>What you would like to ask us ?</label>
          <textarea class='form-control' id='content' name='content' rows='3'></textarea>
        </fieldset>
        <button type='submit' id='submit' class='btn btn-primary'>Submit</button>
      </form>

   <script type='text/javascript'>
     $('form').submit(function(e){
       var error='';

       if($('#email').val()==""){
         error +="The email field is required.<br>"
       }
       if($('#subject').val()==""){
         error +="The subject field is required.<br>"
       }
       if($('#content').val()==""){
         error +="The content field is required.<br>"
       }
       if(error !=""){
         $("#error").html('<div class="alert alert-danger"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>')
         return false;
       }else{
         return true;
       }
     })
   

    
   
   </script>

      
      </div>
      
          
  </body>
</html>
