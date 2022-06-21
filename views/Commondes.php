<?php   
$Afficher_commande=new AdmineController();
$Affichercommandes=$Afficher_commande->Afficher_commande();

?>
<div class="pt-20 flex justify-center">
<table class="w-[500px] md:flex-row  text-center  grid-flow-col items-center my-20">
            <thead class="border-b   ">
                <tr>
                    <th scope="col" class="text-blue-500">
                        ID post
                    </th>

                    <th scope="col" class=" px-6 py-4 text-blue-500">
                        ID user
                    </th>
                    <th scope="col" class=" px-6 py-4 text-blue-500">
                        Titre Post
                    </th>
                    <th scope="col" class="  px-6 py-4 text-blue-500 ">
                       Prix Post
                    </th>
                    <th scope="col" class="  px-6 py-4 text-blue-500">
                       Date commande
                    </th>
                </tr>
            </thead>
            <tbody class="text-lg ">
                <?php foreach ($Affichercommandes as $Affichercommande) : ?>
                <tr class="border-b">
                    <td class="text-lg  text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
             <?php echo  $Affichercommande['intpost']  ?>   
                    </td>
                    <td class="text-lg  text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <?php echo  $Affichercommande['idmember']  ?>  
                    </td>
                    <td class="text-lg  text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                    <?php echo  $Affichercommande['titrei_mg']  ?>      
                    </td>
                    <td class="text-lg  text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                    <?php echo  $Affichercommande['prix']  ?>      
                    </td>
                    <td class="text-lg  text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                    <?php echo  $Affichercommande['datecom']  ?>      
                    </td>
                </tr>
                <?php  endforeach  ?>
            </tbody>
        </table>
    </div>