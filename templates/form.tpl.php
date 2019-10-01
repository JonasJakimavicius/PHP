<!--prasideda  form tago atributu generavimas-->
<form <?php print html_attr(($form['attr']) + ['method' => 'post']); ?>>
    <!--pbaigiasi form tago atributu generavimas-->

    <!--    prasideda imputu atributu generavimas-->
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>

        <!--prasideda labeliu spausdinimas, jei jie yra nustatyti mmasyve-->
        <?php if (isset($field['label'])) : ?>
            <label>
            <?php print $field['label']; ?>
        <?php endif; ?>
        <!--baigiasi labeliu spausdinimas, jei jie yra nustatyti mmasyve-->

        <!--išspausdinam inputus su jiems nustatytais atributais-->
        <input <?php print html_attr(['type' => $field['type'], 'name' => $field_id, 'placeholder' => $field['placeholder']]); ?>>
        <!--    išspausdinam errora, jei jis yra nurodytas masyve-->
        <div> <?php print $field['error'] ?? ''; ?> </div>

        <!--    Patikrinam ar label yra setintas-->
        <?php if (isset($field['label'])) : ?>
            </label>
        <?php endif; ?>
        <!--    Baigiam patikrina ar label yra setintas-->

    <?php endforeach; ?>
    <!--    Baigiasi imputu atributu generavimas-->

    <!--    Prasideda mygtukų atributu generavimas-->
    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
        <button <?php print html_attr($button); ?> ></button>
    <?php endforeach; ?>
    <!--    Baigiasi mygtukų atributu generavimas-->
</form>

