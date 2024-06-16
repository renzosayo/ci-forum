<div class="thread mb-5">
  <h1><?= $thread['title']; ?></h1>
  <p class=""><?= $thread['body']; ?></p>
  <small class="text-muted fst-italic">
    Posted by <?= $thread['username']; ?> on <?= date("F j, Y, g:i a", strtotime($thread['date_posted'])); ?>
  </small>
</div>

<div class="posts">
  <?php if (!count($posts)) : ?>
    <div class="border rounded p-3 mt-3">
      <p>This thread is empty. Be the first to post!</p>
    </div>
    <?php else :
    foreach ($posts as $post) : ?>
      <div class="border border-3 rounded p-3 mt-3">
        <p><strong><?= $post['username']; ?></strong> on <?= date("F j, Y, g:i a", strtotime($post['date_posted'])); ?></p>
        <p><?= $post['body']; ?></p>
      </div>
  <?php endforeach;
  endif; ?>
</div>

<div class="post-form d-none">
  <?php echo form_open(
    'post/create',
    '',
    // temporary poster_id, should come from session
    ['thread_id' => $thread['id'], 'poster_id' => 1]
  );
  ?>
  <div class="form-group">
    <textarea name="body" class="post-body form-control border border-3 rounded p-2 mt-3" placeholder="What's on your mind?..."></textarea>
  </div>
  <input type="submit" value="Post" class="submit-post btn btn-success px-4 mt-2" disabled>
  <button type="button" class="cancel-post btn btn-danger px-4 mt-2">Cancel</button>
  </form>
</div>

<button type="button" class="post-button btn btn-success mt-4">Write a post</button>