<?php

$dbHost ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "koli_bd";

$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if($db->connect_error){
die("Connection failed:".$db->connect_error);
}

$query = "SELECT * FROM koli";


if(isset($_POST['submit_home'])){

if(isset($_POST['makeFilter']) || isset($_POST['modelFilter']) || isset($_POST['chassisFilter'])|| isset($_POST['engineFilter']) || isset($_POST['gearboxFilter']) || isset($_POST['colorFilter']) || isset($_POST['yearFromFilter']) || isset($_POST['yearToFilter']) || isset($_POST['priceFromFilter']) || isset($_POST['priceToFilter']) || isset($_POST['powerFromFilter']) ||isset($_POST['powerToFilter'])){
    $query.=" WHERE ";
    $conditions = array();

    $makeFilter=$_POST['makeFilter'];
    if(!empty($makeFilter)){
        $conditions[] = "make = '$makeFilter' ";
    }
    $modelFilter=$_POST['modelFilter'];
    if(!empty($modelFilter)){
        $conditions[] = "model = '$modelFilter' ";

    }
    $chassisFilter=$_POST['chassisFilter'];
    if(!empty($chassislFilter)){
        $conditions[] = "chassis = '$chassisFilter' ";

    }
    $engineFilter=$_POST['engineFilter'];
    if(!empty($engineFilter)){
        $conditions[] = "engine = '$engineFilter' ";

    }
    $gearboxFilter=$_POST['gearboxFilter'];
    if(!empty($gearboxFilter)){
        $conditions[] = "gearbox = '$gearboxFilter' ";

    }
    $colorFilter=$_POST['colorFilter'];
    if(!empty($colorFilter)){
        $conditions[] = "color = '$colorFilter' ";

    }
    $yearFromFilter=$_POST['yearFromFilter'];
    if(!empty($yearFromFilter)){
        $conditions[] = "year >= '$yearFromFilter' ";

    }
    $yearToFilter=$_POST['yearToFilter'];
    if(!empty($yearToFilter)){
        $conditions[] = "year <= '$yearToFilter' ";

    }
    $priceFromFilter=$_POST['priceFromFilter'];
    if(!empty($priceFromFilter)){
        $conditions[] = "price >= '$priceFromFilter' ";

    }
    $priceToFilter=$_POST['priceToFilter'];
    if(!empty($priceToFilter)){
        $conditions[] = "price <= '$priceToFilter' ";

    }
    $powerFromFilter=$_POST['powerFromFilter'];
    if(!empty($powerFromFilter)){
        $conditions[] = "power >= '$powerFromFilter' ";

    }
    $powerToFilter=$_POST['powerToFilter'];
    if(!empty($powerFromFilter)){
        $conditions[] = "power <= '$powerToFilter' ";

    }
    $query.= implode(' AND ',$conditions);
 }
}
    if(isset($_POST['sortValue'])){
        $sortValue = $_POST['sortValue'];
    if($sortValue === "price" || $sortValue === "year" || $sortValue === "date"){
        $query .= " ORDER BY $sortValue ASC;";
        }
    }

$result = mysqli_query($db,$query);
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];

    $pictureQuery = "SELECT * FROM picture WHERE car_id ='$id' LIMIT 1";
    $pictureResult = mysqli_query($db, $pictureQuery);
    $pictureRow = mysqli_fetch_assoc($pictureResult);
    $picture = $pictureRow['path'];

    $make = $row['make'];
    $model = $row['model'];
    $price = $row['price'];
    $year = $row['year'];
    $engine = $row['engine'];
    $gearbox = $row['gearbox'];
    $color = $row['color'];
    $power = $row['power'];
    $info = substr($row['info'],0,137);
    echo $response = '<div class="section__col">
    <a href="single.php?id=' . $id . '" class="car">
        <div class="car__image">
        <img src="'.$picture.'" alt="car">
        </div>

        <div class="car__price">
            <p><strong>' . number_format($price) . 'лв.</strong></p>
        </div>

        <div class="car__content">
            <h4 class="car__title">' . $make . ' ' . $model . '</h4>

            <span class="car__meta">' . $year . 'г, ' . $engine . ', ' . $gearbox . ', ' . $color . ', ' . $power . ' к.с.</span>

            <p>' . $info . '...</p>
        </div>
    </a>
</div>';

}
mysqli_close($db);


?>