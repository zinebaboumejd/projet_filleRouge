<?php
$afficherselect= new AdmineController();
$selects =$afficherselect->afficherselect();

if(isset($_POST['intpost'])){
    $data=new PostController();
    $post=$data->un_Post();

    // echo $post->descreption;

    $_SESSION['intpost']=$_POST['intpost'];
    require_once("./views/includes/navbar.php");
    // print_r($post);
}
	if(isset($_POST['submit'])){
        // die(var_dump($_POST));
		$modPost= new PostController();
		$modPost->modifierPost();
	}
   
?>
<div class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden bg-gray-50 p-8 sm:p-12">
    <div class="w-full max-w-4xl rounded-md border-2 border-gray-100 bg-white p-14">
        <div class="flex flex-col items-center">
            <h3
                class="mt-2 max-w-2xl text-center text-2xl font-bold leading-tight sm:text-3xl md:text-4xl md:leading-tight">
                Modifier Votre Post </h3>

            <div class="mx-8 w-full max-w-[550px] ">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-5 mt-5">
                        <label for="titre" class="mb-3 block text-base font-medium text-[#07074D]">Titre</label>
                        <input name="titrei_mg" id="titrei_mg"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            value="<?php echo $post->titrei_mg ; ?> ">
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
                            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            <?php echo $post->descreption ; ?> 
                        </textarea>
                    </div>

                    <div class="mb-5 mt-5">
                        <label for="image mb-3 block text-base font-medium text-[#07074D]">Image</label>
                        <div class='text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2 relative bg-black w-fit'>
                            <img id="holder" class="rounded" src="./public/image/<?=$post->image ?>">
                            <input id='image' name="image" type="file" accept="image/png, image/jpeg" multiple class="hidden" />
                        </div>
                        <!-- <input type="file" name="image" accept="image/png, image/jpeg" multiple value="./public/image/<?=$post->image ?>"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"> -->
                        <div>

                            <div class="mb-5 mt-5">
                                <input type="submit" name="submit" id="submit" value="Modifier"
                                    class="bg-sky-800 font-semibold text-white p-2 w-32 rounded-full hover:bg-sky-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2">

                            </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const fileInput = document.querySelector('#image');
document.querySelector('#holder').onclick = () => {
  fileInput.click();
}
fileInput.onchange = () => {
  const selectedFiles = [...fileInput.files];
  console.log(selectedFiles);
}
</script>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto"></div>
             <div class="card">
             <?php //echo $AfficherPost->idmember;?>
                 <?php  //die(var_dump($Afficher_un_Post));  ?>
                <?php // include('./views/includes/alerts.php'); ?>
                 <div class="card-header"><h1>modifier post :</h1></div>
                    <div class="card-body bg-light">
            
                        <form method="post" >
                    
                          <div class="form-group">
                            <label for="titrei_mg">titrei_mg:</label>
                            <input type="text" name="titrei_mg" class="form-control" placeholder="titrei_mg"
                            value="<?php echo $Afficher_un_Post->titrei_mg ; ?>">
                            <input type="hidden" name="idmember" value="<?php //echo $Afficher_un_Post->idmember;?>">
                          </div>
                   
                          <div class="form-group">
                           <button type="submit" class="btn btn-primary mt-3" name="submit">Modifer</button>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->