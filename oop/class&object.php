<pre>
<?php

class Person
{

    function __construct(){



        echo "</br>" . "Person Constructor Function" . "</br>";
    }
    public $id, $name, $contact, $email;



}

class Student extends Person
{

    function __construct($stdID, $stdName, $stdcontact, $email)
    {


        echo "</br>" . "Student Constructor Function" . "</br>";

        $this->id = $stdID;
        $this->name = $stdName;
        $this->contact = $stdcontact;
        $this->email = $email;

        $this->show();

    }

    public $course;
    // public $id, $name, $contact, $email;

    function getData($stdID, $stdName, $stdcontact, $email)
    {
        $this->id = $stdID;
        $this->name = $stdName;
        $this->contact = $stdcontact;
        $this->email = $email;



    }

    function show()
    {


        echo "</br>" . $this->id . "</br>";
        echo "</br>" . $this->name . "</br>";
        echo "</br>" . $this->contact . "</br>";
        echo "</br>" . $this->email . "</br>";


    }

    function __destruct()
    {

        echo "</br>" . "Student destructor Function" . "</br>";



    }



}

class Employee extends Person
{

    function __construct(){



        echo "</br>" . "Employee Constructor Function" . "</br>";
    }
    public $dept , $salary;



}

class Manager extends Employee{
    // function __construct(){



    //     echo "</br>" . "Manager Constructor Function" . "</br>";
    // }
    public $designation;

}







// $s1 = new Student();
// $s1->id = 123;
// $s1->name = "Ali";
// $s1->email = "Ali@gmail.com";
// $s1->contact = "03125658911";
// echo "Name: " . $s1->name;



// $s2 = new Student();
// $s2->getData(21, "Rafee", "023654458", "rafee@gmail.com");

// print_r($s2);


// $s1->show();
// $s2->show();


// $s3 = new Student(333, "Uzair", "021365987", "uzair@gmail.com");
// $s4 = new Student(333, "Danish", "021365987", "danish@gmail.com");
// $s3->show();
// echo $s4->name;


$e1 = new Employee();
 $m1 = new Manager();
 






// print_r($s1);


?>
</pre>