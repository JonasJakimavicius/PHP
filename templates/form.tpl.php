<form <?php print html_attr(($form['attr']) + ['method' => 'post']); ?>>

    <?php if (isset ($form['fields'])): ?>
        <div class="input-container">


            <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>


                <?php if (isset($field['extra']['label'])) : ?>
                    <label>
                    <?php print $field['extra']['label']; ?>
                <?php endif; ?>

                <?php if ($field['attr']['type'] === 'select'): ?>
                    <select <?php print html_attr(['name' => $field_id,]); ?>>
                        <?php foreach ($field['extra']['options'] as $select_value_id => $select_value): ?>
                            <option value="<?php print $select_value_id; ?>"><?php print $select_value; ?> </option>
                        <?php endforeach; ?>
                    </select>

                <?php else: ?>

                    <input <?php print html_attr((['name' => $field_id,]) + $field['attr'] ?? []); ?>>
                <?php endif; ?>

                <?php if (isset($field['error'])): ?>
                    <div> <?php print $field['error']; ?></div>
                <?php endif; ?>


                <?php if (isset($field['label'])) : ?>
                    </label>
                <?php endif; ?>


            <?php endforeach; ?>
        </div>
    <?php endif; ?>




    <?php if (isset ($form['buttons'])): ?>
        <div class="buttons-container">

            <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
                <button <?php print html_attr($button); ?> ></button>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>

    <?php print $form['message'] ?? ''; ?>
</form>

