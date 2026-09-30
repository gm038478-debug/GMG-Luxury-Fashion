<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GMG | Luxury Fashion</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f3ef;
            color: #111;
        }

        body.modal-open {
            overflow: hidden;
        }

        /* =========================
           NAVEGACIÓN
        ========================== */

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(5, 5, 5, .94);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255,255,255,.12);
        }

        nav {
            max-width: 1450px;
            margin: auto;
            min-height: 82px;
            padding: 0 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .logo {
            font-family: Georgia, serif;
            font-size: 30px;
            letter-spacing: 7px;
            color: white;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            color: #ddd;
            text-decoration: none;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: .3s;
        }

        .nav-links a:hover {
            color: #c9a86a;
        }

        .login-button {
            border: 1px solid #c9a86a;
            padding: 11px 17px;
        }

        .cart-button {
            position: relative;
        }

        .cart-count {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 20px;
            height: 20px;
            padding: 0 5px;
            margin-left: 5px;
            border-radius: 50%;
            background: #c9a86a;
            color: #111;
            font-size: 10px;
            font-weight: bold;
        }

        /* =========================
           HERO
        ========================== */

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 130px 8% 80px;
            color: white;
            background:
                linear-gradient(
                    90deg,
                    rgba(0,0,0,.88) 0%,
                    rgba(0,0,0,.60) 48%,
                    rgba(0,0,0,.18) 100%
                ),
                url("https://images.unsplash.com/photo-1445205170230-053b83016050?auto=format&fit=crop&w=2000&q=85")
                center/cover no-repeat;
        }

        .hero-content {
            max-width: 760px;
        }

        .eyebrow {
            color: #d4b477;
            text-transform: uppercase;
            letter-spacing: 5px;
            font-size: 12px;
            margin-bottom: 22px;
        }

        .hero h1 {
            font-family: Georgia, serif;
            font-weight: 400;
            font-size: clamp(55px, 8vw, 120px);
            line-height: .92;
            margin-bottom: 30px;
        }

        .hero h1 span {
            display: block;
            font-style: italic;
            color: #d4b477;
        }

        .hero p {
            max-width: 590px;
            color: #ddd;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .button {
            display: inline-block;
            padding: 17px 32px;
            border: 1px solid #d4b477;
            background: #d4b477;
            color: #111;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 12px;
            cursor: pointer;
            transition: .3s;
        }

        .button:hover {
            background: #111;
            color: white;
        }

        /* =========================
           GENERAL
        ========================== */

        section {
            padding: 110px 7%;
        }

        .section-title {
            max-width: 800px;
            margin-bottom: 60px;
        }

        .section-title small {
            color: #9b7a3d;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        .section-title h2 {
            font-family: Georgia, serif;
            font-size: clamp(38px, 5vw, 68px);
            font-weight: 400;
            margin-top: 15px;
        }

        .section-title p {
            color: #666;
            line-height: 1.8;
            margin-top: 18px;
        }

        /* =========================
           CATÁLOGO
        ========================== */

        .brand-section {
            margin-bottom: 100px;
        }

        .brand-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;
            border-bottom: 1px solid #bbb;
            padding-bottom: 15px;
            margin-bottom: 35px;
        }

        .brand-heading h3 {
            font-family: Georgia, serif;
            font-size: 35px;
            font-weight: 400;
        }

        .brand-heading span {
            color: #777;
            font-size: 12px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .product {
            cursor: pointer;
        }

        .product-image {
            height: 480px;
            overflow: hidden;
            background: #ddd;
            position: relative;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .6s ease;
        }

        .product:hover img {
            transform: scale(1.06);
        }

        .product-tag {
            position: absolute;
            top: 18px;
            left: 18px;
            padding: 8px 12px;
            background: rgba(0,0,0,.82);
            color: white;
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .product-info {
            padding: 18px 2px;
        }

        .product-info h4 {
            font-family: Georgia, serif;
            font-size: 21px;
            font-weight: 400;
            margin-bottom: 7px;
        }

        .product-info p {
            color: #777;
            font-size: 13px;
        }

        .price {
            margin-top: 9px;
            color: #111 !important;
            font-weight: bold;
        }

        /* =========================
           NOSOTROS
        ========================== */

        .about {
            background: #0b0b0b;
            color: white;
        }

        .about-grid {
            max-width: 1400px;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .about-image {
            height: 650px;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .about-content h2 {
            font-family: Georgia, serif;
            font-size: clamp(42px, 5vw, 70px);
            font-weight: 400;
            margin-bottom: 30px;
        }

        .about-content p {
            color: #bbb;
            line-height: 1.9;
            margin-bottom: 20px;
        }

        /* =========================
           REDES
        ========================== */

        .social {
            text-align: center;
        }

        .social h2 {
            font-family: Georgia, serif;
            font-size: 55px;
            font-weight: 400;
            margin-bottom: 40px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .social-links a {
            border: 1px solid #111;
            color: #111;
            padding: 16px 30px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 12px;
            transition: .3s;
        }

        .social-links a:hover {
            background: #111;
            color: white;
        }

        /* =========================
           MODALES
        ========================== */

        .modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 5000;
            background: rgba(0,0,0,.78);
            backdrop-filter: blur(13px);
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .modal.active {
            display: flex;
            animation: fade .25s ease;
        }

        @keyframes fade {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-box {
            width: min(1050px, 95%);
            max-height: 90vh;
            overflow-y: auto;
            background: #f7f5f1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            position: relative;
            box-shadow: 0 30px 90px rgba(0,0,0,.45);
        }

        .modal-image {
            min-height: 650px;
        }

        .modal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-content {
            padding: 65px 55px;
        }

        .close {
            position: absolute;
            right: 22px;
            top: 16px;
            z-index: 10;
            font-size: 34px;
            border: none;
            background: transparent;
            cursor: pointer;
        }

        .modal-brand {
            color: #99753a;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-size: 11px;
        }

        .modal-content h2 {
            font-family: Georgia, serif;
            font-size: 39px;
            font-weight: 400;
            margin: 15px 0;
        }

        .modal-price {
            font-size: 22px;
            margin-bottom: 25px;
        }

        .quote {
            border-left: 3px solid #c5a463;
            padding-left: 18px;
            font-family: Georgia, serif;
            font-style: italic;
            font-size: 20px;
            line-height: 1.5;
            margin: 25px 0;
        }

        .details {
            margin: 30px 0;
        }

        .details h3 {
            margin-bottom: 13px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .details ul {
            padding-left: 20px;
            color: #555;
            line-height: 1.9;
        }

        /* =========================
           LOGIN
        ========================== */

        .login-box {
            display: block;
            max-width: 520px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            background: white;
            font-size: 15px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #9b7a3d;
        }

        .login-message {
            color: #777;
            margin: 15px 0 25px;
            line-height: 1.6;
        }

        /* =========================
           CARRITO
        ========================== */

        .cart-box {
            display: block;
            max-width: 760px;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 90px 1fr auto;
            gap: 20px;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
        }

        .cart-item img {
            width: 90px;
            height: 110px;
            object-fit: cover;
        }

        .cart-item h3 {
            font-family: Georgia, serif;
            font-size: 19px;
            font-weight: 400;
            margin: 5px 0;
        }

        .remove-button {
            border: none;
            background: transparent;
            cursor: pointer;
            font-size: 28px;
        }

        .cart-total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 30px 0;
            font-size: 22px;
        }

        .empty-cart {
            color: #777;
            padding: 30px 0;
        }

        footer {
            background: #050505;
            color: #888;
            text-align: center;
            padding: 50px 20px;
        }

        footer strong {
            color: white;
            letter-spacing: 5px;
        }

        @media(max-width: 1000px) {
            .nav-links {
                gap: 12px;
            }

            .products {
                grid-template-columns: 1fr 1fr;
            }

            .about-grid,
            .modal-box {
                grid-template-columns: 1fr;
            }

            .modal-image {
                min-height: 350px;
                height: 350px;
            }
        }

        @media(max-width: 750px) {
            nav {
                flex-direction: column;
                padding: 20px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                padding-top: 200px;
            }

            .products {
                grid-template-columns: 1fr;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .about-image {
                height: 450px;
            }

            .modal-content {
                padding: 50px 25px;
            }
        }
    </style>
</head>

<body>

<!-- =========================
     MENÚ
========================== -->

<header>
    <nav>

        <a href="#inicio" class="logo">GMG</a>

        <ul class="nav-links">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#catalogo">Catálogo</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#redes">Redes</a></li>

            <li>
                <a href="#" class="login-button" onclick="openLogin(event)">
                    Iniciar sesión
                </a>
            </li>

            <li>
                <a href="#" class="cart-button" onclick="openCart(event)">
                    Carrito
                    <span class="cart-count" id="cartCount">0</span>
                </a>
            </li>
        </ul>

    </nav>
</header>


<!-- =========================
     PORTADA
========================== -->

<section class="hero" id="inicio">

    <div class="hero-content">

        <div class="eyebrow">
            GMG · Luxury Fashion
        </div>

        <h1>
            Viste como si
            <span>el mundo fuera tuyo.</span>
        </h1>

        <p>
            Moda de lujo, exclusividad y estilo para quienes
            no siguen tendencias: las convierten en identidad.
        </p>

        <a href="#catalogo" class="button">
            Explorar colección
        </a>

    </div>

</section>


<!-- =========================
     CATÁLOGO
========================== -->

<section id="catalogo">

    <div class="section-title">

        <small>Selección GMG</small>

        <h2>Catálogo de lujo</h2>

        <p>
            Descubre nuestra selección de prendas inspiradas en
            algunas de las casas de moda más reconocidas del mundo.
            Selecciona cualquier producto para conocer sus detalles.
        </p>

    </div>


    <!-- GUCCI -->

    <div class="brand-section">

        <div class="brand-heading">
            <h3>Gucci</h3>
            <span>Luxury Collection</span>
        </div>

        <div class="products">

            <article class="product"
                onclick="openProduct(
                    'Gucci',
                    'Chaqueta GG',
                    59500,
                    'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?auto=format&fit=crop&w=1000&q=85',
                    'La elegancia no necesita presentación.',
                    'Diseño premium.|Construcción de alta calidad.|Estética contemporánea.|Acabados inspirados en la moda italiana.'
                )">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?auto=format&fit=crop&w=1000&q=85"
                        alt="Chaqueta">

                    <span class="product-tag">Gucci</span>

                </div>

                <div class="product-info">
                    <h4>Chaqueta GG</h4>
                    <p>Chaqueta de lujo</p>
                    <p class="price">$59,500 MXN</p>
                </div>

            </article>


            <article class="product"
                onclick="openProduct(
                    'Gucci',
                    'Camiseta Premium',
                    14000,
                    'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=1000&q=85',
                    'Lo esencial también puede ser extraordinario.',
                    'Algodón premium.|Corte contemporáneo.|Diseño minimalista.|Ideal para looks casuales de lujo.'
                )">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=1000&q=85"
                        alt="Camiseta">

                    <span class="product-tag">Gucci</span>

                </div>

                <div class="product-info">
                    <h4>Camiseta Premium</h4>
                    <p>Algodón</p>
                    <p class="price">$14,000 MXN</p>
                </div>

            </article>


            <article class="product"
                onclick="openProduct(
                    'Gucci',
                    'Denim Luxury',
                    27500,
                    'https://images.unsplash.com/photo-1542272604-787c3835535d?auto=format&fit=crop&w=1000&q=85',
                    'Tu estilo habla antes de que digas una palabra.',
                    'Denim de algodón.|Construcción premium.|Diseño contemporáneo.|Acabados de lujo.'
                )">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1542272604-787c3835535d?auto=format&fit=crop&w=1000&q=85"
                        alt="Denim">

                    <span class="product-tag">Gucci</span>

                </div>

                <div class="product-info">
                    <h4>Denim Luxury</h4>
                    <p>Mezclilla premium</p>
                    <p class="price">$27,500 MXN</p>
                </div>

            </article>

        </div>

    </div>


    <!-- LOUIS VUITTON -->

    <div class="brand-section">

        <div class="brand-heading">
            <h3>Louis Vuitton</h3>
            <span>Luxury Ready-to-Wear</span>
        </div>

        <div class="products">

            <article class="product"
                onclick="openProduct(
                    'Louis Vuitton',
                    'Jersey Luxury',
                    40500,
                    'https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=1000&q=85',
                    'No sigas tendencias. Haz que te sigan.',
                    'Textura premium.|Corte regular.|Diseño contemporáneo.|Inspiración luxury ready-to-wear.'
                )">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=1000&q=85"
                        alt="Jersey">

                    <span class="product-tag">
                        Louis Vuitton
                    </span>

                </div>

                <div class="product-info">
                    <h4>Jersey Luxury</h4>
                    <p>Ready-to-wear</p>
                    <p class="price">$40,500 MXN</p>
                </div>

            </article>


            <article class="product"
                onclick="openProduct(
                    'Louis Vuitton',
                    'Chaqueta Premium',
                    52500,
                    'https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?auto=format&fit=crop&w=1000&q=85',
                    'Haz de cada entrada una declaración.',
                    'Construcción premium.|Corte contemporáneo.|Detalles de lujo.|Diseño inspirado en colecciones europeas.'
                )">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?auto=format&fit=crop&w=1000&q=85"
                        alt="Chaqueta">

                    <span class="product-tag">
                        Louis Vuitton
                    </span>

                </div>

                <div class="product-info">
                    <h4>Chaqueta Premium</h4>
                    <p>Colección de lujo</p>
                    <p class="price">$52,500 MXN</p>
                </div>

            </article>


            <article class="product"
                onclick="openProduct(
                    'Louis Vuitton',
                    'Camisa Luxury',
                    31000,
                    'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?auto=format&fit=crop&w=1000&q=85',
                    'Los detalles convierten una prenda en identidad.',
                    'Diseño premium.|Corte elegante.|Construcción de alta calidad.|Estética contemporánea.'
                )">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?auto=format&fit=crop&w=1000&q=85"
                        alt="Camisa">

                    <span class="product-tag">
                        Louis Vuitton
                    </span>

                </div>

                <div class="product-info">
                    <h4>Camisa Luxury</h4>
                    <p>Ready-to-wear</p>
                    <p class="price">$31,000 MXN</p>
                </div>

            </article>

        </div>

    </div>


    <!-- BALENCIAGA -->

    <div class="brand-section">

        <div class="brand-heading">
            <h3>Balenciaga</h3>
            <span>Contemporary Luxury</span>
        </div>

        <div class="products">

            <article class="product"
                onclick="openProduct(
                    'Balenciaga',
                    'Denim Jacket',
                    38500,
                    'https://images.unsplash.com/photo-1576995853123-5a10305d93c0?auto=format&fit=crop&w=1000&q=85',
                    'Atrévete a vestir diferente.',
                    'Denim premium.|Corte contemporáneo.|Bolsillos frontales.|Estética urbana de lujo.'
                )">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1576995853123-5a10305d93c0?auto=format&fit=crop&w=1000&q=85"
                        alt="Chaqueta denim">

                    <span class="product-tag">
                        Balenciaga
                    </span>

                </div>

                <div class="product-info">
                    <h4>Denim Jacket</h4>
                    <p>Regular Fit</p>
                    <p class="price">$38,500 MXN</p>
                </div>

            </article>


            <article class="product"
                onclick="openProduct(
                    'Balenciaga',
                    'Technical Jacket',
                    46000,
                    'https://images.unsplash.com/photo-1548883354-7622d03aca27?auto=format&fit=crop&w=1000&q=85',
                    'El lujo moderno empieza donde termina lo convencional.',
                    'Material técnico.|Corte urbano.|Cierre frontal.|Diseño contemporáneo.'
                )">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1548883354-7622d03aca27?auto=format&fit=crop&w=1000&q=85"
                        alt="Chaqueta técnica">

                    <span class="product-tag">
                        Balenciaga
                    </span>

                </div>

                <div class="product-info">
                    <h4>Technical Jacket</h4>
                    <p>Contemporary Luxury</p>
                    <p class="price">$46,000 MXN</p>
                </div>

            </article>


            <article class="product"
                onclick="openProduct(
                    'Balenciaga',
                    'Black Luxury Top',
                    17500,
                    'https://images.unsplash.com/photo-1583743814966-8936f37f4ec2?auto=format&fit=crop&w=1000&q=85',
                    'La confianza es la pieza que completa cualquier look.',
                    'Tejido premium.|Color negro.|Diseño minimalista.|Estética urbana.'
                )">

                <div class="product-image">

                    <img
                        src="https://images.unsplash.com/photo-1583743814966-8936f37f4ec2?auto=format&fit=crop&w=1000&q=85"
                        alt="Top negro">

                    <span class="product-tag">
                        Balenciaga
                    </span>

                </div>

                <div class="product-info">
                    <h4>Black Luxury Top</h4>
                    <p>Premium Collection</p>
                    <p class="price">$17,500 MXN</p>
                </div>

            </article>

        </div>

    </div>

