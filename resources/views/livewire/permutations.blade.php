<div>
    <div class="mt-6">
        <div class="mt-6">
           
            <button  data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">add permutations</Button>
                @include('modals.permutationModal')
            </div>
           
        
            <h1 class="text-5xl font-extrabold dark:text-white">tableau de permutation<small class="ms-2 font-semibold text-gray-500 dark:text-gray-400">non validé</small></h1>
        
     
        <div class="my-3 shadow-md rounded-lg">
       
   <div class="my-3 shadow-md rounded-lg">
       
    
       <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
           <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               <tr>
                   
                   <th scope="col" class="px-6 py-3">
                       id
                   </th>
                   <th scope="col" class="px-6 py-3">
                    nom & prenom
                </th>
                <th scope="col" class="px-6 py-3">
                    ville
                </th>
                <th scope="col" class="px-6 py-3">
                    formateur
                </th>
                <th scope="col" class="px-6 py-3">
                    validation
                </th>
                   
                   
                   <th  scope="col" class="text-center px-6 py-3">
                       Action
                   </th>
               </tr>
           </thead>
           <tbody>
           
               @forelse ($permutations as $permutation)
                    @if($permutation->valide ==0)
    

               <tr>
                   
                <td class="px-6 py-4">
                       {{$permutation->id}}
                   </td>
                   <td class="px-6 py-4">
                       <div class="flex items-center">
                           {{$permutation->formateur->nom}} 
                           {{$permutation->formateur->prenom}}
                       </div>
                    </td>
                    <td class="px-6 py-4">
                       <div class="flex items-center">
                        {{$permutation->formateur->nom}} 
                    </div></td>
                    <td class="px-6 py-4">
                    <div class="flex items-center">
                        {{$permutation->ville->ville}} 
                    </div></td>
                    <td>
                        @if ($permutation->valide == 1)
                        valide
                      @else
                        no validé
                      @endif

                    </td>
                   
                   <td align="center" class="px-6 py-4">

                       <div class="flex  justify-center flex-nowrap">
                       
                        <a href="/valide/{{$permutation->id}}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400">
                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            validé
                            </span>
                        </a>
                      


                       <a href={{url("permutationsEdite/".$permutation->id)}} type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 :focus:ring-green-800">
                           <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                           edite
                           </span>
                       </a>
                       
                       <button  wire:click="idGet({{$permutation->id}})" data-modal-target="delete" data-modal-toggle="delete" type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-red-600 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                           <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                           delte
                           </span>
                       </button></div>
                   </td>
               </tr>
               @endif
               @endforeach
           </tbody>
       </table>
       @include('modals.permutationDelete')
       
   </div>
   </div>