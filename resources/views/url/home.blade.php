<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
     <h1>this is url home</h1>
     <div>

         <a href="/urlHome">home</a>
        </div>
        <div>

            <a href="/urlAbout">about</a>
        </div> 
        <div>

            <a href="/urlContact">contact</a>
        </div>
        <div>
            <h1>

                {{ URL::current() }}
            </h1>
            <h1>
                {{ URL::full() }}
            </h1>
            <h1> i am comming from
                {{ URL::previous() }}
            </h1>
        </div>
</div>
