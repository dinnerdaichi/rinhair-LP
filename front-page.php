<?php
$options = get_design_plus_option();
get_header();
?>
<div class="p-header-content">
  <?php get_template_part('template-parts/header-content'); ?>
  <?php if ($options['display_news_ticker']) : ?>
    <div class="p-news-ticker">
      <div id="js-news-ticker" class="p-news-ticker__inner l-inner">
        <?php
        $news_ticker_array = array();
        for ($i = 1; $i <= 5; $i++) :
          if ($options['news_ticker_catch' . $i]) :
            array_push($news_ticker_array, $options['news_ticker_catch' . $i]);
          endif;
        endfor;
        if (count($news_ticker_array) > 1) :
        ?>
          <ul id="js-news-ticker__list" class="p-news-ticker__list">
          <?php else : ?>
            <ul id="js-news-ticker__list_static" class="p-news-ticker__list">
            <?php endif; ?>
            <?php
            for ($i = 1; $i <= 5; $i++) :
              if ($options['news_ticker_catch' . $i]) :
            ?>
                <li class="p-news-ticker__list-item">
                  <time class="p-news-ticker__list-item-date" datetime="<?php echo esc_attr($options['news_ticker_date' . $i]); ?>"><?php echo date('Y.m.d', strtotime($options['news_ticker_date' . $i])); ?></time>
                  <a href="<?php echo esc_url($options['news_ticker_url' . $i]); ?>" class="p-news-ticker__list-item-title" <?php if ($options['news_ticker_target' . $i]) {
                                                                                                                              echo ' target="_blank"';
                                                                                                                            } ?>><?php echo wp_is_mobile() ? esc_html(wp_trim_words($options['news_ticker_catch' . $i], 40, '...')) : esc_html($options['news_ticker_catch' . $i]); ?></a>
                </li>
            <?php endif;
            endfor; ?>
            </ul>
            <?php if ($options['news_ticker_btn_label']) : ?>
              <a id="js-news-ticker__btn" href="#" class="p-news-ticker__btn p-btn"><?php echo esc_html($options['news_ticker_btn_label']); ?></a>
            <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</div>
<div class="content concept">
  <div class="content__head">
       <p>髪質を理由にキレイを諦めない</p>
       <p>子育てを理由にキレイを諦めない</p>
    <a href="https://lin.ee/qJydyXq" class="line"><img src="http://riin-hair.com/wp-content/uploads/2023/01/LINE.png" alt="友だち追加" height="36" border="0"></a>
  </div>
  <div class="content__box">
    <ul class="content__flex">
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/18250260_MotionElements_natural-cosmetic-product-scaled.jpg">
        <h3>フルオーダーメイド</h3>
        <p>一人一人違うクセや太さ、ダメージを見極めてあなただけの薬剤をその場で調合いたします</p>
        <p>トリートメントも必要な栄養分をたっぷり内側まで届けるフルオーダートリートメントもご用意しております。</p>
        <p>また、お飲み物やBGMもご希望があればご用意させて頂いております。<br>（コロナ収束までドリンク提供は水のみとさせて頂いております。</p>
      </li>
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/DSC09609-2.png">
        <h3>オーナーマンツーマン</h3>
        <p>薬剤の塗布やアイロンの熱入れ、水分量を調節するドライコントロールに至るまで、マニュアル化できない程複雑な技術です。</p>
        <p>多人数サロン様では再現不可能な技術をマンツーマンならではでご提供させて頂きます。相談しにくい事も何なりとご相談ください。コロナ対策も万全です。</p>
      </li>
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/IMG_9138.jpg">
        <h3>完全貸切</h3>
        <p>映画を見たり雑誌や小説を見たり忙しくてできなかった事をご自身の時間としてお過ごし下さい。</p>
        <p>キッズスペース有りと、ベビーカーやお子様とご一緒でのご来店もおすすめです。</p>
        <p>キッズスペースがあっても「もし泣いてしまったらどうしよう・・」そんなママさんならではの不安もご安心ください。２児の父親経験を生かして、眠くなるBGMやおむつ交換台も完備しております。</p>
      </li>
    </ul>

  </div>


