<?php 

class ClassB
{
    public function __construct()
    {
        echo "Class B";
    }

    /*
    *@param $hp
    * function index
    */
    public function index($hp = null){
        echo "Class B";
    }

    
}

?>

<?php 
    $classB = new ClassB();
    $classB->index();
?>