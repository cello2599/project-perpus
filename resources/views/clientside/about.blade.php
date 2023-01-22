<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>

    <title>Pena</title>

</head>
<header>
<div>
        <nav>
            <div class="flex flex-row bg-[#5abbc0] w-auto h-20 p-6" >
                <div class="ml-3 text-[30px] font-medium m-auto text-black">PE<span class=" text-blue-600">NA</span></div>
                <div class="ml-auto"><a class="p-3 rounded-sm bg-transparent w-20 h-auto hover:bg-white text-[20px] font-medium m-7 text-black hover:text-black " href='/'>Home</a></div>
                <div class="-ml-12"><a class=" p-3 rounded-sm w-20 h-auto hover:bg-white text-[20px] font-medium m-7" href="about" >About</a></div>
              <div class="" x-data="{showMenu : false}">
                    <button @click.prevent="showMenu = !showMenu " class="px-2 py-4 flex justify-between bg-blue-500 text-white -mt-3">
                        <svg x-show="!showMenu" class="w-6 h-6 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg x-show="showMenu" class="w-6 h-6 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
                         Menu
                    </button>
                 <div x-show="showMenu"> 
                    <nav class="flex flex-col absolute z-50">
                            <a href="serverside/master" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                                Login
                                <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            Genre
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            Daftar Buku
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                            <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                            bsx
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                            </a>
                    </nav>
                 </div>
              </div>
            </div>
        </nav>
    </div>
</header>

<body>
    <div class="">
        <div>
            <img class="w-screen brightness-50" src="../image/bg-Book1.jpg" alt="Perpustakaan Sederhana"> 
        </div>
        
        <div class="grid grid-cols-4 gap-4  bg-blue-400 rounded-lg border border-black p-4 ">
            <div class="w-64 h-24 text-center rounded-lg p-2  font-bold border ml-7 border-white bg-slate-500">
                <p>Terdapat</p>
                <p>10+</p>  
                <p>Buku</p></div>
            <div class="w-64 h-24 text-center rounded-lg p-2  font-bold border ml-7 border-black">
                <div><p>Terdapat</p>
                <p>3+</p>  
                <p>Genre Buku</p></div></div>
            <div class="w-64 h-24 text-center rounded-lg p-2 font-bold border ml-7 border-white bg-slate-500">
                <p>Terdapat</p>
                <p>5+</p>  
                <p>Penulis</p></div>
            <div class="w-64 h-24 text-center rounded-lg p-2  font-bold border ml-7 border-black">
                <p>Terdapat</p>
                <p>2+</p>  
                <p>Penerbit</p></div>
        </div>

        <div class="grid grid-cols-3 gap-4  bg-blue-400 rounded-lg border border-black p-4 ">
            
            <div class="w-64 h-24 text-center rounded-lg p-2  font-bold border ml-7 border-white bg-slate-500">
            <i class="fa-brands fa-instagram"></i></div>
            <div class="w-64 h-24 text-center rounded-lg p-2  font-bold border ml-7 border-black">
            <i class="fa-brands fa-whatsapp"></i></div>
            <div class="w-64 h-24 text-center rounded-lg p-2 font-bold border ml-7 border-white bg-slate-500">
            <i class="fa-brands fa-youtube"></i></div>
            
        </div>
        
    </div>
    
</body>

<footer>
    <div class="flex flex-row bg-[#5abbc0] w-auto h-36 " >

        <div class="flex flex-row bg-[5a7e85] w-[70rem] h-12 m-auto"  >
            <div class="m-auto text-white">Copyright © 2023,  All Rights Reserved</div> 
        </div>

        </div>
    </div>
</footer>

</html>