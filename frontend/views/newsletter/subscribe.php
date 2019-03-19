<?php
    /**
     * @var $model frontend\models\Subsribe
     */
?>

<?php
     if ($model->hasErrors())
     {
         
     }
?>

<form method="post">
    <p>Email:</p>
    <input type="text" name="email" />
    <br /><br />
    <input type="submit" />
</form>