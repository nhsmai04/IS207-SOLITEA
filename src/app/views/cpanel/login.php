<form autocomplete="off" action="<?php echo BASE_URL ?>/login/authentication_login" method="POST">
    <table>
        <tr>
            <td>
                UserName
            </td>
            <td>
                <input type="text" name="username">
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
                <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="login" value="login"></td>
        </tr>
    </table>
</form>