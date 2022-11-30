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
                            6種類の体験コースからひとつを選んで参加<br />
                            ものづくりの達人の技を間近で学び<br />
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

                        <h3 class="bl_application_item_title">申込フォームに入力し<br>参加申込をしてください。</h3>
                        <div class="bl_application_item_num">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/application_item_num_01.svg"
                                alt="1">
                        </div>
                        <div class="bl_application_item_body">
                            <dl>
                                <div>
                                    <dt>募集期間</dt>
                                    <dd>12月9日（金）〜18日（日）17:00まで</dd>
                                </div>
                            </dl>
                        </div>
                    </li>
                    <li class="bl_application_item">
                        <h3 class="bl_application_item_title hp_DFandcenter">参加者の決定</h3>
                        <div class="bl_application_item_num"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/application_item_num_02.svg"
                                alt="2"></div>
                        <div class="bl_application_item_month-box">12月下旬</div>
                        <div class="bl_application_item_body w100">
                            <p>こちらのサイト内で、参加決定者の番号を公表します。<br>
                                後日、決定者にはメールでご連絡もいたします</p>
                        </div>
                    </li>
                    <li class="bl_application_item">
                        <h3 class="bl_application_item_title hp_DFandcenter">会場に参加して、ものづくりを体験</h3>
                        <div class="bl_application_item_num"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/application_item_num_03.svg"
                                alt="3"></div>
                        <div class="bl_application_item_body w100">
                            <table>
                                <tr>
                                    <th colspan="2">開催日</th>
                                </tr>
                                <tr>
                                    <td>2023年1月14日（土）</td>
                                    <td>2023年1月28日（土）</td>
                                </tr>
                            </table>

                        </div>
                    </li>
                    <li class="bl_application_item">
                        <h3 class="bl_application_item_title">体験が終わったら、<br>会場でアンケートにお答えください</h3>
                        <div class="bl_application_item_num"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/application_item_num_04.svg"
                                alt="4"></div>
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
                                                「トートバック」をつくって<br>
                                                お出かけしよう！</h3>
                                            <p class="bl_EC_company">埼玉県洋裁技能士会、埼玉県洋裁技能協会</p>

                                            <h4 class="bl_EC_Dayt orange">1月14日（土）</h4>
                                            <div class="bl_EC_Dayt_Detail orange">
                                                午前の部　10:30〜12:00（15名）<br>
                                                午後の部　13:30〜 15:00（15名）
                                            </div>

                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_red">
                                                    <dt class="hp_bg_red">定員</dt>
                                                    <dd class="hp_red">30名</dd>
                                                </dl>
                                            </div>
                                            <p class="bl_EC_desc">ミシンやアイロンを使って、手づくりトートバックに挑戦！</p>
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
                                            src="<?php echo get_template_directory_uri(); ?>/img/img02/experience_05.jpg"
                                            alt=""></figure>
                                    <div class="bl_EC_body">
                                        <div class="bl_EC_body_inner">
                                            <h3 class="bl_EC_title hp_secondblue">「置き<ruby>畳<rt>だたみ</rt>
                                                </ruby>」で<span class="up_text-kaza">飾</span>ってみよう！</h3>
                                            <p class="bl_EC_company">埼玉県畳技能士会</p>

                                            <h4 class="bl_EC_Dayt green">1月14日（土）</h4>
                                            <div class="bl_EC_Dayt_Detail green">
                                                午前の部　10:30〜12:00（15名）<br>
                                                午後の部　13:30〜 15:00（15名）
                                            </div>

                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_secondblue">
                                                    <dt class="hp_bg_secondblue">定員</dt>
                                                    <dd class="hp_secondblue">30名</dd>
                                                </dl>
                                            </div>

                                            <div class="bl_EC_object">
                                                <p class="green">参加者が用意するもの</p>
                                                <span>はさみ、</span>
                                                <span>ホチキス</span>
                                            </div>

                                            <p class="bl_EC_desc">針と糸を使っての手縫い作業で職人技に挑戦！</p>
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
                                            <h3 class="bl_EC_title hp_orange">「ミニフラワーアレンジメント」で<br>お部屋を飾ろう！</h3>
                                            <p class="bl_EC_company">埼玉県フラワー装飾技能士会</p>

                                            <h4 class="bl_EC_Dayt yellow">1月14日（土）</h4>
                                            <div class="bl_EC_Dayt_Detail yellow">
                                                午前の部　10:30〜12:00（15名）<br>
                                                午後の部　13:30〜 15:00（15名）
                                            </div>

                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_orange">
                                                    <dt class="hp_bg_orange">定員</dt>
                                                    <dd class="hp_orange">30名</dd>
                                                </dl>
                                            </div>

                                            <div class="bl_EC_object">
                                                <p class="yellow">参加者が用意するもの</p>
                                                <span>筆記用具</span>
                                            </div>
                                            <p class="bl_EC_desc">お花のパワー癒しを感じながら、楽しく挑戦！<br>
                                                ※体験のお花は写真と変わる場合があります。</p>
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
                                            <h3 class="bl_EC_title hp_red">「小さい木のイス」をつくろう！</h3>
                                            <p class="bl_EC_company">埼玉土建技能士会</p>

                                            <h4 class="bl_EC_Dayt orange">1月28日（土）</h4>
                                            <div class="bl_EC_Dayt_Detail orange">
                                                午前の部　10:30〜12:00（15名）<br>
                                                午後の部　13:30〜 15:00（15名）
                                            </div>

                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_red">
                                                    <dt class="hp_bg_red">定員</dt>
                                                    <dd class="hp_red">30名</dd>
                                                </dl>
                                            </div>

                                            <div class="bl_EC_object other">
                                                <p class="orange">参加者が用意するもの</p>
                                                <div>
                                                    <span>えんぴつ、消しゴム、<ruby>定規<rt>じょうぎ</rt></ruby><br>よごれてもいい服装</span>
                                                </div>
                                            </div>

                                            <p class="bl_EC_desc">実際に座れて、小物置きとしても使えるイスに挑戦！</p>
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
                                            <h3 class="bl_EC_title hp_secondblue">本格的な「石のハンコ」を<br>
                                                ほってみよう！</h3>
                                            <p class="bl_EC_company">埼玉県印章彫刻技能士会</p>
                                            <h4 class="bl_EC_Dayt green">1月28日（土）</h4>
                                            <div class="bl_EC_Dayt_Detail green">
                                                午前の部　10:30〜12:00（15名）<br>
                                                午後の部　13:30〜 15:00（15名）
                                            </div>

                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_secondblue">
                                                    <dt class="hp_bg_secondblue">定員</dt>
                                                    <dd class="hp_secondblue">30名</dd>
                                                </dl>
                                            </div>

                                            <p class="bl_EC_desc">彫刻刀を使い、石をほり、はんこ屋さんの「技」に挑戦！<br>
                                                ※参加者には事前にほる文字を決めていただきます。（漢字1文字またはカナ2文字）</p>
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
                                            <h3 class="bl_EC_title hp_orange">「タイルコースター」で使ったり、<br>
                                                飾ったりしよう！</h3>
                                            <p class="bl_EC_company">タイル技能士会</p>
                                            <h4 class="bl_EC_Dayt yellow">1月28日（土）</h4>
                                            <div class="bl_EC_Dayt_Detail yellow">
                                                午前の部　10:30〜12:00（15名）<br>
                                                午後の部　13:30〜 15:00（15名）
                                            </div>

                                            <div class="bl_EC_capacity">
                                                <dl class="hp_border_orange">
                                                    <dt class="hp_bg_orange">定員</dt>
                                                    <dd class="hp_orange">30名</dd>
                                                </dl>
                                            </div>

                                            <div class="bl_EC_object">
                                                <p class="yellow">参加者が用意するもの</p>
                                                <span>手ふきタオルかハンカチ</span>
                                            </div>
                                            <p class="bl_EC_desc">色とりどりのタイルと職人技で世界にひとつだけのコースターづくりに挑戦！</p>
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
