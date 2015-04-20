<div class="panel panel-primary">
		      <div class="panel-heading">
		        <h3 class="panel-title" id="panel-title">Judul Client<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
		      </div>
		      <div class="panel-body">
				<?php 
				
				$form = ActiveForm::begin();
				
				echo $form->field($model, 'post_title')->textInput(['maxlength'=>200]);
				echo Html::submitButton('Simpan Judul',['class'=>'btn btn-primary']);
				
				ActiveForm::end();
				
				?>
		      </div>
    	</div>
