<?php
 
class SortImpl {

    const MESSAGE = 'This constant message';
    const MESSAGE2 = 'This constant call self class name';
    const MESSAGE3 = 'This constant call self keyword';

    public function sortArray1() :string
    {
        # class this constant this function
        return  SortImpl::MESSAGE2; 
    }
    public function sortArray2() :string
    {
        # class this constant this function
        return  self::MESSAGE3;
    }
     
}

echo SortImpl::MESSAGE;
 
$obj = new SortImpl();
echo '<br>';
echo $obj->sortArray1();
echo '<br>';
echo $obj->sortArray2();


 
# note:
# `constant` value akbar dhorle `fix` thake change kora jai na
# This `constant` call `class` name
# This constant call `self` keyword
?>

