<?php theme_include('header'); ?>

<div class="content-wrapper bg-third padding-top">

    <div class="content">

        <h2 class="small-title sans-serif caps">Written <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>. This article is my <?php echo numeral(article_id()); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long.</h2>

        <h2 class="h2"><?php echo article_title(); ?></h2>

        <p><?php echo article_markdown(); ?></p>

    </div>
    <?php if(comments_open()): ?>
    <hr>
    <div class="content">
        <h3>Comments</h3>
    </div>

    <div class="content">
        <?php if(has_comments()): ?>
        <ul class="commentlist">
            <?php $i = 0; while(comments()): $i++; ?>
            <li class="comment" id="comment-<?php echo comment_id(); ?>">
                <div class="wrap">
                    <h4><?php echo comment_name(); ?></h4>


                    <blockquote class="content">
                        <?php echo htmlspecialchars(comment_text()); ?>
                        <br><br><cite>&ndash; <time><?php echo relative_time(comment_time()); ?></time></cite>
                    </blockquote>

                </div>
            </li>
            <?php endwhile; ?>
        </ul>
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

    </div>
    <?php endif; ?>

</div>

<?php theme_include('footer'); ?>