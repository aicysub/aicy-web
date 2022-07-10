<?php
include('/hdd/aic/head.html');
ob_start();
?>
<div class="contents">
    <title>お問い合わせ - あいしぃーのさーばー</title>
<ol itemscope class="bread none" itemtype="https://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="/">
        <span itemprop="name">ホーム</span>
    </a>
    <meta itemprop="position" content="1" />
  </li>
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <span itemprop="name">お問い合わせ</span>
    </a>
    <meta itemprop="position" content="2" />
  </li>
</ol>
<style>
  #etc {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
  }
  #contacts {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
    pointer-events: none;
  }
  #etc i,#contacts i {
    color: var(--main-text);
  }
  </style>
    <div class="main">
<h2 class="h2 title">お問い合わせ</h2>
<p style="text-align: center;">こちらから運営へお問い合わせができます。</p>
<br>
<div class="box">
<form action="/contacts/complete/" id="contact" style="text-align: center;" method="post">
<p>ご自身のお名前（Discordの名前）</p>
    <input type="name" class="contact" name="contact1"  placeholder="お名前を入力..." required>
<p>ご自身のメールアドレス</p>
    <input type="email" class="contact" name="contact2"  placeholder="メールアドレスを入力..." required>
    <p style="font-size: 13px; margin: 10px;">必ず受信・送信が可能なメールアドレスを入力してください。</p>
    <div id="selected">
<p>お問い合わせ内容</p>
<select name="contact3" id="contact-select" required>
<option value="select" selected hidden>選択してください</option>
<optgroup label="Webサイトの問題">
  <option value="サイトのエラー">サイトのエラー</option>
  <option value="サイトの表示バグ">表示のバグ</option>
  <option value="文章修正">文章の問題</option>
  <option value="Web問い合わせのその他">その他</option>
</optgroup>
<optgroup label="Discordサーバーの問題">
  <option value="サーバーに参加できない">サーバーに参加できない</option>
  <option value="利用規約違反ユーザーの報告">利用規約違反ユーザーの報告</option>
  <option value="Discord問い合わせのその他">その他</option>
</optgroup>
<option value="その他">上のいずれでもない</option>
</select></div>
<section id="select">
<p style="font-size: 13px; margin: 10px;">上のドロップダウンから選択してください</p>
</section>
<section id="サイトのエラー" style="display: none;">
    <p>サイトのエラーが発生したページのリンクを入力してください。</p>
    <input type="url" id="サイトのエラー" class="contact" placeholder="リンクを入力..." name="contact4">
    <br><input type="submit" class="contact" id="contact" value="送信" required><span class="redo" onclick="var select = document.getElementById('contact-select'); select.selectedIndex = -1; var val = $('select option:selected').val();if (val == 'select') return;$('section').fadeOut();setTimeout(function(){$('#selected').fadeIn();},300);">選び直す</span><br>
</section>
<section id="サイトの表示バグ" style="display: none;">
    <p>表示のバグが発生したリンクを入力してください。</p>
    <input type="url" id="サイトの表示バグ" class="contact" placeholder="リンクを入力..." name="contact5">
    <br><input type="submit" class="contact" id="contact" value="送信" required><span class="redo" onclick="var select = document.getElementById('contact-select'); select.selectedIndex = -1; var val = $('select option:selected').val();if (val == 'select') return;$('section').fadeOut();setTimeout(function(){$('#selected').fadeIn();},300);">選び直す</span><br>
</section>
<section id="文章修正" style="display: none;">
    <p>文章の問題（表現の仕方、不快になった文章）が<br>あったリンクと該当文章を入力してください。</p>
    <input type="url" id="文章修正" class="contact" placeholder="リンクを入力..." name="contact6"><br>
    <textarea type="text" id="文章修正" class="contact" placeholder="文章を入力..." name="contact7"></textarea>
    <p>不快な思いをさせてしまい、申し訳ございませんでした。<br>運営と協議し該当文章の調整を行います。</p>
    <br><input type="submit" class="contact" id="contact" value="送信" required><span class="redo" onclick="var select = document.getElementById('contact-select'); select.selectedIndex = -1; var val = $('select option:selected').val();if (val == 'select') return;$('section').fadeOut();setTimeout(function(){$('#selected').fadeIn();},300);">選び直す</span><br>
