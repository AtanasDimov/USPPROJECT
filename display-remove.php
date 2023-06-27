<?php

             
           
        $connection = mysqli_connect("localhost", "root", "", "koli_bd");
        if ($connection->connect_error) {
            die("Connection failed:" . $connection->connect_error);
        }
        if(isset($_POST['make']) || isset($_POST['model'])){
            if(empty($_POST['model'])){
            $make = $_POST['make'];
            $query = "SELECT * FROM koli WHERE make = '$make'";
            }else{
                $model = $_POST['model'];
                $make = $_POST['make'];
                $query = "SELECT * FROM koli WHERE make = '$make' AND model = '$model'";
            }
        }else{$query = "SELECT * FROM koli";}


        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            
            $id = $row['id'];
            
            $pictureQuery = "SELECT * FROM picture WHERE car_id ='$id' LIMIT 1";
            $pictureResult = mysqli_query($connection, $pictureQuery);
            $pictureRow = mysqli_fetch_assoc($pictureResult);
            $picture = $pictureRow['path'];


            $make = $row['make'];
            $model = $row['model'];
            $chassis = $row['chassis'];
            $year = $row['year'];
            $color = $row['color'];
                echo $response = '<li class="section__result">
                    <a id="'.$id.'" href="#" class="delete"></a>
                    <div class="section__left">
                    <div class="section__image">
                    <img src="'.$picture.'" alt="car">
                    </div>
                    <div class="section__title">
                    <h3>' . $make . ' ' . $model . ' </h3>
                    </div>
                    </div>
                    <div class="section__meta">
                    <span>' . $year . '</span>
                    <span>' . $color . '</span>
                    </div>
                    </li>';  
        
        }

        mysqli_close($connection);

        
        ?>