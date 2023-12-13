<x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <div class="text-center">
                        {{ __(Auth::user()->name) }}
                    </div>
                    <section class="grid grid-cols-2 place-content-center m-8 gap-32">
                        <div class="text-left">
                            <p>ФИО:</p>
                            <p>Дата рождения:</p>
                            <p>Паспорт:</p>
                            <p>Телефон:</p>
                            <p>Автобус:</p>
                            <p>Маршрут:</p>
                            <p>Статус:</p>
                        </div>
                        <div class="text-right">
                            @if (!empty(Auth::user()->employee))
                                <p>{{ Auth::user()->employee->last_name }} {{ Auth::user()->employee->first_name }}
                                    {{ Auth::user()->employee->father_name }}</p>
                                <p>{{ Auth::user()->employee->birth_date }}</p>
                                <p>{{ Auth::user()->employee->passport }}</p>
                                <p>{{ Auth::user()->employee->phone }}</p>
                                @if (!empty(Auth::user()->employee->bus))
                                <p>{{ Auth::user()->employee->bus->id }}</p>
                                <p>{{ Auth::user()->employee->bus->bus_route->name }}</p>
                                <p>{{ Auth::user()->employee->bus->status->name }}</p>
                                @endif
                            @endif
                        </div>
                    </section>

                    {{-- <form action="{{ route('admin.bus.update', Auth::user()->employee->bus->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <section class="flex flex-col justify-center items-center gap-4 ">
                            <label for="status_id">Статус:</label>
                            <select name="status_id" id="status_id" class="bg-gray-400 dark:bg-gray-800 rounded-lg focus:border-transparent focus:ring-0">
                                @foreach ($statuses as $status)
                                    <option class="rounded-b-lg"
                                        {{ $status->id === Auth::user()->employee->bus->status->id ? 'selected' : '' }}
                                        value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                            <button type="submit">
                                Сохранить
                            </button>
                        </section>
                    </form> --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
