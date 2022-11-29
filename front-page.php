<!DOCTYPE html>
<html lang="ja" style="font-size: 62.5%;">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <?php get_header(); ?>
</head>

<body>

    <div class="mv">
        <div class="ly_sidebar p_border_green"></div>
        <div class="ly_contentRight">

            <?php get_template_part('includes/header'); ?>


            <div class="ly_mv_content">
                <!-- <img class="ly_contentRight-img pc" src="<?php echo get_template_directory_uri(); ?>/img/img02/tp_fv.png" alt=""> -->
                <img class="ly_contentRight-img pc"
                    src="<?php echo get_template_directory_uri(); ?>/img/img02/tp_fv02.png" alt="">
                <img class="ly_contentRight-img sp"
                    src="<?php echo get_template_directory_uri(); ?>/img/img02/sp_fv-back.jpg" alt="">
                <div class="bl_mv_content_left">
                    <div class="ly_MVL_top">
                        <!-- <img class="bl_mv_title-sp" src="<?php echo get_template_directory_uri(); ?>/img/img02/sp_fv-logo.svg" alt=""> -->
                        <img class="bl_mv_title-sp"
                            src="<?php echo get_template_directory_uri(); ?>/img/img02/sp_fv-logo02.svg" alt="">
                        <!-- <img class="fv_items01" src="<?php echo get_template_directory_uri(); ?>/img/img02/sp_fv-items.svg" alt=""> -->
                        <img class="fv_items01"
                            src="<?php echo get_template_directory_uri(); ?>/img/img02/sp_fv-items02.svg" alt="">
                        <h1 class="bl_mv_title pc"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/img02/fv_logo.svg"
                                alt="オンラインで体験!　親子ものづくりフェア　in埼玉"></h1>
                        <dl>
                            <div>
                                <dt>募集期間</dt>
                                <dd>12月9日（金）〜18日（日）</dd>
                            </div>
                            <div>
                                <dt>参加費</dt>
                                <dd>無料</dd>
                            </div>
                            <div>
                                <dt>参加対象</dt>
                                <dd>埼玉県内にお住いの小学生</dd>
                            </div>
                        </dl>
                    </div>
                    <div class="ly_MVC_bottom">
                        <p class="bl_mv_lead">匠の技をリアル体験</p>
                        <p class="bl_mv_desc">
                            6種類の体験コースからひとつを選んで参加<br/>
                            ものづくりの達人の技を間近で学び<br/>
                            ものづくりの魅力や楽しさをリアルに体験！
                        </p>
                    </div>
                </div>
                <a class="fv_kousei_log" target="_black" href="https://waza.mhlw.go.jp/tunagu/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img02/kousei_log.svg" alt="">
                </a>
            </div>
        </div>
    </div>
    <!-- mv -->

    <main>

        <section class="news">
            <div class="ly_sidebar hp_bg_yellow"></div>
            <div class="ly_contentRight">
                <div class="ly_news_inner">
                    <div class="inner">
                        <h2 class="bl_sectionTitle">お知らせ / 最新情報</h2>
                        <ul class="bl_news_list">

                            <?php query_posts('posts_per_page=5'); ?>
                            <?php if (have_posts()): ?>
                            <?php while (have_posts()):
                                    the_post(); ?>

                            <li class="bl_news_item">
                                <time datetime="<?php the_time("Y.n.j"); ?>">
                                    <?php the_time("Y.n.j"); ?>
                                </time>
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                            </li>

                            <?php endwhile; ?>
                            <?php else: ?>
                            <p>お知らせはまだありません。</p>
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.news -->


        <section class="application">
            <div class="ly_sepArrow">
                <h2 class="bl_sepArrow_text hp_thirdyellow">お申し込み方法</h2>
            </div>
            <!-- ly_sepArrow -->
            <div class="ly_application_inner">
                <ol class="bl_application_list">
                    <li class="bl_application_item">
                        <h3 class="bl_application_item_title">申込フォームに<br>入力し参加申込をしてください。</h3>
                        <div class="bl_application_item_num"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/application_item_num_01.svg"
                                alt="1"></div>
                        <div class="bl_application_item_body">
                            <dl>
                                <div>
                                    <dt>募集期間</dt>
                                    <dd>7月5日（火）〜<br>18日（月・祝）17:00まで</dd>
                                </div>
                            </dl>
                        </div>
                    </li>
                    <li class="bl_application_item">
                        <h3 class="bl_application_item_title hp_DFandcenter">参加者の決定</h3>
                        <div class="bl_application_item_num"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/application_item_num_02.svg"
                                alt="2"></div>
                        <div class="bl_application_item_body">
                            <p>7月下旬</p>
                        </div>
                    </li>
                    <li class="bl_application_item">
                        <h3 class="bl_application_item_title hp_DFandcenter">参加者に体験キットを<br>お届けします。</h3>
                        <div class="bl_application_item_num"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/application_item_num_03.svg"
                                alt="3"></div>
                        <div class="bl_application_item_body">
                            <p>※８月上旬を予定</p>
                        </div>
                    </li>
                    <li class="bl_application_item">
                        <h3 class="bl_application_item_title">YouTubeを見て<br>ものづくりを体験！</h3>
                        <div class="bl_application_item_num"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/application_item_num_04.svg"
                                alt="4"></div>
                        <div class="bl_application_item_body">
                            <dl>
                                <div>
                                    <dt>開催期間（動画配信）</dt>
                                    <dd>8月10日（水）〜31日（水）</dd>
                                </div>
                            </dl>
                        </div>
                    </li>
                    <li class="bl_application_item">
                        <h3 class="bl_application_item_title hp_DFandcenter">体験が終わったら<br>アンケートに<br class="sp">お答えください。
                        </h3>
                        <div class="bl_application_item_num"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/application_item_num_05.svg"
                                alt="5"></div>
                    </li>
                </ol>
            </div>
        </section>

        <section class="experience">
            <div class="ly_sepArrow">
                <h2 class="bl_sepArrow_text hp_red">体験コース</h2>
            </div>
            <!-- ly_sepArrow -->
            <div class="ly_experience_box">
                <div class="ly_sidebar hp_bg_blue pc"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/text_construction.png" alt="CONSTRUCTION">
                </div>
                <div class="ly_contentRight hp_bg_red">
                    <div class="inner">
                        <div class="ly_experience_inner">
                            <div class="bl_experience_content">
                                <div class="ly_EC_top">
                                    <figure class="bl_EC_figure"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/experience_01.jpg"
                                            alt=""></figure>
                                    <div class="bl_EC_body">
                                        <div class="bl_EC_body_inner">
                                                                                       <h3 class="bl_EC_title hp_red">
                                                「小さい木のイス」を作ろう！</h3>
                                            <p class="bl_EC_company hp_red">埼玉土建技能士会</p>
                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_red">
                                                    <dt class="hp_bg_red">定員</dt>
                                                    <dd class="hp_red">30名</dd>
                                                </dl>
                                            </div>
                                            <p class="bl_EC_desc">実際に座れて、小物置きとしても使えるイスに挑戦！</p>
                                            <div class="bl_EC_btnWrap">
                                                <a href="<?php echo get_page_link(15); ?>"
                                                    class="el_btn el_btn_arrow hp_bg_blue ">体験ガイド</a>
                                                <a href="https://www.youtube.com/watch?v=vVbweAyRdHQ"
                                                    class="el_btn el_btn_arrow hp_bg_secondblue">体験コース動画</a>
                                                <!-- <a style="opacity: 0.4; color:white;" class="el_btn el_btn_arrow hp_bg_secondblue">体験コース動画</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ly_EC_bottom">
                                    <a href="" class="bl_EC_confirm js_modal_open hp_yellow"
                                        data-target="modal01">参加決定者の番号を確認する</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ly_experience_box -->
            <div class="ly_experience_box">
                <div class="ly_sidebar hp_bg_orange pc"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/text_signature stamp.png"
                        alt="SIGNATURE STAMP"></div>
                <div class="ly_contentRight hp_bg_secondblue">
                    <div class="inner">
                        <div class="ly_experience_inner">
                            <div class="bl_experience_content">
                                <div class="ly_EC_top">
                                    <figure class="bl_EC_figure"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/experience_02.jpg"
                                            alt=""></figure>
                                    <div class="bl_EC_body">
                                        <div class="bl_EC_body_inner">
                                            <h3 class="bl_EC_title hp_secondblue">「消しゴムはんこ」で<br>身近な人に手紙を送ろう！</h3>
                                            <p class="bl_EC_company hp_secondblue">埼玉県印章彫刻技能士会</p>
                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_secondblue">
                                                    <dt class="hp_bg_secondblue">定員</dt>
                                                    <dd class="hp_secondblue">30名</dd>
                                                </dl>
                                            </div>
                                            <p class="bl_EC_desc">きれいに押せる消しゴムはんこの「技」習得に挑戦！</p>
                                            <div class="bl_EC_btnWrap">
                                                <a href="<?php echo get_page_link(17); ?>"
                                                    class="el_btn el_btn_arrow hp_bg_orange">体験ガイド</a>
                                                <a href="https://www.youtube.com/watch?v=RFARD90jdJo"
                                                    class="el_btn el_btn_arrow hp_bg_red">体験コース動画</a>
                                                <!-- <a style="opacity: 0.4; color:white;" class="el_btn el_btn_arrow hp_bg_red">体験コース動画</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ly_EC_bottom">
                                    <a href="" class="bl_EC_confirm js_modal_open hp_yellow"
                                        data-target="modal02">参加決定者の番号を確認する</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ly_experience_box -->
            <div class="ly_experience_box">
                <div class="ly_sidebar hp_bg_yellow pc"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/text_flowerdecoration.png"
                        alt="FLOWER DECORATION"></div>
                <div class="ly_contentRight hp_bg_orange">
                    <div class="inner">
                        <div class="ly_experience_inner">
                            <div class="bl_experience_content">
                                <div class="ly_EC_top">
                                    <figure class="bl_EC_figure"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/experience_03.jpg"
                                            alt="">
                                        <!-- <p>※体験キットは1つです</p> -->
                                    </figure>
                                    <div class="bl_EC_body">
                                        <div class="bl_EC_body_inner">
                                            <h3 class="bl_EC_title hp_orange">「フラワー<ruby>壁飾<rt>かべかざ</rt>
                                                    </ruby>り」をつくって<br class="pc">お部屋に飾ろう！</h3>
                                            <p class="bl_EC_company hp_orange">埼玉県フラワー装飾技能士会</p>
                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_orange">
                                                    <dt class="hp_bg_orange">定員</dt>
                                                    <dd class="hp_orange">30名</dd>
                                                </dl>
                                            </div>
                                            <p class="bl_EC_desc">お花のパワーと<span
                                                    class="up_text-iyashi">癒し</span>を感じながら、楽しく挑戦！</p>
                                            <div class="bl_EC_btnWrap">
                                                <a href="<?php echo get_page_link(19); ?>"
                                                    class="el_btn el_btn_arrow hp_bg_secondyellow">体験ガイド</a>
                                                <a href="https://www.youtube.com/watch?v=dymYzFfiIqs"
                                                    class="el_btn el_btn_arrow hp_bg_orange">体験コース動画</a>
                                                <!-- <a style="opacity: 0.4; color: white;" class="el_btn el_btn_arrow hp_bg_orange">体験コース動画</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ly_EC_bottom">
                                    <a href="" class="bl_EC_confirm js_modal_open hp_yellow"
                                        data-target="modal03">参加決定者の番号を確認する</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->
            <!-- 追加　項目 -->
            <!-- ＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->
            <div class="ly_experience_box">
                <div class="ly_sidebar hp_bg_blue pc svg"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/img02/left_border_text/Dressmaking02.svg"
                        alt="Dressmaking"></div>
                <div class="ly_contentRight hp_bg_red">
                    <div class="inner">
                        <div class="ly_experience_inner">
                            <div class="bl_experience_content">
                                <div class="ly_EC_top">
                                    <figure class="bl_EC_figure"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/img02/experience_04.jpg"
                                            alt=""></figure>
                                    <div class="bl_EC_body">
                                        <div class="bl_EC_body_inner">
                                            <h3 class="bl_EC_title hp_red">「移動ポケットケース」をつくってお出かけしよう！</h3>
                                            <p class="bl_EC_company hp_red">埼玉県洋裁技能士会</p>
                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_red">
                                                    <dt class="hp_bg_red">定員</dt>
                                                    <dd class="hp_red">30名</dd>
                                                </dl>
                                            </div>
                                            <p class="bl_EC_desc">ミシンとアイロンを使って、便利なクリップつきポケットケースづくりに挑戦！</p>
                                            <div class="bl_EC_btnWrap">
                                                <a href="<?php echo get_page_link(72); ?>"
                                                    class="el_btn el_btn_arrow hp_bg_blue">体験ガイド</a>
                                                <a href="https://www.youtube.com/watch?v=UgzCdAdIsgE"
                                                    class="el_btn el_btn_arrow hp_bg_secondblue">体験コース動画</a>
                                                <!-- <a style="opacity: 0.4; color:white;" class="el_btn el_btn_arrow hp_bg_secondblue">体験コース動画</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ly_EC_bottom">
                                    <a href="" class="bl_EC_confirm js_modal_open hp_yellow"
                                        data-target="modal04">参加決定者の番号を確認する</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ly_experience_box -->
            <div class="ly_experience_box">
                <div class="ly_sidebar hp_bg_orange pc svg"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/img02/left_border_text/JAPANESE TATAMI02.svg"
                        alt="JAPANESE TATAMI"></div>
                <div class="ly_contentRight hp_bg_secondblue">
                    <div class="inner">
                        <div class="ly_experience_inner">
                            <div class="bl_experience_content">
                                <div class="ly_EC_top">
                                    <figure class="bl_EC_figure"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/img02/experience_05.jpg"
                                            alt=""></figure>
                                    <div class="bl_EC_body">
                                        <div class="bl_EC_body_inner">
                                                                                                                       
                                                     <h3 class="bl_EC_title hp_secondblue">「置き<ruby>畳<rt>だたみ</rt>
                                                    </ruby>」で<span class="up_text-kaza">飾</span>ってみよう！</h3>
                                            <p class="bl_EC_company hp_secondblue">埼玉県畳技能士会</p>
                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_secondblue">
                                                    <dt class="hp_bg_secondblue">定員</dt>
                                                    <dd class="hp_secondblue">30名</dd>
                                                </dl>
                                            </div>
                                            <p class="bl_EC_desc">針と糸を使っての手縫い作業で職人技に挑戦！</p>
                                            <div class="bl_EC_btnWrap">
                                                <a href="<?php echo get_page_link(74); ?>"
                                                    class="el_btn el_btn_arrow hp_bg_orange">体験ガイド</a>
                                                <a href="https://www.youtube.com/watch?v=KuMPO3k4qsI"
                                                    class="el_btn el_btn_arrow hp_bg_red">体験コース動画</a>
                                                <!-- <a style="opacity: 0.4; color:white;" class="el_btn el_btn_arrow hp_bg_red">体験コース動画</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ly_EC_bottom">
                                    <a href="" class="bl_EC_confirm js_modal_open hp_yellow"
                                        data-target="modal05">参加決定者の番号を確認する</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ly_experience_box -->
            <div class="ly_experience_box">
                <div class="ly_sidebar hp_bg_yellow pc svg"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/img02/left_border_text/TILE02.svg"
                        alt="TILE"></div>
                <div class="ly_contentRight hp_bg_orange">
                    <div class="inner">
                        <div class="ly_experience_inner">
                            <div class="bl_experience_content">
                                <div class="ly_EC_top">
                                    <figure class="bl_EC_figure"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/img02/experience_06.jpg"
                                            alt="">
                                    </figure>
                                    <div class="bl_EC_body">
                                        <div class="bl_EC_body_inner">
                                            <h3 class="bl_EC_title hp_orange">自分だけの手づくり「タイルコースター」をつくろう！</h3>
                                            <p class="bl_EC_company hp_orange">埼玉県タイル煉瓦工事工業組合技能士会</p>
                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_orange">
                                                    <dt class="hp_bg_orange">定員</dt>
                                                    <dd class="hp_orange">30名</dd>
                                                </dl>
                                            </div>
                                            <p class="bl_EC_desc">色とりどりのタイルと職人技で世界にひとつだけのコースターづくりに挑戦！</p>
                                            <div class="bl_EC_btnWrap">
                                                <a href="<?php echo get_page_link(76); ?>"
                                                    class="el_btn el_btn_arrow hp_bg_secondyellow">体験ガイド</a>
                                                <a href="https://www.youtube.com/watch?v=c9lCPDQFev0"
                                                    class="el_btn el_btn_arrow hp_bg_orange">体験コース動画</a>
                                                <!-- <a style="opacity: 0.4; color: white;" class="el_btn el_btn_arrow hp_bg_orange">体験コース動画</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ly_EC_bottom">
                                    <a href="" class="bl_EC_confirm js_modal_open hp_yellow"
                                        data-target="modal06">参加決定者の番号を確認する</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.experience -->

        <?php
        $args = array(
            'post_type' => 'number1',
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="modal js_modal" id="modal01">
            <div class="bl_modal_overlay js_modal_close"></div>
            <div class="bl_modal_content">
                <div class="bl_modal_close hp_bg_red js_modal_close"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/modal_close.svg" alt="閉じる"></div>
                <div class="bl_modal_inner">
                    <h3 class="bl_modal_title hp_red">「小さい木のイス」をつくろう！</h3>
                    <p class="bl_modal_text">参加決定者の受付番号</p>
                    <div class="bl_modal_list">
                        <?php
                        if ($the_query->have_posts()):
                            while ($the_query->have_posts()):
                                $the_query->the_post();
                        ?>
                        <?php the_content(); ?>

                        <?php endwhile; ?>
                        <?php else: ?>
                        <p>参加決定者はまだ発表されていません。</p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <?php
        $args = array(
            'post_type' => 'number2',
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="modal js_modal" id="modal02">
            <div class="bl_modal_overlay js_modal_close"></div>
            <div class="bl_modal_content">
                <div class="bl_modal_close hp_bg_red js_modal_close"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/modal_close.svg" alt="閉じる"></div>
                <div class="bl_modal_inner">
                    <h3 class="bl_modal_title hp_red">「消しゴムはんこ」で身近な人に手紙を送ろう！</h3>
                    <p class="bl_modal_text">参加決定者の受付番号</p>
                    <div class="bl_modal_list">
                        <?php
                        if ($the_query->have_posts()):
                            while ($the_query->have_posts()):
                                $the_query->the_post();
                        ?>
                        <?php the_content(); ?>

                        <?php endwhile; ?>
                        <?php else: ?>
                        <p>参加決定者はまだ発表されていません。</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <?php
        $args = array(
            'post_type' => 'number3',
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="modal js_modal" id="modal03">
            <div class="bl_modal_overlay js_modal_close"></div>
            <div class="bl_modal_content">
                <div class="bl_modal_close hp_bg_red js_modal_close"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/modal_close.svg" alt="閉じる"></div>
                <div class="bl_modal_inner">
                    <h3 class="bl_modal_title hp_red">「フラワー壁飾り」をつくってお部屋に飾ろう！</h3>
                    <p class="bl_modal_text">参加決定者の受付番号</p>
                    <div class="bl_modal_list">
                        <?php
                        if ($the_query->have_posts()):
                            while ($the_query->have_posts()):
                                $the_query->the_post();
                        ?>
                        <?php the_content(); ?>

                        <?php endwhile; ?>
                        <?php else: ?>
                        <p>参加決定者はまだ発表されていません。</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <?php
        $args = array(
            'post_type' => 'number4',
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="modal js_modal" id="modal04">
            <div class="bl_modal_overlay js_modal_close"></div>
            <div class="bl_modal_content">
                <div class="bl_modal_close hp_bg_red js_modal_close"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/modal_close.svg" alt="閉じる"></div>
                <div class="bl_modal_inner">
                    <h3 class="bl_modal_title hp_red">「移動ポケットケース」をつくってお出かけしよう！</h3>
                    <p class="bl_modal_text">参加決定者の受付番号</p>
                    <div class="bl_modal_list">
                        <?php
                        if ($the_query->have_posts()):
                            while ($the_query->have_posts()):
                                $the_query->the_post();
                        ?>
                        <?php the_content(); ?>

                        <?php endwhile; ?>
                        <?php else: ?>
                        <p>参加決定者はまだ発表されていません。</p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <?php
        $args = array(
            'post_type' => 'number5',
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="modal js_modal" id="modal05">
            <div class="bl_modal_overlay js_modal_close"></div>
            <div class="bl_modal_content">
                <div class="bl_modal_close hp_bg_red js_modal_close"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/modal_close.svg" alt="閉じる"></div>
                <div class="bl_modal_inner">
                    <h3 class="bl_modal_title hp_red">「置きだたみ」で<span class="up_text-kaza">飾</span>ってみよう！</h3>
                    <p class="bl_modal_text">参加決定者の受付番号</p>
                    <div class="bl_modal_list">
                        <?php
                        if ($the_query->have_posts()):
                            while ($the_query->have_posts()):
                                $the_query->the_post();
                        ?>
                        <?php the_content(); ?>

                        <?php endwhile; ?>
                        <?php else: ?>
                        <p>参加決定者はまだ発表されていません。</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <?php
        $args = array(
            'post_type' => 'number6',
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="modal js_modal" id="modal06">
            <div class="bl_modal_overlay js_modal_close"></div>
            <div class="bl_modal_content">
                <div class="bl_modal_close hp_bg_red js_modal_close"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/modal_close.svg" alt="閉じる"></div>
                <div class="bl_modal_inner">
                    <h3 class="bl_modal_title hp_red">自分だけの手づくり「タイルコースター」をつくろう！</h3>
                    <p class="bl_modal_text">参加決定者の受付番号</p>
                    <div class="bl_modal_list">
                        <?php
                        if ($the_query->have_posts()):
                            while ($the_query->have_posts()):
                                $the_query->the_post();
                        ?>
                        <?php the_content(); ?>

                        <?php endwhile; ?>
                        <?php else: ?>
                        <p>参加決定者はまだ発表されていません。</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

        <?php
        date_default_timezone_set('Asia/Tokyo');
        $day = date('YmdHis');
        ?>
        <section class="cta">
            <div class="ly_sepArrow">
                <!-- 2022/07/05から2022/08/29までセクションタイトル「申込フォーム」それ以降「アンケート」-->
                <?php if ($day > '20220705090000' && $day < '20220829090000'): ?>
                <h2 class="bl_sepArrow_text hp_blue">申込フォーム</h2>
                <?php else: ?>
                <h2 class="bl_sepArrow_text hp_blue">アンケート</h2>
                <?php endif; ?>
            </div>


            <!-- 2022-07-05-09時から2022-07-18-16時59分58秒まで応募期間 -->
            <?php if ($day > '20220705090000' && $day < '20220718165958'): ?>
            <div class="ly_cta_inner">
                <a href="http://saitama-vada.sakura.ne.jp/form/con.php" class="el_btn el_btn_arrow ">参加申込はコチラから</a>
                <!-- 2022-07-18-17時から2022-08-29-08時59分58秒は応募終了期間 -->
                <?php elseif ($day > '20220718170000' && $day < '20220810090000'): ?>
                <div class="ly_cta_inner">
                    <a href="" class="el_btn el_btn_arrow disabled ">参加申込は終了しました。</a>
                    <div class="disabled_overlay"><span>参加申込受付は<br class="sp">終了いたしました。</span></div>
                    <!-- 2022-08-29-09時からアンケート開始 -->
                    <?php elseif ($day > '20220810090000'): ?>
                    <div class="ly_cta_inner">
                        <a href="http://saitama-vada.sakura.ne.jp/form/questionnaire.php"
                            class="el_btn el_btn_arrow">アンケートにご協力下さい</a>
                        <!-- それ以外は開始前と判断し、お待ち下さいのメッセージ -->
                        <?php else: ?>
                        <div class="ly_cta_inner">
                            <a href="http://saitama-vada.sakura.ne.jp/form/con.php"
                                class="el_btn el_btn_arrow disabled">参加申込はコチラから</a>
                            <div class="disabled_overlay"><span>参加申込受付は<br
                                        class="sp">7月5日9時からになります。<br>もうしばらくお待ちください。</span></div>
                            <?php endif; ?>
                        </div>
        </section>
        <!-- /.cta -->

    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>
