
<?php
// echo $_POST['intpost'];
// echo $_SESSION['idmember'];
// die;

$likes=new PostController();
$like=$likes->Afficherlike();


$test = $_POST['intpost'];
if ($test!=null) {
    $data = new PostController();
    $post = $data->un_Post();

}


if (isset($_POST['submit'])) {
$Ajouterlike=new PostController();
$Ajouterlike->Ajouterlike();
// print_r($Ajouterlike);
// die();
}

require_once("./views/includes/navbar.php");


?>



<div class="">
    
    <div class='flex max-w-xl  bg-white shadow-md rounded-lg overflow-hidden mx-auto pt-20'>
        <div class='flex items-center w-full'>
            <div class='w-full'>
                <a href="<?php echo BASE_URL; ?>HomeMember"
                    class="block lg:inline-block text-md font-bold  text-orange-500  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                    HOME
                </a>
                <div class="flex flex-row mt-2 px-2 py-3 mx-3">
                    <div class="w-auto h-auto rounded-full border-2 border-pink-500">

                    </div>
                    <div class="flex flex-col mb-2 ml-4 mt-1">
                        <div class='text-gray-600 text-sm font-semibold'>
                        </div>
                        <div class='flex w-full mt-1'>
                            <div class='text-blue-700 font-base text-xs mr-1 cursor-pointer'>
                                <?php //echo   $post->intpost  ?>post
                            </div>

                        </div>
                    </div>
                </div>
                <?php //print_r($post);die; ?>
                <div class="border-b border-gray-100"></div>
                <div class='text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2'><img class="rounded"
                        src="./public/image/<?php echo $post->image; ?>"></div>
                <div class='text-gray-600 font-semibold text-lg mb-2 mx-3 px-2'>
                    <?php echo  $post->titrei_mg ; ?></div>

                <div class='text-gray-500 font-thin text-sm mb-6 mx-3 px-2'>
                    <?php echo  $post->descreption;  ?>
                </div>
                <div class="text-gray-500 font-thin text-sm mb-6 mx-3 px-2
                 ">$<?php echo  $post->prix ?></div>

                <div class="flex justify-start mb-4 border-t border-gray-100">
                    <div class="flex space-x-4 mb-6 text-sm font-medium">
                        <div class="flex-auto flex space-x-4">

<?php if (isset($_SESSION['log'])) : ?>
                            <!-- ila kan mlogi -->



        <?php if (($_SESSION['rool'] == false)) :  ?>
                            <!--ila kan  USER -->

                            <?php if ($_SESSION['idmember']==$post->idmember ) :?>
                                <!-- delete -->
                            <form action="supprimerpost" method="post">
                                <input type="hidden" name="intpost" value="<?php echo $post->intpost ?>">
                                <button
                                    class="h-10 px-6 font-semibold rounded-md border bg-red-500 border-slate-200 
                                    flex p-2.5  hover:rounded-3xl hover:bg-red-600 transition-all duration-300 text-white"
                                    type="submit">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                            <!-- update -->
                            <form action="modifierpost" method="post">
                                <input type="hidden" name="intpost" value="<?php echo  $post->intpost ?>">
                                <button
                                    class="h-10 px-6 font-semibold  border  border-slate-200  flex p-2.5 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white"
                                    type="submit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </form>

                            <?php //--------------------------- ?>
                            <!-- like -->
                            <?php     ?>
                            <?php    if (in_array($test,$like )):  ?>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="intpost" value="<?php echo  $post->intpost ?>">
                                                        <button type="submit" name="submit"
                                                            class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border  border-slate-200 "
                                                            aria-label="Like" id="btn1" onclick="" style="color: red;">
                                                            <i class="fa-solid fa-heart "></i>
                                                        </button>
                                                    </form>
                                                    <?php else: ?>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="intpost" value="<?php echo  $post->intpost ;?>">
                                                        <button type="submit" name="submit"
                                                            class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border  border-slate-200 "
                                                            aria-label="Like" id="btn1" onclick="">
                                                            <i class="fa-solid fa-heart "></i>

                                                        </button>
                                                    </form>
                                                    <?php  endif  ?>
                            

                            <?php //------------------------------- ?>
                            <?php else:  ?>
                           <?php   if ($like=='like'):  ?>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="intpost" value="<?php echo  $post->intpost ?>">
                                                        <button type="submit" name="submit"
                                                            class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border  border-slate-200 "
                                                            aria-label="Like" id="btn1" onclick="" style="color: red;">
                                                            <i class="fa-solid fa-heart "></i>
                                                        </button>
                                                    </form>
                                                    <?php  else: ?>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="intpost" value="<?php echo  $post->intpost ;?>">
                                                        <button type="submit" name="submit" 
                                                            class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border  border-slate-200 "
                                                            aria-label="Like" id="btn1" onclick="">
                                                            <i class="fa-solid fa-heart "></i>

                                                        </button>
                                                    </form>
                                                    <?php  endif  ?>
                            <!-- dowlod -->
                            <form action="panier" method="POST">
                            <input type="hidden" name="intpost" value="<?php echo  $post->intpost ?>">
                                <button id="telecharger"  type="submit" name="submit"
                                    class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200">
                                    <a href="<?php //echo BASE_URL; 
                                                        ?>"> <i class="fa-solid fa-circle-arrow-down"></i></a>

                                </button>
                            </form>

                            <?php endif  ?>














                            <?php  else : ?>
                             <!-- ila makanch mlogi -->
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
                            
    <?php  endif  ?>
<?php  else : ?>
                            <!-- ila makanch mlogi -->  <button
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
 <?php  endif  ?>






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
</script>