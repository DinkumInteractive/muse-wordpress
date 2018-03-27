<?php 
$post_id = $_GET['post']; 
$item_slug = get_post_meta( $post_id, 'item_slug', true );
$seat_slug = get_post_meta( $post_id, 'seat_slug', true );
$ticket_type = get_post_meta( $post_id, 'ticket_type', true );
?>
<div id="general_product_muse" class="panel woocommerce_options_panel" style="display:block">
	
	<div class="options-group">
		<p class="form-field item_slug_field ">
			<label for="item_slug"><?php _e( 'Item Slug', 'wc-muse' ) ?></label>
			<input type="text" name="item_slug" id="item_slug" value="<?php echo $item_slug; ?>">
		</p>
	</div>

	<div class="options-group">
		<p class="form-field ticket_type_field ">
			<label for="ticket_type"><?php _e( 'Item Type', 'wc-muse' ) ?></label>
			<select name="ticket_type" id="ticket_type">
				<option value="event" <?php echo ( 'event' === $ticket_type ? 'selected' : '' ); ?>><?php _e( 'Event', 'wc-muse' ) ?></option>
				<option value="serie" <?php echo ( 'serie' === $ticket_type ? 'selected' : '' ); ?>><?php _e( 'Serie', 'wc-muse' ) ?></option>
			</select>
		</p>
	</div>

</div>

