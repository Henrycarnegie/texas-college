@props(['classes', 'icon', 'fill' => '#F0F0FF'])

@php
    $classes = 'w-5 h-5';
@endphp

@if ($icon === 'iconLandingPage')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M352 256c0 22.2-1.2 43.6-3.3 64l-185.3 0c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64l185.3 0c2.2 20.4 3.3 41.8 3.3 64zm28.8-64l123.1 0c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64l-123.1 0c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32l-116.7 0c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0l-176.6 0c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0L18.6 160C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192l123.1 0c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64L8.1 320C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6l176.6 0c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352l116.7 0zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6l116.7 0z" />
    </svg>
@elseif ($icon === 'iconDashboard')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z" />
    </svg>
@elseif ($icon === 'iconPendaftaran')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm16 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 48-48 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l48 0 0 48c0 8.8 7.2 16 16 16s16-7.2 16-16l0-48 48 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-48 0 0-48z" />
    </svg>
@elseif ($icon === 'iconAbsensi')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M406.5 399.6C387.4 352.9 341.5 320 288 320l-64 0c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3l64 0c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" />
    </svg>
@elseif ($icon === 'iconBankSoal')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M64 464c-8.8 0-16-7.2-16-16L48 64c0-8.8 7.2-16 16-16l48 0c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l48 0 0 80c0 17.7 14.3 32 32 32l80 0 0 288c0 8.8-7.2 16-16 16L64 464zM64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-293.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0L64 0zm48 112c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm0 64c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm-6.3 71.8L82.1 335.9c-1.4 5.4-2.1 10.9-2.1 16.4c0 35.2 28.8 63.7 64 63.7s64-28.5 64-63.7c0-5.5-.7-11.1-2.1-16.4l-23.5-88.2c-3.7-14-16.4-23.8-30.9-23.8l-14.8 0c-14.5 0-27.2 9.7-30.9 23.8zM128 336l32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
    </svg>
@elseif ($icon === 'iconManageChapter')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M176 88l0 40 160 0 0-40c0-4.4-3.6-8-8-8L184 80c-4.4 0-8 3.6-8 8zm-48 40l0-40c0-30.9 25.1-56 56-56l144 0c30.9 0 56 25.1 56 56l0 40 28.1 0c12.7 0 24.9 5.1 33.9 14.1l51.9 51.9c9 9 14.1 21.2 14.1 33.9l0 92.1-128 0 0-32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 32-128 0 0-32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 32L0 320l0-92.1c0-12.7 5.1-24.9 14.1-33.9l51.9-51.9c9-9 21.2-14.1 33.9-14.1l28.1 0zM0 416l0-64 128 0c0 17.7 14.3 32 32 32s32-14.3 32-32l128 0c0 17.7 14.3 32 32 32s32-14.3 32-32l128 0 0 64c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64z" />
    </svg>
@elseif ($icon === 'iconDataSiswa')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z" />
    </svg>
@elseif ($icon === 'iconLogout')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
    </svg>
    {{-- Icon for Course --}}
@elseif ($icon === 'iconVideo')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
    </svg>
@elseif ($icon === 'iconReading')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z" />
    </svg>
@elseif ($icon === 'iconPostTest')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M0 96C0 43 43 0 96 0l96 0 0 190.7c0 13.4 15.5 20.9 26 12.5L272 160l54 43.2c10.5 8.4 26 .9 26-12.5L352 0l32 0 32 0c17.7 0 32 14.3 32 32l0 320c0 17.7-14.3 32-32 32l0 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l-32 0L96 512c-53 0-96-43-96-96L0 96zM64 416c0 17.7 14.3 32 32 32l256 0 0-64L96 384c-17.7 0-32 14.3-32 32z" />
    </svg>
    {{-- Icon for Course --}}

    {{-- Dropdown --}}
@elseif ($icon === 'iconDropdownExpand')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
    </svg>
@elseif ($icon === 'iconDropdownCollapse')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
    </svg>
    {{-- Dropdown --}}
@elseif ($icon === 'iconDelete')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
    </svg>
@elseif ($icon === 'iconEdit')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
    </svg>
@elseif ($icon === 'iconView')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
    </svg>
@elseif ($icon === 'iconNext')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
    </svg>
@elseif ($icon === 'iconClose')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" {{ $attributes->merge(['class' => $classes]) }}>
        <path fill="{{ $fill }}"
            d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z" />
    </svg>
@endif
