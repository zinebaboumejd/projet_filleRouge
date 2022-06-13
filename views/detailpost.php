<?php
//  require_once("./views/includes/navbar.php");
if (isset($_POST['intpost'])) {
    $data = new PostController();
    $post = $data->un_Post();

    $_SESSION['intpost'] = $_POST['intpost'];

   


if (isset($_POST["submit"])) {
    $data = new PostController();
    $post = $data->addLike();
}

}

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
                                <?php echo  $_SESSION['nom'];  ?>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-100"></div>
                <div class='text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2'><img class="rounded"
                        src="./public/image/<?= $post->image ?>"></div>
                <div class='text-gray-600 font-semibold text-lg mb-2 mx-3 px-2'>
                    <?php echo  $post->titrei_mg;  ?></div>
                <div class='text-gray-500 font-thin text-sm mb-6 mx-3 px-2'>
                    <?php echo  $post->descreption;  ?>
                </div>
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
                            <form action="" method="POST">
                                <input type="heddin" name="heddin" value="<?php echo $_SESSION['intpost'] ?>">
                                <button type="submit"
                                    class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border  border-slate-200 "
                                    type="button" aria-label="Like" id="btn1" onclick="myFunction()">
                                    <a href="<?php echo BASE_URL; ?>cart">
                                        <i class="fa-solid fa-heart "></i>
                                    </a>
                                </button>
                            </form>
                            <?php else : ?>
                            <!-- like -->
                            <?php // if(is post like):   ?>
                                <form method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="product_id" value="<?php echo $_SESSION['intpost'] ;?>
                                            ">
                                            <div class="d-grid gap-2 d-md-block">
                                            <button type="submit" name="submit" class="btn btn-outline-danger btn-block ms-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                            <!-- <form action="POST">
                                <input type="heddin" value="<?php echo $_SESSION['intpost'] ;?>">
                                <button type="submit"
                                    class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200"
                                    type="button" aria-label="Like" id="btn1" onclick="myFunction()">
                                    <a href="">
                                        <i class="fa-solid fa-heart "></i>
                                    </a>
                                </button>
                            </form> -->
                            <?php // else():   ?>
                            <!-- <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200" type="button" aria-label="Like" id="btn1" onclick="myFunction()"  style="color:red">
                                            <a href="<?php echo BASE_URL; ?>cart">
                                                <i class="fa-solid fa-heart "></i>

                                            </a>
                                        </button> -->
                            <?php // endif 
                                        ?>
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