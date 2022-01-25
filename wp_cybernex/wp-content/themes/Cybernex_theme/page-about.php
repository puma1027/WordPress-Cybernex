<?php 
get_header();
?>
<main id="about">
    <div class="main-visual">
        <div class="page-container">
            <h2 class="top-title font-70">
                About
            </h2>
            <p class="font-16">Recent News Posts</p>
        </div>
    </div>
    <div class="page-container">
        <div class="container">
            <section class="vision" id="vision">
                <h3 class="font-36 font-weight-bold mb-5">Vision</h3>
                <h2 class="font-50 font-weight-bold mb-4">Breaking down interface barriers to Create a new “Convey”</h2>
                <p class="font-20 font-weight-normal">"The interface of communication changes with the times." The time has come for BCI, which utilizes neuro-technology, to become the interface for communication. Through the social implementation and dissemination of BCI, we will evolve
                    the conventional communication and provide a new "communication" that connects people and makes them feel rich.</p>
                <p class="font-14 font-weight-normal ">*BCI (Brain-Computer Interface) is a device that utilizes information from the brain to communicate and operate devices and machines.</p>
            </section>
            <section class="values" id="values">
                <h3 class="font-36 font-weight-bold mb-5">Values</h3>
                <h2 class="font-70 font-weight-bold mb-4">Start from 0.</h2>
                <p class="font-20">CyberneX advocates the theory that amateurs are the strongest. We also value each individual's personality and neurodiversity. Our goal is to create an organization where members can feel what they are there for so that they can fully
                    demonstrate their individuality. It is not a question of "Who said that? Rather, we evaluate metaphorically by demonstrating our sincerity in dealing with outstanding products and services. Who did it? Rather than linking problems
                    to people, we solve problems by changing the system.</p>
                <h2 class="font-70 font-weight-bold my-4">Be Integrity</h2>
                <p class="font-20">We are a group of people with entrepreneurship and conviction, who see everything that happens as our own business, and can think and act in the first person. Even if you don't know what you're doing and you're worried about it, try
                    it anyway. Let's think for ourselves and actually take action. Always have the power to break through and try, even if it is difficult. Don't give up when you can't do something, but think about why you can't do it and how you
                    can do it, and be persistent in the face of difficulties. We value such courage to take the first step.</p>
                <h2 class="font-70 font-weight-bold my-4">Hack the future</h2>
                <p class="font-20">Can you raise issues from a high perspective? As the market is constantly changing, it is important to be able to recognize essential higher-order issues and quickly identify and suggest risks, without getting caught up in immediate
                    issues. Such ability is required. Always look around with a broad perspective, be considerate of team members, and get out of the way of collaboration. Formulate hypotheses based on the information you have gathered, and prepare
                    other options to avoid falling into a situation where you cannot do something because you are too focused on the details. We will lead the world as it has never been seen before with a combination of toughness and flexibility and
                    a high degree of mobility.
                </p>
            </section>
            <section class="people" id="members">
                <h3 class="font-36 font-weight-bold mb-5">People</h3>
                <p class="font-20 font-weight-normal mb-5">We value mutual trust as part of our culture. Because we are based on trust, we are flexible and energetic, and our organization is flat. We believe that the spontaneous thoughts and actions of each individual will lead to the strength
                    of the individual and the organization.</p>
                <?php if( have_rows( 'members', 'option' ) ) : ?>
                <div class="row">
                    <?php $member_count = 1; ?>
                    <?php while( have_rows('members', 'option') ) : the_row(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="member-photo text-center" id="<?php echo 'member' . $member_count; ?>" member-id="<?php echo $member_count; ?>" data-toggle="modal" data-target="#member">
                            <img src="<?php echo wp_get_attachment_image_url( get_sub_field('member_photo'), 'full' ); ?>" alt="">
                            <div class="font-20 font-weight-bold mt-2"><?php the_sub_field('member_name'); ?></div>
                            <p class="font-14 font-weight-bold"><?php the_sub_field('member_job'); ?></p>
                            <article><?php the_sub_field('member_description'); ?></article>
                        </div>
                    </div>
                    <?php $member_count ++; ?>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </section>
            <section class="advisor" id="advisor">
                <h3 class="font-36 font-weight-bold mb-5">Advisor</h3>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">Yasuaki Onishi</p>
                            <p class="font-14 font-weight-bold">Corporate Strategy Support (Ex Director and Managing Executive Officer of Fuji Xerox)</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">Masahiro Samejima</p>
                            <p class="font-14 font-weight-bold">Technical Legal Counsel (Representative Partner, Uchida & Samejima Law Firm)</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">Takehiro Matsumoto</p>
                            <p class="font-14 font-weight-bold">Corporate Back Office Support (Certified Public Accountant, President and Representative Director, Tech CFO office, Inc.)</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">Masaru Takeda</p>
                            <p class="font-14 font-weight-bold">Business Co-Creation Coordination Support</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">Hiroshi Kurokawa</p>
                            <p class="font-14 font-weight-bold">Data Science Advisor (General Manager, DX Promotion Department, Lion Corporation)</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">Akira Tateishi</p>
                            <p class="font-14 font-weight-bold">IoT System Design Support</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">Kengo Tokuchi</p>
                            <p class="font-14 font-weight-bold">IP Management Support (Agama-X, co., ltd. CIPO)</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="access" id="access">
                <h3 class="font-36 font-weight-bold mb-5">Access</h3>
                <p class="font-20 font-weight-normal mb-5">We are based in Tokyo, working with related businesses and external partners to strengthen our portfolio in a unique way. The location is a 5-minute walk from JR Kamata Station and a 7-minute walk from Keikyu Kamata Station. The office
                    entrance is located in front of the entrance of Jonan Shinkin Bank.</p>
                <p class="font-16 map-link">View on <a href="https://goo.gl/maps/KDjFZKTgc9KbzYus7">Google Maps</a></p>
                <div class="mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.6391775477045!2d139.71785161525568!3d35.562612480222064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018605a3b6ec1ff%3A0x46f53756e03d3e43!2zSmFwYW4sIOOAkjE0NC0wMDUyIFRva3lvLCBPdGEgQ2l0eSwgS2FtYXRhLCA1LWNoxY1tZeKIkjI24oiSOCDjgqLjg7zjg4fjg6vokrLnlLA!5e0!3m2!1sen!2sru!4v1641345576699!5m2!1sja!2sja"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
            <section class="company" id="company">
                <h3 class="font-36 font-weight-bold mb-5">Company</h3>
                <div class="company-detail">
                    <div class="d-md-table">
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Company Name</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">CyberneX Co., Ltd.</div>
                        </div>
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Date Founded</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">May 22, 2020</div>
                        </div>
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Capital</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">5 million JPY (As of April 2021)</div>
                        </div>
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Main Business Activities</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">
                                <ul>
                                    <li>Research and development support using biological data</li>
                                    <li>Support for experiments / PoC and effect measurement/visualization</li>
                                    <li>Development of BCI devices</li>
                                    <li>Co-development of solutions.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Representative</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">Motofumi Baba</div>
                        </div>
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Locations</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">#1107, Ardell Kamata, 5-26-8 Kamata, Ota-ku, Tokyo, 144-0052 Japan</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="member-modal">
        <div class="modal" id="member">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header page-container mt-md-5">
                        <button type="button" class="close ml-auto" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body page-container">
                        <div class="row">
                            <div class="col-md-7 mb-4 mt-5">
                                <p class="font-26 font-weight-bold member_name"></p>
                                <p class="font-18 font-weight-bold mb-4 member_job"></p>
                                <p class="font-18 mb-5 member_detail"></p>
                                <?php echo do_shortcode('[Sassy_Social_Share]') ?>
                                <div class="d-flex justify-content-between mt-5">
                                    <div class="prev-member">
                                        <div class="font-14 font-weight-bold mb-2"></div>
                                        <p class="font-24 font-weight-bold"></p>
                                    </div>
                                    <div class="next-member">
                                        <div class="font-14 font-weight-bold mb-2"></div>
                                        <p class="font-24 font-weight-bold"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 pl-xl-5 pl-lg-4 pl-md-3 mb-4 mt-5">
                                <div class="member-modal-img">
                                    <img src="<?php echo get_template_directory_uri()?>/image/member2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>