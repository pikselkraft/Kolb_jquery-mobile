<?php
require_once('includes/dataMots.inc.php');


// ************************************************************************* 
// Test de soumission de a question et incrémentation du numéro de la question
// ****************************************************************************/
?> 
<!DOCTYPE HTML>
<html>

  <head>
    <title>Kolb Test - Les questions</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
  </head>

  <body>

    <form id="questionnaire" method="POST" action="result.php" data-theme="a">

      <?php 

      foreach($dataMotsClassObject->question as $number=>$laQuestion){

          $nextQuestion = ++$number;

          echo '<div data-role="page" id="question'.$number.'" data-transition="slideup">';
          ?> 

            <div data-role="header">

              <h1>Test Kolb</h1>

            </div>

            <div data-role="content">
            <div class="ui-grid-a">
              <div class="ui-block-a"><p>Donner une valeur a chaque mot selon sa correspondance avec votre personnalit&eacute;</p></div>
              <div class="ui-block-b"></div>
            </div>
               

            <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain"> 
          <?php

              echo '<h2>Question n° '.$number.'</h2>';
   
              echo '<div class="ui-grid-b">';
                echo '<div class="ui-block-a">';
                
                foreach($laQuestion->mot as $mots=>$mot){

                    echo '<p>'.$mot->libelle.'</p>';

                        for ($i = 1; $i <= 4; $i++){
                        //echo "test2 ".substr($test, -2)."<br>"; 
                        echo '<label  for="score'.$i.'_mot'.$mots.'">'.$i.'</label>';
                        echo '<input class="button'.$i.'" id="score'.$i.'_mot'.$mots.'" name="'.$number."_".rand(5, 15)."".((!is_null($mot->categorie) ) ? $mot->categorie: 'No' ).'" type="radio" value="'.$i.'">';       
                       }
                }
                  echo '</div>';
                  echo '<div class="ui-block-b"></div>';
            echo '</fieldset>';

        if($nextQuestion == 9){
          echo '<input type="submit" value="Valider">';
        }
        else {
          echo '<a href="#question'.++$nextQuestion.'"><input type="button" value="Question suivante"></a>';
        }
        ?>
          </div>
        
          <div data-role="footer" class="footer">
            <p>Kolb Test</p>
          </div>
        </div>
      </div>
    <?php 
    }
    ?>

    </form>
  </body>
</html>

