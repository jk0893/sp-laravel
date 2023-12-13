<x-app-layout>
    <main class="w-auto h-screen p-32 flex justify-center items-center">
        <section>
            <div
                class="max-w-screen-sm max-h-max p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-center">
                <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Автобус
                    №{{ $bus->id }}</h5>
                <div class="grid grid-cols-2">
                    <div class="text-left">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Марка:</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Модель:</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Водители:</p>
                        <p class="mt-3 font-normal text-gray-700 dark:text-gray-400">Статус:</p>
                    </div>
                    <div class="text-right">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $bus->bus_mark->name }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $bus->bus_model->name }}</p>
                        <div class="flex justify-end  text-gray-700 dark:text-gray-400">
                            @foreach ($bus->employees as $employee)
                                {{ $loop->first ? '' : ',' }}
                                <p class="mb-3 font-normal">
                                    {{ $employee->last_name }}</p>
                            @endforeach
                        </div>

                        <p id="status" class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $bus->status->name }}</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
