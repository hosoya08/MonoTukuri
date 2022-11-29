    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/appleicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <meta property="og:url" content=" https://saitama-vada.jp/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="親子ものづくりフェアin埼玉" />
    <meta property="og:description" content=" 埼玉県地域技能振興コーナーが主催するオンラインで体験！親子ものづくりフェア。体験キットが自宅に届き、ものづくりの達人が動画で伝授！親子一緒にものづくりに挑戦しましょう！" />
    <meta property="og:site_name" content="親子ものづくりフェアin埼玉" />
    <meta property="og:image" content="<?php echo get_template_directory_uri();?>/img/ogp.jpg" />

    <?php wp_head(); ?>