<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our 1st php script</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>
<body>
    <header>
        <div class="header">
            <?php
            echo "my first php";
            ?>

        </div>
    </header>
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

        <br>
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
                    echo "hello word using echo";
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
            


    <script type="text/babel">
      function Hello() {
        return <h1>Hello World!</h1>;
      }

      const container = document.getElementById('mydiv');
      const root = ReactDOM.createRoot(container);
      root.render(<Hello />)
    </script>

</body>
</html>