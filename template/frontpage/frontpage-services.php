<section class="section-padding" style="background-color: #0d283b;">
    <div class="ast-container">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div id="header" class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">
                    Our <span class="text-white">Services</span>
                </h2>
                <p class="text-lg text-white max-w-4xl mx-auto leading-relaxed">
                    At ProCare, we offer a comprehensive range of services designed to meet the unique needs of the laundry industry. Our expertise ensures that your operations run smoothly and efficiently.
                </p>
            </div>

            <!-- Services Grid -->



            <?php

            set_query_var('per_paged', 4);
            get_template_part('template/services/custom-loop', 'services');

            $services_page = get_page_by_path('services');
            ?>

            <!-- CTA Button -->
            <div id="cta-button" class="text-center">
                <a href="<?php echo get_permalink($services_page); ?>" class="main-button group">
                    View all services
                    <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6l6 6-6 6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Parallax Scroll Effect Script -->
<script>
    window.addEventListener('scroll', function() {
        const scrollY = window.scrollY;

        // Fade in header
        const header = document.getElementById('header');
        if (header.getBoundingClientRect().top < window.innerHeight * 0.8) {
            header.classList.add('animate-fade-in');
        }

        // Fade in and scale-in each service card
        const serviceCards = document.querySelectorAll('.interactive-card');
        serviceCards.forEach((card, index) => {
            if (card.getBoundingClientRect().top < window.innerHeight * 0.8) {
                card.classList.add('animate-scale-in');
            }
        });

        // Fade in CTA button
        const ctaButton = document.getElementById('cta-button');
        if (ctaButton.getBoundingClientRect().top < window.innerHeight * 0.8) {
            ctaButton.classList.add('animate-fade-in');
        }
    });
</script>