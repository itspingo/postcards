<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <style>
        p {
            font-size: 12px;
        }

        .signature {
            font-style: italic;
        }
    </style>
</head>

<body>
    <div>
        <p>Hey {{ $name }}, </p>
        <p>{{ $text_format }}</p>
        <p>Please view the card: <a href="{{ $card_link }}">{{ $card_link }}</a></p>
        <p class="signature">Snoobix</p>
    </div>
</body>

</html>
