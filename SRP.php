<?php

class cook {

     private $name;

     public function __construct($name){
       $this->name = $name;
     }

    public function meal($meals){

        echo  $this->name.':';
        foreach($meals as $meal)
             echo  $meal.'--';

         echo '<br/>';

    }

    public function drink($drinks){
     echo  $this->name.':';
        foreach($drinks as $drink)
             echo  $drink.'--';

         echo '<br/>';
    }

     public function ok(){
        echo $this->name.'--cook - complete<br/>';
     }
}

interface Command {
  public function execute();
}


class MealCommand implements Command{
  public  $cooker;
  public  $meals;

  public function __construct(cook $cook,$meals){// notice  is __construct   no is  contruct

     $this->cooker = $cook;
     $this->meals = $meals;

  }

  public  function execute(){
       $this->cooker->meal($this->meals);
  }

}


class  DrinkCommand implements Command{
  public  $cooker;
  public $drinks;

  public function __construct(cook $cook,$drinks){
     $this->cooker = $cook;
     $this->drinks = $drinks;
  }

  public  function execute(){
       $this->cooker->drink($this->drinks);
  }

}

class cookControl{
    private $mealcommand;
    private $drinkcommand;

    public function addCommand(Command $mealcommand,Command $drinkcommand){

        $this->mealcommand = $mealcommand;
        $this->drinkcommand = $drinkcommand;

    }

    public function callmeal(){
         $this->mealcommand->execute();
    }

    public function calldrink(){
        $this->drinkcommand->execute();
    }
}


$control  = new cookControl;
$cook = new cook('zhangsan'); //choice cook

$meals = ['meat','egg','rice','vegetables']; //order meals
$drinks = ['chicken soup','Vegetable soup'];//order drinks

$mealcommand = new MealCommand($cook,$meals);
$drinkcommand = new DrinkCommand($cook,$drinks);

$control ->addCommand($mealcommand,$drinkcommand);
$control->callmeal();
$control->calldrink();

$cook->ok();
