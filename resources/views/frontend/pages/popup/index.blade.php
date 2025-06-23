<!-- Popup Modal Form -->
<div id="consultationModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 720px;" role="document">
        <div class="modal-content p-0 border-0 rounded-4 shadow"
            style="background-image: url('frontend/assets/img/contacts_img_02.png'); background-size: cover;">
            <div class="modal-body position-relative p-5"
                style="background-color: rgba(255, 255, 255, 0.95); border-radius: 1rem;">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>

                <h2 class="fw-bold mb-2 text-dark text-uppercase">Đăng kí nhận tư vấn</h2>
                <p class="text-muted mb-4">Vui lòng điền thông tin, chúng tôi sẽ liên hệ sớm nhất có thể.</p>

                <form id="form-contact" method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <input type="hidden" name="service_id">

                    <div class="row g-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control input-custom"
                                placeholder="Họ và tên*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control input-custom" placeholder="Email*"
                                required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control input-custom"
                                placeholder="Số điện thoại*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="website" class="form-control input-custom"
                                placeholder="Website">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" placeholder="Nội dung tư vấn..."></textarea>
                        </div>
                        <div class="col-12 mt-4 text-center">
                            <button type="submit" class="btn btn-gradient">
                                <span><i class="fa fa-paper-plane me-2"></i>Gửi yêu cầu tư vấn</span>
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .input-custom {
        border: none;
        border-bottom: 2px solid #ccc;
        border-radius: 0;
        padding: 10px;
        background-color: transparent;
        transition: border-color 0.3s;
    }

    .input-custom:focus {
        border-color: #7b47f1;
        box-shadow: none;
    }

    .btn-gradient {
        position: relative;
        display: inline-block;
        padding: 10px 24px;
        border: none;
        border-radius: 40px;
        background: linear-gradient(120deg, #6a11cb, #ff6c5f);
        /* Tím xanh sang cam */
        color: white;
        font-weight: 600;
        font-size: 0.95rem;
        text-transform: uppercase;
        overflow: hidden;
        z-index: 1;
        background-size: 200% auto;
        background-position: left center;
        transition: all 0.4s ease-in-out;
        box-shadow: 0 4px 10px rgba(106, 17, 203, 0.2);
    }

    .btn-gradient:hover {
        background-position: right center;
        color: #fff;
        box-shadow: 0 6px 14px rgba(255, 108, 95, 0.4);
    }

    .btn-gradient span {
        position: relative;
        z-index: 2;
    }
</style>


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<script>

    jQuery(function() {

        jQuery(document).on('click', '.gt3_module_button__container', function() {
            jQuery('#consultationModal').modal('show');
            jQuery('input[name="service_id"]').val(jQuery(this).data('service_id'));
        });


        jQuery('#form-contact').on('submit', function(e) {
            e.preventDefault()
            let formData = new FormData(this)
            // console.log(formData);
            jQuery.ajax({
                url: '/send-contact',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    jQuery('input[name="service_id"]').val('');
                    jQuery('#form-contact')[0].reset();
                    jQuery('#consultationModal').modal('hide');

                    Swal.fire({
                        icon: 'success',
                        title: 'Gửi thành công!',
                        text: response.message,
                        confirmButtonText: 'OK'
                    });

                },
                error: (xhr) => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Thất bại!',
                        text: xhr.responseJSON.message ||
                            'Có lỗi xảy ra. Vui lòng thử lại!',
                    });
                }
            })
        })

    })
</script>
