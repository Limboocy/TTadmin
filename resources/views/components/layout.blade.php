<!DOCTYPE html>
<html lang="en" >
<head>
    @Vite(['resources/css/app.css', 'resources/js/app.js']) 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel And Tours</title>
</head>
<body class="bg-[#D2DCD4]" " >
  

<header class="bg-[#aeb6af]">
   <div class="mx-auto max-w-7xl px-4 py-5 sm:px-6 lg:px-2  sm:flex sm:justify-between">
        <h1 class="text-3xl font-bold tracking-tight text-[#236C64]"> {{$heading}} </h1>
   </div>
</header>

<aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-6 transition-transform -translate-x-full border-gray-200 sm:translate-x-0 bg-[#236C64]" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-[#236C64] ">
      <a href="#" class="flex ms-2 md:me-24">
         <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Company Logo" class="h-8 me-3">
         <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white ">Travel and Tours</span>
     </a >
      <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
         <li>
            <x-nav-link href="/home" :active="request()->is('home')">
               <span class="ms-3">Dashboard</span>
            </x-nav-link>
         </li> 
         <li>
            <x-nav-link href="/reserve" :active="request()->is('reserve')">
               <span class="flex-1 ms-3 whitespace-nowrap">Facilities Reservation</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="/docs" :active="request()->is('docs')">
               <span class="flex-1 ms-3 whitespace-nowrap">Document Management</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="/legal" :active="request()->is('legal')">
               <span class="flex-1 ms-3 whitespace-nowrap">Legal Management</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="/visit" :active="request()->is('visit')">
               <span class="flex-1 ms-3 whitespace-nowrap">Visitor Management</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="/" :active="request()->is('/')">
               <span class="flex-1 ms-3 whitespace-nowrap">Another module</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="/" :active="request()->is('/')">
               <span class="flex-1 ms-3 whitespace-nowrap">Another Module</span>
            </x-nav-link>
         </li>
      </ul>
      <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
         <li>
            <x-nav-link href="/" :active="request()->is('/')">
               <span class="ms-3">Ewan ko ano lalagay</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="/" :active="request()->is('/')">
               <span class="ms-3">Ewan ko ano lalagay</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="/" :active="request()->is('/')">
               <span class="ms-3">Ewan ko ano lalagay</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="/" :active="request()->is('/')">
               <span class="ms-3">Ewan ko ano lalagay</span>
            </x-nav-link>
         </li>
      </ul>
      <ul class="pt-4 mt-40 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
         <li>
            <x-nav-link href="/" :active="request()->is('/')">
               <span class="ms-3">Settings</span>
            </x-nav-link>
         </li>
         <li>
            <x-nav-link href="/" :active="request()->is('/')">
               <span class="ms-3">Logout</span>
            </x-nav-link>
         </li>
   </div>
</aside>


<main class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700">
           {{$slot}}
          

   </div>
</main>
   
<footer class="bg-[#aeb6af]">
   <div class="mx-auto max-w-7xl px-4 py-5 sm:px-6 lg:px-2 sm:flex sm:justify-between">
       <p class="text-lg text-[#236C64]">© 2024 Travel And Tours. All rights reserved.</p>
       <div class="sm:flex sm:items-center">
           <a href="#" class="text-[#236C64] hover:underline sm:ml-6">Privacy Policy</a>
           <a href="#" class="text-[#236C64] hover:underline sm:ml-6">Terms of Service</a>
           <a href="#" class="text-[#236C64] hover:underline sm:ml-6">Contact Us</a>
       </div>
   </div>
</footer>


   
</body>
</html>

