<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h4>This is parent parent component</h4>

    @foreach ($name as $user )


    <h2>

        @livewire('childcomponent',['name'=>$user])
    </h2>
    @endforeach
</div>