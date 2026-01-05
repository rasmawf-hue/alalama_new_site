<?php
/**
 * Template Name: About Page
 * Description: About us page template
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>من نحن</h1>
            <p class="hero-subtitle">عالم التقنية بأيدي طرابلسية</p>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="page-content">
    <div class="container">
        <h2 class="section-title">عن العلامة</h2>
        <div style="max-width: 800px; margin: 0 auto;">
            <p>شركة العلامة للحاسبات والتقنية هي مركز للخدمات التقنية المتقدمة بكافة الأنواع. نحن نوفر حلولاً متكاملة من البرمجيات والأجهزة العالمية مع دعم فني ماهر في مركزنا بطرابلس.</p>
            
            <h3>رؤيتنا</h3>
            <p>أن نكون الشركة الرائدة في ليبيا لتقديم حلول تقنية خادمة للجميع.</p>
            
            <h3>مهمتنا</h3>
            <p>مساعدة المؤسسات والعاملين بعالم الرقمنة من خلال حلول شاملة من الحلول الموثوقة بفعالية مختبرة.</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="final-cta">
    <div class="container">
        <h2>تريد معرفة المزيد؟</h2>
        <p>احجز استشارة مجانية مع فريقنا</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary-large">التواصل معنا</a>
    </div>
</section>

<?php
get_footer();
?>
