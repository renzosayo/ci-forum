<div class="">
  <h1>Welcome to the Forum!</h1>
  <p>Keep it clean and civilized!</p>
</div>


<a href="create" class="btn btn-primary mt-4">Create thread</a>
<?php foreach ($result as $thread) : ?>
  <div class="mt-4">
    <h4 class="d-inline h5"><a href="view/<?= $thread['id']; ?>"><?= $thread['title']; ?></a></h4>
    <p class="d-inline">by <?= $thread['username']; ?></p>
    <small class="d-inline">on <?php $date = strtotime($thread['date_posted']);
                                echo date("F j, Y", $date); ?></small>
  </div>
<?php endforeach; ?>