<?php 
if (isset($_POST['submit'])) {
$Ajoutercategory=new AdmineController();
$Ajoutercategory->Ajouter_category();
// print_r($Ajoutercategory);
// die();
}
?>

<div class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden bg-gray-50 p-8 sm:p-12">
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
</div>