<?php
/**
 * Template Name: Solutions Page
 * Description: صفحة الحلول المتكاملة - قالب العلامة للتقنية
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>الحلول المتكاملة</h1>
            <p class="hero-subtitle">حلول تقنية شاملة مصممة خصيصاً لقطاعك</p>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section class="main-products">
    <div class="container">
        <h2 class="section-title">حلولنا حسب القطاع</h2>
        <div class="products-grid">
            <!-- Solution 1: Retail -->
            <div class="product-card">
                <div class="product-icon">🛒</div>
                <h3>حلول التجزئة والسوبرماركت</h3>
                <p>نظام متكامل لإدارة المبيعات، المخزون، والفواتير في محلات التجزئة والسوبرماركت بجميع أحجامها.</p>
                <ul style="text-align: right; color: #666; margin: 1rem 0;">
                    <li>نظام POS متطور</li>
                    <li>إدارة المخزون التلقائية</li>
                    <li>تقارير مبيعات فورية</li>
                    <li>دعم الباركود والماسحات</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="learn-more">اطلب عرض سعر ←</a>
            </div>

            <!-- Solution 2: Restaurants -->
            <div class="product-card">
                <div class="product-icon">🍽️</div>
                <h3>حلول المطاعم والكافيهات</h3>
                <p>نظام شامل لإدارة المطاعم يشمل الطلبات، المطبخ، الكاشير، والتوصيل في واجهة واحدة.</p>
                <ul style="text-align: right; color: #666; margin: 1rem 0;">
                    <li>نظام طلبات متعدد الشاشات</li>
                    <li>إدارة الطاولات والحجوزات</li>
                    <li>ربط مع منصات التوصيل</li>
                    <li>تقارير تحليلية مفصلة</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="learn-more">اطلب عرض سعر ←</a>
            </div>

            <!-- Solution 3: Pharmacies -->
            <div class="product-card">
                <div class="product-icon">💊</div>
                <h3>حلول الصيدليات</h3>
                <p>نظام متخصص لإدارة الصيدليات يراعي الأدوية، تواريخ الصلاحية، والتأمين الصحي.</p>
                <ul style="text-align: right; color: #666; margin: 1rem 0;">
                    <li>إدارة الأدوية والصلاحية</li>
                    <li>ربط مع شركات التأمين</li>
                    <li>تنبيهات تلقائية</li>
                    <li>تقارير دوائية متخصصة</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="learn-more">اطلب عرض سعر ←</a>
            </div>

            <!-- Solution 4: Manufacturing -->
            <div class="product-card">
                <div class="product-icon">🏭</div>
                <h3>حلول المصانع والإنتاج</h3>
                <p>نظام ERP متكامل لإدارة عمليات التصنيع، المخزون، والمشتريات والمبيعات.</p>
                <ul style="text-align: right; color: #666; margin: 1rem 0;">
                    <li>إدارة خطوط الإنتاج</li>
                    <li>تتبع المواد الخام</li>
                    <li>إدارة الجودة</li>
                    <li>تكلفة الإنتاج</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="learn-more">اطلب عرض سعر ←</a>
            </div>

            <!-- Solution 5: Healthcare -->
            <div class="product-card">
                <div class="product-icon">🏥</div>
                <h3>حلول العيادات والمراكز الطبية</h3>
                <p>نظام متكامل لإدارة العيادات والمراكز الصحية يشمل الحجوزات، السجلات الطبية، والفواتير.</p>
                <ul style="text-align: right; color: #666; margin: 1rem 0;">
                    <li>نظام حجز المواعيد</li>
                    <li>السجلات الطبية الإلكترونية</li>
                    <li>إدارة التأمين الصحي</li>
                    <li>وصفات طبية إلكترونية</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="learn-more">اطلب عرض سعر ←</a>
            </div
