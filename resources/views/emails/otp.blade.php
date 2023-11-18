<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <h2>Email OTP</h2>
        <p>Dear User,</p>
        <p>Thank you for choosing Aqaarat Platform. You recently requested an Email OTP. Your unique verification code is:</p>
        <p class="verification-code" style="font-size: 24px; font-weight: bold; color: #28a745;">{{ $otp }}</p>
        <p>Please use this code to complete the email verification process and secure your account.</p>
        <p>If you did not initiate this verification, please ignore this email or contact our support team.</p>
        <div class="footer">
            <p>Best Regards,<br>Aqaarat Platform</p>
            <p>
                <a href="{{ route('about-us') }}" style="color: #007bff; text-decoration: none;" target="_blank">About Us</a> |
                <a href="{{ route('contactForm') }}" style="color: #007bff; text-decoration: none;" target="_blank">Contact</a>
            </p>
        </div>
    </div>
</body>

</html>
