<html>
  <body>
    <h1>Register New User</h1>
    <?= $form_errors ?>
    <?= form_open('registrations/create'); ?>
      <label>Email:</label>
      <input type="text" name="email" value="<?= set_value('email'); ?>"/><br>
      <label>Password:</label>
      <input type="password" name="password" /><br>
      <label>Password Confirmation:</label>
      <input type="password" name="password_confirmation" /><br>
      <label>Fullname</label>
      <input type="text" name="fullname" /><br>
      <label>Phone</label>
      <input type="text" name="phone" /><br>
      <input type="submit" value="Register">
    </form>
  </body>
</html>
