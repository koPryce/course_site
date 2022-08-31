<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        width: {
                            '160': "64rem",
                        },
                    },
                },
            };
        </script>
        <title>Courses</title>
    </head>

    <body class="mb-12">
        <nav class=" mb-6 flex justify-between items-center bg-black text-white">
            <a href="/">
                <img src="{{asset('images/logo.png')}}" alt="" class="logo w-24"/>
            </a>
            <ul class="flex text-lg space-x-10 mr-10">
                @auth
                <li>
                    <span class="uppercase font-bold">
                        Welcome {{auth()->user()->name}}
                    </span>
                </li>
                <li>
                    <a href="/courses/view" class="hover:text-purple-800">
                        <i class="fa-solid fa-eye"></i>
                        View Courses
                    </a>
                </li>
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="hover:text-purple-800">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    
                    </form>
                </li>
                @else
                <li>
                    <a href="/register" class="hover:text-purple-800">
                        <i class="fa-solid fa-user-plus"></i> Register
                    </a>
                </li>
                <li>
                    <a href="/login" class="hover:text-purple-800">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login
                    </a>
                </li>
                @endauth
            </ul>
        </nav>
    <main>
        {{$slot}}
    </main>
    <footer class="bottom-0 left-0 fixed w-full h-8 mt-24 flex items-center justify-start font-bold bg-black text-white md:justify-center">
        <p>
            Copyright &copy; 2022. All Rights reserved.
        </p>
    </footer>
    <x-notification/>
</body>
</html>