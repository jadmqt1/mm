<div>
    <div class="mt-6">
           
       <button  data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">add etablissement</Button>
           @include('modals.etablissementModal')
       </div>
   <div class="my-3 shadow-md rounded-lg">
       
      
   
       <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
           <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               <tr>
                   
                   <th scope="col" class="px-6 py-3">
                       id
                   </th>
                   <th scope="col" class="px-6 py-3">
                       etablissement
                   </th>
                   <th scope="col" class="px-6 py-3">
                    code
                </th>
                <th scope="col" class="px-6 py-3">
                    adresse
                </th>
                <th scope="col" class="px-6 py-3">
                    tel
                </th>
                <th scope="col" class="px-6 py-3">
                    fax
                </th>
                <th scope="col" class="px-6 py-3">
                    ville
                </th>
                   
                   
                   <th  scope="col" class="text-center px-6 py-3">
                       Action
                   </th>
               </tr>
           </thead>
           <tbody>
           
               @forelse ($etablissements as $etablissement)
               <tr>
                   
                   <td class="px-6 py-4">
                       {{$etablissement->id}}
                   </td>
                   <td class="px-6 py-4">
                       <div class="flex items-center">
                           {{$etablissement->etablissement}}
                       </div>
                   </td>
                   <td class="px-6 py-4">
                    {{$etablissement->code}}
                </td>
                <td class="px-6 py-4">
                    {{$etablissement->adresse}}
                </td>
                <td class="px-6 py-4">
                    {{$etablissement->tel}}
                </td>
                <td class="px-6 py-4">
                    {{$etablissement->fax}}
                </td>
                <td class="px-6 py-4">
                    {{$etablissement->ville->ville}}
                </td>
                   <td align="center" class="px-6 py-4">
                       <!-- Modal toggle -->
                       {{-- <a href={{url("etablissementsEdite/".$etablissement->id)}} type="button"  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                       <a href="#"  wire:click="idGet({{$etablissement->id}})" data-modal-target="delete" data-modal-toggle="delete" type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delte</a>
                       --}}
                       <div class="flex  justify-center flex-nowrap">
                           
                       <a href={{url("etablissementsEdite/".$etablissement->id)}} type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 :focus:ring-green-800">
                           <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                           edite
                           </span>
                       </a>
                       
                       <button  wire:click="idGet({{$etablissement->id}})" data-modal-target="delete" data-modal-toggle="delete" type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-red-600 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                           <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                           delte
                           </span>
                       </button></div>
                   </td>
               </tr>
               @endforeach
           </tbody>
       </table>
       @include('modals.etablissementDelete')
       
   </div>
   </div>