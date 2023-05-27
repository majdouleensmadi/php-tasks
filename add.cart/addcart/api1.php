<?php

$con = mysqli_connect("localhost","root","","apicard");
$response=array();
if($con){
    $sql="select * from card_1";
    $result=mysqli_query($con,$sql);
    if($result){
        $i=0;
        while($row=mysqli_fetch_assoc($result)){
            $response[$i]['id']=$row['id'];
            $response[$i]['name']=$row['name'];
            $response[$i]['img_url']=$row['img_url'];
            $response[$i]['rate']=$row['rate'];
            $response[$i]['brand']=$row['brand'];
            $response[$i]['price']=$row['price'];
            $i++;

        }

    echo json_encode($response,JSON_PRETTY_PRINT);
}
}
else{
    echo "data connection field";
}


?>