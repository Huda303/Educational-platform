<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="overflow-x-hidden">
    @include('layouts.navigation-banner')
    <!-- search bar -->
    <div class="max-w-2xl mx-auto mt-8">
	    <form class="flex items-center">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="simple-search" class="border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full pl-10 p-2.5 " placeholder="Search" required>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-teal-700 rounded-lg border border-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
        </form>
    </div>
    <!-- end search bar -->

    <!-- heading -->
    <div class = " m-10 mt-12 flax">
        <h1 class = "flex items-center justify-center text-xl text-black font-semibold">
            Choose the Free Course That Aligns Best With Your Educational Goals !
        </h1>
    </div>
    <!-- end heading -->

    
    <!-- cards -->   
        <!-- cards container  -->
   
    <div class="flex content-center gap-y-10 absolute justify-center grid grid-cols-4 grid-rows-9">
        <!-- actual card -->
        @foreach($categories as $category)
         <a href="{{route('courses')}}">
            <div>
                <div class="max-w-5xl ml-16 grid grid-cols-2 justify-center justify-items-center w-64 h-72 cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1  duration-300 hover:scale-110 shadow-lg p-2.5 rounded-2xl">
                   <div class="">
                   <svg class = "text-center  ml-8  text-[#343a54]" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 16 16"><path fill="currentColor" d="M7 10.973a4.5 4.5 0 0 1-1.016-.235Q5.999 10.384 6 10v-.337c.31.148.647.251 1 .302V7.5A1.5 1.5 0 0 1 8.5 6h2.465a3.5 3.5 0 0 0-5.088-2.602a3.2 3.2 0 0 0-.386-.926A4.5 4.5 0 0 1 11.973 6H13.5A1.5 1.5 0 0 1 15 7.5v5a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 7 12.5zM11.973 7A4.5 4.5 0 0 1 8 10.973V12.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5zm-1.008 0H8.5a.5.5 0 0 0-.5.5v2.465A3.5 3.5 0 0 0 10.965 7m-6.17.561c-.105-.386-.275-.773-.567-1.07C4.7 6.044 5 5.332 5 4.5c0-.697-.141-1.176-.396-1.559a2.8 2.8 0 0 0-.39-.453l-.17-.16c-.061-.057-.117-.109-.19-.182c-.15-.15-.167-.27-.167-.333a.3.3 0 0 1 .017-.103a.5.5 0 0 0-.731-.626l-.002.001l-.003.002l-.009.006l-.03.02l-.102.075a6 6 0 0 0-.33.269c-.252.22-.577.547-.808.937a4.7 4.7 0 0 0-.482 1.032C1.087 3.785 1 4.174 1 4.5c0 .832.3 1.543.772 1.992c-.292.296-.462.683-.567 1.07C1 8.314 1 9.244 1 9.963V10c0 2.058.385 3.28.821 4.007c.219.364.447.599.638.747a1.7 1.7 0 0 0 .33.2A.8.8 0 0 0 3 15c.084 0 .211-.046.211-.046a1.7 1.7 0 0 0 .33-.2c.19-.148.42-.383.638-.747C4.615 13.281 5 12.058 5 10v-.036c0-.72 0-1.649-.205-2.403m-2.308-.37C2.6 7.077 2.751 7 3 7c.25 0 .4.078.513.19c.126.127.235.333.317.634C3.996 8.435 4 9.237 4 10c0 1.942-.365 2.97-.679 3.493c-.12.2-.233.329-.321.41a2 2 0 0 1-.321-.41C2.365 12.969 2 11.942 2 10c0-.763.004-1.565.17-2.176c.082-.3.191-.507.317-.634M3 6c-.385 0-1-.428-1-1.5c0-.173.052-.447.156-.757a3.7 3.7 0 0 1 .389-.833c.087-.147.2-.29.322-.421q.102.184.28.365c.073.073.168.161.249.237l.124.116c.105.102.186.191.251.29c.12.179.229.45.229 1.003C4 5.572 3.385 6 3 6"/></svg> 
                     <h1> {{ $category->filed_name }} </h1>
                     <p>{{ $category->field_discription }}</p>
                   </div>
                   <div class = " bg-[#ffce54] w-">
                        <span>{{ $category->id}}</span>
                   </div>
                </div>
            </div>
         </a>
         @endforeach
    </div>
    <!-- end cards -->
    </body>
</html>