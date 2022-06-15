<?php 
 require_once("./views/includes/navbar.php");

$Aff_like= new PostController();
$Afficherlikes =$Aff_like->Afficherlike();
// echo '<pre>';
// die(var_dump($Afficherlikes));
// die;

// $_SESSION['idlike']=$Afficherlikes['idlike'];
// echo $_SESSION['idlike'];
// die();
?>

<div id="menu" class="container mx-auto px-4 lg:pt-24 lg:pb-64">
    <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
            <h2 class="text-4xl font-semibold text-black">Liste des liké</h2>
            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut mollis nulla, ut efficitur massa.
                Praesent vitae iaculis orci
            </p>
        </div>
    </div>
    <?php foreach ($Afficherlikes as $Afficherlike) : ?>
    <div class="flex flex-wrap mt-12 justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
            <div class="col-span-2 sm:col-span-1 xl:col-span-1">
                <img alt="..." src="./public/image/<?= $Afficherlike['image'] ?>" class="h-24 w-24 rounded  mx-auto" />
            </div>
            <div class="col-span-2 sm:col-span-4 xl:col-span-4">
                <h3 class="font-semibold text-black"><?= $Afficherlike['titrei_mg'] ?></h3>
                <p>
                    <?php echo $Afficherlike['descreption'] ?>
                </p>
                <p>$<?php echo $Afficherlike['prix'] ?> </p>
            </div>

            <form action="supprimerLike" method="post">
                <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic ">
                    <input type="hidden" name="idlike" value="<?php echo  $Afficherlike['idlike'] ?>">
                    <button class="h-10 px-6 font-semibold rounded-md border bg-red-500 border-slate-200 text-slate-900"
                        type="submit">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php endforeach; ?>
</div>


