<?php 
get_header();
?>

<main id="contact">
        <div class="main-visual">
            <div class="page-container">
                <h2 class="top-title font-70">
                    Contact
                </h2>
                <p class="font-16">Please select a contact point from the list below depending on the subject of your inquiry.</p>
            </div>
        </div>
        <div class="page-container">
            <div class="container">
                <section class="contact">
                    <h3 class="font-36 font-weight-bold mb-5">Please feel free to contact us</h3>
                    <p class="font-20">
                        We are’s Product Safety Support Program aims to deliver product safety information issued by manufacturers/importers directly to Mercari users who own the products in question (users who have listed or bought the item on ......).
                    </p>
                    <p class="font-12 faq-link">Learn more about
                        <a href="<?php echo get_site_url();?>/faq#faq-service">service FAQs</a>
                    </p>
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
					<div class="agree-checkbox">
                        <label class="font-12 agree-link mb-0" for="agree_check">
                            <input type="checkbox" id="agree_check" name="contact-agree">
                            <span></span>
                            I agree with the&nbsp;<a href="<?php echo get_site_url();?>/privacy">terms regarding use of personal information.</a>
                        </label>
                    </div>
                    <div class="red-btn mt-4">
                        <div class="ml-auto send-btn d-flex align-items-center justify-content-between">
                            <div class="font-16 font-weight-bold">Send</div>
                            <span class="font-20 font-weight-bold">&#62;</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

<?php get_footer(); ?>