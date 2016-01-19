    <footer id="footer">
        <nav>
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
        <p class="center">&copy; <?php echo date('Y'); ?> / <a href="//anchorcms.com" target="_blank">⚓</a> / <a href="http://linusmetzler.me/?utm_source=justannathings.rocks&utm_medium=clientLink&utm_campaign=linkFromClientsPage" class="link-no-styling"><img id="limenet-logo" src="https://s3.amazonaws.com/limenet-logo-img/v2/icon-transparent-13.png"></a></p>
    </footer>
    </body>
</html>
