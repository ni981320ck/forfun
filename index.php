<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<style>
body
{
	background-attachment:fixed;
	background-color:black;	
}


.hover img 
{
    position:fixed;
opacity:1;

  /* CSS3淡出淡入效果,1秒 */
  -webkit-transition: opacity 1s ease-in-out;
  -moz-transition: opacity 1s ease-in-out;
  -o-transition: opacity 1s ease-in-out;
  transition: opacity 1s ease-in-out;
  
}

.hover img:nth-of-type(2):hover
{
  opacity:0; /*滑鼠滑入時，透明度變0*/
}



</style>


</head>

<body>

<div class="hover"><a href="index.html" title="進入首頁"><img src="door3.png"/><img src="door.png"></a></div>

</body>

</html>
