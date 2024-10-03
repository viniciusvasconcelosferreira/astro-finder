<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Astro Finder</title>
    <link rel="icon" type="image/png" href="../assets/imgs/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="../assets/imgs/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/x-icon" href="../assets/imgs/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&family=Open+Sans&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php if ($is_index): ?>
        <link rel="stylesheet" href="../assets/css/index.css">
    <?php elseif ($is_show_zodiac): ?>
        <link rel="stylesheet" href="../assets/css/show_zodiac_sign.css">
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</head>