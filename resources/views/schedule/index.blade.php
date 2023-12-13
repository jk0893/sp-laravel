<x-app-layout>
    <div class="relative overflow-x-auto m-14">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Маршрут:
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Активных автобусов:
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Начало:
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Конец:
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($routes as $route)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $route->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $route->buses_count }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $route->start_time }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $route->end_time }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3 flex justify-center">
            {{ $routes->links() }}
        </div>
    </div>


</x-app-layout>
