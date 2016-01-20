    <footer id="footer">
        <nav class="clearfix">
            <p class="center">
                <?php if(has_menu_items()):
                    while(menu_items()): ?>
                        <a <?php echo (menu_active() ? 'class="active"' : ''); ?> href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
                            <?php echo menu_name(); ?>
                        </a>
                    <?php endwhile;
                endif; ?>
            </p>
            <p class="center">
                <?php while(categories()): ?>
                    <a href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>">
                        <?php echo category_title(); ?>
                    </a>
                <?php endwhile; ?>
            </p>
        </nav>
        <p class="center">&copy; <?php echo date('Y'); ?> / <a href="//anchorcms.com" target="_blank">⚓</a> / <a href="http://linusmetzler.me/?utm_source=justannathings.rocks&utm_medium=clientLink&utm_campaign=linkFromClientsPage" class="no-styling"><img id="limenet-logo" src="https://s3.amazonaws.com/limenet-logo-img/v2/icon-transparent-13.png" alt="limenet.ch"></a></p>
    </footer>
    </body>
</html>
