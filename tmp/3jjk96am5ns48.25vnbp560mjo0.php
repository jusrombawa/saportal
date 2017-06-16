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
<div class="row">
  <div class="col s8 offset-s2">
    <ul class="tabs" style="overflow-x:hidden">
      <li class="tab col s2"><a class="active" href="#commit" name="commit">COMMIT</a></li>
      <li class="tab col s2"><a href="#soad" name="soad">SOAD</a></li>
      <li class="tab col s2"><a href="#sfad" name="sfad">SFAD</a></li>
      <li class="tab col s2"><a href="#do" name="do">DO</a></li>
      <li class="tab col s2"><a href="#counseling" name="counseling">COUNSELING</a></li>
      <li class="tab col s2"><a href="#sdt" name="sdt">SDT</a></li>
    </ul>
  </div>

  <!-- commit tab -->
  <div id="commit">
    <div class="row container white" id="main-container">
    
      <!-- header/division name -->
      <h2 id="division-name"><br>COMMIT</h2>

      <!-- division description -->
      <blockquote id="division-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>

      <br>
    </div>
    <!-- table of employees -->  
    <div class="container" id="personnel-container">
      <h4>Staff</h4>
      <div class="row">
        <!-- loop to print cards -->
        <?php foreach (($staffArray?:array()) as $arr): ?>
          <div class="col s4">
              <div class="card small">
                <div class="card-image"><img src="ui/img/temp.jpg"></div>
                <div class="card-stacked">
                  <div class="card-content">
                    <?php echo $arr['name']; ?><br>
                    <?php echo $arr['position']; ?><br>
                    <?php echo $arr['email']; ?>
                  </div>
                </div>
              </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
  <!-- soad tab -->
  <div id="soad">
    <div class="row container white" id="main-container">
    
      <!-- header/division name -->
      <h2 id="division-name"><br>SOAD</h2>

      <!-- division description -->
      <blockquote id="division-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>

      <br>
    </div>
    <!-- table of employees -->  
    <div class="container" id="personnel-container">
      <h4>Staff</h4>
      <div class="row">
        
        <div class="col s4">
            <div class="card small">
              <div class="card-image"><img src="ui/img/temp.jpg"></div>
              <div class="card-stacked">
                <div class="card-content">
                    Juana Dela Cruz<br>
                    Admin<br>
                    j22delacruz@up.edu.ph
                </div>
              </div>
            </div>
        </div>

        <div class="col s4">
            <div class="card small">
              <div class="card-image"><img src="ui/img/temp.jpg"></div>
              <div class="card-stacked">
                <div class="card-content">
                  Juanita Dela Cruz<br>
                  Admin<br>
                  j23delacruz@up.edu.ph
                </div>
              </div>
            </div>
        </div>

        <?php foreach (($staffArray?:array()) as $staff): ?>
          <div class="col s4">
              <div class="card small">
                <div class="card-image"><img src="ui/img/temp.jpg"></div>
                <div class="card-stacked">
                  <div class="card-content">
                    <?php echo $staff['name']; ?><br>
                    <?php echo $staff['position']; ?><br>
                    <?php echo $staff['email']; ?>
                  </div>
                </div>
              </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
  <!-- sfad tab -->
  <div id="sfad">
    <div class="row container white" id="main-container">
    
      <!-- header/division name -->
      <h2 id="division-name"><br>SFAD</h2>

      <!-- division description -->
      <blockquote id="division-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>

      <br>
    </div>
  </div>
  <!-- do tab -->
  <div id="do">
    <div class="row container white" id="main-container">
    
      <!-- header/division name -->
      <h2 id="division-name"><br>DO</h2>

      <!-- division description -->
      <blockquote id="division-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>

      <br>
    </div>
  </div>
  <!-- counseling tab -->
  <div id="counseling">
    <div class="row container white" id="main-container">
    
      <!-- header/division name -->
      <h2 id="division-name"><br>COUNSELING</h2>

      <!-- division description -->
      <blockquote id="division-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>

      <br>
    </div>
  </div>
  <!-- sdt tab -->
  <div id="sdt">
    <div class="row container white" id="main-container">
    
      <!-- header/division name -->
      <h2 id="division-name"><br>SDT</h2>

      <!-- division description -->
      <blockquote id="division-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>

      <br>
    </div>
  </div>
</div>

  <!-- add new card button -->
    <div class="row">
      <div class="col s1 push-s11">
        <a id="modalBtn" class="btn-floating btn red darken-4" data-target="newCard"><i class="material-icons">add</i></a>
      </div>
    </div>

  <!-- new card form -->

    <div id="newCard" class="modal bottom-sheet">
      <div class="modal-content">
        <form id="cardForm" action="newCard" method="POST" enctype="multipart/form-data">
        <div class="row">
            <!-- name -->
            <div class="input-field col s6">
              <input name="formName" id="name" type="text" class="validate" required>
              <label for="name">Name</label>
            </div>
            <!-- designation/position -->
            <div class="row">
              <div class="input-field col s6">
                <input name="formDesignation" id="designation" type="text" class="validate" required>
                <label for="designation">Designation</label>
              </div>
            </div>
            <!-- email -->
            <div class="row">
              <div class="input-field col s6">
                <input name="formEmail" id="email" type="text" class="validate" required>
                <label for="email">Email</label>
              </div>
            </div>
            <!-- image -->
            <p>Upload image (200x200)</p>
            <div class="file-field input-field" id="getImg">
              <div class="btn">
                <span>Upload</span>
                <input type="file" id="img" name="formImage">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
            <!-- submit button -->
            <div class="row">
              <button class="btn waves-effect waves-light" id="submitForm" type="submit" name="newCard">Submit</button>
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
  <script src="<?php echo $UI . 'js/script.js'; ?>"></script>
  </body>
</html>
