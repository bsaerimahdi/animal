<?php



    class animal{
        private $age;
        private $Weight;

        public function __construct($sen , $vazn)
        {
            $this ->age = $sen;
            $this ->Weight = $vazn;
        }
        public function __destruct()
        {
            echo "havaset bashe inam jon dare.<br>";
        }
    }
    class reptile extends animal{
        private $dw;

        public function __construct($age,$Weight,$va)
        {
            parent::__construct('$sen','$vazn');
            $this ->dw = $va;
        }
        public function sund(){
          echo "hap hap.<br>";  
        }
        public function movementz(){
            echo "terrestrial.<br>";
        }  
    }
    class bird extends animal{
        private $vm;

        public function __construct($age,$Weight,$gg)
        {
            parent::__construct('$sen','$vazn');
            $this ->vm = $gg;
        }
        public function flightheight(){
            echo "I don't know..<br>";
        }
        public function movementh(){
            echo "by air.<br>";
        }
    }

    $dog = new Reptile(3 , 20 , "demostic.<br>");
    $dog ->sund();
    $dog ->movementz();
    $eagle = new Bird(2 , 5 , "wild" , "meat eater");
    $eagle ->movementh();
    var_dump($dog);

    


  
?>