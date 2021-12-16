@extends('layouts.app')
@section('content')
        <livewire:header></livewire:header>
        <livewire:section1 text="Shop List"></livewire:section1>
        <div class="lg:px-64 px-4">
        
       <livewire:sortsection></livewire:sortsection>
       <livewire:shoplist-items></livewire:shoplist-items> 
       <livewire:shoplist-items></livewire:shoplist-items>
       <livewire:shoplist-items></livewire:shoplist-items>
       <livewire:shoplist-items></livewire:shoplist-items>
        <livewire:shoplist-items></livewire:shoplist-items>
       <livewire:shoplist-items></livewire:shoplist-items>
       <livewire:shoplist-items></livewire:shoplist-items>

       <div class="lg:mb-24 mt-24 ">
         <img src="img/icons.png" alt="">
        </div>
        </div>


        <livewire:footer></livewire:footer>
        @endsection       