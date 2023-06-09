
<body>
    
    <main>
    <div id="mydiv"></div>
    <br>

    <section>

        <h2> What is php?<h2>
            <ul>
                <li> PHP is an acronym for Hypertext Preprocessorr.</li>
                <li> It is a scripting language that is used to write web pages.</li>
                <li> It is a server-side scripting language.</li>
                <li> It is a markup language.</li>
            </ul>
        
        <hr>

        <h2> Two Common types of programming paradigm<h2>
            <ol>
                <li> Procedural programming </li>
                <li> Object Oriented programming </li>
            <ol>
        <hr>

        <h2>What can PHP DO?</h2>
            <ul>
                <li> It can generate dynamic page content</li>
                <li> It can create, open, read, write, delete and close files on server.</li>
                <li> Receive and send cookies. </li>
                <li> Can perform CRUD - CREATE, READ, UPDATE,DELETE in our database. </li>
                <li> Setup control user-access.</li>
                <li>Encrypt data</li>
            </ul>
        </section>

        
        <hr>
        
        <section>
            <h2>Two basic ways to get output</h2>
            <ul>
                <li> print statement</li>
                <li> echo statement</li>
            </ul>
            <p>
                Hi, this is a paragraph content inside a paragraph element.
            </P>
            <p>
                <?php
                    echo "hello world using echo";
                ?>
                <?php
                    print "hello world using print";
                    ?>
            </p>
        </section>

        <hr>

        <section>
            <h2> without escaping </h2>
            <?php
            if(1==1){
                echo "<p> This works alright with if statement";
            }
            ?>

            <h2> with escaping examples</h2>
            <?php

            if(1==1){
                ?>
            <p> This should also work </p>

            <?php    
            }?>
        </section>
        
        <section>
            <h2> Scalar data type</h2>
            <strong> Data types</strong>
            <strong>NOTE:</NOTE><p>we have atleast  12 primitive data types </p>

            <h3>Scalar Data Types</h3>
            <ul>
                <li>String</li>
                <li>Integer</li>
                <li>Floats</li>
                <li>Boolean</li>
            </ul>

            <h3>Compound</h3>
            <ul>
                <li>Array</li>
                <li>Object</li>
                <li>Caliable</li>
                <li>Iterable</li>
            </ul>

            <h2>Special</h2>
            <ul>
                <li>Resource</li>
                <li>Null</li>
            </ul>

            <h2>Pseudo-Types</h2>
            
        </section>

        <section>
            <h2>String data types</h2>
                <ul>
                    <li>Single qoutes</li>
                    <li>Double qoutes</li>
                </ul>
                <p>It is important to take note of cancelling out double qoutes in sie of our double qoutes</p>
            <?php
                echo 'I\'m learning how to work with strings';
            ?>

                <hr>

            <h2>INTEGERS</h2>

            <?php
            echo 20 . " This is an integer";

            echo "<br>";
            if("10" == 10){
                echo "This  is not the same data type";
            }
            ?>
            
        </section>
        <section>
            <h2>Boolean</h2>

            <?php
            $a = true;

            if($a === true){
                echo "variable a is true";
            }

            ?>

            <hr>
            <h2>Declaring Variable</h2>
            
            <?php
                echo "<h3>Rules in declaring variables</h3>";
                echo "<ul>
                    <li>Don't start your variable name with a number</li>
                    <li>A variable name can start with a letter and an underscore</li>
                    <li>Cannot start with a number</li>
                    <li>case sensitive</li>
                </ul>"
            ?>

            <hr>
            <?php
            print "<h2>Coding Challenge</h2>";
            //Declare a variable and assign a value of string data type
            //Declare a variable and assign a number data type
            //Declare a variable and assign a boolean data type
            //Declare a variable and assign a float data type
            
            $strng = "String";
            $num = 20;
            $bool = false;
            $flot = 20.00;

            echo $strng ." is the declared variable";
            echo $num;
            echo "<br>";
            echo "this value is ".$bool;
            ?>
            <hr>
            <h2>Operators</h2>
            <ul>
                <li>Arithmetic Operator</li>
                <li>Assignment Operator</li>
                
            </ul>

            <hr>
            <?php
                $num1 = 1;
                $num2 = 2;
                $sum;
                $product;
                $diff;
                $qoutient;
                echo "<h3>Arithmetic Operator</h3>";
                $sum = $num1 + $num2;
                echo $num1."+".$num2."=".$sum;
                echo "<br>";

                $product = $num1 * $num2;
                echo $num1."*".$num2."=".$product;
                echo "<br>";

                $diff = $num1 - $num2;
                echo $num1."-".$num2."=".$diff;

                echo "<br>";
                $qoutient = $num1 / $num2;
                echo $num1."/".$num2."=".$qoutient;
                
            ?>
            <hr>

            <?php
                echo "<h3>Assignment Operator</h3>";

                $num1 += $num2;
                echo $num1;
                //num1 = num1 + num2
                echo "<br>";

                $num1 = $num1 + $num2;
                echo $num1;
                
            ?>

            <?php
            echo '<h2> Comparison Operator</h2>';
                $num1 == $num2;
                $num1 === $num2;
                $num1 !== $num2;
                $num1 < $num2;
                $num1 > $num2;
                $num1 <= $num2;
                $num1 >= $num2;
            ?>

            <hr>
            <?php
                echo "<h2> loops </h2>";
                
                $a = 0;
                $b = 5;

                while($a < $b){
                    $a++;
                    echo "while loop number ".$a;
                    echo "<br>";
                }
                    echo "<br>";

                for($i=1; $i<=5 ;$i++){
                    echo "for loop # ".$i;
                    echo "<br>";
                }
                    echo "<br>";

                $array = ["Benjie", "28", "Male","zzz","ddd","ccc"];

                foreach($array as $value){
                    if($value === "Male"){
                        echo $value." is found";
                    }
                    echo "<br>";
                }
                
                //Assiotitive Arrays

                $persons = [
                    "name" => "Benjie",
                    "age" => 28,
                    "gender" => "Male",
                    "address" => "zzz"
                ];

                foreach($persons as $key => $value){
                    echo $key. ": ".$value;
                    echo "<br>";
                }
            ?>


            <h2>Includes and require<h2>
                <?php
                

                include 'includes/2ndpage.php';
                include_once 'includes/2ndpage.php';
                require 'test.php';
                require_once 'test.php';
            
            
                    echo $apple;
                ?>






























    <script type="text/babel">
      function Hello() {
        return <h1>Hello World!</h1>;
      }

      const container = document.getElementById('mydiv');
      const root = ReactDOM.createRoot(container);
      root.render(<Hello />)
    </script>
</main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>