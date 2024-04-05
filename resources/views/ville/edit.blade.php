@extends("layout.app")
@section("content")




<form class="" method="POST"  action="{{ route('villes.update', $ville->id) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

      <!-- Modal body -->
      <div class="p-6 space-y-6">
          <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                  <label for="ville" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ville</label>
                  <input value="{{$ville->ville}}" type="text" name="ville" id="ville" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="region_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">region</label>
                <select name="region_id" id="region_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected></option>
                    @foreach ($regions as $region)
                    <option value="{{$region->id}}" selected>{{$region->region}}</option>
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

@endSection

