<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Hapus duplikasi Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Preline CSS -->
    <link href="https://cdn.jsdelivr.net/npm/preline@1.0.0/dist/preline.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js"></script>

    <!-- Menambahkan file CSS dan JS dari Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Optional: script tambahan seperti jQuery jika diperlukan -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        .element {
            transform: scale(1.1);
            /* Sebagai pengganti zoom */
            transform-origin: 0 0;
        }
    </style>
</head>

<body>
    <div class="max-w-[100rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="mx-auto max-w-6xl">
            <div class="text-center">
                <h2 class="text-xl text-gray-800 font-bold sm:text-3xl white:text-dark">
                    Tambah Data Tipe Ikan
                </h2>
            </div>

            <!-- Card -->
            <div
                class="mt-5 p-4 relative z-10 bg-white border rounded-xl sm:mt-10 md:p-10 dark:bg-neutral-300 dark:border-neutral-700">
                <form action="{{ route('storetype') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 sm:mb-8">
                        <label for="typename" class="block mb-2 text-lg font-lg dark:text-dark">Nama Jenis
                            Ikan:</label>
                        <input type="text" id="typename" name="typename"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Masukkan nama jenis ikan" required>
                    </div>

                    <div class="mb-4 sm:mb-8">
                        <label for="category" class="block mb-2 text-lg font-lg dark:text-dark">Kategori
                            Jenis:</label>
                        <input type="text" id="category" name="category"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Masukkan nama jenis ikan" required>
                    </div>
                    <!-- Button Submit -->
                    <div class="mt-6 grid">
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-lg font-lg rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Submit</button>
                    </div>
                </form>
            </div>
            <!-- End Card -->
        </div>
    </div>
    <script src="./node_modules/preline/dist/preline.js"></script>
    <script>
        // Menambahkan format uang secara otomatis saat mengetik
        document.getElementById('harga').addEventListener('input', function(event) {
            let input = event.target;
            let value = input.value.replace(/\D/g, ''); // Hapus karakter selain angka

            // Format angka dengan titik pemisah ribuan
            let formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

            input.value = formattedValue; // Tampilkan hasil
        });
    </script>
</body>

</html>
