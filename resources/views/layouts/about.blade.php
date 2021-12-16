@extends('layouts.app')
@section('content')
        <livewire:header></livewire:header>
        <livewire:section1 text="About Us"></livewire:section1>
        <div class="lg:px-64 px-2">
        
        <div class="p-10 lg:p-20">
       <!--Card 1-->
      <div class=" w-full lg:max-w-full lg:flex">
      <div class=" flex-none bg-cover  text-center overflow-hidden">
          <img src="img/corporate.png"  alt="">
      </div>
      <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
          
          <div class="font-bold text-xl mb-3.5 pt-10 lg:flex inline-flex"> <h3 class="lg:pr-10 pr-3">Know About Our Ecomerce <br>
            Business, History</h3>
         
        </div>
          
          <p class="text-gray-500 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis neque ultrices
              <br> mattis aliquam, malesuada diam est. Malesuada sem tristique amet erat vitae
              <br> eget dolor lobortis. Accumsan faucibus vitae lobortis quis bibendum quam.</p>
        </div>
        <div class="pb-6">
           <button class="btn text-white font-bold py-2 px-4 rounded inline-flex items-center">
           <span>Continue Shopping</span>
           </button>
           </div>
       
      </div>
    </div>
    </div>
    <livewire:tittle text="Our Features"></livewire:tittle>
    <div class=" lg:mt-12  lg:px-48 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 ">
    <livewire:shopex-offer src="img/free-delivery.png"/>
    <livewire:shopex-offer src="img/cashback.png"/>
    <livewire:shopex-offer src="img/premium.png"/>
    <livewire:shopex-offer src="img/support.png"/>
  </div>
    <div class="py-20">
    <livewire:tittle text="Our Client Say!"></livewire:tittle>
    <div class="flex flex-col justify-center items-center lg:pt-20 pt-10">
            <div class="grid grid-cols-3 space-x-2">
                <img src="img/clientphoto.png" alt="">
                <img src="img/clientphoto.png" alt="">
                <img src="img/clientphoto.png" alt="">
            </div>
            <div class="text-center py-6">
            <h3 class="text-base font-bold">Selina Gomez </h3>
            <p class="text-sm">Ceo At Webecy Digital</p>
            </div>
            <h3 class="text-center px-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non duis ultrices 
            quam vel dui sollicitudin <br> aliquet id arcu. 
            Nam vitae a enim nunc, sed sapien egestas ac nam. 
            Tristique ultrices dolor <br>  aliquam lacus volutpat praesent.
           </h3>
        </div> 

    </div>



        </div>
        <livewire:footer></livewire:footer>
@endsection  