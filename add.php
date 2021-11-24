<form method="POST" id="formAdd">
    <table>
        <tr>
            <td>Full Name</td>
            <td>
                <input type="text" name="fullname" id="fullname" required="" />
            </td>
        </tr>
        <tr>
            <td>Birthdate</td>
            <td>
                <input type="date" name="birthdate" id="birthdate" required="" />
            </td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td>
                <input type="email" name="email" id="email" required=""/>
            </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>
                <input type="tel" name="phone" id="phone" required=""/>
            </td>
        </tr>
        <tr>
            <td>Divison</td>
            <td>
            <select name="division">
                <option value="Speech">Speech</option>
                <option value="Debate">Debate</option>
                <option value="Scrabble">Scrabble</option>
                <option value="News Casting">News Casting</option>
                <option value="Story Telling">Story Telling</option>
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