<?php
require_once("includes/function.php");

/**
 * declaration des variables de calcul
 */
$ea = 0;
$ec = 0;
$or = 0;
$ca = 0;

/**
 * Parcours les POST
 * Trie des post en fonction de la categorie de la question
 */
foreach ($_POST as $name=>$valeur) 
{
	switch (substr($name, -2)) { // compage les 2 dernieres lettres (la categorie uniquement)
    
    case "EA":
        $ea = $ea + $valeur; // incremente la variable de la categorie quand le cas correspond
        break;

    case "EC":
        $ec = $ec + $valeur; 
        break;

    case "OR":
        	$or = $or + $valeur;
        break;

    case "CA":
        $ca = $ca + $valeur;
        break; 
	}
}

/**
 * calcul des variable de differences
 */
$y  = $ca - $ec; 
$x  = $ea - $oc; 

$profil="";
/**
 * comparaison profiles
 */
if($x >= 3 && $x <= 17 && $y <= 2 && $y >= -12)
{
    $profil="Accomodateur";
}
    else if($x <= 2 && $x >= -15 && $y <= 2 && $y >= -12)
    {
        $profil="Divergent"; 
    } 
        else if($x >= 3 && $x <= 17 && $y >= 3 && $y <= 18)
        {
            $profil="Convergent";
        }
            else if($x <= 2 && $x >= -15 && $y >= 3 && $y <= 18)
            {
                $profil="Assimilateur";
            }
else {echo"L'application rencontre un problème technique, veuillez nous en excuser";}

/**************************************************************************** 
Affichage dynamique profil dominant
****************************************************************************/
$profilDescription = array(
    'ec' => array("Cela correspond &agrave; une approche de l’apprentissage bas&eacute;e sur la r&eacute;ceptivit&eacute; et l’exp&eacute;rience, ce qui d&eacute;pend essentiellement de jugements inspir&eacute;s par le sentiment. Des sujets &agrave; score &eacute;lev&eacute; en EC ont tendance &agrave; &ecirc;tre empathiques et orientés vers les autres. Ils trouvent en général que les apports théoriques sont sans utilit&eacute; et pr&eacute;f&egrave;rent traiter chaque situation comme un cas unique. Ils apprennent mieux &agrave; partir d’exemples particuliers dans lesquels ils peuvent &ecirc;tre engag&eacute;s. Dans leur approche de l’apprentissage, des sujets qui privil&eacute;gient l’exp&eacute;rience concr&egrave;te s’orientent davantage vers leurs pairs que vers les autorit&eacute;s et ils tirent davantage de l’&eacute;change et de la discussion avec les sujets qui sont eux aussi &agrave; dominante EC."),
    'or' => array("Cela correspond &agrave; une approche analytique et conceptuelle de l’apprentissage qui est en rapport avec la pens&eacute;e logique et l’&eacute;valuation rationnelle. Des sujets à score élevé en CA s’int&eacute;ressent aux objets et aux symboles plus qu’aux personnes. Ils apprennent mieux dans des situations d’apprentissage structur&eacute;s de manière autoritaire et impersonnelle qui mettent l’accent sur la th&eacute;orie et l’analyse syst&eacute;matique. Ils sont frustr&eacute;s par des d&eacute;marches non structurées d’apprentissage par d&eacute;couverte, comme des exercices et des simulations et ils en tirent peu de b&eacute;n&eacute;fice."),
    'ca' => array("Cela indique une orientation vers un apprentissage par l’action, bas&eacute; sur l’exp&eacute;rimentation. Des sujets au score élevé en EA apprennent mieux lorsqu’ils peuvents s’engager dans des projets, du travail &agrave; la maison ou des discussions en petits groupes. Ils n’aiment pas les situations d’apprentissage passives comme les cours. Ces sujets ont tendance à être extravertis."),
    'ea' => array("Cela indique une approche de l’apprentissage basée sur l’exp&eacute;rimentation, conduite de mani&egrave;re impartiale et r&eacute;fl&eacute;chie. Des sujets au score &eacute;lev&eacute; en OR se basent beaucoup sur une observation minutieuse pour formuler un jugement et préfèrent des situations d’apprentissage comme des expos&eacute;s qui leur permettent d’adopter le r&ocirc;le d’observateur impartial et objectif. Ces sujets ont tendance &agrave; &ecirc;tre introvertis.")); 


