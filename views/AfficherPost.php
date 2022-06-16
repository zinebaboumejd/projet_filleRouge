<?php 

 $Aff_Posts= new PostController();
 $AfficherPosts =$Aff_Posts->All_Post_id();

// die(var_dump($AfficherPosts));
include("./views/includes/navbar.php");
?>
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

        <div class="flex flex-wrap -m-4">
            <?php foreach ($AfficherPosts as $AfficherPost) : ?>

            <div class="lg:w-1/4 p-4 w-1/2">
                <a class="block relative h-48 rounded overflow-hidden " href="">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                        src="./public/image/<?= $AfficherPost['image'] ?>">
                </a>

                <div class="mt-4">
                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">
                        <?php echo $AfficherPost['category'] ?></h3>
                    <h2 class="text-gray-900 title-font text-lg font-medium">
                        <?php echo $AfficherPost['titrei_mg'] ?>
                    </h2>
                    <p class="mt-1"><?php echo $AfficherPost['descreption'] ?></p>
                </div>

                <!--                   
                    <form action="supprimerpost" method="post"
                        class="mx-auto mt-6 flex w-full flex-col gap-3 px-5 sm:flex-row">
                        <input type="hidden" name="intpost" value="<?php  //echo $AfficherPost['intpost'] ?>">
                        <button type="submit"
                            class="p-2.5 ml-2 text-sm font-medium text-white bg-red-700 rounded-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-700 dark:focus:ring-blue-800"><i
                                class="fa-solid fa-trash m-1"></i></button>
                    </form> -->
                <!-- <a href="#"  class="p-2.5 ml-2 text-sm font-medium text-white bg-red-700 rounded-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-700 dark:focus:ring-blue-800"> 
                    <i class="fa-solid fa-eye"></i>
                    </a> -->
                   
                <form method="POST" action="detailpost">
                    <button type="submit"
                        class="flex-none flex items-center justify-center w-9 h-9 hover:bg-sky-800 rounded-md text-slate-300 border border-slate-200">
                        <!--aria-label="Like"-->
                        <i class="fa-solid fa-eye">
                            <input type="hidden" name="intpost"  value="<?php  echo $AfficherPost['intpost'] ?>">
                        </i>
                        <a href="detailpost"></a>
                    </button>
                </form> 
              
            </div>
 

            <?php endforeach ?>

        </div>

    </div>
</section>
</div>


<!-- <?php // foreach ($AfficherPosts as $AfficherPost) : ?>
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">Id:<?php //echo $AfficherPost['intpost'] ?>** <h2><?php //echo $AfficherPost['titrei_mg'] ?></h2></p>
  </div>
  <img src="./public/image/<?//= $AfficherPost['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><?php // echo $AfficherPost['descreption'] ?></p>
  </div>
  <div class="card-body">
                                    <form method="post" class="me-2" action="modifierpost">
                                        <input type="hidden" name="intpost" value="<?php //$AfficherPost['intpost'] ?>">
                                        <button class="btn btn btn-warning" type="submit"><i
                                                class="la la-edit fa fa-edit"></i>updat</button>
                                    </form>
  
                                    <form method="post" class="me-2" action="supprimerpost">
                                        <input type="hidden" name="intpost" value="<?php // echo $AfficherPost['intpost'] ?>"> 
                                        <button  class="btn btn btn-danger">Delet</button>
                                    </form>
</div>
</div> -->
<?php //endforeach ?>