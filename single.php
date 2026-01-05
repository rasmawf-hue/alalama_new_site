<?php
/**
 * Single Post Template
 * Description: قالب المقالة الفردية - العلامة للتقنية
 */

get_header(); ?>

<article class="single-post" style="padding: 5rem 0; background: #fff;">
    <div class="container" style="max-width: 900px;">
        <?php while (have_posts()) : the_post(); ?>
            
            <!-- Post Header -->
            <header class="post-header" style="margin-bottom: 3rem;">
                <h1 style="font-size: 2.5rem; margin-bottom: 1.5rem; color: #1a1a1a;"><?php the_title(); ?></h1>
                
                <div class="post-meta" style="display: flex; gap: 2rem; color: #666; flex-wrap: wrap; margin-bottom: 2rem;">
                    <span>📅 <?php echo get_the_date(); ?></span>
                    <span>✍️ <?php the_author(); ?></span>
                    <span>📁 <?php the_category(', '); ?></span>
                    <?php if (get_comments_number() > 0) : ?>
                        <span>💬 <?php comments_number('لا تعليقات', 'تعليق واحد', '% تعليقات'); ?></span>
                    <?php endif; ?>
                </div>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail" style="border-radius: 15px; overflow: hidden; margin-bottom: 2rem;">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto;')); ?>
                    </div>
                <?php endif; ?>
            </header>

            <!-- Post Content -->
            <div class="post-content" style="line-height: 1.9; font-size: 1.1rem; color: #333;">
                <?php the_content(); ?>
            </div>

            <!-- Post Tags -->
            <?php if (has_tag()) : ?>
                <div class="post-tags" style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e0e0e0;">
                    <strong>الوسوم: </strong>
                    <?php the_tags('', ', ', ''); ?>
                </div>
            <?php endif; ?>

            <!-- Post Navigation -->
            <nav class="post-navigation" style="margin-top: 3rem; display: flex; justify-content: space-between; gap: 2rem; flex-wrap: wrap;">
                <div>
                    <?php previous_post_link('%link', '→ المقال السابق'); ?>
                </div>
                <div>
                    <?php next_post_link('%link', 'المقال التالي ←'); ?>
                </div>
            </nav>

            <!-- Comments Section -->
            <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</article>

<!-- Related Posts -->
<?php
$related = get_posts(array(
    'category__in' => wp_get_post_categories(get_the_ID()),
    'numberposts' => 3,
    'post__not_in' => array(get_the_ID())
));

if ($related) : ?>
    <section class="related-posts" style="padding: 5rem 0; background: #f8f9fa;">
        <div class="container">
            <h2 class="section-title">مقالات ذات صلة</h2>
            <div class="blog-grid">
                <?php foreach ($related as $post) : setup_postdata($post); ?>
                    <div class="blog-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', array('class' => 'blog-image')); ?>
                            </a>
                        <?php endif; ?>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><?php echo get_the_date(); ?></span>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>" style="color: #1a1a1a;"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">اقرأ المزيد ←</a>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
