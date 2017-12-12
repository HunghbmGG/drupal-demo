<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
 // dpm($row->field_field_badges[0]['raw']['uri']);
 $featured_image_avatar = file_create_url($row->field_field_avatar[0]['rendered']['#item']['uri']);
 $featured_image_logo = file_create_url($row->field_field_image_1[0]['raw']['uri']);
  $featured_badges_logo = file_create_url($row->field_field_badges[0]['raw']['uri']);
// var_dump($field->class);
?>

<div class="wrap-small-athletes">
  <img class="img-ava-athletes" src="<?php print $featured_image_avatar;?>"/>
  <div class="wrap-body-athletes">
    <div class="name-athletes">
      <?php print $fields['title']->raw;?>
    </div>
    <div class="location-athletes">
      <?php print $fields['field_location']->content; ?>
    </div>
    <div class="wrap-premium-athletes">
      <img class="img-logo-athletes" src="<?php print $featured_image_logo;?>"/>
      <span class="premium-athletes"><?php print $row->field_field_premium[0]['raw']['value']; ?></span>
    </div>
    <div class="football-athletes">
      <label>Football
      </label>
      <p class="text-team-football">Quarterback
      </p>
    </div>
    <div class="football-athletes">
      <label>Team
      </label>
      <p class="text-team"><?php print $row->field_field_team[0]['raw']['value']; ?>
      </p>
    </div>
    <div class="badges-athletes">
      <label>Badges
      </label>
      <img class="img-badges-athletes" src="<?php print $featured_badges_logo;?>"/>
    </div>
 </div>
 <div class="count-athletes">
     <span class="count-athletes-int">567
     </span>
     <span class="profile-view-athletes">
       PROFILE VIEWS
       <span>
 </div>
</div>

<!-- <?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
  <?php print $field->wrapper_suffix; ?>
<?php endforeach; ?> -->
