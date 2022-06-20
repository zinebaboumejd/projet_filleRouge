<?php 

 $Aff_Posts= new PostController();
 $AfficherPosts =$Aff_Posts->AfficherPost_id();
//  var_dump($AfficherPosts->intpost);

//  die;
require_once("./views/includes/navbar.php");
?>
    <div class="max-w-2xl mx-auto pt-[10%]">

        <div class="px-3 py-2">

            <div class="flex flex-col gap-1 text-center">
                <a class="block mx-auto bg-center bg-no-repeat bg-cover w-20 h-20 rounded-full border border-gray-400 shadow-lg"
                    href=""
                    style="background-image: url('https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg')"></a>
                <p class="font-serif font-semibold"><?php  echo $_SESSION['nom'] .' '.$_SESSION['prenom'] ?></p>
                <span class="text-sm text-gray-400">status </span>
            </div>

            <div class="grid grid-cols-3 gap-2 my-3">
            <?php foreach ($AfficherPosts as $AfficherPost) : ?>
                <form method="POST"  action="detailpost"> 
                    <input type="hidden" name="intpost" value="<?php  echo $AfficherPost['intpost'] ?>">
                    <button type="submit" class="rounded-lg" >
                        <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="detailpost">
                        <img alt="ecommerce" class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg"
                                            src="./public/image/<?= $AfficherPost['image'] ?>">
                        </a>  
                </button>
                </form>
                        <?php   //echo $AfficherPost['intpost'] ?>
                    <?php endforeach ?>     
                </div>
        </div>
    </div>
</div>