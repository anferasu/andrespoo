  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="<?= yii::getAlias("@web")?>/imgs/<?= random_int(1,46)?>.png" alt="alternativo">
        <?php $imgs=random_int(1,46)?>
        <?= yii\helpers\Html::img("@web/imgs/$imgs.png",['alt'=>"alternativo"]) ?>
      <div class="caption">
        <h3 class='regla1'><?= $model ->id ?></h3>
        <p><?= $model ->nombre ?></p>
        <p><?= $model ->apellidos ?></p>
        <p><?= $model ->edad ?></p>
       </div>
    </div>
  </div>
