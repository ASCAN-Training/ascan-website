<label class="form-field form-field__input">
    <span class="field-label"><?php echo $label ?></span>
    <span class="form-field__wrapper">
        <input
                type="<?php echo $type ?>"
                name="<?php echo $name ?>"
        <?php echo $required ? 'required' : '' ?>
           placeholder="<?php echo $placeholder ?>">
    </span>
</label>