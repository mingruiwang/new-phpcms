<html>
<head>
    <title>修改百科</title>
</head>
<body>
<form action="?m=encyclopedia&c=encyclopedia&a=update&pc_hash=<?php echo $hash?>" method="post">
<ul>
 
       <li> 百科标题:<input type="text" name="title" value="<?php echo $row['title']?>"> <li>
        <input type="hidden" name="id"  value="<?php echo $row['id']?>">
    <input type="submit" value="修改">
</ul>
</form>
</body>
</html>