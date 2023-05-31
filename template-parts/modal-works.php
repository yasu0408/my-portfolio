<?php  
for ($i = 0; $i < 3; $i++) {
  if ($i === 0) {
    // 泰寛建築についてのモーダル
    $modal_img = 'modal-yasuhiro-kenchiku';
    $modal_num = '1';
    $works_duration = '14日';
    $works_title = 'クライアントからの要望';
    $modal_request_1 = '・サイトが古くスマホサイズにも対応してなかったので今回一新したい。';
    $modal_request_2 = '・お客は市町村や大企業が多いので”きっちり施工をする”という印象をつけたい';
    $modal_request_3 = '・だが弁護士のサイト風の堅苦しい感じは避けたい';
    $modal_request_4 = '・お知らせと施工実績は別々に投稿できるようにしたい。';
    $modal_idea_1 = '・既存の投稿機能とは別にカスタム投稿機能を追加したこと';
    $modal_idea_2 = '・レスポンシブデザインに対応したコーディング';
    $modal_idea_3 = '・きっちりとした印象を保ちつつ堅苦しさを避けたデザイン';
    $design_camp = 'https://www.figma.com/file/hKwwIpFZvaRp9WqycvkHiy/yasuhiro-kenchiku?type=design&node-id=0%3A1&t=2SKbE41rDB7pwFZR-1';
    $works_url = 'https://yasuhiro-kenchiku.com';
  } else if ($i === 1) {
    // ファーストステップについてのモーダル
    $modal_img = 'modal-firststep';
    $modal_num = '2';
    $works_duration = '20日';
    $works_title = 'クライアントからの要望';
    $modal_request_1 = '・ホームページを通じて会社の印象を良くしたい';
    $modal_request_2 = '・会社の経営する3施設、それぞれ個別のページを作ってほしい。';
    $modal_request_3 = '・また施設ごとにブログ投稿できるようにいてほしい';
    $modal_request_4 = '・児童施設のページでは親しみやすくかわいい雰囲気にしてほしい';
    $modal_idea_1 = '・安心や親しみなどが感じられるようなデザインを意識したこと';
    $modal_idea_2 = '・会社の経営する3施設それぞれ個別のページを作成し個別に投稿機能を追加したこと';
    $modal_idea_3 = '・児童施設のページではかわいい雰囲気のデザインを意識したこと';
    $design_camp = 'https://www.figma.com/file/7H7Otm6j316hSv8jIuTdKq/first-step-site-(Copy)?type=design&node-id=0%3A1&t=mmGMoTovTYlxNA5M-1';
    $works_url = 'https://yasucode.online';
  } else if ($i === 2) {
    // このサイトについてのモーダル
    $modal_img = 'hp-my-portfolio';
    $modal_num = '3';
    $works_duration = '14日';
    $works_title = 'どんなポートフォリオサイトにしたいか';
    $modal_request_1 = '・シンプルでわかりやすい';
    $modal_request_2 = '・デザインの基本的原則に則っている';
    $modal_request_3 = '・UI/UXデザインを意識した作り';
    $modal_request_4 = '・仕事を求めているという熱意が伝わるサイト';
    $modal_idea_1 = '・極力ページ移動を少なくして1ページで伝わるようにしたこと';
    $modal_idea_2 = '・素材写真やコピーにも力を入れたこと';
    $modal_idea_3 = '・Gitを利用してオープンソースにしたこと';
    $design_camp = 'https://www.figma.com/file/nIJffNGqyOxoNOXVpWjgZd/portfolio-yasuhiro-(Copy)?type=design&node-id=1607%3A603&t=S7FyaN7XpbfxIxj4-1';
    $works_url = 'https://ogawa-yasuhiro.site';
  }
?>

<div id="modal_<?php echo $modal_num?>" class="modal">
  <div class="modal_content">
    <div class="modal_top">
      <span class="close_btn">&times;</span>
      </div>
    <div class="modal_container">
      <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $modal_img?>.jpg" alt="modal-img">
      <p class="sub_title">担当部分</p>
      <p class="text mb_16">企画・デザイン・コーティング</p>
      <p class="sub_title">制作時間</p>
      <p class="text mb_16"><?php echo $works_duration ?></p>
      <p class="sub_title"><?php echo $works_title ?></p>
      <div class="modal_text_container">
        <ul class="text">
          <li><?php echo $modal_request_1 ?></li>
          <li><?php echo $modal_request_2 ?></li>
          <li><?php echo $modal_request_3 ?></li>
          <li><?php echo $modal_request_4 ?></li>
        </ul>
      </div>
      <p class="sub_title">工夫した所</p>
      <div class="modal_text_container">
        <ul class="text">
          <li><?php echo $modal_idea_1 ?></li>
          <li><?php echo $modal_idea_2 ?></li>
          <li><?php echo $modal_idea_3 ?></li>
        </ul>
      </div>
      <p class="sub_title">デザインカンプ</p>
      <a class="modal_link" target="_blank" href="<?php echo esc_url($design_camp); ?>">https://www.figma.com/file・・・</a>
      <p class="sub_title">サイトURL</p>
      <a class="modal_link" target="_blank" href="<?php echo esc_url($works_url); ?>"><?php echo $works_url ?></a>
    </div>
  </div>
</div>

<?php 
}
?>