<?php
if(isset($_POST['go'])){
  $url = $_POST['url'];
  header("Location: $url");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Engine</title>
</head>
<body>
  <form method="POST">
    <input type="text" name="url" placeholder="Enter URL">
    <button type="submit" name="go">Go</button>
  </form>
</body>
</html>
