<?php
namespace Home\Model;

use Think\Model\RelationModel;
class CategoryModel extends RelationModel
{
    protected $_link = array(
        'Category' => array(
            'mapping_type'  => self::HAS_MANY,
            'mapping_name'  => 'children',
        ),
    );

    /**
     * @return mixed
     *链接绑定
     */
    function all()
    {
        if (!F('HYAC_categories')){

            $categories = $this->relation(true)->where("parent_id=0")->select();
            foreach ($categories as &$value)
            {
                $value['link'] = $this->make_link($value);
                foreach ($value['children'] as &$v)
                {
                    $v['link'] = $this->make_link($v);
                }
            }
            F('HYAC_categories', $categories);
        }
        return F('HYAC_categories');
        //return $categories;
    }

    /**
     * @param $category
     * @return string
     * 生成链接
     */
    function make_link($category)
    {
        switch ($category['type'])
        {
            case 1:
                $link = U('article',array('id'=>$category['id']));
                break;
            case 2:
                $link = U('lists', array('id'=>$category['id']));
                break;
            case 3:
                $link = $category['id'];
                break;
        }
        return $link;
    }


}
