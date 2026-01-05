<?php
/**
 * Template Name: Home Page
 * Description: Main home page template
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>حلول تقنية متكاملة<br/>لنجاح أعمالك في ليبيا</h1>
            <p class="hero-subtitle">أنظمة POS، ERP، HR، حلول أمنية، ومراقبة Hikvision - كل ما تحتاجه في مكان واحد</p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary">احجز استشارة مجانية</a>
                <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="btn-secondary">استكشف الحلول</a>
            </div>
        </div>
    </div>
</section>

<!-- Main Products Section -->
<section class="main-products">
    <div class="container">
        <h2 class="section-title">حلولنا الرئيسية</h2>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-icon">📱</div>
                <h3>أنظمة نقاط البيع (POS)</h3>
                <p>حلول متكاملة للمطاعم، المقاهي، والمحلات التجارية بأنواعها. إدارة المبيعات، المخزون، والطلبات بكل سهولة.</p>
                <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="learn-more">اعرف المزيد ←</a>
            </div>
            
            <div class="product-card">
                <div class="product-icon">📹</div>
                <h3>الحلول الأمنية</h3>
                <p>أنظمة مراقبة Hikvision، أجهزة بصمة وحضور وانصراف، وبوابات إنذار لمنع السرقة. أمان تام لمؤسستك.</p>
                <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="learn-more">اعرف المزيد ←</a>
            </div>
            
            <div class="product-card">
                <div class="product-icon">💼</div>
                <h3>حلول إدارة المؤسسات</h3>
                <p>أنظمة ERP متكاملة، إدارة الموظفين (HR)، والأرشفة الإلكترونية لتحويل شركتك نحو العالم الرقمي.</p>
                <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="learn-more">اعرف المزيد ←</a>
            </div>
            
            <div class="product-card">
                <div class="product-icon">🖥️</div>
                <h3>البنية التحتية والشبكات</h3>
                <p>نوفر حلولاً متكاملة للبنية التحتية تشمل الشبكات، الكوابل، الخوادم، وأنظمة الطاقة الاحتياطية.</p>
                <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="learn-more">اعرف المزيد ←</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Us Section -->
<section class="why-us">
    <div class="container">
        <h2 class="section-title">لماذا العلامة للتقنية؟</h2>
        <div class="why-us-grid">
            <div class="feature-card">
                <div class="feature-icon">✓</div>
                <h3>حل شامل متكامل</h3>
                <p>الشركة الوحيدة في ليبيا التي تقدم برمجيات، أجهزة عالمية، ودعم فني متخصص في حزمة واحدة.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✓</div>
                <h3>ضمان الوكيل المعتمد</h3>
                <p>جميع أجهزتنا أصلية ومضمونة من الوكلاء المعتمدين العالميين مثل Hikvision و Posbank و Epson.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✓</div>
                <h3>خبرة محلية ودعم فوري</h3>
                <p>فريقنا متواجد في طرابلس وكل ليبيا لتقديم الدعم السريع والتركيب والتدريب بكفاءة عالية.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✓</div>
                <h3>حلول قابلة للنمو</h3>
                <p>أنظمتنا مصممة لتنمو مع مشروعك، بدءاً من الحلول الصغيرة وصولاً إلى أنظمة الشركات الكبرى.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials">
    <div class="container">
        <h2 class="section-title">ماذا يقول عملاؤنا</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p class="quote">"نظام POPS من العلامة غير طريقة إدارتنا للمطعم بالكامل. سهولة، سرعة، ودعم فني لا يعلى عليه. شكراً لكم!"</p>
                <div class="author">
                    <strong>علي الأحمد</strong>
                    <span>مدير مطعم وكافي فينيسيا</span>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p class="quote">"الحل الشامل الذي قدمته لنا شركة العلامة من نظام مبيعات وكاميرات مراقبة ساعدنا على التوسع ونحن مطمئنون."</p>
                <div class="author">
                    <strong>فاطمة بن علي</strong>
                    <span>صاحبة سلسلة محلات أزياء</span>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p class="quote">"كنا نعاني من مشاكل في إدارة الحضور والرواتب، لكن مع نظام HR وأجهزة البصمة من العلامة، أصبحت الأمور آلية ودقيقة."</p>
                <div class="author">
                    <strong>محمد خليفة</strong>
                    <span>مدير الموارد البشرية بشركة إنشاءات</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="final-cta" id="final-cta">
    <div class="container">
        <h2>جاهز لتطوير أعمالك؟</h2>
        <p>احجز استشارة مجانية الآن ودع فريقنا يساعدك في اختيار الحل الأنسب</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary-large">احجز استشارتك المجانية</a>
    </div>
</section>

<?php
get_footer();
?>
