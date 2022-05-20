<?php 
$host = 'ribat_db';
$username = 'ribat';
$pass = 'ribat'; 
$db_name = 'ribat';

$conn = new mysqli($host,$username,$pass,$db_name);
if($conn -> connect_error){
    die("connection failed: ". $conn->connect_error);
} else {
    echo "connection to mysql server succesfully";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>surname</label>
                            <input type="text" name="surname" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

<?php 
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $sql = "INSERT INTO uyeler (ad,soyad) VALUES ('$name','$surname')";
        if (mysqli_query($conn,$sql))
        {
            echo "new record added";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
