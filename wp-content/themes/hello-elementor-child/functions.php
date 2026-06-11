    <?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 999 );

// END ENQUEUE PARENT ACTION
// send a custom email when the order status changes to "processing"
/* add_action( 'woocommerce_order_status_changed', 'send_custom_email_order_processing', 10, 4 );
function send_custom_email_order_processing( $order_id, $from_status, $to_status, $order ) {
 
    // only if the new order status is "processing"
    if ( $to_status == 'processing' ) {
        $content_email_dimtrap = 'contenido de email ' . $order_id . '<br> ' . $order_details;
        $subject = __("Thank you for joining the adventure with DIM TRAP!", 'hello-elementor-child');
        $to_email = $order->get_billing_email();
        $headers = 'From: DIM TRAP <info@dimtrap.com>' . "\r\n";
        $headers .= "Reply-To: info@dimtrap.com\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        wp_mail( $to_email,  $subject, $content_email_dimtrap, $headers );
    }

}  */


/* 
add_action( 'init', 'testing' );

function testing() {

    $num_conf=0;
    $order = wc_get_order( 7521 );
    $order_id = $order->get_id(); // Get the order ID
    $meta_value = $order->get_meta('_jet_abaf_wc_details');
    $form_data = $meta_value["form_data"];
    $num_conf = $form_data["num_confirmacion"];
    $fecha = $form_data["_dates"];
    $actividad = $form_data["nombre-actividad"];
    //$num_conf = $form_data[2];
   

   // print_r($meta_value);
    //print_r($form_data);
   // print_r($num_conf);
   // $num_conf = $meta_value->get_value('form_data');
   // $values = print_r($num_conf);
    

    echo '<script>console.log("Número de confirmación: '. $num_conf . '")</script>';
    echo '<script>console.log("Fecha: '. $fecha . '")</script>';
    echo '<script>console.log("Actividad: '. $actividad . '")</script>';
  //  echo '<script>console.log("ORDERIDNBX '. $values . '")</script>';

} */