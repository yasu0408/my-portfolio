<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <?php get_template_part('template-parts/head') ?>
</head>
<body <?php body_class(); ?> >
  <?php wp_body_open(); ?>
  <header class="header">
    <?php get_header(); ?>
  </header>
<main>
  <!-- ファーストビュー -->
  <section class="first_view">
    <div class="container">
      <p class="first_view_title">仕事求む！</p>
      <p class="first_view_text">35歳からでも、未経験からでも、<br>挑戦できます。私が証明します。</p>
      <a class="button" href="<?php echo esc_url(home_url('/contact')); ?>">採用したい・興味がある</a>
    </div>
  </section>
<!-- アバウト -->
  <section id="about" class="about">
    <div class="container">
      <div class="about_heading">
        <p class="title">About</p>
        <p class="text">アバウト</p>
      </div>
      <div class="about_body">
        <div class="about_image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/my-face.png" alt="my-face">
        </div>
        <div class="about_text">
          <p class="title">仕事求む！</p>
          <p class="text">Webデザイナーを目指して就職活動しています小川 泰寛(おがわやすひろ)と申します。<span style="font-size:8px ;">※現姓村上</span><br>35歳で未経験ですが、年齢は数字に過ぎません。私が持つ情熱や意欲で新しい職場に貢献します。ご興味あればご連絡ください。3日以内に返信させていただきます。</p>
          <a class="button" href="<?php echo esc_url(home_url('/contact')); ?>">採用したい・興味がある</a>
        </div>
      </div>
    </div>
  </section>
<!-- スキル -->
  <section id="skill" class="skill">
    <div class="container">
      <div class="skill_heading">
        <p class="title">Skill</p>
        <p class="text">スキル</p>
      </div>
      <div class="skill_body">
        <?php get_template_part('template-parts/card','skill') ?>
      </div>
    </div>
  </section>
<!-- ワークス -->
  <section id="works" class="works">
    <div class="container">
      <div class="works_heading">
        <p class="title">Works</p>
        <p class="text">ワークス</p>
      </div>
      <div class="works_body">
        <?php get_template_part('template-parts/card','works') ?>
      </div>  
      <?php get_template_part('template-parts/modal','works') ?>
      <div class="works_cta">
        <a class="button" href="<?php echo esc_url(home_url('/contact')); ?>">採用したい・興味がある</a>
      </div>
    </div>
  </section>
<!-- プラクティス -->
  <section id="practice" class="practice">
    <div class="container">
      <div class="practice_heading">
        <p class="title">Practice</p>
        <p class="text">プラクティス</p>
      </div>
      <div class="practice_body">
        <?php get_template_part('template-parts/card','practice') ?>
      </div>
        <?php get_template_part('template-parts/modal','practice') ?>
    </div>
  </section>
<!-- ストレングス -->
  <section id="strength" class="strength">
    <div class="container">
      <div class="strength_heading">
        <p class="title">Strength</p>
        <p class="text">ストレングス</p>
      </div>
      <div class="strength_body">
          <?php get_template_part('template-parts/card','strength') ?>
      </div>
    </div>
  </section>
<!-- コンタクト -->
  <section class="contact">
    <div class="container">
      <div class="contact_heading">
        <p class="title">Contact</p>
        <p class="text">コンタクト</p>
      </div>
      <div class="contact_body">
        <p class="text mb_16">
          ポートフォリオサイトをご覧下さりありがとうございます。<br>
          ご興味があれば下記のボタンからお問い合わせください。
        </p>
      </div>
      <div class="contact_cta">
        <a class="button" href="<?php echo esc_url(home_url('/contact')); ?>">採用したい・興味がある</a>
      </div>
    </div>
  </section>
</main>
  <footer class="footer">
    <?php get_footer(); ?>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>