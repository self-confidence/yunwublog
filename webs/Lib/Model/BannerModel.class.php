<?php
/* +----------------------------------------------------------------------
 * 创建作者: zhangh <izhangh@outlook.com>
 +----------------------------------------------------------------------
 * 创建日期：2016-08-10
 +----------------------------------------------------------------------
 * 文件描述：
 +----------------------------------------------------------------------
 * 升级记录： 
 +----------------------------------------------------------------------
*/
class BannerModel extends CommonModel{
    // 自动验证设置
    protected $_validate = array(
        array('pic', 'require', '图片地址不能为空！'),
        array('alink', 'require', '链接地址不能为空！'),
    );
}