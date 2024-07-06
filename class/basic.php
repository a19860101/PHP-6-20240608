<?php
// 類別 屬性 方法
/* 
    類別：英雄

    屬性
        特性：坦克 
        姓名：渥瑪爾
        生存能力：5.5
        攻擊傷害：3.6
        技能效果：6.4
        上手難度：3.6
    方法
        技能
            重擊
            勢不可擋
            耀武揚威
            威震八方
    屬性
        特性：射手 
        姓名：特爾安娜絲
        生存能力：0.9
        攻擊傷害：9.1
        技能效果：2.7
        上手難度：2.7
    方法
        技能
            晨星
            黑暗之箭
            穿透之箭
            混沌之箭
*/
class Hero {
    public $specific;
    public $name;
    public $life;
    public $attack;
    public $effect;
    public $level;
    
    function skill(){

    } 
}
$user1 = new Hero;
$user1->specific = '刺客';
$user1->name = '閃電俠';
$user1->life = 7.3;
var_dump($user1);

$user2 = new Hero;
$user2->specific = '法師';
$user2->name = '伊格';
$user2->life = 5.5;
var_dump($user2);