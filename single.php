<?php
    get_header();
    the_post();

    get_template_part('template-parts/common/breadcrumb');
?>

<div class="container my-4 my-md-5">
    <div class="row">
        <?php
            if(get_theme_mod('craftnce_single_blog_page_layout_settings') === 'left_sidebar') {
                get_sidebar();
            }

            if(get_theme_mod('craftnce_single_blog_page_layout_settings') === 'left_sidebar') {
                $middle_column = 8;
            } elseif(get_theme_mod('craftnce_single_blog_page_layout_settings') === 'right_sidebar') {
                $middle_column = 8;
            } elseif(get_theme_mod('craftnce_single_blog_page_layout_settings') === 'no_sidebar') {
                $middle_column = 12;
            }
        ?>
        <div class="col-xl-<?php echo esc_attr($middle_column); ?>">
            <div class="row">
                <div class="col">
                    <h2>
                        <?php
                            the_title();
                        ?>
                    </h2>
                    <div class="d-flex mb-4 text-muted text-sm">
                        <p class="m-0"><?php echo get_the_date(); ?></p>
                        <span class="mx-2 text-primary fs-4">•</span>
                        <p class="m-0 single-post-cat">
                            <?php
                                $category = get_the_category();
                                if(!empty($category)) {
                                    $firstCategory = $category[0]->cat_name;
                                    echo $firstCategory;
                                }
                            ?>
                        </p>
                    </div>
                    <?php
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('large',array('class'=>'img-fluid w-100 mb-5'));
                        }
                    
                        the_content();
                        wp_link_pages();
                    ?>
                </div>
            </div>

            <?php
                // Social Share
                if(get_theme_mod('craftnce_single_blog_page_social_share_setting')) {
                    get_template_part('template-parts/common/social-share');
                }
                
                if(comments_open()) {
                    comments_template();
                } else {
                    _e('<p class="py-5">You can not comment in this post right now!</p>', 'craftnce');
                }
            ?>
        </div>
        <?php
            if(get_theme_mod('craftnce_single_blog_page_layout_settings') === 'right_sidebar') {
                get_sidebar();
            }
        ?>
    </div>
</div>

<?php
    get_footer();