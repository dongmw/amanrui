<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->category = D('Category');
        $this->article = D('Article');
        $this->link = M('Link');
        $categories = $this->category->all();
        $this->assign("categories", $categories);

        $links = $this->link->select();
        $this->assign("links", $links);
    }

    public function index()
    {
        $articles = $this->article->where("type=1")->order('time desc')->limit(8)->all();
        $this->assign("articles", $articles);
        $zaocan = $this->article->where("category_id=16")->order("time desc")->limit(3)->all();
        $zhongcan = $this->article->where("category_id=17")->order("time desc")->limit(3)->all();
        $wancan = $this->article->where("category_id=11")->order("time desc")->limit(3)->all();
        $xiawucha = $this->article->where("category_id=''")->order("time desc")->limit(3)->all();
        $yexiao = $this->article->where("category_id=''")->order("time desc")->limit(3)->all();
        $this->assign("zaocan", $zaocan);
        $this->assign("zhongcan", $zhongcan);
        $this->assign("wancan", $wancan);
        $this->assign("xiawucha", $xiawucha);
        $this->assign("yexiao", $yexiao);

        $shucai = $this->article->where("category_id=46")->order("time desc")->limit(8)->all();
        $shuiguo = $this->article->where("category_id=47")->order("time desc")->limit(8)->all();
        $wugu = $this->article->where("category_id=48")->order("time desc")->limit(8)->all();
        $shengxian = $this->article->where("category_id='91'")->order("time desc")->limit(8)->all();
        $this->assign("shucai", $shucai);
        $this->assign("shuiguo", $shuiguo);
        $this->assign("wugu", $wugu);
        $this->assign("shengxian", $shengxian);
        $this->display();
    }
    public function lists()
    {
        $count = $this->article->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        //查询笔记本
        $category_id = I("get.id");
        $children = $this->category->where("parent_id='$category_id'")->getField('id',true);//获取category的id;
        //dump($children);
        if($children)
        {
            $map['category_id']  = array('in',$children);

            $articles = $this->article->where($map)->limit($Page->firstRow.','.$Page->listRows)->all();
        }else{
            $articles = $this->article->where("category_id='$category_id'")->limit($Page->firstRow.','.$Page->listRows)->all();
        }
        //dd($articles);
        //食材的筛选项
        $shicai = $this->article->order("time asc")->getField("description",10);
        $this->assign('shicai', $shicai);
        $this->assign('articles',$articles);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function article()
    {
//        $articles = $this->article->where("type=0")->order("time desc")->all();
//        $this->assign("articles", $articles);
        $this->display();



    }
    public function show()
    {
        $id = I("get.id");
        $article = $this->article->where("id='$id'")->find();
        $fenlei = $this->category->where("id='$article[category_id]'")->find();
        $this->assign('fenlei', $fenlei);
        $this->assign('article', $article);
        $this->display();
    }
}