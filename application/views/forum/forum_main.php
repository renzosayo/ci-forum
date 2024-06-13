<h1>Welcome to the Forum!</h1>
<p>Keep it clean and civilized!</p>
<a href="create" class="btn btn-primary mt-4">Create thread</a>
<?php foreach ($result as $thread) : ?>
  <div class="mt-4 p-3 border border-5 rounded">
    <h4><?= $thread['title']; ?></h4>
    <small><?php $date = strtotime($thread['date_posted']);
            echo date("F j, Y, g:i a", $date); ?></small>
  </div>
<?php endforeach; ?>