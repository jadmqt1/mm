<div>
 <div class="mt-6">
        
    <button  data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">add stagiare</Button>
        @include('modals.stagiareModal')
    </div>
<div class="my-3 shadow-md rounded-lg">
    
   

    <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3">
                    adresse
                </th>
                <th scope="col" class="px-6 py-3">
                    ville
                </th>
                
                <th align="center" scope="col" class="flex items-center px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($stagiares as $stagiare)
            
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-10 h-10 rounded-full" src="{{ asset('images/'.$stagiare->photo) }}" alt="Jese image">
                    <div class="ps-3">
                        <div class="text-base font-semibold">{{$stagiare->nom." ".$stagiare->prenom}}</div>
                        <div class="font-normal text-gray-500">{{$stagiare->email}}</div>
                    </div>  
                </th>
                <td class="px-6 py-4">
                    {{$stagiare->adresse}}
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        {{$stagiare->ville}}
                    </div>
                </td>
                <td align="center" class="px-6 py-4">
                    <!-- Modal toggle -->
                    {{-- <a href={{url("stagiaresEdite/".$stagiare->id)}} type="button"  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#"  wire:click="idGet({{$stagiare->id}})" data-modal-target="delete" data-modal-toggle="delete" type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delte</a>
                    --}}
                    <div class="flex flex-nowrap">
                        
                    <a href={{url("stagiaresEdite/".$stagiare->id)}} type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 :focus:ring-green-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        edite
                        </span>
                    </a>
                    
                    <button  wire:click="idGet({{$stagiare->id}})" data-modal-target="delete" data-modal-toggle="delete" type="button" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-red-600 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        delte
                        </span>
                    </button></div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('modals.stagiareDelete')
    
</div>
</div>