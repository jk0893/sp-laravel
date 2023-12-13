<x-app-layout>
    <main class="w-auto h-screen p-32 flex justify-center items-center">
        <section>
            <div
                class="max-w-screen-sm max-h-max p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800  dark:border-gray-700 text-gray-700 dark:text-gray-400 ">
                <form method="POST" action="{{ route('admin.employee.store') }}"
                    class="grid place-content-center gap-8">
                    @csrf
                    <div>
                        <label for="last_name" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Фамилия</label>
                        <input id="last_name" class="block mt-1 rounded-md bg-gray-400 dark:bg-gray-800 focus:ring-0 focus:border-inherit" type="text"
                            name="last_name"required>
                    </div>
                    <div>
                        <label for="first_name" class="mb-3 font-normal">Имя</label>
                        <input id="first_name" class="block mt-1 rounded-md bg-gray-400 dark:bg-gray-800 focus:ring-0 focus:border-inherit" type="text"
                            name="first_name" required>
                    </div>
                    <div>
                        <label for="father_name" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Отчество</label>
                        <input id="father_name" class="block mt-1 rounded-md bg-gray-400 dark:bg-gray-800 focus:ring-0 focus:border-inherit" type="text"
                            name="father_name" required>
                    </div>
                    <div>
                        <label for="birth_date" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Дата рождения</label>
                        <input id="birth_date" class="block w-full mt-1 rounded-md bg-gray-400 dark:bg-gray-800 focus:ring-0 focus:border-inherit" type="date"
                            name="birth_date" required>
                    </div>
                    <div>
                        <label for="passport" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Паспорт</label>
                        <input id="passport" class="block mt-1 rounded-md bg-gray-400 dark:bg-gray-800 focus:ring-0 focus:border-inherit" type="text"
                            name="passport" required>
                    </div>
                    <div>
                        <label for="phone" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Телефон</label>
                        <input id="phone" class="block mt-1 rounded-md bg-gray-400 dark:bg-gray-800 focus:ring-0 focus:border-inherit" type="tel"
                            name="phone" required>
                    </div>
                    <div class="flex justify-center">
                        <x-primary-button class="ms-3 bg-gray-700 dark:bg-gray-400">
                            {{ __('Создать') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</x-app-layout>
