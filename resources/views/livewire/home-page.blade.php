<div>
    {{-- Hero Start - Diagonal Split Design --}}
    <div class="relative w-full min-h-screen overflow-hidden bg-white">
        <!-- Diagonal Sky Blue Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-sky-400 via-blue-400 to-cyan-500">
            <div class="absolute inset-0 opacity-30">
                <div class="absolute w-full h-full" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,.1) 35px, rgba(255,255,255,.1) 70px);"></div>
            </div>
        </div>
        
        <!-- Diagonal White Section -->
        <div class="absolute bottom-0 right-0 w-full h-2/3 bg-white transform origin-bottom-right" style="clip-path: polygon(100% 0, 100% 100%, 0 100%, 40% 0);"></div>

        <!-- Floating Elements -->
        <div class="absolute top-20 right-20 w-32 h-32 bg-yellow-300 rounded-full opacity-60 blur-2xl animate-pulse"></div>
        <div class="absolute bottom-40 left-20 w-40 h-40 bg-cyan-300 rounded-full opacity-60 blur-2xl animate-pulse" style="animation-delay: 1s;"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 min-h-screen flex items-center py-20">
            <div class="grid lg:grid-cols-2 gap-16 items-center w-full">
                <!-- Left Content -->
                <div class="space-y-8 z-10">
                    

                    <!-- Unique Typography -->
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="w-2 h-32 bg-gradient-to-b from-sky-400 to-cyan-500 rounded-full"></div>
                            <div>
                                <h1 class="text-6xl sm:text-7xl lg:text-8xl font-black leading-none">
                                    <span class="text-sky-700">FrnzShoes</span>
                                    
                                </h1>
                            </div>
                        </div>
                        <p class="text-xl text-gray-700 font-semibold leading-relaxed pl-6 border-l-4 border-sky-400">
                            Menjual berbagai sepatu premium yang dibuat untuk kenyamanan, dirancang untuk gaya, serta dibangun untuk performa.
                        </p>
                    </div>

                    <!-- Unique Button Layout -->
                    <div class="flex flex-col sm:flex-row gap-4 pl-6">
                        <a href="/products" class="group relative bg-sky-500 text-white px-10 py-5 rounded-2xl font-black text-lg shadow-2xl shadow-sky-500/50 hover:shadow-sky-600/60 hover:bg-sky-600 transition-all duration-300 overflow-hidden">
                            <span class="relative z-10 flex items-center justify-between">
                                <span>BELANJA SEKARANG</span>
                                <svg class="w-6 h-6 ml-3 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
                        </a>
                        <a href="/products" class="inline-flex items-center justify-center gap-3 bg-white border-4 border-sky-500 text-sky-600 px-10 py-5 rounded-2xl font-black text-lg hover:bg-sky-50 transition-all duration-300 shadow-xl">
                            LIHAT PRODUK
                        </a>
                    </div>

                    <!-- Circular Stats -->
                    
                </div>

                <!-- Right Image - Unique Card Design -->
                <div class="relative z-10">
                    <!-- Main Image Container -->
                    <div class="relative">
                        <!-- Back Card -->
                        <div class="absolute top-8 -right-8 w-full h-full bg-gradient-to-br from-cyan-400 to-blue-500 rounded-[4rem] transform rotate-6"></div>
                        
                        <!-- Front Card -->
                        <div class="relative bg-white rounded-[4rem] p-8 shadow-2xl border-8 border-sky-200">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800" alt="Premium Sneakers" class="w-full rounded-[3rem]">
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Hero End --}}

    {{-- Brands Section - Card Stack Design --}}
    <section class="py-24 bg-gradient-to-br from-sky-50 to-cyan-50 relative overflow-hidden">
        <!-- Decorative Circles -->
        <div class="absolute top-20 left-10 w-64 h-64 bg-sky-200 rounded-full opacity-30 blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-64 h-64 bg-cyan-200 rounded-full opacity-30 blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Unique Header Design -->
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-16 gap-6">
                <div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-16 h-1 bg-gradient-to-r from-sky-500 to-cyan-500 rounded-full"></div>
                        <span class="text-sky-600 font-black text-sm uppercase tracking-widest">Pilihan Terbaik</span>
                    </div>
                    <h2 class="text-5xl lg:text-6xl font-black text-gray-900">
                        BRAND <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-500 to-cyan-500">TERPERCAYA</span>
                    </h2>
                </div>
                <a href="/products" class="flex items-center gap-2 text-sky-600 font-black hover:gap-4 transition-all">
                    <span>VIEW ALL</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            <!-- Brands Grid with Unique Design -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($brands as $brand)
                <a href="/products?selected_brands[0]={{ $brand->id }}" wire:key="{{ $brand->id }}" class="group relative">
                    <!-- Shadow Card -->
                    <div class="absolute inset-0 bg-gradient-to-br from-sky-400 to-cyan-500 rounded-3xl transform translate-x-2 translate-y-2 group-hover:translate-x-3 group-hover:translate-y-3 transition-transform"></div>
                    
                    <!-- Main Card -->
                    <div class="relative bg-white rounded-3xl p-6 border-4 border-gray-900 hover:border-sky-500 transition-all duration-300 transform group-hover:-translate-y-1">
                        <div class="aspect-square bg-gradient-to-br from-sky-50 to-cyan-50 rounded-2xl overflow-hidden mb-4">
                            <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-center font-black text-gray-900 text-lg">{{ $brand->name }}</h3>
                        
                        <!-- Arrow -->
                        <div class="mt-3 flex justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="w-8 h-8 bg-sky-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Brands End --}}

    {{-- Categories Section - Bento Grid Style --}}
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="flex items-center justify-center gap-4 mb-4">
                    <div class="w-12 h-1 bg-gradient-to-r from-sky-500 to-cyan-500 rounded-full"></div>
                    <span class="text-sky-600 font-black text-sm uppercase tracking-widest">Kategori</span>
                    <div class="w-12 h-1 bg-gradient-to-r from-cyan-500 to-sky-500 rounded-full"></div>
                </div>
                <h2 class="text-5xl lg:text-6xl font-black text-gray-900 mb-4">
                    TEMUKAN <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-500 to-cyan-500">GAYAMU</span>
                </h2>
            </div>

            <!-- Bento Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($categories as $category)
                <a href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->id }}" class="group relative bg-gradient-to-br from-sky-400 to-cyan-500 rounded-3xl p-1 hover:shadow-2xl hover:shadow-sky-500/50 transition-all duration-300 hover:scale-105">
                    <div class="bg-white rounded-[1.4rem] p-6 h-full">
                        <div class="w-20 h-20 bg-gradient-to-br from-sky-100 to-cyan-100 rounded-2xl overflow-hidden mb-4 group-hover:scale-110 transition-transform">
                            <img src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}" class="w-full h-full object-cover">
                        </div>
                        <h3 class="font-black text-gray-900 text-xl mb-2 group-hover:text-sky-600 transition-colors">{{ $category->name }}</h3>
                        <div class="flex items-center gap-2 text-sky-600 font-bold">
                            <span>Jelajahi</span>
                            <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Categories End --}}



</div>