
<?Php
$con = mysqli_connect("localhost","root","","apicard");
$response=array();
if($con){
    if($_SERVER['REQUEST_METHOD']=='GET'){
        $name=$_GET['name'];
        $img_url=$_GET['img_url'];
        $rate=$_GET['rate'];
        $brand=$_GET['brand'];
        $price=$_GET['price'];
    
        $sql="INSERT INTO card_1 (name,img_url,rate,brand,price) VALUES ('$name','$img_url','$rate','$brand','$price')";
        echo $sql;
        $result=mysqli_query($con,$sql);    
        if($result && mysqli_affected_rows($con) >0){
            header("HTTP/1.1 201 Created");
            $response['message']="User data created successfully";
        }
        else{
            header("HTTP/1.1 400 Bad Request");
            $response['message']="Unable to create user data";
        }
    }
   
}mysqli_close($con);

?>