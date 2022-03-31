<!DOCTYPE html>
<html lang="en">
<?php require 'PHP/connect.php';?>
<?php require 'PHP/database.php';?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo list</title>
    <link rel="stylesheet" href="Style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <header>
            <div class="first">
                <h3>Username: User</h3>
            </div>

            <div class="second">
                <ul class="nav">
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </header>

        <section>
            <!-- LIST Elements -->

            <?php
            
                if (isset($_GET['pagina'])) {
                    require "Pages/".$_GET['pagina'].".php";
                } else {
                    $list = getLists($conn);
                    
                    echo "<div class='scrollable'>";
                    while($row = $list->fetch_assoc()) {

                        echo "<div class='list'>
                            <a href='index.php?pagina=delete&list_name=".$row['list_name']."&id=".$row['id']."' class='delete'>Delete</a>
                            <h3>".$row['list_name']."</h3>
                        
                            <a href='index.php?pagina=view&id=".$row['id']."' class='view'>View</a>
                        </div><br>";
                    }
                    echo "</div>";

        
                    echo "<a href='index.php?pagina=addList'>Add List</a>";
                }

            ?>

        </section>

        <footer>Footer</footer>
    </div>

    <script src="Script/script.js"></script>
</body>
</html>