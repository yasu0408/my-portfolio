<?php
for ($i = 0; $i < 3; $i++) {
  if ($i === 0) {
    $icon_url = 'pencil';
    $card_title = '学習意欲';
    $card_text = '週に平均50時間以上自主的に勉強しています。また自己学習でコーポレイトサイトを2つ短期間で作成しました。
現在、WebマーケティングやUI/UXデザインについて学習しています。';
  } else if ($i === 1) {
    $icon_url = 'english';
    $card_title = '外国語';
    $card_text = 'TOEICスコア800点以上を取得しております。英語でのコミュニケーションに自身があります。1年以上の留学経験を経てさまざまな国籍の人と交流した経験があります。';
  } else if ($i === 2) {
    $icon_url = 'idea';
    $card_title = '他業界の経験';
    $card_text = '医療、福祉、教育業界など合わせて約9年間の社会人経験があります。それらから培った経験や視点で新しいアイデアやアプローチを提供できます。
    ';
  }
?>
    <div class="skill_card">
      <p class="title"><?php echo $card_title ?></p>
      <div class="icon_container">
        <div class="icon_box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-<?php echo $icon_url; ?>.svg" alt="ico-html">
        </div>
      </div>
      <p class="text"><?php echo $card_text; ?></p>
    </div>
<?php
}
?>

