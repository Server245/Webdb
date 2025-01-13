
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
</head>
<center>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">      
    <div class=" h4 text-center  alert alert-success mb-4 mt-4  " role="alert"></div> 
    <form method="POST" action="show_member.php">
    <table width="301" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="30" colspan="2" bgcolor="#00CC99"><center>
          <label>แก้ไขข้อมูลสินค้า</label></td>
      </tr>
      <tr>
        <td width="157" height="40">ชื่อสินค้า:</td>
        <td width="144"><input type="text" name="id_name" class="form-control" ></td>
      </tr>
      <tr>
        <td height="32"><label>ราคา:</label></td>
        <td><input type="text" name="fname" class="form-control"  ></td>
      </tr>
      <tr>
        <td height="34">รายละเอียดสินค้า:</td>
        <td><input type="text" name="lname" class="form-control"  ></td>
      </tr>
    </table><br>
    <input type="submit" value="update" class="btn btn-success" > 
    <a href="show_member.php"  class="btn btn-danger">Cancel</a>
</form>  

</div>
</div>

</div>
</body>
</html>