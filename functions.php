<?php
    include_once 'header.php';
?>

    <main>
        <section>
            <div class="functions">

            <h2>FUNCTIONS<h2>
            <h3>TWO THINGS TO TAKE NOTE OF WHEN WORKING WITH FUNCTIONS</h3>
            <ol style="text-align: left">
                <li>INTERNAL FUNCTIONS - BUILT IN FUNCTIONS (METHODS)</li>
                <li>USER DEFINED FUNCTIONS</li>
            </ol>
            <hr>

            <?php
                echo "<h2>Built in Functions or Internal Functions to the language</h2>";
                $a = "Hello world!";
                echo $a;
                echo "<br>";
                echo str_replace("world!", "MOFO!", $a);

                $b = "HI!";
                echo $b;
                echo "<br>";
                $greeting = "Jie,";
                echo str_repeat($greeting, 3);
                echo "<br>";

                $a = "Hello World!";
                $char = "He";

                echo strpos($a, $char);




                echo"<hr>";
                echo"<h2>User defined functions</h2>";
                function displayMessage(){
                    echo "This is a user defined function";
                }

                displayMessage();

                echo "<hr>";

                // function calculateAdd(int $num1, int $num2){
                //     $add = $num1 + $num2;
                //     return $add;
                // }

                
            ?>
            
            </div>

        </section>

        <section>
            <div class="form">
                <form action="funcCalc.php" method="get">
                    <input type="text" name="num1" placeholder= "Number 1">
                    <select name="Operations" id="">
                        <label for="operations"></label>
                    </select>
                    <input type="text" name="num1" placeholder= "Number 2">
                    <button type="submit">Calculate</button>
                </form>

            </div>
        </section>

    </main>







<?php
    include_once "footer.php";
?>