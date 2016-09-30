<h1>Login</h1>
<?= form_open('sessions/create'); ?>
  <label>Email:</label>
  <input type="text" name="email" value="<?= set_value('email'); ?>"/><br>
  <label>Password:</label>
  <input type="password" name="password" /><br>
  <input type="submit" value="Login">
</form>
