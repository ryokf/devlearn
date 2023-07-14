<x-admin-layout>
    <article class="p-4">
        <div class="py-2 w-full">
            <div class="mt-6 p-2">
                <div>User Name : {{ $user->username }}</div>
                <div>User Email : {{ $user->email }}</div>
            </div>
            <div class="mt-6 p-2">
                {{-- ! Ini Roles user nya! --}}
                <h2 class="text-2xl font-semibold">Roles</h2>

                <div>
                    {{-- ! Ini tampilkan semua Roles user nya! --}}
                    @if ($user->roles)
                        @foreach ($user->roles as $user_role)
                            {{-- ! Ini delete semua Roles user nya! --}}
                            <form class=" inline"
                                action="{{ route('admin.users.roles.revoke', [$user->id, $user_role->id]) }}"
                                method="POST" onsubmit="return confirm('Are you sure??')">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 p-2 rounded-md hover:bg-red-700 text-white"
                                    type="submit">{{ $user_role->name }}</button>
                            </form>
                        @endforeach
                    @else
                    @endif
                </div>

            </div>
            {{-- ! Ini tambah Roles user nya! --}}
            <form class="" method="POST" action="{{ route('admin.users.roles', $user->id) }}">
                @csrf

                <div class="relative z-0 w-full mb-6 group p-2">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 ">Roles</label>
                    <select id="role" name="role"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role')
                        <span class="text-red-600">
                            {{ $message }}
                        </span>
                    @enderror
                    <button class="bg-blue-500 p-2 mt-2 rounded-md hover:bg-blue-700 text-white"
                        type="submit">Assign</button>
                </div>

            </form>
            <div class="mt-6 p-2">
                {{-- ! Ini permission user nya! --}}
                <h2 class="text-2xl font-semibold">Permissions</h2>
                <div>
                    {{-- ! Ini tampilkan semua Roles user nya! --}}
                    @if ($user->permissions)
                        @foreach ($user->permissions as $user_permission)
                            {{-- ! Ini delete semua permissions user nya! --}}
                            <form class=" inline"
                                action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                                method="POST" onsubmit="return confirm('Are you sure??')">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 p-2 rounded-md hover:bg-red-700 text-white"
                                    type="submit">{{ $user_permission->name }}</button>
                            </form>
                        @endforeach
                    @else
                    @endif
                </div>
            </div>
            {{-- ! Ini tambah permission user nya! --}}
            <form class="" method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
                @csrf

                <div class="relative z-0 w-full mb-6 group p-2">
                    <label for="permission" class="block mb-2 text-sm font-medium text-gray-900 ">Permission</label>
                    <select id="permission" name="permission"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        @foreach ($permissions as $permission)
                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                        @endforeach
                    </select>
                    @error('permission')
                        <span class="text-red-600">
                            {{ $message }}
                        </span>
                    @enderror
                    <button class="bg-blue-500 mt-2 p-2 rounded-md hover:bg-blue-700 text-white"
                        type="submit">Assign</button>
                </div>

            </form>

        </div>

    </article>

</x-admin-layout>