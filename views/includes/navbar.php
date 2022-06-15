          <?php if (empty($_SESSION['log']) ) : ?>
          <nav
              class="flex items-center justify-between flex-wrap w-[100%]  bg-gradient-to-r from-gray-100 via-[#06283D] to-gray-100 fixed w-full ">
              <div class="flex items-center flex-no-shrink text-white mr-6 ">
                  <img src="https://nemtroutes.com/img/logo/logo.png" alt="" class="h-12 xl:h-20  mr-2  ">
              </div>
              <a href="<?php echo BASE_URL; ?>home"
                  class="block lg:inline-block text-md font-bold  text-orange-500  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                  HOME
              </a>
              <div class="block lg:hidden">
                  <button id="navbar-burger"
                      class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-white hover:border-white">
                      <svg class="fill-current h-6 w-6 text-gray-700" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <title>Menu</title>
                          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                      </svg>
                  </button>
              </div>
              <div id="main-nav" class="w-full flex-grow lg:flex items-center lg:w-auto hidden">
                  <div class="text-sm lg:flex-grow mt-2 animated jackinthebox xl:mx-8">

                      <a href="<?php echo BASE_URL; ?>AfficherPost"
                          class="block lg:inline-block text-md font-bold  text-slate-50  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                          AfficherPost
                      </a>
                  </div>
                  <button class="rounded-full bg-orange-500 p-2 mr-2 ml-aut">
                      <a href="<?php echo BASE_URL; ?>login" title="Logout" class="text-slate-50 ">
                          <i class="fas fa-user"></i> loginnnnnnnn
                      </a>
                  </button>
              </div>
          </nav>
          <!-- admiin -->
          <?php elseif (!empty($_SESSION['log']) && $_SESSION['rool']==true) : ?>

          <aside
              class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r bg-white transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%] ">
              <div>
                  <div class="-mx-6 px-6 py-4">
                      <a href="<?php echo BASE_URL; ?>home" title="home">
                          <!-- logosvg -->

                          <img src="file:///C:/wamp64/www/FilleRouge/public/logoimage/logosvg.svg" class="w-32"
                              alt="tailus logo">
                      </a>
                  </div>

                  <div class="mt-8 text-center">
                      <img src="https://tailus.io/sources/blocks/stats-cards/preview/images/second_user.webp" alt=""
                          class="w-10 h-10 m-auto rounded-full object-cover lg:w-28 lg:h-28">
                      <h5 class="hidden mt-4 text-xl font-semibold text-gray-600 lg:block">
                          <?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ; ?></h5>
                      <span class="hidden text-gray-400 lg:block">Admin</span>
                  </div>

                  <ul class="space-y-2 tracking-wide mt-8">
                      <li>
                          <a href="<?php echo BASE_URL; ?>HomeAdmin" aria-label="dashboard"
                              class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                              <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                                  <path
                                      d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                                      class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                                  <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                                      class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                                  <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                                      class="fill-current group-hover:text-sky-300"></path>
                              </svg>
                              <span class="-mr-1 font-medium">tableau de bord</span>
                          </a>
                      </li>
                      <li>
                          <a href="AjouterCategory"
                              class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                  fill="currentColor">
                                  <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd"
                                      d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                                      clip-rule="evenodd" />
                                  <path class="fill-current text-gray-600 group-hover:text-cyan-600"
                                      d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                              </svg>
                              <span class="group-hover:text-gray-700">Categories</span>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                  fill="currentColor">
                                  <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd"
                                      d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                      clip-rule="evenodd" />
                                  <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                                      d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                              </svg>
                              <span class="group-hover:text-gray-700">Reports</span>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                  fill="currentColor">
                                  <path class="fill-current text-gray-600 group-hover:text-cyan-600"
                                      d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                                  <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                                      d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
                              </svg>
                              <span class="group-hover:text-gray-700">Other data</span>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                  fill="currentColor">
                                  <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                                      d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                                  <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd"
                                      d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                      clip-rule="evenodd" />
                              </svg>
                              <span class="group-hover:text-gray-700">Finance</span>
                          </a>
                      </li>
                  </ul>
              </div>

              <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
                  <button class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg>
                      <span class="group-hover:text-gray-700"> <a href="<?php echo BASE_URL; ?>logout" title="Logout"
                              class="text-black-700" class="text-slate-50 ">
                              Logout
                          </a></span>
                  </button>
              </div>
          </aside>

          <!-- User -->
          <?php elseif (!empty($_SESSION['log']) && $_SESSION['rool']==false) : ?>
          <nav
              class=" flex items-center justify-between flex-wrap  bg-gradient-to-r from-blue-900 to-blue-500 fixed w-full ">
              <div class="flex items-center flex-no-shrink text-white mr-6 ">
                  <img src="https://nemtroutes.com/img/logo/logo.png" alt="" class="h-12 xl:h-20  mr-2  ">

              </div>
              <div class="block lg:hidden">
                  <button id="navbar-burger"
                      class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-white hover:border-white">
                      <svg class="fill-current h-6 w-6 text-gray-700" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <title>Menu</title>
                          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                      </svg>
                  </button>
              </div>
              <div id="main-nav" class="w-full flex-grow lg:flex items-center lg:w-auto hidden">
                  <div class="text-sm lg:flex-grow mt-2 animated jackinthebox xl:mx-8">
                      <a href="<?php echo BASE_URL; ?>home"
                          class="block lg:inline-block text-md font-bold  text-orange-500  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                          HOME
                      </a>

                      <a href="<?php echo BASE_URL; ?>AjouterPost"
                          class="block lg:inline-block text-md font-bold  text-slate-50  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                          Ajouter Post
                      </a>
                      <a href="<?php echo BASE_URL; ?>AfficherPost"
                          class="block lg:inline-block text-md font-bold  text-slate-50  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                          AfficherPost
                      </a>
                      <a href="<?php echo BASE_URL; ?>Profile"
                          class="block lg:inline-block text-md font-bold  text-slate-50  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                          Profile
                      </a>
                      <a href="<?php echo BASE_URL; ?>like"
                          class="block lg:inline-block text-md font-bold  text-slate-50  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                          likes
                      </a>
                      <button class="rounded-full bg-orange-500 p-2 mr-2 ml-aut">
                          <form class="d-flex">
                              <a href="<?php echo BASE_URL; ?>logout" title="Logout" class="text-slate-50 ">
                                  <i class="fas fa-user"></i> Logout
                              </a>
                          </form>
                      </button>
                  
                  </div>
              </div>
          </nav>    
                      <?php endif; ?>
                      <?php
            
            ?>


                      <!-- 
            <?php if (!empty($_SESSION['log'])) : ?>
                <button class="rounded-full bg-orange-500 p-2 mr-2 ml-aut">
                    <form class="d-flex">
                        <a href="<?php echo BASE_URL; ?>logout" title="Logout" class="text-slate-50 ">
                            <i class="fas fa-user"></i> Logout
                        </a>
                    </form>
                </button>
            <?php endif; ?>

            <?php if (empty($_SESSION['log'])) : ?>
                <button class="rounded-full bg-orange-500 p-2 mr-2 ml-aut">

                    <a href="<?php echo BASE_URL; ?>login" title="Logout" class="text-slate-50 ">
                        <i class="fas fa-user"></i> loginnnnnnnn
                    </a>

                </button>
            <?php endif; ?> -->





                      <?php

            ?>






                  </div>


              </div>


              </div>
          </nav>