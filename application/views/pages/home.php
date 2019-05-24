<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo base_url()?>" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Evaluación de CodeIgniter</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="<?php echo base_url()?>index.php/Pages2/view" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>

        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url()?>/assets/materialize/img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
  <div class="col s12 center">
  <h4>Contacto</h4>
  </div>
  <div class="row">

    
    <?php echo validation_errors(); ?>
    <?php echo form_open('pages/view'); ?>
    
      <div class="row">
        <div class="input-field col s6">
          <input name="first_name" id="first_name" type="text" class="validate"/>
          <label for="first_name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input name="last_name" id="last_name"  type="text" class="validate"/>
          <label for="last_name">Apellidos</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" id="email"  type="email" class="validate"/>
          <label for="email">Correo Electrónico</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea name="textarea" id="textarea"  class="materialize-textarea" data-length="250"></textarea>
            <label for="textarea">Comentario</label>
        </div>
      </div>
      <div class="col s2 right">
        <button class="btn waves-effect waves-light" type="submit" name="action" value="Submit"> Submit
        <i class="material-icons right"> send </i>
        </button> 
      </div>
       
      
    </form>


  </div>
  </div>


  
