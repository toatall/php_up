<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 /* @var $comments frontend\models\Comments[]; */

?>

<form method="post" class="well">
    <p><label for="name">Ваше имя*</label></p>
    <input type="text" name="name" id="name" />
    <br /><br />
    
    <p><label for="email">Ваш email</label></p>
    <input type="text" name="email" id="email" />
    <br /><br />
    
    <p><label for="comment">Ваш коментарий*</label></p>
    <textarea name="comment" id="comment"></textarea>    
    <br /><br />
    
    <input type="submit" />
</form>
<hr />

<div class="well">
    <?php foreach ($comments as $comment):  ?>
    <h3>Author: <?= $comment['name'] ?>, email: <?= $comment['email'] ?></h3>
    <div><?= $comment['comment'] ?></div>
    <hr />
    <?php endforeach; ?>
</div>