</div>
<div class="content commit">
  <div class="content__box">
    <ul class="content__flex">
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/paper-gce7b5b5cc_1280.jpg">
        <h3>カウンセリング</h3>
        <p>初めてご来店頂いた方にはしっかりとカウンセリングさせて頂きます。</p>
        <p>ダメージの履歴や普段のケア方法、年齢とともに変わっていく毛質や、ライフワークまでお聞かせください。</p>
        <p>その後、濡れた状態と乾いた状態を髪の毛を触診することで髪の毛の状態も直接診断致します。</p>
        <p>クセの種類や、ダメージした経緯、削がれ過ぎたカット・・と、まとまらない数ある理由からしっかり見つめ直していきます。</p>
      </li>
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/19199108_MotionElements_hands-of-professional_converted_a-0005.jpg">
        <h3>薬剤選び</h3>
        <p>お顔周りの産毛やもみあげ、頭頂部や襟足の太さやクセの強さが全て違うことはご存知でしょうか？！</p>
        <p>その場所その場所に最適な薬剤を選んでいく技術は知識だけではなく、髪質改善に特化した経験値がないと判断できません。</p>
        <p>失敗されたご経験がある方もいらっしゃるかと思いますが、その多くは薬剤と髪の毛が合っていなかった事が原因です。</p>
      </li>
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/08/18752008_MotionElements_beautiful-blonde-woman-scaled.jpg">
        <h3>おうちでのケア</h3>
        <p>全国の美容室への平均来店回数は4〜5回です。</p>
        <p>私が今までにないサラサラな髪の毛のお手伝いを全力でさせて頂いた後、残りの360日はお家であなたがケアしていく事になります。</p>
        <p>その日どのような技術をさせて頂いたか、の美容師の自己満足よりもあなたのクセの特徴やダメージの習性によって、乾かし方や、リンヘアーオリジナルの髪質改善特化トリートメントや、シャンプーに至るまで、しっかりとご説明させて頂きます。</p>
        <p>（商品ご購入ご希望の際はお客様からお伝えくださいませ。）</p>
        </p>
      </li>
    </ul>

  </div>


