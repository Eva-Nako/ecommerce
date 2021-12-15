@extends('layouts.app')
@section('content')
        <livewire:header></livewire:header>
        <livewire:section1 text="Contact Us"></livewire:section1>
        <div class="lg:px-56 px-4">
         <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 lg:gap-40 lg:pt-20 pt-10 lg:pb-40 pb-20">
                     <div>
                         <h3 class="font-bold pb-5">Information About us</h3>
                         <h3 class="lg:pb-10 text-sm lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis neque ultrices <br> mattis aliquam, malesuada diam est. Malesuada sem tristique amet erat vitae <br> eget dolor lobortis. Accumsan faucibus vitae  lobortis quis bibendum quam.</h3>
                         <div class="pt-3 lg:pt-0">
                          <i class="fa fa-circle text-blue-900 pr-3" ></i>
                          <i class="fa fa-circle text-pink-600 pr-3" ></i>
                          <i class="fa fa-circle text-blue-300 pr-3" ></i>
                          </div>
                    </div>
                 
                 
                     <div>
                         <h3 class="font-bold pb-5">Contact Way</h3>
                         <div class="grid grid-cols-2 gap-y-6">
                             <div class="flex flex-inline items-center">
                             <i class="fa fa-circle text-blue-900 pr-3" ></i>
                              <div class="grid grid-rows-1">
                                <h3 class="lg:text-base text-sm ">Tel: 877-67-88-99</h3>
                                <h3 class="lg:text-base text-sm ">E-Mail: shop@store.com</h3>
                              </div>
                           </div>
                           <div class="flex flex-inline items-center">
                             <i class="fa fa-circle text-pink-600 pr-3" ></i>
                              <div class="grid grid-rows-1">
                                <h3 class="lg:text-base text-sm ">Support Forum</h3>
                                <h3 class="lg:text-base text-sm ">For over 24hr</h3>
                              </div>
                           </div>
                           <div class="flex flex-inline items-center">
                             <i class="fa fa-circle text-yellow-500 pr-3" ></i>
                              <div class="grid grid-rows-1">
                                <h3 class="lg:text-base text-sm ">20 Margaret st, London</h3>
                                <h3 class="lg:text-base text-sm ">Great britain, 3NM98-LK</h3>
                              </div>
                           </div>
                           <div class="flex flex-inline items-center">
                             <i class="fa fa-circle text-green-500 pr-3" ></i>
                              <div class="grid grid-rows-1">
                                <h3 class="lg:text-base text-sm ">Free standard shipping</h3>
                                <h3 class="lg:text-base text-sm ">on all orders.</h3>
                              </div>
                           </div>


                         </div>
                      </div>

                     <div>
                         <h3 class="font-bold pb-5">Get In Touch</h3>
                         <h3 class="lg:pb-10 pb-5 text-sm lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis neque ultrices <br> tristique amet erat vitae eget dolor los vitae lobortis quis bibendum quam.</h3>
                         <div class="grid lg:pr-28 pr-0">
                             <form action="">
                                 <div class="grid grid-cols-2 gap-3">
                                 <input type="text" class="px-3 py-1.5 text-base text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out ease-in-out ease-in-out focus:border-blue-600 focus:outline-none" placeholder="Your Name*">
                                 <input type="text" class="px-3 py-1.5 text-base text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out ease-in-out ease-in-out focus:border-blue-600 focus:outline-none" placeholder="Your Name*">
                                 </div>
                                 <div class="pt-3 lg:pt-8">
                                 <input type="text" class="px-3 py-1.5 w-full text-base text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out ease-in-out ease-in-out focus:border-blue-600 focus:outline-none" placeholder="Your Name*">
                                </div>
                                <div class="pt-3 lg:pt-8">
                                <textarea class=" form-control w-full px-3 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none  py-1.5 text-base text-gray-700  bg-white bg-clip-padding border border-solid border-gray-300 rounded  transition  ease-in-out m-0"  placeholder="Type Your Messege*"></textarea>
                               </div>
                                 
                             </form>
                         </div>
                    
                    
                        </div>
                    <div>
                        <img src="img/contactphoto.png" alt="">
                    </div>
              </div>


 </div>
<livewire:footer></livewire:footer>
@endsection  