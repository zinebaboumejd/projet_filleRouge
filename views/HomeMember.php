<?php
require_once("./views/includes/navbar.php");
?>
<div>
      <nav class="flex flex-col bg-gradient-to-r from-blue-900 to-blue-800 w-64 h-screen px-4 tex-gray-900  pt-20">
        <div class="flex flex-wrap mt-8">
          <div class="w-1/2">
            <img
              src="https://randomuser.me/api/portraits/women/27.jpg"
              class="mx-auto w-20 h-20 rounded-full"
            />
          </div>
          <div class="w-1/2">
            <span class="font-semibold flex justify-center mt-8 text-white"><a href="<?php echo BASE_URL; ?>Profile">Ava Harper</a></span>
           
          </div>
        </div>
        <div class="mt-10 mb-4">
          <ul class="ml-4">
          <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row   hover:text-orange-700 rounded-lg">
              <span>
              <i class="fa-solid fa-user"></i>
              </span>
              <a href="<?php echo BASE_URL; ?>Profile">
                <span class="ml-2">Profil</span>
              </a>
            </li>
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row   hover:text-orange-800 rounded-lg">
              <span>
              <i class="fa-solid fa-square-plus"></i>
              </span>
              <a href="<?php echo BASE_URL; ?>AjouterPost">
                <span class="ml-2">Ajouter Post</span>
              </a>
            </li>
           
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row   hover:text-orange-700 rounded-lg">
              <span>
              <i class="fa-solid fa-heart"></i>
              </span>
              <a href="<?php echo BASE_URL; ?>like">
                <span class="ml-2">likes</span>
              </a>
            </li>
            <!-- 
                <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row   hover:text-orange-700 rounded-lg">
              <span>
                
              </span>
              <button class="rounded-full bg-orange-700 p-2 mr-2 ml-aut">
                          <form class="d-flex">
                              <a href="<?php echo BASE_URL; ?>logout" title="Logout" class="text-slate-50 ">
                                  <i class="fas fa-user"></i> Logout
                              </a>
                          </form>
                      </button>
            </li> -->
              
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row   hover:text-orange-700 rounded-lg">
              <span>
<i class="fa-solid fa-basket-shopping"></i>
              </span>
              <a href="#">
                <span class="ml-2">panier</span>
              </a>
            </li>
             
          
      
                
          </ul>
        </div>
      </nav>
    </div>