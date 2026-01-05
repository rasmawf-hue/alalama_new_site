<?php
/**
 * Template Name: Offers Page - صفحة العروض والتخفيضات
 * Description: قالب صفحة العروض والتخفيضات لشركة العلامة للتقنية
 * Author: Al3lama IT Solutions
 */

get_header();
?>

<!-- قسم الهيدر -->
<section style="background: linear-gradient(135deg, #0D47A1 0%, #1976D2 50%, #42A5F5 100%); padding: 100px 0; text-align: center; color: white; position: relative; overflow: hidden;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('data:image/svg+xml,%3Csvg width="100" height="100" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M0 0h100v100H0z" fill="none"/%3E%3Cpath d="M0 0l50 50M50 50l50-50M50 50l50 50M50 50L0 100" stroke="%23ffffff" stroke-width="0.5" opacity="0.1"/%3E%3C/svg%3E'); opacity: 0.1;"></div>
    <div class="container" style="position: relative; z-index: 1; max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <h1 style="font-size: 3.5rem; font-weight: 800; margin-bottom: 20px; text-shadow: 2px 4px 8px rgba(0,0,0,0.3); animation: fadeInDown 1s ease;">🎯 عروض وتخفيضات حصرية</h1>
        <p style="font-size: 1.4rem; opacity: 0.95; margin-bottom: 30px; line-height: 1.8;">لا تفوت فرصة الحصول على أفضل العروض على حلولنا التقنية</p>
        <div style="display: inline-flex; gap: 15px; flex-wrap: wrap; justify-content: center;">
            <a href="#offers" style="background: white; color: #0D47A1; padding: 15px 40px; border-radius: 50px; font-weight: 700; font-size: 1.1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2); transition: all 0.3s ease; display: inline-block;">استكشف العروض ↓</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" style="background: rgba(255,255,255,0.2); color: white; padding: 15px 40px; border-radius: 50px; font-weight: 700; font-size: 1.1rem; text-decoration: none; border: 2px solid white; backdrop-filter: blur(10px); transition: all 0.3s ease; display: inline-block;">تواصل معنا ✉</a>
        </div>
    </div>
</section>

