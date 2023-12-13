<x-app-layout>
    <main class="w-auto h-screen p-32 flex justify-center items-center">
        <section>
            <div
                class="max-w-screen-sm max-h-max p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <form method="POST" action="{{ route('admin.busroute.update', $route->id) }}"
                    class="grid place-content-center gap-8">
                    @csrf
                    @method('patch')

                    <div>
                        <label for="name" class="font-normal text-gray-700 dark:text-gray-400">Название маршрута</label>
                        <input id="name" class="mb-3 font-normal text-gray-700 dark:text-gray-400 block mt-1 rounded-md" type="text" name="name" value="{{$route->name}}" required>
                    </div>
                    <div>
                        <label for="link" class="font-normal text-gray-700 dark:text-gray-400">Ссылка на таблицу</label>
                        <input id="link" class="font-normal text-gray-700 dark:text-gray-400 block mt-1 rounded-md" type="text" name="link" value="{{$route->link}}" required>
                    </div>
                    <div>
                        <label for="password" class="font-normal text-gray-700 dark:text-gray-400">Начало смены:</label>
                        <input id="password" class="font-normal text-gray-700 dark:text-gray-400 block mt-1 rounded-md w-full" type="time" value="{{$route->start_time}}" name="start_time"
                            required>
                    </div>
                    <div>
                        <label for="password" class="font-normal text-gray-700 dark:text-gray-400">Окончание смены:</label>
                        <input id="password" class="font-normal text-gray-700 dark:text-gray-400 block mt-1 rounded-md w-full" type="time" value="{{$route->end_time}}" name="end_time"
                            required>
                    </div>

                    <div class="flex justify-center">
                        <x-primary-button class="mt-3">
                            {{ __('Сохранить') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</x-app-layout>
