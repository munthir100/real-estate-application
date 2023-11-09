<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification Code</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        .verification-code {
            font-size: 24px;
            font-weight: bold;
            color: #4285f4;
            margin: 20px 0;
        }

        .footer {
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Email Verification Code</h1>
        <p>Thank you for signing up! Please use the following verification code to verify your email:</p>
        <div class="verification-code">{{ $verificationCode }}</div>
        <p>If you didn't sign up, please ignore this email.</p>
        <p class="footer">&copy; {{ date('Y') }} Your Company Name</p>
    </div>
</body>
</html>
