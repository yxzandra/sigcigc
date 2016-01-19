<html lang="en" class="translated-ltr"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Ferrominera - SIGCIGC</title>

    <!-- Bootstrap core CSS -->
     {{HTML::style("bootstrap/css/bootstrap.min.css")}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">



    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  {{ HTML::style('bootstrap/css/bootstrap.css'); }}
  {{ HTML::style('bootstrap/css/login.css'); }} 
    
    {{ HTML::script('bootstrao/js/jquery-1.11.0.js'); }}
    {{ HTML::script('bootstrao/js/bootstrap.js'); }}
    
    <!-- Custom styles for this template -->
    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


  <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"></head>

  <body>
  <div class="container">
    <div class="login-container">
              <div id="output">

                    <?php                             
                    if(Session::has('error')){
                    ?>
                    <br>
                    <span class="profile"><div class="alert alert-danger alert-dismissable" style="text-align:center;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><strong>ERROR!</strong> {{Session::get('error')}}</p>
                    </div></span>          
                    <?php
                    Session::forget('error');
                    }
                    ?> 

                    <?php 
                    if(Session::has('message')){
                    ?>                  
                    <span class="profile"><div class="alert alert-success alert-dismissable" style="text-align:center;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p>{{Session::get('message')}}</p>
                    </div></span>                               
                    <?php
                    Session::forget('message');
                    }
                    ?>  
                </div>
              
              <img src="{{URL::to('/')}}/images/logo.png" style="width: 85%; padding: 15px"
                    alt="">
              <div class="form-box">
                  <form action="{{URL::to('login')}}" method="post">
                      <input name="user" required type="text" placeholder="username">
                      <input name="password" type="password" required placeholder="password">
                      <button class="btn btn-info btn-block login" type="submit">Ingresar</button>
                        
                  </form>
              </div>
          </div>
          
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.google.com/images/icons/product/translate-32.png" width="20" height="20"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Texto original</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Sugiere una traducción mejor</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>
 
</body>

</html>