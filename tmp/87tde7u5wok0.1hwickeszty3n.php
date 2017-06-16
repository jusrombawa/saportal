<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $SITE; ?></title>

  <!-- CSS  -->
  <link href="<?php echo $UI . 'img/osa-logo.png'; ?>" type="image/png" rel="icon">
  <link href="<?php echo $UI . 'css/materialize.css'; ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo $UI . 'css/style.css'; ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo $UI . 'icons/material-icons.css'; ?>" rel="stylesheet">

</head>
<body class="grey lighten-3">

  <nav class="" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><?php echo $SITE; ?></a>
    </div>
  </nav>

  <div class="row container white" id="main-container">



  <div class="row">
    <form class="col s12" method="post" action="submitdata">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
    </form>
  </div>
        
   

  </div>


  <!--  Scripts-->
  <script src="<?php echo $UI . 'js/jquery.min.js'; ?>"></script>
  <script src="<?php echo $UI . 'js/jquery-ui.min.js'; ?>"></script>
  <script src="<?php echo $UI . 'js/materialize.js'; ?>"></script>
  <script src="<?php echo $UI . 'js/init.js'; ?>"></script>

  </body>
</html>
