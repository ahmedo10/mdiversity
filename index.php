<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDIVERSITY | Sécurité Médicale & Hygiène en Tunisie</title>
    <meta name="description" content="MDIVERSITY est votre partenaire de confiance dans la sécurité médicale en Tunisie. Hygiène des mains, stérilisation et désinfection.">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <img src="LOGO MDIVERSITY.png" alt="MDIVERSITY Logo">
                </a>
                <ul class="nav-links">
                    <li><a href="#home">Accueil</a></li>
                    <li><a href="#about">Notre Engagement</a></li>
                    <li><a href="#products">Solutions</a></li>
                    <li><a href="#tips">Astuces</a></li>
                    <li><a href="#stats">Expertise</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="mobile-menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="#contact" class="btn-contact nav-cta">Nous Contacter</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="carousel">
                <div class="slide active" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('carousel/9.png');"></div>
                <div class="slide" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('carousel/10.png');"></div>
                <div class="slide" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('carousel/11.png');"></div>
            </div>
            <div class="container">
                <div class="hero-content">
                    <h1>Protégeons Ensemble l'Avenir</h1>
                    <p>Votre partenaire de confiance en sécurité médicale et hygiène professionnelle en Tunisie.</p>
                    <div class="hero-btns">
                        <a href="#products" class="btn-contact">Découvrir nos articles</a>
                        <a href="#about" class="btn-contact btn-outline">En savoir plus</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about-section" data-reveal>
            <div class="container">
                <div class="about-grid">
                    <div class="about-image">
                        <img src="logo.png" alt="MDIVERSITY Logo" style="object-fit: contain; background: var(--white); padding: 20px;">
                        <div class="about-badge">
                            <span class="number">10+</span>
                            <span class="text">Années d'Excellence</span>
                        </div>
                    </div>
                    <div class="about-content">
                        <div class="section-title" style="text-align: left; margin-bottom: 40px;">
                            <h2>Notre Engagement</h2>
                            <p style="margin-left: 0;">Le partenaire privilégié des professionnels de santé en Tunisie.</p>
                        </div>
                        <div class="about-item">
                            <div class="about-icon"><i class="fas fa-check-circle"></i></div>
                            <div class="about-text">
                                <h3>Qui sommes-nous ?</h3>
                                <p>Une entreprise dynamique dédiée à la fourniture de solutions médicales de haute qualité, alliant sécurité et performance.</p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="about-icon"><i class="fas fa-shield-alt"></i></div>
                            <div class="about-text">
                                <h3>Notre Mission</h3>
                                <p>Garantir un environnement de soins sûr grâce à des produits certifiés conformes aux normes internationales les plus strictes.</p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="about-icon"><i class="fas fa-award"></i></div>
                            <div class="about-text">
                                <h3>Nos Valeurs</h3>
                                <p>L'intégrité, la rigueur scientifique et le service client sont au cœur de chacune de nos actions quotidiennes.</p>
                            </div>
                        </div>
                        <a href="#contact" class="btn-contact" style="margin-top: 30px;">En savoir plus</a>
                    </div>
                </div>
            </div>
        </section>


        <section id="products" style="background: var(--blue-light);" data-reveal>
            <div class="container">
                <div class="section-title">
                    <h2>Nos Solutions Médicales</h2>
                    <p>Une expertise reconnue dans deux pôles majeurs de la sécurité médicale.</p>
                </div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 30px; margin-bottom: 50px;">
                    <div style="background: white; padding: 40px; border: 1px solid var(--gray-200);">
                        <h3 style="margin-bottom: 20px; color: var(--primary);">Désinfectants Médicaux</h3>
                        <ul style="color: var(--text-muted);">
                            <li style="margin-bottom: 10px;"><i class="fas fa-plus" style="color: #00a8e8; margin-right: 10px;"></i> Désinfectants de surface</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-plus" style="color: #00a8e8; margin-right: 10px;"></i> Désinfectants pour les mains</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-plus" style="color: #00a8e8; margin-right: 10px;"></i> Désinfectants pour instruments</li>
                        </ul>
                    </div>
                    <div style="background: white; padding: 40px; border: 1px solid var(--gray-200);">
                        <h3 style="margin-bottom: 20px; color: var(--primary);">Protection Individuelle</h3>
                        <ul style="color: var(--text-muted);">
                            <li style="margin-bottom: 10px;"><i class="fas fa-plus" style="color: #00a8e8; margin-right: 10px;"></i> Blouses et vêtements médicaux</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-plus" style="color: #00a8e8; margin-right: 10px;"></i> Masques faciaux haute filtration</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-plus" style="color: #00a8e8; margin-right: 10px;"></i> Gants d'examen et chirurgicaux</li>
                        </ul>
                    </div>
                </div>
                <div class="products-grid">
                    <div class="product-item">
                        <img src="articles mdiversity/1.png" alt="Bactinyl 5M PE">
                        <div class="product-overlay">
                            <h3>Bactinyl 5M PE</h3>
                            <p>Désinfection de l'instrumentation médico-chirurgicale.</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="articles mdiversity/2.png" alt="Gant Nitrile Bleu">
                        <div class="product-overlay">
                            <h3>Gant Nitrile Bleu</h3>
                            <p>Protection optimale contre les risques chimiques.</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="articles mdiversity/3.png" alt="Combinaison Jetable">
                        <div class="product-overlay">
                            <h3>Combinaison Jetable</h3>
                            <p>Protection intégrale en polypropylène non tissé.</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="articles mdiversity/4.png" alt="Charlotte Jetable">
                        <div class="product-overlay">
                            <h3>Charlotte Jetable</h3>
                            <p>Hygiène et protection de la chevelure à usage unique.</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="articles mdiversity/5.png" alt="Bactinyl DDSH">
                        <div class="product-overlay">
                            <h3>Bactinyl DDSH</h3>
                            <p>Spray de désinfection pour matériel médical.</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="articles mdiversity/6.png" alt="Bactifree Spray">
                        <div class="product-overlay">
                            <h3>Bactifree Spray</h3>
                            <p>Nettoyant détergent bactéricide ultra-rapide.</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="articles mdiversity/7.png" alt="Bactinyl Savon Liquide">
                        <div class="product-overlay">
                            <h3>Bactinyl Savon Liquide</h3>
                            <p>Pré-désinfection de l'instrumentation chirurgicale.</p>
                        </div>
                    </div>
                    <div class="product-item">
                        <img src="articles mdiversity/8.png" alt="Anioxyde 1000 LD">
                        <div class="product-overlay">
                            <h3>Anioxyde 1000 LD</h3>
                            <p>Désinfection de haut niveau thermosensible.</p>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 60px;">
                    <a href="catalogue.pdf" target="_blank" class="btn-contact">Consulter le Catalogue PDF</a>
                </div>
            </div>
        </section>

        <!-- Tips & Recommendations Section -->
        <section id="tips" class="tips-section dark-section" data-reveal>
            <div class="container">
                <div class="section-title">
                    <h2>Astuces & Recommandations</h2>
                    <p>Découvrez nos conseils pour une hygiène et une protection optimales au quotidien.</p>
                </div>
                <div class="tips-grid">
                    <div class="tip-item">
                        <img src="pub1 blog/1.png" alt="Astuce 1">
                    </div>
                    <div class="tip-item">
                        <img src="pub1 blog/2.png" alt="Astuce 2">
                    </div>
                    <div class="tip-item">
                        <img src="pub1 blog/3.png" alt="Astuce 3">
                    </div>
                    <div class="tip-item">
                        <img src="pub1 blog/4.png" alt="Astuce 4">
                    </div>
                    <div class="tip-item">
                        <img src="pub1 blog/5.png" alt="Astuce 5">
                    </div>
                    <div class="tip-item">
                        <img src="pub1 blog/6.png" alt="Astuce 6">
                    </div>
                </div>
                <div style="text-align: center; margin-top: 50px;">
                    <a href="#contact" class="btn-contact">Demander des conseils personnalisés</a>
                </div>
            </div>
        </section>

        <!-- Catalog Section -->
        <section id="stats" style="background: var(--white);" data-reveal>
            <div class="container">
                <div class="section-title">
                    <h2>Expertise & Produits</h2>
                    <p>Découvrez l'étendue de nos solutions professionnelles pour le secteur de la santé.</p>
                </div>
                <div class="catalog-container">
                    <div class="catalog-card">
                        <div class="catalog-header">
                            <i class="fas fa-shield-virus"></i>
                            <h4>Protection</h4>
                        </div>
                        <ul>
                            <li>Bavettes & Blouses Haute Protection</li>
                            <li>Charlottes & Couvre-chaussures</li>
                            <li>Gants Nitrile & Latex Certifiés</li>
                            <li>Draps d'examen Haute Résistance</li>
                        </ul>
                    </div>
                    <div class="catalog-card">
                        <div class="catalog-header">
                            <i class="fas fa-hand-sparkles"></i>
                            <h4>Hygiène</h4>
                        </div>
                        <ul>
                            <li>Gel Hydroalcoolique 70% Alcool</li>
                            <li>Lingettes Antibactériennes (72pcs)</li>
                            <li>Savons Antiseptiques & Chirurgicaux</li>
                            <li>Solutions de Lavage des Mains</li>
                        </ul>
                    </div>
                    <div class="catalog-card">
                        <div class="catalog-header">
                            <i class="fas fa-microscope"></i>
                            <h4>Désinfection</h4>
                        </div>
                        <ul>
                            <li>Désinfectants pour Instruments</li>
                            <li>Désinfectants Sols & Surfaces</li>
                            <li>Désinfectants Surfaces Hautes</li>
                            <li>Essuie-tout & Microfibres</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>



        <!-- Contact Section -->
        <section id="contact" data-reveal>
            <div class="container">
                <div class="section-title">
                    <h2>Contactez-nous</h2>
                    <p>Besoin d'un devis ou d'une information ? Notre équipe est à votre écoute.</p>
                </div>
                <div class="contact-grid">
                    <a href="tel:+21624709868" class="contact-card">
                        <i class="fas fa-phone-alt"></i>
                        <h4>Téléphone</h4>
                        <p>+216 24 709 868</p>
                    </a>
                    <a href="https://wa.me/21624709868" class="contact-card" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        <h4>WhatsApp</h4>
                        <p>Discuter en direct</p>
                    </a>
                    <a href="mailto:contact@mdiversity.com" class="contact-card">
                        <i class="fas fa-envelope"></i>
                        <h4>Email</h4>
                        <p>contact@mdiversity.com</p>
                    </a>
                    <a href="https://www.facebook.com/mdiversity.tn" class="contact-card" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                        <h4>Facebook</h4>
                        <p>@mdiversity.tn</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <img src="LOGO CARRE FOOTER.png" alt="MDIVERSITY" class="footer-logo">
                    <p>L'excellence en sécurité médicale et hygiène professionnelle. Votre partenaire de confiance en Tunisie pour des solutions innovantes et certifiées.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-nav">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#home">Accueil</a></li>
                        <li><a href="#about">Notre Engagement</a></li>
                        <li><a href="#products">Solutions</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-expertise">
                    <h4>Expertise</h4>
                    <ul>
                        <li>Désinfection Chirurgicale</li>
                        <li>Protection Individuelle</li>
                        <li>Hygiène des Mains</li>
                        <li>Matériel Médical</li>
                    </ul>
                </div>

            </div>
            <div class="footer-bottom">
                <div class="footer-copy">
                    <p>&copy; 2026 MDIVERSITY. Tous droits réservés.</p>
                </div>
                <div class="footer-legal">
                    <a href="#">Mentions Légales</a>
                    <a href="#">Politique de Confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Carousel Logic
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        
        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }
        
        setInterval(nextSlide, 5000);

        // Simple scroll effect for header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth scroll for nav links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Reveal on Scroll Logic
        const revealElements = document.querySelectorAll('[data-reveal]');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(el => revealObserver.observe(el));

        // Mobile Menu Toggle
        const mobileBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');

        mobileBtn.addEventListener('click', () => {
            mobileBtn.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Close menu on link click
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                mobileBtn.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    </script>
</body>
</html>
