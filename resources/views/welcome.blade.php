@extends('layouts.app')
@section('content')
<!-- body -->
 
 <livewire:header /> 

<!--karusel-->
<div class="mt-6 carousel ">
<div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="carousel-inner ">
           <div class="grid lg:grid-cols-2 lg:gap-6">
            <div class="lg:ml-12 grid lg:grid-cols-2 ">
            <img src="img/image.png" alt="">
            <div class="lg:mt-40 ">
                <h1 class="text lg:pb-5 font-bold">Best Furniture For Your Castle....</h1>
                <h1 class="lg:pb-5 lg:text-4xl font-bold text-black" >New Furniture Collection Trends in 2020</h1>
                <h1 class="text2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.</h1>
                <button class="lg:mt-10 mt-3 btn text-white font-bold py-2 px-4 rounded inline-flex items-center hover:bg-pink-400 ">Shop now</button>
             </div>
           </div>  
           <div class="lg:p-10">
            <img src="img/sofapro.png" alt="">
          </div>
       </div>
      </div>
   </div>
 </div>
      <div class="swiper-pagination"></div>
    </div>
</div>

<!--Featured Products-->
<div class="lg:mt-28 lg:px-48">
  <livewire:tittle text="Featured Products" />
    <div class="lg:mt-12 p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 ">
          <livewire:feature-product></livewire:feature-product>
          <livewire:feature-product></livewire:feature-product>
          <livewire:feature-product></livewire:feature-product>
          <livewire:feature-product></livewire:feature-product>
  </div>
</div>

  <!--Leatest Products-->
  <div class="lg:mt-28 lg:px-48">
     <livewire:tittle text="Leatest Products" />
      <div class="flex justify-center lg:mt-6">
        <ul class="flex flex-inline md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
        <li>
         <a href="#" class="lg:mr-5 text-blue-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-red-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 underline">New Arrival</a>
        </li>
      <li>
        <a href="#" class="lg:mr-5 text-blue-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-red-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Best Seller</a>
      </li>
      <li>
        <a href="#" class="lg:mr-5 text-blue-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-red-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Featured </a>
      </li>
      <li>
        <a href="#" class="lg:mr-5 text-blue-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-red-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Special Offer</a>
      </li>
      
    </ul>
   </div>
  <div class="lg:mt-12 px-10 grid lg:grid-cols-3 grid-cols-3 lg:gap-y-10">
        <livewire:leatest-products/>
        <livewire:leatest-products/>
        <livewire:leatest-products/>
        <livewire:leatest-products/>
        <livewire:leatest-products/>
        <livewire:leatest-products/>
     </div>
   
  </div>

  <!--shopes offers-->
  <div class="lg:mt-20">
  <livewire:tittle text="What Shopex Offer!" />
  <div class=" lg:mt-12  lg:px-36 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 ">
    <livewire:shopex-offer src="img/free-delivery.png"/>
    <livewire:shopex-offer src="img/cashback.png"/>
    <livewire:shopex-offer src="img/premium.png"/>
    <livewire:shopex-offer src="img/support.png"/>
  </div>
  </div>

  <!--Unique features -->
  <div class="lg:mt-32 carousel">
    <div class="flex">
      <div>
        <img src="img/chairrr.png" class="lg:ml-96" alt="">
      </div>
    <div class="lg:mt-24">
      <h3 class="lg:text-4xl text-xl text-center font-sans text-blue-900 font-bold">Unique Features Of leatest & Trending Poducts</h3>
       <div class="grid grid-row-3 lg:ml-8 ml-2">
          <div class="flex inline-flex items-center lg:mt-6"><img src="img/Ellipse65.png" alt="">
          <h1 class="graycol ml-2 lg:text-base text-xs">All frames constructed with hardwood solids and laminates</h1>
        </div>
        <div class="flex inline-flex items-center lg:mt-6 "><img src="img/Ellipse66.png" alt="">
          <h1 class="graycol ml-2 lg:text-base text-xs">Reinforced with double wood dowels, glue, screw - nails corner <br> blocks and machine nails</h1>
        </div>
        <div class="flex inline-flex items-center lg:mt-6 "><img src="img/Ellipse67.png" alt="">
          <h1 class="graycol ml-2 lg:text-base text-xs">Arms, backs and seats are structurally reinforced</h1>
        </div>
        </div>
        <div class="flex inline-flex items-center lg:pt-7 pt-3 lg:ml-8">
        <div class="flex space-x-2 justify-center">
         <button type="button" class="px-6 py-2.5 btn text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-pink-700 hover:shadow-lg focus:bg-pink-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-pink-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
       </div> 
       <div class="grid grid-row-2 lg:ml-4 ml-1">
         <h3 class="lg:text-base text-xs">B&B Italian Sofa</h3>
         <h3 class="lg:text-base text-xs">$32.00</h3>
         </div>
        </div>
    </div>
    </div>
  </div>

  <!-- Trendin product-->
  <div class="lg:mt-32 lg:px-48">
  <livewire:tittle text="Trending Products" />
    <div class="lg:mt-12  p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-3 ">
    <livewire:trending-product src="img/image32.png"></livewire:trending-product>
    <livewire:trending-product src="img/image32.png"></livewire:trending-product>
    <livewire:trending-product src="img/image32.png"></livewire:trending-product>
    <livewire:trending-product src="img/image32.png"></livewire:trending-product>

    </div>
