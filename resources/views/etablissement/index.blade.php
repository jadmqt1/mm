@extends("layout.app")
@section("content")

@livewire("etablissement",["etablissements"=>$etablissements,"villes"=>$villes])
@endSection





