@extends("layout.app")
@section("content")


<table class="mt-12 w-full text-sm text-left rtl:text-right text-gray-500 ">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
            
            <th scope="col" class="px-6 py-3">
                modele
            </th>
            <th scope="col" class="px-6 py-3">
                note
            </th>
           
            
            
        </tr>
    </thead>
    <tbody>
        @forelse ($notes as $note)
            
        
        <tr class="bg-white border-b -800 -700 hover:bg-gray-50 -gray-600">
            <td class="px-6 py-4">
                {{$note->modele->Libelle}}
            </td>
            <td class="px-6 py-4">
                {{$note->note}}
            </td>

            @endforeach
            
        </tr>
    </tbody>

</table>
@endSection