<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->

    <h1>this is user form</h1>
      
    <form action="/addUser" method="post">
        @csrf
        <div>

            

            <input type="text" name="username" placeholder="Enter username">
            <span class="error">
                @error('username')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div>

            <input type="email" name="email" placeholder="jhon@gmail.com">
            <span>@error('email'){{ $message }}
            @enderror</span>
        </div>
        <div>

            <input type="text" name="city" placeholder="user-city">
            <span>@error('city'){{ $message }}
            @enderror</span>
        </div>
        <div>
            <input type="checkbox" id="php" name="skill[]" value="php">
            <label for="php">php</label>
            <input type="checkbox" id="node" name="skill[]" value="node">
            <label for="php">node</label>
            <input type="checkbox" id="django" name="skill[]" value="django">
            <label for="php">django</label>
            <span>@error('skill'){{ $message }}
            @enderror</span>
            
        </div>
        <div >
            <button type="submit">Submit</button>
        </div>
    </form>
</div>


<style>
    
    div{
        margin-top: 20px;
    }
    input{
        padding: 10px;
        font-size: 1.2rem;
        border-radius: 20px;
        border: 2px solid black;
        box-shadow: 0 0 10px 1px black;
    }

    button{
        padding: 15px 25px;
        font-size: 1.2rem;
        background-color: blue;
        color: white;
        font-weight: bolder;
        border-radius: 10px;

    }
    .error{
        color: red;
    }
</style>


