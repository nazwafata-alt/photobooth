<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Editor Photo Booth</title>

    <link
        rel="stylesheet"
        href="css/style.css">

    <style>

        .editor-page {
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }

        .editor-title {
            text-align: center;
            margin-bottom: 10px;
        }

        .editor-subtitle {
            text-align: center;
            opacity: .8;
            margin-bottom: 30px;
        }

        .editor-layout {
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 30px;
            align-items: start;
        }

        /* PREVIEW */

        .preview-container {
            background: rgba(255,255,255,.1);
            padding: 25px;
            border-radius: 25px;
            text-align: center;
        }

        .preview-container h2 {
            margin-bottom: 20px;
        }

        #resultCanvas {
            width: 100%;
            max-width: 400px;
            background: white;
            border-radius: 10px;
            box-shadow:
                0 15px 40px rgba(0,0,0,.4);
        }

        /* EDITOR */

        .editor-box {
            background: rgba(255,255,255,.1);
            border-radius: 25px;
            padding: 25px;
        }

        .editor-box h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 13px 15px;

            border: none;
            border-radius: 12px;

            outline: none;

            font-size: 15px;
            background: white;
        }

        /* FRAME OPTIONS GRID */

        .frame-options {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .frame-btn {
            padding: 12px 5px;

            border: 2px solid transparent;

            border-radius: 12px;

            cursor: pointer;

            font-weight: bold;

            font-size: 13px;

            transition: .2s;
        }

        .frame-btn:hover {
            transform: translateY(-2px);
        }

        .frame-btn.active {
            border-color: white;
            box-shadow: 0 0 10px rgba(255,255,255,0.5);
        }

        /* PALET WARNA AESTHETIC */

        .frame-cream {
            background: #EFECE6;
            color: #333;
        }

        .frame-retro-red {
            background: #8B0000;
            color: white;
        }

        .frame-vintage-green {
            background: #2D5A27;
            color: white;
        }

        .frame-black {
            background: #1A1A1A;
            color: white;
        }

        .frame-pink {
            background: #FFB6C1;
            color: #333;
        }

        .frame-blue {
            background: #87CEEB;
            color: #333;
        }

        /* BUTTON */

        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 12px;

            margin-top: 25px;
        }

        .action-btn {
            padding: 15px;

            border: none;

            border-radius: 50px;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            text-decoration: none;

            text-align: center;
        }

        .download-btn {
            background: white;
            color: #35145f;
        }

        .save-btn {
            background: #ff4fa3;
            color: white;
        }

        .back-btn {
            background: rgba(255,255,255,.15);
            color: white;
        }

        .photo-info {
            margin-top: 20px;

            padding: 15px;

            border-radius: 15px;

            background: rgba(255,255,255,.08);

            font-size: 14px;

            line-height: 1.6;
        }

        @media (max-width: 850px) {

            .editor-layout {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

<div class="container">

    <div class="editor-page">

        <h1 class="editor-title">
            🖼️ EDIT PHOTOBOOTH
        </h1>

        <p class="editor-subtitle">
            Atur hasil foto sesuai keinginanmu
        </p>


        <div class="editor-layout">


            <!-- ========================= -->
            <!-- PREVIEW -->
            <!-- ========================= -->

            <div class="preview-container">

                <h2>
                    Preview
                </h2>

                <canvas
                    id="resultCanvas">
                </canvas>

            </div>


            <!-- ========================= -->
            <!-- EDITOR -->
            <!-- ========================= -->

            <div class="editor-box">

                <h2>
                    Pengaturan
                </h2>


                <!-- NAMA -->

                <div class="form-group">

                    <label>
                        Nama
                    </label>

                    <input
                        type="text"
                        id="nama"
                        placeholder="Masukkan nama">

                </div>


                <!-- ACARA -->

                <div class="form-group">

                    <label>
                        Nama Acara / Pesan
                    </label>

                    <input
                        type="text"
                        id="acara"
                        placeholder="Contoh: Raw Memories / Cresyntech 2026">

                </div>


                <!-- FILTER FOTO -->

                <div class="form-group">

                    <label>
                        Filter Kamera
                    </label>

                    <select id="filterSelect" onchange="gambarHasil()">
                        <option value="none">Normal</option>
                        <option value="grayscale">Hitam Putih (B&W)</option>
                        <option value="sepia">Sepia Classic</option>
                        <option value="vintage">Vintage Retro</option>
                        <option value="bright">Warm Bright</option>
                    </select>

                </div>


                <!-- GAYA BINGKAI / FRAME BENTUK -->

                <div class="form-group">

                    <label>
                        Gaya Bingkai Photo Strip
                    </label>

                    <select id="frameStyleSelect" onchange="gambarHasil()">
                        <option value="classic">Biasa (Classic Border)</option>
                        <option value="stamp">Perangko / Stamp (Gerigi)</option>
                        <option value="checker">Catur 70s (Checkerboard)</option>
                        <option value="stars">Star/Bintang Frame</option>
                    </select>

                </div>


                <!-- MOTIF BACKGROUND -->

                <div class="form-group">

                    <label>
                        Motif Background
                    </label>

                    <select id="patternSelect" onchange="gambarHasil()">
                        <option value="solid">Polos (Solid Color)</option>
                        <option value="polka">Polkadot Aesthetic</option>
                        <option value="stripes">Garis Diagonal</option>
                        <option value="grid">Grid / Kotak-Kotak</option>
                    </select>

                </div>


                <!-- WARNA FRAME AESTHETIC -->

                <div class="form-group">

                    <label>
                        Pilih Warna Frame
                    </label>

                    <div class="frame-options">

                        <button
                            class="frame-btn frame-cream active"
                            onclick="pilihFrame('cream', this)">

                            Cream

                        </button>

                        <button
                            class="frame-btn frame-retro-red"
                            onclick="pilihFrame('red', this)">

                            Retro Red

                        </button>

                        <button
                            class="frame-btn frame-vintage-green"
                            onclick="pilihFrame('green', this)">

                            Vintage Green

                        </button>

                        <button
                            class="frame-btn frame-black"
                            onclick="pilihFrame('black', this)">

                            Classic Black

                        </button>

                        <button
                            class="frame-btn frame-pink"
                            onclick="pilihFrame('pink', this)">

                            Soft Pink

                        </button>

                        <button
                            class="frame-btn frame-blue"
                            onclick="pilihFrame('blue', this)">

                            Baby Blue

                        </button>

                    </div>

                </div>


                <!-- INFORMASI -->

                <div class="photo-info">

                    📸 Photo strip ini akan otomatis disesuaikan dengan warna dan bentuk bingkai pilihanmu.

                    <br><br>

                    📅 Tanggal & nama acara tercetak di bagian footer strip.

                </div>


                <!-- BUTTON -->

                <div class="action-buttons">

                    <button
                        class="action-btn download-btn"
                        onclick="downloadPhoto()">

                        ⬇️ DOWNLOAD FOTO

                    </button>


                    <button
                        class="action-btn save-btn"
                        onclick="simpanFoto()">

                        💾 SIMPAN HASIL

                    </button>


                    <a
                        href="kamera.php"
                        class="action-btn back-btn">

                        📷 FOTO LAGI

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


<script>


// =====================================
// DATA
// =====================================

let photos = [];

let selectedFrame = "cream";


// =====================================
// AMBIL FOTO DARI LOCAL STORAGE
// =====================================

const data =
    localStorage.getItem(
        "photoboothPhotos"
    );


if (data) {

    photos = JSON.parse(data);

}


if (!photos || photos.length === 0) {

    alert(
        "Foto belum tersedia. Silakan ambil foto terlebih dahulu."
    );

    window.location.href =
        "kamera.php";

}


// =====================================
// CANVAS
// =====================================

const canvas =
    document.getElementById(
        "resultCanvas"
    );

const ctx =
    canvas.getContext("2d");


// =====================================
// UKURAN PHOTO STRIP
// =====================================

const WIDTH = 700;

const PHOTO_WIDTH = 600;

const PHOTO_HEIGHT = 400;

const PHOTO_GAP = 25;

const HEADER = 100;

const FOOTER = 140;

const TOTAL_HEIGHT =
    HEADER +
    (PHOTO_HEIGHT * photos.length) +
    (PHOTO_GAP * (photos.length - 1)) +
    FOOTER;


canvas.width = WIDTH;

canvas.height = TOTAL_HEIGHT;


// =====================================
// EFEK FILTER
// =====================================

function terapkanFilter(context, filter) {

    switch (filter) {

        case 'grayscale':
            context.filter = 'grayscale(100%)';
            break;

        case 'sepia':
            context.filter = 'sepia(85%) contrast(105%)';
            break;

        case 'vintage':
            context.filter = 'contrast(120%) brightness(95%) sepia(35%) hue-rotate(-10deg)';
            break;

        case 'bright':
            context.filter = 'brightness(115%) contrast(105%) saturate(110%)';
            break;

        default:
            context.filter = 'none';
            break;

    }

}


// =====================================
// MENGGAMBAR MOTIF BACKGROUND
// =====================================

function gambarMotifBackground(patternType, bgColor) {

    ctx.fillStyle = bgColor;
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    if (patternType === 'solid') return;

    const isDark = (selectedFrame === 'black' || selectedFrame === 'red' || selectedFrame === 'green');
    const patternColor = isDark ? 'rgba(255, 255, 255, 0.15)' : 'rgba(0, 0, 0, 0.08)';

    ctx.save();
    ctx.fillStyle = patternColor;
    ctx.strokeStyle = patternColor;

    if (patternType === 'polka') {
        const radius = 10;
        const gap = 40;
        for (let x = 0; x < canvas.width; x += gap) {
            for (let y = 0; y < canvas.height; y += gap) {
                ctx.beginPath();
                ctx.arc(x + (y % (gap * 2) === 0 ? gap / 2 : 0), y, radius, 0, Math.PI * 2);
                ctx.fill();
            }
        }
    } else if (patternType === 'stripes') {
        ctx.lineWidth = 15;
        const spacing = 40;
        for (let i = -canvas.height; i < canvas.width + canvas.height; i += spacing) {
            ctx.beginPath();
            ctx.moveTo(i, 0);
            ctx.lineTo(i + canvas.height, canvas.height);
            ctx.stroke();
        }
    } else if (patternType === 'grid') {
        ctx.lineWidth = 3;
        const gridSize = 45;
        for (let x = 0; x < canvas.width; x += gridSize) {
            ctx.beginPath();
            ctx.moveTo(x, 0);
            ctx.lineTo(x, canvas.height);
            ctx.stroke();
        }
        for (let y = 0; y < canvas.height; y += gridSize) {
            ctx.beginPath();
            ctx.moveTo(0, y);
            ctx.lineTo(canvas.width, y);
            ctx.stroke();
        }
    }

    ctx.restore();

}


// =====================================
// WARNA FRAME & BORDER
// =====================================

function getFrameColor() {
    switch (selectedFrame) {
        case "red": return "#8B0000";
        case "green": return "#2D5A27";
        case "black": return "#1A1A1A";
        case "pink": return "#FFB6C1";
        case "blue": return "#87CEEB";
        default: return "#EFECE6"; // Cream Neutral
    }
}

function getTextColor() {
    if (selectedFrame === 'black' || selectedFrame === 'red' || selectedFrame === 'green') {
        return "#FFFFFF";
    }
    return "#333333";
}


function pilihFrame(frame, element) {

    selectedFrame = frame;

    document.querySelectorAll(".frame-btn").forEach(function(btn) {
        btn.classList.remove("active");
    });

    element.classList.add("active");

    gambarHasil();

}


// =====================================
// DEKORASI BINGKAI KREATIF
// =====================================

function gambarBingkaiKreatif(x, y, w, h, style) {

    ctx.save();
    ctx.filter = "none";

    const borderWidth = 12;

    if (style === 'stamp') {
        // Efek gerigi tepi Perangko
        ctx.fillStyle = "#FFFFFF";
        ctx.fillRect(x - borderWidth, y - borderWidth, w + (borderWidth * 2), h + (borderWidth * 2));

        ctx.fillStyle = getFrameColor();
        const holeRadius = 6;
        const holeGap = 20;

        // Atas & Bawah
        for (let hX = x - borderWidth; hX <= x + w + borderWidth; hX += holeGap) {
            ctx.beginPath();
            ctx.arc(hX, y - borderWidth, holeRadius, 0, Math.PI * 2);
            ctx.arc(hX, y + h + borderWidth, holeRadius, 0, Math.PI * 2);
            ctx.fill();
        }
        // Kiri & Kanan
        for (let hY = y - borderWidth; hY <= y + h + borderWidth; hY += holeGap) {
            ctx.beginPath();
            ctx.arc(x - borderWidth, hY, holeRadius, 0, Math.PI * 2);
            ctx.arc(x + w + borderWidth, hY, holeRadius, 0, Math.PI * 2);
            ctx.fill();
        }

    } else if (style === 'checker') {
        // Frame Catur Retro 70s
        const tileSize = 12;
        const pad = 16;
        ctx.fillStyle = "#FFFFFF";
        ctx.fillRect(x - pad, y - pad, w + (pad * 2), h + (pad * 2));

        for (let cx = x - pad; cx < x + w + pad; cx += tileSize) {
            for (let cy = y - pad; cy < y + h + pad; cy += tileSize) {
                if ((cx < x || cx >= x + w || cy < y || cy >= y + h)) {
                    ctx.fillStyle = ((Math.floor(cx / tileSize) + Math.floor(cy / tileSize)) % 2 === 0) ? "#8B0000" : "#F5E6C8";
                    ctx.fillRect(cx, cy, tileSize, tileSize);
                }
            }
        }

    } else if (style === 'stars') {
        // Frame dengan Ornamen Bintang Retro
        ctx.fillStyle = "#FFFFFF";
        ctx.fillRect(x - borderWidth, y - borderWidth, w + (borderWidth * 2), h + (borderWidth * 2));

        ctx.fillStyle = "#333333";
        ctx.font = "12px Arial";
        ctx.fillText("✦", x - 6, y - 2);
        ctx.fillText("✦", x + w + 1, y - 2);
        ctx.fillText("✦", x - 6, y + h + 10);
        ctx.fillText("✦", x + w + 1, y + h + 10);

    } else {
        // Classic White Border
        ctx.fillStyle = "#FFFFFF";
        ctx.fillRect(x - borderWidth, y - borderWidth, w + (borderWidth * 2), h + (borderWidth * 2));
    }

    ctx.restore();

}


// =====================================
// GAMBAR HASIL
// =====================================

async function gambarHasil() {

    const frameColor = getFrameColor();
    const textColor = getTextColor();

    const patternSelect = document.getElementById("patternSelect");
    const selectedPattern = patternSelect ? patternSelect.value : "solid";

    const frameStyleSelect = document.getElementById("frameStyleSelect");
    const selectedFrameStyle = frameStyleSelect ? frameStyleSelect.value : "classic";

    // Reset filter canvas
    ctx.filter = "none";

    // Gambar Background & Motif
    gambarMotifBackground(selectedPattern, frameColor);


    // Header Text
    ctx.fillStyle = textColor;
    ctx.textAlign = "center";
    ctx.font = "bold 34px 'Courier New', Courier, monospace";

    ctx.fillText(
        "✦ PHOTO BOOTH ✦",
        WIDTH / 2,
        60
    );


    // Filter foto terpilih
    const filterSelect = document.getElementById("filterSelect");
    const selectedFilter = filterSelect ? filterSelect.value : "none";


    // Render Foto Loop
    let y = HEADER;

    for (let i = 0; i < photos.length; i++) {

        const img = new Image();
        img.src = photos[i];

        await new Promise(function(resolve) {
            img.onload = resolve;
        });


        const x = (WIDTH - PHOTO_WIDTH) / 2;

        // Render Bingkai / Border Foto Kreatif
        gambarBingkaiKreatif(x, y, PHOTO_WIDTH, PHOTO_HEIGHT, selectedFrameStyle);


        // Rasio foto
        const ratio = Math.max(
            PHOTO_WIDTH / img.width,
            PHOTO_HEIGHT / img.height
        );

        const width = img.width * ratio;
        const height = img.height * ratio;

        const cropX = (width - PHOTO_WIDTH) / 2;
        const cropY = (height - PHOTO_HEIGHT) / 2;


        ctx.save();

        ctx.beginPath();
        ctx.rect(x, y, PHOTO_WIDTH, PHOTO_HEIGHT);
        ctx.clip();

        // Terapkan filter khusus pada foto
        terapkanFilter(ctx, selectedFilter);

        ctx.drawImage(
            img,
            x - cropX,
            y - cropY,
            width,
            height
        );

        ctx.restore();

        y += PHOTO_HEIGHT + PHOTO_GAP;

    }


    // =================================
    // FOOTER (TEKS NAMA, ACARA & BARCODE DEKORASI)
    // =================================

    ctx.filter = "none";

    const nama = document.getElementById("nama").value || "RAW MEMORIES";
    const acara = document.getElementById("acara").value || "OUR STUDIO";

    ctx.fillStyle = textColor;

    // Teks Nama
    ctx.font = "bold 26px 'Georgia', serif";
    ctx.fillText(
        nama,
        WIDTH / 2,
        canvas.height - 85
    );

    // Teks Subtitle/Acara
    ctx.font = "16px 'Courier New', Courier, monospace";
    ctx.fillText(
        acara,
        WIDTH / 2,
        canvas.height - 55
    );

    // Dekorasi Barcode Aesthetic di Footer
    ctx.fillStyle = textColor;
    const barcodeWidth = 200;
    const startX = (WIDTH - barcodeWidth) / 2;
    const barcodeY = canvas.height - 40;

    ctx.fillRect(startX, barcodeY, barcodeWidth, 2);

    for (let b = 0; b < barcodeWidth; b += 6) {
        if (b % 4 === 0) {
            ctx.fillRect(startX + b, barcodeY + 4, 3, 15);
        } else {
            ctx.fillRect(startX + b, barcodeY + 4, 1, 15);
        }
    }

}


// =====================================
// UPDATE PREVIEW SAAT MENGETIK
// =====================================

document.getElementById("nama").addEventListener("input", gambarHasil);
document.getElementById("acara").addEventListener("input", gambarHasil);


// =====================================
// DOWNLOAD
// =====================================

function downloadPhoto() {

    const link = document.createElement("a");

    link.download = "photobooth-strip.jpg";

    link.href = canvas.toDataURL(
        "image/jpeg",
        0.95
    );

    link.click();

}


// =====================================
// SIMPAN
// =====================================

function simpanFoto() {

    const nama = document.getElementById("nama").value;

    if (!nama) {

        alert(
            "Silakan masukkan nama terlebih dahulu."
        );

        return;

    }

    localStorage.setItem(
        "photoboothResult",
        canvas.toDataURL(
            "image/jpeg",
            0.95
        )
    );

    alert(
        "Hasil foto berhasil disiapkan."
    );

}


// =====================================
// INITIAL RUN
// =====================================

gambarHasil();

</script>

</body>

</html>