</section>
<section id="Web問い合わせのその他" style="display: none;">
    <p>起きた問題と、リンクやスクリーンショットを入力してください。</p>
    <input type="url" id="Web問い合わせのその他" class="contact" placeholder="リンクを入力..." name="contact8"><br>
    <textarea type="text" id="Web問い合わせのその他" class="contact" placeholder="問題を入力..." name="contact9"></textarea><br>
    <input type="file" id="Web問い合わせのその他" class="contact" accept="image/*" name="contact10"><br>
    <input type="submit" class="contact" id="contact" value="送信" required><span class="redo" onclick="var select = document.getElementById('contact-select'); select.selectedIndex = -1; var val = $('select option:selected').val();if (val == 'select') return;$('section').fadeOut();setTimeout(function(){$('#selected').fadeIn();},300);">選び直す</span><br>
</section>
<section id="サーバーに参加できない" style="display: none;">
    <p>こちらが通常通り動く招待リンクとなります。<br>ご不便をおかけし誠に申し訳ございませんでした。</p>
    <a target="_blank" href="https://discord.gg/H5YR5tkNc9">https://discord.gg/H5YR5tkNc9M</a><br>
    <div class="contacts-copy_copy_txt">https://discord.gg/H5YR5tkNc9M</div>
    <br><span class="contacts-copy">コピーする</span> <span class="redo" onclick="var select = document.getElementById('contact-select'); select.selectedIndex = -1; var val = $('select option:selected').val();if (val == 'select') return;$('section').fadeOut();setTimeout(function(){$('#selected').fadeIn();},300);">選び直す</span>
</section>
<section id="利用規約違反ユーザーの報告" style="display: none;">
    <p>該当するユーザーの名前（#の後も）と<br>スクリーンショットを添付してください。</p>
    <input type="text" id="利用規約違反ユーザーの報告" class="contact" placeholder="ユーザー名を入力..." name="contact11"><br>
    <input type="file" id="利用規約違反ユーザーの報告" class="contact" accept="image/*" name="contact12"><br>
    <p>情報提供、ありがとうございます。不快な思いをさせてしまい、申し訳ございませんでした。<br>運営と該当ユーザーに対する対応を協議します</p>
    <br><input type="submit" class="contact" id="contact" value="送信" required><span class="redo" onclick="var select = document.getElementById('contact-select'); select.selectedIndex = -1; var val = $('select option:selected').val();if (val == 'select') return;$('section').fadeOut();setTimeout(function(){$('#selected').fadeIn();},300);">選び直す</span><br>
</section>
<section id="Discord問い合わせのその他" style="display: none;">
    <p>スクリーンショットや文章を入力してください。</p>
    <textarea type="text" id="Discord問い合わせのその他" class="contact" placeholder="文章を入力..." name="contact13"></textarea><br>
    <input type="file" id="Discord問い合わせのその他" class="contact" accept="image/*" name="contact14">
    <br><input type="submit" class="contact" id="contact" value="送信" required><span class="redo" onclick="var select = document.getElementById('contact-select'); select.selectedIndex = -1; var val = $('select option:selected').val();if (val == 'select') return;$('section').fadeOut();setTimeout(function(){$('#selected').fadeIn();},300);">選び直す</span><br>
</section>
<section id="その他" style="display: none;">
    <p>スクリーンショットや文章やリンクやユーザー名を入力してください。</p>
    <textarea type="text" id="その他" class="contact" placeholder="文章を入力..." name="contact15"></textarea><br>
    <input type="url" id="その他" class="contact" placeholder="リンクを入力..." name="contact16"><br>
    <input type="text" id="その他" class="contact" placeholder="ユーザー名を入力..." name="contact17"><br>
    <input type="file" id="その他" class="contact" accept="image/*" name="contact18">
    <br><input type="submit" class="contact" id="contact" value="送信" required><span class="redo" onclick="var select = document.getElementById('contact-select'); select.selectedIndex = -1; var val = $('select option:selected').val();if (val == 'select') return;$('section').fadeOut();setTimeout(function(){$('#selected').fadeIn();},300);">選び直す</span><br>
</section>
<p><br>またご入力いただいた内容（メールアドレスを除く）は不特定多数に見られる場合があります。</p>
    <p><br>(ご返信にお時間を頂く場合がございます。予めご了承ください。)</p>
</form>
</div>
<div class="modals" id="modals">