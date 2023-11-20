<select class="form-select" aria-label="Default select example" name="pelayan">
    <?php foreach ($pelayan as $sp): ?>
        <option value="<?= $sp ?>" <?= ($order['pelayan'] == $sp) ? 'selected' : ''; ?>>
            <?= $sp ?>
        </option>
    <?php endforeach; ?>
</select>