</section>


<!-- =========================
     NOSOTROS
========================== -->

<section class="about" id="nosotros">

    <div class="about-grid">

        <div class="about-image">

            <img
                src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=1200&q=85"
                alt="Moda GMG">

        </div>

        <div class="about-content">

            <div class="eyebrow">
                Acerca de nosotros
            </div>

            <h2>
                Más que ropa.<br>
                Una identidad.
            </h2>

            <p>
                GMG nace como un concepto dedicado a quienes
                entienden la moda como una forma de expresión
                personal.
            </p>

            <p>
                Nuestro catálogo reúne prendas inspiradas en
                algunas de las casas de lujo más reconocidas
                dentro de una experiencia moderna y elegante.
            </p>

            <p>
                Creemos que una prenda no solamente se usa:
                comunica personalidad, seguridad y estilo.
            </p>

        </div>

    </div>

</section>


<!-- =========================
     REDES
========================== -->

<section class="social" id="redes">

    <div class="eyebrow">
        Mantente conectado
    </div>

    <h2>Sigue a GMG</h2>

    <div class="social-links">
        <a href="#">Instagram</a>
        <a href="#">TikTok</a>
        <a href="#">Facebook</a>
    </div>

</section>


<footer>

    <p>
        <strong>GMG</strong>
        <br><br>
        Luxury Fashion © 2026
    </p>

