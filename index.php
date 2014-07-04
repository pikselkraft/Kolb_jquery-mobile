<!doctype html>
<html>

  <head>
    <title>Kolb Jquery Mobile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
  </head>
  <body>

    <!-- 1 Page d'accueil -->  
    <div data-role="page" id="home">

        <div data-role="header">
            <h1>Kolb Jquery Mobile</h1>
        </div>

        <div data-role="content">
                <h3>Quel apprenant &ecirc;tes-vous ?</h3>
                <p>Le questionnaire kolb permet de d&eacute;terminer votre profil d'apprenant, votre façon d'enregistrer, de retenir une information.</p>
            <a href="#formulaire" data-role="button" data-icon="star">Suivant</a>
        </div><!-- /content -->

        <div data-role="footer">
            <h6>Kolb test</h6>   
        </div>
    </div>

    <!--page 2 inscription -->
    <div data-role="page" id="formulaire">
            <div data-role="header"><!-- header -->
                 <h1>Kolb Jquery Mobile</h1>
            </div>

            <div data-role="content"><!-- contenu -->
                <form action="questionaire.php" id="formulaire2" name="formulair2" method="POST" data-ajax="false">
                    
                    <div data-role="fieldcontain" data-mini="true">
                        <div data-role="fieldcontain" data-mini="true">
                        <h3>&Eacute;valuation Kolb</h3>
                        <p>Les donn&eacute;es sont recueillis uniquement pour nos statistiques.</p>
                        <br>
                        <div class="ui-grid-b">
                          <div class="ui-block-a">
                            <label for="name" class="ui-input-text">Nom</label>
                            <input type="text" name="name" id="name" value="" autocomplete="off" required>
                          </div>
                          <div class="ui-block-b">
                            <label for="firstname" class="ui-input-text">Pr&eacute;nom</label>
                            <input type="text" name="firstname" id="firstname" value="" autocomplete="off" required>
                          </div>
                          <div class="ui-block-c">
                            <label for="birthday" class="ui-input-text">Date de naissance</label>
                            <input type="date" name="birthday" id="birthday" value="" autocomplete="off" required>
                          </div>
                        </div><!-- /grid-b -->
                        <br><br>
                        <div class="ui-grid-b">
                          <fieldset data-role="controlgroup">
                            <legend>Niveau d'&eacute;tude</legend>
                                <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" checked="checked" />
                                <label for="radio-choice-1">Autre</label>

                                <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2"  />
                                <label for="radio-choice-2">Bac</label>

                                <input type="radio" name="radio-choice" id="radio-choice-3" value="choice-3"  />
                                <label for="radio-choice-3">Bac+2/3</label>

                                <input type="radio" name="radio-choice" id="radio-choice-4" value="choice-4"  />
                                <label for="radio-choice-4">Sup&eacute;rieur</label>
                        </fieldset>  
                      </div>
                  </div>
                      <input type="submit" class="ui-shadow ui-btn ui-corner-all" style="text-transform: uppercase; text-decoration: none;" value="Démarrer">
                </form>         
            </div>

        
            <div data-role="footer">
                <h6>Kolb test</h6>   
            </div>

    </div>

    </body>
</html>



