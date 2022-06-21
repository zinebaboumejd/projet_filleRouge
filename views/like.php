<?php
 require_once("./views/includes/navbar.php");

$Aff_like = new PostController();
$Afficherlikes = $Aff_like->Afficherlike();

// echo '<pre>';
// die(var_dump($Afficherlikes));
// die;


?>

<div id="menu" class="container mx-auto px-4 lg:pt-24 lg:pb-64 ">
    <div class="flex flex-wrap text-center justify-center ">
        <div class="w-full lg:w-6/12 px-4 mt-20">
            <h2 class="text-4xl font-semibold text-black">Liste des liké</h2>
            <!-- <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut mollis nulla, ut efficitur massa.
                Praesent vitae iaculis orci
            </p> -->
        </div>
    </div>
    <?php foreach ($Afficherlikes as $Afficherlike) : ?>
        <div class="flex justify-center  pt-10 ">
    <div class="flex justify-between w-96">
    <form action="http://localhost/FilleRouge/detailpost" method="post"  >
        <div class="flex ">
            <div class="">
                <button type="submit"><img alt="..." src="./public/image/<?= $Afficherlike['image'] ?>"
                        class="h-24 w-24 rounded  mx-auto" /></button>
                <input type="hidden" name="intpost" value="<?php echo  $Afficherlike['intpost']; ?>">

            </div>

            <div class=" flex flex-col justify-center ml-6">
                <h3 class="font-semibold text-black"><?= $Afficherlike['titrei_mg'] ?></h3>
                <p>
                    <?php echo $Afficherlike['descreption'] ?>
                </p>
                <p>$<?php echo $Afficherlike['prix'] ?> </p>
            </div>
        </div>
    </form>
    <form action="supprimerLike" method="post" class="h-full flex items-center">
        <div class=" ">
            <input type="hidden" name="intpost" value="<?php echo  $Afficherlike['intpost'] ?>">
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
</div>

</div>