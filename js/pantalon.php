<html>
<head>
<script type="text/javascript">
function change_onglet(name)
{
document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
document.getElementById('contenu_onglet_'+name).style.display = 'block';
anc_onglet = name;
}
function modele(name)
{
document.getElementById('modeleimage').src = "../image/pantalon/"+name;
}
function couleur(name)
{
document.getElementById('couleurimage').src = "../image/"+name;
}
</script>
<style type="text/css">
.onglet
{
display:inline-block;
margin-left:3px;
margin-right:3px;
padding:3px;
border:1px solid black;
cursor:pointer;
}
.onglet_0
{
background:#bbbbbb;
border-bottom:1px solid black;
}
.onglet_1
{
background:#dddddd;
border-bottom:0px solid black;
padding-bottom:4px;
}
.contenu_onglet
{
background-color:#dddddd;
border:1px solid black;
margin-top:-1px;
padding:5px;
display:none;
}
ul
{
margin-top:0px;
margin-bottom:0px;
margin-left:-10px
}
h1
{
margin:0px;
padding:0px;
}
</style>
</head>
<body>
    <div class="image">
        <img id="couleurimage" style="display:block; position:absolute" src="../image/blanc.png">
        <img id="modeleimage" style="display:block; position:absolute" src="../image/pantalon/pantalon.png">
        

        
</div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="systeme_onglets">
<div class="onglets">
<span class="onglet_0 onglet" id="onglet_modele" onclick="javascript:change_onglet('modele');">modele</span>
<span class="onglet_0 onglet" id="onglet_couleur" onclick="javascript:change_onglet('couleur');">couleur</span>
</div>
<div class="contenu_onglets">
<div class="contenu_onglet" id="contenu_onglet_couleur">
    <input type="image" border="0" name="champ_image" src="../image/blanc.png" width="50" height="50" ALIGN="middle" onClick="javascript:couleur('blanc.png');">
    <input type="image" border="0" name="champ_image" src="../image/noir.png" width="50" height="50" ALIGN="middle" onClick="javascript:couleur('noir.png');">
    <input type="image" border="0" name="champ_image" src="../image/rouge.png" width="50" height="50" ALIGN="middle" onClick="javascript:couleur('rouge.png');">
    <input type="image" border="0" name="champ_image" src="../image/bleu.png" width="50" height="50" ALIGN="middle" onClick="javascript:couleur('bleu.png');">
    <input type="image" border="0" name="champ_image" src="../image/vert.png" width="50" height="50" ALIGN="middle" onClick="javascript:couleur('vert.png');">
    <input type="image" border="0" name="champ_image" src="../image/orange.png" width="50" height="50" ALIGN="middle" onClick="javascript:couleur('orange.png');">

</div>
<div class="contenu_onglet" id="contenu_onglet_modele">
    <input type="image" border="0" name="champ_image" src="../image/pantalon/short.png" width="50" height="50" ALIGN="middle" onClick="javascript:modele('short.png');">
    <input type="image" border="0" name="champ_image" src="../image/pantalon/bermuda.png" width="50" height="50" ALIGN="middle" onClick="javascript:modele('bermuda.png');">
    <input type="image" border="0" name="champ_image" src="../image/pantalon/pantalon.png" width="50" height="50" ALIGN="middle" onClick="javascript:modele('pantalon.png');">

</div>
</div>
<script type="text/javascript">
var anc_onglet = 'couleur';
change_onglet(anc_onglet);
modele('pantalon.png');
couleur('noir.png');
</script>
</body>
</html>