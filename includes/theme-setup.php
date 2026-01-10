<?php
function ravera_remove_heading_levels($args, $block_type)
{
    if ($block_type !== 'core/heading') {
        return $args;
    }
    	
	# Définir les niveaux de titres disponibles
    $args['attributes']['levelOptions']['default'] = [1, 2, 3];

    return $args;
}
add_action('register_block_type_args', 'ravera_remove_heading_levels', 10, 2);