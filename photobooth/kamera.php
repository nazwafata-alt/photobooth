<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Photo Booth - Kamera</title>

    <link rel="stylesheet" href="css/style.css">

    <style>
        .camera-page {
            width: 100%;
            max-width: 1000px;
            margin: auto;
            text-align: center;
        }

        .camera-title {
            font-size: 42px;
            margin-bottom: 8px;
        }

        .camera-subtitle {
            opacity: .8;
            margin-bottom: 25px;
        }

        /* CAMERA */

        .camera-box {
            position: relative;
            width: 100%;
            max-width: 850px;
            margin: auto;

            background: #000;
            border-radius: 20px;
            overflow: hidden;

            box-shadow: 0 15px 40px rgba(0,0,0,.35);
        }

        #video {
            width: 100%;
            display: block;

            /* efek mirror seperti kamera selfie */
            transform: scaleX(-1);
        }

        /* COUNTDOWN */

        .countdown {
            position: absolute;
            top: 50%;
            left: 50%;

            transform: translate(-50%, -50%);

            font-size: 120px;
            font-weight: bold;

            color: white;

            text-shadow: 0 5px 20px rgba(0,0,0,.8);

            display: none;
            z-index: 5;
        }

        /* COUNTER */

        .photo-counter {
            margin-top: 20px;

            font-size: 20px;
            font-weight: bold;
        }

        #photoCount {
            color: #ff4fa3;
        }

        /* STATUS */

        .status {
            display: inline-block;

            margin-top: 15px;
            padding: 10px 20px;

            border-radius: 30px;

            background: rgba(255,255,255,.1);
        }

        /* BUTTON */

        .controls {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;

            gap: 12px;

            margin-top: 25px;
        }

        .btn {
            border: none;

            padding: 14px 25px;

            border-radius: 50px;

            font-size: 15px;
            font-weight: bold;

            cursor: pointer;

            text-decoration: none;

            transition: .2s;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn:disabled {
            opacity: .5;
            cursor: not-allowed;
            transform: none;
        }

        .btn-camera {
            background: white;
            color: #35145f;
        }

        .btn-start {
            background: #ff4fa3;
            color: white;
        }

        .btn-back {
            background: rgba(255,255,255,.15);
            color: white;
        }

        /* HASIL */

        .result {
            display: none;

            margin-top: 40px;
        }

        .photo-grid {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 15px;

            margin-top: 20px;
        }

        .photo-item {
            background: rgba(255,255,255,.1);

            padding: 8px;

            border-radius: 15px;
        }

        .photo-item img {
            width: 100%;
            display: block;

            border-radius: 10px;
        }

        .photo-label {
            margin-top: 7px;

            font-size: 13px;
            opacity: .8;
        }

        /* LANJUT */

        .next {
            display: none;

            margin-top: 30px;
        }

        .next a {
            display: inline-block;

            padding: 14px 30px;

            background: white;
            color: #35145f;

            border-radius: 50px;

            text-decoration: none;
            font-weight: bold;
        }

        #canvas {
            display: none;
        }

        /* MOBILE */

        @media (max-width: 700px) {

            .camera-title {
                font-size: 30px;
            }

            .countdown {
                font-size: 80px;
            }

            .photo-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }
    </style>
</head>

<body>

<div class="container">

    <main class="camera-page">

        <h1 class="camera-title">
            📸 PHOTO BOOTH
        </h1>

        <p class="camera-subtitle">
            Siapkan pose terbaikmu!
        </p>


        <!-- CAMERA -->

        <div class="camera-box">

            <video
                id="video"
                autoplay
                muted
                playsinline>
            </video>

            <div
                id="countdown"
                class="countdown">
            </div>

        </div>


        <!-- CANVAS UNTUK MENGAMBIL FOTO -->

        <canvas id="canvas"></canvas>


        <!-- JUMLAH FOTO -->

        <div class="photo-counter">

            Foto
            <span id="photoCount">0</span>
            / 4

        </div>


        <!-- STATUS -->

        <div
            id="status"
            class="status">

            Kamera belum dinyalakan

        </div>


        <!-- TOMBOL -->

        <div class="controls">

            <button
                id="cameraButton"
                class="btn btn-camera">

                📷 Nyalakan Kamera

            </button>


            <button
                id="startButton"
                class="btn btn-start"
                disabled>

                📸 Mulai Photobooth

            </button>


            <a
                href="index.php"
                class="btn btn-back">

                ← Kembali

            </a>

        </div>


        <!-- HASIL FOTO -->

        <section
            id="result"
            class="result">

            <h2>
                ✨ Hasil Foto
            </h2>

            <div
                id="photoGrid"
                class="photo-grid">
            </div>

        </section>


        <!-- LANJUT -->

        <div
            id="next"
            class="next">

            <a href="hasil.php">

                🖼️ Lanjut Pilih Frame

            </a>

        </div>

    </main>

</div>


