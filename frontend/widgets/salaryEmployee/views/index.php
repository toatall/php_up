<h2>Top slary employee</h2>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Full name</th>
        <th>Salary</th>
    </tr>
    <?php foreach ($model as $item): ?>
    <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['fio'] ?></td>
        <td>$<?= $item['salary'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>