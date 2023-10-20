<?php require(dirname(__DIR__).'/header.html')?>
<form action = "/frame/Project/www/article/update/<?=$article->getId();?>" method="post">
<div class="form-group">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?=$article->getTitle();?>">
  </div>
  <div class="form-group">
    <label for="text" class="form-label">Text</label>
    <input type="text" class="form-control" id="text" name="text" value="<?=$article->getText();?>">
  </div>
  <div class="form-group">
    <label for="author" class="form-label">Author</label>
    <select class="form-control" name="author" id="author">
    <option value="<?=$article->getAuthorId()->getId();?>"><?=$article->getAuthorId()->getName();?></option>

      <?php foreach($users as $user):?>
        <!-- <?php var_dump($users);?> -->
        <option value="<?=$user->getId();?>"><?=$user->getName();?></option>
      <?php endforeach;?>
    </select>
</div>
      </br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php require(dirname(__DIR__).'/footer.html')?>