<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css"
    />
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500;700&family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />

    <!-- auto slide -->
    <!-- Auto Slide Carousel -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"
    />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('images/iconhead.png') }}" type="image/gif" sizes="5x5" />
  </head>
  <body>
    <!-- sidebar section start -->
    <aside
      id="sidebar"
      class="bg-[#FFFAF0] fixed z-10 left-[-300px] pb-3 px-6 h-screen flex flex-col justify-between border-r transition duration-300 lg:w-[25%] xl:w-[20%] 2xl:w-[15%] lg:left-0"
    >
      <div>
        <div class="-mx-6 px-6 py-4">
          <a href="#" title="home">
            <img
              src="{{ asset('images/logo-transparent-small.png') }}"
              class="w-40 h-14"
              alt="fit batik logo"
            />
          </a>
        </div>

        <ul class="space-y-2 font-sans tracking-wide mt-8">
          <h2 class="font-sans font-bold text-2xl px-4 pb-2">Explore</h2>
          <li>
            <a
              href="{{ url('/') }}"
              aria-label="dashboard"
              class="relative px-4 py-3 bg-kuning flex items-center space-x-4 rounded-xl text-black hover:text-white transition ease-in-out duration-500 hover:bg-gelap"
            >
              {{-- <img class="w-12 h-10" src="aset/logo-clothes.jpg" alt="" /> --}}
              <img class="w-12 h-10" src="{{ asset('images/category/logo-clothes.jpg') }}" alt="" />
              <span class="-mr-1 font-medium">Clothing</span>
            </a>
          </li>
          <li>
            <a
              href="{{ url('/') }}"
              aria-label="dashboard"
              class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-black hover:text-white transition ease-in-out duration-500 hover:bg-gelap"
            >
              <img
                class="w-11 h-10"
                {{-- src="aset/logo-short-removebg-preview.png" --}}
                src="{{ asset('images/category/logo-short-removebg-preview.png') }}"
                alt=""
              />
              <span class="-mr-1 font-medium">Pants</span>
            </a>
          </li>
          <li>
            <a
              href="{{ url('/') }}"
              aria-label="dashboard"
              class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-black hover:text-white transition ease-in-out duration-500 hover:bg-gelap"
            >
              <img
                class="w-11 h-14 pl-2"
                src="{{ asset('images/category/logo-bag-removebg-preview.png') }}"
                alt=""
              />
              <span class="-mr-1 font-medium">Bag</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
        @auth
          <a href="{{ route('logout') }}">
            <button
              class="px-4 py-3 flex items-center space-x-4 rounded-md group text-black transition ease-in-out duration-500 hover:bg-red-500"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                />
              </svg>
              <span class="group-hover:text-white">Logout</span>
            </button>
          </a>
        @endauth
      </div>
    </aside>
    <!-- Sidebar section end -->

    <!-- Content section start navbar -->
    <div class="ml-auto bg-primer shadow-md  lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
      <div class="z-10 top-0 h-16 border-b">
        <div class="px-6 flex items-center">
          <form class="w-[60%] lg:w-2/3 pt-3">
            <div class="flex">
              <label
                for="search"
                class="flex-shrink-0 inline-flex items-center py-2.5 px-2 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                > <img src="{{ asset('images/search.svg') }}" height="20px" width="20px" alt="icon_search"></label
              >
              <div class="relative w-full">
                <input
                  type="search"
                  id="search"
                  class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-kuning focus:border-kuning"
                  placeholder="Cari Barang"
                  required
                />
              </div>
            </div>
          </form>

          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6 ml-4 lg:ml-15 mt-2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
            />
          </svg>
          <p class="mt-2 mr-8">Cart  
            @auth
              : 2
            @endauth
          </p>
          @auth
            <img
              src="{{ auth()->user()->picture ?? asset('images/Avatar2.png') }}"
              alt="Avatar Profile"
              class="hidden md:flex w-8 h-8 mt-2 rounded-full object-cover"
            />
            <p class="hidden md:flex mt-2 ml-2">
              {{-- <span class="font-bold mr-px">Hello</span> --}}
              {{ auth()->user()->name }}
            </p>
          @else
            <a href="{{ route('login') }}">
              <button
                class="px-4 py-3 flex items-center space-x-4 rounded-md group text-black transition ease-in-out duration-500 hover:bg-green-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                  />
                </svg>
                <span class="group-hover:text-white">Login</span>
              </button>
            </a>
          @endauth
          

          <button
            id="hamburger"
            name="hamburger"
            type="button"
            class="absolute pt-3 right-7 py-2 lg:hidden"
          >
            <span
              class="hamburger-line transition duration-300 ease-in-out origin-top-left"
            ></span>
            <span
              class="hamburger-line transition duration-300 ease-in-out"
            ></span>
            <span
              class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"
            ></span>
          </button>
        </div>
        <div id="transfer" class="w-full mx-auto self-center lg:w-1/3"></div>
        <button
          id="exit"
          type="button"
          class="hover:text-red-400 mb-10 float-right"
        ></button>
      </div>
    </div>
    <!-- Content section end navbar-->

    <!-- Content section start carousel -->
    <div class="ml-auto  lg:w-[75%] xl:w-[80%] 2xl:w-[92%]">
      <section
          id="carouselExampleCrossfade"
          class="carousel slide carousel-fade ml-20 relative"
          data-bs-ride="carousel"
        >
          <div
            class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0  mb-4"
          >
            <button
              type="button"
              data-bs-target="#carouselExampleCrossfade"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCrossfade"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCrossfade"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCrossfade"
              data-bs-slide-to="3"
              aria-label="Slide 4"
            ></button>
          </div>
          <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active float-left w-full">
              <img
                {{-- src="aset/promo/biru.png" --}}
                src="{{ asset('images/promo/biru.png') }}"
                class="block w-full"
                alt="Foto Outdoor 1"
              />
            </div>
            <div class="carousel-item float-left w-full">
              <img
                {{-- src="aset/promo/yellow.png" --}}
                src="{{ asset('images/promo/yellow.png') }}"
                class="block w-full"
                alt="Foto Outdoor 2"
              />
            </div>
            <div class="carousel-item float-left w-full">
              <img
                {{-- src="aset/promo/pink.png" --}}
                src="{{ asset('images/promo/pink.png') }}"
                class="block w-full"
                alt="Foto Outdoor 3"
              />
            </div>
            <div class="carousel-item float-left w-full">
              <img
                {{-- src="aset/promo/Group 4.png" --}}
                src="{{ asset('images/promo/Group 4.png') }}"
                class="block w-full"
                alt="Foto Outdoor 3"
              />
            </div>
          </div>
          <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button"
            data-bs-target="#carouselExampleCrossfade"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon inline-block bg-no-repeat"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button"
            data-bs-target="#carouselExampleCrossfade"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon inline-block bg-no-repeat"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Next</span>
          </button>
        </section>

      <div class=" pt-2">
        
        <div class="px-5  mx-auto lg:px-32">
          
          <div class="flex flex-wrap ">
            <div class=" flex-wrap w-full  lg:w-1/2 ">
              <div class="w-full h-60 lg:h-40 p-1">
                <img
                  alt="gallery"
                  class="bg-cover bg-no-repeat w-full h-full rounded-lg"
                  src="{{ asset('images/promo/image 4.png') }}"
                />
              </div>
              <div class="w-full h-60 lg:h-40 p-1">
                <img
                  alt="gallery"
                  class=" object-cover object-center w-full h-full rounded-lg"
                  {{-- src="aset/promo/Group 4.png" --}}
                  src="{{ asset('images/promo/Group 4.png') }}"
                />
              </div>
            </div>
            <div class="flex flex-wrap w-full lg:w-1/2">
              <div class="w-full lg:w-1/2 p-1">
                <!-- button start -->
                <div class="w-full h-full">
                  <!-- graph -->
                  <div
                    class="shadow-lg hover:scale-105 hover:shadow-2xl  px-6  rounded-xl border border-gray-200 transition ease-in-out duration-200"
                  >
                    <!-- text header -->
                    <div class="py-4">
                      <a href="{{ route('product') }}">
                        <img
                          {{-- src="aset/model1f.png" --}}
                          src="{{ asset('images/model1f.png') }}"
                          class="w-56 h-64 lg:w-36 lg:h-40 mx-auto"
                          alt="gambar batik putih"
                        />
  
                        <h5
                          class="font-sans capitalize text-md text-gray-600 text-center mt-4"
                        >
                          batik pria katun full furing "janamejaya white"
                        </h5>
                        <div class="mt-2 flex justify-center gap-4">
                          <h3 class="text-[22px] font-bold text-gray-700">
                            Rp220.000
                          </h3>
                          <div class="flex items-end gap-1 text-red-500">
                            <span class="text-green-500 rounded-lg bg-gray-50 p-2 font-bold mb-1"
                              >Promo</span
                            >
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/2 p-1">
                <!-- button start -->
                <div class="w-full h-full">
                  <!-- graph -->
                  <div
                    class="shadow-lg hover:scale-105 hover:shadow-2xl  px-6  rounded-xl border border-gray-200 transition ease-in-out duration-200"
                  >
                    <!-- text header -->
                    <div class="py-4">
                      <img
                        {{-- src="aset/model2f.png" --}}
                        src="{{ asset('images/model2f.png') }}"
                        class="w-56 h-64 lg:w-36 lg:h-40 mx-auto"
                        alt="gambar batik putih"
                      />

                      <h5
                        class="font-sans capitalize text-md text-gray-600 text-center mt-4"
                      >
                        batik pria katun full furing "Sanjaya Red"
                      </h5>
                      <div class="mt-2 flex justify-center gap-4">
                        <h3 class="text-[22px] font-bold text-gray-700">
                          Rp250.000
                        </h3>
                        <div class="flex items-end gap-1 text-red-500">
                          <span class="text-green-500 rounded-lg bg-gray-50 p-2 font-bold mb-1"
                            >Promo</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <!-- Content section end  carousel-->
    <!-- Content section start -->
    <div class="ml-auto  lg:w-[75%] xl:w-[80%] 2xl:w-[92%]">
      <div class=" pt-2">
        <div class="px-5  mx-auto lg:px-32">
          <div class="flex flex-wrap ">
            <div class="flex flex-wrap w-full lg:w-1/2">
              <div class="w-full lg:w-1/2 p-1">
                <!-- button start -->
                <div class="w-full h-full">
                  <!-- graph -->
                  <div
                    class="shadow-lg hover:scale-105 hover:shadow-2xl  px-6  rounded-xl border border-gray-200 transition ease-in-out duration-200"
                  >
                    <!-- text header -->
                    <div >
                      <img
                        {{-- src="aset/batik (9).png" --}}
                        src="{{ asset('images/batik (9).png') }}"
                        class="w-56 h-64 lg:w-48 lg:h-48  mx-auto"
                        alt="gambar batik putih"
                      />

                      <h5
                        class="font-sans capitalize text-md text-gray-600 text-center mt-4"
                      >
                        batik pria semi sutra  "surasakti black"
                      </h5>
                      <div class="mt-2 flex justify-center gap-4">
                        <h3 class="text-[22px] font-bold text-gray-700">
                          Rp400.000
                        </h3>
                        <div class="flex items-end gap-1 text-red-500">
                          <span class="text-green-500 rounded-lg bg-gray-50 p-2 font-bold mb-1"
                            >Promo</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/2 p-1">
                <!-- button start -->
                <div class="w-full h-full">
                  <!-- graph -->
                  <div
                    class="shadow-lg hover:scale-105 hover:shadow-2xl  px-6  rounded-xl border border-gray-200 transition ease-in-out duration-200"
                  >
                    <!-- text header -->
                    <div >
                      <img
                        {{-- src="aset/batik (5).png" --}}
                        src="{{ asset('images/batik (5).png') }}"
                        class="w-56 h-64 lg:w-48 lg:h-48  mx-auto"
                        alt="gambar batik putih"
                      />

                      <h5
                        class="font-sans capitalize text-md text-gray-600 text-center mt-4"
                      >
                        batik pria katun Premium "jayawikata black"
                      </h5>
                      <div class="mt-2 flex justify-center gap-4">
                        <h3 class="text-[22px] font-bold text-gray-700">
                          Rp325.000
                        </h3>
                        <div class="flex items-end gap-1 text-red-500">
                          <span class="text-green-500 rounded-lg bg-gray-50 p-2 font-bold mb-1"
                            >Promo</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class=" flex-wrap w-full  lg:w-1/2 ">
              <div class="w-full h-60 lg:h-40 p-1">
                <img
                  alt="gallery"
                  class="block object-cover object-center w-full h-full rounded-lg"
                  {{-- src="aset/promo/yellow.png" --}}
                  src="{{ asset('images/promo/yellow.png') }}"
                />
              </div>
              <div class="w-full h-60 lg:h-40   p-1">
                <img
                  alt="gallery"
                  class="block object-cover object-center w-full h-full rounded-lg"
                  {{-- src="aset/promo/pink.png" --}}
                  src="{{ asset('images/promo/pink.png') }}"
                />
              </div>
            </div>
            
           
          </div>
        </div>
      </div>
    </div>
    <div class="ml-auto  lg:w-[75%] xl:w-[80%] 2xl:w-[92%]">
      <div class=" pt-2">
        <div class="px-5  mx-auto lg:px-32">
          <div class="flex flex-wrap ">
            <div class="flex flex-wrap w-full ">
              <div class="w-full lg:w-1/4 p-1">
                <!-- button start -->
                <div class="w-full h-full">
                  <!-- graph -->
                  <div
                    class="shadow-lg hover:scale-105 hover:shadow-2xl  px-6  rounded-xl border border-gray-200 transition ease-in-out duration-200"
                  >
                    <!-- text header -->
                    <div >
                      <img
                        {{-- src="aset/batik (7).png" --}}
                        src="{{ asset('images/batik (7).png') }}"
                        class="w-56 h-64 lg:w-48 lg:h-48  mx-auto"
                        alt="gambar batik putih"
                      />

                      <h5
                        class="font-sans capitalize text-md text-gray-600 text-center mt-4"
                      >
                        batik pria katun full furing "jalasndha black"
                      </h5>
                      <div class="mt-2 flex justify-center gap-4">
                        <h3 class="text-[22px] font-bold text-gray-700">
                          Rp450.000
                        </h3>
                        <div class="flex items-end gap-1 text-red-500">
                          <span class="text-green-500 rounded-lg bg-gray-50 p-2 font-bold mb-1"
                            >Promo</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/4 p-1">
                <!-- button start -->
                <div class="w-full h-full">
                  <!-- graph -->
                  <div
                    class="shadow-lg hover:scale-105 hover:shadow-2xl  px-6  rounded-xl border border-gray-200 transition ease-in-out duration-200"
                  >
                    <!-- text header -->
                    <div >
                      <img
                        {{-- src="aset/batik (1).png" --}}
                        src="{{ asset('images/batik (1).png') }}"
                        class="w-56 h-64 lg:w-48 lg:h-48  mx-auto"
                        alt="gambar batik putih"
                      />

                      <h5
                        class="font-sans capitalize text-md text-gray-600 text-center mt-4"
                      >
                        batik pria katun full furing "abaswa purple"
                      </h5>
                      <div class="mt-2 flex justify-center gap-4">
                        <h3 class="text-[22px] font-bold text-gray-700">
                          Rp400.000
                        </h3>
                        <div class="flex items-end gap-1 text-red-500">
                          <span class="text-green-500 rounded-lg bg-gray-50 p-2 font-bold mb-1"
                            >Promo</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/4 p-1">
                <!-- button start -->
                <div class="w-full h-full">
                  <!-- graph -->
                  <div
                    class="shadow-lg hover:scale-105 hover:shadow-2xl  px-6  rounded-xl border border-gray-200 transition ease-in-out duration-200"
                  >
                    <!-- text header -->
                    <div >
                      <img
                        {{-- src="aset/batik (8).png" --}}
                        src="{{ asset('images/batik (8).png') }}"
                        class="w-56 h-64 lg:w-48 lg:h-48  mx-auto"
                        alt="gambar batik putih"
                      />

                      <h5
                        class="font-sans capitalize text-md text-gray-600 text-center mt-4"
                      >
                        batik pria katun full furing "senani black"
                      </h5>
                      <div class="mt-2 flex justify-center gap-4">
                        <h3 class="text-[22px] font-bold text-gray-700">
                          Rp450.000
                        </h3>
                        <div class="flex items-end gap-1 text-red-500">
                          <span class="text-green-500 rounded-lg bg-gray-50 p-2 font-bold mb-1"
                            >Promo</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-1/4 p-1">
                <!-- button start -->
                <div class="w-full h-full">
                  <!-- graph -->
                  <div
                    class="shadow-lg hover:scale-105 hover:shadow-2xl  px-6  rounded-xl border border-gray-200 transition ease-in-out duration-200"
                  >
                    <!-- text header -->
                    <div >
                      <img
                        {{-- src="aset/batik (2).png" --}}
                        src="{{ asset('images/batik (2).png') }}"
                        class="w-56 h-64 lg:w-48 lg:h-48  mx-auto"
                        alt="gambar batik putih"
                      />

                      <h5
                        class="font-sans capitalize text-md text-gray-600 text-center mt-4"
                      >
                        batik pria katun full furing "durdharsa navy"
                      </h5>
                      <div class="mt-2 flex justify-center gap-4">
                        <h3 class="text-[22px] font-bold text-gray-700">
                          Rp450.000
                        </h3>
                        <div class="flex items-end gap-1 text-red-500">
                          <span class="text-green-500 rounded-lg bg-gray-50 p-2 font-bold mb-1"
                            >Promo</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
           
          </div>
        </div>
      </div>
    </div>
    <!-- Content section end -->
  </body>

  <!-- Script section -->
  <script src="{{ asset('js/script.js') }}"></script>
  
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</html>
