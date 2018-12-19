<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 12/19/18
 * Time: 1:09 AM
 * 数组类型 array
 * 关键知识点：
 * 1.用array（）方法定义数组
 * 2.如果要给值指定键，用=>符号 例如：“name”=>"zhangdapeng"
 * 3.遍历可以用foreach，将数组拆包，例如： $array as $key=>$value
 *
 *
 * 实例练习：
 * 定义一个数组，存储游戏人物信息（姓名，性别，年龄，战力，技能，装备）
 */
//定义一个数组，存储游戏人物信息（姓名，性别，年龄，战力，技能，装备）
$person_array = array('姓名' => '空明', "性别" => 1, "年龄" => 12,
    "战斗力" => 10000, "技能" => "破宇剑法", "装备" => "破宇剑");
//遍历并展示 foreach as =>
foreach ($person_array as $key => $value) {
    echo $key . ":" . $value . "<br>";
}
