<?php


class MyList
{
        public $mylist =[];
    public function __construct($arr = "")
    {
        if (is_array($arr) == true)
            $this->mylist = $arr;
        else
            $this->mylist = array();
    }
    function editIndex($index, $value)
    {
        $this->mylist[$index] = $value;
    }

    public function add($index, $value){
        if ($this->isInteger($index)){
            $newArray = [];
            for ($i = 0; $i < $this->size(); $i++){
                if ($index == $i){
                    array_push($newArray,$value);
                }
                array_push($newArray,$this->mylist[$i]);
            }
            $this->mylist = $newArray;
        }else{
            echo "Nhap lai thong tin";
        }
    }
    public function addLast($value){
        array_push($this->mylist,$value);
    }

    public function remove($index){
        if($this->isInteger($index)){
            $newArray = [];
            for ($i = 0; $i < count($this->mylist); $i++){
                if ($index <> $i){
                    array_push($newArray, $this->mylist[$i]);
                }

            }
            $this->mylist = $newArray;
        }else{
            Echo "Nhap So nguyen";
        }
    }

    function cloneArray()
    {
        return implode(",", $this->mylist);
    }
    function contains($value)
    {
        foreach ($this->mylist as $valueArray) {
            if ($valueArray == $value) {
                return true;
            }
        }
        return false;
    }

    function indexOf($value)
    {
        foreach ($this->mylist as $key => $valueArray) {
            if ($valueArray == $value) {
                return $key;
            }
        }
        return -1;
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->mylist[$index];
        } else {
            die("ERROR in Array.get");
        }
    }

    public function clear(){
        return $this->mylist = [];
    }

    public function size(){
        return count($this->mylist);
    }
    function ensureCapacity($number)
    {
        if ($this->isInteger($number)) {
            if (count($this->mylist) > $number)
                $newArray = [];
            for ($i = 0; $i < $number; $i++) {
                array_push($newArray, $this->mylist[$i]);
            }
            $this->mylist = $newArray;
            var_dump($this->mylist);
            echo "array full";
        } else {
            echo "nhap so nguyen";
        }
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

}