</div>
<div class="l-inner">
  <div class="l-contents">
    <div class="l-primary">
      <?php
      foreach ((array) $options['index_contents_order'] as $content) :
        if (!$options['display_index_' . $content]) continue;
        $title = esc_html($options['index_' . $content . '_title']);
        $title_font_size = esc_attr($options['index_' . $content . '_title_font_size']);
        $title_color = esc_attr($options['index_' . $content . '_title_color']);
        $sub = esc_html($options['index_' . $content . '_sub']);
        $sub_font_size = esc_attr($options['index_' . $content . '_sub_font_size']);
        $sub_color = esc_attr($options['index_' . $content . '_sub_color']);
        $title_bg = esc_attr($options['index_' . $content . '_title_bg']);
      ?>


        <section class="p-index-content">
          <header class="p-index-content__header">
            <h2 class="p-index-content__header-title" style="background: <?php echo $title_bg; ?>; color: <?php echo $title_color; ?>; font-size: <?php echo $title_font_size; ?>px;"><?php echo $title; ?><span style="color: <?php echo $sub_color; ?>; font-size: <?php echo $sub_font_size; ?>px;"><?php echo $sub; ?></span></h2>
            <p class="p-index-content__header-desc"><?php echo nl2br(esc_html($options['index_' . $content . '_desc'])); ?></p>
          </header>
          <div class="p-index-content__<?php echo esc_attr($content); ?>">

            <?php
            if ('style' === $content) :
              $args = array(
                'post_type' => $content,
                'post_status' => 'publish',
                'posts_per_page' => $options['index_' . $content . '_num'],
                //'order_by' => array( 'menu_order' => 'ASC', 'date' => 'DESC' )
              );
              $the_query = new WP_Query($args);
            ?>
              <?php /* 
              <ul class="p-latest-news">
                <?php
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) :
                    $the_query->the_post();
                    ?>
                    <li class="p-latest-news__item p-article05">
                      <a href="<?php the_permalink(); ?>" class="p-hover-effect--<?php echo esc_attr($options['hover_type']); ?>">
                        <div class="p-article05__img">
                          <?php
                          if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                          } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/no-image-300x300.gif" alt="">' . "\n";
                          }
                          ?>
                        </div>
                        <div class="p-article05__content">
                          
                        </div>
                      </a>
                    </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    else :
                      echo '<li>' . __('There is no registered post.', 'tcd-w') . '</li>' . "\n";
                      endif;
                      ?>
                    </ul>
                          */ ?>

              <?php /*
            elseif ('style' === $content) :
              $args = array(
                'post_type' => $content,
                'post_status' => 'publish',
                'posts_per_page' => $options['index_' . $content . '_num'],
                //'order_by' => array( 'menu_order' => 'ASC', 'date' => 'DESC' )
              );
              $the_query = new WP_Query($args);
           */ ?>
              <ul class="p-style-list">
                <?php
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) :
                    $the_query->the_post();
                ?>
                    <li class="p-style-list__item">
                      <a href="<?php the_permalink(); ?>" class="p-style-list__item-img p-hover-effect--<?php echo esc_attr($options['hover_type']); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('size4');
                        } else {
                          echo '<img src="' . get_template_directory_uri() . '/assets/images/no-image-370x500.gif" alt="">' . "\n";
                        }
                        ?>
                      </a>
                    </li>
                <?php
                  endwhile;
                  wp_reset_postdata();
                else :
                  echo '<p>' . __('There is no registered post.', 'tcd-w') . '</p>' . "\n";
                endif;
                ?>
              </ul>
            <?php
            elseif ('staff' === $content) :
              $args = array(
                'post_type' => $content,
                'post_status' => 'publish',
                'posts_per_page' => $options['index_' . $content . '_num'],
                //'order_by' => array( 'menu_order' => 'ASC', 'date' => 'DESC' )
              );
              $the_query = new WP_Query($args);
            ?>
              <div class="p-staff-list">
                <?php
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) :
                    $the_query->the_post();
                ?>
                    <article class="p-staff-list__item p-article06">
                      <a class="p-hover-effect--<?php echo esc_attr($options['hover_type']); ?>" href="<?php the_permalink(); ?>">
                        <div class="p-article06__img">
                          <?php
                          if (has_post_thumbnail()) {
                            the_post_thumbnail('size4');
                          } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/no-image-370x500.gif" alt="">' . "\n";
                          }
                          ?>
                        </div>
                        <div class="p-article06__content">
                          <?php if ($post->staff_job_title) : ?>
                            <p class="p-article06__position"><?php echo esc_html($post->staff_job_title); ?></p>
                          <?php endif; ?>
                          <h2 class="p-article06__name"><?php the_title(); ?></h2>
                          <?php if ($post->staff_comment) : ?>
                            <p class="p-article06__comment"><?php echo is_mobile() ? wp_trim_words($post->staff_comment, 22, '...') : wp_trim_words($post->staff_comment, 50, '...'); ?></p>
                          <?php endif; ?>
                        </div>
                      </a>
                    </article>
                <?php
                  endwhile;
                  wp_reset_postdata();
                else :
                  echo '<p>' . __('There is no registered post.', 'tcd-w') . '</p>' . "\n";
                endif;
                ?>
              </div>
            <?php endif; ?>
          </div>
          <?php /* 
          <?php if ($options['index_' . $content . '_link_text']) : ?>
            <a href="<?php echo get_post_type_archive_link($content); ?>" class="p-index-content__btn p-btn"><?php echo esc_html($options['index_' . $content . '_link_text']); ?></a>
          <?php endif; ?>

         */ ?>
        </section>
      <?php endforeach; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>



