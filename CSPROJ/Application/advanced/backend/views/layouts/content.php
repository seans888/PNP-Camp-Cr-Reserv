<?php
use yii\widgets\Breadcrumbs;
?>
<div class = "content-wrapper">
	<!-- Content Header (Page Header) -->
	<section class = "content-header">
		<h1>
			<?= $this->title?>
			<!-- small>Description</small -->
		</h1>
		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params ['breadcrumbs'] : [], 
		]) ?>
	</section>

	<!-- Main Content -->
	<section class = "content">
		<?= $content ?>
	</section>
</div>