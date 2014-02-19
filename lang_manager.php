<?php
  // Inizio la sessione
  session_start();
  require('functions.php');

  // Imposto i linguaggi supportati
  $available_langs = array('en','it');
   

  if(isset($_GET['lang']) && $_GET['lang'] != '' && in_array($_GET['lang'], $available_langs)) { 
    // verifico se il valore passato con get è presente come lingua     
      $_SESSION['lang'] = $_GET['lang']; // Imposto la lingua nella sessione
      // Imposto la lingua includendo il file relativo
      include('lang/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');
  //  Nel caso in cui non fossero passati valori con GET
  } else {
    //  Controllo la lingua del browser
    $language_detected = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    //  Imposto la lingua e la includo
    switch ($language_detected){
        case "it":
            //echo "PAGE IT";
            include('lang/it/lang.it.php');
            break;        
        default:
            //echo "PAGE EN - Configurazione di default";
            include('lang/en/lang.en.php');
            break;
    }
  }

?>