<?php
namespace Admin\Controller;

use Think\Controller;

class LinkController extends CommonController
{
    var $link;

    public function __construct()
    {
        parent::__construct();
        $this->link = M("Link");
    }

    public function index()
    {
        $Links = $this->link->order("sort_order")->select();
        $this->assign("Links", $Links);
        $this->display();
    }

    public function store()
    {
        $this->link->create();
        $this->link->add();
        $this->success("新增成功");
    }

    public function update()
    {

        $this->link->create();
        $this->link->save();
        $this->success("编辑成功");

    }

    public function destroy()
    {
        $id=I("post.id");
        $this->link->delete($id);

        $this->success("删除成功");
    }

    public function destroy_checked()
    {
//        dump($_POST);
//        exit()

        $checked = I("post.destroy_checked");
        foreach ($checked as $id){
            $this->link->delete($id);
        }
        $this->success("批量删除成功");

    }

    public function sort_order()
    {

        $id = I("post.id");
        $sort_order = I("post.sort_order");
//        dump($sort_order);
  //      exit;
        //foreach ($id as $k => $v) {
        //    $this->link->where("id='$v'")->setField("sort_order", $sort_order[$k]);
        //}
        $this->link->where("id='$id'")->setField("sort_order", $sort_order);
        echo json_encode(['sort_order' => $sort_order]);
        //$this->redirect('index');
    }
    public function edit()
    {
        $id = I("post.id");
        $link = $this->link->find($id);
        echo json_encode(['link' => $link]);
    }
}