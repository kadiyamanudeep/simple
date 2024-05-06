<?php
//    <!--  ***********************************
//    *            NameSpace            *
//    *********************************** -->

// <?php // include './namespace/learningspace.php';

// // function double($a)
// // {
// //     return $a + 2;
// // }
// // echo '<p>' . double(5) . '</p>';
// // echo '<p>' . learningSpace\double(5) . '</p>';
// 
?>

<!--  ***********************************
          *    Trouble Shooting your Code   *
          *********************************** -->

<?php
error_reporting(E_ALL);


$a = 20;

if ($a > 2) {
    echo $a;
}

// set_cookie('error', true);
?>

<h1>hello</h1>
<pre>
    <?php
    $color = array('red', 'yellow', 'green');
    var_dump($color);
    ?>
</pre>






// <!--  ***********************************
//    *       Include and Rquire        *
//    *********************************** -->

// <!-- <?php // include './templates/nav.php' 
        //      
        ?>
// <h1><?php //echo $title; 
        //  
        ?></h1>
// <?php // para_print($description) 
    // 
    ?>
// <small><?php // echo $author; 
            //      
            ?></small> -->

// ***********************************
// * Classes *
// ***********************************


// class Person
// {
// var $first_name;
// var $last_name;

// function __construct($fn, $ln)
// {
// $this->first_name = $fn;
// $this->last_name = $ln;
// }

// public function get_first_name()
// {
// return $this->first_name;
// }

// public function get_last_name()
// {
// return $this->last_name;
// }
// }

// Challenge: Sort this array of Person objects by last, then first name!

// $rob = new Person('Rob', 'Casabona');
// $joe = new Person('Joe', 'Casabona');
// $erin = new Person('Erin', 'Casabona');
// $steve = new Person('Steve', 'Wozniack');
// $bill = new Person('Bill', 'Gates');
// $walt = new Person('Walt', 'Disney');
// $bob = new Person('Bob', 'Iger');

// $people = array($rob, $joe, $erin, $steve, $bill, $walt, $bob);

// usort($people, function ($a, $b) {
// return [$a->get_last_name(), $a->get_first_name()] <=> [$b->get_last_name(), $b->get_first_name()];
    // });

    // echo '
    <pre>';
// print_r($people);
// echo '</pre>';

    // Constructors
    // class BankAccount
    // {

    // function __construct(private $accountNumber, private $balance)
    // {
    // $this->accountNumber = $accountNumber;
    // $this->balance = $balance;
    // }
    // function getAccNum()
    // {
    // return $this->accountNumber;
    // }
    // function getBal()
    // {
    // return $this->balance;
    // }
    // }

    // $account = new BankAccount(1, 100);
    // echo '<p>this is a account Number</p>' . $account->getAccNum();
    // echo '<br>
    <p>this is a balance</p>' . $account->getBal();



    // class Customer
    // {
    // private $name;
    // public function setName($name)
    // {
    // $this->name = $name;
    // }
    // public function getName()
    // {
    // return $this->name;
    // }
    // }

    // $customer = new Customer();
    // $customer->setName('anudeep');
    // echo $customer->getName();

    // class Person
    // {
    // var $name;
    // var $age;
    // var $birthday = false;
    // public function __construct($name, $age)
    // {
    // $this->name = $name;
    // $this->age = $age;
    // }
    // public function get_name()
    // {
    // return $this->name;
    // }
    // public function get_age()
    // {
    // return $this->age;
    // }
    // }

    // $joe = new Person('Joe', 35);
    // $rob = new Person('Rob', 30);

    // echo $joe->get_name();




    // class BankAccount
    // {
    // public $accountNumber;
    // public $balance;
    // public function deposit($amount)
    // {
    // if ($amount > 0) {
    // $this->balance += $amount;
    // }
    // return $this->balance;
    // }
    // public function withdrawl($amount)
    // {
    // if ($amount <= $this->balance) {
        // $this->balance -= $amount;
        // return $this->balance;
        // }
        // return "insufficient funds";
        // }
        // }

        // $account = new BankAccount();
        // $account->accountNumber = 1;
        // $account->balance = 2000;
        // echo $account->deposit(200);

        // class Customer
        // {
        // public $name;
        // public function getName()
        // {
        // return $this->name;
        // }
        // }

        // $customer = new Customer();
        // $customer->name = 'anudeep';
        // echo $customer->getName();

        // $customerTwo = new Customer();
        // $customerTwo->name = 'sowmya';
        // echo $customerTwo->getName();



        // ***********************************
        // * Functions *
        // ***********************************


        // function hello_world(){
        // return "Hello World";
        // }
        // echo hello_world();
        // $name = array('joe', 'Erin', 'teresa', 'louis');
        // usort($names, function($a, $b){
        // return $a[1] <=> $b[1];
            // });
            // echo "anudeep";
            //
            // "
            <pre>"
