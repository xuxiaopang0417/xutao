<?php
/**
 * Created by PhpStorm.
 * User: chenbingjie
 * Date: 2018/1/11
 * Time: 上午9:51
 */
//第一个参数是:用来显示数据的html文件
//第二个参数是：要显示的数据，并且这些数据要在第一个参数里面来显示
function display($tplName,$data = null)
{
    //第一步：将html文件中的所有内容读取出来
    //第二步：将内容中的模板引擎的语法{ } 替换为php的语法  <?php
    //第三步：将替换好的内容保存到后缀为.php的文件中
    //第四步：将生成的php文件包含进来即可   include

    //拼接html文件的全路径
    $filePath = rtrim(TPL_VIEW,'/').'/'.$tplName;
    //判断模板文件是否存在
    if (!file_exists($filePath)) {
        die('模板文件不存在');
    }

    //对缓存文件夹进行判断
    if (!checkDir(TPL_CACHE)) {
        die('没有权限写内容');
    }
    //第一步：将html文件中的所有内容读取出来
    $content = file_get_contents($filePath);
    //echo $content;

    //第二步：将内容中的模板引擎的语法{ } 替换为php的语法  <?php
    $php = compile($content);

    //第三步：将替换好的内容保存到后缀为.php的文件中

    //得到新的php文件的名字   test.html =====>test_html.php
    $name = str_replace('.','_',$tplName).'.php';
    //拼接完整的cache路径
    $cachePath = rtrim(TPL_CACHE,'/').'/'.$name;
    //将替换好的内容保存到后缀为.php的文件中
    file_put_contents($cachePath,$php);

    //第四步：将生成的php文件包含进来即可   include

    //如果分配了数据过来，就将数据解析成变量的形式
    if ($data) {
        //将传递过来的数组，处理成变量的形式。
        extract($data);

        //将新生成的php的混编文件包含进来
        include $cachePath;
    }
}

//封装compile函数，此函数将模板引擎的语法替换成php的语法
function compile($content)
{
    $array = [
        //%%仅仅是一个占位符，用来表示变量的名字,$%%这种格式和html文件中的变量的格式非常像，因此采用这种形式，
        //  $\1这个里面的\1就是变量名，表示正则表达式里面的第一个子模式，也就是第一个()里面匹配到的内容。
        '{$%%}' =>'<?php echo $\1;?>',
        '{if %%}'=>'<?php if (\1):?>',
        '{/if}'=>'<?php endif;?>',
        '{else}'=>'<?php else:?>',
        '{foreach %%}'=>'<?php foreach (\1):?>',
        '{/foreach}'=>'<?php endforeach;?>',
        '{while %%}'		=> '<?php while(\1):?>',
        '{/while}'			=> '<?php endwhile;?>',
        '{for %%}'			=> '<?php for(\1):?>',
        '{/for}'			=> '<?php endfor;?>',
        '{continue}'		=> '<?php continue;?>',
        '{switch %%}'  => '<?php switch (\1): ?>',
        '{case %%}'    => '<?php case \1: ?>',
        '{break}'      => '<?php break; ?>',
        '{/switch}'    => '<?php endswitch; ?>',
        '{$%%++}'			=> '<?php $\1++;?>',
        '{$%%--}'			=> '<?php $\1--;?>',
        '{/*}'				=> '<?php /*',
        '{*/}'				=> '*/?>',
        '{section}'			=> '<?php ',
        '{/section}'		=> '?>',
        '{$%% = $%%}'		=> '<?php $\1 = $\2;?>',
        '{default}'			=> '<?php default:?>',
        '{include %%}'		=> '这的代码就是来捣乱的',
        //自己添加的
        '{getDiff($%%)}'    => '<?php echo getDiff($\1);?>'
    ];
    foreach ($array as $key=>$value) {
        /* 需要将数组中的键替换成标准的正则的格式
        '{$%%}'==>\'{$%%\}'===>'\{$(.*?)\}'==>'#\{$(.*?)\}#'
        因为html文件中可能会出现/,所以用#作为正则表达式的定界符。
        之所以写成(.*?)的形式，是为了避免在html文件中同时出现两个变量{$test}{$str},会贪婪匹配，因此我们要取消贪婪。*/

        $pattern =  '#'.str_replace('%%','(.*?)',preg_quote($key,'#')).'#';

        //通过preg_replace去替换正则表达式匹配到的内容
        if (strstr($key,'include')) {
            //这是html文件中有include的情况
            $content = preg_replace_callback($pattern,'parseInclude',$content);
        } else {
            //这是没有include的时候的处理方法
            $content =  preg_replace($pattern,$value,$content);
        }

    }
    return $content;
}

//处理html文件中有include的情况
function parseInclude($data)
{
    //var_dump($data);
    //将include  'head.html'文件名两边的引号去掉
    $name = trim($data[1],'\'"');
    //得到被包含的html文件的缓存文件,但是并没有include进来，若想要包含，需要自己去include
    display($name);
    //拼接缓存文件的全路径
    $newname = rtrim(TPL_CACHE,'/').'/'.str_replace('.','_',$name).'.php';
    //echo $newname;

    return "<?php include '$newname';?>";
}

//检测cache缓存文件夹权限的函数
function  checkDir($dirPath)
{
    //判断cache文件夹是否存在或者是否是目录
    if (!file_exists($dirPath)) {
        return  mkdir($dirPath,'0755',true);
    }
    //判断文件夹是否有可读和可写的权限，若没有则修改权限
    if (!is_readable($dirPath) || !is_writeable($dirPath)) {
        return  chmod($dirPath,0755);
    }
    return true;
}