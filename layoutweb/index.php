<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

        div.container {
            width: 100%;
            border: 1px solid gray;
        }
        header, footer {
            padding: 1em;
            color: white;
            background-color: black;
            clear: left;
            text-align: center;
        } 

        nav {
            float: left;
            max-width: 160px;
            margin: 0;
            padding: 1em;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul a {
            text-decoration: none;
        }

        article {
            margin-left: 170px;
            border-left: 1px solid gray;
            padding: 1em;
            overflow: hidden;
        }

        header, footer {
            padding: 1em;
            color: white;
            background-color: black;
            clear: left;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <header><?php  include "header.php";  ?></header>
        <nav><?php include "nav.php";  ?></nav>
        <article> <?php include "content.php"; ?></article>
        <footer><?php include "footer.php";?></footer>
    </div>
    
</body>
</html>