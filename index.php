<?php require('lang_manager.php'); ?>

<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "giuliabonsembiante@libero.it";
    $email_subject = "IMPORTANTE - Contatto da ldybg.it";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Contatto ricevuto da ldybg.it.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Nome: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Testo messaggio: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: curromatteo@gmail.com'."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<script>
alert('Thank you for contacting us. We will be in touch with you very soon.')
</script>
 
<?php
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <title>Ladybug</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="wedding vows">
    <meta name="author" content="Matteo Currò - curromatteo@gmail.com">
    <!-- Favicon --> 
    <link href="img/favicon.png" rel="icon" type="image/png"> 
   
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen">        
    <!-- Font Avesome Styles -->
    <link href="css/font-awesome.css" rel="stylesheet">

   <link href="css/style.css" rel="stylesheet" type="text/css" media="screen"> 
    <link href="css/bootstrap.override.css" rel="stylesheet" type="text/css" media="screen">
    
    
  <!-- Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Stalemate:200,300,400,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>  


<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

    <!-- Fav and touch icons -->

</head>
<body>

  <a href="shop.php" class="compralo">
    <div class="shop_text">Vai allo SHOP!</div>
  </a>
<header id="header"> 
 
<div class="container" id="home">
  <div class="row">
    <div class="span12">
      <div class="square-all-top">
        <div class="img-container-logo">
          <a href="index.php">
            <div style="width: 300px; height: 300px;">
              <img src="img/logo.png" class="logo" >
            </div> 
          </a>
        </div>
      </div>
    </div>
  </div>  

</div> 

<nav id="nav">

  <div class="container">
    
    <div class="row">
      <!-- <div class="span12">
        <ul class="navi">  
          <li><a href="#home" class="active home"  title="Home"><i class="icon-home icon-3x"></i></a></li>  
          <li><a href="#about" class="about" title="About"><i class="icon-heart icon-3x"></i></a></li>  
          <li><a href="#location" class="location" title="Location"><i class="icon-map-marker icon-3x"></i></a></li>  
          <li><a href="#gifts" class="gifts" title="Gifts"><i class="icon-gift icon-3x"></i></a></li>  
          <li><a href="#tableware" class="table" title="Tableware"><i class="icon-food icon-3x"></i></a></li>  
          <li><a href="#gallery" class="gallery" title="Gallery"><i class="icon-camera-retro icon-3x"></i></a></li>  
          <li><a href="#contact" class="contact" title="Contact"><i class="icon-comment icon-3x"></i></a></li>
        </ul>
        <select class="select-menu"></select>

      </div> -->
    </div>
  </div>
</nav>


</header>

<div class="container-full">

  <!-- Slider -->
  <div class="slider1 flexslider">
    <ul class="slides">
      <li>      
        <div class="slides-top square">
          <a href="img/photos/cashmala_1.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_1_bis.jpg" alt="">
          </a>
        </div>
      </li> 
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_2.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_2_bis.jpg" alt="">
          </a>
        </div>
      </li>
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_3.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_3_bis.jpg" alt="">
          </a>
        </div>
      </li> 
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_4.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_4_bis.jpg" alt="">
          </a>
        </div>
      </li>
      <li>      
        <div class="slides-top square">
          <a href="img/photos/cashmala_5.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_5_bis.jpg" alt="">
          </a>
        </div>
      </li> 
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_6.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_6_bis.jpg" alt="">
          </a>
        </div>
      </li>
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_7.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_7_bis.jpg" alt="">
          </a>
        </div>
      </li> 
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_12.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_12_bis.jpg" alt="">
          </a>
        </div>
      </li> 
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_13.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_13_bis.jpg" alt="">
          </a>
        </div>
      </li> 
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_8.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_8_bis.jpg" alt="">
          </a>
        </div>
      </li>
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_9.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_9_bis.jpg" alt="">
          </a>
        </div>
      </li>
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_10.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_10_bis.jpg" alt="">
          </a>
        </div>
      </li>
      <li>
        <div class="slides-top square">
          <a href="img/photos/cashmala_11.jpg" data-rel="prettyPhoto[00]" title="Cashmala">
          <img src="img/photos/cashmala_11_bis.jpg" alt="">
          </a>
        </div>
      </li>
      
    </ul>
  </div>     
  <!--   Slider End -->
</div>


