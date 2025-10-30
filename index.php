<?php
function ver($path) {
  $fullPath = $_SERVER['DOCUMENT_ROOT'] . $path;
  if (file_exists($fullPath)) {
    return filemtime($fullPath);
  } else {
    return time(); // デバッグ用 fallback
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

  <!-- prefix設定必要 -->
  <head prefix="og:https://toinkagaku.net/ website:https://toinkagaku.net/">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="description" content="和歌山県立桐蔭高等学校･科学部が運営しているWebサイトです。このページのリンクから、これまでに桐蔭科学部が作成・運営してきたWebサイトへとアクセスすることができます。">

    <title>桐蔭科学部 | ホーム</title>

    <!-- ================================================== -->

    <!-- アイコン読み込み(FontAwesome) -->
    <script src="https://kit.fontawesome.com/55a94ac375.js" crossorigin="anonymous"></script>

    <!-- ================================================== -->

    <!-- リセットcss読み込み -->
    <link rel="stylesheet" href="/asset/css/reset.css">

    <!-- フォントcss読み込み -->
    <!-- ページ読み込み高速化のためNotoSansJPはGoogleFontsのAPIを使用 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

    <!-- css変数読み込み -->
    <link rel="stylesheet" href="/asset/css/variable.css?ver=<?= ver("/asset/css/variable.css") ?>">
    <!-- <link rel="stylesheet" href="/asset/css/variable.css"> -->
    
    <!-- 自作css読み込み -->
    <link rel="stylesheet" href="/asset/css/style.css?ver=<?= ver("/asset/css/style.css") ?>">
    <!-- <link rel="stylesheet" href="/asset/css/style.css"> -->

    <!-- iPhone背景色用 -->
    <meta name="theme-color" content="#f4f4f4">

    <!-- ================================================== -->

    <!-- ファビコン読み込み -->
    <link rel="icon" type="image/png" href="/asset/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/asset/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/asset/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/asset/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="ToinKagaku" />
    <link rel="manifest" href="/asset/favicon/site.webmanifest" />

    <!-- ================================================== -->

    <!-- ページのデスクリプション -->
    <meta property="og:url" content="https://toinkagaku.net/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="桐蔭科学部 | ホーム"/>
    <meta property="og:description" content="和歌山県立桐蔭高等学校･科学部が運営しているWebサイトです。このページのリンクから、これまでに桐蔭科学部が作成・運営してきたWebサイトへとアクセスすることができます。"/>
    <meta property="og:site_name" content="桐蔭科学部 | ホーム"/>
    <meta property="og:image" content="https://toinkagaku.net/asset/favicon/favicon.png"/>


  </head>



  <body>
    
    <!-- javascriptが無効の場合 -->
    <noscript>
      <h2>JavaScriptが無効です</h2>
      <p>ブラウザの設定から有効にして再度お試しください</p>
    </noscript>

    <!-- ================================================== -->

    <header>
      <a href="./">桐蔭科学部 | ホーム</a>
      <a href="#">Top</a>
      <a href="#about">About</a>
      <a href="#link">Links</a>
      <a href="#repository">Repositories</a>

      <button id="menuOpen">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </header>

    <menu>
      <ul>
        <li><a href="#">Top</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#link">Links</a></li>
        <li><a href="#repository">Repositories</a></li>
      </ul>
    </menu>

    <span id="topspan"></span>

    <!-- ================================================== -->
    
    <div id="welcome">
      <h1>Welcome to Kagakubu-Server.</h1>
      <h2>科学部サーバーへ、ようこそ。</h2>
      <span>このサーバーは 和歌山県立桐蔭高校 科学部 によって運営されています</span>

      <p>
        科学部サーバーへようこそ！あなたのアクセスを歓迎します！<br>
        私たち桐蔭科学部では、桐蔭中高文化祭「桐蔭祭」の公式WebサイトやNASA SpaceAppsChalllenge Kushimotoの参加作品など様々な場面でWebサイトを制作･リリースしてきました。このサーバーには、これまで科学部が制作･運営してきた様々なWebサイトへのアクセスリンクが掲載されています。ぜひ一度、各サイトにアクセスしてみてください！<br>
      </p>
    </div>

    <!-- ================================================== -->

    <section id="about">
      
      <h1>About</h1>
      <h2>桐蔭科学部について</h2>
      
      <h3>桐蔭科学部とは</h3>
      <p>
        私たち「桐蔭科学部」は、和歌山県立桐蔭中学校･高等学校 科学部 缶サット班 として活動している部活動です。<br>
        主な活動内容としては、<br>
      </p>
      <ul>
        <li>缶サット</li>
        <li>サッカーロボット</li>
        <li>ドローンプログラミング</li>
        <li>プログラミング [C/Python など]</li>
        <li>Web開発 [HTML/CSS/Javascript/SQL/PHP]</li>
        <li>動画編集</li>
        <li>3Dモデリング</li>
      </ul>
      <p>
        など多岐にわたります。また、これらの活動の中で参加している大会としては、
      </p>
      <ul>
        <li>宇宙甲子園 缶サット部門 / ロケット部門</li>
        <li>ロボカップ･ジュニア サッカー ライトウェイト / エントリー</li>
        <li>ドローンプログラミングチャレンジ</li>
        <li>NASA SpaceAppsChallenge</li>
      </ul>
      <p>
        などの様々な大会に参加し、その多くで高い成績をおさめています。
      </p>

      <h3>サーバーの運営者</h3>
      <p>
        このポータルサイトは、高校3年生の部員（2025年度時点）が自主的に制作したものです。<br>
        もともと本サーバーは桐蔭祭サイト専用のものとして使用する予定でしたが、ほかの使用用途もある可能性を考えて、現在のようにオープンなサーバーの形式にしています。
      </p>

    </section>

    <!-- ================================================== -->

    <section id="link">
      
      <h1>Links</h1>
      <h2>リンク集</h2>

    </section>

    <!-- ================================================== -->

    <section id="repository">
      
      <h1>Repositories</h1>
      <h2>リポジトリ集</h2>

      <p>これまで作成したWebサイトのデータを保管しているリポジトリの一覧です。一部のリポジトリはプライベートリポジトリに設定しているため閲覧できない場合がありますが、学校内の情報の外部流出やプライバシーの観点からの設定ですので、ご承知くださいますようお願いいたします。</p>

    </section>

    <!-- ================================================== -->

    <footer>
      <p>&copy; 2025 桐蔭科学部</p>
    </footer>

    <!-- ================================================== -->

    <!-- javascript -->
    <script src="/asset/js/script.js?ver=<?= ver("/asset/js/script.js") ?>" defer></script>
    <!-- <script src="/asset/js/script.js" defer></script> -->

  </body>

</html>