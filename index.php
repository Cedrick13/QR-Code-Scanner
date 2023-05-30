<!DOCTYPE html>
<html lang="en">
<head>
    <script src="qrious-master/qrious-master/dist/qrious.js"></script>
    <title>QR Code</title>
</head>
<body>
    <canvas id="qr"></canvas>
    <script src="qrious-master/qrious-master/dist/qrious.js"></script>
</body>

<script>
    var qr = new QRious({
    element: document.getElementById('qr'),
    value: 'FB:Ced IG:cedcllp ',
    background: 'white', // background color
    foreground: 'black', // foreground color
    backgroundAlpha: 1,
    foregroundAlpha: 1,
    level: 'L', // Error correction level of the QR code (L, M, Q, H)
    mime: 'image/png', // MIME type used to render the image for the QR code
    size: 500, // Size of the QR code in pixels.
    padding: 100 // padding in pixels
})
</script>

</html>