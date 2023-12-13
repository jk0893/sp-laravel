<x-app-layout>
    <div class="flex justify-center translate-y-10">
        <a class="px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            href="{{ route('admin.busroute.create') }}">Добавить маршрут</a>
    </div>
    <main class="w-auto h-screen p-32">
        <div class="grid place-items-center">
            <section class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach ($routes as $route)
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-center">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $route->name }}</h5>
                        </a>
                        <div class="flex justify-center mt-5 gap-5">
                            <a href="{{ $route->link }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Перейти
                            </a>
                            <a class="px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                href="{{ route('admin.busroute.edit', $route->id) }}">Изменить</a>
                            <a class="px-3 py-2 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                href="{{ route('admin.busroute.destroy', $route->id) }}">Удалить</a>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
        <div class="md:scale-105 lg:scale-110 mt-12 flex justify-center">
            {{ $routes->links() }}
        </div>
    </main>
</x-app-layout>
