<Head>    
<Title>   
Make a Navigation Bar
</Title>
<style type=text/css> 
body 
{
/* height: 125vh; */
/* margin-top: 80px; */
/* padding: 30px; */
background-size: full;
font-family: sans-serif;
}
header {
background-color: #181D33;
/* position: fixed;
left: 0;
right: 0;
top: 5px; */
/* height: 30px; */
justify-content: end;
display: flex;
align-items: center;
box-shadow: 0 0 25px 0 black;
}
header * {
display: inline;
}
header li {
margin: 20px;
}
header li a {
color: white;
text-decoration: none;
}
a:hover{
    color:#FFC107;
}
</style> 
</Head>
<Body> 

<header>
    <ul style="float: right;width: -webkit-fill-available;margin-right: 25px;">
        <li>
            <br>
            <h4 class="row" style="font-family: emoji;float:right;font-size: x-large;"> 
                <a href="#">
                    <i class="fa fa-comment" aria-hidden="true" style="margin: 3px;margin-right: 23px;"></i>
                </a>    
                <a href="#">
                    <i class="fa fa-bell" aria-hidden="true" style="margin: 3px;margin-right: 23px;"></i>
                </a>

                <a href="#">
                    <i class="fa fa-user-circle" aria-hidden="true" style="margin: 3px;margin-right: 23px;"></i>
                </a>    
                <a style="color" href="{{app()->getLocale()}}/admin/login">{{auth()->user() ? auth()->user()->name : __('Sign In')}} </a> 
                <i class="fa fa-minus" aria-hidden="true" style="font-size: small;margin: 10px;"></i>
            </h4> 
        </li>
    </ul>
</header>

<br>


<header style="
">
    <ul style="margin-top: 12px;">
        
<li style="">
    <h4>{{__('Home')}}</h4>

<br>
 

</li>
    </ul>
</header>
<!-- You are at JavaTpoint Site..... -->
</Body> 
