<!-- passing data in the header from home -->
@include('common.header')

<h1>home page hello umesh</h1>
<h1>home page is always beautiful /a></h1>
<!-- <a href="/">main</a> -->

<!-- this is directly accesing page if page is not exists then throw the error -->
 <!-- @include('common.inner',['data' =>'this data from the home page']) -->

 <!-- if only page exists then only the access the page use this it cannot throw error -->
 @includeif('common.inner',['data' =>'this data from the home page'])


<!-- sending paramenter in the component and handel by the view/controller root file -->
 <x-message-alert msg="User login sucessfully"/>


 

