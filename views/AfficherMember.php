<?php 

 $affichermember= new AdmineController();
 $afficher_members =$affichermember->affichermember();
// die(print_r($afficher_member['idmember']));
require_once("./views/includes/navbar.php");
?>
<div  class="min-h-[80vh]">
<section class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto pt-20">
                <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Tous les utilisateur</h1>
                
                <!-- <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias, adipisci rem similique, at omnis eligendi optio eos harum.
                </p> -->
             
                <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">
                  <?php foreach ($afficher_members as $afficher_member) : ?>    
                     <div class="flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-600 rounded-xl">
                     <a class="block mx-auto bg-center bg-no-repeat bg-cover w-20 h-20 rounded-full border border-gray-400 shadow-lg"
                    href=""
                    style="background-image: url('../../../FilleRouge/public/logoimage/man-g39cec5cb0_1280.png')"></a>
              
                        <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white"> <?php echo $afficher_member['nom'].' '.$afficher_member['prenom'] ?></h1>
                        
                        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">design director</p>
                        
                       
                    </div>
<?php endforeach  ?>
     
                    </div>
                </div>
            </div>
        </section>
                  </div>