<div class="content faq">
  <div class="faq__title">
    <p>ご来店前に頂くご質問と回答</p>
  </div>
  <div class="content__box">
    <ul class="faq__box">
      <li>
        <div class="faq__head">
          <h4>Q：私の髪はクセも強く傷みもヒドイです。そんな髪でも艶髪になれますか？</h4>
        </div>
        <div class="faq__text">
          <p>髪質やダメージ、今現在の状態によって必要な期間は異なりますが、
            初めてのご来店頂いたその日から今までとは違う髪の毛をご体感して頂けます。</p>
          <p>最後のお仕上げにいつもは巻いていたお客様も、風になびくのを生まれて初めて体感できるから。と、セットをお断りになられるかたも多いです。初めてのご来店頂いたその日から今までとは違う髪の毛をご体感して頂けます。</p>
          <p>ダメージによっては、１度目の施術はヘアケアを。２度目で髪質改善をお勧めさせて頂く場合もございます。ぜひ一度ご相談にいらしてください。丁寧なカウンセリングと施術で全ての不安を消し去り、安心して髪をお任せいただけるようになります。</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q：前回の美容室で髪がすごく傷みました。美容師さんに髪を任せるのが不安です</h4>
        </div>
        <div class="faq__text">
          <p>Ri!Nhairでは髪に負担をかけないようにする為に、フルオーダーでその場で調合するオリジナルの薬剤で施術いたします。</p>

          <p>また、カウンセリングで丁寧に状態を判断してから、落ち着いた貸切空間で担当者であるベテランオーナーとマンツーマンでスタート。
            オーナースタイリストがあなただけに集中して行います。</p>

          <p>１人のスタイリストが複数のお客様を掛け持ちしないため、技術力の不足や、店内の混雑から起きる事故（髪のダメージ）もありません。

            もし、あなたのご要望が髪への致命的なダメージに繋がりそうな時は、担当者からリスクについて徹底したお話しがあります。
            場合によっては、ストップやメニューの延期をご提案いたします。</p>

          <p>全てはあなたの綺麗な髪を諦めないために。。「知らず知らずのうちに傷んでしまった」という悲しい思いをさせません。</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q：施術に時間がかかるみたいですが、毎回、同じくらい時間がかかるんですか？</h4>
        </div>
        <div class="faq__text">
          <p>あなたに満足して頂く為に、Ri!N
            hairでは初回のカウンセリングとカルテ作りを徹底しています。

            これがしっかりとできていないと、お客様とスタイリストの認識ズレが生じてしまいます。

            そうならない様に”初回”のみお時間を頂きます。</p>

          <p>2回目以降は、前回の施術からの髪質の変化を確認してからスタートします。
            1回目ほどのお時間はかかりませんのでご安心くださいませ</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q：2つのメニュー（例：カラーとストレート）を同時にやっていただきたいのですが。</h4>
        </div>
        <div class="faq__text">
          <p>基本的には出来れば３週間ほどの間隔を推奨させて頂いておりますが、ご予定の都合上、どうしてもという方には　根本のヘアカラーのみ同時に背術させて頂けます。</p>

          <p>ただし、髪のダメージへの配慮から、初回のお客様と髪の傷みが強いお客様に関しては、複数メニューの同時施術を見送らせていただいております。
            ご理解とご了承のほどよろしくお願いいたします。</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q：どんな髪でもストレート（縮毛矯正）があてられますか？</h4>
        </div>
        <div class="faq__text">
          <p>申し訳ございません。髪のご状況によっては負担が強い施術ができない可能性もあります。</p>
          <p>一番やってはいけない事は、お客さまの髪の毛を髪の毛がまとまらない程ダメージさせてしまう事です。そのダメージをカウンセリングで見極め、お断りする事もプロの仕事だと認識しております。ダメージを元には戻せない髪の毛にとって、この見極めと薬剤選定が知識だけではなく、専門店ならではの経験が必要になってまいります。一度ご相談くださいませ。</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q：子供も一緒に行って待ってても大丈夫ですか？</h4>
        </div>
        <div class="faq__text">
          <p>もちろんです。全てのお母様がお子様を理由に綺麗になれない　そんな方を1人でもお手伝いできたらと始めた美容室です。
            キッズスペース、タブレットはもちろん、おむつ変え台や瀬術の合間にご飯をとられる方もいらっしゃいます。ご自由なリラックス時間を過ごして頂くことが一番の喜びです。</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q：初めての予約でもLINEからしていいでしょうか？</h4>
        </div>
        <div class="faq__text">
          <p>はい、ぜひLINEからご予約下さい。

            マンツーマンで施術をしているため、タイミングによってはお電話に出れないときもございます。

            着信が残っている場合は、必ずこちらからかけなおさせて頂きますが、入れ違いもあるのでLINEからのほうがスムーズにご予約いただけます。</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q：私の年齢でもRi!Nhairにいってもいいでしょうか？</h4>
        </div>
        <div class="faq__text">
          <p>Ri!N
            hairは髪がまとまらずにお困りの女性、髪をキレイな艶髪にしたい女性の為に立ち上げたサロンです。

            年齢に関係なくキレイな髪に憧れをもつ女性は、お気軽にお越しください。</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q：カットは他のサロンでしても大丈夫ですか？</h4>
        </div>
        <div class="faq__text">
          <p>はい！もちろん問題ありません。

            是非お気に入りのサロンでカットをしてください。</p>


          <p>カットのポイントは”梳かれ過ぎない”こと”切られ過ぎない”ことの二つです。いつもはかなり根本からすいて頂いている方はいつもよりやや重めに、後で髪質改善や矯正メニューをするので。と伝えていただけると、イメージして頂きやすいかと思います。
            これだけ注意して頂き、薬剤メニューをRi!N hairにお任せいただければキレイな髪は作れます。</p>

          <p>カラーやパーマ、ストレートやトリートメントなどの施術は髪質を良くも悪くもします。
            カットで髪質が大きく変わることはありませが薬剤メニューは髪の美しさを左右します。</p>

          <p>髪質を決める薬剤を使用するメニューは必ずRi!N hairにお任せください。</p>
        </div>
      </li>
      <li>
        <div class="faq__head">
          <h4>Q：仕事で予定が分からないし、距離が遠くてなかなか通えません。 それでもRi!N hairさんに髪を見てもらいたいんですが、いいでしょうか？</h4>
        </div>
        <div class="faq__text">
          <p>はい、お越しいただけるタイミングでぜひご来店下さい。

            LINEにご登録いただければ、キャンセルの際に空き時間をご案内しています。
            タイミングが合う時にご利用ください。</p>

          Ri!N hairでは県外はもちろん、海外にお住いのお客様もわざわざお越しいただき髪を任せてくださっています。

          遠方なので年間のご来店回数は限られていますが、髪が確実にキレイになっています。

          <p>通えないときの注意点などもご来店の際にお話しいたしますので、ぜひいちどお越し頂き、髪をお預けください。
          </p>
        </div>
      </li>

    </ul>

  </div>


</div>

<div class="content voice">
  <div class="content__head">
    <p>お客様の声</p>
  </div>

  <div class="voice__box">
    <ul>
      <li>
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7319.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7320.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7321.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7322.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7323.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7324.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7325.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7326.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7327.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7328.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7329.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7330.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7331.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7332.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7333.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7334.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7335.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7336.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7337.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7338.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7339.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7340.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7341.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7342.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7343.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7344.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7345.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7346.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7347.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7348.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7349.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7350.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7351.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7352.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7353.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7354.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7355.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7356.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7357.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7358.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7359.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7360.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7361.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7362.jpg">
        <img src="http://riin-hair.com/wp-content/uploads/2022/09/IMG_7363.jpg">
      </li>
    </ul>
  </div>
</div>

</main>
<?php get_footer(); ?>