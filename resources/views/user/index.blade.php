<x-app-layout>
    <div class="flex justify-center translate-y-10">
        <a class="px-3 py-2 lg:text-sm md:text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            href="{{ route('admin.user.create') }}">Добавить пользователя</a>
    </div>
    <main class="w-auto h-screen p-32">
        <div class="grid place-items-center">
            <section class="grid md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-8">
                @foreach ($users as $user)
                    <div
                        class="max-w-lg p-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-center">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $user->name }}</h5>
                        <div class="grid md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 mt-5 gap-5">
                            <a href="{{ route('admin.user.show', $user->id) }}"
                                class="p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Перейти
                            </a>
                            <a class="p-3 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                href="{{ route('admin.user.edit', $user->id) }}">Изменить</a>
                            <form method="POST" action="{{ route('admin.user.destroy', $user->id) }}">
                                @csrf
                                @method('delete')
                                <button
                                    class="p-3 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    Удалить</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
        <div class="md:scale-110 lg:scale-125 mt-12 flex justify-center">
            {{ $users->links() }}
        </div>
    </main>
</x-app-layout>
