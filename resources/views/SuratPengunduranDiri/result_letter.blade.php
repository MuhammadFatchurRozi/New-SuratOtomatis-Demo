<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil surat</title>

    <style>
        * {
            text-decoration: none;
            box-sizing: border-box;
            text-decoration: none;

        }

        a:link {
            text-decoration: none;
            color: #fff;
        }

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        div pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        font,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        figure,
        header,
        nav,
        section,
        article,
        aside,
        footer,
        figcaption {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;

        }


        html,
        body {
            font-family: 'poppins', 'open-sans';
            font-weight: 400;
            font-size: 16px;
            background: none;
        }

        body {
            overflow-x: hidden;
            overflow: hidden;
            /* background-color: #000000; */
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }



        section.body-letter {
            background: white;
            padding: calc(2.54cm);

            margin: auto;
        }

        section.header {
            padding-top: 44px;
        }

        section.header h1 {
            text-align: center;
            font-family: Times New Roman;
            font-style: normal;
            font-weight: 800;
            font-size: 18px;
            line-height: 21px;
            /* identical to box height */

            text-decoration-line: underline;

            color: #000000;
        }

        section.header .date-letter {
            margin-top: 23px;
        }

        section.header .date-letter h3 {
            text-align: right;
            margin-right: 31px;
            font-family: Times New Roman;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 14px;
            /* identical to box height */

            color: #000000;
        }

        section.to {
            margin-top: 10px;
            margin-left: 23px;
        }

        section.to h3 {
            margin-top: 9px;
            font-family: Times New Roman;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 14px;
            /* identical to box height */


            color: #000000;
        }

        section.text-letter {
            margin-top: 27px;
            margin-left: 23px;
            margin-right: 23px;
        }

        section.text-letter h3 {
            font-family: Times New Roman;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 14px;
            /* identical to box height */


            color: #000000;
        }

        section.text-letter p {
            margin-top: 10px;
            font-family: Times New Roman;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 14px;
            text-indent: 3em;
            text-align: justify;

            color: #000000;
        }

        section.footer {
            margin-top: 25px;
            padding-left: 462px;
        }

        section.footer h3 {
            font-family: Times New Roman;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 14px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        section.footer h3:nth-child(2) {
            padding-top: 45px;
        }
    </style>
</head>

<body>
    <section class="body-letter">
        <section class="header">
            <h1>SURAT PENGUNDURAN DIRI</h1>
            <div class="date-letter">

                <h3>{{ $SMI->tempat_penerbit }}, {{ $SMI->waltu_terbitan }} </h3>

            </div>
        </section>
        <section class="to">
            <h3>Kepada Yth.</h3>
            <h3>{{ $SMI->penerima_surat }}</h3>
            <h3>Di tempat</h3>
        </section>
        <section class="text-letter">
            <h3>Dengan Hormat,</h3>
            <p>Melalui surat ini saya {{ $SMI->nama_lengkap }} bermaksud untuk mengundurkan diri sebagai
                {{ $SMI->jabatan }}
                di {{ $SMI->nama_perusahaan }}<br> Indonesia terhitung sejak tanggal {{ $SMI->tanggal_pengunduran }}.
            </p>
            <p>Saya sangat berterimakasih atas kesempatan yang telah diberikan kepada saya untuk bekerja di
                {{ $SMI->nama_perusahaan }}, saya juga meminta maaf kepada seluruh karyawan dan pimpinan apabila
                terdapat kesalahan yang telah saya lakukan selama bekerja.</p>
            <p>Demikian Surat Pengunduran Diri ini saya tulis dengan sebenar-benarnya dan penuh kesadaran. saya
                berharap perusahaan dapat terus berjaya dan memperoleh yang terbaik</p>
        </section>
        <section class="footer">
            <h3>hormat saya</h3>
            <h3>{{ $SMI->nama_lengkap }}</h3>
        </section>
    </section>
</body>

</html>