</footer>


<!-- =========================
     MODAL DEL PRODUCTO
========================== -->

<div class="modal" id="productModal">

    <div class="modal-box">

        <button class="close" onclick="closeProduct()">
            &times;
        </button>

        <div class="modal-image">

            <img id="modalImage" src="" alt="Producto">

        </div>

        <div class="modal-content">

            <span
                class="modal-brand"
                id="modalBrand">
            </span>

            <h2 id="modalName"></h2>

            <div
                class="modal-price"
                id="modalPrice">
            </div>

            <div
                class="quote"
                id="modalQuote">
            </div>

            <div class="details">

                <h3>Detalles de la prenda</h3>

                <ul id="modalDetails"></ul>

            </div>

            <button
                class="button"
                onclick="addCurrentProductToCart()">

                Agregar al carrito

            </button>

        </div>

    </div>

</div>


<!-- =========================
     INICIAR SESIÓN
========================== -->

<div class="modal" id="loginModal">

    <div class="modal-box login-box">

        <button class="close" onclick="closeLogin()">
            &times;
        </button>

        <div class="modal-content">

            <span class="modal-brand">
                GMG MEMBER
            </span>

            <h2>Iniciar sesión</h2>

            <p class="login-message">
                Ingresa a tu cuenta para continuar en GMG Luxury Fashion.
            </p>

            <form method="POST" action="/login">

                @csrf

                <div class="form-group">

                    <label>
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="correo@ejemplo.com"
                        required>

                </div>


                <div class="form-group">

                    <label>
                        Contraseña
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Tu contraseña"
                        required>

                </div>


                <button
                    type="submit"
                    class="button">

                    Iniciar sesión

                </button>

            </form>


            <p class="login-message">

                ¿No tienes una cuenta?

                <a
                    href="#"
                    onclick="openRegister(event)"
                    style="color:#99753a; font-weight:bold;">

                    Regístrate aquí

                </a>

            </p>

        </div>

    </div>

