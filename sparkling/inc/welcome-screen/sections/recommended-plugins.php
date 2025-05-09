<?php
/**
 * Recommended Plugins
 */
global $sparkling_required_actions, $sparkling_recommended_plugins;

// Initialize the Sparkling_Welcome class
$sparkling_welcome = new Sparkling_Welcome();

// Get the required functions from the class
$call_plugin_api = array($sparkling_welcome, 'call_plugin_api');
$check_for_icon = array($sparkling_welcome, 'check_for_icon');
$check_active = array($sparkling_welcome, 'check_active');
$create_action_link = array($sparkling_welcome, 'create_action_link');

wp_enqueue_style( 'plugin-install' );
wp_enqueue_script( 'plugin-install' );
wp_enqueue_script( 'updates' );
?>

<div class="feature-section recommended-plugins three-col demo-import-boxed" id="plugin-filter">
    <?php foreach ( $sparkling_recommended_plugins as $plugin => $prop ) { ?>
        <?php
        $info   = call_user_func($call_plugin_api, $plugin);
        $icon   = call_user_func($check_for_icon, $info->icons);
        $active = call_user_func($check_active, $plugin);
        $url    = call_user_func($create_action_link, $active['needs'], $plugin);

        $label = '';

        switch ( $active['needs'] ) {
            case 'install':
                $class = 'install-now button';
                $label = __( 'Install', 'sparkling' );
                break;
            case 'activate':
                $class = 'activate-now button button-primary';
                $label = __( 'Activate', 'sparkling' );
                break;
            case 'deactivate':
                $class = 'deactivate-now button';
                $label = __( 'Deactivate', 'sparkling' );
                break;
        }

        ?>
        <div class="col plugin_box">
            <img src="<?php echo esc_attr( $icon ); ?>" alt="plugin box image">
            <span class="version"><?php echo __( 'Version:', 'sparkling' ); ?><?php echo $info->version; ?></span>
            <span
                class="separator">|</span> <?php echo wp_kses_post( $info->author ); ?>
            <div
                class="action_bar <?php echo ( 'install' !== $active['needs'] && $active['status'] ) ? 'active' : ''; ?>">
                <span
                    class="plugin_name"><?php echo ( 'install' !== $active['needs'] && $active['status'] ) ? 'Active: ' : ''; ?><?php echo $info->name; ?></span>
            </div>
            <span
                class="plugin-card-<?php echo esc_attr( $plugin ); ?> action_button <?php echo ( 'install' !== $active['needs'] && $active['status'] ) ? 'active' : ''; ?>">
                <a data-slug="<?php echo esc_attr( $plugin ); ?>" class="<?php echo $class; ?>"
                   href="<?php echo esc_url( $url ); ?>"> <?php echo $label; ?> </a>
            </span>
        </div>
    <?php
}// End foreach().
    ?>
</div>