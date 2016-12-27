<?php
/* @var $this yii\web\View */

use app\models\Address;
use app\models\Person;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?>

<h1>Mytest</h1>

<p>
    TestMy
</p>
<br>
<div>
<?= Html::button('Нажми меня!', ['class' => 'mywidget']) ?>

<?= Html::submitButton('Отправить', ['class' => 'mywidget']) ?>

<?= Html::resetButton('Сбросить', ['class' => 'mywidget']) ?>
</div>
<br>
<table border="0" cellpadding="5" cellspacing="5" align="center" width="100%">
 <tr>
  <td colspan="2">
<?php
### conv. model(Address)-> array;
$addresses = Address::find()->limit(10)->all();
$data = ArrayHelper::toArray($addresses, [
    'app\models\Address' => [
        'id',
        'city',
       'street',
    ],
]);
 foreach ($data as $dat) {
 echo '<table border=\'0\' width=\'100%\' class=\'mywidget\'><tr>';
 echo '<td>'.$dat['id'].'</td><td>'.$dat['city'].'</td><td>'.$dat['street'].'</td>';
 echo '</tr></table>';
}

?>
  </td>
  <td>
<?php
### conv. model(Person)-> array;
$persons = Person::find()->limit(10)->all();
$data = ArrayHelper::toArray($persons, [
    'app\models\Person' => [
        'name',
        'age',
       'date',
    ],
]);
 foreach ($data as $dat) {
 echo '<table border=\'0\' width=\'100%\' class=\'mywidget\'><tr>';
 echo '<td>'.$dat['name'].'</td><td>'.$dat['age'].'</td><td>'.$dat['date'].'</td>';
 echo '</tr></table>';
}

?>
  </td>
 </tr>
</table>