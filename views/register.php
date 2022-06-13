<?php
    if(isset($_POST['submit'])){
        $creatUser = new MemberController();
        $creatUser = $creatUser->register();
    }
?>

<style>
/* .container{
        padding-top: 250px;
    }
    .row{
        --bs-gutter-x: 0;
    } */
</style>

<div class="h-screen flex">
    <div class="flex w-1/2 bg-gradient-to-r from-black-500 to-blue-500  i justify-around items-center">
        <div>
            <h1 class="text-black  font-bold text-4xl font-sans">Sewarbladek</h1>
            <img class="smplimage" src="../../FilleRouge/public/logoimage/smplimage.png" alt="">

        </div>
    </div>
    <div class="flex w-1/2 justify-center items-center bg-white">
        <form class="bg-white" method="POST">
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Regester</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">Content de te revoir</p>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>

                <input class="pl-2 outline-none border-none" type="text" id='prenom' name="prenom"
                    placeholder="Prenom" />
            </div>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>

                <input class="pl-2 outline-none border-none" type="text" id='nom' name="nom" placeholder="Nom" />
            </div>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
                <input class="pl-2 outline-none border-none" type="email" id='email' name="email" placeholder="Email" />
            </div>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                        clip-rule="evenodd" />
                </svg>
                <input class="pl-2 outline-none border-none" type="password" name="motedepass"
                    placeholder="mote de pase" />
            </div>
            <button type="submit" name="submit"
                class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
            <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer"> <a href="<?php echo BASE_URL;?>login"
                    class=" btn-link">connecter</a>
            </span>
        </form>
    </div>
</div>