$sup=0;
if(compareEquality($ec,$oc,$ca,$ea)) // true si egalite
{
    if($ec==$oc and $ec==$ca and $ec==$ea)
    {
         $profilStock = "Vous avez plusieurs profil dominant : exp&eacute;rience concr&egrave;te, observation r&eacute;fl&eacute;chie, conceptualisation abstraite et exp&eacute;rimentation active";
         $egality=true;
    }
    else if($ec==$oc and $ec==$ca)
        {
            $profilStock = "Vous avez plusieurs profil dominant : experience concr&egrave;te, observation r&eacute;fl&eacute;chie et conceptualisation abstraite";
            $egality=true;
        }
         else if($ec==$oc and $ec==$ea)
             {
                $profilStock = "Vous avez plusieurs profil dominant : experience concr&egrave;te, observation réfléchie et exp&eacute;rimentation active";
                $egality=true;
             }
             else if($ec==$ca and $ec==$ea)
                 {
                    $profilStock = "Vous avez plusieurs profil dominant : experience concr&egrave;te, conceptualisation abstraite et exp&eacute;rimentation active";
                    $egality=true;
                 }
                else if($ec==$oc)
                     {
                        $profilStock = "Vous avez plusieurs profil dominant : experience concrète et observation r&eacute;fl&eacute;chie";
                        $egality=true;
                     }
                     else if($ec==$ca)
                         {
                            $profilStock = "Vous avez plusieurs profil dominant : experience concr&egrave;te et conceptualisation abstraite";
                            $egality=true;
                         }
                        else {
                            /*ec == ea*/
                            $profilStock = "Vous avez plusieurs profil dominant : experience concrète et exp&eacute;rimentation active";
                            $egality=true;
                        }
 }
 else 
{
     $sup = compareValues($ec,$oc,$ca,$ea); // recherche de la valeur supérieur
 }
 
 if($sup==$ec)
 {
     $profilStock='ec';
 }
 else if($sup==$oc)
     {
          $profilStock='oc';
     }
     else if($sup==$ca)
         {
              $profilStock='ca';
         }
         else {$profilStock='ea';}
 
 
 if ($egality==true) {$profilDominant = $profilStock;}
 else {$profilDominant = array_shift($profilDescription[$profilStock]); /* conversion chaîne en string */}

