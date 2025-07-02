<style>
    :root {
        --primary-red: #dc2626;
        --dark-red: #b91c1c;
        --black: #1f2937;
        --white: #ffffff;
        --light-gray: #f8fafc;
        --text-gray: #6b7280;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--light-gray);
        color: var(--black);
        line-height: 1.6;
        overflow-x: hidden;
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Decorative Background Dots with Enhanced Animation */
    .bg-decoration {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
        overflow: hidden;
    }

    .dot {
        position: absolute;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        opacity: 0.4;
        transition: all 0.3s ease;
    }

    .dot-red {
        background: var(--primary-red);
        box-shadow: 0 0 20px rgba(220, 38, 38, 0.3);
    }

    .dot-black {
        background: var(--black);
        box-shadow: 0 0 20px rgba(31, 41, 55, 0.3);
    }

    .dot:nth-child(1) {
        top: 10%;
        left: 5%;
        animation: floatComplex 8s ease-in-out infinite;
    }

    .dot:nth-child(2) {
        top: 20%;
        right: 10%;
        animation: floatComplex 10s ease-in-out infinite 1s;
    }

    .dot:nth-child(3) {
        top: 40%;
        left: 15%;
        animation: floatComplex 12s ease-in-out infinite 2s;
    }

    .dot:nth-child(4) {
        top: 60%;
        right: 20%;
        animation: floatComplex 9s ease-in-out infinite 3s;
    }

    .dot:nth-child(5) {
        top: 80%;
        left: 8%;
        animation: floatComplex 11s ease-in-out infinite 4s;
    }

    .dot:nth-child(6) {
        top: 30%;
        left: 80%;
        animation: floatComplex 7s ease-in-out infinite 2.5s;
    }

    .dot:nth-child(7) {
        top: 70%;
        right: 5%;
        animation: floatComplex 13s ease-in-out infinite 1.5s;
    }

    .dot:nth-child(8) {
        top: 50%;
        left: 50%;
        animation: floatComplex 6s ease-in-out infinite 3.5s;
    }

    @keyframes floatComplex {

        0%,
        100% {
            transform: translateY(0px) translateX(0px) scale(1) rotate(0deg);
            opacity: 0.4;
        }

        25% {
            transform: translateY(-30px) translateX(20px) scale(1.3) rotate(90deg);
            opacity: 0.8;
        }

        50% {
            transform: translateY(-20px) translateX(-15px) scale(0.8) rotate(180deg);
            opacity: 0.6;
        }

        75% {
            transform: translateY(10px) translateX(25px) scale(1.1) rotate(270deg);
            opacity: 0.9;
        }
    }

    /* Header Section with Animations */
    .intro-header {
        text-align: center;
        padding: 100px 0 80px;
        background: var(--white);
        position: relative;
        overflow: hidden;
    }

    .intro-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(220, 38, 38, 0.05) 0%, transparent 70%);
        animation: rotateBackground 20s linear infinite;
    }

    @keyframes rotateBackground {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .header-subtitle {
        font-size: 1rem;
        font-weight: 600;
        color: var(--primary-red);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
        opacity: 0;
        animation: slideInFromTop 1s ease-out 0.3s forwards;
    }

    .header-title {
        font-size: 3.5rem;
        font-weight: 800;
        color: var(--black);
        margin-bottom: 30px;
        line-height: 1.2;
        opacity: 0;
        animation: slideInFromTop 1s ease-out 0.6s forwards;
        position: relative;
    }

    .header-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-red), var(--dark-red));
        animation: expandLine 1s ease-out 1.2s forwards;
    }

    .header-description {
        font-size: 1.2rem;
        color: var(--text-gray);
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
        opacity: 0;
        animation: slideInFromTop 1s ease-out 0.9s forwards;
    }

    @keyframes slideInFromTop {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes expandLine {
        from {
            width: 0;
        }

        to {
            width: 100px;
        }
    }

    /* Main Content with Scroll Animations */
    .intro-content {
        padding: 80px 0;
        position: relative;
    }

    .intro-section {
        margin: 100px 0;
        position: relative;
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .intro-section.animate {
        opacity: 1;
        transform: translateY(0);
    }

    .section-container {
        display: flex;
        align-items: center;
        gap: 80px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .section-container.reverse {
        flex-direction: row-reverse;
    }

    .section-visual {
        flex: 0 0 300px;
        position: relative;
    }

    .visual-circle {
        width: 300px;
        height: 300px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin: 0 auto;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
    }

    .visual-circle:hover {
        transform: scale(1.05) rotate(5deg);
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.2) !important;
    }

    .visual-circle::before {
        content: '';
        position: absolute;
        inset: -10px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--primary-red), transparent, var(--black));
        opacity: 0;
        transition: opacity 0.4s ease;
        animation: rotate 3s linear infinite;
    }

    .visual-circle:hover::before {
        opacity: 0.3;
    }

    @keyframes rotate {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .circle-red {
        background: linear-gradient(135deg, var(--primary-red) 0%, var(--dark-red) 100%);
        box-shadow: 0 20px 60px rgba(220, 38, 38, 0.3);
    }

    .circle-black {
        background: linear-gradient(135deg, var(--black) 0%, #374151 100%);
        box-shadow: 0 20px 60px rgba(31, 41, 55, 0.3);
    }

    .circle-outline {
        background: var(--white);
        border: 4px solid var(--primary-red);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    }

    .visual-icon {
        font-size: 4rem;
        color: var(--white);
        transition: all 0.4s ease;
        position: relative;
        z-index: 2;
    }

    .visual-icon.dark {
        color: var(--black);
    }

    .visual-circle:hover .visual-icon {
        transform: scale(1.2) rotate(-5deg);
        text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    }

    .section-content {
        flex: 1;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--black);
        margin-bottom: 25px;
        line-height: 1.3;
        position: relative;
        overflow: hidden;
    }

    .section-title::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: -100%;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-red), var(--dark-red));
        transition: left 0.6s ease;
    }

    .intro-section.animate .section-title::before {
        left: 0;
    }

    .section-description {
        font-size: 1.1rem;
        color: var(--text-gray);
        line-height: 1.8;
        margin-bottom: 30px;
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .feature-item {
        display: flex;
        align-items: center;
        margin: 15px 0;
        font-size: 1.1rem;
        color: var(--black);
        opacity: 0;
        transform: translateX(-20px);
        transition: all 0.4s ease;
    }

    .intro-section.animate .feature-item {
        opacity: 1;
        transform: translateX(0);
    }

    .intro-section.animate .feature-item:nth-child(1) {
        transition-delay: 0.2s;
    }

    .intro-section.animate .feature-item:nth-child(2) {
        transition-delay: 0.4s;
    }

    .intro-section.animate .feature-item:nth-child(3) {
        transition-delay: 0.6s;
    }

    .feature-item:hover {
        transform: translateX(10px);
        color: var(--primary-red);
    }

    .feature-icon {
        width: 24px;
        height: 24px;
        background: var(--primary-red);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .feature-item:hover .feature-icon {
        background: var(--dark-red);
        transform: scale(1.2) rotate(360deg);
        box-shadow: 0 0 15px rgba(220, 38, 38, 0.5);
    }

    .feature-icon i {
        font-size: 0.8rem;
        color: var(--white);
    }

    /* Enhanced Stats Section */
    .stats-section {
        background: var(--black);
        color: var(--white);
        padding: 80px 0;
        margin: 100px 0;
        position: relative;
        overflow: hidden;
    }

    .stats-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(220, 38, 38, 0.1), transparent);
        animation: shimmer 3s ease-in-out infinite;
    }

    @keyframes shimmer {
        0% {
            left: -100%;
        }

        100% {
            left: 100%;
        }
    }

    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .stat-item {
        padding: 30px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 10px;
        position: relative;
        overflow: hidden;
    }

    .stat-item::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, var(--primary-red), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .stat-item:hover {
        transform: translateY(-10px) scale(1.05);
        background: rgba(255, 255, 255, 0.05);
    }

    .stat-item:hover::before {
        opacity: 0.1;
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 800;
        color: var(--primary-red);
        margin-bottom: 10px;
        transition: all 0.4s ease;
        position: relative;
        z-index: 2;
    }

    .stat-item:hover .stat-number {
        color: var(--white);
        text-shadow: 0 0 20px var(--primary-red);
        transform: scale(1.1);
    }

    .stat-label {
        font-size: 1.1rem;
        color: var(--white);
        font-weight: 500;
        position: relative;
        z-index: 2;
    }

    /* Counter Animation */
    .stat-number[data-count] {
        opacity: 0;
    }

    .stat-number.counting {
        opacity: 1;
    }

    /* Pulse Animation for Important Elements */
    .pulse {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(220, 38, 38, 0.7);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(220, 38, 38, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(220, 38, 38, 0);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .header-title {
            font-size: 2.5rem;
        }

        .section-container {
            flex-direction: column !important;
            gap: 50px;
            text-align: center;
        }

        .section-visual {
            flex: none;
        }

        .visual-circle {
            width: 250px;
            height: 250px;
        }

        .visual-icon {
            font-size: 3rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .stats-container {
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .stat-number {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 480px) {
        .stats-container {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Loading Overlay -->
<div class="loading-overlay" id="loadingOverlay">
    <div class="loader"></div>
</div>

<!-- Background Decoration -->
<div class="bg-decoration">
    <div class="dot dot-red"></div>
    <div class="dot dot-black"></div>
    <div class="dot dot-red"></div>
    <div class="dot dot-black"></div>
    <div class="dot dot-red"></div>
    <div class="dot dot-black"></div>
    <div class="dot dot-red"></div>
    <div class="dot dot-black"></div>
</div>

<!-- Header Section -->
<section class="intro-header">
    <div class="container">
        <div class="header-subtitle">VỀ CHÚNG TÔI</div>
        <h1 class="header-title">Câu Chuyện Của Chúng Tôi</h1>
        <p class="header-description">
            SGO Việt Nam với kinh nghiệm 6+
            năm về thiết kế website, ,Mobile app,
            các phần mềm quản lý CRM cùng với
            việc triển khai các các chiến dịch
            Digital Marketing, đặc biệt đối với giải
            pháp SEO Tổng thể chúng tôi tự tin là
            một trong những Agency khép kín có
            đủ năng lực cam kết giúp các doanh
            nghiệp phát triển và gia tăng doanh
            số trong tương lai.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="intro-content">
    <div class="container-fluid">
        <!-- About Us Section -->
        <div class="intro-section" data-aos="fade-up">
            <div class="section-container">
                <div class="section-visual">
                    <div class="visual-circle circle-red pulse">
                        <i class="fas fa-users visual-icon"></i>
                    </div>
                </div>
                <div class="section-content">
                    <h2 class="section-title">Đội Ngũ Chuyên Nghiệp</h2>
                    <p class="section-description">
                        Với đội ngũ hơn 50 chuyên gia giàu kinh nghiệm trong các lĩnh vực Marketing, Thiết kế, và Phát
                        triển công nghệ,
                        chúng tôi cam kết mang đến những giải pháp tối ưu nhất cho doanh nghiệp của bạn.
                    </p>
                    <ul class="feature-list">
                        <li class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check"></i></div>
                            Chuyên gia Marketing với 10+ năm kinh nghiệm
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check"></i></div>
                            Đội ngũ thiết kế sáng tạo và chuyên nghiệp
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check"></i></div>
                            Hỗ trợ khách hàng 24/7
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="intro-section" data-aos="fade-up">
            <div class="section-container reverse">
                <div class="section-visual">
                    <div class="visual-circle circle-black">
                        <i class="fas fa-cogs visual-icon"></i>
                    </div>
                </div>
                <div class="section-content">
                    <h2 class="section-title">Dịch Vụ Toàn Diện</h2>
                    <p class="section-description">
                        Chúng tôi cung cấp giải pháp Marketing tổng thể từ chiến lược, thiết kế, triển khai đến đo lường
                        hiệu quả.
                        Mỗi dự án đều được tùy chỉnh riêng biệt để phù hợp với mục tiêu và ngân sách của khách hàng.
                    </p>
                    <ul class="feature-list">
                        <li class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check"></i></div>
                            Digital Marketing & SEO
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check"></i></div>
                            Thiết kế Website & Mobile App
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check"></i></div>
                            Quản lý Social Media
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Values Section -->
        <div class="intro-section" data-aos="fade-up">
            <div class="section-container">
                <div class="section-visual">
                    <div class="visual-circle circle-outline">
                        <i class="fas fa-heart visual-icon dark"></i>
                    </div>
                </div>
                <div class="section-content">
                    <h2 class="section-title">Giá Trị Cốt Lõi</h2>
                    <p class="section-description">
                        Chúng tôi tin rằng thành công của khách hàng chính là thành công của chúng tôi.
                        Với phương châm "Khách hàng là trung tâm", chúng tôi luôn lắng nghe, thấu hiểu và đồng hành
                        cùng doanh nghiệp trong hành trình phát triển.
                    </p>
                    <ul class="feature-list">
                        <li class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check"></i></div>
                            Chất lượng dịch vụ hàng đầu
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check"></i></div>
                            Cam kết kết quả đo lường được
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check"></i></div>
                            Đối tác tin cậy lâu dài
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-number" data-count="500">0</div>
                <div class="stat-label">Dự Án Hoàn Thành</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="200">0</div>
                <div class="stat-label">Khách Hàng Tin Tưởng</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="8">0</div>
                <div class="stat-label">Năm Kinh Nghiệm</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="50">0</div>
                <div class="stat-label">Chuyên Gia</div>
            </div>
        </div>
    </div>
</section>

<script>
    // Loading Animation
    window.addEventListener('load', function() {
        setTimeout(() => {
            document.getElementById('loadingOverlay').classList.add('fade-out');
        }, 1000);
    });

    // Scroll Animation Observer
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);

    // Observe all intro sections
    document.querySelectorAll('.intro-section').forEach(section => {
        observer.observe(section);
    });

    // Counter Animation
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 100;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current) + (target >= 100 ? '+' : '');
        }, 20);
    }

    // Stats Counter Observer
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('.stat-number[data-count]');
                counters.forEach(counter => {
                    if (!counter.classList.contains('counting')) {
                        counter.classList.add('counting');
                        const target = parseInt(counter.getAttribute('data-count'));
                        animateCounter(counter, target);
                    }
                });
            }
        });
    }, {
        threshold: 0.5
    });

    statsObserver.observe(document.querySelector('.stats-section'));

    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add parallax effect to background dots
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const dots = document.querySelectorAll('.dot');

        dots.forEach((dot, index) => {
            const speed = 0.5 + (index * 0.1);
            dot.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Add mouse follow effect for visual circles
    document.querySelectorAll('.visual-circle').forEach(circle => {
        circle.addEventListener('mousemove', (e) => {
            const rect = circle.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            circle.style.transform = `scale(1.05) translate(${x * 0.1}px, ${y * 0.1}px)`;
        });

        circle.addEventListener('mouseleave', () => {
            circle.style.transform = 'scale(1) translate(0, 0)';
        });
    });
</script>
