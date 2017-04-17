<?php
namespace Home\Model;

use Think\Model\RelationModel;
class ArticleModel extends RelationModel
{
    protected $_link = array(
        'category'=> self::BELONGS_TO,
    );

    /**
     * 链接绑定
     * @return mixed
     */
    function all()
    {
        //if (!F('articles')){

            $articles = $this->relation(true)->select();
            foreach ($articles as &$value)
            {
                $value['link'] = $this->make_link($value);

            }
            //F('articles', $articles);
        //}
        return $articles;

    }


    /**
     * 生成链接
     * @param $category
     * @return string
     */
    function make_link($article)
    {
        switch ($article['type'])
        {
            case 0:
                $link = U('article', array('id'=>$article['id']));
                    break;
            case 1:
                $link = U('show', array('id'=>$article['id']));
                break;
        }

        return $link;
    }


}
