<?php 

 $Aff_Posts= new PostController();


 $categorys = $Aff_Posts->getProductsByCategory($_GET['category']);

// die(var_dump($AfficherPosts));
include("./views/includes/navbar.php");
?>
<div  class="min-h-[80vh]">
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
<section class="text-gray-600 body-font">

    <div class="container px-5 py-24 mx-auto">

        <div class="flex flex-wrap w-full mb-8">
            <div class="w-full mb-6 lg:mb-0">
                <h1 class="sm:text-4xl text-5xl font-bold  title-font mb-2 text-gray-900">List Post
                </h1>
                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
            </div>
        </div>
        <?php
            if(count($categorys)==0){
                echo "<h1>il n ya pas de poste dans cette categorie</h1>";
            }
        ?>

        <div class="flex flex-wrap -m-4">
            <?php foreach ($categorys as $category) : ?>

            <div class="lg:w-1/4 p-4 w-1/2">
                <a class="block relative h-48 rounded overflow-hidden " href="">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                        src="./public/image/<?= $category['image'] ?>">
                </a>

                <div class="mt-4">
                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">
                        <?php echo $category['category'] ?></h3>
                    <h2 class="text-gray-900 title-font text-lg font-medium">
                        <?php echo $category['titrei_mg'] ?>
                    </h2>
                    <p class="mt-1"><?php echo $category['descreption'] ?></p>
                </div>

              
                   
                <form method="POST" action="detailpost">
                    <button type="submit"
                        class="flex-none flex items-center justify-center w-9 h-9 hover:bg-sky-800 rounded-md text-slate-300 border border-slate-200">
                       
                        <i class="fa-solid fa-eye">
                            <input type="hidden" name="intpost"  value="<?php  echo $category['intpost'] ?>">
                        </i>
                       
                    </button>
                </form> 
                
            </div>
 

            <?php endforeach ?>

        </div>

    </div>
</section>
</div>

</div>
