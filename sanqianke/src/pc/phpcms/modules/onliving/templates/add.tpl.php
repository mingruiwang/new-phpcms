<html>
<head>
    <script type="text/javascript" src="<?php echo JS_PATH?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH?>content_addtop.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH?>swfupload/swf2ckeditor.js"></script>
    <link type="text/css" href="<?php echo JS_PATH?>swfupload/swfupload.css"rel="stylesheet">
<!--    <link type="text/css" href="--><?php //echo CSS_PATH?><!--style/zh-cn-styles1.css" rel="stylesheet">-->
<!--    <script type="text/JavaScript" src="http://www.51shuxie.com/statics/js/dialog.js"></script>-->
<!--    <link href="http://www.51shuxie.com/statics/css/dialog_simp.css" rel="stylesheet" type="text/css" />-->
</head>
<body>

<form action="?m=onliving&c=onliving&a=insert&pc_hash=<?php echo $hash?>" method="post" name="living">

    <ul>
        <li>直播封面:&nbsp;

            <?php $authkey = upload_key('1,jpg|pdf|gif|png|bmp,1,,,0');  ?>
            <input type="hidden" value="<?php echo $data['images']?>" id="thumb" name="img">
            <a onclick="flashupload('thumb_images', '附件上传','thumb',thumb_images,'1,jpg|pdf|gif|png|bmp,1,,,0','onliving','','<?php echo $authkey;?>');return false;" href="javascript:void(0);">

                <img width="225px" height="125px" id="thumb_preview" src="<?php echo $data['images']?>"></a>

        </li>
        <li>直播名称:&nbsp; <input type="text" name="title" placeholder=""></li>
        <li> 直播时间:&nbsp;<input type="text" name="starttime" placeholder=""></li>
        <li>发起人名:&nbsp;<input type="text" name="owner" placeholder=""></li>
        <li>直播地址:&nbsp;<input type="text" name="url" placeholder=""></li>
        <li>观看人数:&nbsp;<input type="text" name="audience" placeholder=""></li>
        <li>直播分类:&nbsp;<input type="text" name="category" placeholder=""></li>
</ul>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="submit" value="提交">

</form>



</body>

</html>