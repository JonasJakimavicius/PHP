<?php if (isset($form) && !empty($form)): ?>
    <form <?php print html_attr(($form['attr'] ?? []) + ['method' => 'POST']); ?>>

        <?php if (isset($form['title'])): ?>
            <h1><?php print $form['title']; ?></h1>
        <?php endif; ?>

        <!-- Field Generation Start -->
        <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
            <div ="input-row">

            <?php if (isset($field['label'])): ?>
                <label><span><?php print $field['label']; ?></span>
            <?php endif; ?>

            <?php if ($field['type'] === 'select'): ?>
                <select <?php print html_attr(['name' => $field_id]); ?>>
                    <?php foreach ($field['options'] as $option_id => $option): ?>
                        <option value="<?php print $option_id; ?>" <?php print ($field['attr']['value'] ?? null) === $option_id ? 'selected' : ''; ?>>
                            <?php print $option; ?>
                        </option>
                    <?php endforeach; ?>
                </select>

            <?php else: ?>

                <input <?php print html_attr((['name' => $field_id, 'type' => $field['type'], 'value' => $field['value'] ?? '']) + ($field['extras']['attr'] ?? [])); ?>>
            <?php endif; ?>

            <?php if (isset($field['error'])): ?>
                <span><?php print $field['error']; ?></span>
            <?php endif; ?>

            <?php if (isset($field['label'])): ?>
                </label>
            <?php endif; ?>

            </div>
        <?php endforeach; ?>
        <!-- Field Generation End -->

        <!-- Button Generation Start -->
        <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
            <input <?php print html_attr(['name' => $button_id] + $button); ?>>
        <?php endforeach; ?>
        <!-- Button Generation End -->

        <!-- Message Generation Start -->
        <?php if (isset($form['message'])): ?>
            <div><?php print $form['message']; ?></div>
        <?php endif; ?>
        <!-- Message Generation End -->
    </form>
<?php endif; ?>