<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 20px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style=" border-collapse: collapse; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
                    <tr>
                        <td align="center" bgcolor="#4c77af" style="padding: 20px 0 20px 0; color: #ffffff; font-size: 24px; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                            Verifikasi Email Anda
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                        <p>Halo,</p>
                                        <p>Terima kasih telah mendaftar. Silakan masukan kode di bawah ini untuk memverifikasi alamat email Anda.</p>
                                    </td>
                                </tr>
                                <tr>
                                    @foreach($tokens as $token)
                                    <td style="padding: 20px 0 30px 0;" align="center">
                                        <a  style="background-color: #4c77af; color: #ffffff; padding: 10px 20px; text-decoration: none; border-radius: 5px;"><strong>{{ $token }}</strong></a>
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                        <p>Jika Anda tidak mendaftar di situs kami, Anda dapat mengabaikan email ini. <strong>jangan memberikan kode kepada siapun!</strong></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#f4f4f4" style="padding: 30px 30px 30px 30px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #888888; font-family: Arial, sans-serif; font-size: 12px;" align="center">
                                        &copy; 2024 Simplefied. Semua hak dilindungi.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
