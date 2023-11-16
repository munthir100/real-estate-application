<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        .verification-code {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }

        .footer {
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Email Verification Code</h2>
        <p>Dear User,</p>
        <p>Your email verification code is:</p>
        <p class="verification-code">{{ $verificationCode }}</p>
        <p>Please use this code to verify your email address.</p>
        <p>If you did not request this verification, you can safely ignore this email.</p>
        <div class="footer">
            <p>Best Regards,<br>Aqaarat platform</p>
        </div>
    </div>
</body>

</html>