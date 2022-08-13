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
background-color: #606060;
/* position: fixed;
left: 0;
right: 0;
top: 5px; */
/* height: 30px; */
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
</style> 
</Head>
<Body> 
<header style="
">
    <ul style="float: right;width: -webkit-fill-available;margin-right: 25px;">
        
<li style="
">
    

<br>
<h4 class="row" style="float:right;">{{auth()->user() ? auth()->user()->email : __('Sign In')}}</h4> 

</li>
    </ul>
</header>
<br>


<header style="
    MARGIN-TOP: 19px;
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
