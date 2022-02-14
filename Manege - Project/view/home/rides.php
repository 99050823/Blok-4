<?php
    $deleteAll = $_POST['deleteAllBttn'];

    if ($deleteAll) {
        deleteAllFunc('rides');
    }

?>

    <h2>Rides : </h2>

    <div class="rides-panel">
        <?php
        
            $count = count($data);
            $number = 1;

            for ($i=0; $i < $count; $i++) { 
                echo "<div class='rides-block'>
                    <h3>Ride".$number."</h3>

                    <p>Rider : ".$data[$i]['User']."</p>
                    <p>Horse : ".$data[$i]['Horse']."</p>
                    <p>Time : ".$data[$i]['Time']."</p>
                    <p>Total : €".$data[$i]['Price']."</p>

                    <a href='".URL."home/editRide?var=".$data[$i]['ID']."'>EDIT</a>
                    <a href='".URL."home/editRide?var=".$data[$i]['ID']."&table=animals'>DELETE</a>
                </div>";

                $number++;
            }
        
        ?>

        <form method="post">
            <input name="deleteAllBttn" type="submit" value="Delete All">
        </form>
    </div>