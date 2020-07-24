<?php

add_action('acf/init', 'price_block_register_blocks');
function price_block_register_blocks() {

	// check function exists.
	if( function_exists('acf_register_block_type') ) {

		// register a testimonial block.
		acf_register_block_type(array(
			'name'              => 'price_block',
			'title'             => __('Блоки с ценами'),
			'description'       => __('Выводит блоки цен для сравнения.'),
			'render_callback'   => 'price_block_render_callback',
			'category'          => 'formatting',
			'icon' => 'pressthis',
		));
	}
}

/**
 * Testimonial Block Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function price_block_render_callback( $block, $content = '', $is_preview = false, $post_id = 0 ) {

	// Create id attribute allowing for custom "anchor" value.
	$id = 'price_block-' . $block['id'];
	if( !empty($block['anchor']) ) {
		$id = $block['anchor'];
	}

	// Create class attribute allowing for custom "className" and "align" values.
	$className = 'price_block';
	if( !empty($block['className']) ) {
		$className .= ' ' . $block['className'];
	}
	if( !empty($block['align']) ) {
		$className .= ' align' . $block['align'];
	}

	$is_slider = get_field('is_slider');
	$class_wrapper = $className . '-wrapper';

	?>
<!--// block layout:-->


<div id="<?php echo esc_attr($id); ?>" class=" <?php echo $class_wrapper; if(!!$is_slider) echo ' swiper-container card-slider--js'?>">

	<div class="cardholder <?php echo esc_attr($className); if(!!$is_slider) {echo ' swiper-wrapper';} else { echo ' d-flex flex-wrap justify-content-center';}  ?>"><!--  -->

	<?php while( have_rows('block_service') ): the_row();

		$title = get_sub_field('title');
		$subtitle = get_sub_field('subtitle');
		$img = get_sub_field('img')?: 965;
		$img_attr = array(
			'class' => 'img-fluid card-img',
			'title' => $title,
			'alt' => $title,
		);
		$os_types = get_sub_field('os_types');
		$description = get_sub_field('description');
		$Price = get_sub_field('Price');
		$old_price = get_sub_field('old_price');
		$btn_link = get_sub_field('btn_link');


	?>

		<div class="cardholder-item <?php if(!!$is_slider) { echo ' swiper-slide';} else {echo ' my-3';} ?>" >
			<div class="card">
				<div class="card-header text-center">
					<h4 class="card-title h5">
						<?php echo $title; ?>
					</h4>
					<?php if(!!$subtitle) : ?>
						<p class="card-subtitle text-muted">
							<?php echo $subtitle; ?>
						</p>
					<?php endif; ?>
				</div>
				<div class="card-body">
					<?php echo wp_get_attachment_image( $img, 'medium', false, $img_attr ); ?>
					<?php if(!!$os_types) : ?>
						<div class="card-tec d-flex justify-content-around">
							<?php foreach ( $os_types as $type ) {
								?>
								<span class="<?php echo $type["value"]; ?> text-center"><?php echo $type["label"]; ?></span>
								<?php
							}; ?>
						</div>
					<?php endif; ?>
					<?php if(!!$description) : ?>
						<p class="card-text mt-3">
							<?php echo $description; ?>
						</p>
					<?php endif; ?>
					<?php if( have_rows('blocklist') ): ?>
						<ul class="list-group list-group-flush mb-3">
							<?php while( have_rows('blocklist') ): the_row();
								$item = get_sub_field('item');
								?>
								<li class="list-group-item py-2">
									<?php echo $item; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>

					<?php if(!!$Price) : ?>
						<div class="price-block mt-auto">
							<?php if(!!$old_price) : ?>
								<p class="card-price card-pice--old h5 text-muted text-center m-0 pt-3">
									<del>
										<?php echo $old_price; ?>
									</del>
								</p>
							<?php endif; ?>
								<p class="card-price h4 text-info text-center m-0" >
									<?php echo $Price; ?>
								</p>
						</div>
					<?php endif; ?>
				</div>
				<?php if(!!$btn_link) : ?>
					<div class="card-footer text-center">
						<a href="<?php echo $btn_link; ?>"
							class="btn btn-primary badge-pill">Заказать</a>
					</div>
				<?php endif; ?>
			</div>
		</div>

	<?php endwhile; ?>

	</div>
	<?php if(!!$is_slider) : ?>
		<div class="swiper-pagination"></div>
	<?php endif; ?>
</div>

<?php
}
