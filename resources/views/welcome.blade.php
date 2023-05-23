<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tranzo Delivery App</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    {{-- <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style> --}}
</head>

<body class="bg-black font-serif">
    <div
        class="h-20 font-serif sm:flex sm:justify-center sm:items-center text-2xl rounded-b-lg  bg-center bg-white dark:bg-gray-900 selection:bg-red-500 selection:text-white sticky top-0 z-50">
        {{-- @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-gray-700">Home</a>
                @else
                 <a href="#"
                    {{-- <a href="{{ route('login') }}" --}}
        {{-- class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm  p-4 focus:outline-grey-700">Log --}}
        {{-- in</a> --}}
        {{-- @if (Route::has('register')) --}}
        {{-- <a href="{{ route('register') }}" --}}
        {{-- <a href="#"
                            class="ml-4 mr-8 p-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-700">Register</a> --}}
        {{-- @endif
                @endauth
            </div>
        @endif --}}
        {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> --}}
        {{-- <a href="/home" --}}
        {{-- </div> --}}
        <a href="/"class=" p-6 ">Home</a>
        <a href="#order"class=" p-6 ">Order Now</a>
        <a href="#"class=" p-6 ">Delivery Partner</a>
    </div>
    <div class="bg-black w-full font-serif flex text-white  flex-reverse sm:flex-row p-12">
        <div class="p-6 mt-6 w-8/12 text-6xl leading-loose">
            <p> Make Easy & quick delivery of parcel with Minimum Time and Maximum Security.In this app You can track
                your order mannually also you get notification message about your order automatically.</p>
            <a href="#qr_code" class="rounded-lg text-3xl p-8 bg-blue-500">Download App</a>
        </div>
        <div class="text-7xl w-3/12">
            <img src="/Images/home_page.png" class="w-70 h-fit rounded-lg m-16 ">
        </div>
    </div>
    <div class="bg-black w-full font-serif flex text-white flex-row p-12">
        <div id="qr_code" class="ml-8 mt-4 w-4/12"><img src="/Images/tranzo_qrCode.png" class="p-16 m-8"></div>
        <div class="p-6 mt-6 w-8/12 text-6xl leading-loose">
            <p> Scan this QR Code to install Tranzo Delivery Service
                App from play store</p>
            <p class="text-4xl leading-loose"> Download app get quick delivery with advanced order tracking facility,
                low memory storage
        </div>
    </div>
    {{-- <div class="bg-white w-full flex flex-row p-4 text-black">

        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-36">
            <img class="object-cover  w-full h-full transform duration-700 backdrop-opacity-100"
                src="/Images/documents_folder.jpeg" />
            <div
                class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0">
            </div>
            <div
                class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                <div class="absolute w-full flex place-content-center">
                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-black mt-10">
                        Documents</p>
                </div>
                <div class="absolute w-full font-bold flex place-content-center mt-20">
                    <p class="font-sans text-center w-4/5 text-black mt-10">Instant Pickup and delivery with high
                        securtiy upto 15Kg.</p>
                </div>
                <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Book
                    Tranzo</button>
            </div>
        </div>
        <div class="relative group w-96 h-96 overflow-hidden bg-black rounded-lg m-auto mt-36">
            <img class="object-cover  w-full h-full transform duration-700 backdrop-opacity-100"
                src="/Images/documents_folder.jpeg" height="20%" width="0%" />
            <div
                class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0">
            </div>
            <div
                class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                <div class="absolute w-full flex place-content-center">
                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-black mt-10">
                        Food</p>
                </div>
                <div class="absolute w-full font-bold flex place-content-center mt-20">
                    <p class="font-serif text-center text-2xl w-4/5 text-black mt-10">Instant Pickup and delivery with
                        high
                        securtiy upto 15Kg.</p>
                </div>
                <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Book
                    Tranzo</button>
            </div>
        </div>
        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-36">
            <img class="object-cover  w-full h-full transform duration-700 " src="/Images/documents_folder.jpeg" />
            <div
                class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0">
            </div>
            <div
                class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                <div class="absolute w-full flex place-content-center">
                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-black mt-10">
                        Documents</p>
                </div>
                <div class="absolute w-full font-bold flex place-content-center mt-20">
                    <p class="font-sans text-center w-4/5 text-black mt-10">Instant Pickup and delivery with high
                        securtiy upto 15Kg.</p>
                </div>
                <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Book
                    Tranzo</button>
            </div>
        </div>
    </div> --}}
    {{-- <div class="bg-white w-full flex flex-row p-4 text-black rounded-lg">

        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-36">
            <img class="object-cover  w-full h-full transform duration-700 "
                src="/Images/documents_folder.jpeg" />
            <div
                class="absolute w-full h-full  transform duration-500 inset-y-full group-hover:-inset-y-0">
            </div>
            <div
                class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                <div class="absolute w-full flex place-content-center">
                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-black mt-10">
                        Documents</p>
                </div>
                <div class="absolute w-full font-bold flex place-content-center mt-20">
                    <p class="font-sans text-center w-4/5 text-black mt-10">Instant Pickup and delivery with high
                        securtiy upto 15Kg.</p>
                </div>
                <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Book
                    Tranzo</button>
            </div>
        </div>
        <div class="relative group w-96 h-96 overflow-hidden bg-black rounded-lg m-auto mt-36">
            <img class="object-cover  w-full h-full transform duration-700 backdrop-opacity-100"
                src="/Images/documents_folder.jpeg" height="20%" width="0%"/>
            <div
                class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0">
            </div>
            <div
                class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                <div class="absolute w-full flex place-content-center">
                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-black mt-10">
                        Food</p>
                </div>
                <div class="absolute w-full font-bold flex place-content-center mt-20">
                    <p class="font-serif text-center text-2xl w-4/5 text-black mt-10">Instant Pickup and delivery with high
                        securtiy upto 15Kg.</p>
                </div>
                <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Book
                    Tranzo</button>
            </div>
        </div>
        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-36">
            <img class="object-cover  w-full h-full transform duration-700 "
                src="/Images/documents_folder.jpeg" />
            <div
                class="absolute w-full h-1/2 shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0">
            </div>
            <div
                class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                <div class="absolute w-full flex place-content-center">
                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-black mt-10">
                        Documents</p>
                </div>
                <div class="absolute w-full font-bold flex place-content-center mt-20">
                    <p class="font-sans text-center w-4/5 text-black mt-10">Instant Pickup and delivery with high
                        securtiy upto 15Kg.</p>
                </div>
                <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Book
                    Tranzo</button>
            </div>
        </div>
    </div> --}}
    <div class="flex flex-row bg-white justify-center p-10 gap-36">
        <div class="relative flex w-96 flex-col rounded-xl p-4 bg-gray-200 bg-clip-border text-gray-700 shadow-md">
            <div
                class="relative  h-56 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                <img src="/Images/documents.jpg" alt="img-blur-shadow" layout="fill" />
            </div>
            <div class="p-6 ">
                <h5
                    class="flex justify-center mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Documents
                </h5>
                <p class="block font-sans-serif text-justify text-xl text-light leading-relaxed antialiased">
                    Any Packages / Documents upto 15Kg with cash on delivery and online payment. We make the things you need arrive on time. You focus on what you need to do.
                </p>
            </div>
            <div class="p-6 pt-0 flex justify-center">
                <button
                    class="select-none rounded-lg bg-pink-500 py-3 px-6  text-center align-middle font-serif text-s font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button" data-ripple-light="true">
                    Book Tranzo
                </button>
            </div>
        </div>
        <div class="relative flex w-96 flex-col rounded-xl p-4 bg-gray-200 bg-clip-border text-gray-700 shadow-md">
            <div
                class="relative   h-56 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                <img src="/Images/documents.jpg" alt="img-blur-shadow" layout="fill" />
            </div>
            <div class="p-6">
                <h5
                    class="flex justify-center mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Food
                </h5>
                <p class="block font-sans-serif text-justify text-xl text-light leading-relaxed antialiased">
                    Nothing can beat the smooth delivery of foods that we provide.
                    We deliver your foods with joy.Order Now Pack Your Food we deliver on-time.
                </p>
            </div>
            <div class="p-6 pt-0 flex justify-center">
                <button
                class="select-none rounded-lg bg-pink-500 py-3 px-6  text-center align-middle font-serif text-s font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button" data-ripple-light="true">
                Book Tranzo
            </button>
            </div>
        </div>
        <div class="relative flex w-96 flex-col rounded-xl p-4 bg-gray-200 bg-clip-border text-gray-700 shadow-md">
            <div
                class="relative h-56 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                <img src="/Images/medicine1.jpg" alt="img-blur-shadow" layout="fill" />
            </div>
            <div class="p-6">
                <h5
                    class="flex justify-center mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Medicines
                </h5>
                <p class="block font-sans-serif text-justify text-xl text-light leading-relaxed antialiased">
                   Instant pick-up and drop-off to deliver medicine to users(Normal user/Business user) ASAP.Trust us for the safe journey of your prescription.
                </p>
            </div>
            <div class="p-6 pt-0 flex justify-center">
                <a href="#qr_code">
                <button
                    class="select-none rounded-lg bg-pink-500 py-3 px-6  text-center align-middle font-serif text-s font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button" data-ripple-light="true">
                    Book Tranzo
                </button>
            </a>
            </div>
        </div>
    </div>
    <div class="flex flex-row bg-white justify-center p-10 gap-36">
        <div class="relative flex w-96 flex-col rounded-xl p-4 bg-gray-200 bg-clip-border text-gray-700 shadow-md">
            <div
                class="relative h-56 overflow-hidden rounded-xl bg-white bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                <img src="/Images/cake.jpeg" alt="img-blur-shadow"  />
            </div>
            <div class="p-2">
                <h5
                    class="flex justify-center mt-4  mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Cakes
                </h5>
                <p class="block font-sans-serif text-justify text-xl text-light leading-relaxed antialiased">
                    We make deliveries fast, so you can get back to other stuff faster.Enjoy Your Special Day without tension.We’re faster, more convenient and our prices are lower.
                </p>
            </div>
            <div class="p-6 pt-0 flex justify-center">
                <button
                    class="select-none rounded-lg bg-pink-500 py-3 px-6  text-center align-middle font-serif text-s font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button" data-ripple-light="true">
                    Book Tranzo
                </button>
            </div>
        </div>
        <div class="relative flex w-96 flex-col rounded-xl p-4 bg-gray-200 bg-clip-border text-gray-700 shadow-md">
            <div
                class="relative  h-56 overflow-hidden rounded-xl bg-blue-white-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                <img src="/Images/parcel.png" alt="img-blur-shadow " layout="fill" />
            </div>
            <div class="p-6 pt-0">
                <h5
                    class="flex justify-center mb-2 mt-4 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Parcels
                </h5>
                <p class="block font-sans-serif text-justify text-xl text-light leading-relaxed antialiased">

                    The most affordable way to send, receive, and deliver parcels!
                    For the most satisfying delivery experience, call us.We are a safe bet for your business!

                </p>
            </div>
            <div class="p-6 pt-0 flex justify-center">
                <button
                    class="select-none rounded-lg bg-pink-500 py-3 px-6  text-center align-middle font-serif text-s font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button" data-ripple-light="true">
                    Book Tranzo
                </button>
            </div>
        </div>
        <div class="relative flex w-96 flex-col rounded-xl p-4 bg-gray-200 bg-clip-border text-gray-700 shadow-md">
            <div
                class="relative h-56 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                <img src="/Images/parcel.png" alt="img-blur-shadow" layout="fill" />
            </div>
            <div class="p-6 ">
                <h5
                    class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    UI/UX Review Check
                </h5>
                <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                    The place is close to Barceloneta Beach and bus stop just 2 min by walk
                    and near to "Naviglio" where you can enjoy the main night life in
                    Barcelona.
                </p>
            </div>
            <div class="p-6 pt-0">
                <button
                    class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-serif text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button" data-ripple-light="true">
                    Book Tranzo
                </button>
            </div>
        </div>
    </div>
</body>

</html>
