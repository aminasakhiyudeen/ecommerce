<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to {{ config('app.name') }}</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px #ddd;">
        <h2 style="color: #333;">Welcome, {{ $user->name }} 👋</h2>

        <p>Thank you for registering with <strong>{{ config('app.name') }}</strong>!</p>

        <p>You can now log in and get started with your account.</p>

        <a href="{{ route('login') }}"
           style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">
           Log in to your account
        </a>

        <p style="margin-top: 30px; font-size: 13px; color: #888;">
            If you did not sign up for an account, please ignore this email.
        </p>
    </div>
</body>
</html>
