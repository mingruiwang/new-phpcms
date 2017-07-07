<?php
defined('IN_PHPCMS') or exit('No permission resources.');//检查一个变量是否存在
pc_base::load_app_class('admin','admin',0);
class  crop extends admin
{
    function __construct()
    {
        parent::__construct();
        $this->db = pc_base::load_model('crop_model');
    }

    function init()
    {
        //print_r($_SESSION);
        $hash = $_SESSION['pc_hash'];
        $row = $this->db->select();
        //print_r($row);
        include $this->admin_tpl('index');
    }
}