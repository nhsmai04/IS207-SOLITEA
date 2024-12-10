<form autocomplete="off" action="<?php echo BASE_URL ?>/login/authentication_login" method="POST">
    <?php
    if (isset($msg['msg'])) {
        echo $msg['msg'];
    }
    ?>
    <table>
        <tr>
            <td>
                UserName
            </td>
            <td>
                <input type="text" name="username" autocomplete="current-username" required>
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
                <input type="password" name="password" autocomplete="current-password" required>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="login" value="login"></td>
        </tr>
    </table>
</form>