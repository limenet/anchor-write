<?php theme_include('header'); ?>
<section id="main">
    <?php if(has_posts()): ?>
        <?php $i = 0; while(posts()): ?>
        <?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
            <?php echo $i > 1 ? "<hr>" : ''; ?>
            <h2><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>
            <p class="small-title">Written <time title="<?php echo date('Y-m-d H:i:s', article_time());?>" datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?> in <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a>.</p>
            <p><?php echo article_markdown();?></p>
        <?php endwhile; ?>
        <?php if(has_pagination()): ?>
            <hr>
            <section id="pagination">
               <nav>
                   <item style="float:left;"><?php echo posts_next('← Newer'); ?></item>
                   <item style="float:right;"><?php echo posts_prev('Older →'); ?></item>
               </nav>
            </section>
        <?php endif; ?>
    <?php else: ?>
        <p>Looks like you have some writing to do!</p>
    <?php endif; ?>
</section>
<?php theme_include('footer'); ?>