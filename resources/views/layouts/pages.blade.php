@extends('layouts.app')
@section('content')
        <livewire:header></livewire:header>
        <livewire:section1 text="Shop Grid Default"></livewire:section1>
<div class="lg:px-64 px-4">
        <livewire:sortsection></livewire:sortsection>

      <div>
        <div class="grid lg:grid-cols-4 grid-cols-2 lg:gap-y-6">
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
        <livewire:product-pages2></livewire:product-pages2>
     </div>
</div>
        
        <div class="lg:mb-24 mb-10 mt-10 lg:mt-24 flex flex-col justify-center items-center lg:pt-32 ">
         <img src="img/icons.png" alt="">
        </div>
 </div>
        <livewire:footer></livewire:footer>
    
@endsection