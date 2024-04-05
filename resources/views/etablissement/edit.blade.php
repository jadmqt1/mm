@extends("layout.app")
@section("content")




<form class="" method="POST"  action="{{ route('etablissements.update', $etablissement->id) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

      <!-- Modal body -->
      <div class="p-6 space-y-6">
          <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                  <label for="etablissement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">etablissement</label>
                  <input value="{{$etablissement->etablissement}}" type="text" name="etablissement" id="etablissement" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">code</label>
                <input value="{{$etablissement->code}}" type="text" name="code" id="code" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="code" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">adresse</label>
                <input value="{{$etablissement->adresse}}" type="text" name="adresse" id="adresse" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="adresse" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="fax" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">fax</label>
                <input value="{{$etablissement->fax}}" type="text" name="fax" id="fax" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="fax" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ville</label>
              <select name="etablissement_id">
                
                <@php
                    foreach($villes as $ville){
                      if ($ville->id==$etablissement->ville_id) {
                        echo "<option selected value=".$ville->id.">".$ville->ville."</option>";
                      }else {
                        echo "<option  value=".$ville->id.">".$ville->ville."</option>";
                      }
                      
                    }
                @endphp
              </select>
            </div>
             
          </div>
      </div>
      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
      </div>
  </form>

@endSection

