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
                <p class="font-16 font-weight-bold">新しい「伝わる！」をつくる</p>
                <p class="font-20 font-weight-normal">"「コミュニケーションのインターフェースは時代とともに変わる」。ニューロテクノロジーを活用したBCIが、コミュニケーションのインターフェースとなる時代がやってきました。私たちはBCIの社会実装と普及を通じて、これまでのコミュニケーションを進化させ、人と人とが繋がり豊かさを感じる新しい「伝わる」を提供します。</p>
                <p class="font-14 font-weight-normal ">*BCI（ブレイン・コンピュータ・インターフェース）とは、脳の情報を活用してコミュニケーションしたり、機器や機械を操作したりするデバイスのこと。</p>
            </section>
            <section class="values" id="values">
                <h3 class="font-36 font-weight-bold mb-5">Values</h3>
                <h2 class="font-70 font-weight-bold mb-2">Start from 0.</h2>
                <p class="font-16 font-weight-bold mb-4">多様性を尊重し素人からこそ学ぶ</p>
                <p class="font-20">CyberneXは素人最強説を唱えています。そして一人一人の人柄とニューロダイバーシティを大切にしています。メンバーの持つ個性を存分に発揮してもらえるように、自分はなんのためにその場にいるのかを感じることができる組織を目指しています。誰がいったか？ではなく、優れたモノやコトに向き合う真摯さを発揮してメタ的に評価をします。誰がやったか？と問題を人に結びつけるのではなく、システムを変えることで問題を解決します。</p>
                <h2 class="font-70 font-weight-bold my-2">Be Integrity</h2>
                <p class="font-16 font-weight-bold mb-4">自ら率先し困難を克服する</p>
                <p class="font-20">アントレプレナーシップと信念を持って、起こる事象や物事全てを自分ゴトとして捉え、一人称で考えて実行することができるメンバーが集っています。人の失敗も自責で考えてみてわからなくて不安でもとにかくやってみよう。自分で考えて実際に動いてみよう。打開しようとする突破力を常に持ち続け、むずかしいけどやってみよう。できなかったときに投げやりにせず、なぜできないか、どのようにすればできるのかを考える粘り強さをもって困難に直面しても諦めない。そんな一歩踏み出す勇気を私たちは大切にしています。</p>
                <h2 class="font-70 font-weight-bold mb-2">Hack the future</h2>
                <p class="font-16 font-weight-bold mb-4">未来を恐れず先を見通す力</p>
                <p class="font-20">視座の高い問題提起ができるか？市場が常に変化する中で、目先の課題に囚われずに本質的なより高次のイシューに気づき素早くリスクを見つけ示唆できる。そんな能力が求められています。常に視野を広く周りを見渡して、チームメンバーへ配慮し連携から壁を抜け出せ。集めた情報から仮説立案を行い、細部こだわりすぎてできない状態に陥らないように別の選択肢を用意して方向性が間違っていると思ったら切り替える。したたかさとしなやかさを合わせ機動力の高さを持って未だみぬ世界を導きます。</p>
            </section>
            <section class="people" id="members">
                <h3 class="font-36 font-weight-bold mb-5">People</h3>
                <p class="font-20 font-weight-normal mb-5">私たちは、相互の信頼関係を大切にすることをカルチャーとしています。信頼がベースになっているからこそ、柔軟でエネルギッシュ、そしてフラットな組織になっています。一人ひとりの自発的な思いと行動が、個人と組織の強さにつながると信じています。</p>
                <?php if( have_rows( 'members', 'option' ) ) : ?>
                <div class="row">
                    <?php $member_count = 1; ?>
                    <?php while( have_rows('members', 'option') ) : the_row(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="member-photo text-center" id="<?php echo 'member' . $member_count; ?>" member-id="<?php echo $member_count; ?>" data-toggle="modal" data-target="#member">
                            <img src="<?php echo wp_get_attachment_image_url( get_sub_field('member_photo'), 'full' ); ?>" alt="">
                            <div class="font-20 font-weight-bold mt-2"><?php the_sub_field('member_name_jp'); ?></div>
                            <p class="font-14 font-weight-bold"><?php the_sub_field('member_job'); ?></p>
                            <article><?php the_sub_field('member_description_jp'); ?></article>
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
                            <p class="font-18 font-weight-bold mb-0 mt-2">大西 康昭</p>
                            <p class="font-14 font-weight-bold">コーポレート戦略支援担当<br>(元富士ゼロックス取締役常務執行役員)</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">鮫島 正洋</p>
                            <p class="font-14 font-weight-bold">技術法務担当顧問弁護士<br>(内田・鮫島法律事務所 代表パートナー) </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">松本 雄大</p>
                            <p class="font-14 font-weight-bold">コーポレートバックオフィス支援担当<br>(株式会社Tech CFO office 代表取締役社長公認会計士)</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">武田 優</p>
                            <p class="font-14 font-weight-bold">事業共創コーディネート支援担当</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">黒川 博史</p>
                            <p class="font-14 font-weight-bold">データサイエンスアドバイザー</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">立石 彰</p>
                            <p class="font-14 font-weight-bold">IoTシステム設計支援担当</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="advisor-item">
                            <p class="font-18 font-weight-bold mb-0 mt-2">得地 賢吾</p>
                            <p class="font-14 font-weight-bold">IP Management Support <br>(Agama-X, co., ltd. CIPO)</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="access" id="access">
                <h3 class="font-36 font-weight-bold mb-5">Access</h3>
                <p class="font-20 font-weight-normal mb-5">私たちは東京に拠点を置き、関連事業や外部パートナーとの連携を図り、ポートフォリオを独自の形で強化することを目指しています。ロケーションはJR蒲田駅から徒歩5分、京急蒲田駅から徒歩7分。オフィス入り口は、城南信用金庫の入り口の前にあります。</p>
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
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">株式会社CyberneX</div>
                        </div>
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Date Founded</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">2020年5月22日</div>
                        </div>
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Capital</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">5百万円 ( 2021年4月末時点 )</div>
                        </div>
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Main Business Activities</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">
                                <ul>
                                    <li>生体データを活用した研究開発支援、実験/PoCのサポート</li>
                                    <li>効果測定/可視化のサポート</li>
                                    <li>BCIデバイスの開発</li>
                                    <li>ソリューションの共同開発</li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Representative</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">馬場 基文</div>
                        </div>
                        <div class="d-md-table-row mb-3 mb-md-0">
                            <div class="d-md-table-cell py-md-3 text-md-center pr-md-5">
                                <div class="px-4 py-1 d-inline-block d-md-block mb-2 mb-md-0 font-12">Locations</div>
                            </div>
                            <div class="d-md-table-cell py-md-3 pl-4 pl-md-0 font-18">〒144-0052 東京都大田区蒲田5-26−8 アーデル蒲田 1107号室</div>
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