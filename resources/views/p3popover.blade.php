<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 4 Popover - Tugas Pertemuan 3</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Figtree:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        :root {
            --bg: #ffffff;
            --surface: #f5f0ff;
            --border: #ddd6f7;
            --text: #1a1025;
            --muted: #9585b8;
            --accent: #6d28d9;
            --accent2: #7c3aed;
            --accent3: #a78bfa;
            --font-head: 'Syne', sans-serif;
            --font-body: 'Figtree', sans-serif;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: var(--font-body);
            font-weight: 300;
            line-height: 1.75;
        }

        /* HEADER */
        .site-header {
            padding: 5rem 0 4rem;
            border-bottom: 1px solid var(--border);
            position: relative;
            overflow: hidden;
        }

        .site-header::before {
            content: 'POPOVER';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: var(--font-head);
            font-size: clamp(4rem, 18vw, 13rem);
            font-weight: 800;
            color: transparent;
            -webkit-text-stroke: 1px #ede9fe;
            white-space: nowrap;
            pointer-events: none;
            user-select: none;
        }

        .site-header h1 {
            font-family: var(--font-head);
            font-size: clamp(2rem, 5vw, 3.8rem);
            font-weight: 800;
            letter-spacing: -1px;
            line-height: 1;
            position: relative;
        }

        .site-header h1 span {
            color: var(--accent);
        }

        .header-meta {
            font-size: 0.78rem;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 1rem;
            font-weight: 400;
        }

        /* SECTION */
        .demo-section {
            padding: 4rem 0;
            border-bottom: 1px solid var(--border);
        }

        .sec-num {
            font-family: var(--font-head);
            font-size: 0.7rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 0.4rem;
        }

        .sec-title {
            font-family: var(--font-head);
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .sec-desc {
            font-size: 0.88rem;
            color: var(--muted);
            margin-bottom: 2rem;
            max-width: 460px;
        }

        /* Box utk demo */
        .demo-box {
            background: var(--surface);
            border: 1px solid var(--border);
            padding: 2.5rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            min-height: 160px;
        }

        /* Snippet kode */
        .code-block {
            background: #faf8ff;
            border: 1px solid var(--border);
            border-left: 3px solid var(--accent);
            padding: 1rem 1.25rem;
            font-size: 0.79rem;
            font-family: 'Courier New', monospace;
            color: #4a3f6b;
            margin-top: 1.2rem;
            white-space: pre-wrap;
            word-break: break-all;
            line-height: 1.8;
        }

        .code-block .tag {
            color: #6d28d9;
        }

        .code-block .attr {
            color: #7c3aed;
        }

        .code-block .val {
            color: #059669;
        }

        /* Tombol */
        .btn-s1 {
            background: transparent;
            border: 1.5px solid var(--accent);
            color: var(--accent);
            font-family: var(--font-head);
            font-size: 0.85rem;
            letter-spacing: 1px;
            padding: 0.55rem 1.5rem;
            border-radius: 0;
            transition: background 0.2s, color 0.2s;
            cursor: pointer;
        }

        .btn-s1:hover {
            background: var(--accent);
            color: #fff;
            text-decoration: none;
        }

        .btn-top {
            background: #7c3aed;
            color: #fff;
            border: none;
            border-radius: 2px;
            padding: 0.5rem 1.2rem;
            font-family: var(--font-head);
            font-size: 0.82rem;
            cursor: pointer;
        }

        .btn-bottom {
            background: #5b21b6;
            color: #fff;
            border: none;
            border-radius: 2px;
            padding: 0.5rem 1.2rem;
            font-family: var(--font-head);
            font-size: 0.82rem;
            cursor: pointer;
        }

        .btn-left {
            background: #a78bfa;
            color: #1a1025;
            border: none;
            border-radius: 2px;
            padding: 0.5rem 1.2rem;
            font-family: var(--font-head);
            font-size: 0.82rem;
            cursor: pointer;
        }

        .btn-right {
            background: #6d28d9;
            color: #fff;
            border: none;
            border-radius: 2px;
            padding: 0.5rem 1.2rem;
            font-family: var(--font-head);
            font-size: 0.82rem;
            cursor: pointer;
        }

        .btn-top:hover,
        .btn-bottom:hover,
        .btn-left:hover,
        .btn-right:hover {
            text-decoration: none;
            opacity: 0.85;
        }

        .btn-s3 {
            background: transparent;
            border: 1.5px solid var(--accent2);
            color: var(--accent2);
            font-family: var(--font-head);
            font-size: 0.85rem;
            letter-spacing: 1px;
            padding: 0.55rem 1.5rem;
            border-radius: 0;
            transition: background 0.2s, color 0.2s;
            cursor: pointer;
        }

        .btn-s3:hover {
            background: var(--accent2);
            color: #fff;
            text-decoration: none;
        }

        .btn-s4 {
            background: transparent;
            border: 1.5px solid var(--accent3);
            color: var(--accent);
            font-family: var(--font-head);
            font-size: 0.85rem;
            letter-spacing: 1px;
            padding: 0.55rem 1.5rem;
            border-radius: 0;
            transition: background 0.2s, color 0.2s;
            cursor: pointer;
        }

        .btn-s4:hover {
            background: var(--accent3);
            color: #1a1025;
            text-decoration: none;
        }

        /* POPOVER */
        .popover {
            border-radius: 0;
            border: 1px solid var(--border);
            background: #ffffff;
            box-shadow: 4px 4px 0 #ddd6f7;
            font-family: var(--font-body);
        }

        .popover-header {
            font-family: var(--font-head);
            background: var(--accent);
            color: #fff;
            border-radius: 0;
            font-size: 0.85rem;
            letter-spacing: 1px;
            border-bottom: none;
        }

        .popover-body {
            color: var(--text);
            font-size: 0.84rem;
            background: #ffffff;
        }

        .bs-popover-top .arrow::after {
            border-top-color: #ffffff;
        }

        .bs-popover-bottom .arrow::after {
            border-bottom-color: #ffffff;
        }

        .bs-popover-left .arrow::after {
            border-left-color: #ffffff;
        }

        .bs-popover-right .arrow::after {
            border-right-color: #ffffff;
        }

        /* CAPTION */
        .demo-caption {
            font-size: 0.74rem;
            color: var(--muted);
            margin-top: 0.6rem;
            letter-spacing: 0.5px;
        }

        /*FOOTER*/
        footer {
            padding: 2.5rem 0;
            text-align: center;
            font-size: 0.78rem;
            color: var(--muted);
            letter-spacing: 1px;
            border-top: 1px solid var(--border);
        }

        footer strong {
            color: var(--accent);
            font-family: var(--font-head);
        }

        code {
            color: var(--accent);
            background: transparent;
            font-size: 0.85em;
        }
    </style>
</head>

<body>

    <header class="site-header">
        <div class="container">
            <p class="header-meta">Muhammad Azka Bilfaqih &nbsp;/&nbsp; Tugas Pertemuan 3 &nbsp;/&nbsp; Bootstrap 4</p>
            <h1>Bootstrap 4<br><span>Popover</span></h1>
            <p class="mt-3" style="color:var(--muted); font-size:0.9rem; max-width:500px; position:relative;">
                Empat varian syntax popover dari dokumentasi W3Schools:
                basic, positioning, dismissible, dan hover trigger.
            </p>
        </div>
    </header>

    <main class="container">
        <!-- basic -->
        <section class="demo-section">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <p class="sec-num">01 / 04</p>
                    <h2 class="sec-title">Basic Popover</h2>
                    <p class="sec-desc">
                        Popover paling dasar. Perlu dua atribut:
                        <code>title</code> untuk teks header,
                        <code>data-content</code> untuk isi body.
                        Tidak aktif otomatis - harus diinisialisasi via jQuery.
                    </p>
                    <div class="code-block"><span class="tag">&lt;a</span> href="#"
                        <span class="attr">data-toggle</span>=<span class="val">"popover"</span>
                        <span class="attr">title</span>=<span class="val">"Popover Header"</span>
                        <span class="attr">data-content</span>=<span class="val">"Some content inside the
                            popover"</span><span class="tag">&gt;</span>
                        Toggle popover
                        <span class="tag">&lt;/a&gt;</span>

                        <span class="tag">&lt;script&gt;</span>
                        $('[data-toggle="popover"]').popover();
                        <span class="tag">&lt;/script&gt;</span>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="demo-box">
                        <a href="javascript:void(0)" data-toggle="popover" title="Popover Header"
                            data-content="Some content inside the popover. Ini muncul saat kamu klik." class="btn-s1">
                            Toggle popover
                        </a>
                    </div>
                    <p class="demo-caption">Klik tombol untuk toggle. Klik lagi di elemen yang sama untuk menutup.</p>
                </div>
            </div>
        </section>


        <!-- positioning -->
        <section class="demo-section">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <p class="sec-num">02 / 04</p>
                    <h2 class="sec-title">Positioning</h2>
                    <p class="sec-desc">
                        Atribut <code>data-placement</code> mengontrol dari sisi mana
                        popover muncul. Empat nilai yang tersedia:
                        <code>top</code>, <code>bottom</code>, <code>left</code>, <code>right</code>.
                        Bootstrap otomatis flip ke sisi lain bila ruang tidak cukup.
                    </p>
                    <div class="code-block"><span class="tag">&lt;a</span> href="#"
                        <span class="attr">data-toggle</span>=<span class="val">"popover"</span>
                        <span class="attr">data-placement</span>=<span class="val">"top"</span>
                        <span class="attr">title</span>=<span class="val">"Header"</span>
                        <span class="attr">data-content</span>=<span class="val">"Content"</span><span
                            class="tag">&gt;</span>Top<span class="tag">&lt;/a&gt;</span>

                        <span class="tag">&lt;a</span> <span class="attr">data-placement</span>=<span
                            class="val">"bottom"</span>
                        ...<span class="tag">&gt;</span>Bottom<span class="tag">&lt;/a&gt;</span>
                        <span class="tag">&lt;a</span> <span class="attr">data-placement</span>=<span
                            class="val">"left"</span>
                        ...<span class="tag">&gt;</span>Left<span class="tag">&lt;/a&gt;</span>
                        <span class="tag">&lt;a</span> <span class="attr">data-placement</span>=<span
                            class="val">"right"</span>
                        ...<span class="tag">&gt;</span>Right<span class="tag">&lt;/a&gt;</span>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="demo-box" style="min-height:200px; gap:0.8rem;">
                        <a href="javascript:void(0)" data-toggle="popover" data-placement="top" title="Top Placement"
                            data-content="Popover muncul di atas elemen." class="btn-top">
                            Top
                        </a>
                        <a href="javascript:void(0)" data-toggle="popover" data-placement="bottom"
                            title="Bottom Placement" data-content="Popover muncul di bawah elemen." class="btn-bottom">
                            Bottom
                        </a>
                        <a href="javascript:void(0)" data-toggle="popover" data-placement="left" title="Left Placement"
                            data-content="Popover muncul di kiri elemen." class="btn-left">
                            Left
                        </a>
                        <a href="javascript:void(0)" data-toggle="popover" data-placement="right"
                            title="Right Placement" data-content="Popover muncul di kanan elemen." class="btn-right">
                            Right
                        </a>
                    </div>
                    <p class="demo-caption">
                        Klik masing-masing tombol. Perhatikan arah popover berbeda-beda sesuai nilai data-placement.
                    </p>
                </div>
            </div>
        </section>


        <!-- dismissible -->
        <section class="demo-section">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <p class="sec-num">03 / 04</p>
                    <h2 class="sec-title">Dismissible<br>Focus Trigger</h2>
                    <p class="sec-desc">
                        <code>data-trigger="focus"</code> membuat popover tertutup
                        saat user klik di luar elemen - tidak perlu klik tombol lagi.
                        Harus pakai tag <code>&lt;a&gt;</code> dengan atribut <code>tabindex="0"</code>
                        agar bekerja lintas browser.
                    </p>
                    <div class="code-block"><span class="tag">&lt;a</span> href="#"
                        tabindex="0"
                        <span class="attr">data-toggle</span>=<span class="val">"popover"</span>
                        <span class="attr">data-trigger</span>=<span class="val">"focus"</span>
                        <span class="attr">title</span>=<span class="val">"Dismissible popover"</span>
                        <span class="attr">data-content</span>=<span class="val">"Klik di luar untuk
                            menutup"</span><span class="tag">&gt;</span>
                        Click me
                        <span class="tag">&lt;/a&gt;</span>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="demo-box">
                        <a href="javascript:void(0)" tabindex="0" title="Dismissible Popover"
                            data-toggle="popover" data-trigger="focus"
                            data-content="Klik di mana saja di luar elemen ini untuk menutup popover ini."
                            class="btn-s3">
                            Click me
                        </a>
                    </div>
                    <p class="demo-caption">
                        Klik tombol, lalu klik area kosong di luar - popover otomatis tertutup.
                    </p>
                </div>
            </div>
        </section>


        <!-- hover -->
        <section class="demo-section" style="border-bottom:none;">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <p class="sec-num">04 / 04</p>
                    <h2 class="sec-title">Hover Trigger</h2>
                    <p class="sec-desc">
                        <code>data-trigger="hover"</code> membuat popover muncul
                        ketika mouse diarahkan ke elemen, dan hilang saat mouse meninggalkan elemen.
                        Berguna sebagai pengganti tooltip biasa saat konten terlalu panjang.
                    </p>
                    <div class="code-block"><span class="tag">&lt;a</span> href="#"
                        <span class="attr">data-toggle</span>=<span class="val">"popover"</span>
                        <span class="attr">data-trigger</span>=<span class="val">"hover"</span>
                        <span class="attr">title</span>=<span class="val">"Header"</span>
                        <span class="attr">data-content</span>=<span class="val">"Some content"</span><span
                            class="tag">&gt;</span>
                        Hover over me
                        <span class="tag">&lt;/a&gt;</span>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="demo-box">
                        <a href="javascript:void(0)" title="Hover Trigger" data-toggle="popover"
                            data-trigger="hover" data-placement="top"
                            data-content="Popover ini muncul saat kamu hover dan hilang saat mouse pergi."
                            class="btn-s4">
                            Hover over me
                        </a>
                    </div>
                    <p class="demo-caption">
                        Arahkan mouse ke tombol - tidak perlu klik sama sekali.
                    </p>
                </div>
            </div>
        </section>


        <!-- case study -->
        <section class="demo-section" style="border-bottom:none; padding-bottom:5rem;">
            <p class="sec-num">USE CASE</p>
            <h2 class="sec-title">Contoh Penggunaan dalam Bisnis</h2>
            <p class="sec-desc">
                Popover bukan sekadar tooltip. Dalam konteks produk nyata,
                popover dipakai untuk menyampaikan informasi kontekstual
                tanpa memaksa user berpindah halaman.
            </p>

            <div class="row">

                <div class="col-md-6 mb-4">
                    <div style="border:1px solid var(--border); padding:1.5rem; background:var(--surface);">
                        <p
                            style="font-size:0.7rem; letter-spacing:2px; text-transform:uppercase; color:var(--muted); margin-bottom:0.4rem;">
                            Kasus 1 - E-Commerce</p>
                        <p style="font-weight:600; margin-bottom:1rem; color:var(--text);">Informasi stok dan garansi
                            produk</p>

                        <div style="background:#fff; border:1px solid var(--border); padding:1rem;">
                            <div
                                style="background:#ede9fe; height:160px; margin-bottom:0.75rem; display:flex; align-items:center; justify-content:center; overflow:hidden;">
                                <img src="https://m.media-amazon.com/images/I/71B06cYCkyL._AC_UF894,1000_QL80_.jpg"
                                    alt="Laptop Ultrabook X1" style="height:100%; width:100%; object-fit:contain;">
                            </div>
                            <p style="font-size:0.9rem; font-weight:600; color:var(--text); margin-bottom:0.25rem;">
                                Laptop Ultrabook
                                X1</p>
                            <p style="font-size:1rem; color:var(--accent); font-weight:700; margin-bottom:0.75rem;">Rp
                                14.500.000</p>

                            <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                                <button type="button" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title="Status Stok"
                                    data-content="Tersisa 3 unit di gudang Jakarta. Estimasi pengiriman 1-2 hari kerja."
                                    style="font-size:0.75rem; background:#dcfce7; color:#166534; border:none; padding:0.3rem 0.7rem; cursor:pointer;">
                                    Stok: 3 unit
                                </button>

                                <button type="button" data-toggle="popover" data-placement="top"
                                    title="Garansi Resmi"
                                    data-content="Garansi resmi distributor 2 tahun. Klaim garansi bisa dilakukan di 150+ service center seluruh Indonesia."
                                    style="font-size:0.75rem; background:#ede9fe; color:var(--accent); border:1px solid var(--accent3); padding:0.3rem 0.7rem; cursor:pointer;">
                                    Garansi 2 tahun
                                </button>
                            </div>
                        </div>

                        <div class="code-block" style="margin-top:0.75rem;">
                            <span class="tag">&lt;!-- hover: info stok realtime --&gt;</span>
                            <span class="tag">&lt;button</span> <span class="attr">data-trigger</span>=<span
                                class="val">"hover"</span>
                            <span class="attr">title</span>=<span class="val">"Status Stok"</span>
                            <span class="attr">data-content</span>=<span class="val">"Tersisa 3
                                unit..."</span><span class="tag">&gt;</span>

                            <span class="tag">&lt;!-- click: detail garansi --&gt;</span>
                            <span class="tag">&lt;button</span> <span class="attr">data-toggle</span>=<span
                                class="val">"popover"</span>
                            <span class="attr">title</span>=<span class="val">"Garansi Resmi"</span>
                            <span class="attr">data-content</span>=<span class="val">"Garansi 2
                                tahun..."</span><span class="tag">&gt;</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div style="border:1px solid var(--border); padding:1.5rem; background:var(--surface);">
                        <p
                            style="font-size:0.7rem; letter-spacing:2px; text-transform:uppercase; color:var(--muted); margin-bottom:0.4rem;">
                            Kasus 2 - Dashboard Admin</p>
                        <p style="font-weight:600; margin-bottom:1rem; color:var(--text);">Penjelasan metrik dan
                            indikator KPI</p>

                        <div style="background:#fff; border:1px solid var(--border); padding:1rem;">
                            <p
                                style="font-size:0.72rem; color:var(--muted); margin-bottom:0.75rem; text-transform:uppercase; letter-spacing:1px;">
                                Ringkasan Penjualan Bulan Ini</p>
                            <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.5rem;">

                                <div style="border:1px solid var(--border); padding:0.75rem; text-align:center;"
                                    data-toggle="popover" data-trigger="hover" data-placement="top"
                                    title="Total Revenue"
                                    data-content="Total pendapatan kotor sebelum dikurangi retur dan diskon. Naik 12% dari bulan lalu.">
                                    <div style="font-size:1.3rem; font-weight:700; color:var(--accent);">Rp 248 jt
                                    </div>
                                    <div style="font-size:0.7rem; color:var(--muted);">Revenue <span
                                            style="color:#6d28d9;">?</span></div>
                                </div>

                                <div style="border:1px solid var(--border); padding:0.75rem; text-align:center;"
                                    data-toggle="popover" data-trigger="hover" data-placement="top"
                                    title="Conversion Rate"
                                    data-content="Persentase pengunjung yang melakukan pembelian. Rata-rata industri e-commerce: 1-3%.">
                                    <div style="font-size:1.3rem; font-weight:700; color:#7c3aed;">2.4%</div>
                                    <div style="font-size:0.7rem; color:var(--muted);">Conv. Rate <span
                                            style="color:#6d28d9;">?</span>
                                    </div>
                                </div>

                                <div style="border:1px solid var(--border); padding:0.75rem; text-align:center;"
                                    data-toggle="popover" data-trigger="hover" data-placement="bottom"
                                    title="Churn Rate"
                                    data-content="Persentase pelanggan yang berhenti berlangganan dalam 30 hari terakhir. Target perusahaan: di bawah 5%.">
                                    <div style="font-size:1.3rem; font-weight:700; color:#dc2626;">3.1%</div>
                                    <div style="font-size:0.7rem; color:var(--muted);">Churn Rate <span
                                            style="color:#6d28d9;">?</span>
                                    </div>
                                </div>

                                <div style="border:1px solid var(--border); padding:0.75rem; text-align:center;"
                                    data-toggle="popover" data-trigger="hover" data-placement="bottom"
                                    title="NPS Score"
                                    data-content="Net Promoter Score: seberapa besar pelanggan merekomendasikan produk ke orang lain. Skala -100 sampai 100.">
                                    <div style="font-size:1.3rem; font-weight:700; color:#059669;">+61</div>
                                    <div style="font-size:0.7rem; color:var(--muted);">NPS Score <span
                                            style="color:#6d28d9;">?</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="code-block" style="margin-top:0.75rem;">
                            <span class="tag">&lt;!-- hover pada metric card: jelaskan istilah KPI --&gt;</span>
                            <span class="tag">&lt;div</span> <span class="attr">data-trigger</span>=<span
                                class="val">"hover"</span>
                            <span class="attr">data-placement</span>=<span class="val">"top"</span>
                            <span class="attr">title</span>=<span class="val">"Churn Rate"</span>
                            <span class="attr">data-content</span>=<span class="val">"Persentase
                                pelanggan..."</span><span class="tag">&gt;</span>
                            3.1%
                            <span class="tag">&lt;/div&gt;</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div style="border:1px solid var(--border); padding:1.5rem; background:var(--surface);">
                        <p
                            style="font-size:0.7rem; letter-spacing:2px; text-transform:uppercase; color:var(--muted); margin-bottom:0.4rem;">
                            Kasus 3 - Form Registrasi</p>
                        <p style="font-weight:600; margin-bottom:1rem; color:var(--text);">Panduan aturan input tanpa
                            mengganggu
                            layout</p>

                        <div style="background:#fff; border:1px solid var(--border); padding:1rem;">
                            <div style="margin-bottom:0.75rem;">
                                <label
                                    style="font-size:0.8rem; color:var(--text); display:block; margin-bottom:0.3rem;">
                                    Password
                                    <a href="javascript:void(0)" tabindex="0" data-toggle="popover"
                                        data-trigger="focus" data-placement="right" title="Syarat Password"
                                        data-content="Min. 8 karakter, harus mengandung huruf besar, huruf kecil, angka, dan satu simbol (!@#$%)."
                                        style="font-size:0.7rem; color:var(--accent); margin-left:0.4rem; text-decoration:none;">
                                        Lihat syarat
                                    </a>
                                </label>
                                <input type="password" placeholder="Masukkan password"
                                    style="width:100%; border:1px solid var(--border); padding:0.45rem 0.7rem; font-size:0.85rem; outline:none;">
                            </div>

                            <div>
                                <label
                                    style="font-size:0.8rem; color:var(--text); display:block; margin-bottom:0.3rem;">
                                    Kode Referral
                                    <a href="javascript:void(0)" tabindex="0" data-toggle="popover"
                                        data-trigger="focus" data-placement="right" title="Apa itu Kode Referral?"
                                        data-content="Kode unik 8 digit yang diberikan oleh pengguna lama. Isi kolom ini untuk mendapat diskon 20% di pembelian pertama."
                                        style="font-size:0.7rem; color:var(--accent); margin-left:0.4rem; text-decoration:none;">
                                        Apa ini?
                                    </a>
                                </label>
                                <input type="text" placeholder="Opsional"
                                    style="width:100%; border:1px solid var(--border); padding:0.45rem 0.7rem; font-size:0.85rem; outline:none;">
                            </div>
                        </div>

                        <div class="code-block" style="margin-top:0.75rem;">
                            <span class="tag">&lt;!-- focus trigger: panduan muncul saat user aktif di field
                                --&gt;</span>
                            <span class="tag">&lt;a</span> <span class="attr">tabindex</span>=<span
                                class="val">"0"</span>
                            <span class="attr">data-trigger</span>=<span class="val">"focus"</span>
                            <span class="attr">data-placement</span>=<span class="val">"right"</span>
                            <span class="attr">title</span>=<span class="val">"Syarat Password"</span>
                            <span class="attr">data-content</span>=<span class="val">"Min. 8
                                karakter..."</span><span class="tag">&gt;</span>
                            Lihat syarat
                            <span class="tag">&lt;/a&gt;</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div style="border:1px solid var(--border); padding:1.5rem; background:var(--surface);">
                        <p
                            style="font-size:0.7rem; letter-spacing:2px; text-transform:uppercase; color:var(--muted); margin-bottom:0.4rem;">
                            Kasus 4 - Manajemen Pengguna</p>
                        <p style="font-weight:600; margin-bottom:1rem; color:var(--text);">Konfirmasi aksi destruktif
                            sebelum
                            dieksekusi</p>

                        <div style="background:#fff; border:1px solid var(--border); padding:1rem; overflow-x:auto;">
                            <table style="width:100%; font-size:0.8rem; border-collapse:collapse;">
                                <thead>
                                    <tr style="border-bottom:2px solid var(--border);">
                                        <th
                                            style="padding:0.4rem 0.5rem; text-align:left; color:var(--muted); font-weight:500;">
                                            Nama</th>
                                        <th
                                            style="padding:0.4rem 0.5rem; text-align:left; color:var(--muted); font-weight:500;">
                                            Role</th>
                                        <th
                                            style="padding:0.4rem 0.5rem; text-align:left; color:var(--muted); font-weight:500;">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid var(--border);">
                                        <td style="padding:0.5rem;">Andi Pratama</td>
                                        <td style="padding:0.5rem;"><span
                                                style="background:#ede9fe; color:var(--accent); font-size:0.7rem; padding:0.1rem 0.4rem;">Admin</span>
                                        </td>
                                        <td style="padding:0.5rem;">
                                            <button type="button" data-toggle="popover" data-placement="left"
                                                title="Nonaktifkan Akun?"
                                                data-content="Akun Andi Pratama akan dinonaktifkan. User tidak bisa login sampai diaktifkan kembali oleh Super Admin."
                                                style="font-size:0.72rem; background:transparent; border:1px solid #dc2626; color:#dc2626; padding:0.2rem 0.5rem; cursor:pointer;">
                                                Nonaktifkan
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:0.5rem;">Rina Safitri</td>
                                        <td style="padding:0.5rem;"><span
                                                style="background:#f0fdf4; color:#166534; font-size:0.7rem; padding:0.1rem 0.4rem;">Editor</span>
                                        </td>
                                        <td style="padding:0.5rem;">
                                            <button type="button" data-toggle="popover" data-placement="left"
                                                title="Hapus Akun?"
                                                data-content="Tindakan ini permanen. Semua data Rina Safitri termasuk konten dan riwayat aktivitas akan dihapus dari sistem."
                                                style="font-size:0.72rem; background:transparent; border:1px solid #dc2626; color:#dc2626; padding:0.2rem 0.5rem; cursor:pointer;">
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="code-block" style="margin-top:0.75rem;">
                            <span class="tag">&lt;!-- click trigger: konfirmasi sebelum aksi destruktif
                                --&gt;</span>
                            <span class="tag">&lt;button</span> <span class="attr">data-toggle</span>=<span
                                class="val">"popover"</span>
                            <span class="attr">data-placement</span>=<span class="val">"left"</span>
                            <span class="attr">title</span>=<span class="val">"Hapus Akun?"</span>
                            <span class="attr">data-content</span>=<span class="val">"Tindakan ini
                                permanen..."</span><span class="tag">&gt;</span>
                            Hapus
                            <span class="tag">&lt;/button&gt;</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <footer>
        <strong>Muhammad Azka Bilfaqih</strong> &nbsp;&nbsp; Tugas Pertemuan 3 &nbsp;&nbsp; Bootstrap 4 Popover
        &nbsp;&nbsp;
        Ref: W3Schools
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });
    </script>

</body>

</html>
