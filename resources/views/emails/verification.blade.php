<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
</head>
<body>
    <h1>Verifikasi Email Anda</h1>
    <p>Berikut adalah token verifikasi Anda:</p>
    <ul>
        @foreach($tokens as $token)
            <li>{{ $token }}</li>
        @endforeach
    </ul>
    <p>Token ini berlaku selama 2 menit. Terima kasih!</p>
</body>
</html>
