    <footer>
        <div class="page-container">
            <div class="links-banners">
                <div class="row">
                    <div class="col-md-4">
                        <a href=""><img src="<?php echo get_template_directory_uri()?>/image/linkedin.png" alt=""></a>
                    </div>
                    <div class="col-md-4">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>/image/wantedly.png" alt=""></a>
                    </div>
                    <div class="col-md-4">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>/image/note.png" alt=""></a>
                    </div>
                </div>
            </div>
            <?php if(isJA()) :?>
                <div class="footer-menu">
                    <div class="row">
                        <div class="col-md-4 my-2">
                            <div class="row">
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/ja/about-jp">About</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/ja/about-jp#vision">Vision</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/ja/about-jp#values">Value</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/ja/about-jp#members">People</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/ja/about-jp#company">Company</a></p>
                                </div>
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/ja/news">News</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-2">
                            <div class="row">
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/ja/service-jp">Service</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/ja/service-jp#what-we-do">What we do</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/ja/service-jp#our-point">Our Unique Point</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/ja/service-jp#our-works">Our Works</a></p>
                                </div>
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/ja/careers">careers</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-2">
                            <div class="row">
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/faq">FAQ</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/faq#faq-service">Service</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/faq#faq-contact">Inquiry</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/faq#faq-recruitment">Recruitment</a></p>
                                </div>
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/contact">Contact</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else :?>
                <div class="footer-menu">
                    <div class="row">
                        <div class="col-md-4 my-2">
                            <div class="row">
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/about">About</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/about#vision">Vision</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/about#values">Value</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/about#members">People</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/about#company">Company</a></p>
                                </div>
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/news">News</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-2">
                            <div class="row">
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/service">Service</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/service#what-we-do">What we do</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/service#our-point">Our Unique Point</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/service#our-works">Our Works</a></p>
                                </div>
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/careers">careers</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-2">
                            <div class="row">
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/faq">FAQ</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/faq#faq-service">Service</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/faq#faq-contact">Inquiry</a></p>
                                    <p class="font-14 under-link"><a href="<?php echo get_site_url();?>/faq#faq-recruitment">Recruitment</a></p>
                                </div>
                                <div class="col-6">
                                    <p class="font-18 font-weight-bold mb-4"><a href="<?php echo get_site_url();?>/contact">Contact</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            
            <div class="my-4 d-md-flex align-items-center justify-content-between">
                <div class="d-md-flex">
                    <p class="font-12 under-link mr-md-3"><a href="<?php echo get_site_url();?>/privacy">Privacy Policy</a></p>
                    <p class="font-12 under-link mr-md-3"><a href="<?php echo get_site_url();?>/privacy">Basic Policy on Security Management of Personal Data</a></p>
                    <p class="font-12 under-link mr-md-4"><a href="<?php echo get_site_url();?>/privacy">Basic Policy on Antisocial Forces</a></p>
                    <p class="font-12">© 2021 CyberneX Co., Ltd.</p>
                </div>
                <div class="top-btn text-right mb-3">
                    <a href="#main" class="smoothScroll"><img src="<?php echo get_template_directory_uri()?>/image/top-btn.png" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        $(function() {
            // MENU
            $('.nav-link').on('click', function() {
                $(".navbar-collapse").collapse('hide');
            });
          	
          	// Contact
          	if ($('#agree_check').is(':checked')) {
                $('.send-btn').removeClass('die-btn');
            } else {
              $('.send-btn').addClass('die-btn');
            }
          	$('#agree_check').on('change', function() {
          		if ($('#agree_check').is(':checked')) {
                    $('.send-btn').removeClass('die-btn');
                } else {
                    $('.send-btn').addClass('die-btn');
                }
          	});
                
          	$('.send-btn').on('click', function() {
              if (!($(".send-btn").hasClass("die-btn"))) {
              	$('.wpcf7-form').submit();
              }
          	});
        });

        $(function() {
        
            $('#about .member-photo').on('click', function() {
                var member_id = parseInt($(this).attr('member-id'));
                var member_name = $(this).find('div').html();
                var member_job = $(this).find('p').html();
                var member_detail = $(this).find('article').html();
                $('.member-modal .member_name').html(member_name);
                $('.member-modal .member_job').html(member_job);
                $('.member-modal .member_detail').html(member_detail);
                $('.member-modal-img img').attr('src', '<?php echo get_template_directory_uri()?>/image/member' + member_id + '.jpg');
                if (member_id == 1) {
                    $('.prev-member div').html('');
                    $('.prev-member p').html('');
                    $('.next-member div').html('Next');
                    $('.next-member p').html($('#member' + (member_id + 1)).find('div').html());
                } else if (member_id == 10) {
                    $('.next-member div').html('');
                    $('.next-member p').html('');
                    $('.prev-member div').html('Previous');
                    $('.prev-member p').html($('#member' + (member_id - 1)).find('div').html());
                } else {
                    $('.prev-member div').html('Previous');
                    $('.next-member div').html('Next');
                    $('.prev-member p').html($('#member' + (member_id - 1)).find('div').html());
                    $('.next-member p').html($('#member' + (member_id + 1)).find('div').html());
                }
            });
            
        });

        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</body>
<?php wp_footer() ?>
</html>