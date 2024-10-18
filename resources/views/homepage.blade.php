<html lang="en"><head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="T4TnoUuBejnQQ4hXET7lRP8VUJKaC5989ZSVJfVX">
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cafetaria.samz.my.id/css/components.css">
  <script src="https://cafetaria.samz.my.id/js/components.js"></script>
  <link rel="modulepreload" href="https://cafetaria.samz.my.id/js/iframe-alpine-964dceff.js">
  <link rel="modulepreload" href="https://cafetaria.samz.my.id/js/iframe-a81dc9a8.js">
  <script type="module" src="https://cafetaria.samz.my.id/js/iframe-alpine-964dceff.js"></script>
  <!-- Livewire Styles --><style>[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.default], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none;}</style>
<style>/* Make clicks pass-through */

    #nprogress {
      pointer-events: none;
    }

    #nprogress .bar {
      background: var(--livewire-progress-bar-color, #29d);

      position: fixed;
      z-index: 1031;
      top: 0;
      left: 0;

      width: 100%;
      height: 2px;
    }

    /* Fancy blur effect */
    #nprogress .peg {
      display: block;
      position: absolute;
      right: 0px;
      width: 100px;
      height: 100%;
      box-shadow: 0 0 10px #29d, 0 0 5px #29d;
      opacity: 1.0;

      -webkit-transform: rotate(3deg) translate(0px, -4px);
          -ms-transform: rotate(3deg) translate(0px, -4px);
              transform: rotate(3deg) translate(0px, -4px);
    }

    /* Remove these to get rid of the spinner */
    #nprogress .spinner {
      display: block;
      position: fixed;
      z-index: 1031;
      top: 15px;
      right: 15px;
    }

    #nprogress .spinner-icon {
      width: 18px;
      height: 18px;
      box-sizing: border-box;

      border: solid 2px transparent;
      border-top-color: var(--livewire-progress-bar-color, #29d);
      border-left-color: var(--livewire-progress-bar-color, #29d);
      border-radius: 50%;

      -webkit-animation: nprogress-spinner 400ms linear infinite;
              animation: nprogress-spinner 400ms linear infinite;
    }

    .nprogress-custom-parent {
      overflow: hidden;
      position: relative;
    }

    .nprogress-custom-parent #nprogress .spinner,
    .nprogress-custom-parent #nprogress .bar {
      position: absolute;
    }

    @-webkit-keyframes nprogress-spinner {
      0%   { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }
    @keyframes nprogress-spinner {
      0%   { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    </style></head>

<body class="bg-gray-100">
  
    <div class="bg-gray-100">

    <nav x-data="{ open: false }" class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <svg x-description="Icon when menu is closed." x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 block" :class="{ 'hidden': open, 'block': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
                </path>
              </svg>
              <svg x-description="Icon when menu is open." x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 hidden" :class="{ 'block': open, 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-0 items-center">
              <img class="h-8 w-auto" src="{{url('frontend/images/pngtree-food.png')}}";shade=600" alt="Your Company">
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
              <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
              <a href="#" class="inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900">Dashboard</a>
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button type="button" class="relative rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" fdprocessedid="zlq244">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                </path>
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative ml-3">
              <div>
                <button type="button" class="relative flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="user-menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" fdprocessedid="0gxfm">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                </button>
              </div>

              <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()" style="display: none;">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 0)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1" id="user-menu-item-1" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 1)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Settings</a>
                <a href="https://cafetaria.samz.my.id/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700" :class="{ 'bg-gray-100': activeIndex === 2 }" role="menuitem" tabindex="-1" id="user-menu-item-2" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 2)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Sign out</a>
                <form id="logout-form" action="https://cafetaria.samz.my.id/logout" method="POST" class="d-none">
                  <input type="hidden" name="_token" value="T4TnoUuBejnQQ4hXET7lRP8VUJKaC5989ZSVJfVX" autocomplete="off">                </form>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div x-description="Mobile menu, show/hide based on menu state." class="sm:hidden" id="mobile-menu" x-show="open" style="display: none;">
        <div class="space-y-1 pb-4 pt-2">
          <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
          <a href="#" class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700">Dashboard</a>
        </div>
      </div>
    </nav>
  </div>
      <main class="mx-auto w-full max-w-7xl py-10">
    <div wire:snapshot="{&quot;data&quot;:{&quot;foods&quot;:[null,{&quot;keys&quot;:[2,5],&quot;class&quot;:&quot;Illuminate\\Database\\Eloquent\\Collection&quot;,&quot;modelClass&quot;:&quot;App\\Models\\Food&quot;,&quot;s&quot;:&quot;elcln&quot;}],&quot;reviews&quot;:[{&quot;2&quot;:[null,{&quot;class&quot;:&quot;App\\Models\\Review&quot;,&quot;key&quot;:8,&quot;s&quot;:&quot;mdl&quot;}],&quot;5&quot;:[null,{&quot;class&quot;:&quot;App\\Models\\Review&quot;,&quot;key&quot;:7,&quot;s&quot;:&quot;mdl&quot;}]},{&quot;s&quot;:&quot;arr&quot;}],&quot;foodTitle&quot;:null,&quot;foodImage&quot;:null,&quot;openCreate&quot;:false},&quot;memo&quot;:{&quot;id&quot;:&quot;53lbS43DzT1upEYs1nPV&quot;,&quot;name&quot;:&quot;homepage&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;f2fda5394e4a66d8faaeb5061bca174838b6fc6b29a8a0095652afee517def6f&quot;}" wire:effects="[]" wire:id="53lbS43DzT1upEYs1nPV" x-data="{ openCreate: window.Livewire.find('53lbS43DzT1upEYs1nPV').entangle('openCreate') }" class="bg-white mx-auto max-w-7xl overflow-hidden ">
  <div @keydown.window.escape="openCreate = false" x-show="openCreate" class="relative z-10" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true" style="display: none;">
    <div x-show="openCreate" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" style="display: none;"></div>
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
      <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <div x-show="openCreate" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="relative transform rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6" @click.away="openCreate = false" style="display: none;">
          <div class="absolute right-0 top-0 hidden pr-4 pt-4 sm:block">
            <button type="button" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" @click="openCreate = false" wire:loading.attr="disabled">
              <span class="sr-only">Close</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
          <div class="text-center sm:text-left">
            <div class="mx-auto max-w-7xl">
              <div class="mx-auto max-w-2xl">
                <form enctype="multipart/form-data" wire:submit.prevent="createFood">
                  <div class="space-y-12">
                    <div class="pb-12">
                      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                          <label for="foodImage" class="block text-sm font-medium leading-6 text-gray-900">
                            Photo Product
                          </label>
                          <label for="foodImage" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <input required="" accept="image/*" wire:model="foodImage" id="foodImage" name="foodImage" type="file" wire:click="deleteImage">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                          </label>
                        </div>
                        <div class="col-span-full">
                          <label for="foodTitle" class="block text-sm font-medium leading-6 text-gray-900">
                            Food Title
                          </label>
                          <div class="mt-2">
                            <input required="" type="text" wire:model="foodTitle" name="foodTitle" id="foodTitle" autocomplete="foodTitle" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                    <button type="submit" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:ml-3 sm:w-auto">Create</button>
                    <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" @click="openCreate = false">Cancel</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
  <h2 class="sr-only">Products</h2>
  <div class="-mx-px grid grid-cols-2 border-l border-t border-gray-200 sm:mx-0 md:grid-cols-3 lg:grid-cols-3">
    <!--[if BLOCK]><![endif]-->    <div class="group relative border-b border-r border-gray-200 p-4 sm:p-6">
      <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-200 group-hover:opacity-75">
        <img src="https://cafetaria.samz.my.id/storage/imgFood/ayam_geprek.webp" alt="TODO" class="h-full w-full object-cover object-center">
      </div>
      <div class="pb-4 pt-10 text-center">
        <p class="mt-4 text-base font-medium text-gray-900">
          <a href="ayam_geprek">
            Ayam Geprek
          </a>
        </p>
        <div class="mt-3 flex flex-col items-center">
          <p class="mt-1 text-sm text-gray-500">Vote Rasa Makanan</p>
          <div class="flex items-center">
            <!--[if BLOCK]><![endif]--> <svg wire:click="reviewTaste({&quot;id&quot;:2,&quot;name&quot;:&quot;Ayam Geprek&quot;,&quot;name_slug&quot;:&quot;ayam_geprek&quot;,&quot;image&quot;:&quot;ayam_geprek.webp&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 1)" class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <svg wire:click="reviewTaste({&quot;id&quot;:2,&quot;name&quot;:&quot;Ayam Geprek&quot;,&quot;name_slug&quot;:&quot;ayam_geprek&quot;,&quot;image&quot;:&quot;ayam_geprek.webp&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 2)" class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <svg wire:click="reviewTaste({&quot;id&quot;:2,&quot;name&quot;:&quot;Ayam Geprek&quot;,&quot;name_slug&quot;:&quot;ayam_geprek&quot;,&quot;image&quot;:&quot;ayam_geprek.webp&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 3)" class="text-gray-300 hover:text-gray-300 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <!--[if ENDBLOCK]><![endif]-->
          </div>
        </div>

        <div class="mt-3 flex flex-col items-center">
          <p class="mt-1 text-sm text-gray-500">Vote Porsi Makanan</p>
          <div class="flex items-center">
            <!--[if BLOCK]><![endif]--> <svg wire:click="reviewPortion({&quot;id&quot;:2,&quot;name&quot;:&quot;Ayam Geprek&quot;,&quot;name_slug&quot;:&quot;ayam_geprek&quot;,&quot;image&quot;:&quot;ayam_geprek.webp&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 1)" class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <svg wire:click="reviewPortion({&quot;id&quot;:2,&quot;name&quot;:&quot;Ayam Geprek&quot;,&quot;name_slug&quot;:&quot;ayam_geprek&quot;,&quot;image&quot;:&quot;ayam_geprek.webp&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 2)" class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <svg wire:click="reviewPortion({&quot;id&quot;:2,&quot;name&quot;:&quot;Ayam Geprek&quot;,&quot;name_slug&quot;:&quot;ayam_geprek&quot;,&quot;image&quot;:&quot;ayam_geprek.webp&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 3)" class="text-gray-300 hover:text-gray-300 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <!--[if ENDBLOCK]><![endif]-->
          </div>
        </div>
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
      </div>
    </div>
        <div class="group relative border-b border-r border-gray-200 p-4 sm:p-6">
      <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-200 group-hover:opacity-75">
        <img src="https://cafetaria.samz.my.id/storage/imgFood/sup_ayam.jpg" alt="TODO" class="h-full w-full object-cover object-center">
      </div>
      <div class="pb-4 pt-10 text-center">
        <p class="mt-4 text-base font-medium text-gray-900">
          <a href="sup_ayam">
            Sup Ayam
          </a>
        </p>
        <div class="mt-3 flex flex-col items-center">
          <p class="mt-1 text-sm text-gray-500">Vote Rasa Makanan</p>
          <div class="flex items-center">
            <!--[if BLOCK]><![endif]--> <svg wire:click="reviewTaste({&quot;id&quot;:5,&quot;name&quot;:&quot;Sup Ayam&quot;,&quot;name_slug&quot;:&quot;sup_ayam&quot;,&quot;image&quot;:&quot;sup_ayam.jpg&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 1)" class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <svg wire:click="reviewTaste({&quot;id&quot;:5,&quot;name&quot;:&quot;Sup Ayam&quot;,&quot;name_slug&quot;:&quot;sup_ayam&quot;,&quot;image&quot;:&quot;sup_ayam.jpg&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 2)" class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <svg wire:click="reviewTaste({&quot;id&quot;:5,&quot;name&quot;:&quot;Sup Ayam&quot;,&quot;name_slug&quot;:&quot;sup_ayam&quot;,&quot;image&quot;:&quot;sup_ayam.jpg&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 3)" class="text-gray-300 hover:text-gray-300 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <!--[if ENDBLOCK]><![endif]-->
          </div>
        </div>

        <div class="mt-3 flex flex-col items-center">
          <p class="mt-1 text-sm text-gray-500">Vote Porsi Makanan</p>
          <div class="flex items-center">
            <!--[if BLOCK]><![endif]--> <svg wire:click="reviewPortion({&quot;id&quot;:5,&quot;name&quot;:&quot;Sup Ayam&quot;,&quot;name_slug&quot;:&quot;sup_ayam&quot;,&quot;image&quot;:&quot;sup_ayam.jpg&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 1)" class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <svg wire:click="reviewPortion({&quot;id&quot;:5,&quot;name&quot;:&quot;Sup Ayam&quot;,&quot;name_slug&quot;:&quot;sup_ayam&quot;,&quot;image&quot;:&quot;sup_ayam.jpg&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 2)" class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <svg wire:click="reviewPortion({&quot;id&quot;:5,&quot;name&quot;:&quot;Sup Ayam&quot;,&quot;name_slug&quot;:&quot;sup_ayam&quot;,&quot;image&quot;:&quot;sup_ayam.jpg&quot;,&quot;created_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-03-05T08:50:37.000000Z&quot;}, 3)" class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
              </svg>
               <!--[if ENDBLOCK]><![endif]-->
          </div>
        </div>
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
      </div>
    </div>
     <!--[if ENDBLOCK]><![endif]-->
  </div>
</div>
  </main>
    <!-- Livewire Scripts -->
<script src="/livewire/livewire.js?id=c4077c56" data-csrf="T4TnoUuBejnQQ4hXET7lRP8VUJKaC5989ZSVJfVX" data-uri="/livewire/update" data-navigate-once="true"></script>


<span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span></body></html>