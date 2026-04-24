<!DOCTYPE html>
<html lang="en">
<head>
    <title>5026241130</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Open+Sans:400,700" rel="stylesheet">
    <style>
        body {
            font-family: "Libre Baskerville", serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 30px;
            background-color: #0c0f15;
            overflow-x: hidden;
            color: #ababab;
        }
        ::-webkit-scrollbar { width: 10px; background-color: #F5F5F5; }
        ::-webkit-scrollbar-thumb {
            background-color: #f90a23;
            background-image: -webkit-linear-gradient(45deg, rgba(255,255,255,.2) 25%, transparent 25%, transparent 50%, rgba(255,255,255,.2) 50%, rgba(255,255,255,.2) 75%, transparent 75%, transparent);
        }
        ::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); background-color: #F5F5F5; }

        .heading-page {
            text-transform: uppercase;
            font-size: 43px;
            font-weight: bolder;
            letter-spacing: 3px;
            color: white;
        }
        a { color: inherit; transition: all 0.3s ease 0s; }
        a:hover, a:focus { color: #ababab; text-decoration: none; outline: 0 none; }
        h1, h2, h3, h4, h5, h6 { color: #1e2530; font-family: "Open Sans", sans-serif; margin: 0; line-height: 1.3; }
        p { margin-bottom: 20px; }
        p:last-child { margin-bottom: 0; }
        ::-moz-selection { background-color: #FA6862; color: #fff; }
        ::selection { background-color: #FA6862; color: #fff; }

        .pt-table { display: table; width: 100%; height: calc(100vh - 4px); }
        .pt-tablecell { display: table-cell; vertical-align: middle; }
        .overlay { position: absolute; left: 0; top: 0; width: 100%; height: 100%; }
        .relative { position: relative; }
        .clear:before, .clear:after { content: " "; display: table; }
        .clear:after { clear: both; }

        .mt20 { margin-top: 20px; }
        .site-wrapper { border-top: 4px solid #ff0037; }

        .page-title { margin-bottom: 55px; }
        .page-title p { font-size: 14px; font-family: monospace; line-height: 21px; }

        /* Home page */
        .page-home {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            vertical-align: middle;
        }
        .page-home .overlay {
            background-color: rgba(14, 17, 24, 0.93);
            background-image: url("https://images.unsplash.com/photo-1486870591958-9b9d0d1dda99?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80");
            background-size: cover;
            background-position: center;
        }

        /* Hexagon */
        .hexagon-item {
            cursor: pointer;
            width: 200px;
            height: 173.20508px;
            float: left;
            margin-left: -29px;
            z-index: 0;
            position: relative;
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg);
        }
        .hexagon-item:first-child { margin-left: 0; }
        .hexagon-item:hover { z-index: 1; }
        .hexagon-item:hover .hex-item:last-child {
            opacity: 1;
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }
        .hexagon-item:hover .hex-item:first-child {
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        .hexagon-item:hover .hex-item:first-child div:before,
        .hexagon-item:hover .hex-item:first-child div:after { height: 5px; }
        .hexagon-item:hover .hex-item div::before,
        .hexagon-item:hover .hex-item div::after { background-color: #ff0037; }
        .hexagon-item:hover .hex-content svg {
            -webkit-transform: scale(0.97);
            transform: scale(0.97);
        }
        .hexagon-item:hover .icon i { color: #ff0037; transition: 0.6s; }
        .hexagon-item:hover .title {
            -webkit-animation: focus-in-contract 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: focus-in-contract 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }

        /* Second row offset — last 5 of 11 */
        .page-home .hexagon-item:nth-last-child(1),
        .page-home .hexagon-item:nth-last-child(2),
        .page-home .hexagon-item:nth-last-child(3),
        .page-home .hexagon-item:nth-last-child(4),
        .page-home .hexagon-item:nth-last-child(5) {
            -webkit-transform: rotate(30deg) translate(87px, -80px);
            transform: rotate(30deg) translate(87px, -80px);
        }

        .hex-item { position: absolute; top: 0; left: 50px; width: 100px; height: 173.20508px; }
        .hex-item:first-child {
            z-index: 0;
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .hex-item:last-child { transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1); z-index: 1; }
        .hex-item div {
            box-sizing: border-box;
            position: absolute;
            top: 0;
            width: 100px;
            height: 173.20508px;
            transform-origin: center center;
        }
        .hex-item div::before, .hex-item div::after {
            background-color: #1e2530;
            content: "";
            position: absolute;
            width: 100%;
            height: 3px;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
        }
        .hex-item div:before { top: 0; }
        .hex-item div:after { bottom: 0; }
        .hex-item div:nth-child(1) { transform: rotate(0deg); }
        .hex-item div:nth-child(2) { transform: rotate(60deg); }
        .hex-item div:nth-child(3) { transform: rotate(120deg); }

        .hex-content {
            color: #fff;
            display: block;
            height: 180px;
            margin: 0 auto;
            position: relative;
            text-align: center;
            transform: rotate(-30deg);
            width: 156px;
        }
        .hex-content .hex-content-inner {
            left: 50%;
            margin: -3px 0 0 2px;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .hex-content .icon { display: block; font-size: 36px; line-height: 30px; margin-bottom: 11px; }
        .hex-content .title {
            display: block;
            font-family: "Open Sans", sans-serif;
            font-size: 11px;
            letter-spacing: 1px;
            line-height: 18px;
            text-transform: uppercase;
        }
        .hex-content svg {
            left: -7px;
            position: absolute;
            top: -13px;
            transform: scale(0.87);
            z-index: -1;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
        }
        .hex-content:hover { color: #fff; }

        .pt-table.desktop-768 .pt-tablecell { padding-bottom: 110px; padding-top: 60px; }

        @-webkit-keyframes focus-in-contract {
            0% { letter-spacing: 1em; -webkit-filter: blur(12px); filter: blur(12px); opacity: 0; }
            100% { -webkit-filter: blur(0px); filter: blur(0px); opacity: 1; }
        }
        @keyframes focus-in-contract {
            0% { letter-spacing: 1em; -webkit-filter: blur(12px); filter: blur(12px); opacity: 0; }
            100% { -webkit-filter: blur(0px); filter: blur(0px); opacity: 1; }
        }

        @media only screen and (max-width: 767px) {
            .hexagon-item { float: none; margin: 0 auto 50px; }
            .hexagon-item:first-child { margin-left: auto; }
            .page-home .hexagon-item:nth-last-child(1),
            .page-home .hexagon-item:nth-last-child(2),
            .page-home .hexagon-item:nth-last-child(3),
            .page-home .hexagon-item:nth-last-child(4),
            .page-home .hexagon-item:nth-last-child(5) {
                -webkit-transform: rotate(30deg) translate(0px, 0px);
                transform: rotate(30deg) translate(0px, 0px);
            }
        }
    </style>
</head>
<body>
<main class="site-wrapper">
    <div class="pt-table desktop-768">
        <div class="pt-tablecell page-home relative">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div class="page-title home text-center">
                            <span class="heading-page">Muhammad Azka Bilfaqih</span>
                            <p class="mt20">5026241130 &mdash; Kumpulan Tugas Pemrograman Web</p>
                        </div>

                        <div class="hexagon-menu clear">

                            {{-- 1 --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p2intro">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-home"></i></span>
                                        <span class="title">P2 Intro</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>

                            {{-- 2 --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p2news">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-newspaper-o"></i></span>
                                        <span class="title">P2 News</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>

                            {{-- 3 --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p3responsive">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-mobile"></i></span>
                                        <span class="title">Responsive</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>

                            {{-- 4 --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p3template">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-file-text"></i></span>
                                        <span class="title">Template</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>

                            {{-- 5 --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p3popover">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-commenting"></i></span>
                                        <span class="title">Popover</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>

                            {{-- 6 — row 1 last --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p4">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-code"></i></span>
                                        <span class="title">Pertemuan 4</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>

                            {{-- 7 — row 2 first (nth-last-child 5) --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p7welcome">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="title">P7 Welcome</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>

                            {{-- 8 (nth-last-child 4) --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p5tugas">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-tasks"></i></span>
                                        <span class="title">Tugas P5</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>

                            {{-- 8 (nth-last-child 4) --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p5">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-book"></i></span>
                                        <span class="title">Pertemuan 5</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>

                            {{-- 9 (nth-last-child 3) --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p6linktree">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-link"></i></span>
                                        <span class="title">Link Tree</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>

                            {{-- 10 (nth-last-child 2) --}}
                            <div class="hexagon-item">
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <div class="hex-item"><div></div><div></div><div></div></div>
                                <a class="hex-content" href="/p6instagram">
                                    <span class="hex-content-inner">
                                        <span class="icon"><i class="fa fa-instagram"></i></span>
                                        <span class="title">Instagram</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
