<?php if ($model->success) {
	$headers[] = 'Location: /somewhere-else'; 
	return;
} ?>
<?php if (!empty($model->violations)): ?>
    <ul>
        <?php foreach ($model->violations as $violation): ?>
            <li><?= htmlspecialchars($violation) ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>
<form action="/new" method="post">
    <label>Field 1 <input name="field1" value="<?= isset($model->entity) ? htmlspecialchars($model->entity['field1']) : '' ?>"></label>
    <label>Field 2 <input name="field2" value="<?= isset($model->entity) ? htmlspecialchars($model->entity['field2']) : '' ?>"></label>
    <input type="submit">
</form>