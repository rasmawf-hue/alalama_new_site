<?php
/**
 * Template Name: Offers Page
 * Description: صفحة العروض والتخفيضات - قالب العلامة للتقنية
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero" style="background: linear-gradient(135deg, #ff6b6b 0%, #ff8e53 100%);">
    <div class="container">
        <div class="hero-content">
            <h1>🔥 العروض والتخفيضات</h1>
            <p class="hero-subtitle">عروض حصرية ومحدودة - لا تفوت الفرصة!</p>
        </div>
    </div>
</section>

<!-- Offers Section -->
<section class="main-products">
    <div class="container">
        <h2 class="section-title">العروض الحالية</h2>
        
        <!-- Special Offer Banner -->
        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #fff; padding: 3rem; border-radius: 20px; text-align: center; margin-bottom: 3rem; box-shadow: 0 10px 40px rgba(102, 126, 234, 0.3);">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">🎉 عرض خاص للعملاء الجدد</h2>
            <p style="font-size: 1.3rem; margin-bottom: 2rem; opacity: 0.95;">خصم يصل إلى 30% على جميع الأنظمة لفترة محدودة</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary-large">احصل على العرض الآن</a>
        </div>

        <div class="products-grid">
            <!-- Offer 1: POS Bundle -->
            <div class="product-card" style="border: 3px solid #ff6b6b;">
                <div style="background: #ff6b6b; color: #fff; padding: 0.5rem 1rem; border-radius: 8px; display: inline-block; margin-bottom: 1rem; font-weight: 700;">خصم 25%</div>
                <div class="product-icon">🖥️</div>
                <h3>عرض نظام POS الشامل</h3>
                <p>نظام نقاط بيع كامل مع طابعة، درج نقدي، وماسح باركود</p>
                <div style="margin: 1.5rem 0;">
                    <span style="text-decoration: line-through; color: #999; font-size: 1.2rem;">15,000 د.ل</span>
                    <span style="color: #ff6b6b; font-size: 1.8rem; font-weight: 800; margin-right: 1rem;">11,250 د.ل</span>
                </div>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="learn-more" style="color: #ff6b6b;">احصل على العرض ←</a>
            </div>

            <!-- Offer 2: Security Bundle -->
            <div class="product-card" style="border: 3px solid #667eea;">
                <div style="background: #667eea; color: #fff; padding: 0.5rem 1rem; border-radius: 8px; display: inline-block; margin-bottom: 1rem; font-weight: 700;">خصم 30%</div>
                <div class="product-icon">📹</div>
                <h3>عرض نظام المراقبة المتكامل</h3>
                <p>8 كاميرات مراقبة HD + جهاز تسجيل + تركيب مجاني</p>
                <div style="margin: 1.5rem 0;">
                    <span style="text-decoration: line-through; color: #999; font-size: 1.2rem;">8,000 د.ل</span>
                    <span style="color: #667eea; font-size: 1.8rem; font-weight: 800; margin-right: 1rem;">5,600 د.ل</span>
                </div>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="learn-more" style="color: #667eea;">احصل على العرض ←</a>
            </div>

            <!-- Offer 3: Website Design -->
            <div class="product-card" style="border: 3px solid #00d4ff;">
                <div style="background: #00d4ff; color: #fff; padding: 0.5rem 1rem; border-radius: 8px; display: inline-block; margin-bottom: 1rem; font-weight: 700;">خصم 20%</div>
                <div class="product-icon">🌐</div>
                <h3>عرض تصميم الموقع الاحترافي</h3>
                <p>موقع إلكتروني احترافي متجاوب + استضافة سنة مجاناً</p>
                <div style="margin: 1.5rem 0;">
                    <span style="text-decoration: line-through; color: #999; font-size: 1.2rem;">5,000 د.ل</span>
                    <span style="color: #00d4ff; font-size: 1.8rem; font-weight: 800; margin-right: 1rem;">4,000 د.ل</span>
                </div>
                <a href="<?php echo esc_url(
