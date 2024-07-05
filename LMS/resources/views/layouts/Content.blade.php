<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class = " " >
    <!-- girl & heading -->
    <div class = "flex relative">
        <div class="justify-center m-20 mt-36 text-emerald-900">
            <h1 class = "text-[40px] font-bold">
                Online coures 
                <br>according to your need
            </h1>
            <p>
                Get access to over 5 courses for free. Limited time offer for early
                <br>Applecation book to your seat now!
            </p>
            <button class = " mt-6 p-3 px-10 rounded-full bg-gradient-to-r from-green-300 via-emerald-300 to-blue-300 hover:from-blue-300 honer:via-emerald-300 hover:to-green-300" >Get started for free</button>
        </div>
        <div class = "mt-20 relative">
            <img class="w-[600px] z-10 h-[400px]" src="{{ url('Photos\portrait-smiling-girl-holding-laptop-computer-isolated.png') }}" alt="a girl who study">
        </div>     


    </div>
    <!-- end heading -->

   <!-- green shape -->
    <!-- <div class = "z-0 ml-[35%]">
            <img class = " w-[400px] h-[500px]" src="{{ url('Photos\small-green-ink-droplet-falling.png') }}" alt="j">
    </div>  -->
    <!-- end green shape     -->
     
     <!-- yellow circle -->
     <!-- <img class = "w-[300px] h-[300px] z-0 "  src="{{ url('Photos\dark-wall-backdrop-frame.png') }}" alt=""> -->
     <!-- end yellow circle -->

    <!-- categorise -->
     <div class="w-auto h-max bg-emerald-800 mx-6 py-7 rounded-[60px]">
        <h3 class = " text-[30px] font-bold text-center p-4 pt-8 text-white">Explore Categorise</h3>
        <ul class = "flex justify-center items-center gap-6 m-8">
            <li class = " bg-[#eeeeee] p-6 py-7 rounded-xl text-center  cursor-pointer">
            <svg class = "text-center  ml-8  text-cyan-500" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 16 16"><path fill="currentColor" d="M7 10.973a4.5 4.5 0 0 1-1.016-.235Q5.999 10.384 6 10v-.337c.31.148.647.251 1 .302V7.5A1.5 1.5 0 0 1 8.5 6h2.465a3.5 3.5 0 0 0-5.088-2.602a3.2 3.2 0 0 0-.386-.926A4.5 4.5 0 0 1 11.973 6H13.5A1.5 1.5 0 0 1 15 7.5v5a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 7 12.5zM11.973 7A4.5 4.5 0 0 1 8 10.973V12.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5zm-1.008 0H8.5a.5.5 0 0 0-.5.5v2.465A3.5 3.5 0 0 0 10.965 7m-6.17.561c-.105-.386-.275-.773-.567-1.07C4.7 6.044 5 5.332 5 4.5c0-.697-.141-1.176-.396-1.559a2.8 2.8 0 0 0-.39-.453l-.17-.16c-.061-.057-.117-.109-.19-.182c-.15-.15-.167-.27-.167-.333a.3.3 0 0 1 .017-.103a.5.5 0 0 0-.731-.626l-.002.001l-.003.002l-.009.006l-.03.02l-.102.075a6 6 0 0 0-.33.269c-.252.22-.577.547-.808.937a4.7 4.7 0 0 0-.482 1.032C1.087 3.785 1 4.174 1 4.5c0 .832.3 1.543.772 1.992c-.292.296-.462.683-.567 1.07C1 8.314 1 9.244 1 9.963V10c0 2.058.385 3.28.821 4.007c.219.364.447.599.638.747a1.7 1.7 0 0 0 .33.2A.8.8 0 0 0 3 15c.084 0 .211-.046.211-.046a1.7 1.7 0 0 0 .33-.2c.19-.148.42-.383.638-.747C4.615 13.281 5 12.058 5 10v-.036c0-.72 0-1.649-.205-2.403m-2.308-.37C2.6 7.077 2.751 7 3 7c.25 0 .4.078.513.19c.126.127.235.333.317.634C3.996 8.435 4 9.237 4 10c0 1.942-.365 2.97-.679 3.493c-.12.2-.233.329-.321.41a2 2 0 0 1-.321-.41C2.365 12.969 2 11.942 2 10c0-.763.004-1.565.17-2.176c.082-.3.191-.507.317-.634M3 6c-.385 0-1-.428-1-1.5c0-.173.052-.447.156-.757a3.7 3.7 0 0 1 .389-.833c.087-.147.2-.29.322-.421q.102.184.28.365c.073.073.168.161.249.237l.124.116c.105.102.186.191.251.29c.12.179.229.45.229 1.003C4 5.572 3.385 6 3 6"/></svg> 
            <a class = " text-start font-medium"   href="">
                Graphic Design
            </a>
            </li>
            <li class = " bg-[#eeeeee] p-6 py-7 rounded-xl text-center  cursor-pointer">
                <svg class = "text-center ml-6 my-[3px]  text-cyan-500" xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 2048 2048"><path fill="currentColor" d="M2048 384v640h-128V603l-768 768l-384-384l-675 674l-90-90l765-766l384 384l677-677h-421V384z"/></svg>                 
            <a class = " text-start font-medium	"  href="">
                Marketing
            </a>
            </li>
            <li class = " bg-[#eeeeee] p-4 rounded-xl  cursor-pointer">
                <svg class = "text-center ml-7  text-cyan-500" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24"><path fill="currentColor" d="M13 16h-2c-.55 0-1-.45-1-1H3.01v4c0 1.1.9 2 2 2H19c1.1 0 2-.9 2-2v-4h-7c0 .55-.45 1-1 1m7-9h-4c0-2.21-1.79-4-4-4S8 4.79 8 7H4c-1.1 0-2 .9-2 2v3c0 1.11.89 2 2 2h6v-1c0-.55.45-1 1-1h2c.55 0 1 .45 1 1v1h6c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2M10 7c0-1.1.9-2 2-2s2 .9 2 2H9.99z"/></svg>
                 <a  class = " text-start font-medium"  href="">
                 Business and<br> commerce
                </a>

            </li>
            <li class = " bg-[#eeeeee] p-6 py-7 rounded-xl text-center  cursor-pointer">
                <svg class = "text-center ml-4  text-cyan-500" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 8l6 6m-7 0l6-6l2-3M2 5h12M7 2h1m14 20l-5-10l-5 10m2-4h6"/></svg>
                 <a class = " text-start font-medium "   href="">
                 Languages
                </a>
            </li>
            <li class = " bg-[#eeeeee] p-6 py-7 rounded-xl text-center  cursor-pointer">
                <svg class = "text-center ml-8  text-cyan-500" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/></svg>
                 <a class = " text-start font-medium	"   href="">
                    IT and Software
                </a>
            </li>
            <li class = " bg-[#eeeeee] p-6 py-7 rounded-xl text-center  cursor-pointer">
            <svg class = "text-center ml-5  text-cyan-500" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24"><path fill="currentColor" d="M13 8.57a1.43 1.43 0 1 0 0 2.86a1.43 1.43 0 0 0 0-2.86"/><path fill="currentColor" d="M13 3C9.25 3 6.2 5.94 6.02 9.64L4.1 12.2a.5.5 0 0 0 .4.8H6v3c0 1.1.9 2 2 2h1v3h7v-4.68A6.999 6.999 0 0 0 13 3m3 7c0 .13-.01.26-.02.39l.83.66c.08.06.1.16.05.25l-.8 1.39c-.05.09-.16.12-.24.09l-.99-.4c-.21.16-.43.29-.67.39L14 13.83c-.01.1-.1.17-.2.17h-1.6c-.1 0-.18-.07-.2-.17l-.15-1.06c-.25-.1-.47-.23-.68-.39l-.99.4c-.09.03-.2 0-.25-.09l-.8-1.39a.19.19 0 0 1 .05-.25l.84-.66c-.01-.13-.02-.26-.02-.39s.02-.27.04-.39l-.85-.66c-.08-.06-.1-.16-.05-.26l.8-1.38c.05-.09.15-.12.24-.09l1 .4c.2-.15.43-.29.67-.39L12 6.17c.02-.1.1-.17.2-.17h1.6c.1 0 .18.07.2.17l.15 1.06c.24.1.46.23.67.39l1-.4c.09-.03.2 0 .24.09l.8 1.38a.2.2 0 0 1-.05.26l-.85.66c.03.12.04.25.04.39"/></svg>                 <a class = " text-start font-medium	"   href="">
                   Psychology
                </a>
            </li>
        </ul>
        <div class="flex justify-center	content-center">
            <button class = " border-[#eeeeee] border-2 text-white text-center rounded-full p-2 px-12 hover:text-cyan-200 hover:border-cyan-200" >Explore more categorise</button>
        </div>
     </div>
    <!-- end categorise -->
</body>
</html>