</div>



<!-- =========================
     REGISTRO DE USUARIO
========================== -->

<div class="modal" id="registerModal">

    <div class="modal-box login-box">

        <button
            class="close"
            onclick="closeRegister()">

            &times;

        </button>


        <div class="modal-content">

            <span class="modal-brand">
                GMG MEMBER
            </span>


            <h2>Crear cuenta</h2>


            <p class="login-message">
                Regístrate para formar parte de GMG Luxury Fashion.
            </p>


            <form
                method="POST"
                action="/register">

                @csrf


                <!-- NOMBRE -->

                <div class="form-group">

                    <label>
                        Nombre
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Tu nombre"
                        required>

                </div>


                <!-- CORREO -->

                <div class="form-group">

                    <label>
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="correo@ejemplo.com"
                        required>

                </div>


                <!-- CONTRASEÑA -->

                <div class="form-group">

                    <label>
                        Contraseña
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Crea una contraseña"
                        minlength="8"
                        required>

                </div>


                <!-- CONFIRMAR CONTRASEÑA -->

                <div class="form-group">

                    <label>
                        Confirmar contraseña
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Repite tu contraseña"
                        minlength="8"
                        required>

                </div>


                <button
                    type="submit"
                    class="button">

                    Crear cuenta

                </button>

            </form>


            <p class="login-message">

                ¿Ya tienes una cuenta?

                <a
                    href="#"
                    onclick="backToLogin(event)"
                    style="color:#99753a; font-weight:bold;">

                    Inicia sesión

                </a>

            </p>

        </div>

    </div>

