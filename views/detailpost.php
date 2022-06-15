<?php
//  require_once("./views/includes/navbar.php");
$Aff_like= new PostController();
$likes =$Aff_like->Afficherlike();

if (isset($_POST['intpost'])) {
    $data = new PostController();
    $post = $data->un_Post();

    $_SESSION['intpost'] = $_POST['intpost'];
    $_SESSION['image'] = $post->image;
    $_SESSION['titrei_mg'] = $post->titrei_mg;
    $_SESSION['descreption'] = $post->descreption;;
    $_SESSION['prix']=$post->prix;   
}

if (isset($_POST["submit"])) {
    $data = new PostController();
    $data->AjouterLike();
}

// var_dump($like);
// die;

?>



<div class="">
    <div class='flex max-w-xl my-10 bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
        <div class='flex items-center w-full'>
            <div class='w-full'>
                <a href="<?php echo BASE_URL; ?>home"
                    class="block lg:inline-block text-md font-bold  text-orange-500  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                    HOME
                </a>
                <div class="flex flex-row mt-2 px-2 py-3 mx-3">
                    <div class="w-auto h-auto rounded-full border-2 border-pink-500">
                        <!-- <img class='w-12 h-12 object-cover rounded-full shadow cursor-pointer' alt='Image'
                            src='./public/image/<?= $post->image ?>'> -->
                    </div>
                    <div class="flex flex-col mb-2 ml-4 mt-1">
                        <div class='text-gray-600 text-sm font-semibold'>
                        </div>
                        <div class='flex w-full mt-1'>
                            <div class='text-blue-700 font-base text-xs mr-1 cursor-pointer'>
                                <?php echo  $_SESSION['intpost'];  ?>
                            </div>
                            <!-- <div class='text-gray-400 font-thin text-xs'>
                                <?php echo  $_SESSION['prenom'];  ?>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-100"></div>
                <div class='text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2'><img class="rounded"
                        src="./public/image/<?=  $_SESSION['image']?>"></div>
                <div class='text-gray-600 font-semibold text-lg mb-2 mx-3 px-2'>
                    <?php echo  $_SESSION['titrei_mg'] ; ?></div>

                <div class='text-gray-500 font-thin text-sm mb-6 mx-3 px-2'>
                    <?php echo $_SESSION['descreption'] ;  ?>
                </div>
                <div class="text-gray-500 font-thin text-sm mb-6 mx-3 px-2
                 ">$<?php echo $_SESSION['prix'] ?></div>

                <div class="flex justify-start mb-4 border-t border-gray-100">
                    <div class="flex space-x-4 mb-6 text-sm font-medium">
                        <div class="flex-auto flex space-x-4">
                            <?php if (!isset($_SESSION['log'])) : ?>

                            <button
                                class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200"
                                type="button" aria-label="Like" id="btn1" onclick="myFunction()"> <a
                                    href="<?php echo BASE_URL; ?>login">
                                    <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />

                                    </svg></a>
                            </button>
                            <button id="btn2" onclick="Function()"
                                class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200">
                                <a href="<?php echo BASE_URL; ?>login"> <i
                                        class="fa-solid fa-circle-arrow-down"></i></a>
                            </button>
                            <?php
                                // var_dump($_SESSION);
                                // die();
                                ?>
                            <?php elseif (isset($_SESSION['log'])) :  ?>
                            <?php if (($_SESSION['rool'] == false)) :  ?>
                            <form action="supprimerpost" method="post">
                                <input type="hidden" name="intpost" value="<?php echo $_SESSION['intpost'] ?>">
                                <button
                                    class="h-10 px-6 font-semibold rounded-md border bg-red-500 border-slate-200 text-slate-900"
                                    type="submit">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                            <form action="modifierpost" method="post">
                                <input type="hidden" name="intpost" value="<?php echo $_SESSION['intpost'] ?>">
                                <button
                                    class="h-10 px-6 font-semibold rounded-md border bg-orange-400 border-slate-200 text-slate-900"
                                    type="submit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </form>
                            <!-- *****************like******************* -->

                            <?php if (empty($_SESSION['log'])) : ?>
                            <!-- <form action="" method="POST">
                                <input type="hidden" name="intpost" value="<?php echo $post->intpost ?>">
                                <button type="submit" name="submit"
                                    class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border  border-slate-200 "
                                     aria-label="Like" id="btn1" onclick="">
                                        <i class="fa-solid fa-heart "></i>
                                </button>
                            </form> -->
                            <?php else : ?>
                            <!-- like -->
                           
                            <?php 
                           
                            if (in_array($_SESSION['intpost'],$likes)):  ?>
                                <form action="" method="POST">
                                <input type="hidden" name="intpost" value="<?php echo  $_SESSION['intpost'] ?>">
                                <button type="submit" name="submit"
                                    class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border  border-slate-200 "
                                     aria-label="Like" id="btn1" onclick="" style="color: red;">
                                    <i class="fa-solid fa-heart "></i>
                                </button>
                            </form>        
                            <?php else: ?>   
                                <form action="" method="POST">
                                <input type="hidden" name="intpost" value="<?php echo $_SESSION['intpost'] ?>">
                                <button type="submit" name="submit"
                                    class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border  border-slate-200 "
                                     aria-label="Like" id="btn1" onclick="">
                                    <i class="fa-solid fa-heart "></i>

                                </button>
                            </form>                   
                            <?php  endif  ?>
                                       
                            <?php endif ?>



                            <!-- dowload -->

                            <form action="" method="POST">
                                <button id="btn2" onclick="Function()"
                                    class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200">
                                    <a href="<?php //echo BASE_URL; 
                                                        ?>"> <i class="fa-solid fa-circle-arrow-down"></i></a>
                                </button>
                            </form>

                            <?php elseif (($_SESSION['rool'] == true)) :  ?>
                            <p>dfcneaf,lkze,ld,</p>
                            <?php endif ?>


                            <?php endif ?>
                            <!-- <button
                                class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200"
                                type="button" aria-label="Like">
                                <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                </svg>
                            </button>
                            <button
                                class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200">
                                <i class="fa-solid fa-circle-arrow-down"></i>
                            </button> -->

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
<script>
window.addEventListener("contextmenu",
    function(e) {
        e.stopPropagation()
    }, false)

function myFunction() {
    document.getElementById("btn1").style.color = "red";

}

function Function() {

    document.getElementById("btn2").style.color = "black";
}
</script>