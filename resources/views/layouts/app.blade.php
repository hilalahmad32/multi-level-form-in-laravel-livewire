<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi-Level-form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    @livewireStyles

</head>

<body>
    <div class="container ">
        <div class="card mb-4">
            <div class="card-body bg-dark">
                <h2 class="text-center text-white">
                    Multi-Level-form-Livewire
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        {{ $slot }}
    </div>
    @livewireScripts
</body>


</html>
