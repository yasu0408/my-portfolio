<?php 
/* 
* Template Name: お問い合わせのテンプレート
* Description: 下層ページ
*/
?>

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
  <section class="contact_page_first_view first_view">
    <div class="container">
      <p class="first_view_title">Contact Form</p>
    </div>
  </section>
  <main>
    <section class="sub_page_contact_form">
      <div class="container">
        <div class="contact_page_heading">
          <p class="title">Contact Form</p>
          <p class="text">コンタクトフォーム</p>
        </div>
      <div class="container">
        <?php the_content(); ?>
      </div>
    </section>
  </main>
  <footer class="footer">
    <?php get_footer(); ?>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>