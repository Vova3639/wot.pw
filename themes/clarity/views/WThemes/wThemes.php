<div class="modul themes-mini">
	<div class="title">
		<h3><?=CHtml::encode($this->title)?></h3>
	</div>
	<div class="cell">
		<?php if($this->beginCache('forum-mini-'.Yii::app()->controller->site->id, array('duration'=>3600*24, 'dependency'=>array(
			'class'=>'system.caching.dependencies.CExpressionDependency',
			'expression'=>'Yii::app()->cache->get("forum:'.Yii::app()->controller->site->id.'")',
		)))) { ?>
		<?php $this->widget('zii.widgets.CListView', array(
			'cssFile'=>false,
			'dataProvider'=>$themes,
			'itemView'=>'wThemesOne',
			'summaryText'=>false,
			'emptyText'=>Yii::t('wot', 'Активных тем нет'),
			'pager'=>array(
				'cssFile'=>false,
				'header'=>false,
			),
		)); ?>
		<?php $this->endCache(); } ?>
	</div>
</div>
