<?php
//公共函数对可以放在common文件夹这里来定义函数，全局都可以引用；
function dd($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
//路径的信息
function dir_info($path)
{
    $result = [];
    $handle = opendir($path);       //句柄、资源对象
    dd($handle);
    while ($file = readdir($handle)) {
        $array = [];
        //每个文件夹都有一个以"."开始的隐藏文件；
        if (substr($file, 0, 1) == ".") {
            continue;
        }
        //dd($file);
        $array["name"] = $file;
        $array["eng_type"] = filetype($path . "/" . $file);
        $array["is_img"] = getimagesize($path . "/" . $file) ? true : false;
        $array["type"] = get_file_type($path . "/" . $file);
        $array["size"] = get_file_size($path . "/" . $file);
        $array["ctimectime"] = filectime($path . "/" . $file);
        $result[] = $array;
        //dd($array["is_img"]);
    }
    closedir($handle);
    return $result;
}
//文件的大小
function get_file_size($filename)
{

    $bytes = filesize($filename);

    //如果提供的字节数大于等于2的40次方，则条件成立
    if ($bytes >= pow(2, 40)) {
        //将字节大小转换为同等的T大小
        $return = round($bytes / pow(1024, 4), 2);

        //单位为TB
        $suffix = "TB";

        //如果提供的字节数大于等于2的30次方，则条件成立
    } elseif ($bytes >= pow(2, 30)) {
        //将字节大小转换为同等的G大小
        $return = round($bytes / pow(1024, 3), 2);

        //单位为GB
        $suffix = "GB";

        //如果提供的字节数大于等于2的20次方，则条件成立
    } elseif ($bytes >= pow(2, 20)) {
        //将字节大小转换为同等的M大小
        $return = round($bytes / pow(1024, 2), 2);

        //单位为MB
        $suffix = "MB";

        //如果提供的字节数大于等于2的10次方，则条件成立
    } elseif ($bytes >= pow(2, 10)) {

        //将字节大小转换为同等的K大小
        $return = round($bytes / pow(1024, 1), 2);

        //单位为KB
        $suffix = "KB";

        //否则提供的字节数小于2的10次方，则条件成立
    } else {
        //字节大小单位不变
        $return = $bytes;
        //单位为Byte
        $suffix = "Byte";
    }
    //返回合适的文件大小和单位
    return $return . " " . $suffix;
}
//文件的类型
function get_file_type($filename)
{

    $type = "";

    //通过filetype()函数返回的文件类型做为选择的条件
    switch (filetype($filename)) {
        case 'file':
            $type .= "普通文件";
            break;
        case 'dir':
            $type .= "文件夹";
            break;
        case 'block':
            $type .= "块设备文件";
            break;
        case 'char':
            $type .= "字符设备文件";
            break;
        case 'fifo':
            $type .= "命名管道文件";
            break;
        case 'link':
            $type .= "符号链接";
            break;
        case 'unknown':
            $type .= "末知类型";
            break;
        default:
            $type .= "没有检测到类型";
    }

    //返回转换后的类型
    return $type;
}

//自定义函数递归的删除整个目录
function rm_dir($directory)
{
    //判断目录是否存在，如果不存在rmdir()函数会出错
    if (file_exists($directory)) {
        //打开目录返回目录资源，并判断是否成功
        if ($dir_handle = @opendir($directory)) {
            //遍历目录，读出目录中的文件或文件夹
            while ($filename = readdir($dir_handle)) {
                //一定要排除两个特殊的目录
                if ($filename != "." && $filename != "..") {
                    //将目录下的文件和当前目录相连
                    $sub_file = $directory . "/" . $filename;
                    //如果是目录条件则成立
                    if (is_dir($sub_file)) {
                        //递归调用自己删除子目录
                        rm_dir($sub_file);
                    }

                    //如果是文件条件则成立
                    if (is_file($sub_file)) {
                        //直接删除这个文件
                        unlink($sub_file);
                    }
                }
            }

            //关闭目录资源
            closedir($dir_handle);

            //删除空目录
            rmdir($directory);
        }
    }
}