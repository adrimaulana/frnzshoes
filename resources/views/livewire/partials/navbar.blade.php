<header class="sticky top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <nav class="max-w-[85rem] w-full mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 md:h-20">
      
      <!-- Logo -->
      <div class="flex items-center">
        <a href="/" class="flex items-center space-x-2 group">
          
          <span class="text-xl font-bold text-gray-900 dark:text-white">FrnzShoes</span>
        </a>
      </div>

      <!-- Right Side Actions -->
      <div class="flex items-center space-x-1">
        
        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-1">
          <a wire:navigate href="/" class="px-4 py-2 text-sm font-medium rounded-lg transition-colors {{request()->is('/')? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-50'}} dark:text-gray-300 dark:hover:bg-gray-800">
            Beranda
          </a>
          <a wire:navigate href="/categories" class="px-4 py-2 text-sm font-medium rounded-lg transition-colors {{request()->is('categories')? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-50'}} dark:text-gray-300 dark:hover:bg-gray-800">
            Kategori
          </a>
          <a wire:navigate href="/products" class="px-4 py-2 text-sm font-medium rounded-lg transition-colors {{request()->is('products')? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-50'}} dark:text-gray-300 dark:hover:bg-gray-800">
            Produk
          </a>
        </div>
        
        <!-- Cart Button -->
        <a wire:navigate href="/cart" class="relative group">
          <div class="flex items-center space-x-2 px-4 py-2 rounded-lg transition-colors {{request()->is('cart')? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:bg-gray-50'}} dark:text-gray-300 dark:hover:bg-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
            <span class="hidden sm:inline text-sm font-medium">Keranjang</span>
            @if($total_count > 0)
            <span class="absolute -top-1 -right-1 flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-blue-600 rounded-full">{{ $total_count }}</span>
            @endif
          </div>
        </a>

        @guest
        <!-- Login Button -->
        <a wire:navigate href="/login" class="hidden md:flex items-center space-x-2 px-5 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
          <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
          </svg>
          <span>Login</span>
        </a>
        @endguest

        @auth
        <!-- User Dropdown -->
        <div class="relative" x-data="{ open: false }" @click.away="open = false">
          <button @click="open = !open" class="flex items-center space-x-2 px-4 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-50 transition-colors dark:text-gray-300 dark:hover:bg-gray-800">
            <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white font-semibold text-sm">
              {{ substr(auth()->user()->name, 0, 1) }}
            </div>
            <span class="hidden md:inline">{{ auth()->user()->name }}</span>
            <svg class="w-4 h-4 transition-transform" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </button>

          <!-- Dropdown Menu -->
          <div x-show="open" 
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 scale-95"
               x-transition:enter-end="opacity-100 scale-100"
               x-transition:leave="transition ease-in duration-150"
               x-transition:leave-start="opacity-100 scale-100"
               x-transition:leave-end="opacity-0 scale-95"
               class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200 py-2 dark:bg-gray-800 dark:border-gray-700"
               style="display: none;">
            
            <div class="px-4 py-3 border-b border-gray-200 dark:border-gray-700">
              <p class="text-sm font-medium text-gray-900 dark:text-white">{{ auth()->user()->name }}</p>
              <p class="text-sm text-gray-500 dark:text-gray-400 truncate">{{ auth()->user()->email }}</p>
            </div>

            <a wire:navigate href="/my-orders" class="flex items-center space-x-3 px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors dark:text-gray-300 dark:hover:bg-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
              </svg>
              <span>Order Saya</span>
            </a>

            <a href="#" class="flex items-center space-x-3 px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors dark:text-gray-300 dark:hover:bg-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <span>Akun Saya</span>
            </a>

            <div class="border-t border-gray-200 dark:border-gray-700 mt-2 pt-2">
              <a href="/logout" class="flex items-center space-x-3 px-4 py-3 text-sm text-red-600 hover:bg-red-50 transition-colors dark:text-red-400 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
                <span>Keluar</span>
              </a>
            </div>
          </div>
        </div>
        @endauth

        <!-- Mobile Menu Button -->
        <button type="button" class="md:hidden flex items-center justify-center w-10 h-10 text-gray-700 rounded-lg hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800" onclick="toggleMobileMenu()">
          <svg id="menu-icon" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg id="close-icon" class="w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 dark:border-gray-700">
      <div class="py-4 space-y-1">
        <a wire:navigate href="/" class="block px-4 py-3 text-sm font-medium rounded-lg {{request()->is('/')? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:bg-gray-50'}} dark:text-gray-300 dark:hover:bg-gray-800">
          Beranda
        </a>
        <a wire:navigate href="/categories" class="block px-4 py-3 text-sm font-medium rounded-lg {{request()->is('categories')? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:bg-gray-50'}} dark:text-gray-300 dark:hover:bg-gray-800">
          Kategori
        </a>
        <a wire:navigate href="/products" class="block px-4 py-3 text-sm font-medium rounded-lg {{request()->is('products')? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:bg-gray-50'}} dark:text-gray-300 dark:hover:bg-gray-800">
          Produk
        </a>
        
        @guest
        <a wire:navigate href="/login" class="block px-4 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
          Login
        </a>
        @endguest
      </div>
    </div>
  </nav>
</header>

<script>
function toggleMobileMenu() {
  const menu = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  const closeIcon = document.getElementById('close-icon');
  
  menu.classList.toggle('hidden');
  menuIcon.classList.toggle('hidden');
  closeIcon.classList.toggle('hidden');
}
</script>