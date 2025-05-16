<?php include 'header.php'; ?>

<main class="max-w-4xl mx-auto p-8">
  <h1 class="text-3xl font-bold text-green-700 mb-6">ثبت‌نام در دوره‌ها</h1>

  <p class="mb-4">لطفاً اطلاعات خود را برای ثبت‌نام وارد کنید:</p>

  <form action="#" method="POST" class="space-y-4">
    <input type="text" name="name" placeholder="نام کامل" class="w-full px-4 py-2 border border-green-300 rounded-md" />
    <input type="email" name="email" placeholder="ایمیل" class="w-full px-4 py-2 border border-green-300 rounded-md" />
    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition">
      ثبت‌نام
    </button>
  </form>
</main>

<?php include 'footer.php'; ?>
