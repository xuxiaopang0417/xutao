<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/12 0012
 * Time: 下午 4:17
 */
//参数1:需要知道验证码的宽高;
//参数2::需要知道验证码的个数;
//参数3:需要知道验证码可出现的种类;


function authcode($width = 120,$height = 40,$mun = 5,$type = 1){
    //第一步:创建画布:
    $image = imagecreatetruecolor($width,$height);

    //第二步:给画布填充颜色;
    imagefill($image,0,0,tintColor($image));
    //第三步:生成验证码;
    switch ($type){
        case 1;
            $code = numbercode($mun);
        break;
        case 2;
           $code = alphacode($mun);
        break;
        case 3;
        $code =  Hybridcode($mun);
        break;
    }
    //第四步;将验证码写到画布上去；
        $cellwidth = floor($width/$mun);//120/5==24
    for ($i = 0;$i<$mun;$i++){
    $x = mt_rand($i*$cellwidth,($i+1)*$cellwidth-15);//0*24+1*24
    $y = mt_rand(0,$height-20);

    imagechar($image,5,$x,$y,$code[$i], darkColor($image));
    }
    //第五步：画干扰线干扰点
    for ($j = 0;$j<100;$j++) {
        imagesetpixel($image, mt_rand(0, $width), mt_rand(0, $height), tintColor($image));
    }
    for ($i = 0;$i<5;$i++) {
        imageline($image, mt_rand(0, $width), mt_rand(0, $height), 0, 360, tintColor($image));
    }

    //第六步：告知浏览器mime类型
    header('Content-Type:image/png');
    //第七步：输出到浏览器
    imagepng($image);
    //第八步：销毁图像资源
return $code;
}


function tintColor($image){
     $tint = imagecolorallocate($image,mt_rand(128,255),mt_rand(128,255),mt_rand(128,255));
     return $tint;
}
function darkColor($image){
    $dark = imagecolorallocate($image,mt_rand(128,255),mt_rand(128,255),mt_rand(128,255));
    return $dark;
}
//纯数字的验证码
function numbercode($mun = 5){
       $str = range(0,9);
       str_shuffle(join('',$str));

 return substr(str_shuffle(join('',$str)),0,$mun);

}
//字母模式验证码
function alphacode($mun = 5){
        $arr = range('a','z');
       $err = range('A','Z');
       $array = array_merge($arr,$err);
     return substr(str_shuffle(join('',$array)),0,$mun);
}
//数字字母混合
function Hybridcode($mun = 5){
       $num = range(0,9);
       $alpha = range('a','z');
       $Hybrid = range('A','Z');
       $array = array_merge($num,$alpha,$Hybrid);
       shuffle($array);
      return join('',array_slice($array,0,$mun));

}











