<?php
/**
 * Template Name: Clients Page
 * Description: Our clients page template
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>عملاؤنا الموثوقون</h1>
            <p class="hero-subtitle">مئات العملاء راضون عنا عبر ليبيا</p>
        </div>
    </div>
</section>

<!-- Clients Section -->
<section class="page-content">
    <div class="container">
        <h2 class="section-title">من يثق بنا</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <h3>مطاعم وكافيهات</h3>
                <p>نظام POPS وRMS لتسيير الطلبات والفواتير مع سهولة</p>
            </div>
            
            <div class="testimonial-card">
                <h3>محال وصيدليات</h3>
                <p>نظام POS متخصص مع جرد المخزون التلقائي</p>
            </div>
            
            <div class="testimonial-card">
                <h3>البنوك والمصارف</h3>
                <p>نظام إدارة طوابير متقدم مع باركود</p>
            </div>
            
            <div class="testimonial-card">
                <h3>المؤسسات الحكومية</h3>
                <p>نظام ERP مزود مع HR ومراقبة</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="final-cta">
    <div class="container">
        <h2>انت وشريكك؟</h2>
        <p>انضم معنا مع عملائنا وشركائنا بالذات</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary-large">ابدأ رحلتك معنا</a>
    </div>
</section>

<?php
get_footer();
?>
