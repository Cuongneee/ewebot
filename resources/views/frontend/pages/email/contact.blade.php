<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Yêu cầu tư vấn mới</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
            color: #333;
        }

        .email-wrapper {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }

        h2 {
            color: #7b47f1;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        p {
            margin: 10px 0;
            line-height: 1.6;
        }

        strong {
            color: #555;
        }

        .footer-note {
            margin-top: 30px;
            font-style: italic;
            font-size: 0.95em;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="email-wrapper">
        <h2>📩 Yêu cầu tư vấn mới từ khách hàng</h2>

        <p><strong>Họ tên:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Điện thoại:</strong> {{ $data['phone'] }}</p>
        <p><strong>Website:</strong> {{ $data['website'] ?? 'Không có❗' }}</p>
        @if (!empty($data['category_name']) || !empty($data['service_name']))
            <p><strong>Dịch vụ quan tâm:</strong> {{ $data['category_name'] ?? 'Không có' }} - {{ $data['service_name'] ?? 'Không có' }}
            </p>
        @endif

        <p><strong>Nội dung tư vấn:</strong><br>{{ $data['message'] ?? 'Không có nội dung.' }}</p>

        <p class="footer-note">Vui lòng kiểm tra và phản hồi yêu cầu này sớm nhất có thể. Xin cảm ơn!</p>
    </div>
</body>

</html>
