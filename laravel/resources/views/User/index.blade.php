@extends('layouts.master') 
@section('content')
<!-- Corousel -->
 <div class="container-full">
    <div
        id="carouselExampleCaptions"
        class="relative"
        data-te-carousel-init="data-te-carousel-init"
        data-te-carousel-slide="data-te-carousel-slide">
        <div
            class="absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
            data-te-carousel-indicators="data-te-carousel-indicators">
            <button
                type="button"
                data-te-target="#carouselExampleCaptions"
                data-te-slide-to="0"
                data-te-carousel-active="data-te-carousel-active"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-current="true"
                aria-label="Slide 1"></button>
            <button
                type="button"
                data-te-target="#carouselExampleCaptions"
                data-te-slide-to="1"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
            <button
                type="button"
                data-te-target="#carouselExampleCaptions"
                data-te-slide-to="2"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 3"></button>
        </div>
        <div
            class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <div
                class="relative float-left -mr-[100%] w-full transition-transform duration-[300ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-active="data-te-carousel-active"
                data-te-carousel-item="data-te-carousel-item"
                style="backface-visibility: hidden">
                <img src="{{ asset('image/xixii.png')}}" class="block h-full" alt="Foto P4S Hanggawana"/>
            </div>
            <div
                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[300ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item="data-te-carousel-item"
                style="backface-visibility: hidden">
                <img src="{{ asset('image/qx1.png')}}" class="block w-full" alt="Foto P4S Hanggawana"/>
            </div>
            <div
                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[300ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item="data-te-carousel-item"
                style="backface-visibility: hidden">
                <img src="{{ asset('image/xixi1.png')}}" class="block w-full" alt="Foto P4S Hanggawana"/>
            </div>
        </div>
        <button class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewbox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 19.5L8.25 12l7.5-7.5"/>
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span >
        </button>
        <button
            class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleCaptions"
            data-te-slide="next">
            <span class="inline-block h-8 w-8">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewbox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span >
        </button>
    </div>
 </div>
<!--Akhir Corousel-->
<!--Perkenalan-->
    <section>
    <div class="grid gap-6 md:grid-cols-2 mt-6 mb-3">
        <div class="mx-auto justify-center md:pt-20">
        <a class="block text-five text-3xl text-center md:text-center font-bold font-navbar">Apa Itu <span class="text-seven">Si Hanggawana?</span></a>
        <p class="block text-five pt-6 text-center md:text-justify font-normal font-navbar">Di Si Hanggawana, kami menerapkan konsep pertanian terpadu <br> dengan menggabungkan teknologi pertanian  modern dengan <br> praktik pertanian tradisional, termasuk pengelolaan lahan,<br> pemupukan organik, dan penggunaan tanaman penutup <br> untuk meningkatkan kesuburan tanah</p>
    </div>
    <div
    class="mx-auto embed-responsive embed-responsive-16by9 relative w-full overflow-hidden"
    style="padding-top: 56.25%">
    <iframe
      class="embed-responsive-item absolute pr-5 pl-5 md:pr-5 md:pl-5 top-0 right-0 bottom-0 left-0 h-full w-full"
      src="https://www.youtube.com/embed/C5_VOWuE-Ao"
      allowfullscreen></iframe>
  </div>
    </div>
  </section>
<!--Akhir Perkenalan-->
<section>
  <nav class="bg-e px-2 sm:px-4 py-3"></nav>
</section>
<!--Visi Misi-->
    <section>
        <div class="container-full bg-white justify-between ">
            <ul class="flex flex-wrap justify-center p-4 md:flex-wrap-reverse ">
                <li class="mx-auto">
                <img class="items-center w-60 md:w-72 md:h-auto  md:items-center mt-2 md:mt-7 mb-2 md:mb-7" src="{{ asset('image/Logoo.png')}}" alt="Logo P4S">
                </li>
                <li class="mt-1 md:mt-7 mx-auto">
                <a class="block text-five text-3xl text-center font-bold font-navbar pb-2 "> <span class="text-seven">VISI MISI</span> P4S Satria Tani Hanggawana</a><hr>
                <p class="block text-five text-3xl text-center font-semibold font-navbar pt-5"> VISI </p>
                <p class="block text-center text-base font-normmal text-gray-900 font-navbar pt-5">Mencetak sumber daya manusia di bidang pertanian yang ulet,<br> tangguh dan mandiri dalam rangka mewujudkan kedaulatan pangan</p>
                <p class="block text-five text-3xl text-center font-semibold font-navbar pt-5"> MISI </p>
                <p class="block text-center text-base font-normal text-gray-900 font-navbar pt-5">1. Menumbuhkembangkan Minat dan Merestorasi Pola Pikir Pemuda<br> dalam Bidang Pertanian.</p> 
                <p class="block text-center text-base font-normal text-gray-900 font-navbar">2. Memfasilitasi Pembelajaran Pertanian Secar kompleks dan berkelanjutan.</p> 
                <p class="block text-center text-base font-normal text-gray-900 font-navbar">3. Menciptakan ekosistem Kewirausahaan pertanian.</p>
                </li>
        </div>
    </section>
<!--Akhir Visi Misi-->
<section>
<nav class="bg-e px-2 sm:px-4 py-3"></nav>
</section>
<!--Kategori-->
    <section>
    <p class="text-five text-3xl text-center font-bold font-navbar pt-5">Kategori Produk</p>
    <p class="text-five text-center font-normal font-navbar pt-3">Si Hanggawana menyediakan berbagai pilihan produk, jasa ataupun pelatihan<br> seperti dibawah ini</p>
    <div class="grid grid-cols-3 gap-3 mt-5">
        <div class="w-full p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('image/Kategori1.png')}}" />
        </div>
        <div class="w-full p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('image/Kategori2.png')}}" />
        </div>
        <div class="w-full p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('image/Kategori3.png')}}" />
        </div>
        <div class="w-full p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('image/Kategori4.png')}}" />
        </div>
        <div class="w-full p-1 md:p-2">
          <img
            alt="gallery"
            class="block pt-2 md:pt-24 w-full rounded-lg object-cover object-center"
            src="{{ asset('image/Kategori5.png')}}" />
        </div>
        <div class="w-full p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('image/Kategori6.png')}}" />
        </div>
    </div>
    <div class="flex flex-wrap justify-center pb-8">
    <div class="block max-w-4xl md:max-w-6xl rounded-lg shadow-lg">
    <img src="{{ asset('image/Kategori7.png')}}" class="w-full" alt="">
    </div>
    </div>
    </section>
<!-- Akhir Kategori-->
<section>
<nav class="bg-e px-2 sm:px-4 py-3"></nav>
</section>
<!--Slider-->
    <section class="bg-white pb-10 container-full">
    <div class="container mx-auto">
        <p class="text-xl md:text-3xl mb-2 text-five text-center font-bold font-navbar mt-7 md:mt-10">Bagian Kami</p>
        <p class="text-base md:text-lg mb-5 text-five text-center font-normal font-navbar">Kami memiliki beberapa bagian didalam P4S Satria Tani Hanggawana seperti dibawah ini</p>
    <section class="slider md:flex">
      <div class=" md:px-16 "><img src="{{ asset('image/slider.png')}}"  class=" items-start h-40 md:h-32 mx-auto">
      </div>
      <div class="md:px-16 "><img src="{{ asset('image/slider1.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class=" md:px-16"><img src="{{ asset('image/slider2.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class="md:px-16"><img src="{{ asset('image/slider3.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class="md:px-16 "><img src="{{ asset('image/slider4.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class=" md:px-16"><img src="{{ asset('image/slider5.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class=" md:px-16"><img src="{{ asset('image/slider6.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class=" md:px-16"><img src="{{ asset('image/slider7.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class=" md:px-16"><img src="{{ asset('image/slider8.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class=" md:px-16"><img src="{{ asset('image/slider9.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class=" md:px-16"><img src="{{ asset('image/slider10.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class="md:px-16 "><img src="{{ asset('image/slider11.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
      <div class=" md:px-16"><img src="{{ asset('image/slider12.png')}}"  class="items-start h-40 md:h-32 mx-auto">
      </div>
    </section> 
    </div>
    
    <div class="container mx-auto "> 
            <p class="text-xl md:text-3xl mb-2 text-five text-center font-bold font-navbar mt-7 md:mt-10">Mitra Kami</p>
            <p class="text-base md:text-lg mb-5 text-five text-center font-normal font-navbar">Kami melakukan kerjasama dengan beberapa mitra seperti dibawah ini</p>
            <section class="sliderr md:flex">
        <div class="item px-2 md:px-8"><a ><img src="{{ asset('image/1slider.png')}}"  class="h-40 md:h-32 mx-auto">
        </a></div>
        <div class="item px-2 md:px-8"><a ><img src="{{ asset('image/2slider.png')}}"  class="h-40 md:h-32 mx-auto">
        </a></div>
        <div class="item px-2 md:px-8"><a ><img src="{{ asset('image/3slider.png')}}"  class="h-40 md:h-32 mx-auto">
        </a></div>
        <div class="item px-2 md:px-8"><a ><img src="{{ asset('image/4slider.png')}}"  class="h-40 md:h-32 mx-auto">
        </a></div>
        <div class="item px-2 md:px-8"><a ><img src="{{ asset('image/5slider.png')}}"  class="h-40 md:h-32 mx-auto">
        </a></div>
        <div class="item px-2 md:px-8"><a ><img src="{{ asset('image/6slider.png')}}"  class="h-40 md:h-32 mx-auto">
        </a></div>
        </div>
    </section>

<!--Akhir Slider-->
@endsection