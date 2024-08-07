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
    // 屬性
    public $specific;
    private $name = 'John';
    protected $life = 100;
    public $attack;
    public $effect;
    public $level;
    
    // 方法
    function skill(){
        if($this->life < 40){
            $this->attack = $this->attack * 1.5;
        }
        echo $this->attack;
    } 
    function test(){
        $this->name = 'JOHN';
        echo $this->name;
    }
}
$user3 = new Hero;
$user3->test();
$user1 = new Hero;
$user1->specific = '刺客';
// $user1->name = '閃電俠';
// $user1->life -= 80; 
$user1->attack = 50;
// $user1->skill();
// echo $user1->life;

$user2 = new Hero;
$user2->specific = '法師';
// $user2->name = '伊格';
// $user2->life = 100;
$user2->attack = 20;
// $user2->skill();


class NPC extends Hero {
    public $attack = 16;
    function test(){
        $this->life = 120;
        return $this->life;
    }
}

$npc1 = new NPC;
$npc1->specific = '路人';
// $npc1->name = '店員';
// $npc1->life -= 88;
$npc1 -> skill();
print_r($npc1);
echo $npc1->test();

/* 
    public 可用在所有地方
    private 只可使用在自己的類別內
    protected 可使用在類別內
*/