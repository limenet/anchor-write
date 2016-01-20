<?php theme_include('header'); ?>
<section id="main">
        <h2><?php echo article_title(); ?></h2>
        <p class="small-title">Written <time title="<?php echo date('Y-m-d H:i:s', article_time());?>" datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?> in <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a>.</p>
        <p><?php echo article_markdown(); ?></p>
    <?php if(comments_open()): ?>
    <hr>
        <h3 id="comment">Comments</h3>

        <?php if(has_comments()): ?>
            <?php $i = 0; while(comments()): $i++; ?>
            <div class="comment" id="comment-<?php echo comment_id(); ?>">
                <h4><?php echo comment_name(); ?>  <cite>&ndash;<time><?php echo relative_time(comment_time()); ?></time></cite></h4>
                <blockquote>
                    <?php echo htmlspecialchars(comment_text()); ?>
                </blockquote>
            </div>
            <?php endwhile; ?>
        <hr>
        <?php endif; ?>
        <form method="post" action="<?php echo comment_form_url(); ?>#comment">
            <?php echo comment_form_notifications(); ?>
            <p>
                <?php echo comment_form_input_name('placeholder="Your name"'); ?>
            </p>
            <p>
                <?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
            </p>
            <p>
                <?php echo comment_form_input_text('placeholder="Your comment" rows=4'); ?>
            </p>
            <p class="submit">
                <?php echo comment_form_button(); ?>
            </p>
        </form>
    <?php endif; ?>
</section>
<?php theme_include('footer'); ?>