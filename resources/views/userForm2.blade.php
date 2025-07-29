<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
     <form action="/addUserDetails" method="post">
        @csrf
        <div>
            <div>

                <label for="radioBtn">Radio Input1: </label>
                <input type="radio" name="radioBtn" id="radioBtn" >
            </div>
            <div>
                <label for="radioBtn1">Radio Input2: </label>
                <input type="radio" name="radioBtn" id="radioBtn1">
            </div>
        </div>

        <div>
            <div>
                <h1>user skill</h1>
                <label for="check1">php </label>
                <input type="checkbox" id="check1" name="skill[]" value="php">
                <label for="check2">node </label>
                <input type="checkbox" id="check2" name="skill[]" value="node">
                <label for="check3">django </label>
                <input type="checkbox" id="check3" name="skill[]" value="django">
            </div>
            
        </div>
        <div>
            <h1>Gender skill</h1>
            <label for="male">Male </label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="female">female </label>
            <input type="radio" id="female" name="gender" value="female">
        </div>
        <div>
            <h1>cities</h1>
            <!-- <label for=    "cities">cities</label> -->
            <select name="cities" id="city">
                <option value="ktm">ktm</option>
                <option value="pok">pok</option>
                <option value="dhn">dhn</option>
            </select>
        </div>
        <div>
            <div>
                <label for="volume">Volume</label>
                <input type="range" min="0" max="100">
            </div>
        </div>
        <div>
            <button type="submit">Add user details</button>
        </div>

     </form>
     <h1>this is web form</h1>

</div>


<style>
    button{
        position: relative;
        top: 20px;
        left: 30px;
        padding: 10px;
    }
</style>