


<div>

<h1>
    {{ $username }}
{{ rand() }}
    
{{ $users[0] }}
</h1>


</div>

<div>
    @if($users[0] == 'umesh')
    <h1>this page is access by the {{ $users[0] }}</h1>
    @elseif($users[0] == 'hiii')
    <h1>this page is access by the hiii</h1>
    @else
    <h1>user cannot accessing the page</h1>
   @endif
    
</div>

<div>
    <h1>user those who can access the page</h1>

    <!-- way to access the user -->
    <!-- @for($i=0;$i<3;$i++)
        <h1>{{ $users[$i] }}</h1>
    
    @endfor -->

    <!-- foreach method in the user -->
     @foreach ($users as $user )
     <h1>{{ $user }}</h1>
     @endforeach
     
     
</div>