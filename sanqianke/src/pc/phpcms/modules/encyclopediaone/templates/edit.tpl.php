<html>
<head>
    <title>修改百科</title>
</head>
<body>
<form action="?m=encyclopediaone&c=encyclopediaone&a=update&pc_hash=<?php echo $hash?>" method="post">
<ul>
 
       <li> 百科标题:<input type="text" name="title" value="<?php echo $row['title']?>"> <li>
      <li> 百科内容:<textarea style="width: 400px;height: 400px" name="content"><?php echo $row['content']?></textarea> <li>
        <input type="hidden" name="id"  value="<?php echo $row['id']?>">
    <input type="submit" value="修改">
</ul>
</form>
</body>
</html>