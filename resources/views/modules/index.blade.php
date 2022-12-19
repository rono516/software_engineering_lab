<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUK LMS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-black">

    <!-- NAVBAR COMPONENT -->
    <nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6">
        <div class="flex items-center flex-shrink-0 text-gray-100 mr-16">
            <span class="font-bold text-xl"><a href="{{ url('/') }}">TUK LMS</a></span>
        </div>

        <div class="w-full block flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="text-sm sm:flex-grow">
                <a href="{{ url('/all_courses') }}"
                    class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-gray-100 mr-4">
                    All Courses
                </a>
                <a href="{{ url('/my_courses') }}"
                    class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-gray-100 mr-4">
                    My Courses
                </a>
                <a href="#" class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-gray-100">
                    Contact
                </a>
                <a href="#" class="ml-5 block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-gray-100">
                    About
                </a>
            </div>

            @auth
                @if (Auth()->user()->user_group == '1' || Auth()->user()->user_group == '2')
                    <div class="mr-5">
                        <a href="{{ url('/dashboard') }}"
                            class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-100 border-gray-100 hover:border-transparent hover:text-gray-500  mt-4 md:mt-0">Access
                            DashBoard</a>
                    </div>
                @endif
                <div class="mr-5">
                    <a href="#"
                        class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-100 border-gray-100 hover:border-transparent hover:text-gray-500 mt-4 md:mt-0">{{ Auth()->user()->name }}</a>
                </div>
                <div class="mr-5">
                    <a href="{{ url('logout') }}"
                        class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-100 border-gray-100 hover:border-transparent hover:text-gray-500 mt-4 md:mt-0">Logout</a>
                </div>
            @endauth
            @guest
                <div class="mr-5">
                    <a href="{{ url('register') }}"
                        class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-100 border-gray-100 hover:border-transparent hover:text-blue-500  mt-4 md:mt-0">Register</a>
                </div>
                <div class="mr-5">
                    <a href="{{ url('login') }}"
                        class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-100 border-gray-100 hover:border-transparent hover:text-blue-500  mt-4 md:mt-0">Login</a>
                </div>

            @endguest

        </div>
    </nav>

    <div class="container mt-5 mx-auto px-2">


        <h1 class="text-3xl text-gray-500 p-4 font-bold">
            {{ $course->title }}
        </h1>


        <h1 class="text-3xl text-gray-500 p-4 font-bold">
            {{ $module->title }}
        </h1>

        <div class="container mt-5 mx-auto px-2">
            <!-- Flex on med screens and up -->
            <div class="grid grid-cols-3 gap-1">
                {{-- start first course --}}

                <div class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">

                    <div class="bg-gray-100 shadow-md hover:scale-105 hover:shadow-xl duration-500">
                        <a href="#">
                            <img src="{{ $module->image_url }}" alt="Product image" class="object-cover" />
                        </a>
                        {{-- <div class="px-4 py-3 w-72">
                            <span class="text-gray-400 uppercase text-xs">Networking</span>
                            <p class="text-lg  text-black ">
                                Introduction to networking
                            </p>
                            <div class="flex items-center">

                                <p class="text-lg font-semibold text-black cursor-auto my-3">Kes. 150</p>

                                <div class="ml-auto text-black-200">
                                    <a href="#">

                                        Continue course
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>


                {{-- end first course  --}}


                {{-- <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Password requirements:</h2> --}}
                <div>
                    <h2 class="text-2xl text-gray-500 p-4">
                        Module Content
                    </h2>


                    <p class="ml-5" style="color: wheat">{{ $module->text_content }}</p>

                    <h2 class="text-2xl text-gray-500 p-4">
                        Follow this link to learn more
                    </h2>

                    <p><a class="ml-5" style="color: wheat"
                            href="{{ $module->link_content }}">{{ $module->link_content }}</a></p>



                    {{-- <ol class="space-y-1 max-w-md list-decimal list-inside text-gray-500 dark:text-gray-400">

                        <li>
                            module content
                        </li>
                    </ol> --}}
                </div>


            </div>
        </div>

        <br>
        <br>


        <footer class="p-4 bg-gray-800 rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" class="flex items-center mb-4 sm:mb-0">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="TUK LMS Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">TUK LMS</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#"
                    class="hover:underline">TukLMS™</a>. All Rights Reserved.
            </span>
        </footer>



        {{-- <!Footer end --> --}}
</body>

</html>
