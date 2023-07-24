<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto.it</title>  
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @livewireStyles
</head>
<body>
    <x-navbar />

    <div class="min-page">
        {{$slot}}
        
    </div>
    
    <x-footer/>
    @livewireScripts
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>
</html>