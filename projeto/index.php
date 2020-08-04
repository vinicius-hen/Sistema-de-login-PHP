<html>
<head>
  <title>Menu Dropdown - Linha de Código</title>
 <link href="..\projeto\Style\church01.css" rel="stylesheet">  
 <script type="text/javascript">
    startList = function() {
    if (document.all&&document.getElementById) {
    navRoot = document.getElementById("menuDropDown");
    for (i=0; i<navRoot.childNodes.length; i++) {
    node = navRoot.childNodes[i];
    if (node.nodeName=="LI") {
    node.onmouseover=function() {
    this.className+=" over";
      }
      node.onmouseout=function() {
      this.className=this.className.replace
      (" over", "");
       }
       }
      }
     }
    }
    window.onload=startList;
</script>
</head>
<body id ="bd1">
<div id ="top">
<p><br></p>
<h1 id ="form" > <img src = "img\logo.jpg" width ="250px"  >
<br><br>
 </h1>
 
</div>
</div>
<div id = "primeira">
<ul id="nav"> 
    <li><a href="#">Home</a></li> 
    <li><a href="cadastrar.php">Cadastrae seu Estabelecimento</a></li> 
    <li><a href="#">O que Fazemos?</a> 
      <ul> 
        <li><a href="#">Web Design</a></li> 
        <li><a href="#">Hospedagem</a></li> 
        <li><a href="#">SEO</a></li> 
        <li><a href="#">Sistemas</a></li> 
      </ul> 
    </li>
 
    <li><a href="#">Contato</a></li> 
  </ul>
<div>

</body>
</html>