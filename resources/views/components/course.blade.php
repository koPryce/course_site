@props(['course'])

<x-card>
    <div class="flex">
        <img src="{{asset('images/'. $course->image)}}" alt="course image" class="w-96 mr-6 md:block"/>
        <div>
            <h3 class="text-2xl pb-6">
                <a href="/courses/{{$course->id}}">{{$course->name}}</a>
            </h3>
            <x-categories :categoryValues="$course->categories"/>
            <div class="text-lg mt-4">
                Teacher: {{$course->teacher}}
            </div>
        </div>
    </div>
</x-card>