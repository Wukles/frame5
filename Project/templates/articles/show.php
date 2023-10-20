<?php require(dirname(__DIR__).'/header.html')?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$article->getTitle();?></h5>
    <p class="card-text"><?=$article->getText();?></p>
    <h5 class="card-title"><?=$user->getName();?></h5>
    <a href="/frame/Project/www/article/edit/<?=$article->getId();?>" class="card-link">Update Articlek</a>
    <a href="/frame/Project/www/article/delete/<?=$article->getId();?>" class="card-link">Delete Article</a>
  </div>
</div>
<?php require(dirname(__DIR__).'/footer.html')?>