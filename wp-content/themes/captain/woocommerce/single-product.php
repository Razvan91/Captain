<?php
 get_header();

global   $product;
?>
    <div id="content" class="product-page">
        <div class="breadcrumb">
           <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }
            ?>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>


        <div class="product-content">
            <div class="product-image">
                <img src="img/product-image.jpg" alt="Product name">
                <a href="#" class="zoom"></a>
            </div>
            <div class="product-description">
                <h1><?php the_title(); ?></h1>
                <span class="price"><?php echo $product->get_price_html(); ?></span>
                <div class="description">
                        <?php the_content(); ?>
                </div>
                <div class="links">
                    <ul>
                        <li><a href="#" title="Size Guide">Size Guide</a></li>
                        <li><a href="#" title="Delivery">Delivery</a></li>
                        <li><a href="#" title="Returns">Returns</a></li>
                    </ul>
                </div>
                <div class="options">
				<span class="color">
					<label>Color</label>
					<ul>
                        <li class="grey"></li>
                        <li class="blue"></li>
                        <li class="black"></li>
                    </ul>
				</span>
				<span class="size">
					<label>Size</label>
					<select>
                        <option>M</option>
                    </select>
				</span>
				<span class="quantity">
					<label>Quantity</label>
					<input type="text" name="quantity">
				</span>
                </div>
                <button type="button" class="add-to-bag">Add to bag</button>
            </div>
        </div>

        <?php endwhile; // end of the loop. ?>
        <div class="clear"></div>
        <div class="under-product">
            <div class="product-other-images">
                <a href="#"><img src="img/product-image-small.jpg"></a>
                <a href="#"><img src="img/product-image-small.jpg"></a>
                <a href="#"><img src="img/product-image-small.jpg"></a>
                <a href="#"><img src="img/product-image-small-2.jpg"></a>
            </div>
            <div class="recommended">
                <span>Recommended for you</span>
                <div class="clear"></div>
                <a href="#"><img src="img/recommend-image.jpg"></a>
                <a href="#"><img src="img/recommend-image.jpg"></a>
                <a href="#"><img src="img/recommend-image.jpg"></a>
            </div>
            <div class="contest">
                <span>I stand for my city Contest</span>
                <div class="clear"></div>
                <a href="#"><img src="img/contest-image-1.jpg"></a>
                <a href="#"><img src="img/contest-image-2.jpg"></a>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>