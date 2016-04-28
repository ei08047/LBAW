{include file='common/header.tpl'}

<section id="register">
  <h2>Register</h2>

  <form action="{$BASE_URL}actions/users/registo.php" method="post" enctype="multipart/form-data">
    <label>Name:<br>
      <input type="text" name="email" value="{$FORM_VALUES.email}">
      <span class="field_error">{$FIELD_ERRORS.username}</span>
    </label>
    <br>
    <label>password:<br>
       <input type="password" name="password" value="{$FORM_VALUES.password}">
    </label>
    <br>
    <label>dob:<br>
      <input type="text" name="dob" value="{$FORM_VALUES.dob}">
    </label>
    <br>

    <input type="submit" value="Register">
  </form>

</section>

{include file='common/footer.tpl'}
