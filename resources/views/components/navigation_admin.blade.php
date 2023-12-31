<nav
    class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-72 z-10 py-4 px-6">
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="hidden md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href="{{ route('index.display') }}">
            DevLearn | Admin
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                href="{{ route('index.display') }}">
                DevLearn | Admin
            </a>

        </ul>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                            href="{{ route('index.display') }}">
                            DevLearn
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button"
                            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                            onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                Admin Pages
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{ route('admin.index') }}"
                        class="w-11/12 text-xs uppercase py-3 font-bold block  duration-100 {{ request()->routeIs('admin.index') ? 'bg-slate-800 text-slate-100 px-2 rounded-xl ml-1' : 'text-blueGray-700 hover:text-blueGray-500 hover:ml-2' }} ">
                        <i class="fas fa-chart-line mr-2 text-sm opacity-75"></i>
                        Dashboard</a>
                    </a>


                </li>
                <li class="items-center">
                    <a href="{{ route('admin.users.index') }}"
                        class="w-11/12 text-xs uppercase py-3 font-bold block  duration-100 {{ request()->routeIs('admin.users.index') ? 'bg-slate-800 text-slate-100 px-2 rounded-xl ml-1' : 'text-blueGray-700 hover:text-blueGray-500 hover:ml-2' }} ">
                        <i class="fas fa-user mr-2 text-sm opacity-75"></i>
                        Users
                    </a>
                </li>
                <li class="items-center">
                    <a href="{{ route('admin.roles.index') }}"
                        class="w-11/12 text-xs uppercase py-3 font-bold block  duration-100 {{ request()->routeIs('admin.roles.index') ? 'bg-slate-800 text-slate-100 px-2 rounded-xl ml-1' : 'text-blueGray-700 hover:text-blueGray-500 hover:ml-2' }} ">
                        <i class="fas fa-users-cog mr-2 text-sm opacity-75"></i>
                        Roles & Permission
                    </a>
                </li>
            </ul>


            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                Course Page
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                <li class="items-center">
                    <a href="{{ route('admin.course.index') }}"
                        class="w-11/12 text-xs uppercase py-3 font-bold block  duration-100 {{ request()->routeIs('admin.course.index') ? 'bg-slate-800 text-slate-100 px-2 rounded-xl ml-1' : 'text-blueGray-700 hover:text-blueGray-500 hover:ml-2' }} ">
                        <i class="fas fa-book mr-2 text-sm opacity-75"></i>
                        Course
                    </a>
                </li>

                <li class="items-center">
                    <a href="{{ route('admin.userCourse.index') }}"
                        class="w-11/12 text-xs uppercase py-3 font-bold block  duration-100 {{ request()->routeIs('admin.userCourse.index') ? 'bg-slate-800 text-slate-100 px-2 rounded-xl ml-1' : 'text-blueGray-700 hover:text-blueGray-500 hover:ml-2' }} ">
                        <i class="fas fa-chalkboard-teacher mr-2 text-sm opacity-75"></i>
                        User Course
                    </a>
                </li>
                <li class="items-center">
                    <a href="{{ route('admin.course.category') }}"
                        class="w-11/12 text-xs uppercase py-3 font-bold block  duration-100 {{ request()->routeIs('admin.course.category') ? 'bg-slate-800 text-slate-100 px-2 rounded-xl ml-1' : 'text-blueGray-700 hover:text-blueGray-500 hover:ml-2' }} ">
                        <i class="fas fa-tags mr-2 text-sm opacity-75"></i>
                        Course Category
                    </a>
                </li>
            </ul>
            {{-- course.category --}}
        </div>
    </div>
</nav>
