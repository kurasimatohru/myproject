    <!-- common -->
   @include("parts.common",["title" => "お問い合わせ"])
    <!-- header -->
   @include("parts.header")
    
    <!-- 以下、サイトの中身部分 -->
    

    <!--  灰色の大枠 -->
<div class="contact-bigfream">
  
　<br>

 　 <p class="lead-form">お問い合わせフォーム</p>
  
　<form>

　　<div class="item">
　　　<label class="label">お名前</label>
　　　<input class="inputs" type="text" name="name" placeholder="例：****太郎">
　　</div>

　　<div class="item">
　　　<label class="label">メールアドレス</label>
　　　<input class="inputs" type="email" name="email" placeholder="例：*****@**.co.jp">
　　</div>

　　<div class="item">
　　　<label class="label">タイトル</label>
　　　<input class="inputs" type="text" name="title" placeholder="例：機能について">
　　</div>

　　<div class="item">
　　　<label class="label">お問い合わせ内容</label>
　　　<textarea class="inputs" name="comment" placeholder="ここには自由にコメントを記入してください。"></textarea>
　　</div>

　　<div class="btn-area">
　　　<input type="submit" value="送信">
　　</div>

　<br>


　</form>

</div>
    
    
    
    
    <!-- 以上、サイトの中身部分 -->
    
    <!-- footer -->
  @include("parts.footer")
    
  </body>
</html>