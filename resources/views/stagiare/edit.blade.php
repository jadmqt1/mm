@extends("layout.app")
@section("content")




<form class="" method="POST"  action="{{ route('stagiares.update', $stagiare->id) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

      <!-- Modal body -->
      <div class="p-6 space-y-6">
          <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                  <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nom</label>
                  <input value="{{$stagiare->nom}}" type="text" name="nom" id="nom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                  <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">prenom</label>
                  <input value="{{$stagiare->prenom}}" type="text" name="prenom" id="prenom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                  <input value="{{$stagiare->email}}" type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
              </div>
              <div  class="col-span-6 sm:col-span-3">
                  <label for="adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">adresse</label>
                  <input value="{{$stagiare->adresse}}" type="text" name="adresse" id="adresse" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="N5 rue mohamed V" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                  <label for="ville" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ville</label>
                  <input value="{{$stagiare->ville}}" type="text" name="ville" id="ville" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="fes" required="">
              </div>
             
              <div class="col-span-6 sm:col-span-3">
                  <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                  <input name="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
              
                  </div>
          </div>
      </div>
      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
      </div>
  </form>

@endSection

