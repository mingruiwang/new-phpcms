<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header');?>

<div class="pad_10">
    <div class="table-list">
<body>

<table align="center" width="100%" cellspacing="0">

    <tr>


        <th width="40%" align="left">用户姓名</th>
        <th width="30%" align="left">用户公司</th>
        <th width="30%" align="left">用户电话</th>

        <?php
        foreach ($row as $value)
        {
            echo '<tr>';

            echo "<td width=‘40%’>{$value['couster_name']}</td>";
            echo "<td width='30%'>{$value['couster_company']}</td>";
            echo "<td width='30%'>{$value['couster_phone']}</td>";
            //echo "<td><a href='?m=user&c=user&a=edit&id={$value[id]}&pc_hash={$hash}'>修改</a></td>";
            //echo "<td><a href='?m=user&c=user&a=delete&id={$value[id]}&pc_hash={$hash}'>删除</a></td>";
            echo '</tr>';
        }
        ?>

    </tr>

</table>
</div>
    </div>
</body>

</html>