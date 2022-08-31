<x-wrapper>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back to Home</a>
    <div>
        <x-card>
            <div>
                <img src="{{asset('images/'. $course->image)}}" alt="course image" class="w-2/4 md:block block mx-auto"/>

                <h3 class="text-2xl pb-6">{{$course->name}}</h3>
                <div class="text-lg mt-4">{{$course->teacher}}</div>
                
                <x-categories :categoryValues="$course->categories"/>

                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Course Description
                    </h3>
                    <div class="text-lg space-y-6">
                        {{$course->description}}
                    </div>
                </div>
                @auth
                @unless(in_array($course->id, $selected))
                <form method="POST" action="/courses/{{$course->id}}">
                    @csrf
                    <button class="text-purple-800 mt-10">
                        <i class="fa-solid fa-plus"> </i> Add Course
                    </button>
                </form>
                @else
                <form method="POST" action="/courses/{{$course->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600 mt-10">
                        <i class="fa-solid fa-trash"> </i> Remove Course
                    </button>
                </form>
                @endunless
                @endauth
            </div>
        </x-card>
    </div>
</x-wrapper>