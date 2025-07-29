<div>
    
    <form action="/addUser2" method="post">
        @csrf
        <h1>Add user</h1>
        <div>
            <div>
                
                <label for="username">username: </label>
                <input type="text" name="username" id="username" value="{{ old('username') }}" class="{{ ($errors ->first('username')?'input-error':'') }}">
                <span class="error">@error('username'){{ $message }}
                @enderror</span>
            </>
            <div>
                <label for="email">email: </label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="{{ $errors->first('email')?'input-error':'' }}">
                <span class="error">@error('email'){{ $message }}
                @enderror</span>
            </div>
            <div>
                <label for="address">Address: </label>
                <input type="text" name="address" id="address" value="{{ old('address') }}" class="{{ $errors->first('address')?'input-error':'' }}">
                <span class="error">@error('address'){{ $message }}
                @enderror</span>
            </div>
            <div>
                <button type="submit">Submit form</button>
            </div>
        </div>
    </form>
</div>

<style>
    .error{
        color: red;
    }
    .input-error{
        border: 2px solid red;
    }
</style>