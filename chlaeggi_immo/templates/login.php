<?php echo "\n\n"; ?>
<div id="Inhalt">

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <form name="login" method="post" action="index.php?view=check_login">
      <td>
        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
          <tr>
            <td colspan="3"><strong>Login </strong></td>
          </tr>
          <tr>
            <td width="78">Benutzername</td>
            <td width="6">:</td>
            <td width="294"><input name="myusername" type="text" id="myusername"></td>
          </tr>
          <tr>
            <td>Passwort</td>
            <td>:</td>
            <td><input name="mypassword" type="password" id="mypassword"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Login"></td>
          </tr>
        </table>
      </td>
    </form>
  </tr>
</table>

</div>
