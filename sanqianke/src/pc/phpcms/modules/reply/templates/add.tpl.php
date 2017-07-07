<html>
<head>
    <script type="text/javascript" src="<?php echo JS_PATH?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH?>content_addtop.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH?>swfupload/swf2ckeditor.js"></script>
    <link type="text/css" href="<?php echo JS_PATH?>swfupload/swfupload.css"rel="stylesheet">
</head>
<body>
<form action="?m=reply&c=reply&a=insert&pc_hash=<?php echo $hash?>" method="post">
    <ul>
         <li>回放封面: <?php $authkey = upload_key('1,jpg|pdf|gif|png|bmp,1,,,0');  ?>
             <input type="hidden" value="<?php echo $data['images']?>" id="thumb" name="img">
             <a onclick="flashupload('thumb_images', '附件上传','thumb',thumb_images,'1,jpg|pdf|gif|png|bmp,1,,,0','reply','','<?php echo $authkey;?>');return false;" href="javascript:void(0);">
                 <?php print_r($data['images'])?>
                 <img width="225px" height="125px" style="cursor:hand" id="thumb_preview" src="<?php echo $data['images']?>"></a>
         </li>
        <li>回放名称:<input type="text" name="title" placeholder=""></li>
        <li> 回放时间:<input type="text" name="starttime" placeholder=""></li>
        <li>回放人名:<input type="text" name="owner" placeholder=""></li>
        <li>回放地址:<input type="text" name="url" placeholder=""></li>
        <li>回放分类:<input type="text" name="category" placeholder=""></li>
        <li>观看人数:<input type="text" name="audience" placeholder=""></li>
        <li>关键字:<input type="text" name="keyword" placeholder=""></li>
     </ul>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="submit" value="提交">
</form>

</body>

</html>