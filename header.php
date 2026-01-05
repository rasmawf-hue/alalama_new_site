<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(alalama_get_logo()); ?>" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
            
            <nav class="nav-desktop">
                <a href="<?php echo esc_url(home_url('/')); ?>">الرئيسية</a>
                <a href="<?php echo esc_url(home_url('/offers')); ?>" class="special-link">
                    <span class="discount-icon">🔥</span>
                    عروض وتخفيضات
                </a>
                <a href="<?php echo esc_url(home_url('/about')); ?>">من نحن</a>
                <a href="<?php echo esc_url(home_url('/solutions')); ?>">الحلول المتكاملة</a>
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>">معرض أعمالنا</a>
                <a href="<?php echo esc_url(home_url('/clients')); ?>">عملاؤنا</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>">اتصل بنا</a>
            </nav>
            
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-button-desktop">
                اطلب استشارة<br/>مجانية
            </a>
            
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
    
    <div class="mobile-menu" id="mobileMenu">
        <nav>
            <a href="<?php echo esc_url(home_url('/')); ?>">الرئيسية</a>
            <a href="<?php echo esc_url(home_url('/offers')); ?>" class="special-link">
                <span class="discount-icon">🔥</span>
                عروض وتخفيضات
            </a>
            <a href="<?php echo esc_url(home_url('/about')); ?>">من نحن</a>
            <a href="<?php echo esc_url(home_url('/solutions')); ?>">الحلول المتكاملة</a>
            <a href="<?php echo esc_url(home_url('/portfolio')); ?>">معرض أعمالنا</a>
            <a href="<?php echo esc_url(home_url('/clients')); ?>">عملاؤنا</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>">اتصل بنا</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-button-mobile">اطلب استشارة مجانية</a>
        </nav>
    </div>
</header>