<script>

    // ==========================================
    // ELEMENT
    // ==========================================

    const video = document.getElementById("video");

    const canvas = document.getElementById("canvas");

    const ctx = canvas.getContext("2d");

    const cameraButton =
        document.getElementById("cameraButton");

    const startButton =
        document.getElementById("startButton");

    const countdown =
        document.getElementById("countdown");

    const status =
        document.getElementById("status");

    const photoCount =
        document.getElementById("photoCount");

    const result =
        document.getElementById("result");

    const photoGrid =
        document.getElementById("photoGrid");

    const next =
        document.getElementById("next");


    // ==========================================
    // VARIABLE
    // ==========================================

    let stream = null;

    let photos = [];

    let isTakingPhotos = false;

    const TOTAL_PHOTOS = 4;

    const COUNTDOWN_TIME = 3;


    // ==========================================
    // NYALAKAN KAMERA
    // ==========================================

    cameraButton.onclick = async () => {

        try {

            stream =
                await navigator.mediaDevices.getUserMedia({

                    video: {
                        width: {
                            ideal: 1280
                        },

                        height: {
                            ideal: 720
                        }
                    },

                    audio: false

                });


            video.srcObject = stream;


            status.textContent =
                "✅ Kamera siap digunakan";


            cameraButton.disabled = true;

            startButton.disabled = false;


        } catch (error) {

            console.error(error);

            status.textContent =
                "❌ Kamera tidak dapat diakses";

            alert(
                "Izinkan akses kamera pada browser terlebih dahulu."
            );

        }

    };


    // ==========================================
    // MULAI PHOTOBOOTH
    // ==========================================

    startButton.onclick = async () => {

        if (isTakingPhotos) {
            return;
        }


        isTakingPhotos = true;

        startButton.disabled = true;


        // Reset foto sebelumnya

        photos = [];

        photoGrid.innerHTML = "";

        photoCount.textContent = "0";

        result.style.display = "none";

        next.style.display = "none";


        status.textContent =
            "📸 Bersiap untuk foto...";


        // Ambil 4 foto

        for (
            let i = 1;
            i <= TOTAL_PHOTOS;
            i++
        ) {

            await countdownFoto(i);

            ambilFoto(i);

            await delay(1000);

        }


        // Simpan foto ke browser

        localStorage.setItem(
            "photoboothPhotos",
            JSON.stringify(photos)
        );


        // Tampilkan hasil

        result.style.display = "block";

        next.style.display = "block";


        status.textContent =
            "🎉 Semua foto berhasil diambil!";


        isTakingPhotos = false;

        startButton.disabled = false;

    };


    // ==========================================
    // COUNTDOWN
    // ==========================================

    function countdownFoto(nomor) {

        return new Promise(resolve => {

            let angka = COUNTDOWN_TIME;


            countdown.style.display = "block";

            countdown.textContent = angka;


            status.textContent =
                `Foto ${nomor} dari ${TOTAL_PHOTOS}`;


            const timer = setInterval(() => {

                angka--;


                if (angka > 0) {

                    countdown.textContent =
                        angka;

                } else {

                    clearInterval(timer);

                    countdown.textContent =
                        "📸";


                    setTimeout(() => {

                        countdown.style.display =
                            "none";

                        resolve();

                    }, 400);

                }

            }, 1000);

        });

    }


    // ==========================================
    // AMBIL FOTO
    // ==========================================

    function ambilFoto(nomor) {

        const width =
            video.videoWidth;

        const height =
            video.videoHeight;


        if (!width || !height) {

            console.error(
                "Ukuran kamera belum tersedia."
            );

            return;

        }


        canvas.width = width;

        canvas.height = height;


        /*
         * Membuat hasil foto mirror
         * seperti tampilan kamera.
         *
         * save() dan restore()
         * mencegah transformasi menumpuk.
         */

        ctx.save();

        ctx.translate(width, 0);

        ctx.scale(-1, 1);


        ctx.drawImage(
            video,
            0,
            0,
            width,
            height
        );


        ctx.restore();


        // Konversi ke JPG

        const foto =
            canvas.toDataURL(
                "image/jpeg",
                0.90
            );


        photos.push(foto);


        photoCount.textContent =
            photos.length;


        tampilkanFoto(
            foto,
            nomor
        );

    }


    // ==========================================
    // TAMPILKAN FOTO
    // ==========================================

    function tampilkanFoto(
        foto,
        nomor
    ) {

        const item =
            document.createElement("div");


        item.className =
            "photo-item";


        item.innerHTML = `
            <img
                src="${foto}"
                alt="Foto ${nomor}">

            <div class="photo-label">
                Foto ${nomor}
            </div>
        `;


        photoGrid.appendChild(item);


        result.style.display = "block";

    }


    // ==========================================
    // DELAY
    // ==========================================

    function delay(ms) {

        return new Promise(
            resolve => setTimeout(resolve, ms)
        );

    }


    // ==========================================
    // BERHENTIKAN KAMERA
    // ==========================================

    function stopCamera() {

        if (!stream) {
            return;
        }


        stream
            .getTracks()
            .forEach(track => {
                track.stop();
            });


        stream = null;

    }


    // ==========================================
    // SAAT MENINGGALKAN HALAMAN
    // ==========================================

    window.addEventListener(
        "beforeunload",
        stopCamera
    );

</script>

</body>
</html>