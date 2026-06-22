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
<video
id="video"
autoplay
muted
playsinline
webkit-playsinline>
</video>
        <div class="frame"></div>
        <button class="btn btn-danger close-btn" onclick="closeScanner()">
            Tutup
        </button>
    </div>
<script src="https://cdn.jsdelivr.net/npm/jsqr/dist/jsQR.js"></script>

<script>

let stream = null;
let scanning = true;

const video =
document.getElementById(
"video"
);

async function startCamera(){

try{

stream =
await navigator
.mediaDevices
.getUserMedia({

video:{

facingMode:"environment",

width:{
ideal:1280
},

height:{
ideal:720
}

},

audio:false

});

video.srcObject =
stream;

await video.play();

requestAnimationFrame(
scanLoop
);

}

catch(e){

console.log(e);

alert(
"Gagal membuka kamera"
);

}

}

function scanLoop(){

if(
!scanning
){

return;

}

if(

video.readyState
===

video.HAVE_ENOUGH_DATA

){

const canvas =
document.createElement(
"canvas"
);

canvas.width =
video.videoWidth;

canvas.height =
video.videoHeight;

const ctx =
canvas.getContext(
"2d",
{
willReadFrequently:true
}
);

ctx.drawImage(

video,

0,

0,

canvas.width,

canvas.height

);

const img =
ctx.getImageData(

0,

0,

canvas.width,

canvas.height

);

const qr =
jsQR(

img.data,

canvas.width,

canvas.height,

{
inversionAttempts:
"dontInvert"
}

);

if(
qr &&
qr.data
){

console.log(
"QR:",
qr.data
);

scanning =
false;

stopCamera();

window.location.replace(
qr.data
);

return;

}

}

requestAnimationFrame(
scanLoop
);

}

function stopCamera(){

scanning =
false;

if(
stream
){

stream
.getTracks()
.forEach(
track =>
track.stop()
);

}

}

function closeScanner(){

stopCamera();

window.history.back();

}

window.addEventListener(

"load",

startCamera

);

window.addEventListener(

"pagehide",

stopCamera

);

</script>
</body>
</html>
