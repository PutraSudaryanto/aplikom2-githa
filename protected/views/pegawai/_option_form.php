<?php
/**
 * Pegawais (pegawai)
 * @var $this PegawaiController
 * @var $model Pegawai
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (ommu.co)
 * @created date 21 February 2017, 14:06 WIB
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */
?>

<?php echo CHtml::beginForm(Yii::app()->createUrl($this->route), 'get', array(
	'name' => 'gridoption',
));
$columns   = array();
$exception = array('id');
foreach($model->metaData->columns as $key => $val) {
	if(!in_array($key, $exception)) {
		$columns[$key] = $key;
	}
}
?>
<ul>
	<?php foreach($columns as $val): ?>
	<li>
		<?php echo CHtml::checkBox('GridColumn['.$val.']'); ?>
		<?php echo CHtml::label($val, 'GridColumn_'.$val); ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php echo CHtml::endForm(); ?>
