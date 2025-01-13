
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>

</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">      
    <div class=" h4 text-center  alert alert-success mb-4 mt-4  " role="alert"> เพิ่มข้อมูลสมาชิก </div> 
    <form method="POST" action="insert_member.php">
    <label>ชื่อสินค้า:</label>
    <input type="text" name="fname" class="form-control" placeholder="...ชื่อ"  required > <br>
    <label>ราคา:</label>
    <input type="text" name="lname" class="form-control" placeholder="...นามสกุล"  required > <br>
    <label>รายละเอียดสินค้า:</label>
    <input type="number" name="telephone" class="form-control" placeholder="...เบอร์โทรศัพท์" required > <br>
    <input type="submit" value="submit" class="btn btn-success" > 
    <a href="show_member.php"  class="btn btn-danger">Cancel</a>
    <div class="container">
      <div class=" h4 text-center  alert alert-success mb-4 mt-4  " role="alert"></div>
      <table class="table table-striped">
        <tr>
          <th>รหัส</th>
          <th>ชื่อสินค้า</th>
          <th>ราคาสินค้า</th>
          <th>รายละเอียดสินค้า</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php
$sql = "SELECT * FROM member";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){    
?>
        <tr>
          <td><?=$row["id"]?></td>
          <td><?=$row["name"]?></td>
          <td><?=$row["telephone"]?></td>
          <td><?=$row["surname"]?></td>
          <td><a href="edit_member.php"  class="btn btn-warning">Edit</a></td>
          <td><a href="delete_member.php?id=<?=$row["id"]?>" class="btn btn-danger"  onclick="Del(this.href);return false;">Delete</a></td>
        </tr>
        <?php
}
mysqli_close($conn);  //ปิดการเชื่อมต่อฐานข้อมูล
?>
      </table>
    </div>
    </form>  

</div>
</div>

</div>
</body>
</html>