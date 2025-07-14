<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .client-section {
        padding: 80px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 60px;
        font-size: 2.5rem;
        font-weight: 600;
        color: #333;
    }

    .highlight {
        color: #dc3545;
        position: relative;
    }

    .client-logo {
        background: white;
        border-radius: 10px;
        padding: 30px 20px;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .client-logo:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .client-logo img {
        max-width: 100%;
        max-height: 60px;
        object-fit: contain;
    }

    .logo-text {
        font-weight: bold;
        font-size: 1.1rem;
        color: #333;
        text-align: center;
    }

    .logo-kingnet {
        /* Hiệu ứng 3D và đổ bóng mặc định */
        transform: perspective(1000px) rotateX(5deg) rotateY(2deg) translateZ(20px);
        box-shadow:
            0 15px 35px rgba(0, 0, 0, 0.15),
            0 5px 15px rgba(0, 0, 0, 0.1),
            inset 0 1px 0 rgba(255, 255, 255, 0.6);

        /* Styling cơ bản */
        border-radius: 30px;
        padding: 15px;
        background: rgb(252, 252, 252);
        border: 1px solid rgba(255, 255, 255, 0.8);

        /* Transition mượt mà */
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);

        /* Tạo không gian 3D */
        transform-style: preserve-3d;
        position: relative;

        /* Filter để tăng độ sắc nét */
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
    }

    .logo-kingnet::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg,
                rgba(255, 255, 255, 0.4) 0%,
                rgba(255, 255, 255, 0.1) 50%,
                rgba(255, 255, 255, 0.2) 100%);
        border-radius: 12px;
        pointer-events: none;
        z-index: 1;
    }

    /* Hiệu ứng hover nâng cao */
    .logo-kingnet:hover {
        transform: perspective(1000px) rotateX(8deg) rotateY(5deg) translateZ(30px) scale(1.05);

        box-shadow:
            0 25px 50px rgba(0, 0, 0, 0.2),
            0 10px 25px rgba(0, 0, 0, 0.15),
            inset 0 2px 0 rgba(255, 255, 255, 0.8);

        filter: drop-shadow(0 8px 16px rgba(0, 0, 0, 0.15));
    }
</style>


<section class="client-section">
    <div class="container">
        <h2 class="section-title">
            Khách hàng của <span class="highlight">SGO MEDIA</span>
        </h2>

        <div class="row">
            <!-- Row 1 -->
            @foreach ($customers as $customer)
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-1 mb-1">
                    <img class="logo-text logo-kingnet" src="{{ showImage($customer->image) }}" alt="">
                </div>
            @endforeach

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
