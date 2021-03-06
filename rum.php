<html><head>
  <title>show image</title>
  <style type="text/css">
  ul.enlarge{
  list-style-type:none; /*remove the bullet point*/
  margin-left:0;
  }
  ul.enlarge li{
  display:inline-block; /*places the images in a line*/
  position: relative;
  z-index: 0; /*resets the stack order of the list items - later we'll increase this*/
  margin:10px 40px 0 20px;
  }
  ul.enlarge img{
  background-color:#eae9d4;
  padding: 6px;
  -webkit-box-shadow: 0 0 6px rgba(132, 132, 132, .75);
  -moz-box-shadow: 0 0 6px rgba(132, 132, 132, .75);
  box-shadow: 0 0 6px rgba(132, 132, 132, .75);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  }
  ul.enlarge span{
  position:absolute;
  left: -9999px;
  background-color:#eae9d4;
  padding: 10px;
  font-family: 'Droid Sans', sans-serif;
  font-size:.9em;
  text-align: center;
  color: #495a62;
  -webkit-box-shadow: 0 0 20px rgba(0,0,0, .75));
  -moz-box-shadow: 0 0 20px rgba(0,0,0, .75);
  box-shadow: 0 0 20px rgba(0,0,0, .75);
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  border-radius:8px;
  }
  ul.enlarge li:hover{
  z-index: 50;
  cursor:pointer;
  }
  ul.enlarge span img{
  padding:2px;
  background:#ccc;
  }
  ul.enlarge li:hover span{
  top: 0px; /*the distance from the bottom of the thumbnail to the top of the popup image*/
  left: 20px; /*distance from the left of the thumbnail to the left of the popup image*/
  }
  ul.enlarge li:hover:nth-child(2) span{
  left: 100px;
  }
  ul.enlarge li:hover:nth-child(3) span{
  left: 100px;
  }
  /**IE Hacks - see http://css3pie.com/ for more info on how to use CS3Pie and to download the latest version**/
  ul.enlarge img, ul.enlarge span{
  behavior: url(pie/PIE.htc);
  }

  </style>
</head>
<ul class="enlarge">
<li><img src="image/men2.png" width="150px" height="100px" alt="Dechairs" /><span><img src="image/men1.png" alt="Deckchairs" /><br />Deckchairs on Blackpool beach</span></li>
<li><img src="image/men2.png" height="100px" alt="Blackpool sunset" /><span><img src="image/phone2.png" alt="Blackpool sunset" /><br />Sunset over the Irish Sea at Blackpool</span></li>
<li><img src="image/men2.png" height="100px" alt="Blackpool pier" /><span><img src="image/phone.png" alt="Blackpool pier" /><br />Rolling waves off Blackpool North Pier</span></li>
</ul>
</body>
</html>
