<?php 

 
$afficherselect= new AdmineController();
$selects =$afficherselect->afficherselect();


?>
<?php if (empty($_SESSION['log']) ) : ?>
<div class="navbar bg-base-100 fixed z-40">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">SewarBladek</a>
    </div>
    <div class="flex mr-10 ">
        <a class="normal-case text-xl text-blue-800 lg:w-auto " href="<?php echo BASE_URL; ?>home">Home</a>
    </div>
    <div class="flex-1">
        <a class=" normal-case text-xl" href="<?php echo BASE_URL; ?>AfficherPost">Post</a>
    </div>
    <div class="flex-none">

        <div class="navbar-end  ">
            <a class="btn bg-blue-800 hover:bg-blue-700" href="<?php echo BASE_URL; ?>login">connecter</a>
        </div>
    </div>
</div>
<!-- admiin -->
<?php elseif (!empty($_SESSION['log']) && $_SESSION['rool']==true) : ?>
<div class="navbar bg-base-100 fixed z-40">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">SewarBladek</a>
    </div>
    <div class="flex mr-10 ">
        <a class="normal-case text-xl text-blue-800 lg:w-auto " href="<?php echo BASE_URL; ?>home">Home</a>
    </div>
    <div class="flex-1">
        <a class=" normal-case text-xl" href="<?php echo BASE_URL; ?>AfficherPost">Post</a>
    </div>
    <ul class="menu menu-horizontal pl-5 mr-10">

        <li tabindex="0">
            <a>
                Admin
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                </svg>
            </a>
            <ul class="p-2 bg-base-100  mr-10">
                <li class=" mr-10"><span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd"
                                d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                                clip-rule="evenodd" />
                            <path class="fill-current text-gray-600 group-hover:text-cyan-600"
                                d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                        </svg>
                        <a href="<?php echo BASE_URL; ?>AjouterCategory">AjouterCategory </a></li>

                <!-- <li class=" mr-10"><span>
    <i class="fa-solid fa-square-plus"></i>
                <a href="<?php echo BASE_URL; ?>AjouterPost"> Post </a></li>
        -->
                <li class=" mr-10"><span>
                        <i class="fa-solid fa-user-group"></i>
                        <a href="<?php echo BASE_URL; ?>AfficherMember">Utilsateurs </a></li>
                <li class=" mr-10"><span>
                        <i class="fa-solid fa-cart-flatbed"></i>
                        <a href="<?php echo BASE_URL; ?>Commondes"> Commondes </a></li>
            </ul>
        </li>
        <!-- <li><a>Item 3</a></li> -->
    </ul>
    <div class="flex-none">

        <div class="navbar-end  ">
            <a class="btn bg-blue-800 hover:bg-blue-700" href="<?php echo BASE_URL; ?>logout">Deconnecte</a>
        </div>
    </div>
</div>

<!-- User -->
<?php elseif (!empty($_SESSION['log']) && $_SESSION['rool']==false) : ?>


<div class="navbar bg-base-100 fixed z-40">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">SewarBladek</a>
    </div>
    <div class="flex mr-10 ">
        <a class="normal-case text-xl text-blue-800 lg:w-auto " href="<?php echo BASE_URL; ?>home">Home</a>
    </div>
    <div class="flex-1">
        <a class=" normal-case text-xl" href="<?php echo BASE_URL; ?>AfficherPost">Post</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal pl-5 mr-5">

        <li tabindex="0" >
                <a>
                    Post par Categorys
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24">
                        <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                    </svg>
                </a>
                <ul class="p-2 bg-base-100  mr-10"> 
                    <?php foreach ($selects as $select) : ?>
                    <li class=" mr-10 w-[200px]"><span>
                          <span><?php echo $select['typecategory'] ; ?></span>
                    </li>
                     <?php endforeach ?>
                        



                </ul>
            </li>

        </ul>

    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal pl-5 mr-10">

            <li tabindex="0">
                <a>
                    User
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 24 24">
                        <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                    </svg>
                </a>
                <ul class="p-2 bg-base-100  mr-10">
                    <li class=" mr-10"><span>
                            <i class="fa-solid fa-user"></i>
                            <a href="<?php echo BASE_URL; ?>Profile"> Profil </a></li>

                    <li class=" mr-10"><span>
                            <i class="fa-solid fa-square-plus"></i>
                            <a href="<?php echo BASE_URL; ?>AjouterPost"> Post </a></li>

                    <li class=" mr-10"><span>
                            <i class="fa-solid fa-heart"></i>
                            <a href="<?php echo BASE_URL; ?>like"> likes </a></li>
                    <li class=" mr-10"><span>
                            <i class="fa-solid fa-basket-shopping"></i>
                            <a href="<?php echo BASE_URL; ?>panier"> Panier </a></li>
                </ul>
            </li>
            <!-- <li><a>Item 3</a></li> -->
        </ul>
        <div class="navbar-end  ">
            <a class="btn bg-blue-800 hover:bg-blue-700" href="<?php echo BASE_URL; ?>logout">Deconnex</a>
        </div>
    </div>

</div>
<?php endif; ?>
<?php
            
            ?>








<?php

            ?>






</div>


</div>


</div>
</nav>