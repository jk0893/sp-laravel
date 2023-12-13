<x-app-layout>
    <main class="w-auto h-screen p-32 flex justify-center items-center">
        <section>
            <div
                class="max-w-screen-sm max-h-max p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <form method="POST" action="{{ route('admin.bus.store') }}" class="grid place-content-center gap-8">
                    @csrf
                    <div class="flex-column justify-center">
                        <div>
                            <label for="bus_model_id" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Модель</label>
                        </div>
                        <div>
                            <select class="w-full rounded-md" name="bus_model_id" id="bus_model_id">
                                @foreach ($models as $model)
                                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex-column justify-center">
                        <div>
                            <label for="bus_mark_id" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Марка</label>
                        </div>
                        <div>
                            <select class="w-full rounded-md" name="bus_mark_id" id="bus_mark_id">
                                @foreach ($marks as $mark)
                                    <option value="{{ $mark->id }}">{{ $mark->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex-column justify-center">
                        <div>
                            <label for="status_id" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Маршрут</label>
                        </div>
                        <div>
                            <select class="w-full rounded-md" name="status_id" id="status_id">
                                @foreach ($routes as $route)
                                    <option value="{{ $route->id }}">{{ $route->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex-column justify-center">
                        <div>
                            <label for="status_id" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Статус</label>
                        </div>
                        <div>
                            <select class="w-full rounded-md" name="status_id" id="status_id">
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <x-primary-button class="ms-3">
                            {{ __('Создать') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</x-app-layout>
