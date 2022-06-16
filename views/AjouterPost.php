<?php
 require_once("./views/includes/navbar.php");
$afficherselect= new AdmineController();
$selects =$afficherselect->afficherselect();
// echo print_r($selects);
// die;
// include_once("./views/includes/navbar.php");
if (isset($_POST['submit'])) {
  // die(var_dump($_POST['lastname']));
  $AjouterPost= new PostController();
  $AjouterPost->AjouterPost();
  
}

 

?>

 <div class=" flex min-h-screen flex-col items-center justify-center overflow-hidden bg-gray-50 p-8 sm:p-12">
   <div class="w-full max-w-4xl rounded-md border-2 border-gray-100 bg-white p-14">
        <div class="flex flex-col items-center">
        <!-- <a href="<?php echo BASE_URL; ?>home" class="block lg:inline-block text-md font-bold  text-orange-500  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                HOME
            </a> -->
            <h3
                class="mt-2 max-w-2xl text-center text-2xl font-bold leading-tight sm:text-3xl md:text-4xl md:leading-tight">
                Ajouter Votre Post </h3>

            <div class="mx-8 w-full max-w-[550px] ">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-5 mt-5">
                        <label for="titre" class="mb-3 block text-base font-medium text-[#07074D]">Titre </label>
                        <input name="titrei_mg" id="titrei_mg"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                    </div>
                   
                    <div class="mb-5 mt-5">
                        <label for="category" class="mb-3 block text-base font-medium text-[#07074D]">category </label>
                            <select id="category" name="category"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            <option disabled selected>Choose a category</option>
                            <?php foreach ($selects as $select) : ?>
                            <option value="<?php echo $select['typecategory'] ; ?>"><?php echo $select['typecategory'] ; ?></option>
                           
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-5 mt-5">
                        <label for="description">description</label>
                        <textarea name="descreption" id="descreption" rows=""
                            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                    </div>
                    <div class="mb-5 mt-5">
                        <label for="prix">Prix</label>
                        <input  type="number" name="prix" id="prix"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                    </div>
                    <div class="mb-5 mt-5">
                        <label for="image mb-3 block text-base font-medium text-[#07074D]">Image</label>
                        <input type="file" name="image" accept="image/png, image/jpeg" multiple
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <div>

                            <div class="mb-5 mt-5">
                                <input type="submit" name="submit" id="submit" value="Ajouter"
                                    class="bg-sky-800 font-semibold text-white p-2 w-32 rounded-full hover:bg-sky-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2">

                            </div>
                </form>
            </div>
        </div>
    </div>

</div>