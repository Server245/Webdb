<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Information</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            padding: 5px 10px;
            margin: 2px;
        }
        .edit-btn {
            background-color: #ffc107;
            border: none;
            color: white;
            cursor: pointer;
        }
        .delete-btn {
            background-color: #dc3545;
            border: none;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>แสดงข้อมูลสมาชิก</h2>
    <button onclick="addMember()">Add+</button>
    <table>
        <thead>
            <tr>
                <th>รหัส</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เบอร์โทรศัพท์</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="memberTable">
            <tr>
                <td>000001</td>
                <td>ไทยเเลนด์</td>
                <td>เรียนดี</td>
                <td>818458122</td>
                <td><button class="edit-btn" onclick="editMember('000001')">Edit</button></td>
                <td><button class="delete-btn" onclick="deleteMember('000001')">Delete</button></td>
            </tr>
            <tr>
                <td>000004</td>
                <td>ปุณนะจ๊ะ</td>
                <td>เอิ้นไงค้าบบบ</td>
                <td>3845712</td>
                <td><button class="edit-btn" onclick="editMember('000004')">Edit</button></td>
                <td><button class="delete-btn" onclick="deleteMember('000004')">Delete</button></td>
            </tr>
        </tbody>
    </table>

    <script>
        function addMember() {
            // Function to handle adding a new member
            // You would need to implement this function to handle adding a new member
            alert('Add member functionality is not yet implemented.');
        }

        function editMember(id) {
            // Function to handle editing a member
            // You would need to implement this function to handle editing a member
            alert('Edit member with ID: ' + id);
        }

        function deleteMember(id) {
            // Function to handle deleting a member
            // You would need to implement this function to handle deleting a member
            if (confirm('Are you sure you want to delete member with ID: ' + id + '?')) {
                alert('Delete member with ID: ' + id);
            }
        }
    </script>
</body>
</html>
