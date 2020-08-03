<?php
require_once("koneksi.php");
?>

<html>
  <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style type="text/css">
          body {
          background: url('img/p.png') fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          background-size: cover;
          -o-background-size: cover;
        }
        </style>

  <title>LOGIN SESSION</title>

          <script>
              var xhttp = false;
              if (window.XMLHttpRequest)
              {
                xhttp = new XMLHttpRequest();
              } 

              else if (window.ActiveXObject) 
              {
                xhttp = new ActiveXObject("Microsoft.XMLHTTP");
              }

              function login()
              {
             
                xhttp.responseText;
                xhttp.abort();
                xhttp.onreadystatechange=function()
                {
                  if(xhttp.readyState ==4 && xhttp.status == 200)
                  {
                    document.getElementById('pesan').innerHTML = xhttp.responseText;
                  }
                }

                var user=document.getElementById('nama').value;
                var pwd=document.getElementById('sandi').value;
                var captcha=document.getElementById('nilaicaptcha').value;
                xhttp.open("GET", "http://localhost/uasweb2ardely/proses.php?u="+user+"&p="+pwd+"&nilaicaptcha="+captcha , true);
                xhttp.send(null);
              } 
            </script>
  </head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
 ARDELY CAR
</nav>


<div class="row" >

      <div class="col-md-4"></div>

      <div class="col-md-4">
        <div id=pesan></div>

         <u><h1 class="font-weight-light">LOGIN ADMIN</h1></u>
         <br>
          <div class="form-group">
            <input type="username" class="form-control" aria-describedby="emailHelp" placeholder="username" id="nama">
            
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password"  id="sandi">
          </div>

          <div class="form-group">
            <img src="gambar.php" alt="gambar" >
            <input type="password" class="form-control" placeholder="Captcha" id="nilaicaptcha" maxlength="6">
          </div>

          <button type="button" class="btn btn-primary"  onclick='login();'>login</button>
        

    </div>

    <div class="col-md-4"></div>

  </div>


          <div style="height: 120px"></div>
      </div>
    </div>

 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>