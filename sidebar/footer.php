<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : // If the sidebar has widgets. ?>

	<div class="footer-widgets">
		<div class="wrap">

			<aside <?php hybrid_attr( 'sidebar', 'footer-1' ); ?>>

				<?php dynamic_sidebar( 'footer-1' ); // Displays the subsidiary sidebar. ?>

			</aside><!-- #sidebar-subsidiary -->
			
			<aside <?php hybrid_attr( 'sidebar', 'footer-2' ); ?>>

				<?php dynamic_sidebar( 'footer-2' ); // Displays the subsidiary sidebar. ?>

			</aside><!-- #sidebar-subsidiary -->
			
			<aside <?php hybrid_attr( 'sidebar', 'footer-3' ); ?>>

				<?php dynamic_sidebar( 'footer-3' ); // Displays the subsidiary sidebar. ?>

			</aside><!-- #sidebar-subsidiary -->
		</div>
	</div>

<?php endif; // End widgets check. ?>
