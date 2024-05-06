<?php
require_once './inc/functions.php';
require './inc/variable.php'; ?>
<html>

<head>
    <title><?php echo $title; ?></title>
</head>

<body>

    <!--  ***********************************
          *         Processing Forms        *
          *********************************** -->

    <!--  ===================================
          /            Get & Post           /
          =================================== -->

    <pre>

</pre>

    <form name="Contact" action="./process.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter Full Name" />

        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="someone@email.com" />
        </div>
        <div>
            <p>Reason For Contact:</p>
            <input type="radio" name="reason" value="consult" id="consult"><label for="consult">Consult</label>
            <input type="radio" name="reason" value="question" id="question"><label for="question">Question</label>
            <input type="radio" name="reason" value="hello" id="hello"><label for="hello">Consult</label>
        </div>
        <div>
            <p>What topicx do you like reading about? (Check all apply):</p>
            <input type="checkbox" name="html[]" id="html"><label for="html">HTML</label>
            <input type="checkbox" name="CSS[]" id="CSS"><label for="CSS">CSS</label>
            <input type="checkbox" name="PHP[]" id="PHP"><label for="PHP">PHP</label>
            <input type="checkbox" name="wordpress[]" id="wordpress"><label for="wordpress">WordPress</label>
        </div>
        <div>
            <label for="message">Waht's Your Message?</label><br>
            <textarea name="message" id="message" cols="30" placeholder="Enter your Message here."></textarea>
        </div>
        <div>
            <p>What is your Fav Movies?</p>
            <select name="movie[]" id="movie" multiple>
                <option value="Iron Man I">Iron Man I</option>
                <option value="Iron Man II">Iron Man II</option>
                <option value="Iron Man III">Iron Man III</option>
                <option value="Hulk">Hulk</option>
                <option value="Incredible Hulk">Incredible Hulk</option>
                <option value="Thor">Thor</option>
                <option value="Thor Ragnarok">Thor Ragnarok</option>
                <option value="Eagle Eye">Eagle Eye</option>
                <option value="Black Widow">Black Widow</option>
                <option value="Spiderman">Spiderman</option>
            </select>
        </div>

        <div><input type="submit" name="submit" value="submit"></div>
    </form>



</body>

</html>