<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>سایت زیست‌یار</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: Tahoma, sans-serif;
      background-color: #f0fdf4;
    }
    .glow-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
    }
    .glow-effect {
      position: absolute;
      width: 200%;
      height: 200%;
      background: radial-gradient(
        circle at center, 
        rgba(34, 197, 94, 0.4) 0%,
        rgba(34, 197, 94, 0.2) 50%,
        transparent 70%
      );
      animation: glow-move 15s infinite alternate ease-in-out;
    }
    @keyframes glow-move {
      0% { transform: translate(-30%, -20%); }
      50% { transform: translate(10%, 10%); }
      100% { transform: translate(20%, 30%); }
    }
  </style>
</head>
<body class="text-gray-800">
  <svg class="hidden">
    <symbol id="finger-print" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
</symbol>
<symbol id="shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
</symbol>
<symbol id="magnifying-glass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
</symbol>



  </svg>
  <!-- هاله نورانی پررنگ در پس‌زمینه -->
  <div class="glow-container">
    <div class="glow-effect"></div>
    <div class="glow-effect" style="
      background: radial-gradient(circle at center, rgba(34, 197, 94, 0.3) 0%, transparent 70%);
      animation-delay: -5s;
      animation-duration: 20s;
    "></div>
  </div>

  <!-- هدر جدید و بهبود یافته -->
  
  <header class="bg-gradient-to-l from-green-700 to-green-600 shadow-lg sticky top-0 z-50 ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16 md:h-20">
        
        <!-- لوگو و نام شرکت -->
        <div class="flex-shrink-0 flex items-center absolute right-4 top-1/2 transform -translate-y-1/2">
          <img src="photo_2025-05-13_23-44-49.jpg" alt="لوگو سایت" class="w-16 h-16 object-contain">
          <div class="mr-2 hidden sm:block text-white font-bold text-xl">
    دانش پژوهان زیست یار
  </div>
          
        </div>
        <!-- باکس ورود و ثبت نام -->
         <div class="absolute left-4 top-1/2 transform -translate-y-1/2 hidden md:flex items-center gap-2">
  <!-- آیکون جستجو -->
  <button class="w-10 h-10 flex items-center justify-center bg-white text-green-700 rounded-full shadow hover:bg-green-100 transition">
    <svg class="w-5 h-5" fill="none">
      <use xlink:href="#magnifying-glass"></use>
    </svg>
  </button>

  <!-- آیکون سبد خرید -->
  <button class="w-10 h-10 flex items-center justify-center bg-white text-green-700 rounded-full shadow hover:bg-green-100 transition">
    <svg class="w-5 h-5" fill="none">
      <use xlink:href="#shopping-bag"></use>
    </svg>
  </button>

  <!-- دکمه ورود -->
  <a href="#" class="flex items-center justify-center gap-2 bg-white text-green-700 hover:bg-green-100 px-4 py-2.5 rounded-full text-sm font-semibold transition duration-200 shadow">
    <svg class="w-5 h-5 text-green-600" fill="none">
      <use xlink:href="#finger-print"></use>
    </svg>
    ورود و ثبت نام
  </a>
</div>

        


        <!-- منوی اصلی - نسخه دسکتاپ -->
        <nav class="hidden md:flex space-x-8 space-x-reverse absolute right-1/2 translate-x-1/2 top-1/2 transform -translate-y-1/2">
          <a href="index.php" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex flex-col items-center nav-link-hover-effect">
            <div class="flex items-center">
              <i class="fas fa-home ml-1 text-xs opacity-70 group-hover:opacity-100 transition-all"></i>
              خانه
            </div>
            <span class="bg-green-200 h-0.5 w-0 transition-all duration-300 mt-1"></span>
          </a>
          <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex flex-col items-center nav-link-hover-effect">
            <div class="flex items-center">
              <i class="fas fa-pills ml-1 text-xs opacity-70 group-hover:opacity-100 transition-all"></i>
              محصولات
            </div>
            <span class="bg-green-200 h-0.5 w-0 transition-all duration-300 mt-1"></span>
          </a>
          <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex flex-col items-center nav-link-hover-effect">
            <div class="flex items-center">
              <i class="fas fa-book ml-1 text-xs opacity-70 group-hover:opacity-100 transition-all"></i>
              مقالات
            </div>
            <span class="bg-green-200 h-0.5 w-0 transition-all duration-300 mt-1"></span>
          </a>
          <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex flex-col items-center nav-link-hover-effect">
            <div class="flex items-center">
              <i class="fas fa-flask ml-1 text-xs opacity-70 group-hover:opacity-100 transition-all"></i>
              تحقیقات
            </div>
            <span class="bg-green-200 h-0.5 w-0 transition-all duration-300 mt-1"></span>
          </a>
          <a href="#" class="text-white hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex flex-col items-center nav-link-hover-effect">
            <div class="flex items-center">
              <i class="fas fa-info-circle ml-1 text-xs opacity-70 group-hover:opacity-100 transition-all"></i>
              درباره ما
            </div>
            <span class="bg-green-200 h-0.5 w-0 transition-all duration-300 mt-1"></span>
          </a>
          <a href="courses.html" class="bg-white text-green-700 px-4 py-2 rounded-lg text-sm font-semibold shadow hover:bg-green-100 transition duration-200">
  ثبت‌نام دوره‌ها
</a>

 

          
        </nav>

        <!-- بخش سمت چپ (جستجو و آیکون‌ها) -->
        <div class="flex items-center">
        </div>
         

          
            <!-- دکمه همبرگر برای موبایل -->
             <div class="ml-4">
              <button id="mobile-menu-button" class="md:hidden text-white hover:text-green-200 focus:outline-none">
              <i class="fas fa-bars text-lg"></i>
            </button>
             </div>
            
          </div>
        </div>
      </div>
    </div>
    <header>
      <!-- منوی سه‌خطی -->
      <div class="hamburger" onclick="openPanel()">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </header>
    
  </header>
