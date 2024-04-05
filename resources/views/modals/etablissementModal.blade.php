<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            
            <!-- Modal body -->
            <form class="p-4 md:p-5 relative bg-white rounded-lg shadow dark:bg-gray-700" method="POST"  action="{{route('etablissements.store')}}" enctype="multipart/form-data">
                @csrf
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            ajouter etablissement
                        </h3>
                       <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">
                            
                            <div class="col-span-6 sm:col-span-3">
                                <label for="etablissement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">etablissement</label>
                                <input type="text" name="etablissement" id="etablissement" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="etablissement" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">code</label>
                                <input type="text" name="code" id="code" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="code" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">adresse</label>
                                <input type="text" name="adresse" id="adresse" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="adresse" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tel</label>
                                <input type="text" name="tel" id="tel" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tel" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="fax" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">fax</label>
                                <input type="text" name="fax" id="fax" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="fax" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="ville_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ville</label>
                                <select name="ville_id" id="ville_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="" selected></option>
                                    @foreach ($villes as $ville)
                                    <option value="{{$ville->id}}" selected>{{$ville->ville}}</option>
                                    @endforeach
                                        </select>    
                            </div>
                            
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                    </div>
                </form>
        </div>
    </div>
</div> 