<?php
$dbHost ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "koli_bd";

$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if($db->connect_error){
    die("Connection failed:".$db->connect_error);
}
else{
    if (isset($_POST['submit-add'])) {
        // File upload handling
        $targetDirectory = "images/";
        $targetFile = $targetDirectory . basename($_FILES["images"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["images"]["tmp_name"], $targetFile)) {
            $image = $targetFile;
            $make = $_POST['make-add'];
            $model = $_POST['model-add'];
            $chassis = $_POST['chassis-add'];
            $engine = $_POST['engine-add'];
            $color = $_POST['color-add'];
            $mileage = $_POST['mileage-add'];
            $price = $_POST['price-add'];
            $gearbox = $_POST['gearbox-add'];
            $horsepower = $_POST['power-add'];
            $year = $_POST['year-add'];
            $info = $_POST['info-add'];
            $date = date('Y/m/d H:i:s');

            
            $query = "INSERT INTO koli ( make, model, chassis, engine, color, mileage, price, gearbox, power, year, info, date) 
                      VALUES ('$make', '$model', '$chassis', '$engine', '$color', '$mileage', '$price', '$gearbox', '$horsepower', '$year', '$info', '$date')";
            if ($db->query($query) === true) {
                $carId = $db->insert_id; 

                echo "Car details added successfully.";

                
                $pictureQuery = "INSERT INTO picture (car_id, name, path) VALUES ('$carId', '" . basename($image) . "', '$image')";
                if ($db->query($pictureQuery) === true) {
                    echo "Image linked successfully.";
                } else {
                    echo "Error linking the image: " . $db->error;
                }
            } else {
                echo "Error inserting car details: " . $db->error;
            }
        } else {
            echo "Error uploading the file.";
        }
    }
}
header("Location: add.php");


?>