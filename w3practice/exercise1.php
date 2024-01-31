<!-- <?php
class abc {
    private $a=10;
    public $b=12;
    protected $c=20;
    public function __construct(){
         
    }
}

class xyz extends abc{
    // public function xzy(){
    // //  print_r ($b);
    // }
    // public function __construct(){
    //     $b=parent::$a;
    //     $this->a=$a;
    // }
    public $b=22;
}
class pqr extends xyz{
    //  public function prq(){

    //  }
}
$obj=new abc();
print_r($obj->b);
echo"<br>";
$obj1=new xyz();
print_r($obj1->b);
echo"<br>";
$obj2=new pqr();
print_r($obj2->b);
echo"<br>";
?> -->

<?php
class calculator{
    public function add($a,$b){
         return $a+$b;
    }
    public function sub($a,$b){
        return $a-$b;
    }
    public function mul($a,$b){
        return $a*$b;
    }
    public function div($a,$b){
        if($b!=0){
            return $a/$b;
        }else{
            echo "invalid division argument";
        }
    }
}
$a=10;
$b=5;
$c=0;
$obj=new calculator();
print_r($obj->add($a,$b));
echo "<br>";
print_r($obj->sub($a,$b));
echo "<br>";
print_r($obj->mul($a,$b));
echo "<br>";
print_r($obj->div($a,$b));
echo "<br>";
print_r($obj->div($a,$c));
echo "<br>";
?>