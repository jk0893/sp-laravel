<x-app-layout>
    <div class="flex justify-center translate-y-6">
        <a class="px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            href="{{ route('admin.busmark.create') }}">Добавить марку</a>
    </div>
    <div class="relative overflow-x-auto m-14">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Марка:
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Страна производителя:
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marks as $mark)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $mark->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $mark->origin_country }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-5">
                                <a class="px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    href="{{ route('admin.busmark.edit', $mark->id) }}">Изменить</a>
                                <a class="px-3 py-2 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                    href="{{ route('admin.busmark.destroy', $mark->id) }}">Удалить</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3 flex justify-center">
            {{ $marks->links() }}
        </div>
    </div>


</x-app-layout>
