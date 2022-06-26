<label class="form-field form-field__select">
    <span class="field-label"><?php echo $label ?></span>
    <span class="form-field__wrapper">
        <select
                name="<?php echo $name ?>"
                <?php echo $required ? 'required' : '' ?>
        >
            <option data-placeholder="true" data-placeholderText="<?php echo $placeholder ?>"></option>
            <?php foreach ($options as $option) { ?>
                <option value="<?php echo $option->value ?>"><?php echo $option->title ?></option>
            <?php } ?>
        </select>
    </span>
</label>