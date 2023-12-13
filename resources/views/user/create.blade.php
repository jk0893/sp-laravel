<x-app-layout>
    <main class="w-auto h-screen p-32 flex justify-center items-center">
        <section>
            <div
                class="max-w-screen-sm max-h-max p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800  dark:border-gray-700 text-gray-700 dark:text-gray-400 ">
                <form method="POST" action="{{ route('admin.user.store') }}" class="grid place-content-center gap-8">
                    @csrf
                    <div>
                        <label for="name" class="mb-3 font-normal">Имя</label>
                        <input id="name" class="block mt-1 rounded-md bg-gray-400 dark:bg-gray-800" type="text" name="name" required>
                    </div>
                    <div>
                        <label for="email" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Почта</label>
                        <input id="email" class="block mt-1 rounded-md bg-gray-400 dark:bg-gray-800" type="email" name="email" required>
                    </div>
                    <div>
                        <label for="password" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Пароль</label>
                        <input id="password" class="block mt-1 rounded-md bg-gray-400 dark:bg-gray-800" type="password" name="password" required>
                    </div>
                    <div class="flex-column justify-center">
                        <div>
                            <label for="role_id" class="mb-3 font-normal text-gray-700 dark:text-gray-400">Права
                                доступа</label>
                        </div>
                        <div>
                            <select class="w-full rounded-md bg-gray-400 dark:bg-gray-800 focus:border-inherit focus:ring-0" name="role_id" id="role_id" class="bg-gray-400 dark:bg-gray-700 text-gray-700 dark:text-gray-400">
                                @foreach ($roles as $role)
                                    <option class="text-gray-700 dark:text-gray-400" value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
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