<!-- قسم العروض الرئيسية -->
<section id="offers" style="padding: 80px 0; background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-size: 2.8rem; color: #0D47A1; font-weight: 800; margin-bottom: 15px; position: relative; display: inline-block;">
                <span style="background: linear-gradient(135deg, #0D47A1, #42A5F5); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">العروض الحالية 🔥</span>
            </h2>
            <p style="font-size: 1.2rem; color: #666; max-width: 600px; margin: 0 auto;">عروض محدودة لفترة محدودة - لا تفوتك الفرصة!</p>
        </div>

        <!-- بطاقات العروض -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; margin-bottom: 50px;">
            
            <!-- عرض 1: نظام POS الشامل -->
            <div style="background: white; border-radius: 20px; padding: 35px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); transition: all 0.4s ease; position: relative; overflow: hidden; border: 3px solid transparent; background-clip: padding-box;">
                <!-- شارة الخصم -->
                <div style="position: absolute; top: 20px; right: 20px; background: linear-gradient(135deg, #FF6B6B 0%, #EE5A6F 100%); color: white; padding: 10px 20px; border-radius: 50px; font-weight: 800; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(255,107,107,0.4); z-index: 10;">
                    🔥 خصم 25%
                </div>
                
                <!-- الأيقونة -->
                <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #667EEA 0%, #764BA2 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 8px 25px rgba(102,126,234,0.3);">
                    <span style="font-size: 3.5rem;">🖥️</span>
                </div>
                
                <h3 style="font-size: 1.8rem; color: #1a1a1a; font-weight: 800; margin-bottom: 15px; text-align: center;">نظام POS الشامل 📊</h3>
                <p style="color: #666; font-size: 1.05rem; line-height: 1.7; margin-bottom: 25px; text-align: center;">نظام نقاط بيع كامل مع طابعة، درج نقدي، وماسح باركود</p>
                
                <!-- الأسعار -->
                <div style="text-align: center; margin-bottom: 25px;">
                    <div style="margin-bottom: 10px;">
                        <span style="font-size: 1.3rem; color: #999; text-decoration: line-through; font-weight: 500;">15,000 د.ل</span>
                    </div>
                    <div>
                        <span style="font-size: 2.8rem; color: #FF6B6B; font-weight: 900; letter-spacing: -1px;">11,250 د.ل</span>
                        <span style="font-size: 1.1rem; color: #666; margin-right: 8px;">فقط</span>
                    </div>
                </div>
                
                <!-- زر العرض -->
                <a href="<?php echo esc_url(home_url('/contact')); ?>" style="display: block; background: linear-gradient(135deg, #667EEA 0%, #764BA2 100%); color: white; text-align: center; padding: 18px 30px; border-radius: 15px; text-decoration: none; font-weight: 700; font-size: 1.1rem; box-shadow: 0 6px 20px rgba(102,126,234,0.4); transition: all 0.3s ease;">
                    احصل على العرض الآن ➡️
                </a>
            </div>

            <!-- عرض 2: نظام ERP المتكامل -->
            <div style="background: white; border-radius: 20px; padding: 35px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); transition: all 0.4s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 20px; right: 20px; background: linear-gradient(135deg, #11998E 0%, #38EF7D 100%); color: white; padding: 10px 20px; border-radius: 50px; font-weight: 800; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(17,153,142,0.4); z-index: 10;">
                    💰 خصم 30%
                </div>
                
                <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #11998E 0%, #38EF7D 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 8px 25px rgba(17,153,142,0.3);">
                    <span style="font-size: 3.5rem;">💼</span>
                </div>
                
                <h3 style="font-size: 1.8rem; color: #1a1a1a; font-weight: 800; margin-bottom: 15px; text-align: center;">نظام ERP المتكامل 🚀</h3>
                <p style="color: #666; font-size: 1.05rem; line-height: 1.7; margin-bottom: 25px; text-align: center;">حل شامل لإدارة الموارد والحسابات والمخزون</p>
                
                <div style="text-align: center; margin-bottom: 25px;">
                    <div style="margin-bottom: 10px;">
                        <span style="font-size: 1.3rem; color: #999; text-decoration: line-through; font-weight: 500;">25,000 د.ل</span>
                    </div>
                    <div>
                        <span style="font-size: 2.8rem; color: #11998E; font-weight: 900; letter-spacing: -1px;">17,500 د.ل</span>
                        <span style="font-size: 1.1rem; color: #666; margin-right: 8px;">فقط</span>
                    </div>
                </div>
                
                <a href="<?php echo esc_url(home_url('/contact')); ?>" style="display: block; background: linear-gradient(135deg, #11998E 0%, #38EF7D 100%); color: white; text-align: center; padding: 18px 30px; border-radius: 15px; text-decoration: none; font-weight: 700; font-size: 1.1rem; box-shadow: 0 6px 20px rgba(17,153,142,0.4); transition: all 0.3s ease;">
                    احصل على العرض الآن ➡️
                </a>
            </div>

            <!-- عرض 3: نظام الكاميرات الاحترافي -->
            <div style="background: white; border-radius: 20px; padding: 35px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); transition: all 0.4s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 20px; right: 20px; background: linear-gradient(135deg, #F093FB 0%, #F5576C 100%); color: white; padding: 10px 20px; border-radius: 50px; font-weight: 800; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(240,147,251,0.4); z-index: 10;">
                    ⭐ خصم 20%
                </div>
                
                <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #F093FB 0%, #F5576C 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 8px 25px rgba(240,147,251,0.3);">
                    <span style="font-size: 3.5rem;">📹</span>
                </div>
                
                <h3 style="font-size: 1.8rem; color: #1a1a1a; font-weight: 800; margin-bottom: 15px; text-align: center;">نظام كاميرات مراقبة 🔒</h3>
                <p style="color: #666; font-size: 1.05rem; line-height: 1.7; margin-bottom: 25px; text-align: center;">نظام مراقبة متكامل مع 8 كاميرات HD وجهاز DVR</p>
                
                <div style="text-align: center; margin-bottom: 25px;">
                    <div style="margin-bottom: 10px;">
                        <span style="font-size: 1.3rem; color: #999; text-decoration: line-through; font-weight: 500;">12,000 د.ل</span>
                    </div>
                    <div>
                        <span style="font-size: 2.8rem; color: #F5576C; font-weight: 900; letter-spacing: -1px;">9,600 د.ل</span>
                        <span style="font-size: 1.1rem; color: #666; margin-right: 8px;">فقط</span>
                    </div>
                </div>
                
                <a href="<?php echo esc_url(home_url('/contact')); ?>" style="display: block; background: linear-gradient(135deg, #F093FB 0%, #F5576C 100%); color: white; text-align: center; padding: 18px 30px; border-radius: 15px; text-decoration: none; font-weight: 700; font-size: 1.1rem; box-shadow: 0 6px 20px rgba(240,147,251,0.4); transition: all 0.3s ease;">
                    احصل على العرض الآن ➡️
                </a>
            </div>

        </div>

        <!-- قسم الدعوة للعمل (CTA) -->
        <div style="background: linear-gradient(135deg, #667EEA 0%, #764BA2 100%); border-radius: 25px; padding: 60px 40px; text-align: center; box-shadow: 0 15px 50px rgba(102,126,234,0.3); margin-top: 60px;">
            <h2 style="font-size: 2.5rem; color: white; font-weight: 800; margin-bottom: 20px;">🎉 هل أنت جاهز للبدء؟</h2>
            <p style="font-size: 1.3rem; color: rgba(255,255,255,0.95); margin-bottom: 35px; max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.8;">
                اتصل بنا اليوم للحصول على استشارة مجانية وأفضل العروض الحصرية
            </p>
            <div style="display: inline-flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" style="background: white; color: #667EEA; padding: 18px 45px; border-radius: 50px; font-weight: 800; font-size: 1.2rem; text-decoration: none; box-shadow: 0 8px 25px rgba(0,0,0,0.2); transition: all 0.3s ease; display: inline-block;">
                    📧 تواصل معنا الآن
                </a>
                <a href="tel:+218912345678" style="background: rgba(255,255,255,0.2); color: white; padding: 18px 45px; border-radius: 50px; font-weight: 800; font-size: 1.2rem; text-decoration: none; border: 3px solid white; backdrop-filter: blur(10px); transition: all 0.3s ease; display: inline-block;">
                    📞 اتصل بنا
                </a>
            </div>
        </div>

    </div>
