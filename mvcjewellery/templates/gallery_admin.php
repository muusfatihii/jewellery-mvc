<?php ob_start(); ?>


<form method="GET" action="index.php?action=filter" class="selection-all" >
<select class="form-select mb-3" aria-label="Default select example" name="categoryid">
      <option selected value="-1">all</option>
      <?php
      foreach($categories as $category){
      ?>
      <option  value="<?=$category->id;?>"><?=$category->name; ?></option>
      <?php
      }
      ?>
</select>
<button type="submit" class="btn btn-primary">Filtrer</button>
</form>


<div class="carte">
  <?php
   foreach ($items as $item) {
   ?>

   <div class="card card2 col-md-5 col-lg-3 col-sm-10" style="width: 18rem;">
    <img src="uploads/<?=$item->pic?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?=$item->name?></h5>
      <h4><?=$item->price?> $</h4>
      <h4>Qté: <?=$item->quantite?></h4>

      <a href="index.php?action=deleteItem&id=<?=$item->id?>" class="btn btn-light">supprimer</a>
      <a href="index.php?action=modifyItem&id=<?=$item->id?>" class="btn btn-light">modifier</a>
      <a href="index.php?action=item&id=<?=$item->id?>" class="btn btn-light">plus d'infos</a>
    </div>
   </div>
    <?php
   }?>
</div>



<?php $content = ob_get_clean(); ?>


<?php require('layout.php') ?>