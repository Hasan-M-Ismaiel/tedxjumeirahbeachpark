<!DOCTYPE html>
<html>

<head>
    <title>TEDxJumeirahBeachPark Confirmation Mail</title>
</head>

<body>
    <p>{{ $data['title'] }}</p>
    <p>Thank you for your interest in volunteering with us. We truly appreciate it!</p>
    <p>As a volunteer, your dedication and enthusiasm are the driving forces behind the seamless execution of
        TEDxJumeirahBeachPark. Our team will review the application carefully and reach out to you if your profile
        meets our expectations. Get ready for an exciting journey of teamwork and inspiration!</p>

    <p>If you have any questions in the meantime, please feel free to reach out to us.</p>
    <p>Thank you once again for your application. We look forward to the possibility of working with you!</p>

    <p>Warm regards,</p>
    <br>
    <p>TEDxJumeirahBeachPark Team</p>
    <p>Mobile: +971 507728672</p>
    <a href="https://www.tedxjumeirahbeachpark.com/">
        <img src="{{ $message->embed(public_path('assets_main/assets/images/logo/logo-black.png')) }}" width="15%" alt="Logo">
    </a>
</body>

</html>