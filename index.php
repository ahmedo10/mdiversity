<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDIVERSITY | Sécurité Médicale & Hygiène en Tunisie</title>
    <meta name="description" content="MDIVERSITY est votre partenaire de confiance dans la sécurité médicale en Tunisie. Spécialiste en hygiène des mains, stérilisation et désinfection pour professionnels.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://mdiversity.tn/">
    <meta property="og:title" content="MDIVERSITY | Sécurité Médicale & Hygiène">
    <meta property="og:description" content="Solutions professionnelles de désinfection et protection médicale en Tunisie.">
    <meta property="og:image" content="logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="MDIVERSITY | Sécurité Médicale">
    <meta property="twitter:description" content="Votre partenaire hygiène et sécurité en Tunisie.">
    
    <link rel="icon" type="image/png" href="logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        medical: {
                            dark: '#121212',
                            blue: '#1e4d8c',
                            light: '#f0f7ff',
                            accent: '#00a8e8',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style type="text/tailwindcss">
        @layer utilities {
            .transition-all-400 { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
        }
    </style>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- JSON-LD for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalOrganization",
      "name": "MDIVERSITY",
      "url": "http://mdiversity.tn/",
      "logo": "http://mdiversity.tn/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+21624709868",
        "contactType": "customer service",
        "areaServed": "TN",
        "availableLanguage": "French"
      },
      "description": "Spécialiste de l'hygiène et de la sécurité médicale en Tunisie. Fournisseur de solutions de désinfection, protection et matériel médical."
    }
    </script>
