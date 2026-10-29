<?php
$post_id = isset($args['post_id']) ? $args['post_id'] : get_the_ID();
$faqs = get_field('faqs_product', $post_id);

if ($faqs) :
    $i = 0;
?>
    <section id="accordion-collapse"
        data-accordion="collapse"
        class="rounded-base border border-default overflow-hidden shadow-xs">
        <?php foreach ($faqs as $faq) :
            $i++;
            $faq_id = is_object($faq) ? $faq->ID : $faq;
        ?>
            <div class="faq-item bg-secondary/30 rounded-xl border border-solid border-border mb-4">
                <h3 id="accordion-collapse-heading-<?php echo esc_attr($i); ?>" style="margin-bottom: 0;">
                    <style>
                        .accordion-button:hover,
                        .accordion-button:focus {
                            color: #000000;
                        }
                    </style>
                    <button type="button"
                        class="accordion-button flex items-center justify-between w-full p-5 font-medium text-base bg-secondary/30 hover:bg-secondary/30 rounded-xl px-6 gap-3 hover:border-transparent focus:bg-secondary/30 text-black hover:underline"
                        data-accordion-target="#accordion-collapse-body-<?php echo esc_attr($i); ?>"
                        aria-expanded="false"
                        aria-controls="accordion-collapse-body-<?php echo esc_attr($i); ?>">

                        <span><?php echo get_the_title($faq_id); ?></span>

                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                d="m5 15 7-7 7 7" />
                        </svg>
                    </button>
                </h3>

                <div id="accordion-collapse-body-<?php echo esc_attr($i); ?>"
                    class="hidden border-b-default border-x-0 border-t-0"
                    aria-labelledby="accordion-collapse-heading-<?php echo esc_attr($i); ?>">

                    <style>
                        .faq-answer p {
                            margin-bottom: 0;
                        }
                    </style>

                    <div class="faq-answer p-4 md:p-5 text-body leading-relaxed">
                        <?php
                        echo apply_filters('the_content', get_post_field('post_content', $faq_id));
                        ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

<?php endif; ?>