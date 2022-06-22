<?php 

if (isset($_POST['submit'])) {
$Ajouterpanier=new PostController();
$Ajouterpanier->Ajouterpanier();

}



$Afficher_panier = new PostController();
$Afficherpaniers = $Afficher_panier->Afficherpanier();
// echo '<pre>';
// echo sizeof($Afficherpaniers);
// die(var_dump($Afficherpaniers));

$totalprix=new PostController();
$total=$totalprix->totalprix();

// echo $total[0][0];
for($i=0;$i<sizeof($Afficherpaniers);$i++){
 $data[]=$Afficherpaniers[$i]['intpost'];
 
}
// echo '<pre>';
// die(var_dump($data));

if (isset($_POST['valider'])) {
  
       $validercom=new PostController();
    $validercom->valider($data);
    //  echo "test".$i;
    }
    
    require_once("./views/includes/navbar.php");


?>

<div  class="min-h-[80vh]">

<div class="grid grid-cols-1 md:lg:xl:grid-cols-3 group pb-64 ml-[500px] ">
 
      <div class=" bg-white px-10 py-10 inset-x-80  w-[800px] ">
        <div class="flex justify-center border-b pb-8 mt-10">
          <h1 class="font-semibold text-2xl">Panier</h1>
        
        </div>
        <div class="flex justify-center mt-10 mb-5  ">
          <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
          <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
        </div>
        <?php foreach ($Afficherpaniers as $Afficherpanier) : ?>
        <div class="flex items-center justify-center pl-[150px] hover:bg-gray-100 -mx-8 px-6 py-5">
          <div class="flex w-2/5">
            <div class="w-20">
              <img class="h-24" src="./public/image/<?= $Afficherpanier['image'] ?>" alt="">
            </div>
            <div class="flex flex-col justify-between ml-4 flex-grow">
              <span class="font-bold text-2xl"><?= $Afficherpanier['titrei_mg'] ?></span>
              <span class="text-gray-900 text-xl">  <?php //echo $Afficherpanier['descreption'] ?></span>
              <span class="text-gray-900 text-xs">  <?php echo $Afficherpanier['category'] ?></span>

            </div>
          </div>
          
          <span class="text-center w-1/5 font-semibold text-sm">$  <?php echo $Afficherpanier['prix'] ?></span>
          <span class="text-center w-1/5 font-semibold text-sm">
             <form action="supprimerpanier" method="post" class="h-full flex items-center ml-30">
        <div class=" ">
            <input type="hidden" name="intpost" value="<?php echo  $Afficherpanier['intpost'] ?>">
            <button class="h-10 px-6 mr-10 mt-2 font-semibold flex p-2.5 bg-red-500 rounded-xl hover:rounded-3xl hover:bg-red-600 transition-all duration-300 text-white "
                type="submit" name="supprimerpanier">
                <i class="fa-solid fa-xmark mt-1"></i>
            </button>
        </div>
    </form>
          </span>
        </div>
        <?php endforeach  ?> 

       
 <form action="" method="post">
        <div class="w-full   bg-indigo-200 shadow-xl shadow-indigo-200 py-10 px-20 flex justify-between items-center mt-10 drop-shadow-md">
            <p class=" text-gray-900"> <span class="text-4xl font-medium">Toutal</span> <br> <span class="text-lg  flex justify-center"><?php echo $total[0][0];  ?></span></p>
            
            <input type="hidden" name="intpost" value="<?php // echo  $Afficherpanier['intpost'] ?>">
            <button type="submit" name="valider" class="px-3 py-2  font-medium text-slate-700 shadow-xl  hover:bg-white duration-150  bg-yellow-400 ">Valide</button>
        </div>
</form>
    </div>
  
</div>


    </div >
