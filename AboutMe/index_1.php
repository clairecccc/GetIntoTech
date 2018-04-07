<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ex7 PHP Variables and Data Types</title>
</head>
<body>
  <header>
    <h1>PHP Variables and Data Types</h1>
    <hr>
  </header>
    <article>
      <section>
        <header>
          <h2>Part 1 - Declaring and printing variables</h2>
        </header>
        <?php
          // Put the Part 1 PHP code here
        $msg1 = "Hello World<br/>";
        echo $msg1;
        
        $username = "Student";
        $email = "student@email.com";
        
        echo "$username can be contacted at $email<br/>";
        echo '$username can be contacted at $email<br/>';
        echo $username . ' can be contacted at ' . $email . "<br/>";

        $msg2 = "Print is similar to echo";
        $msg3 = "Print only takes one argument";
        print "<h3>$msg2</h3>";
        print "<h3>$msg3</h3>";
        echo $msg1, " ", $msg2, "<br/>";
        //print $msg1, " ", $msg2, "<br/>";
        $w = 7;
        $x = 5;
        $y = true;
        $z = false;
        echo $w . " - the number is treated as text<br/>";
        print $x . " - the number is treated as text<br/>";
        echo $y . " – representing true<br/>";
        print $z . " – representing false<br/>";
        print (int) $z . " – representing false<br/>";
        echo ($w + $x) . "<br/>";
        print ($w + $x) . "<br/>";

        ?>
      </section>
      <hr>
      <section>
        <header>
          <h2>Part 2 - Investigating Types</h2>
        </header>
        <?php
          // Put the Part 2 PHP code here
        echo gettype($msg1) . "<br>";
        echo gettype($msg2). "<br>";
        echo gettype($msg3). "<br>";
        echo gettype($w). "<br>";
        echo gettype($x). "<br>";
        echo gettype($y). "<br>";
        echo gettype($z). "<br>";
        ?>
      </section>
      <hr>
      <section>
        <header>
          <h2>Part 3 - Operators</h2>
        </header>
        <?php
          // Put the Part 3 PHP code here
        echo $w + $x . "<br/>";
        echo ($w < $x) . "<br/>";
        echo ($w > $x) . "<br/>";
        echo ($w > $x == $y) . "<br/>";
        echo ($w < $x == $y) . "<br/>";
        echo ($w === 7 && $y == true) . "<br/>";
        echo ($w == 8 || $z == false) . "<br/>";

        echo $x . ' - the current value of $x<br/>';
        echo $x++ . ' - $x is returned and then incremented<br/>';
        echo $x . ' - the new value of $x<br/>';
        echo ++$x . ' - $x is incremented and then returned<br/>';
        echo $x . ' - the new value of $x<br/>';

        echo $w . ' - the current value of $w<br/>';
        $w += $x;
        echo $w . ' - the result of adding $x to $w';

        ?>
      </section>
    </article>
</body>
</html>
