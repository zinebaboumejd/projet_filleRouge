<?php 

 $Aff_Posts= new PostController();
 $AfficherPosts =$Aff_Posts->All_Post_id();

require_once("./views/includes/navbar.php");
?>
<!-- 
        <div class="grid grid-cols-3 gap-2 my-3">
                <?php foreach ($AfficherPosts as $AfficherPost) : ?>
                <form method="POST" action="detailpost">                 
                        <button type="submit"  class="flex-none flex items-center justify-center w-9 h-9 hover:bg-sky-800 rounded-md text-slate-300 border border-slate-200">
                            <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="detailpost">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                    src="./public/image/<?= $AfficherPost['image'] ?>">
                            </a>
                            <input type="hidden" name="intpost" value="<?php  echo $AfficherPost['intpost'] ?>">
                        </button>
                    </div>
                </form>
        </div>
                <?php endforeach ?>       
        </div> -->

<!-- component -->



    <div class="max-w-2xl mx-auto pt-[10%]">

        <div class="px-3 py-2">

            <div class="flex flex-col gap-1 text-center">
                <a class="block mx-auto bg-center bg-no-repeat bg-cover w-20 h-20 rounded-full border border-gray-400 shadow-lg"
                    href=""
                    style="background-image: url('https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg')"></a>
                <p class="font-serif font-semibold">Marina Davinchi</p>
                <span class="text-sm text-gray-400">New York, NY - Los Angeles, CA</span>
            </div>

            <div class="grid grid-cols-3 gap-2 my-3">
            <?php foreach ($AfficherPosts as $AfficherPost) : ?>
                <form method="POST" action="detailpost"> 
                <button type="submit" class="rounded-lg" >

                <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="detailpost">
                                <img alt="ecommerce" class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg"
                                    src="./public/image/<?= $AfficherPost['image'] ?>">
                            </a>  
                            <input type="hidden" name="intpost" value="<?php  echo $AfficherPost['intpost'] ?>">
                            </button>
                        </form>
                   
                    <?php endforeach ?>     
                </div>
        </div>
    </div>
</div>