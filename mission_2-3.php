<?php
$filename='kadai4.text';
//filename��kadai3�Ƃ���;


$line='hoge';

$count=count(file($filename));
//�s���J�E���g���A$count�ɑ��;

$time=date('Y/m/j g:i:s');

$fp=fopen($filename,'a');
// fp��comment.text���J���ď������ށia=�ǋL���[�h�j;

fwrite($fp,$count);
//�������count����������;

fwrite($fp,"<>");
//<>����������;

fwrite($fp,$_GET['name']);
//�ǋL���[�h�ŊJ����kadai3.text�Ɏ擾�����R�����g���������� ���s����;

if(isset($_GET['name'])){
//�擾����name��comment(name)�ɏ������݂�����ΐ��A�Ȃ���΋U�Ƃ���;
$comment1=$_GET['name'];
//comment�͎擾�����R�����g;

echo $comment1;
//name��comment1;
}

fwrite($fp,"<>");
//<>��������;

fwrite($fp,$_GET['comments']);
//�ǋL���[�h�ŊJ����kadai3.text�Ɏ擾�����R�����g���������� ���s����;

if(isset($_GET['comments'])){
//�擾����name��comment(comments)�ɏ������݂�����ΐ��A�Ȃ���΋U�Ƃ���;
$comment2=$_GET['comments'];
//comment�͎擾�����R�����g;

echo $comment2;
//comments��comment2;
}

fwrite($fp,"<>");
//<>��������;

fwrite($fp,date('Y/m/j g:i:s')."\n");


$ret_array=file($filename);

for($i=0;$i<count($ret_array);++$i){echo($ret_array[$i]."<br/>\n");}
//�z���ǂݍ��݃u���E�U�ɕ\��;

$a="$count"."<>"."$comment1"."<>"."$comment2"."<>"."$time";

$aa=explode("<>",$a);
echo '<p>',$aa[0],'</p>';
echo '<p>',$aa[1],'</p>';
echo '<p>',$aa[2],'</p>';
echo '<p>',$aa[3],'</p>';
//�t�H�[�����͓��e�𕪊����ĕ\��;

fclose($fp)
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UFT-8">
<title>�ꕶ��Տ���u���O</title>
</head>
<body>
<h1>�ꕶ��Տ���u���O</h1>
<form action="mission_2-3.php"method="get">
���O<br/>
<input type="text" name="name"><br/>
�R�����g<br/>
<input type="text" name="comments"><br/>
<input type="submit" value="���M"/>
</form>
</body>
</html>
