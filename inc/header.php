<!-- Header goes here -->
  <nav class="uk-navbar" data-uk-sticky >
    <div class="uk-container uk-container-center" >
      <a href="index.php" class="uk-navbar-brand uk-hidden-small"><img src="assets/images/logo/logo1.png" alt="logo"></a>
      <ul class="uk-navbar-nav uk-hidden-small" >
          <li class="<?php echo $page_id == 1 ? 'uk-active' : ''?> "><a href="index.php"> Home </a></li>
          <li class="<?php echo $page_id == 2 ? 'uk-active' : ''?> "><a href="about.php"> About </a></li>
          <li class="<?php echo $page_id == 3 ? 'uk-active' : ''?> "><a href="service.php"> Services </a></li>
          <li class="<?php echo $page_id == 5 ? 'uk-active' : ''?> "><a href="contact.php"> Contact </a></li>
      </ul>
      <div class="uk-navbar-flip uk-hidden-small">
          <ul class="uk-navbar-nav">
              <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook" style="color: #3b5998; width: 20; height: 20px;""></i></a></li>
              <li><a href="https://in.linkedin.com/" target="_blank"><i class="fab fa-linkedin" style="color: #0084bf; width: 20; height: 20px;""></i></a></li>
              <li><a href="https://plus.google.com/" target="_blank"><i class="fab fa-google-plus-square" style="color: #dc5044; width: 20; height: 20px;"></i></a></li>
          </ul>
      </div>
      <!-- For Mobile devices-->
      <a href="#mobilemenu" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
      <div class="uk-navbar-content uk-navbar-center uk-visible-small"><img src="assets/images/logo/logo2.png" alt="logo"></div>
      </div>
  </nav>
  <div id="mobilemenu" class="uk-offcanvas">
      <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
          <li class="<?php echo $page_id == 1 ? 'uk-active' : ''?> "><a href="index.php"> Home </a></li>
          <li class="<?php echo $page_id == 2 ? 'uk-active' : ''?> "><a href="about.php"> About </a></li>
          <li class="<?php echo $page_id == 3 ? 'uk-active' : ''?> "><a href="service.php"> Services </a></li>
          <li class="<?php echo $page_id == 5 ? 'uk-active' : ''?> "><a href="contact.php"> Contact </a></li>
      </ul>
      </div>
  </div>
  <!-- End of the Header -->