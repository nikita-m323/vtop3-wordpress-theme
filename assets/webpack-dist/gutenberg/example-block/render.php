<?php

use Timber\Timber;
use App\UnsplashSlider\UnsplashSlider;

$context['wrapper_attr'] = get_block_wrapper_attributes(
    [
        'id' => (array_key_exists('anchor', $block) && $block['anchor']) ? $block['anchor'] : null, // Allow for id to pass-through
        'class' => 'unsplash-slider',
        'style' => '',
    ]
);
$fields = get_fields();
$context['fields'] = $fields;

