    <!-- 2-menu -->
    <header class="site-navbar py-4 bg-white" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php"><img src="images/Logo-pause-reset.png" alt="Bienvenue sur Pause-Reset" class="img-feature img-fluid"></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
<?php $page = $_SERVER['PHP_SELF']; ?>
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li<?php if(strpos($page,'index.php')) echo ' class="active"'; ?>><a href="index.php">Accueil</a></li>
                <!--<li class="active"><a href="index.php">Home</a></li>-->
                <li<?php if(strpos($page,'challenges.php')) echo ' class="active"'; ?>><a href="challenges.php">CHALLENGES</a></li>
                <li<?php if(strpos($page,'concept.php')) echo ' class="active"'; ?>><a href="concept.php">Le Concept</a></li>
                <li<?php if(strpos($page,'blog.php')) echo ' class="active"'; ?>><a href="blog.php">Blog</a></li>
                <li<?php if(strpos($page,'faq.php')) echo ' class="active"'; ?>><a href="faq.php">FAQ</a></li>
                <li<?php if(strpos($page,'contact.php')) echo ' class="active"'; ?>><a href="contact.php">Contact</a></li>
                <li<?php if(strpos($page,'je-m-abonne.php')) echo ' class="active"'; ?>><a href="je-m-abonne.php">JE M'ABONNE !</a></li>
                <li class="has-children" <?php if(strpos($page,'mon-compte.php')) echo ' class="active"'; ?>><a href="mon-compte.php">Mon Compte</a>               
                <!--<li class="has-children">
                  <a href="compte.php">Mon Compte</a>-->
                  <ul class="dropdown">
                    <li><a href="mon-profil.php">Mon Profil</a></li>
                    <li><a href="mon-abo.php">Mon Abo</a></li>
                    <li><a href="mes-challenges.php">Mes Challenges</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
    <!-- FIN 2-menu -->


    <!-- EXEMPLE CODE NAV ACTIVE

-->