<x-wrapper>
    <div class="lg:grid lg:grid-cols-2 space-y-4 gap-4 md:space-y-0 mx-4">
      @unless(count($courses) == 0)
      @foreach($courses as $course)
        <x-course :course="$course" />
      @endforeach
      @else
        <p>No courses found.</p>
      @endunless
    </div>
    <div class="mt6 p-4">
        {{$courses->links()}}
    </div>
</x-wrapper>