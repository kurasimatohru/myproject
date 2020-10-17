<!DOCTYPE html>
<html lang="ja">
  <head>
　　<meta charset="UTF-8">
    <title>ゲーム風野球能力変換サイト</title>
    <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
    <link rel="stylesheet" href="css/normalize.css">

  </head>
  
  
  
  <body>
    <!-- header -->
   @include("parts.header")
    
    <!-- サイトの中身部分 -->

  <table>
	<tbody>
		<tr>
			<td>球速</td>
			<td>コントロール</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
<br>
    
    <!-- footer -->
  @include("parts.footer")
    
  </body>
</html>