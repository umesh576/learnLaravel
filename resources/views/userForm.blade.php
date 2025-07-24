<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->

    <h1>this is user form</h1>
    <form action="/addUser" method="post">
        @csrf;
        <div>

            <input type="text" name="username" placeholder="Enter username">
        </div>
        <div>

            <input type="email" name="email" placeholder="jhon@gmail.com">
        </div>
        <div>

            <input type="text" name="city" placeholder="user-city">
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
</style>


