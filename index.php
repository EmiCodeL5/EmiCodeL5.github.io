<?php
 session_start();
?>

<!DOCTYPE html>

<html>
        <?php
           include("head.php");
        ?>
    <body>

<div id="container" class="container-fluid">


 <!--Header-->

   <?php
      include("rsHeader.php");
   ?>


 <!--Navigation-->

  <?php
      include("rsVisitorNav.php");
  ?>




        <section id="image_accueil" class="row">

          <div id="texte_presentation_img" class="col-9 offset-3 col-sm-7 offset-sm-5 my-5 mr-2 p-2 pt-sm-5 pt-1">


                <h2 class="Abril_Fatface mt-5">
                  Make <span class="text-warning">Money</span> With U$
                </h2>


<hr class="mb-0">
                <p class="img-text Orbitron-Mediu Lobster text-justify text-presentation">

                    Richest Student, une entreprise
                    qui vous donne la possibilité de faire plus de
                  <b class="Orbitron-Blac">$250 US</b> par mois juste en vendant ses produits.
             <b class="Orbitron-Blac">C'est pas cool ça ?</b>
                </p>

<hr class="mt-0">
               <p>

                   <a href="rsConnexionForm.php">
                     <button class="btn btn-order btn-success bg-success Playfair_Display-Medium">
                             Connexion
                     </button>
                   </a>
                    <a href="rsInscriptionForm.php">
                     <button class="btn btn-order btn-primary bg-primary Playfair_Display-Medium">
                          Inscription
                      </button>
                  </a>

            </p>





          </div>






					 </section>



<div class="row my-4">

          <div class="d-none d-sm-block col-sm-5 offset-sm-1">
             <img src="image_presentation/argent_4.jpg"  class="w-100 h-100 rounded-circle"/>
          </div>

          <div id="texte_presentation" class=" col-12 col-sm-5">

<h2 class="Playfair_Display-Bold">
  Richest Student
 </h2>

  <div class="text-justify Playfair_Display-Medium intro-text">


       Savez-vous à quel point le monde tourne ? Et savez-vous le pouvoir et la douceur d'être  jeune et libre ?
              Aujourd'hui, étudier ne suffit plus et tout le monde le sait !
            <br><br>
               Nous vivons un monde où la débrouillardise et le sens de l'innovation sont les clés de la survie. Des talents qui, si nous ne sommes pas tous nés avec, nous pouvons tous les développer par le travail et ceci, dès notre plus jeune âge.
            <br><br>
          Mais, imaginez-vous à quel point c'est  difficile de trouver un travail ? À quel point c'est encore plus difficile de travailler avec un patron ? À quel point c'est stressant  d'étudier  en même temps de travailler ?
            <br><br>

            Et bien, vous êtes au bon endroit. la solution ! Richest Student est juste à votre portée. Travailler et apprenez sans aucun patron mais plutôt avec des accompagnateurs à votre service.
            si vous êtes de ceux qui croient que l'argent peut être un instrument de liberté et que l'âge ne doit jamais être une barrière à cette douceur que la liberté procure alors, <a href="rsInscriptionForm.php">rejoignez-nous</a>.
            <br/>
            <a href="rsAPropos.php" class="float-right pt-2">
            En savoir plus sur nous.
            </a>



            </div>

    </div>


  </div>





  <div id="produits_phares" class="ro_p row my-4 rounded">

    <h2 class="Playfair_Display-Bold col-12 mt-sm-3 mb-3" >
        Nos Produits Phares
    </h2>


      <?php
        include("rsProduitsPhares.php");
      ?>



  </div>





   <div id="temoignages" class="Playfair_Display-Medium bg-secondary px-3 rounded">
    <h2 class="Playfair_Display-Bold text-white text-center">
           Les Temoignagnes
     </h2>

     <div class="row mt-3">

         <?php
           include("rsTemoignages.php");
         ?>
     </div>

  </div>


<!--Footer-->
   <?php
       include("rsFooter.php");
   ?>

      </div>


    </body>

</html>