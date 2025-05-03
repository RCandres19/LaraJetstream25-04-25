<div class="flex items-center justify-center w-full px-1 py-1">
    <!-- Logo completo cuando sidebar está abierto -->
    <img x-show="sidebarOpen"
         src="{{ asset('images/Loogoo.svg') }}"
         alt="Logo Completo"
         class="w-auto h-10 transition-all duration-300" />

    <!-- Solo la letra C cuando sidebar está cerrado -->
    <img x-show="!sidebarOpen"
         src="{{ asset('images/C.svg') }}"
         alt="Logo C"
         class="w-auto h-10 transition-all duration-300" />
</div>
