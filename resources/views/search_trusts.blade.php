<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Search Trust
        </h2>
    </x-slot>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                        <form  class="flex gap-4"  method="post" action="/filterresults">
                        @csrf
                            <div class="flex gap-4 items-center grid lg:grid-cols-6 sm:grid-cols-3 p-4">
                                <div class="lg:col-span-3">
                                    <div class="card">
                                        <div class="relative">
                                            <div class="flex items-center">
                                                <input type="text" oninput="allTrustSearch(this.value)" name="searchInput" id="searchInput"
                                                    class="h-12 w-full rounded-full border-b border-blue-200 bg-transparent pl-11 pr-4 text-gray-900 placeholder:text-gray-900 focus:ring-1 focus:ring-blue-100 md:text-md"
                                                    placeholder="Search..." role="combobox" aria-expanded="false"
                                                    aria-controls="options">
                                                <span class="px-1 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="lg:col-span-1 sm:col-span-1">
                                        <label for="state" class="block text-sm font-medium text-gray-600">State</label>
                                        <select name="state" id="state"
                                            class="block w-36 rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            data-placeholder="Select a trust..." data-allow-clear="false"
                                            title="Select State...">
                                            @foreach($trusts as $trust)
                                            <option value="{{$trust->state}}">{{$trust->state}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="lg:col-span-1 sm:col-span-2">
                                        <label for="city" class="block text-sm font-medium text-gray-600">City</label>
                                        <select name="city" id="city"
                                            class="block w-36 rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            data-placeholder="Select a trust..." data-allow-clear="false"
                                            title="Select City...">
                                            @foreach($trusts as $trust)
                                            <option value="{{$trust->city}}">{{$trust->city}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="lg:col-span-1 sm:col-span-3 mt-2">
                                        <button type="submit" id="submitBtn" class="rounded-md bg-indigo-600 px-2.5 py-1.5 text-md font-semibold text-white
                                    shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring focus:border-indigo-300 
                                    focus:ring-indigo-200 focus-visible:outline-none focus-visible:ring 
                                    focus-visible:border-indigo-300">
                                            <span id="pleaseWait">search</span>
                                        </button>
                                    </div>
                            </div>
                        </form>
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            Site Id
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            Trust Name
                                            <span
                                                class="ml-2 flex-none rounded bg-gray-100 text-gray-900 group-hover:bg-gray-200">
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            Site Name
                                            <span
                                                class="ml-2 flex-none rounded bg-gray-100 text-gray-900 group-hover:bg-gray-200">
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            Country
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            State
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            City
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            Start Date
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            End Date
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            Added Date
                                        </a>
                                    </th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">Extra</span>
                                    </th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white" id="searchResults">
                                @foreach($trusts as $trust)

                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{ $trust->id }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                        $trust->trust_name
                                        }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                        $trust->site_name
                                        }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $trust->country }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $trust->state
                                        }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $trust->city }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                        $trust->start_date
                                        }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                        $trust->end_date }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                        $trust->added_date
                                        }}</td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Extra</a>
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="{{ route('edittrust', ['id' => $trust->id]) }}"
                                            class="text-indigo-600 hover:text-indigo-900">Edit</a>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="mt-4 flex">
                            @if ($trusts->previousPageUrl())
                                <a href="{{ $trusts->previousPageUrl() }}" class="px-3 py-2 text-sm font-medium leading-5 text-gray-700 bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue active:bg-gray-100 transition ease-in-out duration-150">
                                    &laquo; Previous
                                </a>
                            @else
                                <span class="px-3 py-2 text-sm font-medium leading-5 text-gray-500 bg-white border border-gray-300 rounded-md cursor-not-allowed">
                                    &laquo; Previous
                                </span>
                            @endif

                            <p class="text-sm text-gray-700">
                                Page {{ $trusts->currentPage() }} of {{ $trusts->lastPage() }}
                            </p>

                            @if ($trusts->nextPageUrl())
                                <a href="{{ $trusts->nextPageUrl() }}" class="px-4 py-2 text-sm font-medium leading-5 text-gray-700 bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue active:bg-gray-100 transition ease-in-out duration-150">
                                    Next &raquo;
                                </a>
                            @else
                                <span class="px-4 py-2 text-sm font-medium leading-5 text-gray-500 bg-white border border-gray-300 rounded-md cursor-not-allowed">
                                    Next &raquo;
                                </span>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#city').select2();
            $('#state').select2();
        });

        

        function allTrustSearch(params) {
            if (params.length >= 3) {
                $.ajax({
                    url: '/api/allTrustSearch',
                    type: 'GET',
                    data: { query: params },
                    success: function (response) {
                        $('#searchResults').html('');
                        response.forEach(function (trust) {
                            var newRow = '<tr>' +
                                '<td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">' + trust.id + '</td>' +
                                '<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">' + trust.trust_name + '</td>' +
                                '<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">' + trust.site_name + '</td>' +
                                '<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">' + trust.country + '</td>' +
                                '<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">' + trust.state + '</td>' +
                                '<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">' + trust.city + '</td>' +
                                '<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">' + trust.start_date + '</td>' +
                                '<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">' + trust.end_date + '</td>' +
                                '<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">' + trust.added_date + '</td>' +
                                '<td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">' +
                                '<a href="#" class="text-indigo-600 hover:text-indigo-900">Extra</a>' +
                                '</td>' +
                                '<td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">' +
                                '<a href="" class="text-indigo-600 hover:text-indigo-900">Edit</a>' +
                                '</td>' +
                                '</tr>';

                            $('#searchResults').append(newRow);
                        });
                    },
                    error: function (error) {
                        console.error('Error:', error);
                        $('#response').html('Error occurred. Please try again.');
                    },
                });
            } else {

                var updateRow = `@foreach($trusts as $trust)

                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{ $trust->id }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                        $trust->trust_name
                                        }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                        $trust->site_name
                                        }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $trust->country }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $trust->state
                                        }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $trust->city }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                        $trust->start_date
                                        }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                        $trust->end_date }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                        $trust->added_date
                                        }}</td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Extra</a>
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="{{ route('edittrust', ['id' => $trust->id]) }}"
                                            class="text-indigo-600 hover:text-indigo-900">Edit</a>

                                    </td>
                                </tr>
                                @endforeach`;
                $('#searchResults').html(updateRow);
            }
        };

    </script>
</x-app-layout>