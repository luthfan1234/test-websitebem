<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Deputi Kabinet</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
<div class="h-[110vh] flex flex-col justify-between">
    <!-- NAVBAR -->
    <nav class="boody-font mx-10 lg:w flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center mb-4 md:mb-0" href="#home">
        <img src="./Asset/ABHITARACROP (2).png" class="h-20" alt="Favicon" />
      </a>
      <div class="md:ml-auto md:mr-16 flex flex-wrap items-center text-base justify-center px-5 rounded-full">
        <a href="#home" class="px-3 md:px-7 md:text-xl h-full py-3">Home</a>
        <a href="#info" class="px-3 md:px-7 md:text-xl h-full py-3">Informasi</a>
        <a href="#visi_misi" class="px-3 md:px-7 md:text-xl h-full py-3">Visi dan Misi</a>
        <a href="#contact" class="px-3 md:px-7 md:text-xl h-full py-3">Kontak</a>
      </div>
    </nav>

    <!-- SECTION 1 -->
  <div id="info" class="min-h-screen pt-[8rem] relative flex flex-col items-center mx-20">
    <div class="relative gap-10 flex w-full justify-center items-center mt-10">
      <div class="h-[0.01rem] bg-black opacity-[0.1] w-full"></div>
      <div class="relative">
        <h1 id="about" class="text-7xl font-black absolute scale-y-[1.5] blur-[2rem]"></h1>
        <h1 class="text-6xl font-black whitespace-nowrap">
          <span class="text-6xl font-black leading-[3rem]">Deputi Kabinet</span>
        </h1>
      </div>
      <div class="h-[0.01rem] bg-black opacity-[0.1] w-full whitespace-nowrap"></div>
    </div>
    <div class="mt-20 flex items-center justify-center gap-[4rem] w-full">
      <div class="h-[30rem] w-[20rem] relative">
        <div class="w-full h-full bg-[#FFFFFF] rounded-[3rem] p-[0.1rem] drop-shadow-xl z-[0] absolute blur-[5rem]"></div>
        <div class="w-full h-full bg-[#FFFFFF] rounded-[3rem] p-[0.1rem] drop-shadow-xl z-[2]">
          <img src="./Asset/deputi-kabinet.png" class="w-full h-full object-cover rounded-[3rem] opacity-[0.9] transform scale-90"
            alt="" />
        </div>
      </div>
      <div class="w-[50rem] flex flex-col items-end text-right">
        <p class="text-2xl text-right z-[2]">
          BEM SV UNS adalah salah satu ormawa yang ada di Fakultas Sekolah Vokasi Universitas Sebelas Maret. Abhisatya Bimantara adalah kabinet dari BEM SV UNS saat ini, di pimpin oleh Presiden BEM Ahmad Parhan dan Wakil Presiden Diajeng Hanifah.
        </p>
      </div>
    </div>
  </div>



  </div>
</body>
</html>