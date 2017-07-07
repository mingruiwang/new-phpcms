<html>
<head>
    <title>添加百科</title>
</head>
<body>
<form action="?m=encyclopediaone&c=encyclopediaone&a=insert&pc_hash=<?php echo $hash?>" method="post">
<ul>
     
    <li> 百科标题:<input type="text" name="title"> <li>
    <li>parentID:<input type="text" name="parentid"></li>
    <li> 百科内容:<textarea style="width: 400px ;height:400px" name="content"></textarea> <li>

    <input type="submit" value="添加">
</ul>
</form>
</body>
</html>