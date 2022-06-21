<?php 
// include("./views/includes/navbar.php");
$afficherselect=new AdmineController();
$affichercategorys=$afficherselect->afficherselect();
// echo  '<pre>';
// print_r($affichercategorys);
// die;
$Aff_Posts= new PostController();
 $AfficherPosts =$Aff_Posts->AfficherPost();
if (isset($_POST['submit'])) {
$Ajoutercategory=new AdmineController();
$Ajoutercategory->Ajouter_category();

// print_r($Ajoutercategory);
// die();
}
if(isset($_POST['supprimercategory'])){
$supprimercategory = new AdmineController();
$supprimercategory->supprimercategory();
}
// Redirect::to("like");
?>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script> -->
<div  class="min-h-[80vh]">
<section class="text-gray-700 body-font flex md:flex-row flex-col items-center bg-white pt-20">

    <div
        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font :text-4xl text-3xl mb-4 font-medium text-gray-900">Affichier category</h1>

        <table class="w-[500px] md:flex-row  text-center  grid-flow-col items-center">
            <thead class="border-b">
                <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                        Categorys
                    </th>

                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                        supprimer
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($affichercategorys as $affichercategory) : ?>
                <tr class="border-b">
                    <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                    <?php echo  $affichercategory['typecategory']  ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <form action="" method="post" class="">
                            
                                <input type="hidden" name="idcategory" value="<?php echo $affichercategory['idcategory']  ?>">
                                <button
                                    class="h-10 px-3  font-semibold rounded-md border bg-red-500 border-slate-200 text-slate-100"
                                    type="submit" name="supprimercategory">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            
                        </form>
                    </td>

                </tr>
                <?php  endforeach  ?>
            </tbody>
        </table>
    </div>
    <div class="md:w-1/2 w-5/6 pt-10">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Affichier category</h1>

        <div class="mx-8 w-full max-w-[550px]  ">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-5 mt-5">
                    <label for="titre" class="mb-3 block text-base font-medium text-[#07074D]">Titre </label>
                    <input type="text" name="typecategory" id="typecategory"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>




                <div class="mb-5 mt-5">
                    <input type="submit" name="submit" id="submit" value="Ajouter"
                        class="bg-sky-800 font-semibold text-white p-2 w-32 rounded-full hover:bg-sky-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2">

                </div>
            </form>
        </div>
    </div>
</section>
</div>

<!-- <div class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden bg-gray-50 p-8 sm:p-12">
    <div class="w-full max-w-4xl rounded-md border-2 border-gray-100 bg-white p-14">
        <div class="flex flex-col items-center">
        <a href="<?php echo BASE_URL; ?>home" class="block lg:inline-block text-md font-bold  text-orange-500  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                HOME
            </a>
            <h3
                class="mt-2 max-w-2xl text-center text-2xl font-bold leading-tight sm:text-3xl md:text-4xl md:leading-tight">
                Ajouter Category </h3>

            <div class="mx-8 w-full max-w-[550px] ">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-5 mt-5">
                        <label for="titre" class="mb-3 block text-base font-medium text-[#07074D]">Titre </label>
                        <input  type="text" name="typecategory" id="typecategory"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                    </div>

                    
                    

                            <div class="mb-5 mt-5">
                                <input type="submit" name="submit" id="submit" value="Ajouter"
                                    class="bg-sky-800 font-semibold text-white p-2 w-32 rounded-full hover:bg-sky-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2">

                            </div>
                </form>
            </div>
        </div>
        
    </div>
    
</div> -->