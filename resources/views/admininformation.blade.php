    <!-- common -->
   @include("parts.common")
    <!-- header -->
   @include("parts.header")
    
    <!-- 以下、サイトの中身部分 -->
    
<!--  灰色の大枠 -->
<div class="admin-information-bigfream">
  
　<br>
    <div class="lead-form">
     <p><span style="font-size:25px;">管理者画面</span><span style="font-size:16px;">　　更新情報投稿画面</span></p>
    </div>
 
　<form>


　 　<div class="item">
　 　　<label class="label">更新内容</label>
　 　　<textarea class="inputs" name="comment"></textarea>
　 　</div>
　　


　 　<div class="btn-area">
　 　　<input type="submit" value="投稿">
　 　</div>

　<br>


　</form>

</div>

    
    
    
    
    
    <!-- 以上、サイトの中身部分 -->
    
    <!-- footer -->
  @include("parts.footer")
    
  </body>
</html>