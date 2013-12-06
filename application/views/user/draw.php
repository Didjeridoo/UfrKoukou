<br>
<div class="row-fluid">
    <div class="well">
        <ul id="myTab" class="nav nav-tabs">
            <li class=""><a href="#tshirt" data-toggle="tab">Tshirt</a></li>
            <li class=""><a href="#pantalon" data-toggle="tab">Pantalon</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="tshirt">
                <script type="text/javascript">
                    function change_onglet(name) {
                        document.getElementById('onglet_' + anc_onglet).className = 'onglet_0 onglet';
                        document.getElementById('onglet_' + name).className = 'onglet_1 onglet';
                        document.getElementById('contenu_onglet_' + anc_onglet).style.display = 'none';
                        document.getElementById('contenu_onglet_' + name).style.display = 'block';
                        anc_onglet = name;
                    }
                    function col(name) {
                        document.getElementById('colimage').src = "<?= asset_url('img/draw/tshirt/' + name)?>";
                        document.getElementById('formcol').value = name;
                    }
                    function manche(name) {
                        document.getElementById('mancheimage').src = "<?= asset_url('img/draw/tshirt/' + name)?>";
                        document.getElementById('formmanche').value = name;
                    }
                    function couleur(name) {
                        document.getElementById('couleurimage').src = "<?= asset_url('img/draw/' + name)?>";
                        document.getElementById('formcouleur').value = name;
                    }
                    function motif(name) {
                        document.getElementById('motifimage').src = "<?= asset_url('img/draw/tshirt/' + name)?>";
                        document.getElementById('formmotif').value = name;
                    }
                </script>
                <style type="text/css">
                    .onglet {
                        display: inline-block;
                        margin-left: 3px;
                        margin-right: 3px;
                        padding: 3px;
                        border: 1px solid black;
                        cursor: pointer;
                    }

                    .onglet_0 {
                        background: #bbbbbb;
                        border-bottom: 1px solid black;
                    }

                    .onglet_1 {
                        background: #dddddd;
                        border-bottom: 0px solid black;
                        padding-bottom: 4px;
                    }

                    .contenu_onglet {
                        background-color: #dddddd;
                        border: 1px solid black;
                        margin-top: -1px;
                        padding: 5px;
                        display: none;
                    }

                    ul {
                        margin-top: 0px;
                        margin-bottom: 0px;
                        margin-left: -10px
                    }

                    h1 {
                        margin: 0px;
                        padding: 0px;
                    }
                </style>
                </head>
                <body>
                <div class="image">
                    <img id="couleurimage" style="display:block; position:absolute" src="<?= asset_url('img/draw/tshirt/blanc.png')?>">
                    <img id="motifimage" style="display:block; position:absolute" src="">
                    <img style="display:block; position:absolute" src="<?= asset_url('img/draw/tshirt/fond.png')?>">
                    <img id="colimage" style="display:block; position:absolute"
                         src="<?= asset_url('img/draw/tshirt/colrond.png')?>">
                    <img id="mancheimage" style="display:block; position:absolute"
                         src="<?= asset_url('img/draw/tshirt/manchelongue.png')?>">


                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br>

                <div class="systeme_onglets">
                    <div class="onglets">
                        <span class="onglet_0 onglet" id="onglet_col"
                              onclick="javascript:change_onglet('col');">col</span>
                        <span class="onglet_0 onglet" id="onglet_manche" onclick="javascript:change_onglet('manche');">manche</span>
                        <span class="onglet_0 onglet" id="onglet_couleur"
                              onclick="javascript:change_onglet('couleur');">couleur</span>
                        <span class="onglet_0 onglet" id="onglet_motif" onclick="javascript:change_onglet('motif');">motif</span>
                    </div>
                    <div class="contenu_onglets">
                        <div class="contenu_onglet" id="contenu_onglet_couleur">
                            <input type="image" border="0" name="champ_image" src="<?= asset_url('img/draw/tshirt/blanc.png')?>"
                                   width="50" height="50" ALIGN="middle" onClick="javascript:couleur('blanc.png');">
                            <input type="image" border="0" name="champ_image" src="<?= asset_url('img/draw/tshirt/noir.png')?>"
                                   width="50" height="50" ALIGN="middle" onClick="javascript:couleur('noir.png');">
                            <input type="image" border="0" name="champ_image" src="<?= asset_url('img/draw/tshirt/rouge.png')?>"
                                   width="50" height="50" ALIGN="middle" onClick="javascript:couleur('rouge.png');">
                            <input type="image" border="0" name="champ_image" src="<?= asset_url('img/draw/tshirt/bleu.png')?>"
                                   width="50" height="50" ALIGN="middle" onClick="javascript:couleur('bleu.png');">
                            <input type="image" border="0" name="champ_image" src="<?= asset_url('img/draw/tshirt/vert.png')?>"
                                   width="50" height="50" ALIGN="middle" onClick="javascript:couleur('vert.png');">
                            <input type="image" border="0" name="champ_image" src="<?= asset_url('img/draw/tshirt/orange.png')?>"
                                   width="50" height="50" ALIGN="middle" onClick="javascript:couleur('orange.png');">

                        </div>
                        <div class="contenu_onglet" id="contenu_onglet_col">
                            <input type="image" border="0" name="champ_image"
                                   src="<?= asset_url('img/draw/tshirt/colrond.png')?>" width="50" height="50" ALIGN="middle"
                                   onClick='javascript:col("colrond.png");'>
                            <input type="image" border="0" name="champ_image" src="<?= asset_url('img/draw/tshirt/colV.png')?>"
                                   width="50" height="50" ALIGN="middle" onClick='javascript:col("colV.png");'>
                        </div>
                        <div class="contenu_onglet" id="contenu_onglet_manche">
                            <input type="image" border="0" name="champ_image"
                                   src="<?= asset_url('img/draw/tshirt/manchecourte.png')?>" width="50" height="50"
                                   ALIGN="middle" onClick="javascript:manche('manchecourte.png');">
                            <input type="image" border="0" name="champ_image"
                                   src="<?= asset_url('img/draw/tshirt/manchelongue.png')?>" width="50" height="50"
                                   ALIGN="middle" onClick="javascript:manche('manchelongue.png');">
                            <input type="image" border="0" name="champ_image"
                                   src="<?= asset_url('img/draw/tshirt/pasmanche.png')?>" width="50" height="50" ALIGN="middle"
                                   onClick="javascript:manche('pasmanche.png');">

                        </div>
                        <div class="contenu_onglet" id="contenu_onglet_motif">
                            <input type="image" border="0" name="champ_image"
                                   src="<?= asset_url('img/draw/tshirt/barreblanc.png')?>" width="50" height="50" ALIGN="middle"
                                   onClick="javascript:motif('barreblanc.png');">
                            <input type="image" border="0" name="champ_image"
                                   src="<?= asset_url('img/draw/tshirt/barrebleu.png')?>" width="50" height="50" ALIGN="middle"
                                   onClick="javascript:motif('barrebleu.png');">
                            <input type="image" border="0" name="champ_image"
                                   src="<?= asset_url('img/draw/tshirt/barrenoir.png')?>" width="50" height="50" ALIGN="middle"
                                   onClick="javascript:motif('barrenoir.png');">
                            <input type="image" border="0" name="champ_image"
                                   src="<?= asset_url('img/draw/tshirt/barreorange.png')?>" width="50" height="50" ALIGN="middle"
                                   onClick="javascript:motif('barreorange.png');">
                            <input type="image" border="0" name="champ_image"
                                   src="<?= asset_url('img/draw/tshirt/barrerouge.png')?>" width="50" height="50" ALIGN="middle"
                                   onClick="javascript:motif('barrerouge.png');">
                            <input type="image" border="0" name="champ_image"
                                   src="<?= asset_url('img/draw/tshirt/barrevert.png')?>" width="50" height="50" ALIGN="middle"
                                   onClick="javascript:motif('barrevert.png');">

                        </div>
                    </div>
                    <form action='test.php' method="post" id="form1">
                        <input id='formcol' value="" style='display:none;'/>
                        <input id='formmanche' value="" style='display:none;'/>
                        <input id='formcouleur' value="" style='display:none;'/>
                        <input id='formmotif' value="" style='display:none;'/>
                        <input type='submit' value='Valider'/>
                    </form>
                    <script type="text/javascript">
                        var anc_onglet = 'couleur';
                        change_onglet(anc_onglet);
                        //col("colrond.png");
                        //manche('manchecourte.png');
                        //couleur('noir.png');
                    </script>
                </div>
                <div class="tab-pane fade" id="pantalon">

                </div>
            </div>
        </div>
    </div>