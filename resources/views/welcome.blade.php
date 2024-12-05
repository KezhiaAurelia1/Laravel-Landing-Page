<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perkenalan Diri</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <header class="bg-blue-600 text-white py-5">
    <div class="container mx-auto text-center">
      <h1 class="text-3xl font-bold">Halo, Saya Kezhia Aurelia Dwi Faradhiba</h1>
      <p class="text-lg">Selamat datang di halaman perkenalan saya!</p>
    </div>
  </header>

  <main class="container mx-auto mt-10 px-5">
    <section class="text-center">
      <img
        src="{{ asset(path: 'images/profile.jpeg') }}"
        alt="Foto Profil"
        class="w-40 h-40 mx-auto rounded-full shadow-lg"
      >
      <h2 class="text-2xl font-semibold mt-5">Kezhia Aurelia Dwi Faradhiba</h2>
      <p class="mt-2 text-gray-600">Seorang pelajar.</p>
    </section>

    <section class="mt-10">
      <h3 class="text-xl font-semibold text-center mb-5">Tentang Saya</h3>
      <p class="text-gray-700 text-center leading-relaxed">
        Saya memiliki pengalaman dalam , dan saya sangat antusias untuk terus belajar dan berkembang.
        Dalam waktu luang, saya menikmati kebersamaan bersama keluarga.
      </p>
    </section>

    <section class="mt-10 text-center">
      <h3 class="text-xl font-semibold mb-5">Hubungi Saya</h3>
      <p class="text-gray-700">Jangan ragu untuk menghubungi saya melalui:</p>
      <ul class="mt-3 space-y-2">
        <li>Email: <a href="kezhiaurelia@gmail.com" class="text-blue-600">kezhiaurelia@gmail.com</a></li>
        <li>LinkedIn: <a href="https://linkedin.com/in/KezhiaAurelia" class="text-blue-600">https://linkedin.com/in/KezhiaAurelia</a></li>
        <li>GitHub: <a href="https://github.com/KezhiaAurelia" class="text-blue-600">https://github.com/KezhiaAurelia</a></li>
      </ul>
    </section>
  </main>

  <footer class="bg-gray-800 text-white py-5 mt-10">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Kezhia Aurelia Dwi Faradhiba. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
