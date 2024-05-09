<?php



// <!--  ===================================
// /            Get & Post           /
// =================================== -->



// <!-- <form name="Contact" action="./process.php" method="POST">
// <div>
//   <label for="name">Name:</label>
//   <input type="text" name="name" id="name" placeholder="Enter Full Name" />

// </div>
// <div>
//   <label for="email">Email:</label>
//   <input type="email" name="email" id="email" placeholder="someone@email.com" />
// </div>
// <div>
//   <p>Reason For Contact:</p>
//   <input type="radio" name="reason" value="consult" id="consult"><label for="consult">Consult</label>
//   <input type="radio" name="reason" value="question" id="question"><label for="question">Question</label>
//   <input type="radio" name="reason" value="hello" id="hello"><label for="hello">Consult</label>
// </div>
// <div>
//   <p>What topicx do you like reading about? (Check all apply):</p>
//   <input type="checkbox" name="html[]" id="html"><label for="html">HTML</label>
//   <input type="checkbox" name="CSS[]" id="CSS"><label for="CSS">CSS</label>
//   <input type="checkbox" name="PHP[]" id="PHP"><label for="PHP">PHP</label>
//   <input type="checkbox" name="wordpress[]" id="wordpress"><label for="wordpress">WordPress</label>
// </div>
// <div>
//   <label for="message">Waht's Your Message?</label><br>
//   <textarea name="message" id="message" cols="30" placeholder="Enter your Message here."></textarea>
// </div>
// <div>
//   <p>What is your Fav Movies?</p>
//   <select name="movie[]" id="movie" multiple>
//       <option value="Iron Man I">Iron Man I</option>
//       <option value="Iron Man II">Iron Man II</option>
//       <option value="Iron Man III">Iron Man III</option>
//       <option value="Hulk">Hulk</option>
//       <option value="Incredible Hulk">Incredible Hulk</option>
//       <option value="Thor">Thor</option>
//       <option value="Thor Ragnarok">Thor Ragnarok</option>
//       <option value="Eagle Eye">Eagle Eye</option>
//       <option value="Black Widow">Black Widow</option>
//       <option value="Spiderman">Spiderman</option>
//   </select>
// </div>

// <div><input type="submit" name="submit" value="submit"></div>
// </form>
// -->

// <style>
// .alert {
//   color: red;
// }
// </style>
// <?php
// $form_complete ??  true;
// if ($form_complete) {
// foreach ($_POST as $name => $value) {
//   if ('submit' != $name) {
//       if (is_array($value)) {
//           $value = implode(',', $value);
//       }
//       echo '<p>' . ucfirst($name) . " = " . $value . '</p>';
//   }
// }
// }
// 

// <!--  ===================================
// /          Form Validation        /
// =================================== -->


// <h2>Contact</h2>

// <form name="contact" method="POST">

//     <div>
//         <?php if (isset($_POST['name']) && empty(trim($_POST['name']))) {
//             echo "<p class=\"alert\"> Name is required </p> ";
//             $form_complete = false;
//         } 

// <label for="name">Name:</label> <input type="text" name="name" id="name" placeholder="Enter Your Full name" required />
// </div>
// <div><label for="email">Email:</label> <input type="email" name="email" id="email" placeholder="Enter your Email" required /></div>
// <div>
// <p>Reason for Contact:</p>
// <input type="radio" name="reason" id="consult" value="consult" /><label for="consult">Consult</label>
// <input type="radio" name="reason" id="question" value="question" /> <label for="question">Question</label>
// <input type="radio" name="reason" id="hello" value="hello" /><label for="hello">Hello</label>
// </div>
// <div>
// <p>What topics do you like reading about? (Check all that apply:)</p>
// <input type="checkbox" name="topics[]" id="HTML" value="HTML"><label for="HTML">HTML</label>
// <input type="checkbox" name="topics[]" id="CSS" value="CSS"><label for="CSS">CSS</label>
// <input type="checkbox" name="topics[]" id="PHP" value="PHP"><label for="PHP">PHP</label>
// <input type="checkbox" name="topics[]" id="Wordpress" value="Wordpress"><label for="Wordpress">WordPress</label>
// </div>


// <div>
// <p>What is your Fav Movies?</p>
// <select name="movie[]" id="movie" multiple>
// <option value="Iron Man I">Iron Man I</option>
// <option value="Iron Man II">Iron Man II</option>
// <option value="Iron Man III">Iron Man III</option>
// <option value="Hulk">Hulk</option>
// <option value="Incredible Hulk">Incredible Hulk</option>
// <option value="Thor">Thor</option>
// <option value="Thor Ragnarok">Thor Ragnarok</option>
// <option value="Eagle Eye">Eagle Eye</option>
// <option value="Black Widow">Black Widow</option>
// <option value="Spiderman">Spiderman</option>
// </select>
// </div>
// <div>
// <label for="message">Waht's Your Message?</label><br>
// <textarea name="message" id="message" cols="30" placeholder="Enter your Message here."></textarea>
// </div>
// <div><input type="submit" name="submit" value="submit"></div>
// </form>



// <!--  ***********************************
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