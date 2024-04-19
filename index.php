<html>
    <head><title>hello world script</title></head>
    <body>
    <?php 
    $a = 9;
    $b = "9";
    // $c = $a && $b;
    // $d = $a || $b;
    // $e = $b && $c;
    // $f = $a || $d;
    
    // $logic = array( $a, $b, $c, $d, $e, $f, );
    // echo '<pre>';
    // var_dump($logic);
    // echo'</pre>';

    if ($a > $b){
        echo "$a is greater than $b";
    } else if($a < $b) {
        echo "$a is not greater than $b";
    }else if ($a !== $b){
        echo "$a is equal to $b";
    }
  $user = 'Anudeep';
  $isLogedIn = False;
   if ($isLogedIn){
    echo "<h1>Hello Welcome back, $user </h1>";
   }else{
    echo "<h1> Welcome to the Site </h1>";
   }

    //php ends here
    ?> 

    </body>
</html>  