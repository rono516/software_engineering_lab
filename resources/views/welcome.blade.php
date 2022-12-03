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
    <div class="flex items-center flex-shrink-0 text-white mr-16">
        <span class="font-bold text-xl">TUK LMS</span>
    </div>

    <div class="w-full block flex-grow sm:flex sm:items-center sm:w-auto">
        <div class="text-sm sm:flex-grow">
            <a
                href="#"
                class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-white mr-4"
            >
                All Courses
            </a>
            <a
                href="#"
                class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-white mr-4"
            >
                My Courses
            </a>
            <a
                href="#"
                class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-white"
            >
                Contact
            </a>
			 <a
                href="#"
                class="ml-5 block mt-4 sm:inline-block sm:mt-0 text-teal-200 hover:text-white"
            >
                About
            </a>
        </div>
        @if(Auth()->user()->user_group == "1" || Auth()->user()->user_group == "2")
        <div>
            <a
                href="{{url('/dashboard')}}" 
                class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 md:mt-0"
            >Access DashBoard</a
            >
        </div>
        @endif
        @auth
        <div>
            <a
                href="#" 
                class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 md:mt-0"
            >{{Auth()->user()->name}}</a
            >
        </div>
        <div>
            <a
                href="{{url('logout')}}" 
                class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 md:mt-0"
            >Logout</a
            >
        </div>
        @endauth
        @guest
		 <div class="mr-5">
            <a
                href="{{url('register')}}"
                class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 md:mt-0"
            >Register</a
            >
        </div>
        <div>
            <a
                href="{{url('login')}}" 
                class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 md:mt-0"
            >Login</a
            >
        </div>

        @endguest

    </div>
</nav>

<div class="container mt-5 mx-auto px-2">


<h1 class="text-3xl text-gray-500 p-4 font-bold">
    Checkout our new courses
  </h1>


    <!-- CARD COLUMNS -->
    <div class="container mt-5 mx-auto px-2">
        <!-- Flex on med screens and up -->
        <div class="md:flex">
            <div
                class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">
                <div class="lg:flex lg:items-center">
                    <div class="lg:flex-shrink-0">
                        <img class="rounded-lg lg:w-64" src="https://i.ibb.co/mJJNkTJ/img2.jpg" alt="" />
                    </div>
                    <div class="mt-4 lg:mt-0 lg:ml-6">
                        <div
                            class="uppercase tracking-wide text-sm text-indigo-600 font-bold">

                            Networking
                        </div>
                        <a
                            href="#"
                            class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline"
                        >Finding connections to help your business grow</a>
                        <div
                            class="uppercase tracking-wide text-sm text-indigo-600 font-bold">

                         <h3>Price: Ksh.500s </h3>  <button class="btn-primary">Take the course</button>
                        </div>

                    </div>
                </div>
            </div>
            <div
                class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">

                <div class="lg:flex lg:items-center">
                    <div class="lg:flex-shrink-0">
                        <img class="rounded-lg lg:w-64" src="https://i.ibb.co/w4wGYvQ/img1.jpg" alt="" />

                    </div>
                    <div class="mt-4 lg:mt-0 lg:ml-6">
                        <div
                            class="uppercase tracking-wide text-sm text-indigo-600 font-bold">

                            Marketing
                        </div>
                        <a href="#" class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">


                        Finding customers for your new business</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <h1 class="text-3xl text-gray-500 p-4 font-bold">
        Checkout our free courses
    </h1>


    <div class="container mt-5 mx-auto px-2">
        <!-- Flex on med screens and up -->
        <div class="md:flex">
            <div
                class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">
                <div class="lg:flex lg:items-center">
                    <div class="lg:flex-shrink-0">
                        <img class="rounded-lg lg:w-64" src="https://i.ibb.co/mJJNkTJ/img2.jpg" alt="" />
                    </div>
                    <div class="mt-4 lg:mt-0 lg:ml-6">
                        <div
                            class="uppercase tracking-wide text-sm text-indigo-600 font-bold">

                            Networking
                        </div>
                        <a
                            href="#"
                            class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline"
                        >Finding connections to help your business grow</a>
                        <div
                            class="uppercase tracking-wide text-sm text-indigo-600 font-bold">

                            <h3>Price: Ksh.500</h3>  <button class="btn-primary">Take the course</button>
                        </div>

                    </div>
                </div>
            </div>
            <div
                class="flex-1 text-gray-700 text-center bg-gray-400 px-5 py-5 m-2 rounded">

                <div class="lg:flex lg:items-center">
                    <div class="lg:flex-shrink-0">
                        <img class="rounded-lg lg:w-64" src="https://i.ibb.co/w4wGYvQ/img1.jpg" alt="" />

                    </div>
                    <div class="mt-4 lg:mt-0 lg:ml-6">
                        <div
                            class="uppercase tracking-wide text-sm text-indigo-600 font-bold">

                            Marketing
                        </div>
                        <a href="#" class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">


                            Finding customers for your new business</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER COMPONENT -->

    <div class="bg-gray-500">

        <div>
            <h3>Footer</h3>
        </div>

    </div>


    <!Footer end -->
</body>
</html>
