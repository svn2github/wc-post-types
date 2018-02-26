<?php if ( 'add' === $current_screen->action ) : ?>

	<p class="help">
		<?php _e( 'You must save this sponsor before you can send them an invoice.', 'wordcamporg' ); ?>
	</p>

<?php else : ?>

	<?php if ( $existing_invoices ) : ?>

		<p>
			<strong><?php _e( 'Existing Invoices:', 'wordcamporg' ); ?></strong>
		</p>

		<ul class="ul-disc">
			<?php foreach ( $existing_invoices as $invoice ) : ?>

				<li>
					<a href="<?php echo esc_url( get_edit_post_link( $invoice->ID ) ); ?>">
						<?php echo _draft_or_post_title( $invoice->post_title ); ?>
					</a>
				</li>

			<?php endforeach; ?>
		</ul>

	<?php endif; ?>

	<!-- Force-open in a new window because the screen has a form and the link looks like a button, so if it were in
	the same window, then users would probably assume the button submits the form and starts an invoice, and they
	could lose any data they entered into the form -->
	<a href="<?php echo esc_url( $new_invoice_url ); ?>" target="_blank" class="button secondary">
		<?php _e( 'Add New Invoice', 'wordcamporg' ); ?>
	</a>

<?php endif;
