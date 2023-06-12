<pre>
<?php

class Employee1
{


    public $name, $dept;
    protected $id;

    private $salary;


    function getSalary($sal)
    {

        $this->salary = $sal;


    }
    function showSal(){


echo "Salary:  $this->salary";

    }





}



class Manager1 extends Employee1 {


function managerID($id){

$this->id = $id;
echo "ID: ".$this->id ;


}


}


$emp1 = new Employee1();

$emp1->getSalary(50000);

// $emp1->id = 1055;

$emp1->showSal();
// print_r($emp1);


$manager1 = new Manager1();
$manager1->managerID(1055);
$manager1->getSalary(33000);
$manager1->showSal();

?>
    </pre>