</div>
<!--element2 i trending product-->
<div class="grid lg:grid-cols-3 lg:mt-10 lg:ml-56">
    <livewire:discount src="img/image13.png" text="23% off in all products" name="Shop Now"></livewire:discount>
    <div class="p-4">
        <div class="p-8 bg-purple-50 rounded shadow-md">
            <h2 class="lg:text-2xl text-xl font-bold text-blue-900">23% off in all products</h2>
            <a href="#" class="text-pink-500 text-base underline">View Collection</a>
            <div class="flex justify-end"> <img src="img/image13.png" alt="" class=""></div>
         </div>
    </div>
    <div class="grid grid-rows-3 pt-4">
      <livewire:seat-chair src="img/img.png"></livewire:seat-chair>
      <livewire:seat-chair src="img/img.png"></livewire:seat-chair>
      <livewire:seat-chair src="img/img.png"></livewire:seat-chair>
    </div>
</div>

<!--Discount items -->
<div class="lg:mt-32 ">
<livewire:tittle text="Discount Item" />
<div class="flex justify-center lg:mt-6">
   <ul class="flex flex-inline md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
   <li>
        <a href="#" class="lg:mr-5 text-blue-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-red-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Wood Chair</a>
      </li>
      <li>
        <a href="#" class="lg:mr-5 text-blue-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-red-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Plastic Chair</a>
      </li>
      <li>
        <a href="#" class="lg:mr-5 text-blue-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-red-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sofa Colletion </a>
      </li>
      
   </ul>
  </div>
<div class="flex lg:ml-52">
  <div class="lg:grid lg:grid-cols-2 md:flex-row md:max-w-full rounded-lg bg-white">
    <div class="p-6 flex flex-col justify-start lg:mt-28 mt-0 ">
      <h3 class="text-blue-900 font-bold lg:text-4xl text-xl font-medium mb-2">20% Discount Of All Products</h3>
      <p class="text-pink-600 text-base lg:mb-4 mb-2">
        Eams Sofa Compact</p>
      <p class="text-gray-600 lg:text-base text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu eget <br>
       feugiat habitasse nec, bibendum condimentum.</p>
      <div class="grid grid-cols-2">
      <div class="flex inline-flex items-center lg:mt-6"><img src="img/check.png" alt="">
      <p class="text-gray-600 text-xs lg:text-base pl-2">Material expose like metals</p>
        </div>
        <div class="flex inline-flex items-center lg:mt-6  "><img src="img/check.png" alt="">
        <p class="text-gray-600 text-xs lg:text-base pl-2">Clear lines and geomatric figures</p>
        </div>
        <div class="flex inline-flex items-center lg:mt-6"><img src="img/check.png" alt="">
        <p class="text-gray-600 text-xs lg:text-base pl-2">Simple neutral colours.</p>
        </div>
        <div class="flex inline-flex items-center lg:mt-6 "><img src="img/check.png" alt="">
        <p class="text-gray-600 text-xs lg:text-base pl-2">Material expose like metals</p>
        </div>
      </div>
      <div>
      <button class="lg:mt-10 mt-3 btn text-white font-bold py-2 px-4 rounded inline-flex items-center hover:bg-pink-400 ">Shop now</button>
      </div>
    </div>
    <div class="flex justify-end">
    <img src="img/soffa.png" alt="">
    </div>
  </div>
  
</div>
 </div>

 <!-- Top Categories-->
 <div class="lg:mt-32 lg:px-48">
  <livewire:tittle text="Top Categories" />
  <div class="lg:mt-12 p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-3 ">
    <livewire:top-categories src="img/image20.png"></livewire:top-categories>
    <livewire:top-categories src="img/image20.png"></livewire:top-categories>
    <livewire:top-categories src="img/image20.png"></livewire:top-categories>
    <livewire:top-categories src="img/image20.png"></livewire:top-categories>
   </div>
 </div>
 
 <!--background image -->
 <div class="lg:mt-32 backgroundimg">
   <div>
     <img src="img/photo.png" alt="">
   </div>

 </div>


<!--image-->
   <div class="lg:mb-24 mt-24 flex justify-center">
   <img src="img/icons.png" alt="">
 </div>
 <!--blog-->
 <div class="lg:mt-20">
<livewire:tittle text="Leatest Blog"></livewire:tittle>
<div class="lg:px-48">
<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-3">
<livewire:blog src="img/room1.png"></livewire:blog>
<livewire:blog src="img/room2.png"></livewire:blog>
<livewire:blog src="img/room3.png"></livewire:blog>
</div>
</div>
</div>
<livewire:footer/>
@endsection
