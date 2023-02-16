</main>
<footer class="container">
	<div class="footer-inner">
		<div class="widgets">
			<?php if (is_active_sidebar('footer-section-one')) : ?>
				<div class="footer-section-one">
					<?php dynamic_sidebar('footer-section-one'); ?>
				</div>
			<?php endif; ?>
			<?php if (is_active_sidebar('footer-section-two')) : ?>
				<div class="footer-section-two">
					<?php dynamic_sidebar('footer-section-two'); ?>
				</div>
			<?php endif; ?>
			<?php if (is_active_sidebar('footer-section-three')) : ?>
				<div class="footer-section-three">
					<?php dynamic_sidebar('footer-section-three'); ?>
				</div>
			<?php endif; ?>
			<?php if (is_active_sidebar( 'footer-section-four')) : ?>
				<div class="footer-section-four">
					<?php dynamic_sidebar('footer-section-four'); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="copyright"><p>&copy; <?php echo $site_title = get_bloginfo('name'), " ", date("Y"); ?></p></div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
