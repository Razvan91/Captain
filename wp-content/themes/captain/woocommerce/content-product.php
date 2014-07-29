
<?php
/**
* The template for displaying product content within loops.
*
* Override this template by copying it to yourtheme/woocommerce/content-product.php
*
* @author 		WooThemes
* @package 	WooCommerce/Templates
* @version     1.6.4
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop, $WC_nb;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
$classes[] = 'last';
?>
<div class="product"  class="hide">
    <a href="<?php the_permalink(); ?>">
    <?php   woocommerce_template_loop_product_thumbnail();
    ?>
    <span class="product-attr"> <?php echo($WC_nb->woocommerce_show_product_loop_new_badge()); ?> </span>
    <span class="product-title"><?php the_title() ?></span>
    <span class="product-price"><?php echo $product->get_price_html(); ?> </span>
    </a>
    <div class="product-options">
        <?php
        if(method_exists($product,'get_available_variations'))
              foreach($product->get_available_variations() as $pv => $pvo){
                 if($pvo["max_qty"]>0){ ?>
                      <li style="background-color: #<?php echo($pvo["attributes"]["attribute_pa_color"]); ?>;" ></li>
                    <?php
                 }
             }
        ?>
    </div>
</div>