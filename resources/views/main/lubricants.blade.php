<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass V Group Inc. - Products</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" href="assets/MVG Circle 1001 Logo PNG 2 - RGB.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="/" class="nav__logo">
                    <img src="assets/MVG Circle 1001 Logo PNG 2 - RGB.png" alt="Mass V Group Inc. Logo">
                    <h1>MVG Circle 1001</h1>
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="/" class="nav__link">Home</a></li>
                    <li><a href="/products" class="nav__link">Batteries</a></li>
                    <li class="dropdown__item">
                        <div class="nav__link">
                            <a href="/lubricants">Lubricants</a>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="/lubricants#samic-catalog" class="dropdown__link">
                                    <i class="ri-store-3-line"></i> SAMIC Catalog
                                </a>
                            </li>

                            <li>
                                <a href="/lubricants#samic-product-list" class="dropdown__link">
                                    <i class="ri-pages-line"></i> SAMIC Product List
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li><a target="_blank" href="https://www.facebook.com/massvgroup/" class="nav__link"
                            id="fb-logos"><img src="assets/MVGFB.png"></a></li>
                    <li><a target="_blank" href="https://samiclubricants.com/" class="nav__link" id="fb-logos"><img
                                src="assets/MFFB.png"></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/SamicLubricantsPH" class="nav__link"
                            id="fb-logos"><img src="assets/SamicFB.png"></a></li>
                    <li><a target="_blank" href="https://samiclubricants.com/" class="nav__link"><img
                                src="assets/Samic- Logo- Blue (Edited 3).png"></a></li>
                    </li>
                    <li id="message"><a href="/contact" class="nav__link">Message Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="lubricants">
        <img src="assets/samic-collection.png" alt="">
        <h1>SAMIC Lubricants</h1>
        <h3>Lubricants Specialist in Automotive, Marine, Industrial and Commercial</h3>
        <ul>
            <li>From U.A.E.</li>
            <li>Finest base oil procured from Exxon Mobil, Korean and European Refineries</li>
            <li>Superior additives from Afton, Chevron, Infinium and Lubrizol</li>
        </ul>
    </section>

    <section class="catalog">
        <h1 class="catalog-title">SAMIC Catalog</h1>
        <div class="embed-container" id="catalog">
            <embed id="samic-catalog" src="samic-catalog.pdf" type="application/pdf">
        </div>
        <h1 class="catalog-title">SAMIC Product List</h1>
        <div class="embed-container" id="list">
            <embed id="samic-product-list" src="samic-product-list.pdf" type="application/pdf">
        </div>
    </section>

    <footer>

    </footer>
    <script src="main.js"></script>
</body>

</html>
