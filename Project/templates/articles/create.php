<?php require(dirname(__DIR__).'/header.html')?>
<form action = "/frame/Project/www/article/store" method="post">
<div class="form-group">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="text" class="form-label">Text</label>
    <input type="text" class="form-control" id="text" name="text">
  </div>
  <div class="form-group">
    <label for="author" class="form-label">Author</label>
    <select class="form-control" name="author" id="author">
      <?php foreach($users as $user):?>
        <option value="<?=$user->getId();?>"><?=$user->getName();?></option>
      <?php endforeach;?>
    </select>
</div>
      </br>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php require(dirname(__DIR__).'/footer.html')?>