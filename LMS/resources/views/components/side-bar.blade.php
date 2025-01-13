<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar with Icons</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .transition-all {
      transition: all 0.3s ease-in-out;
    }
  </style>
</head>
<body class="bg-gray-100 h-screen flex">

  <!-- Sidebar -->
  <div id="sidebar" class="w-64 bg-gray-800 text-white h-screen flex-shrink-0 transition-all duration-300">
    <!-- Header -->
    <div class="flex items-center justify-between p-4 bg-gray-900">
      <h1 id="sidebar-title" class="text-lg font-bold">Sidebar</h1>
      <button id="toggle-sidebar" class="text-gray-400 hover:text-white focus:outline-none">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
    </div>

    <!-- Menu -->
    <div class="menu p-4">
      <ul class="space-y-2">
        <li class="flex items-center space-x-4 hover:bg-gray-700 rounded-md p-2 transition">
          <span class="w-6">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m4 0h2m-6 10a6 6 0 100-12 6 6 0 000 12z" />
            </svg>
          </span>
          <span class="menu-text">Courses</span>
        </li>
        <li class="flex items-center space-x-4 hover:bg-gray-700 rounded-md p-2 transition">
          <span class="w-6">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 13.062a7.5 7.5 0 0113.757 0m-7.5-4.495a4.5 4.5 0 000 9" />
            </svg>
          </span>
          <span class="menu-text">Communication</span>
        </li>
        <li class="flex items-center space-x-4 hover:bg-gray-700 rounded-md p-2 transition">
          <span class="w-6">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 3v2h12V3m6 4v14a2 2 0 01-2 2H4a2 2 0 01-2-2V7m16 0H6m16 0H6" />
            </svg>
          </span>
          <span class="menu-text">Settings</span>
        </li>
        <li class="flex items-center space-x-4 hover:bg-gray-700 rounded-md p-2 transition">
          <span class="w-6">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 3v2h12V3m6 4v14a2 2 0 01-2 2H4a2 2 0 01-2-2V7m16 0H6m16 0H6" />
            </svg>
          </span>
          <span class="menu-text">Tools</span>
        </li>
        
        <li class="flex items-center space-x-4 hover:bg-gray-700 rounded-md p-2 transition">
          <span class="w-6">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7" />
            </svg>
          </span>
          <span class="menu-text">Logout</span>
        </li>
      </ul>
    </div>
  </div>

  
  <!-- JavaScript -->
  <script>
    const sidebar = document.getElementById("sidebar");
    const toggleButton = document.getElementById("toggle-sidebar");
    const menuTexts = document.querySelectorAll(".menu-text");
    const sidebarTitle = document.getElementById("sidebar-title");

    toggleButton.addEventListener("click", () => {
      sidebar.classList.toggle("w-64");
      sidebar.classList.toggle("w-16");

      if (sidebar.classList.contains("w-16")) {
        menuTexts.forEach(text => text.classList.add("hidden"));
        sidebarTitle.classList.add("hidden");
      } else {
        menuTexts.forEach(text => text.classList.remove("hidden"));
        sidebarTitle.classList.remove("hidden");
      }
    });
  </script>
</body>
</html>
