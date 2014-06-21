<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/contact/contactProcess.php');
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dorothy Rotondo</title>
    <link rel="stylesheet" href="../css/app.css" />
    <script src="../bower_components/modernizr/modernizr.js"></script>
  </head>
  <body id="contact">
    <div class="off-canvas-wrap full-height" data-offcanvas>
      <div class="inner-wrap full-height">
        <!--Mobile Navigation-->
        <nav class="tab-bar show-for-small">
          <section class="left tab-bar-section">
            <img class="mobile-nav-leaf-photo" src="../img/mobile-leaf-nav.png" alt="Dorothy Photo" />
            <div class="nav-heading">
              <h2>Dorothy</h2>
              <h1>Rotondo</h1>
            </div>
          </section>
          <section class="right-small">
            <a class="right-off-canvas-toggle menu-icon" href="#"><span></span><p>Menu<p></a>
          </section>
        </nav>
        <nav class="tab-bar show-for-medium">
          <section class="left tab-bar-section">
            <img class="mobile-nav-leaf-photo" src="../img/mobile-leaf-nav.png" alt="Dorothy Photo" />
            <div class="nav-heading">
              <h2>Dorothy</h2>
              <h1>Rotondo</h1>
            </div>
          </section>
          <section class="right-small">
            <a class="right-off-canvas-toggle menu-icon" href="#"><span></span><p>Menu<p></a>
          </section>
        </nav>   

        <aside class="right-off-canvas-menu">
          <ul class="off-canvas-list">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../work/index.php">Work</a></li>
            <li><a href="../resume/index.php">Resume</a></li>
            <li class="active"><a href="../contact/index.php">Contact</a></li>
          </ul>
          <div class="nav-contact-info">
            <p><a href="mailto:dorothy_rotondo@yahoo.com">dorothy_rotondo@yahoo.com</a></p>
          </div>
        </aside>

        <section class="main-section full-height">
          <div class="row full-height">
            <div class="large-4 columns show-for-large-up full-height">
              <!--Navigation-->
              <div class="sidebar full-height">
                <img class="nav-leaf-photo" src="../img/nav-leaf.png" alt="Dorothy Photo" />
                <div class="nav-heading">
                  <h2>Dorothy</h2>
                  <h1>Rotondo</h1>
                </div>
                <ul class="custom-side-nav">
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="../work/index.php">Work</a></li>
                  <li><a href="../resume/index.php">Resume</a></li>
                  <li class="active"><a href="../contact/index.php">Contact</a></li>
                </ul>
                <p class="copyright">&copy; copyright <?php echo date("Y"); ?> | designed by <a href="http://www.davingerber.com/">Davin Gerber</a> | developed by <a href="http://ryanengkl.com">Ryan Eng</a></p>
              </div><!--end sidebar-->
            </div>

            <div class="large-8 columns full-height">
              <div class="main-content full-height">
                <div class="contact-info show-for-medium-up">
                  <p><a href="mailto:dorothy_rotondo@yahoo.com">dorothy_rotondo@yahoo.com</a></p>
                </div>
                <div class="content">
                  <h3>Contact</h3>
                  <p>Please feel free to contact me and I will get back to you as soon as possible.</p>
                  <form id="formContactBody" action="" method="post">
                    <label for="name">NAME *</label>
                      <?php
                            if ($errorFields['name']) {
                        ?>
                      <label class="error" for="name" generated="true">please enter your name.</label>
                      <?php
                            }
                      ?>
                      <input class="short-textbox" name="name" type="text" value="" size="30"/>
                      
                    <label for="email">EMAIL *</label>
                      <?php
                            if ($errorFields['email']) {
                        ?>
                      <label class="error" for="email" generated="true">please enter your email address.</label>
                      <?php
                            }
                      ?>
                      <input class="short-textbox" name="email" type="email" value="" size="30"/>
                    <label for="phone">PHONE</label>
                      <input class="short-textbox" name="phone" type="text" value="" size="30"/>
                    <label>MESSAGE *</label>
                      <?php
                            if ($errorFields['comment']) {
                        ?>
                      <label class="error" for="comment" generated="true">please provide a message.</label>
                      <?php
                            }
                      ?>
                      <textarea class="long-textbox" name="comment" rows="7" cols="30"></textarea>
                    <input class="button" type="submit" value="Sumbit"/>
                  </form>
                  <div class="bio-img">
                    <img class="bio-photo" src="../img/bio-pic.jpg" alt="Dorothy Photo" />
                    <img class="leaf hide-for-small-only" src="../img/bio-leaf.png" alt="Leaf Photo" />
                  </div>
                </div>
                <div class="contact-info show-for-small-only">
                  <p><a href="mailto:dorothy_rotondo@yahoo.com">dorothy_rotondo@yahoo.com</a></p>
                  <p class="copyright">&copy; copyright <?php echo date("Y"); ?> | designed by <a href="http://www.davingerber.com/">Davin Gerber</a> | developed by <a href="http://ryanengkl.com">Ryan Eng</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <a class="exit-off-canvas"></a>
      </div><!--end inner-wrap-->
    </div><!--off-canvas-wrap-->

    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/foundation/js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
