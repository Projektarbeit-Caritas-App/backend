<!DOCTYPE html>
<html lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Karte {{ $card->id }}</title>
    <style>
        html {
            width: 8.5cm;
            height: 5.5cm;
            border: black dotted 1px;
            background: white;
            color: black;
            font-family: "verdana", sans-serif;
            position: relative;
        }

        main {
            height: 100%;
            width: 100%;
        }

        .id {
            font-size: 0.8rem;
            text-align: right;
            margin-block-start: 0.2cm;
        }

        .name {
            font-size: 1.2rem;
            font-weight: bold;
            margin-block-end: 0;
        }

        .people {
            margin-block-start: 0.2cm;
        }

        .valid {
            position: absolute;
            bottom: 0.5cm;
        }

        .valid th {
            font-weight: normal;
            text-align: left;
            padding-right: 0.2cm;
        }

        .qr-code {
            position: absolute;
            bottom: 0.5cm;
            right: 0.5cm;
            height: 2.5cm;
            width: 2.5cm;
            background: black;
        }

        .qr-code img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<main>
    <section>
        <p class="id">{{ $card->id }}</p>
        <p class="name">{{ $card->first_name }} {{ $card->last_name }}</p>
        <p class="people">
            {{ $card->people_count }} Person(en)
        </p>
        <table class="valid">
            <tr>
                <td colspan="2">Gültig</td>
            </tr>
            <tr>
                <th>ab</th>
                <td><strong>{{ $card->valid_from->format('d.m.Y') }}</strong></td>
            </tr>
            <tr>
                <th>bis</th>
                <td><strong>{{ $card->valid_until->format('d.m.Y') }}</strong></td>
            </tr>
        </table>
    </section>
    <aside class="qr-code">
        {{ QrCode::generate($card->id) }}
    </aside>
</main>
</body>
</html>