</head>
<body>

    <header class="fixed w-full top-0 z-[1000] bg-white/90 backdrop-blur-md transition-all duration-300 py-4 shadow-sm">
        <div class="max-w-[1300px] mx-auto px-6 sm:px-10">
            <nav class="flex justify-between items-center">
                <a href="#" class="h-12 sm:h-16">
                    <img src="LOGO MDIVERSITY.png" alt="MDIVERSITY Logo" class="h-full object-contain">
                </a>
                
                <!-- Desktop Navigation -->
                <ul class="hidden lg:flex gap-8 items-center text-sm font-bold uppercase tracking-wider text-medical-dark">
                    <li><a href="#home" class="hover:text-medical-accent transition-colors">Accueil</a></li>
                    <li><a href="#about" class="hover:text-medical-accent transition-colors">Engagement</a></li>
                    <li><a href="#products" class="hover:text-medical-accent transition-colors">Solutions</a></li>
                    <li><a href="#tips" class="hover:text-medical-accent transition-colors">Astuces</a></li>
                    <li><a href="#contact" class="hover:text-medical-accent transition-colors">Contact</a></li>
                </ul>

                <div class="flex items-center gap-4">
                    <a href="#contact" class="hidden sm:inline-block bg-medical-dark text-white px-8 py-3.5 text-[13px] font-bold uppercase tracking-widest hover:bg-medical-accent transition-all duration-300 transform hover:-translate-y-1 shadow-lg">
                        Nous Contacter
                    </a>
                    <!-- Mobile Menu Button -->
                    <button id="menu-btn" class="lg:hidden flex flex-col gap-1.5 z-[1001]">
                        <span class="w-7 h-0.5 bg-medical-dark transition-all duration-300 origin-center"></span>
                        <span class="w-7 h-0.5 bg-medical-dark transition-all duration-300"></span>
                        <span class="w-7 h-0.5 bg-medical-dark transition-all duration-300 origin-center"></span>
                    </button>
                </div>
            </nav>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="fixed inset-0 bg-white z-[1000] flex flex-col pt-32 px-10 gap-8 text-2xl font-extrabold uppercase tracking-widest translate-x-full transition-transform duration-500 ease-in-out lg:hidden">
            <div class="absolute top-8 left-10">
                <img src="LOGO MDIVERSITY.png" alt="MDIVERSITY" class="h-10">
            </div>
            <a href="#home" class="mobile-link border-b border-gray-100 pb-4 flex justify-between items-center group">
                <span>Accueil</span>
                <i class="fas fa-chevron-right text-sm text-medical-accent opacity-0 group-hover:opacity-100 transition-opacity"></i>
            </a>
            <a href="#about" class="mobile-link border-b border-gray-100 pb-4 flex justify-between items-center group">
                <span>Engagement</span>
                <i class="fas fa-chevron-right text-sm text-medical-accent opacity-0 group-hover:opacity-100 transition-opacity"></i>
            </a>
            <a href="#products" class="mobile-link border-b border-gray-100 pb-4 flex justify-between items-center group">
                <span>Solutions</span>
                <i class="fas fa-chevron-right text-sm text-medical-accent opacity-0 group-hover:opacity-100 transition-opacity"></i>
            </a>
            <a href="#tips" class="mobile-link border-b border-gray-100 pb-4 flex justify-between items-center group">
                <span>Astuces</span>
                <i class="fas fa-chevron-right text-sm text-medical-accent opacity-0 group-hover:opacity-100 transition-opacity"></i>
            </a>
            <a href="#contact" class="mobile-link border-b border-gray-100 pb-4 flex justify-between items-center group text-medical-blue">
                <span>Contact</span>
                <i class="fas fa-chevron-right text-sm text-medical-accent opacity-0 group-hover:opacity-100 transition-opacity"></i>
            </a>
            
            <div class="mt-auto pb-12 flex gap-6">
                <a href="https://www.facebook.com/mdiversity.tn" class="w-12 h-12 bg-gray-100 flex items-center justify-center rounded-full text-medical-blue">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://wa.me/21624709868" class="w-12 h-12 bg-gray-100 flex items-center justify-center rounded-full text-medical-blue">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="mailto:contact@mdiversity.com" class="w-12 h-12 bg-gray-100 flex items-center justify-center rounded-full text-medical-blue">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="home" class="relative h-screen flex items-center overflow-hidden pt-20">
            <div class="absolute inset-0 z-[-1] carousel">
                <div class="slide active absolute inset-0 bg-cover bg-center transition-opacity duration-[1500ms]" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('carousel/9.png');"></div>
                <div class="slide absolute inset-0 bg-cover bg-center opacity-0 transition-opacity duration-[1500ms]" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('carousel/10.png');"></div>
                <div class="slide absolute inset-0 bg-cover bg-center opacity-0 transition-opacity duration-[1500ms]" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('carousel/11.png');"></div>
            </div>
            <div class="max-w-[1300px] mx-auto px-6 sm:px-10 w-full text-white">
                <div class="max-w-[800px] animate-[fadeIn_1s_ease-out]">
                    <h1 class="text-5xl sm:text-7xl font-extrabold leading-tight mb-6 uppercase tracking-tight">
                        Protégeons <br class="hidden sm:block"> Ensemble l'Avenir
                    </h1>
                    <p class="text-lg sm:text-xl mb-10 opacity-90 max-w-[600px] font-medium leading-relaxed">
                        Votre partenaire de confiance en sécurité médicale et hygiène professionnelle en Tunisie.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-6">
                        <a href="#products" class="bg-medical-dark text-white text-center px-10 py-4 text-[13px] font-bold uppercase tracking-widest hover:bg-medical-accent transition-all duration-300 shadow-xl">
                            Découvrir nos articles
                        </a>
                        <a href="#about" class="bg-transparent border-2 border-white text-white text-center px-10 py-4 text-[13px] font-bold uppercase tracking-widest hover:bg-white hover:text-medical-dark transition-all duration-300">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-24 bg-white overflow-hidden" data-reveal>
            <div class="max-w-[1300px] mx-auto px-6 sm:px-10">
                <div class="grid lg:grid-cols-[1.2fr_1fr] gap-12 lg:gap-20 items-center">
                    <div class="relative group">
                        <div class="overflow-hidden shadow-2xl">
                            <img src="logo.png" alt="MDIVERSITY Logo" class="w-full bg-white p-12 object-contain group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="absolute -bottom-6 -right-6 sm:-bottom-10 sm:-right-10 bg-medical-blue text-white p-6 sm:p-10 shadow-2xl animate-bounce-subtle">
                            <span class="block text-4xl sm:text-5xl font-black leading-none">10+</span>
                            <span class="text-[10px] sm:text-xs uppercase tracking-[3px] font-bold">Années d'Excellence</span>
                        </div>
                    </div>
                    <div>
                        <div class="mb-12">
                            <h2 class="text-4xl sm:text-5xl font-extrabold text-medical-dark uppercase tracking-tight mb-6 relative inline-block after:content-[''] after:absolute after:-bottom-3 after:left-0 after:w-20 after:h-1.5 after:bg-medical-accent">
                                Notre Engagement
                            </h2>
                            <p class="text-lg text-gray-500 font-medium">Le partenaire privilégié des professionnels de santé en Tunisie.</p>
                        </div>
                        
                        <div class="space-y-8">
                            <div class="flex gap-6 group">
                                <div class="w-14 h-14 bg-medical-light flex items-center justify-center text-medical-accent text-2xl flex-shrink-0 group-hover:bg-medical-accent group-hover:text-white transition-all duration-300">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-medical-dark mb-2">Qui sommes-nous ?</h3>
                                    <p class="text-gray-500 leading-relaxed text-sm">Une entreprise dynamique dédiée à la fourniture de solutions médicales de haute qualité, alliant sécurité et performance.</p>
                                </div>
                            </div>
                            <div class="flex gap-6 group">
                                <div class="w-14 h-14 bg-medical-light flex items-center justify-center text-medical-accent text-2xl flex-shrink-0 group-hover:bg-medical-accent group-hover:text-white transition-all duration-300">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-medical-dark mb-2">Notre Mission</h3>
                                    <p class="text-gray-500 leading-relaxed text-sm">Garantir un environnement de soins sûr grâce à des produits certifiés conformes aux normes internationales.</p>
                                </div>
                            </div>
                            <div class="flex gap-6 group">
                                <div class="w-14 h-14 bg-medical-light flex items-center justify-center text-medical-accent text-2xl flex-shrink-0 group-hover:bg-medical-accent group-hover:text-white transition-all duration-300">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-medical-dark mb-2">Nos Valeurs</h3>
                                    <p class="text-gray-500 leading-relaxed text-sm">L'intégrité, la rigueur scientifique et le service client sont au cœur de chacune de nos actions.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#contact" class="inline-block mt-12 bg-medical-dark text-white px-10 py-4 text-[13px] font-bold uppercase tracking-widest hover:bg-medical-accent transition-all duration-300">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solutions Section -->
        <section id="products" class="py-24 bg-medical-light" data-reveal>
            <div class="max-w-[1300px] mx-auto px-6 sm:px-10">
                <div class="text-center mb-20">
                    <h2 class="text-4xl sm:text-5xl font-extrabold text-medical-dark uppercase tracking-tight mb-6 relative inline-block after:content-[''] after:absolute after:-bottom-3 after:left-1/2 after:-translate-x-1/2 after:w-20 after:h-1.5 after:bg-medical-accent">
                        Nos Solutions Médicales
                    </h2>
                    <p class="text-lg text-gray-500 font-medium max-w-2xl mx-auto">Une expertise reconnue dans deux pôles majeurs de la sécurité médicale.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-16">
                    <div class="bg-white p-10 border border-gray-100 hover:shadow-xl transition-all duration-500">
                        <h3 class="text-2xl font-bold text-medical-dark mb-6 flex items-center gap-4">
                            <span class="w-2 h-8 bg-medical-accent"></span>
                            Désinfectants Médicaux
                        </h3>
                        <ul class="space-y-4 text-gray-500 font-medium">
                            <li class="flex items-center gap-3"><i class="fas fa-plus text-medical-accent text-xs"></i> Désinfectants de surface</li>
                            <li class="flex items-center gap-3"><i class="fas fa-plus text-medical-accent text-xs"></i> Désinfectants pour les mains</li>
                            <li class="flex items-center gap-3"><i class="fas fa-plus text-medical-accent text-xs"></i> Désinfectants pour instruments</li>
                        </ul>
                    </div>
                    <div class="bg-white p-10 border border-gray-100 hover:shadow-xl transition-all duration-500">
                        <h3 class="text-2xl font-bold text-medical-dark mb-6 flex items-center gap-4">
                            <span class="w-2 h-8 bg-medical-accent"></span>
                            Protection Individuelle
                        </h3>
                        <ul class="space-y-4 text-gray-500 font-medium">
                            <li class="flex items-center gap-3"><i class="fas fa-plus text-medical-accent text-xs"></i> Blouses et vêtements médicaux</li>
                            <li class="flex items-center gap-3"><i class="fas fa-plus text-medical-accent text-xs"></i> Masques faciaux haute filtration</li>
                            <li class="flex items-center gap-3"><i class="fas fa-plus text-medical-accent text-xs"></i> Gants d'examen et chirurgicaux</li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php
                    $articles = [
                        ["1.png", "Bactinyl 5M PE", "Désinfection de l'instrumentation."],
                        ["2.png", "Gant Nitrile Bleu", "Protection optimale risques chimiques."],
                        ["3.png", "Combinaison Jetable", "Protection intégrale polypropylène."],
                        ["4.png", "Charlotte Jetable", "Hygiène de la chevelure."],
                        ["5.png", "Bactinyl DDSH", "Spray désinfection matériel."],
                        ["6.png", "Bactifree Spray", "Nettoyant bactéricide rapide."],
                        ["7.png", "Bactinyl Savon", "Pré-désinfection instrumentation."],
                        ["8.png", "Anioxyde 1000", "Désinfection haut niveau."]
                    ];
                    foreach ($articles as $art): ?>
                    <div class="group relative aspect-square overflow-hidden bg-gray-100">
                        <img src="articles mdiversity/<?= $art[0] ?>" alt="<?= $art[1] ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-medical-dark/90 via-medical-dark/40 to-transparent flex flex-col justify-end p-8 translate-y-6 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                            <h3 class="text-white text-xl font-bold mb-2 uppercase tracking-tight"><?= $art[1] ?></h3>
                            <p class="text-white/80 text-xs font-medium"><?= $art[2] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="text-center mt-16">
                    <a href="catalogue.pdf" target="_blank" class="bg-medical-dark text-white px-12 py-4 text-[13px] font-bold uppercase tracking-widest hover:bg-medical-accent transition-all duration-300 shadow-xl inline-block">
                        Consulter le Catalogue PDF
                    </a>
              <!-- Tips Carousel Section -->
        <section id="tips" class="py-24 bg-white overflow-hidden relative" data-reveal>
            <div class="max-w-[1300px] mx-auto px-6 sm:px-10">
                <div class="text-center mb-16">
                    <span class="text-medical-accent font-bold uppercase tracking-[0.3em] text-xs mb-4 block">Conseils d'Experts</span>
                    <h2 class="text-4xl sm:text-5xl font-extrabold text-medical-dark uppercase tracking-tight mb-6 relative inline-block after:content-[''] after:absolute after:-bottom-3 after:left-1/2 after:-translate-x-1/2 after:w-20 after:h-1.5 after:bg-medical-accent">
                        Astuces & Recommandations
                    </h2>
                    <p class="text-lg text-gray-500 font-medium max-w-2xl mx-auto">Optimisez votre sécurité sanitaire avec nos protocoles d'hygiène rigoureux et nos conseils de protection médicale.</p>
                </div>

                <!-- Swiper Container -->
                <div class="swiper tips-swiper pb-20">
                    <div class="swiper-wrapper">
                        <?php 
                        $tips = [
                            "Hygiène des mains : Protocoles de lavage",
                            "Désinfection des surfaces cliniques",
                            "Utilisation optimale des masques FFP2",
                            "Stérilisation de l'instrumentation",
                            "Protection des patients vulnérables",
                            "Nouveaux protocoles sanitaires 2026",
                            "Solutions MDIVERSITY : Guide Pratique"
                        ];
                        for($i=1; $i<=7; $i++): ?>
                        <div class="swiper-slide h-auto">
                            <div class="bg-gray-50 border border-gray-100 p-4 h-full flex flex-col hover:border-medical-accent transition-all duration-300 group">
                                <div class="aspect-[4/5] bg-white overflow-hidden mb-6 flex items-center justify-center p-2">
                                    <img src="pub1 blog/<?= $i ?>.png" alt="Astuce <?= $i ?> - <?= $tips[$i-1] ?>" class="max-w-full max-h-full object-contain transition-transform duration-700 group-hover:scale-105">
                                </div>
                                <div class="mt-auto">
                                    <span class="text-[10px] font-bold text-medical-accent uppercase tracking-widest block mb-2">Protocoles Médicaux</span>
                                    <h3 class="text-lg font-bold text-medical-dark uppercase tracking-tight leading-tight"><?= $tips[$i-1] ?></h3>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <!-- Swiper Pagination/Navigation -->
                    <div class="swiper-pagination !-bottom-2"></div>
                    <div class="swiper-button-next !text-medical-blue !right-0 after:!text-2xl"></div>
                    <div class="swiper-button-prev !text-medical-blue !left-0 after:!text-2xl"></div>
                </div>

                <div class="text-center mt-12">
                    <a href="#contact" class="inline-flex items-center gap-4 bg-medical-blue text-white px-10 py-5 text-[13px] font-bold uppercase tracking-widest hover:bg-medical-accent transition-all duration-300 shadow-xl">
                        Besoin d'un accompagnement personnalisé ?
                        <i class="fas fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Expertise Catalog Section -->
        <section id="stats" class="py-24 bg-white" data-reveal>
            <div class="max-w-[1300px] mx-auto px-6 sm:px-10">
                <div class="text-center mb-20">
                    <h2 class="text-4xl sm:text-5xl font-extrabold text-medical-dark uppercase tracking-tight mb-6 relative inline-block after:content-[''] after:absolute after:-bottom-3 after:left-1/2 after:-translate-x-1/2 after:w-20 after:h-1.5 after:bg-medical-accent">
                        Expertise & Produits
                    </h2>
                    <p class="text-lg text-gray-500 font-medium max-w-2xl mx-auto">Découvrez l'étendue de nos solutions professionnelles pour le secteur de la santé.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-10">
                    <div class="p-10 bg-white border border-gray-100 hover:border-medical-accent transition-all duration-500 group">
                        <div class="flex items-center gap-4 mb-8">
                            <i class="fas fa-shield-virus text-3xl text-medical-accent"></i>
                            <h4 class="text-xl font-extrabold text-medical-dark uppercase tracking-tight">Protection</h4>
                        </div>
                        <ul class="space-y-4 text-gray-500 font-medium text-sm">
                            <li class="border-b border-gray-50 pb-2">Bavettes & Blouses Haute Protection</li>
                            <li class="border-b border-gray-50 pb-2">Charlottes & Couvre-chaussures</li>
                            <li class="border-b border-gray-50 pb-2">Gants Nitrile & Latex Certifiés</li>
                            <li>Draps d'examen Haute Résistance</li>
                        </ul>
                    </div>
                    <div class="p-10 bg-white border border-gray-100 hover:border-medical-accent transition-all duration-500 group">
                        <div class="flex items-center gap-4 mb-8">
                            <i class="fas fa-hand-sparkles text-3xl text-medical-accent"></i>
                            <h4 class="text-xl font-extrabold text-medical-dark uppercase tracking-tight">Hygiène</h4>
                        </div>
                        <ul class="space-y-4 text-gray-500 font-medium text-sm">
                            <li class="border-b border-gray-50 pb-2">Gel Hydroalcoolique 70% Alcool</li>
                            <li class="border-b border-gray-50 pb-2">Lingettes Antibactériennes (72pcs)</li>
                            <li class="border-b border-gray-50 pb-2">Savons Antiseptiques & Chirurgicaux</li>
                            <li>Solutions de Lavage des Mains</li>
                        </ul>
                    </div>
                    <div class="p-10 bg-white border border-gray-100 hover:border-medical-accent transition-all duration-500 group">
                        <div class="flex items-center gap-4 mb-8">
                            <i class="fas fa-microscope text-3xl text-medical-accent"></i>
                            <h4 class="text-xl font-extrabold text-medical-dark uppercase tracking-tight">Désinfection</h4>
                        </div>
                        <ul class="space-y-4 text-gray-500 font-medium text-sm">
                            <li class="border-b border-gray-50 pb-2">Désinfectants pour Instruments</li>
                            <li class="border-b border-gray-50 pb-2">Désinfectants Sols & Surfaces</li>
                            <li class="border-b border-gray-50 pb-2">Désinfectants Surfaces Hautes</li>
                            <li>Essuie-tout & Microfibres</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 bg-gray-50" data-reveal>
            <div class="max-w-[1300px] mx-auto px-6 sm:px-10">
                <div class="text-center mb-20">
                    <h2 class="text-4xl sm:text-5xl font-extrabold text-medical-dark uppercase tracking-tight mb-6 relative inline-block after:content-[''] after:absolute after:-bottom-3 after:left-1/2 after:-translate-x-1/2 after:w-20 after:h-1.5 after:bg-medical-accent">
                        Contactez-nous
                    </h2>
                    <p class="text-lg text-gray-500 font-medium max-w-2xl mx-auto">Besoin d'un devis ou d'une information ? Notre équipe est à votre écoute.</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <a href="tel:+21624709868" class="bg-white p-10 text-center border border-gray-100 hover:border-medical-accent hover:-translate-y-2 transition-all duration-500 shadow-sm flex flex-col items-center group">
                        <i class="fas fa-phone-alt text-4xl text-medical-accent mb-6"></i>
                        <h4 class="text-lg font-bold text-medical-dark mb-2">Téléphone</h4>
                        <p class="text-gray-500 text-sm font-medium">+216 24 709 868</p>
                    </a>
                    <a href="https://wa.me/21624709868" target="_blank" class="bg-white p-10 text-center border border-gray-100 hover:border-medical-accent hover:-translate-y-2 transition-all duration-500 shadow-sm flex flex-col items-center group">
                        <i class="fab fa-whatsapp text-4xl text-medical-accent mb-6"></i>
                        <h4 class="text-lg font-bold text-medical-dark mb-2">WhatsApp</h4>
                        <p class="text-gray-500 text-sm font-medium">Discuter en direct</p>
                    </a>
                    <a href="mailto:contact@mdiversity.com" class="bg-white p-10 text-center border border-gray-100 hover:border-medical-accent hover:-translate-y-2 transition-all duration-500 shadow-sm flex flex-col items-center group">
                        <i class="fas fa-envelope text-4xl text-medical-accent mb-6"></i>
                        <h4 class="text-lg font-bold text-medical-dark mb-2">Email</h4>
                        <p class="text-gray-500 text-sm font-medium">contact@mdiversity.com</p>
                    </a>
                    <a href="https://www.facebook.com/mdiversity.tn" target="_blank" class="bg-white p-10 text-center border border-gray-100 hover:border-medical-accent hover:-translate-y-2 transition-all duration-500 shadow-sm flex flex-col items-center group">
                        <i class="fab fa-facebook-f text-4xl text-medical-accent mb-6"></i>
                        <h4 class="text-lg font-bold text-medical-dark mb-2">Facebook</h4>
                        <p class="text-gray-500 text-sm font-medium">@mdiversity.tn</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-medical-blue text-white pt-24 pb-12">
        <div class="max-w-[1300px] mx-auto px-6 sm:px-10">
            <div class="grid md:grid-cols-[2fr_1fr_1fr] gap-12 lg:gap-20 mb-20">
                <div class="max-w-md">
                    <img src="LOGO CARRE FOOTER.png" alt="MDIVERSITY" class="h-20 mb-8 brightness-0 invert">
                    <p class="text-white/70 text-sm leading-relaxed mb-8 font-medium">
                        L'excellence en sécurité médicale et hygiène professionnelle. Votre partenaire de confiance en Tunisie pour des solutions innovantes et certifiées.
                    </p>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/mdiversity.tn" target="_blank" class="w-10 h-10 bg-white/10 flex items-center justify-center rounded-full hover:bg-medical-accent transition-all duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 flex items-center justify-center rounded-full hover:bg-medical-accent transition-all duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 flex items-center justify-center rounded-full hover:bg-medical-accent transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-extrabold uppercase tracking-widest mb-8">Navigation</h4>
                    <ul class="space-y-4 text-white/70 font-medium text-sm">
                        <li><a href="#home" class="hover:text-medical-accent hover:translate-x-2 inline-block transition-all duration-300">Accueil</a></li>
                        <li><a href="#about" class="hover:text-medical-accent hover:translate-x-2 inline-block transition-all duration-300">Engagement</a></li>
                        <li><a href="#products" class="hover:text-medical-accent hover:translate-x-2 inline-block transition-all duration-300">Solutions</a></li>
                        <li><a href="#contact" class="hover:text-medical-accent hover:translate-x-2 inline-block transition-all duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-extrabold uppercase tracking-widest mb-8">Expertise</h4>
                    <ul class="space-y-4 text-white/70 font-medium text-sm">
                        <li class="hover:text-white transition-colors cursor-default">Désinfection Chirurgicale</li>
                        <li class="hover:text-white transition-colors cursor-default">Protection Individuelle</li>
                        <li class="hover:text-white transition-colors cursor-default">Hygiène des Mains</li>
                        <li class="hover:text-white transition-colors cursor-default">Matériel Médical</li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-xs text-white/40 font-bold tracking-widest uppercase">&copy; 2026 MDIVERSITY. Tous droits réservés.</p>
                <div class="flex gap-8 text-[10px] font-bold uppercase tracking-widest text-white/40">
                    <a href="#" class="hover:text-white transition-colors">Mentions Légales</a>
                    <a href="#" class="hover:text-white transition-colors">Politique de Confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 bg-medical-accent text-white rounded-full shadow-2xl flex items-center justify-center opacity-0 translate-y-10 transition-all duration-500 z-50 hover:bg-medical-dark group">
        <i class="fas fa-arrow-up group-hover:-translate-y-1 transition-transform"></i>
    </button>

    <script>
        // Carousel Logic
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        
        function nextSlide() {
            if (slides.length === 0) return;
            slides[currentSlide].classList.remove('active');
            slides[currentSlide].classList.add('opacity-0');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
            slides[currentSlide].classList.remove('opacity-0');
        }
        
        setInterval(nextSlide, 5000);

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('py-2', 'shadow-md');
                header.classList.remove('py-4', 'shadow-sm');
            } else {
                header.classList.add('py-4', 'shadow-sm');
                header.classList.remove('py-2', 'shadow-md');
            }
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuSpans = menuBtn.querySelectorAll('span');

        menuBtn.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('translate-x-0');
            
            if (isOpen) {
                mobileMenu.classList.replace('translate-x-0', 'translate-x-full');
                menuSpans[0].classList.remove('rotate-45', 'translate-y-2');
                menuSpans[1].classList.remove('opacity-0');
                menuSpans[2].classList.remove('-rotate-45', '-translate-y-2');
                document.body.style.overflow = '';
            } else {
                mobileMenu.classList.replace('translate-x-full', 'translate-x-0');
                menuSpans[0].classList.add('rotate-45', 'translate-y-2');
                menuSpans[1].classList.add('opacity-0');
                menuSpans[2].classList.add('-rotate-45', '-translate-y-2');
                document.body.style.overflow = 'hidden';
            }
        });

        // Close menu on link click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.replace('translate-x-0', 'translate-x-full');
                menuSpans[0].classList.remove('rotate-45', 'translate-y-2');
                menuSpans[1].classList.remove('opacity-0');
                menuSpans[2].classList.remove('-rotate-45', '-translate-y-2');
                document.body.style.overflow = '';
            });
        });


        // Back to top logic
        const backToTop = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.classList.replace('opacity-0', 'opacity-100');
                backToTop.classList.replace('translate-y-10', 'translate-y-0');
            } else {
                backToTop.classList.replace('opacity-100', 'opacity-0');
                backToTop.classList.replace('translate-y-0', 'translate-y-10');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Reveal Logic
        const revealElements = document.querySelectorAll('[data-reveal]');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 1s cubic-bezier(0.4, 0, 0.2, 1)';
            revealObserver.observe(el);
        });

        // Swiper Initialization
        const swiper = new Swiper('.tips-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            }
        });
    </script>
</body>
</html>