// print_r($names)
// "</pre>"

            // basic calculator funtions
            // function math($a, $b= 2 , $op = 'multiply'){
            // if ('add' == $op){
            // return $a + $b;
            // }else if('sub' == $op){
            // return $a - $b;
            // }else if('div' == $op){
            // return $a/$b;
            // }
            // return $a*$b;
            // };

            // echo math(4, op : 'div', b: 35);



            // user defined function function for palindrome
            // function is_pallindrome($string){
            // $string = str_replace(' ','',strtolower($string));
            // return ($string == strrev($string) );
            // }

            // $check_string = 'race car';
            // if(is_pallindrome($check_string)){
            // echo "$check_string is Pallindrome";
            // }else{
            // echo "$check_string is not pallindrome";
            // }
















            // ***********************************
            // * Loops *
            // ***********************************



            // for ($i=10; $i>0 ; $i--) {
            // echo $i;
            // }


            // $current = 1;
            // $previous = 0;
            // $next = null;
            // $limit = 200;

            // while($current < $limit){ // echo $current. ',' ; // $next=$current + $previous; // $previous=$current; // $current=$next; // } // for($i=0; $i<200; $i++){ // echo "$i  <br>" ; // } //For Each Loops // $colors=array ('red', 'blue' , 'orange' , 'green' ,); // foreach($colors as $color){ // echo "<p>" . $color . "</p>" ; // } // $friends=array ( // 'anudeep'=> 'gopalapuram',
                // 'raju' => 'Hyderabad',
                // 'ricky' => 'hyderabad',
                // );

                // foreach($friends as $name => $city){
                // echo "<p>$name lives in $city</p>";
                // }

                //For Loops

                // $colors = array ('red', 'blue', 'orange', 'green',);

                // for( $i=0; $i<sizeof($colors); $i++ ){ // echo "<p>" . $colors[$i]. "</p>" ; // } // Do/While // $i=0; // do{ // echo "<p> $i </p>" ; // $i++; // }while($i<10); // // while loop // while($i <10){ // echo "<p> $i </p>" ; // $i++; // } // practising math operators // Challenge in math operators // $a=(14+82-32/2)**2; // $b=18*(3/6-9)*10; // $c=5*(12/2-8*4+12*6); // $results=[$a, $b, $c,]; // echo "<pre>" ; // print_r($results); // echo "</pre>" ; // ***************************** // echo "number is even" ; // }else{ // echo "number is odd" ; // } // echo ($a%2===0) ? "$a is even" : "$a is odd" ; // Cheking odd or even number using ternary operator // NUmber Guessing challenge using if condition // $min=1; // $max=50; // $guess=rand(1,200); // $num=rand($min, $max); // if ($guess < $min || $guess> $max ){
                    // echo "<p>Your guess is out of the range.</p>";
                    // }else{
                    // if($num == $guess){
                    // echo "<p>Your Guess is Correct </p>";
                    // }elseif($num > $guess){
                    // echo "your guess is low";
                    // }else{
                    // echo"your Guess is high";
                    // }
                    // }

                    // echo "<br> Number is = $num";
                    // echo "<br> Guess is = $guess";


                    // Second Challenge using match functionn
                    // $min = 1;
                    // $max = 50;
                    // $guess = 25;
                    // $num = rand($min, $max);

                    // $result = match(true){
                    // $guess == $num => 'you Guessed the right Number',
                    // $guess >= $max => 'you guess is out of the range',
                    // $guess <= $min=> 'you guessed below the range',
                        // $guess <= $num=> 'Your Guessed nunber is wrong and it is below the number',
                            // $guess >= $num => 'Your Gussed number is wrong and it is above the number',

                            // };

                            // echo $num . "<br>";
                            // echo $result;


                            // function add_to_x($x){
                            // return $x +5;
                            // };

                            // $x = 0 ;

                            // $result = match(true){
                            // $x <= 0=> '$x is not positve',
                                // $x == 1 => '$x is 1',
                                // $x == 2 => '$x is 2',
                                // default => '$x is neither 1 or 2'
                                // };


                                // echo $result;



                                // $result = match($x){
                                // -2, -1, 0 => add_to_x($x),
                                // 1 => '$x is 1',
                                // 2 => '$x is 2',
                                // default => '$x is neither 1 or 2',
                                // };

                                // $result = match(true){
                                // $x == 0 => '$x is neither positive nor negative',
                                // $x < 0=> '$x is negative',
                                    // $x > 0 => '$x is positve',
                                    // default => 'default option'
                                    // };







                                    // $total = 10;
                                    // switch ($total){
                                    // case 1:
                                    // case 2:
                                    // case 3:
                                    // case 4:
                                    // echo '<p> $total is less than 5 </p>';
                                    // break;
                                    // default:
                                    // echo '<p> $total is more than 5 </p>';
                                    // }

                                    // switch Example
                                    // =================
                                    // $turtle = 'leo';
                                    // $bandana = '';

                                    // switch ($turtle){
                                    // case 'leo':
                                    // $bandana = 'blue';
                                    // break;
                                    // case 'raph':
                                    // $bandana = 'red';
                                    // break;
                                    // case 'mike':
                                    // $bandana = 'orange';
                                    // break;
                                    // case 'don':
                                    // $bandana = 'purple';
                                    // }
                                    // echo $bandana;

                                    // Match example
                                    // ==============

                                    // $bandana = 'red';

                                    // $turtle = match ($bandana){
                                    // 'leo' => "red is $bandana's scolor turtle",
                                    // 'mike' => "yellow is $bandana's scolor turtle",
                                    // 'don' => "blue is $bandana's scolor turtle",
                                    // 'raph' => "green is $bandana's scolor turtle",
                                    // default => 'your selection out of the option',
                                    // };
                                    // echo $turtle;

                                    //Ternary operation Example

                                    // $user = "Deepu ";
                                    // $isLogedIn = false;
                                    // $message = "welcome" . ($isLogedIn ? " Back, $user!" : " Back!");

                                    // $user = $user ? : "Deepu";

                                    // echo $user;



                                    //******************** */

                                    // $a = 9;
                                    // $b = "9";
                                    // $c = $a && $b;
                                    // $d = $a || $b;
                                    // $e = $b && $c;
                                    // $f = $a || $d;

                                    // $logic = array( $a, $b, $c, $d, $e, $f, );
                                    // echo '
                                    <pre>';
// var_dump($logic);
// echo'</pre>';

                                    // if ($a > $b){
                                    // echo "$a is greater than $b";
                                    // } else if($a < $b) { // echo "$a is not greater than $b" ; // }else if ($a !==$b){ // echo "$a is equal to $b" ; // } // if ($isLogedIn){ // $message="<h1>Hello Welcome back, $user </h1>" ; // }else{ // $message="<h1> Welcome to the Site </h1>" ; // } //php ends here