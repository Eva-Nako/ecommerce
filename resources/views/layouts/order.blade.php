@extends('layouts.app')
@section('content')
        <livewire:header></livewire:header>
        <livewire:section1 text="Order Completed"></livewire:section1>
        <div class="lg:px-64 px-2">
            <div class="lg:flex lg:flex-inline md:flex md:flex-inline">
                <div class="place-self-center">
                <img src="img/Clock.png" alt="">
                </div>
                <div class="flex flex-col justify-center items-center lg:pt-32">
                    <div class="pt-3">
                        <img src="img/ticks.jpeg" alt="">
                    </div>
                    <div class="text-center pt-6">
                    <h3 class="text-3xl font-bold"> Your Order Is Completed! </h3>
                    </div>
                    <h3 class="p-6" style="color:#8D92A7">
                    Thank you for your order! Your order is being processed and will be completed within 3-6 <br>
                    hours. You will receive an email confirmation when your order is completed.
                    </h3>
                    <div>
                    <button class="btn text-white font-bold py-2 px-4 rounded inline-flex items-center">
                    <span>Continue Shopping</span>
                    </button>
                    </div>
                </div> 
            </div>
                <div class="lg:divide-y lg:divide-dashed md:divide-y md:divide-dashed">
                <div class="flex justify-end lg:pr-20 pr-3">
                <img src="img/notebook.png" alt="">
                </div>
                <div></div>
                </div>
                
                <div class="lg:mb-24 mb-10 mt-24 flex flex-col justify-center items-center lg:pt-32 ">
                <img src="img/icons.png" alt="">
                </div>
        </div>
        <livewire:footer></livewire:footer>
@endsection  