<!-- ABOUT -->
<section id="about">
  <div class="container">
    <div class="row spacer60"></div> 
    <div class="row">
      <div class="span6" style="position: relative; height: 300px;">         
        <!-- ANIMAZIONE COCCINELLE -->
        <img class="bug_1" src="img/ladybug.png" alt="Ladybug">
        <img class="bug_2" src="img/ladybug_2.png" alt="Ladybug">
        <img class="bug_3" src="img/ladybug_3.png" alt="Ladybug">
      </div><!-- /.span4 -->
      
      <div class="span6">
        <h1><?php echoIfIsSet( $lang['welcome'] ); ?></h1>
        <p><?php echoIfIsSet( $lang['welcome_text'] ); ?></p>        
      </div><!-- /.span4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section> 
<!-- ABOUT ENDS -->    

<!-- SECTION -->
<section id="location" class="zoomable">
  <div class="container">
    <div class="row spacer35"></div>  
    <div class="row">
      <div class="span4">
        <h2><?php echoIfIsSet( $lang['taglia'] ); ?></h2>
        <p><?php echoIfIsSet( $lang['taglia_text'] ); ?></p>
      </div>
      <div class="span4">
        <a href="img/cashmala_1.jpg" data-rel="prettyPhoto[2]" title="Lorem ipsum dolor sit amet">
          <div class="square-all">
            <div class="img-container" style="background-image: url('img/cashmala_1_bis.jpg')">
            </div>
          </div>
        </a>
        
        <div class="spacer35"></div>           
      </div>
      <div class="span4">
        <h2><?php echoIfIsSet( $lang['materia_prima'] ); ?></h2>
        <p><?php echoIfIsSet( $lang['materia_prima_text'] ); ?></p>
      </div>
      <div class="spacer60"></div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
<!-- SECTION ENDS --> 

<!-- SECTION -->
<section id="location" class="zoomable">
  <div class="container">
    <div class="row spacer35"></div>  
    <div class="row">
      <div class="span4">
        <h2><?php echoIfIsSet( $lang['forma'] ); ?></h2>
        <p><?php echoIfIsSet( $lang['forma_text'] ); ?></p>
      </div>
      <div class="span4">
        <a href="img/cashmala_2.jpg" data-rel="prettyPhoto[2]" title="Lorem ipsum dolor sit amet">
          <div class="square-all">
            <div class="img-container" style="background-image: url('img/cashmala_2.jpg')">
            </div>
          </div>
        </a>
        
        <div class="spacer35"></div>           
      </div>
      <div class="span4">
        <h2><?php echoIfIsSet( $lang['dettaglio'] ); ?></h2>
        <p><?php echoIfIsSet( $lang['dettaglio_text'] ); ?></p>
      </div>
      <div class="spacer60"></div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
<!-- SECTION ENDS --> 

<!-- SECTION -->
<section id="location" class="zoomable">
  <div class="container">
    <div class="row spacer35"></div>  
    <div class="row">
      <div class="span4">
        <h2><?php echoIfIsSet( $lang['packaging'] ); ?></h2>
        <p><?php echoIfIsSet( $lang['packaging_text'] ); ?></p>
      </div>
      <div class="span4">
        <a href="img/cashmala_3.jpg" data-rel="prettyPhoto[2]" title="Lorem ipsum dolor sit amet">
          <div class="square-all">
            <div class="img-container" style="background-image: url('img/cashmala_3.jpg')">
            </div>
          </div>
        </a>
        
        <div class="spacer35"></div>           
      </div>
      <div class="span4">
        <h2><?php echoIfIsSet( $lang['produzione'] ); ?></h2>
        <p><?php echoIfIsSet( $lang['produzione_text'] ); ?></p>
      </div>
      <div class="spacer60"></div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
<!-- SECTION ENDS -->    



<!-- STAFF -->
<section id="about">
  <div class="container">
    <div class="row spacer60"></div> 
    <div class="row">
      <div class="span6">
        <h1><?php echoIfIsSet( $lang['compralo'] ); ?></h1>
        <p><?php echoIfIsSet( $lang['compralo_text'] ); ?></p>
        <form action="shop.php">
          <button type="submit" class="button shop">Vai allo SHOP!</button>
        </form>
      </div>

      <a href="shop.php">
        <div class="span6 find_ldybg">
          <img src="img/find_your_ladybug.png" alt="Find your Ladybug!">
        </div>
      </a>
      
    </div><!-- /.row -->
  </div><!-- /.container -->
