<?php
class b2c_goods_detail_description{//团购
    function __construct( &$app ) {
        $this->app = $app;
    }

    function show( $gid, &$aGoods=null ){
    	$render = $this->app->render();
        if( !$aGoods ){
            $o = kernel::single('b2c_goods_model');
            $aGoods = $o->getGoods($gid);
        }
        $render->pagedata['goods'] = $aGoods;
        return $render->fetch('site/product/description.html');
    }

}

