<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Listado paginado';
?>
<div class="row">

<?= ListView::widget([
    'dataProvider' => $data,
    'itemView' => '_paginas',
]);
?>
</div>
