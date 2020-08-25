<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function custom_media_media_approval($form_fields, $post)
{
   $field_value = (bool)get_post_meta($post->ID, 'custom_media_media_approval', true);
   $checked = ($field_value) ? 'checked' : '';

   $is_admin = "";

   $user = wp_get_current_user();
   if (in_array('contributor', (array) $user->roles)) {
      $is_admin = "disabled";
   }

   $form_fields['custom_media_media_approval'] = array(
      'label' => __('Admin Approval'),
      'helps' => __('Approved or No Approved, only admin user can change it'),
      'input'  => "html",
      "value" => $field_value,
      "html"=> "<input type='checkbox'$checked $is_admin
    name='attachments[{$post->ID}][custom_media_media_approval]'
    id='attachments[{$post->ID}][custom_media_media_approval]' /> "
   );

   return $form_fields;
}
add_filter('attachment_fields_to_edit', 'custom_media_media_approval', null, 2);

//save your custom media field
function custom_media_save_attachment($post, $attachment)
{
  
   if (isset($attachment['custom_media_media_approval']) && is_admin())  {
      $custom_media_media_approval = ($attachment['custom_media_media_approval'] == 'on') ? '1' : '0';
      update_post_meta($post['ID'], 'custom_media_media_approval', $custom_media_media_approval);
   }
}

add_filter('attachment_fields_to_save', 'custom_media_save_attachment', null, 2);

add_filter('ajax_query_attachments_args', 'wpse_hide_cv_media_overlay_view');
function wpse_hide_cv_media_overlay_view($args)
{
   $user = wp_get_current_user();
   if (in_array('contributor', (array) $user->roles)) {
      $args['meta_query'] = [
         [
            'key'     => 'custom_media_media_approval',
            'compare' => "=",
            'value'   => 1
         ]
      ];
   }

   return $args;
}

