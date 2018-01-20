<?php
$filename='kadai4.text';
//filenameをkadai3とする;


$line='hoge';

$count=count(file($filename));
//行数カウントし、$countに代入;

$time=date('Y/m/j g:i:s');

$fp=fopen($filename,'a');
// fpはcomment.textを開いて書き込む（a=追記モード）;

fwrite($fp,$count);
//代入したcountを書き込み;

fwrite($fp,"<>");
//<>を書き込み;

fwrite($fp,$_GET['name']);
//追記モードで開いたkadai3.textに取得したコメントを書き込み 改行して;

if(isset($_GET['name'])){
//取得したnameとcomment(name)に書き込みがあれば正、なければ偽とする;
$comment1=$_GET['name'];
//commentは取得したコメント;

echo $comment1;
//nameはcomment1;
}

fwrite($fp,"<>");
//<>書き込み;

fwrite($fp,$_GET['comments']);
//追記モードで開いたkadai3.textに取得したコメントを書き込み 改行して;

if(isset($_GET['comments'])){
//取得したnameとcomment(comments)に書き込みがあれば正、なければ偽とする;
$comment2=$_GET['comments'];
//commentは取得したコメント;

echo $comment2;
//commentsはcomment2;
}

fwrite($fp,"<>");
//<>書き込み;

fwrite($fp,date('Y/m/j g:i:s')."\n");


$ret_array=file($filename);

for($i=0;$i<count($ret_array);++$i){echo($ret_array[$i]."<br/>\n");}
//配列を読み込みブラウザに表示;

$a="$count"."<>"."$comment1"."<>"."$comment2"."<>"."$time";

$aa=explode("<>",$a);
echo '<p>',$aa[0],'</p>';
echo '<p>',$aa[1],'</p>';
echo '<p>',$aa[2],'</p>';
echo '<p>',$aa[3],'</p>';
//フォーム入力内容を分割して表示;

fclose($fp)
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UFT-8">
<title>縄文遺跡巡りブログ</title>
</head>
<body>
<h1>縄文遺跡巡りブログ</h1>
<form action="mission_2-3.php"method="get">
名前<br/>
<input type="text" name="name"><br/>
コメント<br/>
<input type="text" name="comments"><br/>
<input type="submit" value="送信"/>
</form>
</body>
</html>
