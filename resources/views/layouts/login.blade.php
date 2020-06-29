<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  
    <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('js/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('js/lib/font-awesome/css/font-awesome.css') }}"   rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link  href="{{ asset('css/style.css') }}"   rel="stylesheet">
  <link  href="{{ asset('css/style-responsive.css') }}"  rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
         @yield('content')
   
    
     <!-- <form class="form-login" action="index.html">
        <h2 class="form-login-heading">Connectez-vous</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="NNI" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="Mot de passe">
              <hr>
          <div>
                <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> Connexion</button>
          </div>
     
        </div>
      
      </form>   -->
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('js/lib/jquery/jquery.min.js') }}" ></script>
  <script src="{{ asset('js/lib/bootstrap/js/bootstrap.min.js') }}"  ></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="{{ asset('js/lib/jquery.backstretch.min.js') }}" ></script>
  <script>
    $.backstretch("img/edf.jpg", {
      speed: 1000
    });
  </script>
</body>

</html>
