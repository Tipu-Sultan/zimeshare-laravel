<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Search PID
        </h2>
    </x-slot>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                        <div class="grid sm:grid-cols-2 md:grid-cols-8 lg:grid-cols-6 gap-4 p-4">

                            <div class="lg:col-span-3 sm:col-span-1">
                                <div class="card p-4">
                                    <div class="relative">
                                        <div class="flex items-center">
                                            <svg class="pointer-events-none absolute left-4 top-3.5 h-5 w-5 text-gray-700"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                            <input type="text" id="searchPid" name="searchPid"
                                                class="h-12 w-full rounded-full border-b border-blue-300 bg-transparent pl-11 pr-4 text-gray-900 placeholder:text-gray-900 focus:ring-1 focus:ring-blue-100 md:text-md"
                                                placeholder="Search at least 3 chars..." role="combobox"
                                                aria-expanded="false" aria-controls="options"
                                                oninput="searchPid(this.value)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            PID

                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            Section

                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            Content

                                        </a>
                                    </th>

                                    <th scope="col" class="relative">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white" id="searchResults">
                                @foreach($pids as $pid)
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{$pid->pid}}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">{{$pid->section}}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <ul style="list-style-type:disc">
                                            {!! $pid->content !!}
                                        </ul>
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function searchPid(params) {
            if (params.length >= 3) {
                $.ajax({
                    url: '/api/pid',
                    type: 'GET',
                    data: { query: params },
                    success: function (data) {
                        $('#searchResults').html('');
                        if (data.length > 0) {
                            data.forEach(function (pid) {
                                var newRow = '<tr>' +
                                    '<td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">' + pid.pid + '</td>' +
                                    '<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">' + pid.section + '</td>' +
                                    '<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">' +
                                    '<ul style="list-style-type:disc">' + pid.content + '</ul>' +
                                    '</td>' +
                                    '<td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">' +
                                    '<a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>' +
                                    '</td>' +
                                    '</tr>';

                                $('#searchResults').append(newRow);
                            });
                        } else {
                            $('#searchResults').html('<h5>Opps! Search Results not found</h5>');
                        }
                    },
                    error: function (error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                var updateRow = `@foreach($pids as $pid)
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{$pid->pid}}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">{{$pid->section}}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <ul style="list-style-type:disc">{!! $pid->content !!}</ul>
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>

                                    </td>
                                </tr>
                                @endforeach`;
                $('#searchResults').html(updateRow);
            }
        }
    </script>
</x-app-layout>