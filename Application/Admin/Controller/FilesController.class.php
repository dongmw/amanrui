<?php
namespace Admin\Controller;
class FilesController extends CommonController
{
    var $path;

    public function __construct()
    {
        parent::__construct();
        C('URL_MODEL', 0);

        $this->path = isset($_GET['path']) ? $_GET['path'] : getcwd() . '/Public';
        $this->assign('path', $this->path);
    }

    public function index()
    {
        $data = dir_info($this->path);
        //dd($this->path);
        $this->assign('data', $data);
        $this->display();
    }

    function edit()
    {
        $name = basename($this->path);
        //dd($name);
        $content = file_get_contents($this->path);
        //dd($content);
        $this->assign('name', $name);
        $this->assign('content', $content);
        $this->display();
    }

    function update()
    {
        if (IS_POST) {
            $name = I("post.name");
            $content = I("post.content");
            //dirname,去掉路径的最后一层
            $dir_path = dirname($this->path);
            //dd($dir_path);
            rename($this->path, $dir_path . '/' . $name);

            file_put_contents($dir_path . '/' . $name, $content);
            $this->success('修改成功', U('index', array('path' => $dir_path)));
        }
    }

    function show()
    {
        $img_path = str_replace(getcwd(), '', $this->path);
        dd($img_path);
        $this->assign("img_path", $img_path);
        $this->display();
    }
    function destroy()
    {
        if (is_dir($this->path)){
            rm_dir($this->path);
        }else{
            unlink($this->path);
        }
        $this->success("删除成功");
    }

    function create()
    {
        $this->display();
    }

    function store()
    {
        $type = I("post.type");
        $name = I("post.name");
        $content = I("post.content");
        $path = $this->path.'/'.$name;
        dd($path);
        if ($type == 'dir'){
            if (is_dir($path)){
                $this->error('文件名已经存在');
            }else{
                mkdir($path, 0777, true);
                $this->success('新建文件夹成功',U('index',array('path' => $this->path)));
                return;
            }
        }
        file_put_contents($path,$content);
        $this->success('新建文件成功',U('index'));
    }

    function upload()
    {
        $this->display();
    }

    function do_upload()
    {
//        dump($_FILES);
//        exit;
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = $this->path . '/'; // 设置附件上传根目录
//        if (!is_dir($upload->rootPath)) {
//            mkdir($upload->rootPath, 0777, true);
//        }
        $upload->savePath = ''; // 设置附件上传（子）目录
        $upload->subName = '';
        $upload->saveName = time() . '_' . rand(1000000, 999999);
        // 上传文件
        $info = $upload->upload();
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            $this->success('上传成功！', U('index', array('path' => $this->path)));
        }
    }

    function download()
    {
        $download_path=$this->path;

//指定下载文件类型
        header('Content-Type: image/gif');

        header('Content-Disposition: attachment; filename="'.$download_path.'"');   //指定下载文件的描述

//指定下载文件的大小
        header('Content-Length: '.filesize($download_path));

//将文件内容读取出来并直接输出，以便下载
        readfile($download_path);

    }

}