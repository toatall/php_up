<?php
    /**
     * @var $model frontend\models\OrderWindow
     */
?>
Ordered window
<table>
    <tr>       
        <th>Full name</th>
        <th>Email</th>
        <th>Width</th>
        <th>Height</th>
        <th>Count cell</th>
        <th>Count sash</th>
        <th>Count turning</th>
        <th>Color</th>
        <th>Sill</th>
    </tr>
    <tr>        
        <td><?= $model->full_name ?></td>
        <td><?= $model->email ?></td>
        <td><?= $model->width ?></td>
        <td><?= $model->height ?></td>
        <td><?= $model->count_cell ?></td>
        <td><?= $model->count_sash ?></td>
        <td><?= $model->count_turning ?></td>
        <td><?= $model->color ?></td>
        <td><?= $model->sill ?></td>
    </tr>
</table>
    


