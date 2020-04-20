<?php
    $id = 'vc-image-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'vc-image';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }
    if( $is_preview ) {
        $className .= ' is-admin';
    }

    $upload_image = get_field('upload_image');
    $height = get_field('height');
    $padding_bottom = get_field('padding_bottom');
    $padding_top = get_field('padding_top');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="padding-top: {{$padding_top}}; padding-bottom: {{$padding_bottom}};">
<div class="image">
    <img src="{{ $upload_image }}" alt="image">
</div>
</div>