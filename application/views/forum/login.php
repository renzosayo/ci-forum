<?php

if (isset($_SESSION['username'])) {
  header('Location: /');
}

?>

<h1>CodeIgniter Forum</h1>

<?php echo form_open('login'); ?>
<?php echo validation_errors(); ?>
<div class="form-group">
  <label for="username" class="form-label">Username</label>
  <input type="text" name="username" id="username" class="form-control">
</div>
<div class="form-group">
  <label for="password" class="form-label">Password</label>
  <input type="password" name="password" id="password" class="form-control">
</div>
<input type="submit" value="Log In" class="form-control btn btn-primary mt-3">
</form>