<?php
/**
 * Created by PhpStorm.
 * User: deepin
 * Date: 20-4-13
 * Time: 下午4:37
 */

namespace James\TreeClass;
class TreeClass
{

    public function getUnlimitedClassified($data, $parent_key, $child_key)
    {
        $data = array_column($data, null, 'id');
        $tree = [];
        foreach ($data as $key => $val) {
            if ($val[$parent_key] == 0) {
                $tree[] = &$data[$key];
            } else {
                $data[$val[$parent_key]][$child_key][] = &$data[$key];
            }
        }
        return $tree;
    }


    public function printRunning()
    {
        return 'running';
    }
}