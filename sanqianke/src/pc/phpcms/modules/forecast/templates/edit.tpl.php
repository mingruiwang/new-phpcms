<html>
<head>
    <script type="text/javascript" src="<?php echo JS_PATH?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH?>content_addtop.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH?>swfupload/swf2ckeditor.js"></script>
    <link type="text/css" href="<?php echo JS_PATH?>swfupload/swfupload.css"rel="stylesheet">
</head>
<body>
<form action="?m=forecast&c=forecast&a=update&pc_hash=<?php echo $hash?>" method="post">
    <ul>
         <li>预告封面:<?php $authkey = upload_key('1,jpg|pdf|gif|png|bmp,1,,,0');  ?>
             <input type="hidden" value="<?php echo $data['images']?>" id="thumb" name="img">
             <a onclick="flashupload('thumb_images', '附件上传','thumb',thumb_images,'1,jpg|pdf|gif|png|bmp,1,,,0','forecast','','<?php echo $authkey;?>');return false;" href="javascript:void(0);">

                 <img width="225px" height="125px" style="cursor:hand" id="thumb_preview" src="<?php echo $data['images']?>"></a></li>
        <li>预告名称:<input type="text" name="title" placeholder="title" value="<?php echo $row['title']?>"></li>
        <li> 预告时间:<input type="text" name="starttime" placeholder="" value="<?php echo $row['starttime']?>"></li>
        <li>预告人名:<input type="text" name="owner" placeholder="" value="<?php echo $row['owner']?>"></li>
        <li>预告地址:<input type="text" name="url" placeholder="" value="<?php echo $row['url']?>"></li>
        <li>观看人数:<input type="text" name="audience" placeholder="" value="<?php echo $row['audience']?>"></li>
        <li>预告分类:<input type="text" name="category" placeholder="" value="<?php echo $row['category']?>"></li>
</ul>
    <input  type="hidden" name="id" value="<?php echo $row['id']?>">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="submit" value="提交">
</form>

</body>

</html>