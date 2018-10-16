<?php
    class Color{
        public          $red;
        public          $green;
        public          $blue;
        static          $verbose = false;

        function __contruct(array $init_arr)
        {
            if (array_key_exists("red", $init_arr))
            {
                $this->$red = $init_arr['red'];
                $this->$green = 0;
                $this->$blue = $init_arr;
            }
        }
        static function doc()
        {
            return file_get_contents("Color.doc.txt");
        }
        public function get_red()
        {
            return ($red);
        }
    }
?>

<?php 
$arr1 = array('red' => 225 ,'gree' => 255, 'blue' => 255); 
$object = new Color(array("rgb", 255 << 8));
$object2 = new Color(array("rgb", 255 << 16));
echo ("red = ". object1.get_red());
?>