<div>
    @if (session()->has('success'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">
          A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like.
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
        </button>
      </div>
    @endif
    <div class="mt-6">
           
       <button  data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">add ville</Button>
           @include('modals.villeModal')
       </div>
   <div class="my-3 shadow-md rounded-lg">
       
      
   
       <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
           <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               <tr>
                   
                   <th scope="col" class="px-6 py-3">
                       id
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
           
               @forelse ($villes as $ville)
               <tr>
                   
                   <td class="px-6 py-4">
                       {{$ville->id}}
                   </td>
                   <td class="px-6 py-4">
                       <div class="flex items-center">
                           {{$ville->ville}}
                       </div>
                   </td>
                   <td align="center" class="px-6 py-4">
                       <!-- Modal toggle -->
                       {{-- <a href={{url("villesEdite/".$ville->id)}} type="button"  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                       <a href="#"  wire:click="idGet({{$ville->id}})" data-modal-target="delete" data-modal-toggle="delete" type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delte</a>
                       --}}
                       <div class="flex  justify-center flex-nowrap">
                           
                       <a href={{url("villesEdite/".$ville->id)}} type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 :focus:ring-green-800">
                           <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                           edite
                           </span>
                       </a>
                       
                       <button  wire:click="idGet({{$ville->id}})" data-modal-target="delete" data-modal-toggle="delete" type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-red-600 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                           <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                           delte
                           </span>
                       </button></div>
                   </td>
               </tr>
               @endforeach
           </tbody>
       </table>
       @include('modals.villeDelete')
      
   </div>{{$villes->links()}}
   </div> 