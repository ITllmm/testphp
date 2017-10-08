    <?php

    /*
     *interface: workerinterface
     *abstract: Shape
     */
     //WorkerInferface　设置这个类是为了更好的扩展更多功能接口
    interface WorkerInterface extends FeedableInterface, WorkableInterface ,SleepableInterface{
    }

    interface WorkableInterface {  //function work
        public function work();
    }

    interface FeedableInterface { //function eat
        public function eat();
    }

    interface SleepableInterface { //function sleep
        public function sleep();
    }

    class Worker1 implements WorkerInterface {  //worker1
        public function work() {
            echo 'Worker1--working <br/>';
            return $this;
        }

        public function eat() {
          echo 'Worker1--eating  <br/>';
          return $this;
        }

        public function sleep() {
          echo 'Worker1--sleeping  <br/>';
          return $this;
        }

    }

    class Worker2 implements WorkerInterface { //work2
        public function work() {
            echo 'Worker2--working <br/>';
            return $this;
        }

        public function eat() {
          echo 'Worker2--eating  <br/>';
          return $this;
        }

        public function sleep() {
          echo 'Worker2--sleeping  <br/>';
          return $this;
        }

    }


    class WorkManager {  //采用工厂模式,根据传入的类型来实例化对象
        private $worker;

       public function   __construct (WorkerInterface $worker){
            $this->worker = $worker;
       }

        public function manage() {
            $this->worker->work()->eat()->sleep();
        }
    }

    echo '************interface**************<br/>';
    $workerManange = new WorkManager(new Worker1());
    $workerManange->manage();


    echo '************abstract**************<br/>';
    abstract class Shape {
        private $width, $height;

        abstract public function getArea();

        public function setColor($color) {
            // ...
        }

        public function render($area) {
            echo $area.'<br/>';
        }
    }

    class Rectangle extends Shape {
        public function  __construct() {
            $this->width = 0;
            $this->height = 0;
        }

        public function setWidth($width) {
            $this->width = $width;
        }

        public function setHeight($height) {
            $this->height = $height;
        }

        public function getArea() {
            return $this->width * $this->height;
        }
    }

    class Square extends Shape {
        public function __construct (){
            $this->length = 0;
        }

        public function setLength($length) {
            $this->length = $length;
        }

        public function getArea() {
            return $this->length * $this->length;
        }
    }

    function renderLargeRectangles($rectangles) {

        foreach($rectangles as $rectangle) {
            if ($rectangle instanceof Square) {
                $rectangle->setLength(5);
            } else if ($rectangle instanceof Rectangle) {
                $rectangle->setWidth(4);
                $rectangle->setHeight(5);
            }

            $area = $rectangle->getArea();
            $rectangle->render($area);
        };
    }

    $shapes = [new Rectangle(), new Rectangle(), new Square()];
    renderLargeRectangles($shapes);
