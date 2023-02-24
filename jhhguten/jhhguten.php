/**
 * Plugin Name: JHH Gutenberg Blocks
 * Author: JHH
 * Description: This plugin allows users to add a WordPress Gutenberg custom template for the Gutenberg editor
 * Version: 1.0.0
 */
 
add_action( 'init', function() {
    $args = array(
        'public' => true,
        'label'  => 'Diagnostic Codes',
        'show_in_rest' => true,
        'template_lock' => 'all',
        'template' => array(
            array( 'core/heading', array( 'level' => '2', 'content' => 'Heading' ) ),
            array( 'core/paragraph' ),
        )
        'template' => array(
            array( 'core/paragraph', array(
                'placeholder' => 'DC Number | Condition',
            ) ),
            array( 'core/image', array(
                'align' => 'center',
            ) ),
        ),
        
        
    );
    
    register_post_type( 'news', $args );
} );