<button id="addButton" class="btn btn-primary">Add Data</button>
<br>
<br>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Full Name</th>
            <th>Birth Date</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Division</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "connect.php";
   $no=1;
   $query=mysqli_query($koneksi, "SELECT * FROM member ORDER BY num DESC") or die(mysqli_error($koneksi));
   while ($result=mysqli_fetch_array($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['fullname']; ?>
                </td>
                <td>
                    <?php echo $result['birthdate']; ?>
                </td>
                <td>
                    <?php echo $result['email']; ?>
                </td>
                <td>
                    <?php echo $result['phone']; ?>
                </td>
                <td>
                    <?php echo $result['division']; ?>
                </td>
                <td>
                    <button id="EditButton" value="<?php echo $result['num']; ?>">Edit</button>
                    <button id="DeleteButton" value="<?php echo $result['num']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
    </tbody>
</table>