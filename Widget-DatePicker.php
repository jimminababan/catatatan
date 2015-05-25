<?php
DatePicker::widget([
               'model' => $model,
               'attribute' => 'dob',
               'language' => 'en',
               'dateFormat' => 'yyyy-MM-dd',
           ])


// kalau di form 
<?= $form->field($model, 'dob')->textInput([DatePicker::widget([
               'model' => $model,
               'attribute' => 'dob',
               'language' => 'en',
               'dateFormat' => 'yyyy-MM-dd',
           ])]) ?>


?>           
