<x-app-layout>
    <main class="w-auto h-screen p-32 flex justify-center items-center">
        <section>
            <div
                class="max-w-screen-sm max-h-max p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-center">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $user->name }}</h5>
                <div class="grid grid-cols-2 whitespace-nowrap overflow-hidden">
                    <div class="text-left">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Почта:</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Пароль:</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Права доступа:</p>
                    </div>
                    <div class="text-right">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $user->email }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $user->password }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $user->role->name }}</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
