<?php
 include "connect.php";
 $num=$_GET['num'];
 $query=mysqli_query($koneksi, "SELECT * FROM member WHERE num='$num'") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>Full Name</td>
                <td>
                    <input type="hidden" name="num" id="num" required="" value="<?php echo $result['num']; ?>" />
                    <input type="text" name="fullname" id="fullname" required="" value="<?php echo $result['fullname']; ?>" />
                </td>
            </tr>    
            <tr>
                <td>Birthdate</td>
                <td>
                    <input type="date" name="birthdate" id="birthdate" required="" value="<?php echo $result['birthdate']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td>
                    <input type="email" name="email" id="email" required="" value="<?php echo $result['email']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>
                    <input type="tel" name="phone" id="phone" required="" value="<?php echo $result['phone']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Division</td>
                <td>
                    <select name="division" id="division" required="">
                        <option disabled="" selected="">-Choose-</option>
                        <option value="Speech" <?php if($result['division']=="Speech") echo "selected"; ?>>Speech</option>
                        <option value="Debate" <?php if($result['division']=="Debate") echo "selected"; ?>>Debate</option>
                        <option value="Scrabble" <?php if($result['division']=="Scrabble") echo "selected"; ?>>Scrabble</option>
                        <option value="News Casting" <?php if($result['division']=="News Casting") echo "selected"; ?>>News Casting</option>
                        <option value="Story Telling" <?php if($result['division']=="Story Telling") echo "selected"; ?>>Story Telling</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" id="save" value="Save" />
                    <button id="cancelButton" name="cancelButton" type="button" onclick="window.location.href='index.php'">Cancel</button>
                </td>
            </tr>
        </table>
    </form>