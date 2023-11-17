<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Your styles here */
    </style>
</head>

<body>
    <div class="container">
        <h2>Email Verification Code</h2>
        <p>Dear User,</p>
        <p>You requested an email verification code. Your email verification code is:</p>
        <p class="verification-code">{{ $verificationCode }}</p>
        <p>Please use this code to verify your email address.</p>
        <p>If you did not request this verification, you can safely ignore this email.</p>
        <div class="footer">
            <p>Best Regards,<br>Aqaarat Platform</p>
            <p>
                <a href="{{ route('about-us') }}" target="_blank">About Us</a> |
                <a href="{{ route('contactForm') }}" target="_blank">Contact</a>
            </p>
        </div>
    </div>
</body>

</html>
