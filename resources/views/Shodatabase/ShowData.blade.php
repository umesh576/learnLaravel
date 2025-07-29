<h1>user list</h1>
<div class="abc">


    @foreach($userdata as $index =>$user)
    <div class="def">
        <div>
            <h2>Name: {{ $user->name  }}</h2>
            <p>Age: {{ $user->age }}</p>
            <p>Salary: {{ $user->salary }}</p>

        </div>
    </div>
    @endforeach
</div>

</div>


<style>
.abc {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    /* border: 2px solid red; */
}

.def {
    border: 2px solid black;
    padding: 10px;
}
</style>