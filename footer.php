    <footer class="footer center">
        <nav id="main" role="navigation">
			<ul>
				<?php if(has_menu_items()):
					while(menu_items()): ?>
        				<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
        					<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
        						<?php echo menu_name(); ?>
        					</a>
        				</li>
				    <?php endwhile;
				endif; ?>
			</ul>
		</nav>

        <p>&copy; <?php echo date('Y'); ?> / <a href="//anchorcms.com" target="_blank">Anchor</a></p>

    </footer>

    </body>
</html>
