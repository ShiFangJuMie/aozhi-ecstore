<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 
$db['recycle']=array (
  'columns' => 
  array (
    'item_id' => 
    array (
      'type' => 'number',
      'required' => true,
      'pkey' => true,
      'extra' => 'auto_increment',
      'editable' => false,
    ),
    'item_title' => 
    array (
      'type' => 'varchar(200)',
      'label'=>app::get('dbeav')->_('名称'),
      'required' => true,
      'is_title'=>true,
      'in_list'=>true,
      'width'=>200,
      'default_in_list'=>true,
    ),
    'item_type'=>array(
      'label'=>app::get('dbeav')->_('类型'),
      'type' => 'varchar(80)',
      'required' => true,
      'in_list'=>true,
      'width'=>100,
      'default_in_list'=>true,
    ),
    'drop_time'=>array(
      'type' => 'time',
      'label'=>app::get('dbeav')->_('删除时间'),
      'required' => true,
      'in_list'=>true,
      'width'=>150,
      'default_in_list'=>true,
    ),
    'item_sdf'=>array(
      'type' => 'serialize',
      'required' => true,
      'comment' => app::get('dbeav')->_('序列化数据'),
    ),
  ),
  'engine' => 'innodb',
  'version' => '$Rev: 40912 $',
  'comment' => app::get('dbeav')->_('回收站(废弃)'),
);

//需要id从大到小的执行
