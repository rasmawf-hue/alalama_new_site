<?php
/**
 * Template Name: Contact Page
 * Description: صفحة اتصل بنا - قالب العلامة للتقنية
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>اتصل بنا</h1>
            <p class="hero-subtitle">نحن هنا لخدمتك، تواصل معنا في أي وقت</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-container">
            <!-- Contact Information -->
            <div class="contact-info">
                <h3>معلومات التواصل</h3>
                
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-details">
                        <h4>العنوان</h4>
                        <p><?php echo esc_html(get_theme_mod('alalama_address', 'حي دمشق، طرابلس، ليبيا')); ?></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div class="contact-details">
                        <h4>الهاتف</h4>
                        <p>
                            <a href="tel:<?php echo esc_attr(get_theme_mod('alalama_phone_1', '+218915222252')); ?>">
                                <?php echo esc_html(get_theme_mod('alalama_phone_1', '+218 91 5222252')); ?>
                            </a>
                            <br>
                            <a href="tel:<?php echo esc_attr(get_theme_mod('alalama_phone_2', '+218925222252')); ?>">
                                <?php echo esc_html(get_theme_mod('alalama_phone_2', '+218 92 5222252')); ?>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <div class="contact-details">
                        <h4>البريد الإلكتروني</h4>
                        <p>
                            <a href="mailto:<?php echo esc_attr(get_theme_mod('alalama_email', 'info@al3lama.ly')); ?>">
                                <?php echo esc_html(get_theme_mod('alalama_email', 'info@al3lama.ly')); ?>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">⏰</div>
                    <div class="contact-details">
                        <h4>ساعات العمل</h4>
                        <p>السبت - الخميس: 9:00 ص - 6:00 م<br>الجمعة: مغلق</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">💬</div>
                    <div class="contact-details">
                        <h4>واتساب</h4>
                        <p>
                            <a href="https://wa.me/<?php echo esc_attr(get_theme_mod('alalama_whatsapp', '218915222252')); ?>" target="_blank" rel="noopener">
                                تواصل عبر واتساب
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h3>أرسل لنا رسالة</h3>
                <?php echo do_shortcode('[contact-form-7 id="1" title="نموذج الاتصال"]'); ?>
                
                <!-- Fallback form if CF7 not installed -->
                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" id="contactForm">
                    <input type="hidden" name="action" value="submit_contact_form">
                    <?php wp_nonce_field('contact_form_submit', 'contact_nonce'); ?>
                    
                    <div class="form-group">
                        <label for="name">الاسم الكامل *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">البريد الإلكتروني *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">رقم الهاتف</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">الموضوع *</label>
                        <select id="subject" name="subject" required>
                            <option value="">اختر الموضوع</option>
                            <option value="استفسار عن منتج">استفسار عن منتج</option>
                            <option value="طلب عرض سعر">طلب عرض سعر</option>
                            <option value="دعم فني">دعم فني</option>
                            <option value="شكوى">شكوى</option>
                            <option value="آخر">آخر</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">الرسالة *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">إرسال الرسالة</button>
                </form>
            </div>
        </div>

        <!-- Map Section (Optional) -->
        <div style="margin-top: 4rem;">
            <h3 style="text-align: center; margin-bottom: 2rem;">موقعنا على الخريطة</h3>
            <div style="border-radius: 15px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.824!2d13.1913!3d32.8872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDUzJzE0LjAiTiAxM8KwMTEnMjguNyJF!5e0!3m2!1sen!2sly!4v1234567890"
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
