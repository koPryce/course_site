<x-wrapper>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back to Home</a>
    <x-card>
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase"> View Courses </h1>
        </header>
                @unless(!$courses)
                @foreach($courses as $course)
                <x-card>
                    <div>
                        <img src="{{asset('images/'. $course->image)}}" alt="course image" class="w-2/4 md:block block mx-auto"/>
                        <div>
                            <h3 class="text-2xl pb-6">
                                <a href="/courses/{{$course->id}}">{{$course->name}}</a>
                            </h3>

                            <div class="text-lg mt-4">
                                Teacher: {{$course->teacher}}
                            </div>
                            <x-categories :categoryValues="$course->categories"/>
                            <div class="border border-gray-200 w-full mb-6"></div>
                            <div>
                                <h3 class="text-3xl font-bold mb-4">Course Description</h3> 
                                <div class="text-lg space-y-6">
                                    {{$course->description}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="/courses/{{$course->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 mt-10">
                            <i class="fa-solid fa-trash"></i> Remove Course
                        </button>
                    </form>
                </x-card>
        @endforeach
        @else
            <p class="text-center">No Courses Added</p>
        @endunless
    </x-card>
</x-wrapper>