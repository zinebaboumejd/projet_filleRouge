<?php 


$Aff_like= new PostController();
$Afficherlikes =$Aff_like->likepost();

require_once("./views/includes/navbar.php");

print_r($Afficherlikes);
die;
?>

<div id="menu" class="container mx-auto px-4 lg:pt-24 lg:pb-64">
      <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
          <h2 class="text-4xl font-semibold text-black">Our Menu</h2>
          <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut mollis nulla, ut efficitur massa. Praesent vitae iaculis orci
          </p>
        </div>
      </div>
      <div class="flex flex-wrap mt-12 justify-center">
      <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
        <div class="col-span-2 sm:col-span-1 xl:col-span-1">
          <img
            alt="..."
            src="https://source.unsplash.com/gUBJ9vSlky0"
            class="h-24 w-24 rounded  mx-auto"
          />
        </div>
        <div class="col-span-2 sm:col-span-4 xl:col-span-4">
          <h3 class="font-semibold text-black">Veggie</h3>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
        <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic ">$22</div>
 
       
        
       
 
        
        
      </div>
      </div>
    </div>