<?php
    //from 'http://www.phpernote.com/php-template/200.html'
    /*
    url -> urlencode and urldecode
      -_. 之外的所有非字母数字字符都将被替换成百分号（%）后跟两位十六进制数
     */
    echo 'GB2312->urlencode and urldecodel'.'<br/>';
    $str = '中文-_. ';
    /*
        urlencode 将空格则编码为加号（+）
        rawurlencode 将空格则编码为加号（%20）
     */
    echo urlencode($str).'<br/>';
    echo urldecode(urlencode($str)).'<br/>';
    echo rawurlencode($str).'<br/>';
    echo rawurldecode(rawurlencode($str)).'<br/>';

    echo 'UTF-8->urlencode and urldecodel'.'<br/>';
    $url = 'http://www.phrprranoe.com/中文.rar';
    //mb_convert_encoding->php内置编码转换方法
    echo urlencode(mb_convert_encoding($url, 'utf-8','gb2312')).'<br/>';
    echo rawurlencode(mb_convert_encoding($url,'utf-8','gb2312')).'<br/>';

    echo '<hr/>';

    function parseurl($url=""){
        $url = rawurlencode(mb_convert_encoding($url, 'gb2312', 'utf-8'));
        $a = array("%3A", "%2F", "%40");
        $b = array(":", "/", "@");
        $url = str_replace($a, $b, $url);//%3A->:,%2F->/,%40->@
        return $url;
    }

    $url="ftp://yongfu:password@www.huikaiche.com/中文/中文.rar";
    echo parseurl($url);

    /*string -> base64_encode and base64_decode*/
    echo '<hr/>';
    echo 'md5计算字符串的 MD5 散列 and  base64_decode与base64_encode加密解密函数'.'<br/>';
    $str='quanzhou5';
    echo md5($str).'<br/>';
    echo base64_encode(md5($str)).'<br/>';
    echo base64_decode(base64_encode(md5($str))).'<br/>';
    if(md5($str) == '15656e968822773c9b8989670609b4a1')
    {
        echo 'quanzhou5';
    }

    /*jsontest.php ->json_decode  json_encode*/