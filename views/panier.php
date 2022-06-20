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



<div class="grid grid-cols-1 md:lg:xl:grid-cols-3 group bg-white shadow-xl shadow-neutral-100 border ">
 
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
              <span class="text-gray-900 text-xl">  <?php echo $Afficherpanier['descreption'] ?></span>
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


<!-- <div id="menu" class="container mx-auto px-4 lg:pt-24 lg:pb-64">
    <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
            <h2 class="text-4xl font-semibold text-black">Liste des liké</h2>
            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut mollis nulla, ut efficitur massa.
                Praesent vitae iaculis orci
            </p>
        </div>
    </div>
    <?php foreach ($Afficherpaniers as $Afficherpanier) : ?>
        <div class="flex justify-center  pt-10 ">
    <div class="flex justify-between w-96">
    <form action="http://localhost/FilleRouge/detailpost" method="post"  >
        <div class="flex ">
            <div class="">
                <button type="submit"><img alt="..." src="./public/image/<?= $Afficherpanier['image'] ?>"
                        class="h-24 w-24 rounded  mx-auto" /></button>
                <input type="hidden" name="intpost" value="<?php echo  $Afficherpanier['intpost']; ?>">

            </div>

            <div class=" flex flex-col justify-center ml-6">
                <h3 class="font-semibold text-black"><?= $Afficherpanier['titrei_mg'] ?></h3>
                <p>
                    <?php echo $Afficherpanier['descreption'] ?>
                </p>
                <p>$<?php echo $Afficherpanier['prix'] ?> </p>
            </div>
        </div>
    </form>
    <form action="supprimerpanier" method="post" class="h-full flex items-center">
        <div class=" ">
            <input type="hidden" name="intpost" value="<?php echo  $Afficherpanier['intpost'] ?>">
            <button class="h-10 px-6 font-semibold flex p-2.5 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white"
                type="submit" name="supprimerpanier">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </form>
    </div>
    </div>
<?php endforeach; ?>
<?php echo $total[0][0];  ?>

</div>
<button type="button" class='flex max-w-sm w-full bg-gradient-to-r from-indigo-500 via-pink-500 to-yellow-500 hover:from-indigo-600 hover:via-pink-600 hover:to-red-600 focus:outline-none text-white text-2xl uppercase font-bold shadow-md rounded-full mx-auto p-5'>
                <div class="flex sm:flex-cols-12 gap-2">
                    <div class="col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                        </svg>
                    </div>
                    <div class="col-span-2 pt-2">Button name</div>
                </div>    
            </button>
</div>

</div> -->
