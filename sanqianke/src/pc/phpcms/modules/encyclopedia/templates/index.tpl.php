<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header');?>

<div class="pad_10">
    <div class="table-list">

<body>
 <a href="?m=encyclopedia&c=encyclopedia&a=add&pc_hash=<?php echo $hash?>">添加百科</a>
 <?php echo "<br>"?>
   <table align="center"width="100%" cellspacing="0">
     <tr>
         <th width="25%" align="left">ID</th>
         <th width="25%" align="left">标题</th>
         <th width="25%" align="left">修改</th>
         <th width="25%" align="left">删除</th>
         
    <?php
     foreach ($row as $value)
     {

         echo "<tr>";
         echo "<td width='25%'>{$value['id']}</td>";
         echo "<td width='25%'>{$value['title']}</td>";
         echo "<td width='25%'><a href='?m=encyclopedia&c=encyclopedia&a=edit&id={$value[id]}&pc_hash={$hash}'>修改</a></td>";
         echo "<td width='25%'><a href='?m=encyclopedia&c=encyclopedia&a=delete&id={$value[id]}&pc_hash={$hash}'>删除</a></td>";
         echo "</tr>";
     }


    ?>
     </tr>
   </table>

</body>
        </div>
    </div>
</html>