</div>


<!-- =========================
     CARRITO
========================== -->


<div class="modal" id="cartModal">

    <div class="modal-box cart-box">

        <button class="close" onclick="closeCart()">
            &times;
        </button>

        <div class="modal-content">

            <span class="modal-brand">
                GMG SHOPPING BAG
            </span>

            <h2>Tu carrito</h2>

            <div id="cartItems"></div>

            <div class="cart-total">

                <span>Total</span>

                <strong id="cartTotal">
                    $0 MXN
                </strong>

            </div>

            <button
                class="button"
                onclick="finishPurchase()">

                Continuar compra

            </button>

        </div>

    </div>

</div>


<script>

    /* =========================
       PRODUCTOS
    ========================== */

    let currentProduct = null;

    let cart = JSON.parse(
        localStorage.getItem("gmgCart")
    ) || [];


    function formatMoney(number) {

        return "$" +
            Number(number).toLocaleString("es-MX") +
            " MXN";
    }


    function openProduct(
        brand,
        name,
        price,
        image,
        quote,
        details
    ) {

        currentProduct = {
            brand,
            name,
            price,
            image
        };

        document.getElementById("modalBrand")
            .textContent = brand;

        document.getElementById("modalName")
            .textContent = name;

        document.getElementById("modalPrice")
            .textContent = formatMoney(price);

        document.getElementById("modalImage")
            .src = image;

        document.getElementById("modalQuote")
            .textContent = quote;

        const list =
            document.getElementById("modalDetails");

        list.innerHTML = "";

        details.split("|").forEach(detail => {

            const li =
                document.createElement("li");

            li.textContent = detail;

            list.appendChild(li);

        });

        openModal("productModal");
    }


    function closeProduct() {

        closeModal("productModal");
    }


    /* =========================
       CARRITO
    ========================== */

    function addCurrentProductToCart() {

        if (!currentProduct) {
            return;
        }

        const existingProduct =
            cart.find(
                item =>
                    item.name === currentProduct.name &&
                    item.brand === currentProduct.brand
            );

        if (existingProduct) {

            existingProduct.quantity += 1;

        } else {

            cart.push({
                ...currentProduct,
                quantity: 1
            });

        }

        saveCart();

        closeProduct();

        openCart();
    }


    function saveCart() {

        localStorage.setItem(
            "gmgCart",
            JSON.stringify(cart)
        );

        updateCartCount();
    }


    function updateCartCount() {

        const totalProducts =
            cart.reduce(
                (total, item) =>
                    total + item.quantity,
                0
            );

        document.getElementById("cartCount")
            .textContent = totalProducts;
    }


    function openCart(event = null) {

        if (event) {
            event.preventDefault();
        }

        renderCart();

        openModal("cartModal");
    }


    function closeCart() {

        closeModal("cartModal");
    }


    function renderCart() {

        const container =
            document.getElementById("cartItems");

        container.innerHTML = "";

        if (cart.length === 0) {

            container.innerHTML =
                '<p class="empty-cart">Tu carrito está vacío.</p>';

            document.getElementById("cartTotal")
                .textContent = "$0 MXN";

            return;
        }

        let total = 0;

        cart.forEach((product, index) => {

            total +=
                product.price * product.quantity;

            const item =
                document.createElement("div");

            item.className = "cart-item";

            item.innerHTML = `

                <img
                    src="${product.image}"
                    alt="${product.name}">

                <div>

                    <small>
                        ${product.brand}
                    </small>

                    <h3>
                        ${product.name}
                    </h3>

                    <p>
                        ${formatMoney(product.price)}
                    </p>

                    <p>
                        Cantidad: ${product.quantity}
                    </p>

                </div>

                <button
                    class="remove-button"
                    onclick="removeFromCart(${index})"
                    title="Eliminar">

                    &times;

                </button>

            `;

            container.appendChild(item);

        });

        document.getElementById("cartTotal")
            .textContent = formatMoney(total);
    }


    function removeFromCart(index) {

        cart.splice(index, 1);

        saveCart();

        renderCart();
    }


    function finishPurchase() {

        if (cart.length === 0) {

            alert(
                "Agrega al menos una prenda antes de continuar."
            );

            return;
        }

        alert(
            "Tu carrito está listo. El siguiente paso será agregar el sistema de pago."
        );
    }


    /* =========================
       INICIO DE SESIÓN
    ========================== */

    function openLogin(event = null) {

        if (event) {
            event.preventDefault();
        }

        openModal("loginModal");
    }


    function closeLogin() {

        closeModal("loginModal");
    }


    function loginUser() {

        const email =
            document.getElementById("loginEmail")
                .value.trim();

        const password =
            document.getElementById("loginPassword")
                .value.trim();

        const result =
            document.getElementById("loginResult");

        if (email === "" || password === "") {

            result.textContent =
                "Ingresa tu correo y contraseña.";

            return;
        }

        result.textContent =
            "Formulario listo. El siguiente paso será conectarlo con Laravel para autenticar la cuenta.";
    }


    /* =========================
       CONTROL DE MODALES
    ========================== */

    function openModal(id) {

        document.getElementById(id)
            .classList.add("active");

        document.body.classList.add(
            "modal-open"
        );
    }


    function closeModal(id) {

        document.getElementById(id)
            .classList.remove("active");

        const activeModals =
            document.querySelectorAll(
                ".modal.active"
            );

        if (activeModals.length === 0) {

            document.body.classList.remove(
                "modal-open"
            );
        }
    }


    document.querySelectorAll(".modal")
        .forEach(modal => {

            modal.addEventListener(
                "click",
                function(event) {

                    if (event.target === modal) {

                        modal.classList.remove(
                            "active"
                        );

                        document.body.classList.remove(
                            "modal-open"
                        );
                    }
                }
            );

        });


    document.addEventListener(
        "keydown",
        function(event) {

            if (event.key === "Escape") {

                document.querySelectorAll(
                    ".modal.active"
                ).forEach(modal => {

                    modal.classList.remove(
                        "active"
                    );

                });

                document.body.classList.remove(
                    "modal-open"
                );
            }

        }
    );


    /* Mostrar cantidad guardada al cargar */
    updateCartCount();
    // ===============================
// ABRIR REGISTRO
// ===============================

function openRegister(event) {

    if (event) {
        event.preventDefault();
    }

    document.getElementById("loginModal")
        .classList.remove("active");

    document.getElementById("registerModal")
        .classList.add("active");

    document.body.classList.add("modal-open");
}


// ===============================
// CERRAR REGISTRO
// ===============================

function closeRegister() {

    document.getElementById("registerModal")
        .classList.remove("active");

    document.body.classList.remove("modal-open");
}


// ===============================
// REGRESAR AL LOGIN
// ===============================

function backToLogin(event) {

    if (event) {
        event.preventDefault();
    }

    document.getElementById("registerModal")
        .classList.remove("active");

    document.getElementById("loginModal")
        .classList.add("active");

    document.body.classList.add("modal-open");
}

</script>

</body>
</html>