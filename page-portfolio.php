<?php
/**
 * Template Name: Portfolio Page
 * Description: صفحة معرض الأعمال - قالب العلامة للتقنية
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>معرض أعمالنا</h1>
            <p class="hero-subtitle">استعرض أحدث مشاريعنا وإنجازاتنا</p>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="portfolio-section">
    <div class="container">
        <!-- Portfolio Filters -->
        <div class="portfolio-filters">
            <button class="filter-btn active" data-filter="all">الكل</button>
            <button class="filter-btn" data-filter="pos">أنظمة POS</button>
            <button class="filter-btn" data-filter="erp">أنظمة ERP</button>
            <button class="filter-btn" data-filter="security">أنظمة الأمن</button>
            <button class="filter-btn" data-filter="websites">المواقع</button>
            <button class="filter-btn" data-filter="networks">الشبكات</button>
        </div>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid">
            <!-- Project 1 -->
            <div class="portfolio-item" data-category="pos">
                <img src="<?php echo esc_url(alalama_image('portfolio/pos-system.jpg')); ?>" alt="نظام POS" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>نظام نقاط بيع متكامل</h3>
                    <p>سوبرماركت الأمل - طرابلس</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="portfolio-item" data-category="erp">
                <img src="<?php echo esc_url(alalama_image('portfolio/erp-system.jpg')); ?>" alt="نظام ERP" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>نظام ERP متكامل</h3>
                    <p>شركة الأفق للصناعات</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="portfolio-item" data-category="security">
                <img src="<?php echo esc_url(alalama_image('portfolio/security-system.jpg')); ?>" alt="نظام مراقبة" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>نظام مراقبة 32 كاميرا</h3>
                    <p>مول طرابلس التجاري</p>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="portfolio-item" data-category="websites">
                <img src="<?php echo esc_url(alalama_image('portfolio/website-design.jpg')); ?>" alt="تصميم موقع" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>موقع إلكتروني متجاوب</h3>
                    <p>شركة النجاح للاستشارات</p>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="portfolio-item" data-category="pos">
                <img src="<?php echo esc_url(alalama_image('portfolio/restaurant-pos.jpg')); ?>" alt="نظام مطاعم" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>نظام إدارة مطعم</h3>
                    <p>مطعم البحر الأبيض</p>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="portfolio-item" data-category="networks">
                <img src="<?php echo esc_url(alalama_image('portfolio/network-infrastructure.jpg')); ?>" alt="بنية تحتية" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>بنية تحتية شبكية</h3>
                    <p>مستشفى الشفاء الطبي</p>
                </div>
            </div>

            <!-- Project 7 -->
            <div class="portfolio-item" data-category="security">
                <img src="<?php echo esc_url(alalama_image('portfolio/access-control.jpg')); ?>" alt="التحكم بالدخول" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>نظام التحكم بالدخول</h3>
                    <p>البنك التجاري الوطني</p>
                </div>
            </div>

            <!-- Project 8 -->
            <div class="portfolio-item" data-category="websites">
                <img src="<?php echo esc_url(alalama_image('portfolio/ecommerce-site.jpg')); ?>" alt="متجر إلكتروني" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>متجر إلكتروني متكامل</h3>
                    <p>متجر الأناقة للأزياء</p>
                </div>
            </div>

            <!-- Project 9 -->
            <div class="portfolio-item" data-category="erp">
                <img src="<?php echo esc_url(alalama_image('portfolio/pharmacy-system.jpg')); ?>" alt="نظام صيدلية" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3>نظام إدارة صيدلية</h3>
                    <p>صيدلية الحياة</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="why-us" style="background: #f8f9fa;">
    <div class="container">
        <h2 class="section-title">أرقامنا تتحدث</h2>
        <div class="why-us-grid">
            <div class="feature-card">
                <div class="feature-icon">500+</div>
                <h3>مشروع منجز</h3>
                <p>أكثر من 500 مشروع ناجح</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">350+</div>
                <h3>عميل راضٍ</h3>
                <p>عملاء سعداء بخدماتنا</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">15+</div>
                <h3>سنة خبرة</h3>
                <p>خبرة طويلة في السوق</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">24/7</div>
                <h3>دعم مستمر</h3>
                <p>دعم فني على مدار الساعة</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="final-cta">
    <div class="container">
        <div class="final-cta-content">
            <h2>هل أنت مستعد لبدء مشروعك؟</h2>
            <p>تواصل معنا اليوم ودعنا نحول أفكارك إلى واقع</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary-large">ابدأ مشروعك الآن</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
