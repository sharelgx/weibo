<?php
//设计公共接口
interface Visit { 
    public function go();
}


//实现不同交通工具类 
class Leg implements Visit {
    public function go() {
        echo "walk to Tibet!!!";
    } 
}   

class Car implements Visit {
    public function go() { 
        echo "drive car to Tibet!!!"; 
    } 
} 

class Train implements Visit { 
    public function go() { 
        echo "go to Tibet by train!!!"; 
    } 
}


class Traveller { 
    protected $trafficTool; 
    public function __construct(Visit $trafficTool) { 
        $this->trafficTool = $trafficTool; 
    } 
    public function visitTibet() {
        $this->trafficTool->go(); 
    } 
} 
//生成依赖的交通工具实例 
$trafficTool = new Leg(); 
//依赖注入的方式解决依赖问题 
$tra = new Traveller($trafficTool); 
$tra->visitTibet();

