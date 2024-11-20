<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <!-- Header -->
  <header class="bg-white shadow">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
      <h1 class="text-3xl font-bold">Arsy</h1>
      <nav>
        <a href="#about" class="text-gray-700 hover:text-blue-500 mx-2">Tentang</a>
        <a href="#projects" class="text-gray-700 hover:text-blue-500 mx-2">Proyek</a>
        <a href="#contact" class="text-gray-700 hover:text-blue-500 mx-2">Kontak</a>
        <a href="#" class="bg-blue-900 text-white px-4 py-2 rounded-full text-lg font-semibold ml-4">Login</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-blue-900 text-white py-20">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold mb-4">Halo 👋, Saya Rasya Saehan</h2>
      <p class="text-xl mb-6">Seorang Pelajar yang bersemangat tentang Dunia Coding.</p>
      <a href="#about" class="bg-white text-blue-500 px-4 py-2 rounded-full text-lg font-semibold">Pelajari Lebih Lanjut</a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-8">Tentang Saya</h2>
      <div class="flex flex-wrap -mx-6">
        <div class="w-full md:w-1/2 px-6">
          <img src="profile.jpg" alt="Foto Profil" class="rounded-full shadow-md">
        </div>
        <div class="w-full md:w-1/2 px-6">
          <p class="text-lg">Saya memiliki pengalaman dalam Coding<p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="bg-gray-200 py-20">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-8">Project Saya</h2>
      <div class="flex flex-wrap -mx-6">
        <div class="w-full md:w-1/3 px-6 mb-8">
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="project1.jpg" alt="Proyek 1" class="w-full">
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Project 1</h3>
              <p class="text-gray-700">Deskripsi singkat tentang project ini.</p>
            </div>
          </div>
        </div>
        <!-- Tambahkan lebih banyak proyek di sini -->
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-8">Kontak Saya</h2>
      <form action="#" method="POST" class="max-w-lg mx-auto">
        <div class="mb-6">
          <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
          <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-lg shadow-sm border-gray-300 focus:ring focus:ring-blue-500">
        </div>
        <div class="mb-6">
          <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-lg shadow-sm border-gray-300 focus:ring focus:ring-blue-500">
        </div>
        <div class="mb-6">
          <label for="message" class="block text-gray-700 font-bold mb-2">Pesan</label>
          <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 rounded-lg shadow-sm border-gray-300 focus:ring focus:ring-blue-500"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-full text-lg font-semibold">Kirim Pesan</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto px-6 text-center">
      <p>&copy; 2024 Arsy. Semua Hak Dilindungi.</p>
    </div>
  </footer>
</body>
</html>