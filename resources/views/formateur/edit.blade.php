@extends("layout.app")
@section("content")




<form class="" method="POST"  action="{{ route('formateurs.update', $formateur->id) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

      <!-- Modal body -->
      <div class="p-6 space-y-6">
          <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                  <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nom</label>
                  <input value="{{$formateur->nom}}" type="text" name="nom" id="nom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nom" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                  <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">prenom</label>
                  <input value="{{$formateur->prenom}}" type="text" name="prenom" id="prenom" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="prenom" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="matricule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">matricule</label>
                <input value="{{$formateur->matricule}}" type="text" name="matricule" id="matricule" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="matricule" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="grade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">grade</label>
              <input value="{{$formateur->grade}}" type="text" name="grade" id="grade" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="grade" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="poste" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">poste</label>
            <input value="{{$formateur->poste}}" type="text" name="poste" id="poste" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="poste" required="">
        </div>
        <div class="col-span-6 sm:col-span-3">
          <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tel</label>
          <input value="{{$formateur->tel}}" type="text" name="tel" id="tel" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tel" required="">
      </div>
      <div class="col-span-6 sm:col-span-3">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
        <input value="{{$formateur->email}}" type="text" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email" required="">
    </div>
    <div class="col-span-6 sm:col-span-3">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
      <input value="{{$formateur->password}}" type="text" name="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="password" required="">
  </div>

              
              <div class="col-span-6 sm:col-span-3">
                  <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                <select name="metier_id">
                  <@php
                      foreach($metiers as $metier){
                        if ($metier->id==$formateur->metier_id) {
                          echo "<option selected value=".$metier->id.">".$metier->metier."</option>";
                        }else {
                          echo "<option  value=".$metier->id.">".$metier->metier."</option>";
                        }
                        
                      }
                  @endphp
                </select>
              </div>{{-- @dd($Etablissements) --}}
              <div class="col-span-6 sm:col-span-3">
                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
              <select name="etablissement_id">
                
                <@php
                    foreach($Etablissements as $Etablissement){
                      if ($Etablissement->id==$formateur->Etablissement_id) {
                        echo "<option selected value=".$Etablissement->id.">".$Etablissement->etablissement."</option>";
                      }else {
                        echo "<option  value=".$Etablissement->id.">".$Etablissement->etablissement."</option>";
                      }
                      
                    }
                @endphp
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="date_naissance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">date_naissance</label>
              <input value="{{$formateur->date_naissance}}" type="date" name="date_naissance" id="date_naissance" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="date_naissance" required="">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="date_recrutement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">date_recrutement</label>
            <input value="{{$formateur->date_recrutement}}" type="date" name="date_recrutement" id="date_recrutement" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="date_recrutement" required="">
        </div>
        <div class="col-span-6 sm:col-span-3">
          <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">photo</label>
          <input  type="file" name="photo" id="photo" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="photo" >
      </div>
          </div>
      </div>
      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
      </div>
  </form>

@endSection

