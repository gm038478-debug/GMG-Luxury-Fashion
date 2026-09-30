@extends('layouts.app')

@section('content')
    <!-- Fixed Navigation Bar -->
    <header class="fixed top-0 w-full z-40 bg-black/85 backdrop-blur-md border-b border-stone-800/80 transition-all">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-3xl font-luxury font-black tracking-widest text-amber-400 hover:opacity-90 transition">
                GMG
            </a>
            <nav class="hidden md:flex items-center space-x-10 text-xs uppercase tracking-widest text-stone-300 font-semibold">
                <a href="#about" class="hover:text-amber-400 transition-colors">Acerca de</a>
                <a href="#catalog" class="hover:text-amber-400 transition-colors">Colecciones</a>
                <a href="#social" class="hover:text-amber-400 transition-colors">Redes Sociales</a>
            </nav>
            <a href="#catalog" class="hidden sm:inline-block bg-amber-400 hover:bg-amber-300 text-black text-xs font-bold uppercase tracking-wider px-5 py-2.5 transition rounded-sm">
                Ver Catálogo
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center text-center px-6 pt-20 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-stone-900 via-black to-black">
        <div class="max-w-4xl mx-auto z-10">
            <span class="text-xs uppercase tracking-[0.3em] text-amber-400 font-semibold mb-4 block">Haute Couture & Exclusive Fashion</span>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-luxury font-bold mb-6 tracking-tight text-stone-100 leading-none">
                GMG LUXURY
            </h1>
            <p class="text-stone-400 text-base md:text-lg mb-10 max-w-2xl mx-auto leading-relaxed font-light">
                Curando las piezas más deseadas de las casas de moda más prestigiosas del mundo. Exclusividad, autenticidad e distinción sin concesiones.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#catalog" class="bg-amber-400 hover:bg-amber-300 text-black font-bold px-8 py-4 uppercase tracking-widest text-xs transition duration-300 shadow-lg shadow-amber-400/10">
                    Explorar Marcas de Lujo
                </a>
                <a href="#about" class="border border-stone-700 hover:border-amber-400 text-stone-300 hover:text-amber-400 font-bold px-8 py-4 uppercase tracking-widest text-xs transition duration-300">
                    Nuestra Filosofía
                </a>
            </div>
        </div>
    </section>

    <!-- Acerca de Nosotros Section -->
    <section id="about" class="py-28 bg-stone-950 border-t border-stone-900 relative">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <span class="text-xs uppercase tracking-[0.25em] text-amber-400 font-semibold mb-3 block">Maison GMG</span>
            <h2 class="text-3xl md:text-5xl font-luxury font-bold text-stone-100 mb-8 tracking-wide">Acerca de Nosotros</h2>
            <div class="w-16 h-0.5 bg-amber-400 mx-auto mb-10"></div>
            <p class="text-stone-300 leading-relaxed text-base md:text-lg max-w-3xl mx-auto font-light mb-8">
                En <strong class="text-amber-400 font-semibold">GMG</strong> redefinimos la experiencia de la moda de alta gama en línea. Nacemos de la pasión por la artesanía excepcional, seleccionando meticulosamente prendas de diseñadores emblemáticos como Gucci, Louis Vuitton y Balenciaga.
            </p>
            <p class="text-stone-400 leading-relaxed text-sm md:text-base max-w-3xl mx-auto font-light">
                Garantizamos autenticidad certificada, atención personalizada de nivel VIP y envíos privados a todo el mundo. Cada pieza en nuestro catálogo cuenta una historia de elegancia contemporánea.
            </p>
        </div>
    </section>

    <!-- Catálogo por Marcas de Lujo -->
    <section id="catalog" class="py-28 max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <span class="text-xs uppercase tracking-[0.25em] text-amber-400 font-semibold mb-3 block">Catálogo Exclusivo</span>
            <h2 class="text-4xl md:text-6xl font-luxury font-bold text-stone-100 tracking-wide">Marcas de Lujo</h2>
        </div>

        @foreach($brands as $brandName => $items)
            <div class="mb-24">
                <div class="flex items-center mb-10">
                    <h3 class="text-2xl md:text-3xl font-luxury font-bold text-amber-400 tracking-widest uppercase">{{ $brandName }}</h3>
                    <div class="ml-6 flex-grow h-px bg-gradient-to-r from-stone-800 to-transparent"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($items as $product)
                        <div class="group bg-stone-900/60 border border-stone-800/80 rounded-sm overflow-hidden hover:border-amber-400/60 transition-all duration-300 flex flex-col">
                            <div class="h-96 overflow-hidden relative">
                                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow justify-between">
                                <div>
                                    <span class="text-[10px] uppercase tracking-[0.2em] text-amber-400 font-bold block mb-1">{{ $product['brand'] }}</span>
                                    <h4 class="text-lg font-luxury font-bold text-stone-100 mb-2">{{ $product['name'] }}</h4>
                                    <p class="text-stone-300 font-bold text-lg mb-6">{{ $product['price'] }}</p>
                                </div>
                                <button 
                                    onclick="openModal({{ json_encode($product) }})"
                                    class="w-full py-3 bg-stone-800 hover:bg-amber-400 hover:text-black text-stone-200 transition duration-300 text-xs uppercase tracking-widest font-bold rounded-sm border border-stone-700 hover:border-amber-400">
                                    Ver Detalle Exclusivo
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </section>

    <!-- Redes Sociales Section -->
    <section id="social" class="py-24 bg-stone-950 border-t border-stone-900 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <span class="text-xs uppercase tracking-[0.25em] text-amber-400 font-semibold mb-3 block">Comunidad GMG</span>
            <h2 class="text-3xl md:text-5xl font-luxury font-bold mb-6 text-stone-100">Síguenos en Redes Sociales</h2>
            <p class="text-stone-400 text-sm max-w-md mx-auto mb-10 font-light">
                Únete a nuestra selecta comunidad y entérate antes que nadie de nuestros lanzamientos privados y ediciones limitadas.
            </p>
            <div class="flex justify-center flex-wrap gap-8 text-xs uppercase tracking-[0.2em] text-stone-300 font-semibold">
                <a href="https://instagram.com" target="_blank" class="hover:text-amber-400 transition-colors border border-stone-800 px-6 py-3 rounded-sm hover:border-amber-400">
                    Instagram
                </a>
                <a href="https://tiktok.com" target="_blank" class="hover:text-amber-400 transition-colors border border-stone-800 px-6 py-3 rounded-sm hover:border-amber-400">
                    TikTok
                </a>
                <a href="https://pinterest.com" target="_blank" class="hover:text-amber-400 transition-colors border border-stone-800 px-6 py-3 rounded-sm hover:border-amber-400">
                    Pinterest
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 text-center text-xs text-stone-600 border-t border-stone-900 bg-black">
        <p>&copy; {{ date('Y') }} GMG Luxury Fashion Online. Todos los derechos reservados.</p>
    </footer>

    <!-- Ventana Emergente / Modal de Producto -->
    <div id="productModal" class="fixed inset-0 z-50 flex items-center justify-center hidden p-4">
        <!-- Fondo Desvanecido (Backdrop) con Blur -->
        <div onclick="closeModal()" class="absolute inset-0 bg-black/85 backdrop-blur-md opacity-0 transition-opacity duration-300" id="modalBackdrop"></div>

        <!-- Contenido de la Ventana Pequeña Modal -->
        <div class="relative bg-stone-900 border border-stone-700 w-full max-w-lg rounded-sm overflow-hidden shadow-2xl transform scale-95 opacity-0 transition-all duration-300 z-10 my-auto" id="modalContent">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-stone-400 hover:text-amber-400 text-2xl font-bold z-20 transition-colors bg-black/50 w-8 h-8 flex items-center justify-center rounded-full">&times;</button>
            
            <div class="h-64 sm:h-72 overflow-hidden relative">
                <img id="modalImage" src="" alt="" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900 via-transparent to-transparent"></div>
            </div>

            <div class="p-6 sm:p-8">
                <span id="modalBrand" class="text-[10px] uppercase tracking-[0.25em] text-amber-400 font-bold block mb-1"></span>
                <h3 id="modalName" class="text-2xl font-luxury font-bold text-stone-100 mb-2"></h3>
                <p id="modalPrice" class="text-xl font-bold text-amber-400 mb-6"></p>
                
                <!-- Frase Motivadora -->
                <blockquote class="border-l-2 border-amber-400 pl-4 py-2 italic text-stone-300 text-sm mb-6 bg-amber-400/5 rounded-r">
                    "<span id="modalPhrase"></span>"
                </blockquote>

                <p id="modalDescription" class="text-stone-400 text-xs leading-relaxed mb-8 font-light"></p>

                <button class="w-full bg-amber-400 text-black py-3.5 uppercase tracking-widest text-xs font-bold hover:bg-amber-300 transition-colors rounded-sm shadow-md">
                    Adquirir Prenda
                </button>
            </div>
        </div>
    </div>

    <!-- Script de Interactividad Modal -->
    <script>
        function openModal(product) {
            const modal = document.getElementById('productModal');
            const backdrop = document.getElementById('modalBackdrop');
            const content = document.getElementById('modalContent');

            document.getElementById('modalImage').src = product.image;
            document.getElementById('modalBrand').innerText = product.brand;
            document.getElementById('modalName').innerText = product.name;
            document.getElementById('modalPrice').innerText = product.price;
            document.getElementById('modalPhrase').innerText = product.phrase;
            document.getElementById('modalDescription').innerText = product.description;

            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');

            setTimeout(() => {
                backdrop.classList.remove('opacity-0');
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeModal() {
            const backdrop = document.getElementById('modalBackdrop');
            const content = document.getElementById('modalContent');

            backdrop.classList.add('opacity-0');
            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                document.getElementById('productModal').classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }, 300);
        }
    </script>
@endsection