</section> 
<!-- STAFF ENDS -->





<!-- STAFF -->
<section id="about">
  <div class="container">
    <div class="row spacer60"></div> 
    <div class="row">
      <h1><?php echoIfIsSet( $lang['chi_siamo'] ); ?></h1>
      <div class="row spacer35"></div>
      <div class="span6">
      <img class="staff_img" src="img/giulia_bonsembiante_bn.jpg" alt="Giulia Bonsembiante"> 
      <div class="staff_desc">
      <h3>Giulia Bonsembiante</h3>
      <h4><?php echoIfIsSet( $lang['direttore_creativo'] ); ?></h4>    
        <p><?php echoIfIsSet( $lang['direttore_creativo_text'] ); ?></p>
        </div>
      </div><!-- /.span6 -->
      
      <div class="span6">
        <img class="staff_img" src="img/lucio_bucci_bn.jpg" alt="Lucio Bucci"> 
      <div class="staff_desc">
      <h3>Lucio Bucci</h3>
      <h4><?php echoIfIsSet( $lang['esperto_cachemere'] ); ?></h4>    
        <p><?php echoIfIsSet( $lang['esperto_cachemere_text'] ); ?></p>
        </div>      
      </div><!-- /.span6 -->

      <div class="span6">
      <img class="staff_img" src="img/maglieria_maso_bn.jpg" alt="Maglieria Maso"> 
      <div class="staff_desc">
      <h3>Maglieria Maso</h3>
      <h4><?php echoIfIsSet( $lang['produzione_artigianale'] ); ?></h4>    
        <p><?php echoIfIsSet( $lang['produzione_artigianale_text'] ); ?></p>
        </div>
      </div><!-- /.span6 -->
      
      <div class="span6">
        <img class="staff_img" src="img/family_friends_bn.jpg" alt="Family, Friends &amp; You"> 
      <div class="staff_desc">
      <h3>Family, Friends & You,</h3>
      <h4><?php echoIfIsSet( $lang['quarto_staff'] ); ?></h4>    
        <p><?php echoIfIsSet( $lang['quarto_staff_text'] ); ?></p>
        </div>      
      </div><!-- /.span6 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section> 
<!-- STAFF ENDS --> 





<!-- COMMENTS -->
<section id="contact">
  <div class="container">
         <div class="row spacer60"></div> 
    <div class="row">
      <div class="span6">
      <!-- FORM -->         
        <h2><?php echoIfIsSet( $lang['contatti'] ); ?></h2>                    
          <form action="" method="post" enctype="multipart/form-data" name="form1" id="contact-form">
            <div class="row">
              <div class="span3">
                <input class="send-form-input" type="text" name="name" value="Your name" onfocus="if(this.value == 'Your name') this.value='';" onblur="if(this.value == '') this.value='Your name';">
              </div>   
              <div class="span3">
                <input class="send-form-input" type="email" name="email" value="Your e-mail address" onfocus="if(this.value == 'Your e-mail address') this.value='';" onblur="if(this.value == '') this.value='Your e-mail address';" >
              </div>    
            </div>       
            <div class="row">
              <div class="span6 send-form">
                <textarea name="message"  onfocus="if(this.value == 'Comment') this.value='';" onblur="if(this.value == '') this.value='Comment';">Comment</textarea>
              </div>  
            </div>
            <div class="spacer35"></div>
            <div class="row">
              <div class="span6">
                <p class="blue">
                  <!-- <input class="pull-right send-button" type="submit" name="send" value=""> -->
                  <input type="submit" class="button pull-right" name="send">
                </p>
              </div>   
            </div>
          </form>
          <!-- FORM END -->
          
        </div><!-- /.span6 -->


        <!--  COMMENTS + COMMENTS SLIDER -->       
        <div class="span6"> 
          <h2>&nbsp;</h2> 
          <p><?php echoIfIsSet( $lang['contatti_text'] ); ?></p>
        </div> 
      </div> 
    </div><!-- /.row --> 
  </div><!-- /.container -->
</section>

<?php require('footer.php'); ?>

<!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.8.3.min.js"></script>  
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.flexslider.js"></script>    
    <script src="js/fittext.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.localScroll.js"></script>
    <script src="js/functions.js"></script>  
  

</body>
</html>