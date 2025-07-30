<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <h1>this is student details showing page.</h1>
    <!-- <p>{{ print_r($student) }}</p> -->
    <table class="abc">
        <tr class="abc">
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach ($student as $data )
        <tr>

            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->batch}}</td>
        </tr>
        @endforeach
    </table>
</div>

<style>
.abc {
    border: 2px dotted black;
}
</style>