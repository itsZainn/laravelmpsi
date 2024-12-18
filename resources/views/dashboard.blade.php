@extends('components.masterl')

@section('body')
    @php
        // dd($records);
        // if (!session()->has('init')) {
        //     // Inisialisasi nilai $type dan $fishType
        //     $c = $c ?? [];
        //     // $fish = [];
        //     $fishType = [];

        //     // Simpan data ke session
        //     session([
        //         'init' => true,
        //         'data' => $c,
        //     ]);
        //     // dd('Session disimpan:', $c, $fish, $fishType);
        // } else {
        //     $c = session('data');
        //     // dd('Session diambil:', $c);
        // }
        // dd($c);
        // $data = $data ?? 'undefined';
        $records = $records ?? [];
        $title = $title ?? 'No Title';
        $a = 0;
        // dd(compact('data'));
    @endphp

    <div class="mt-2">
        <div class="flex flex-wrap -mx-6 items-center justify-center">
            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                <a href="{{ route('show', 'fish') }}" class="block no-underline">
                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white hover:bg-gray-400">
                        <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                            <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                    fill="currentColor" />
                                <path
                                    d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                    fill="currentColor" />
                                <path
                                    d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                    fill="currentColor" />
                                <path
                                    d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                    fill="currentColor" />
                                <path
                                    d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                    fill="currentColor" />
                                <path
                                    d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">Ikan</h4>
                            <div class="text-gray-500">Total Ikan</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                <a href="{{ route('show', 'fishType') }}" class="block">
                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white hover:bg-gray-400">
                        <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                            <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z"
                                    fill="currentColor" />
                                <path
                                    d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z"
                                    fill="currentColor" />
                                <path
                                    d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">Jenis Ikan</h4>
                            <div class="text-gray-500">Total Jenis</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="mt-8">

    </div>

    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full border-collapse border border-gray-300">
                    <thead>
                        {{-- {{ dd($records) }} --}}
                        @if ($data === 'fish')
                            <tr>
                                <th
                                    class="px-6 py-3 border border-gray-200 bg-gray-50 text-left text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    No</th>
                                <th
                                    class="px-6 py-3 border border-gray-200 bg-gray-50 text-left text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    Id</th>
                                <th
                                    class="px-6 py-3 border border-gray-200 bg-gray-50 text-left text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    Nama Ikan</th>
                                <th
                                    class="px-6 py-3 border border-gray-200 bg-gray-50 text-left text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    Harga Ikan</th>
                                <th
                                    class="px-6 py-3 border border-gray-200 bg-gray-50 text-left text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    Keterangan</th>
                                <th colspan="2"
                                    class="px-6 py-3 border min-w-56 border-gray-200 bg-gray-50 text-center text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    Aksi</th>
                            </tr>
                        @elseif ($data === 'fishType')
                            <tr>
                                <th
                                    class="px-6 py-3 border border-gray-200 bg-gray-50 text-left text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    No</th>
                                <th
                                    class="px-6 py-3 border border-gray-200 bg-gray-50 text-left text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    Id</th>
                                <th
                                    class="px-6 py-3 border border-gray-200 bg-gray-50 text-left text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    Nama</th>
                                <th
                                    class="px-6 py-3 border border-gray-200 bg-gray-50 text-left text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    Category</th>
                                <th colspan="2"
                                    class="px-6 py-3 border border-gray-200 bg-gray-50 text-center text-xl font-extrabold text-gray-500 tracking-wider uppercase">
                                    Aksi</th>
                            </tr>
                        @endif
                    </thead>
                    <tbody class="bg-white">
                        @if ($data === 'fish')
                            @forelse ($records as $item)
                                <tr>
                                    {{-- @php
                                    dd(compact('data'));
                                @endphp --}}
                                    <td class="px-6 py-4 border font-medium border-gray-200 text-xl text-gray-900">
                                        {{ $a = $a + 1 }}
                                    </td>
                                    <td
                                        class="px-6 py-4 max-w-min border font-medium border-gray-200 text-xl text-gray-900">
                                        <img src="{{ asset('images/' . $item['img']) }}" alt="">
                                    </td>
                                    <td class="px-6 py-4 border font-medium border-gray-200 text-xl text-gray-900">
                                        {{ $item['fishname'] }}</td>
                                    <td class="px-6 py-4 border font-medium border-gray-200 text-xl text-gray-900">
                                        {{ $item['harga'] }}</td>
                                    <td class="px-6 py-4 border-b max-w-96 border-gray-200 text-xl text-gray-900">
                                        {{ $item['keterangan'] }}</td>
                                    {{-- <td class="py-4 border-b border-gray-200 text-xl text-indigo-700">
                                        <button class="w-full font-bold bg-transparent py-3 px-5 rounded hover:bg-gray-50">
                                            Edit
                                        </button>
                                    </td> --}}
                                    <td class="border-b font-bold border-gray-200 text-xl text-indigo-700">
                                        <form action="{{ route('editfish', $item['fish_id']) }}" method="GET">
                                            @csrf
                                            <button type="submit"
                                                class="w-full font-bold bg-transparent py-3 px-5 rounded hover:bg-gray-50">
                                                Edit
                                            </button>
                                        </form>
                                    </td>
                                    <td class="border-b font-bold border-gray-200 text-xl text-indigo-700">
                                        <form action="{{ route('deletefish', $item['fish_id']) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ikan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="w-full bg-transparent text-center text-red-600 py-2 px-4 rounded hover:text-orange-600 hover:bg-gray-50">
                                                Remove
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7"
                                        class="px-6 py-4 border-b border-gray-200 text-center text-sm text-gray-500">No data
                                        available</td>
                                </tr>
                            @endforelse
                        @elseif ($data === 'fishType')
                            @forelse ($records as $item)
                                <tr>
                                    {{-- @php
                                    dd(compact('data'));
                                @endphp --}}
                                    <td class="px-6 py-4 border font-medium border-gray-200 text-xl text-gray-900">
                                        {{ $a = $a + 1 }}
                                    </td>
                                    <td class="px-6 py-4 border font-medium border-gray-200 text-xl text-gray-900">
                                        {{ $item['type_id'] }}</td>
                                    <td class="px-6 py-4 border font-medium border-gray-200 text-xl text-gray-900">
                                        {{ $item['typename'] }}</td>
                                    <td class="px-6 py-4 border font-medium border-gray-200 text-xl text-gray-900">
                                        {{ $item['category'] }}</td>
                                    <td class="py-4 border-b border-gray-200 text-xl text-indigo-600 hover:text-indigo-900">
                                        <form action="{{ route('edittype', $item['type_id']) }}" method="GET">
                                            @csrf
                                            <button type="submit"
                                                class="w-full font-bold bg-transparent py-3 px-5 rounded hover:bg-gray-50">
                                                Edit
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4"
                                        class="px-6 py-4 border-b border-gray-200 text-center text-sm text-gray-500">No data
                                        available</td>
                                </tr>
                            @endforelse
                        @endif
                    </tbody>
                    <tfoot>
                        @if ($data === 'fish')
                            <tr>
                                <td colspan="7"
                                    class="px-6 py-2 border font-medium border-gray-200 bg-gray-50 text-gray-500 tracking-wider">
                                    <a href="{{ route('addfish') }}"
                                        class="w-full font-bold py-3 text-xl inline-block text-center hover:bg-gray-200 hover:text-blue-900">
                                        Tambah Data
                                    </a>
                                </td>
                            </tr>
                        @elseif ($data === 'fishType')
                            <tr>
                                <td colspan="7"
                                    class="px-6 py-2 border font-medium border-gray-200 bg-gray-50 text-gray-500 tracking-wider">
                                    <a href="{{ route('addtype') }}"
                                        class="w-full font-bold py-3 text-xl inline-block text-center hover:bg-gray-200 hover:text-blue-900">
                                        Tambah Data
                                    </a>
                                </td>
                            </tr>
                        @endif
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
