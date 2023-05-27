<?php
$con = mysqli_connect("localhost","root","","apicard");
$response=array();
if($con){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $img_url=$_POST['img_url'];
        $rate=$_POST['rate'];
        $brand=$_POST['brand'];
        $price=$_POST['price'];

        $sql="INSERT INTO card_1(name,img_url,rate,brand,price) VALUES ('$name','$img_url','$rate','$brand','$price')";
        if(mysqli_query($con,$sql)){
            header("HTTP/1.1 201 Created");
            $response['message']="User data created successfully";
        }
        else{
            header("HTTP/1.1 400 Bad Request");
            $response['message']="Unable to create user data";
        }
        echo json_encode($response);
    }
    else {
        echo "Please use a valid HTTP method";
    }
}
else{
    echo "Data connection failed";
}
