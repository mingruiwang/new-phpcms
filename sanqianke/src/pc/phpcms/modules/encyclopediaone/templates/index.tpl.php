<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header');?>

<div class="pad_10">
    <div class="table-list">

<body>
 <a href="?m=encyclopediaone&c=encyclopediaone&a=add&pc_hash=<?php echo $hash?>">添加百科</a>
   <table border="1"  align="center">
     <tr>
         <th width="20%" align="left">ID</th>
         <th width="20%" align="left">标题</th>
         <th width="20%" align="left">父ID</th>
         <th width="20%" align="left">内容</th>
         <th width="10%" align="left">修改</th>
         <th width="10%" align="left">删除</th>
         
    <?php
     foreach ($row as $value)
     {

         echo "<tr>";
         echo "<td width='20%'>{$value['id']}</td>";
         echo "<td width='20%'>{$value['title']}</td>";
         echo "<td width='20%'>{$value['parentid']}</td>";
         echo "<td width='20%'>{$value['content']}</td>";
         echo "<td width='10%'><a href='?m=encyclopediaone&c=encyclopediaone&a=edit&id={$value[id]}&pc_hash={$hash}'>修改</a></td>";
         echo "<td width='10%'><a href='?m=encyclopediaone&c=encyclopediaone&a=delete&id={$value[id]}&pc_hash={$hash}'>删除</a></td>";
         echo "</tr>";
     }


    ?>
     </tr>
   </table>

</body>
        </div>
    </div>
</html>