</section>

<!-- قسم الميزات -->
<section style="padding: 80px 0; background: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-size: 2.5rem; color: #0D47A1; font-weight: 800; margin-bottom: 15px;">✨ لماذا نحن؟</h2>
            <p style="font-size: 1.2rem; color: #666;">مميزات تجعلنا الخيار الأمثل</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 35px;">
            
            <div style="text-align: center; padding: 30px; background: linear-gradient(to bottom, #f8f9fa, white); border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                <div style="font-size: 4rem; margin-bottom: 20px;">✅</div>
                <h3 style="font-size: 1.5rem; color: #1a1a1a; font-weight: 700; margin-bottom: 12px;">ضمان شامل</h3>
                <p style="color: #666; font-size: 1rem; line-height: 1.7;">ضمان عامين على جميع المنتجات</p>
            </div>

            <div style="text-align: center; padding: 30px; background: linear-gradient(to bottom, #f8f9fa, white); border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                <div style="font-size: 4rem; margin-bottom: 20px;">🚀</div>
                <h3 style="font-size: 1.5rem; color: #1a1a1a; font-weight: 700; margin-bottom: 12px;">تركيب سريع</h3>
                <p style="color: #666; font-size: 1rem; line-height: 1.7;">تركيب وتفعيل فوري في نفس اليوم</p>
            </div>

            <div style="text-align: center; padding: 30px; background: linear-gradient(to bottom, #f8f9fa, white); border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                <div style="font-size: 4rem; margin-bottom: 20px;">👨‍💻</div>
                <h3 style="font-size: 1.5rem; color: #1a1a1a; font-weight: 700; margin-bottom: 12px;">دعم فني 24/7</h3>
                <p style="color: #666; font-size: 1rem; line-height: 1.7;">فريق دعم متواجد على مدار الساعة</p>
            </div>

            <div style="text-align: center; padding: 30px; background: linear-gradient(to bottom, #f8f9fa, white); border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                <div style="font-size: 4rem; margin-bottom: 20px;">🎯</div>
                <h3 style="font-size: 1.5rem; color: #1a1a1a; font-weight: 700; margin-bottom: 12px;">جودة عالية</h3>
                <p style="color: #666; font-size: 1rem; line-height: 1.7;">منتجات أصلية بأعلى معايير الجودة</p>
            </div>

        </div>
    </div>
</section>

<style>
/* أنيميشنات CSS */
@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* تأثيرات Hover */
section#offers .container > div > div:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.15) !important;
}

section:last-of-type .container > div > div:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
}

/* Responsive Design */
@media (max-width: 768px) {
    section#offers h1,
    section h1 {
        font-size: 2.2rem !important;
    }
    
    section#offers h2,
    section h2 {
        font-size: 1.8rem !important;
    }
    
    section#offers h3,
    section h3 {
        font-size: 1.4rem !important;
    }
    
    .container {
        padding: 0 15px !important;
    }
}
</style>

<?php
get_footer();
?>
