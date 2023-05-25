<?php
for ($i = 0; $i < 3; $i++) {
  if ($i === 0) {
    $icon_url = 'html-css';
    $card_title = 'HTML CSS';
    $card_text = 'レスポンシブデザインやSassの記述ができます。エディタはVisualStudioCodeを使用しています。';
  } else if ($i === 1) {
    $icon_url = 'web-design';
    $card_title = 'Webデザイン';
    $card_text = 'FigmaやXDを使用してホームページのデザインができます。また、イラストレーターを使用して名刺のデザインやバナー作成もできます。';
  } else if ($i === 2) {
    $icon_url = 'wordpress';
    $card_title = 'WordPress';
    $card_text = 'WordPressにてホームページを作成できます。PHPやJavascript、WordPress関数を用いてコーポレートサイトなどを作った経験があります。';
  }
?>
    <div class="skill_card">
      <p class="title"><?php echo $card_title ?></p>
      <div class="icon_container">
        <div class="icon_box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-<?php echo $icon_url; ?>-1.svg" alt="ico-html">
        </div>
        <div class="icon_box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-<?php echo $icon_url; ?>-2.svg" alt="ico-css">
        </div>
        <div class="icon_box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-<?php echo $icon_url; ?>-3.svg" alt="ico-scss">
        </div>
      </div>
      <p class="text"><?php echo $card_text; ?></p>
    </div>
<?php
}
?>

