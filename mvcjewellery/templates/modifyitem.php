<?php ob_start(); ?>

<div class="container">

<div class="row">

<form method="POST" action="index.php?action=modifyItem&id=<?= $item->id ?>" enctype="multipart/form-data">
    <div class="mb-3 chmp">
        <label for="nomproduit" class="form-label label-f">Nom</label>
        <input type="text" class="form-control" id="nomproduit" name="name" value="<?= $item->name?>" required>
    </div>
    <div class="mb-3 chmp">
      <label for="picproduit" class="form-label label-f">Photo</label>
      <input class="form-control" type="file" id="picproduit" name="pic">
    </div>
    <div class="mb-3 chmp">
        <label for="quantiteproduit" class="form-label label-f">Quantité</label>
        <input type="nombre" class="form-control" id="quantiteproduit" name="quantity" value="<?= $item->quantity?>" required>
    </div>
    <div class="mb-3 chmp">
        <label for="prixproduit" class="form-label label-f">Prix</label>
        <input type="nombre" class="form-control" id="prixproduit" name="price" value="<?= $item->price?>" required>
    </div>

    <div class="mb-3 chmp">
        <label for="descriptionitem" class="form-label label-f">Description</label>
        <textarea name="description" id="descriptionitem" cols="30" rows="4"><?= $item->description?></textarea>
    </div>

    <div class="mb-3">
        <label for="categorie" class="form-label label-f">Categorie</label>
        <select class="form-select mb-3" aria-label="Default select example" name="idCategory" id="categorieproduit" required>
               <option value="<?= $category->id?>"><?= $category->name?></option>
               <?php
                   foreach($categories as $category){
               ?>
               <option  value="<?=$category->id;?>"><?=$category->name; ?></option>
             <?php
                }
              ?>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary" id="submitbtn" >Ajouter</button>
</form>


</div>

</div>


<?php $content = ob_get_clean(); ?>


<?php require('layout.php') ?>



