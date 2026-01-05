<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-section">
                <img src="<?php echo esc_url(alalama_get_logo()); ?>" alt="<?php bloginfo('name'); ?>" class="footer-logo">
                <p>شريكك الموثوق في الحلول التقنية المتكاملة في ليبيا</p>
            </div>
            
            <div class="footer-section">
                <h3>روابط سريعة</h3>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">من نحن</a></li>
                    <li><a href="<?php echo esc_url(home_url('/solutions')); ?>">الحلول</a></li>
                    <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>">أعمالنا</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">اتصل بنا</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>تواصل معنا</h3>
                <ul class="contact-list">
                    <li>📞 <a href="tel:<?php echo esc_attr(str_replace(' ', '', alalama_get_contact('phone_1'))); ?>"><?php echo esc_html(alalama_get_contact('phone_1')); ?></a></li>
                    <li>📞 <a href="tel:<?php echo esc_attr(str_replace(' ', '', alalama_get_contact('phone_2'))); ?>"><?php echo esc_html(alalama_get_contact('phone_2')); ?></a></li>
                    <li>✉️ <a href="mailto:<?php echo esc_attr(alalama_get_contact('email')); ?>"><?php echo esc_html(alalama_get_contact('email')); ?></a></li>
                    <li>📍 <?php echo esc_html(alalama_get_contact('address')); ?></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> العلامة للتقنية. جميع الحقوق محفوظة.</p>
            <div class="footer-links">
                <a href="<?php echo esc_url(home_url('/terms')); ?>">الشروط والأحكام</a>
                <a href="<?php echo esc_url(home_url('/privacy')); ?>">سياسة الخصوصية</a>
            </div>
        </div>
    </div>
</footer>

<a href="https://wa.me/<?php echo esc_attr(alalama_get_contact('whatsapp')); ?>" target="_blank" rel="noopener noreferrer" class="whatsapp-float" id="whatsappFloat">
    <span class="whatsapp-icon">💬</span>
</a>

<?php wp_footer(); ?>
</body>
</html>
