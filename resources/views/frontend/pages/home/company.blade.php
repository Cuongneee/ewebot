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

    .highlight::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: -8%;
        transform: translateX(-50%);
        width: 140px;
        height: 3px;
        background-color: #dc3545;
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
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
    }

    .logo-kingnet:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
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
