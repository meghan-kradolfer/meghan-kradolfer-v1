<?php
/*Plugin Name: Contact Details
Description: Add contact detail section
Version: 0.1
Author: Meghan Kradolfer
License: GPLv2
*/
add_filter('site_transient_update_plugins', 'remove_update_notification');
function remove_update_notification($value) {
    unset($value->response[ plugin_basename(__FILE__) ]);
    return $value;
}

class Contact_Details_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'contact_details_widget',

            // name of the widget
            __('Contact Details', 'meghan_kradolfer' ),

            // widget options
            array (
                'description' => __( 'Adds contact details to area', 'meghan_kradolfer' )
            )

        );
    }

    function form( $instance ) {

        $name = $instance[ 'name' ];
        $phone = $instance[ 'phone' ];
        $email = $instance[ 'email' ];
        $facebook = $instance[ 'facebook' ];
        $address = $instance[ 'address' ];

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'name' ); ?>">Business Name:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo esc_attr( $name ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'phone' ); ?>">Business Phone:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" value="<?php echo esc_attr( $phone ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'email' ); ?>">Business Email:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo esc_attr( $email ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'facebook' ); ?>">Business Facebook:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo esc_attr( $facebook ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'address' ); ?>">Business Address:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" value="<?php echo esc_attr( $address ); ?>">
        </p>

        <?php
    }

    function update( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance[ 'name' ] = strip_tags( $new_instance[ 'name' ] );
        $instance[ 'phone' ] = strip_tags( $new_instance[ 'phone' ] );
        $instance[ 'email' ] = strip_tags( $new_instance[ 'email' ] );
        $instance[ 'facebook' ] = strip_tags( $new_instance[ 'facebook' ] );
        $instance[ 'address' ] = strip_tags( $new_instance[ 'address' ] );
        return $instance;

    }

    function widget( $args, $instance ) {

        echo '<h2>Contact Us</h2>';

        $widget_output = '<ul class="container-fluid custom">';
        $widget_output .= '<li><a href="tel:'.$instance['phone'].'"><i class="fa fa-phone"></i>'.$instance['phone'].'</a></li>';
        $widget_output .= '<li><a href="mailto:'.$instance['email'].'" ><i class="fa fa-envelope"></i> '.$instance['email'].'</a></li>';
        $widget_output .= '<li><a href="'.$instance['address'].'" ><i class="fa fa-map-marker"></i> '.$instance['address'].'</a></li>';
        $widget_output .= '</ul>';
        $widget_output .= '<div id="map_sideBar"></div>';
        echo $widget_output;
    }

}

function contact_details_register_widget() {

    register_widget( 'Contact_Details_Widget' );

}
add_action( 'widgets_init', 'contact_details_register_widget' );

?>