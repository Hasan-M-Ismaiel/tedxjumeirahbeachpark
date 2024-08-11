<!DOCTYPE html>
<html>

<head>
    <title>TEDxJumeirahBeachPark Confirmation Mail</title>
</head>

<body>
    <p>{{ $data['title'] }}</p>
    <p>Thank you for your interest in becoming a speaker with us. We truly appreciate it!</p>
    <p>As a speaker, your unique insights and perspectives are at the heart of our event. We are excited to
        provide you with a platform to share your ideas on how diversity shapes our world. Our team will review
        the application carefully and reach out if you meet the selection criteria to discuss your idea and the next
        steps.</p>

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