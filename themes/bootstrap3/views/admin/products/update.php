<?php
$this->pageTitle = Yii::app()->name . ' - ' . Yii::t('products', 'Products');
$this->breadcrumbs = array(
    Yii::t('products', 'Products'),
    Yii::t('common', 'Update'),
);
?>

<div class="row-fluid">
    <div class="col-md-9"><h1><i class="icon-cog"></i>&nbsp;<?php echo Yii::t('products', 'Products'); ?></h1></div>
    <div class="col-md-2">
        <div class="btn-group">
            <a onclick="$('#product-form').submit();" class="btn btn-primary"><?php echo Yii::t('common', 'Save'); ?></a>
            <a href="<?php echo $this->createUrl('index'); ?>" class="btn btn-danger"><?php echo Yii::t('common', 'Cancel'); ?></a>
        </div>
    </div>
</div>

<br />

<?php $this->renderPartial('_form', array(
    'model'=>$model, 
    'statuses'=>$statuses,
    'taxClasses'=>$taxClasses,
    'yes_no'=>$yes_no,
    'stockStatuses'=>$stockStatuses,
    'weightClasses'=>$weightClasses,
    'lengthClasses'=>$lengthClasses,
)); ?>