/**************************************************************************** 
Affichage dynamique profil d'apprentissage
****************************************************************************/                  
 $profilApprentissage = array(
     'Accomodateur' => array("L'accomodateur a des orientations oppos&eacute;es &agrave; celles de l'assimilateur. Il r&eacute;ussit mieux dans les domaines de l'exp&eacute;rience concr&egrave;te (ec) et l'exp&eacute;rimentation active (ea). Il est surtout capable de r&eacute;aliser des choses - en mettant en pratique des plans et des exp&eacute;riences - et de s'engager dans de nouvelles exp&eacute;riences. Il a tendance &agrave; prendre davantage de risques que les sujets caract&eacute;ristiques des trois autres cat&eacute;gories. On a retenu le terme accommodateur car un tel sujet r&eacute;ussit particuli&egrave;rement bien dans des situations ou il s'agit de s'adapter &agrave; des circonstances p&eacute;cifiques. Dans des situations dans lesquelles une th&eacute;orie ne correspond pas aux faits, cette personne remet le plan ou la th&eacute;orie en question. Elle a tendance &agrave; r&eacute;soudre les probl&egrave;mes d'une mani&egrave;re intuitive par essai et erreur, s'appuyant plus sur l'information des autres que sur leur aptitude &agrave; l'analyse. Elle est &agrave; l'aise avec les autres,mais est souvent per&ccedil;ue comme impatiente et brusque. Sa formation se situe souvent dans le domaine technique ou pratique comme les affaires. On retrouve des personnes ayant ce mode d'apprentissage dans des m&eacute;tiers orient&eacute;s vers l'action, comme les m&eacute;tiers du commerce."),
     'Divergent'    => array("Le divergent a des possibilit&eacute;s d'apprentissage oppos&eacute;es &agrave; celles du convergent. Un tel sujet est le plus &agrave; l'aise dans une situation d'exp&eacute;rience concr&egrave;te (ec) et d'observation r&eacute;fl&eacute;chie (or). Sa force r&eacute;side dans l'imagination. Il parvient tr&egrave;s bien &agrave; percevoir des situations concr&egrave;tes en adoptant des perspectives vari&eacute;es.  Nous avons appel&eacute; ce style divergent car une personne ayant ce mode d'apprentissage r&eacute;ussit  mieux dans des situations qui supposent la cr&eacute;ation d'id&eacute;es comme  par exemple des sessions de brainstorming. La recherche montre que les divergents s'int&eacute;ressent &agrave; autrui et font preuve d'imagination et  d'&eacute;motion. Ils ont des int&eacute;r&ecirc;ts culturels &eacute;tendus et tendent &agrave; se sp&eacute;cialiser dans le domaine  artistique. Les conseillers, les sp&eacute;cialistes du d&eacute;veloppement, les chefs du personnel  sont souvent caract&eacute;ris&eacute;s par ce mode d'apprentissage."),
     'Convergent'   => array("Les aptitudes d'apprentissage dominantes du convergent sont la conceptualisation abstraite (ca) et l'exp&eacute;rimentation active (ea). La force la plus importante de ce type de sujet r&eacute;side dans l'application pratique des id&eacute;es. Une personne ayant ce type semble le mieux r&eacute;ussir dans des situations analogues aux tests d'intelligence, o&ugrave; il n'y a qu'une r&eacute;ponse correcte ou solution &agrave; une question ou un probl&egrave;me. La connaissance de cette personne est organis&eacute;e de telle sorte qu'elle peut se centrer sur des probl&egrave;mes sp&eacute;cifiques en utilisant une pens&eacute;e hypoth&eacute;ticod&eacute;ductive. La recherche concernant ce mode d'apprentissage montre que les convergents sont relativement peu &eacute;motifs, pr&eacute;f&eacute;rant s'occuper de choses plut&ocirc;t que de personnes. Ils ont des int&eacute;r&ecirc;ts techniques &eacute;troits et cherchent &agrave; se sp&eacute;cialiser en science physiques. Ce mode d'apprentissage est caract&eacute;ristique de bon nombres d'ing&eacute;nieurs."),
     'Assimilateur' => array("L'assimilateur a des aptitudes d'apprentissage dans le domaine de la conceptualisation abstraite (ca) et de l'observation r&eacute;fl&eacute;chie (or). Une telle personne a surtout des possibilit&eacute;s dans le domaine de la cr&eacute;ation des mod&egrave;les th&eacute;oriques. Elle r&eacute;ussit particuli&egrave;rement bien dans le domaine du raisonnement inductif et dans l'organisation d'observations disparates en une explication coh&eacute;rente. Elle est, comme le convergent, moins int&eacute;ress&eacute;e par les autres que par les concepts abstraits ; mais elle se sent moins concern&eacute;e par l'emploi pratique des th&eacute;ories. Pour un tel sujet, il est plus important que la th&eacute;orie soit satisfaisante d'un point de vue logique ; dans une situation dans laquelle une th&eacute;orie ne s'accommoderait pas aux faits, l'assimilateur aurait plut&ocirc;t tendance &agrave; n&eacute;gliger ou &agrave; r&eacute;examiner les faits. Ce mode d'apprentissage est plut&ocirc;t caract&eacute;ristique des sciences de base et des math&eacute;matiques que des sciences appliqu&eacute;es. On trouve ce mode d'apprentissage chez les praticiens de la recherche ou de la planification."
));

    $profilApprentissage = array_shift($profilApprentissage[$profil]); // stockage description en fonction du profil

?>

<!DOCTYPE html> 
<html> 
  <head> 
      <title>Bilan du test</title> 

      <meta name="viewport" content="width=device-width, initial-scale=1"> 
	    <meta charset="utf-8">

      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />

      <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
  </head> 
 
  <body>
  	<div data-role="page" id="bilan">
  			<div  data-role="header">
  				<h1>Résultat</h1>
  			</div> 

  			<div data-role="content"><!-- contenu -->
  				<h2>R&eacute;sultats de votre test Kolb: </h2>
  	           <h3>Votre Profil : </h3>
  	             <p><?= $profil; ?></p>
  	           <h4>Votre Dominante : </h4>
  	             <p><?= strtoupper($profilStock); ?></p>

  			       <h4>Description de votre profil: </h4>
  			         <p class="lead"><?= $profilApprentissage; ?></p>

  			       <h4>Description de votre dominante:</h4>
  			         <p class="lead"><?= $profilDominant ;?></p>
              
                <button><a href="http://kolb-questionnaire.url.ph/">Tester l'application web avec Foundation</a></button>	
        </div>

        <div data-role="footer">
            <h6>Kolb test</h6>   
        </div>
  </body>
</html>