<h3>Create a new thread</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('thread/create'); ?>
<div class="form-group mt-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" name="title" id="title" class="form-control">
</div>
<div class="form-group mt-3">
  <label for="body" class="form-label">Body</label>
  <textarea name="body" id="body" class="form-control"></textarea>
</div>
<input type="submit" value="Submit" class="form-control btn btn-primary mt-4" />
</form>