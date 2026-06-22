<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scanner QR</title>
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        html,
        body {
            margin: 0;
            height: 100%;
            background: #000;
        }
        .scanner {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .frame {
            position: absolute;
            width: 260px;
            height: 260px;
            border: 4px solid white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 15px;
        }
        .title {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 20px;
            z-index: 999;
        }
        .close-btn {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 999;
        }
    </style>
</head>
<body>
    <div class="scanner">
        <div class="title">
            <i class="fa-solid fa-qrcode"></i>
            Arahkan QR ke kamera
        </div>
        <video id="video" autoplay playsinline>
        </video>
        <div class="frame"></div>
        <button class="btn btn-danger close-btn" onclick="closeScanner()">
            Tutup
        </button>
    </div>
    <script>
        let stream = null;
        let detector = null;
        let scanning = true;
        async function startCamera() {
            try {
                stream =
                    await navigator
                    .mediaDevices
                    .getUserMedia({
                        video: {
                            facingMode: {
                                ideal: "environment"
                            },
                            width: {
                                ideal: 1920
                            },
                            height: {
                                ideal: 1080
                            }
                        }
                    });
                const video =
                    document
                    .getElementById(
                        "video"
                    );
                video.srcObject =
                    stream;
                await video.play();
                const track =
                    stream
                    .getVideoTracks()[0];
                try {
                    await track
                        .applyConstraints({
                            advanced: [
                                {
                                    focusMode: "continuous"
                                }
                            ]
                        });
                } catch (e) {}
                startScan();
            } catch (e) {
                alert(
                    "Kamera tidak dapat dibuka"
                );
                history.back();
            }
        }
        async function startScan() {
            if (
                !(
                    "BarcodeDetector" in window
                )
            ) {
                alert(
                    "Browser tidak mendukung QR scanner"
                );
                return;
            }
            detector =
                new BarcodeDetector({

                    formats: [
                        "qr_code"
                    ]

                });
            scanLoop();
        }
        async function scanLoop() {
            const video =
                document
                .getElementById(
                    "video"
                );
            while (
                scanning
            ) {
                try {

                    const result =
                        await detector
                        .detect(
                            video
                        );
                    if (
                        result.length
                    ) {
                        stopCamera();
                        window.location.href =
                            result[0]
                            .rawValue;
                        return;
                    }
                } catch (e) {}
                await new Promise(
                    r =>
                    setTimeout(
                        r,
                        100
                    )
                );
            }
        }
        function stopCamera() {
            scanning = false;
            if (stream) {
                stream
                    .getTracks()
                    .forEach(
                        t =>
                        t.stop()
                    );
            }
        }
        function closeScanner() {
            stopCamera();
            window.history.back();
        }
        window.onload =
            startCamera;
        window.onbeforeunload =
            stopCamera;
    </script>
</body>
</html>
