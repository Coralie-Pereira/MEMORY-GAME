


const moves = document.getElementById("moves-count");
const timeValue = document.getElementById("time");
const startButton = document.getElementById("start");
const stopButton = document.getElementById("stop");
const gameContainer = document.querySelector(".game-container");
const result = document.getElementById("result");
const controls = document.querySelector(".controls-container");
let cards;
let interval;
let firstCard = false;
let secondCard = false;
var difficulty;
var the;
var mode = document.getElementById("mode");
var contboy = document.querySelector(".wrapper");
var theme = document.getElementById("theme");






mode.addEventListener("change", function () {
    difficulty = mode.value;
    the = theme.value;

    if(the == "Pokemon") {


    if (difficulty == "Facile") {
        difficulty = 6;
        console.log(difficulty);
        contboy.style.cssText = `margin-top : 100px;`
        
        items = [
            {name:"bulbizarre", image: "assets/bulbizarre.png"},
            {name:"florizarre", image: "assets/florizarre.png"},
            {name:"salameche", image: "assets/salameche.png"},
            {name:"dracaufeu", image: "assets/dracaufeu.png"},
            {name:"carapuce", image: "assets/carapuce.png"},
            {name:"electrique", image: "assets/tortank.png"},
            {name:"tortank", image: "assets/roucarnage.png"},
            {name:"pikachu", image: "assets/pikachu.png"},
            {name:"absol", image: "assets/absol.png"},
            {name:"laporeille", image: "assets/laporeille.png"},
            {name:"zoroark", image: "assets/zoroark.png"},
            {name:"funecire", image: "assets/funecire.png"},
            {name:"tenefix", image: "assets/tenefix.png"},
            {name:"riolu", image: "assets/riolu.png"},
            {name:"lucario", image: "assets/lucario.png"},
            {name:"flagadoss", image: "assets/flagadoss.png"},
            {name:"sulfura", image: "assets/sulfura.png"},
            {name:"yveltal", image: "assets/yveltal.png"},
            
            
            
            ];

        
        
    }
    else if (difficulty == "Intermediaire") {
        difficulty = 8;
        console.log(difficulty);
        contboy.style.cssText = `margin-top : 200px;`
        
        items = [
            {name:"bulbizarre", image: "assets/bulbizarre.png"},
            {name:"florizarre", image: "assets/florizarre.png"},
            {name:"salameche", image: "assets/salameche.png"},
            {name:"dracaufeu", image: "assets/dracaufeu.png"},
            {name:"carapuce", image: "assets/carapuce.png"},
            {name:"electrique", image: "assets/tortank.png"},
            {name:"tortank", image: "assets/roucarnage.png"},
            {name:"pikachu", image: "assets/pikachu.png"},
            {name:"absol", image: "assets/absol.png"},
            {name:"laporeille", image: "assets/laporeille.png"},
            {name:"zoroark", image: "assets/zoroark.png"},
            {name:"funecire", image: "assets/funecire.png"},
            {name:"tenefix", image: "assets/tenefix.png"},
            {name:"riolu", image: "assets/riolu.png"},
            {name:"lucario", image: "assets/lucario.png"},
            {name:"flagadoss", image: "assets/flagadoss.png"},
            {name:"sulfura", image: "assets/sulfura.png"},
            {name:"yveltal", image: "assets/yveltal.png"},
            {name:"osselait", image: "assets/osselait.png"},
            {name:"artikodin", image: "assets/artikodin.png"},
            {name:"cizayox", image: "assets/cizayox.png"},
            {name:"electhor", image: "assets/electhor.png"},
            {name:"exagide", image: "assets/exagide.png"},
            {name:"groudon", image: "assets/groudon.png"},
            {name:"kyogre", image: "assets/kyogre.png"},
            {name:"mew", image: "assets/mew.png"},
            {name:"mewtwo", image: "assets/mewtwo.png"},
            {name:"queulorior", image: "assets/queulorior.png"},
            {name:"ronflex", image: "assets/ronflex.png"},
            {name:"xerneas", image: "assets/xerneas.png"},
            {name:"marshadow", image: "assets/marshadow.png"},
            {name:"leviator", image: "assets/leviator.png"},
            

            
            
            
            ];
        
        
    }else if (difficulty == "Expert")  { //72
        difficulty = 12;
        console.log(difficulty);
        contboy.style.cssText = `margin-top : 400px;`;
        


        items = [
            {name:"bulbizarre", image: "assets/bulbizarre.png"},
            {name:"florizarre", image: "assets/florizarre.png"},
            {name:"salameche", image: "assets/salameche.png"},
            {name:"dracaufeu", image: "assets/dracaufeu.png"},
            {name:"carapuce", image: "assets/carapuce.png"},
            {name:"electrique", image: "assets/tortank.png"},
            {name:"tortank", image: "assets/roucarnage.png"},
            {name:"pikachu", image: "assets/pikachu.png"},
            {name:"absol", image: "assets/absol.png"},
            {name:"laporeille", image: "assets/laporeille.png"},
            {name:"zoroark", image: "assets/zoroark.png"},
            {name:"funecire", image: "assets/funecire.png"},
            {name:"tenefix", image: "assets/tenefix.png"},
            {name:"riolu", image: "assets/riolu.png"},
            {name:"lucario", image: "assets/lucario.png"},
            {name:"flagadoss", image: "assets/flagadoss.png"},
            {name:"sulfura", image: "assets/sulfura.png"},
            {name:"yveltal", image: "assets/yveltal.png"},
            {name:"osselait", image: "assets/osselait.png"},
            {name:"artikodin", image: "assets/artikodin.png"},
            {name:"cizayox", image: "assets/cizayox.png"},
            {name:"electhor", image: "assets/electhor.png"},
            {name:"exagide", image: "assets/exagide.png"},
            {name:"groudon", image: "assets/groudon.png"},
            {name:"kyogre", image: "assets/kyogre.png"},
            {name:"mew", image: "assets/mew.png"},
            {name:"mewtwo", image: "assets/mewtwo.png"},
            {name:"queulorior", image: "assets/queulorior.png"},
            {name:"ronflex", image: "assets/ronflex.png"},
            {name:"xerneas", image: "assets/xerneas.png"},
            {name:"marshadow", image: "assets/marshadow.png"},
            {name:"leviator", image: "assets/leviator.png"},
            {name:"tutafeh", image: "assets/tutafeh.png"},
            {name:"alligatueur", image: "assets/alligatueur.png"},
            {name:"arceus", image: "assets/arceus.png"},
            {name:"dialga", image: "assets/dialga.png"},
            {name:"genesect", image: "assets/genesect.png"},
            {name:"hoopa", image: "assets/hoopa.png"},
            {name:"lunala", image: "assets/lunala.png"},
            {name:"meganium", image: "assets/meganium.png"},
            {name:"magicarpe", image: "assets/magicarpe.png"},
            {name:"libegon", image: "assets/libegon.png"},
            {name:"simiabraz", image: "assets/simiabraz.png"},
            {name:"boumata", image: "assets/boumata.png"},
            {name:"zeroid", image: "assets/zeroid.png"},
            {name:"sablaireau", image: "assets/sablaireau.png"},
            {name:"machoc", image: "assets/machoc.png"},
            {name:"otaria", image: "assets/otaria.png"},
            {name:"kaiminus", image: "assets/kaiminus.png"},
            {name:"pichu", image: "assets/pichu.png"},
            {name:"debugant", image: "assets/debugant.png"},
            {name:"arcko", image: "assets/arcko.png"},
            {name:"poussifeu", image: "assets/poussifeu.png"},
            {name:"gobou", image: "assets/gobou.png"},
            {name:"misdibulle", image: "assets/misdibulle.png"},
            {name:"sharpedo", image: "assets/sharpedo.png"},
            {name:"lockpin", image: "assets/lockpin.png"},
            {name:"hippopotas", image: "assets/hippopotas.png"},
            {name:"dimoret", image: "assets/dimoret.png"},
            {name:"crehelf", image: "assets/crehelf.png"},
            {name:"crefollet", image: "assets/crefolet.png"},
            {name:"crefadet", image: "assets/crefadet.png"},
            {name:"terra1", image: "assets/terra1.png"},
            {name:"terra2", image: "assets/terra2.png"},
            {name:"terra3", image: "assets/terra3.png"},
            {name:"reshiram", image: "assets/reshiram.png"},
            {name:"zekrom", image: "assets/zekrom.png"},
            {name:"kyurem", image: "assets/kyurem.png"},
            {name:"rexilius", image: "assets/rexilius.png"},
            {name:"dodoala", image: "assets/dodoala.png"},
            {name:"carabaffe", image: "assets/carabaffe.png"}, 
            {name:"nidoqueen", image: "assets/nidoqueen.png"},  
            

            ];
        
        
    }
    else if (difficulty == "Impossible") {
        difficulty = 20;
        console.log(difficulty);
        contboy.style.cssText = `margin-top : 800px; margin-left: 430px;`;
        

        items = [
            {name:"bulbizarre", image: "assets/bulbizarre.png"},
            {name:"florizarre", image: "assets/florizarre.png"},
            {name:"salameche", image: "assets/salameche.png"},
            {name:"dracaufeu", image: "assets/dracaufeu.png"},
            {name:"carapuce", image: "assets/carapuce.png"},
            {name:"electrique", image: "assets/tortank.png"},
            {name:"tortank", image: "assets/roucarnage.png"},
            {name:"pikachu", image: "assets/pikachu.png"},
            {name:"absol", image: "assets/absol.png"},
            {name:"laporeille", image: "assets/laporeille.png"},
            {name:"zoroark", image: "assets/zoroark.png"},
            {name:"funecire", image: "assets/funecire.png"},
            {name:"tenefix", image: "assets/tenefix.png"},
            {name:"riolu", image: "assets/riolu.png"},
            {name:"lucario", image: "assets/lucario.png"},
            {name:"flagadoss", image: "assets/flagadoss.png"},
            {name:"sulfura", image: "assets/sulfura.png"},
            {name:"yveltal", image: "assets/yveltal.png"},
            {name:"osselait", image: "assets/osselait.png"},
            {name:"artikodin", image: "assets/artikodin.png"},
            {name:"cizayox", image: "assets/cizayox.png"},
            {name:"electhor", image: "assets/electhor.png"},
            {name:"exagide", image: "assets/exagide.png"},
            {name:"groudon", image: "assets/groudon.png"},
            {name:"kyogre", image: "assets/kyogre.png"},
            {name:"mew", image: "assets/mew.png"},
            {name:"mewtwo", image: "assets/mewtwo.png"},
            {name:"queulorior", image: "assets/queulorior.png"},
            {name:"ronflex", image: "assets/ronflex.png"},
            {name:"xerneas", image: "assets/xerneas.png"},
            {name:"marshadow", image: "assets/marshadow.png"},
            {name:"leviator", image: "assets/leviator.png"},
            {name:"tutafeh", image: "assets/tutafeh.png"},
            {name:"alligatueur", image: "assets/alligatueur.png"},
            {name:"arceus", image: "assets/arceus.png"},
            {name:"dialga", image: "assets/dialga.png"},
            {name:"genesect", image: "assets/genesect.png"},
            {name:"hoopa", image: "assets/hoopa.png"},
            {name:"lunala", image: "assets/lunala.png"},
            {name:"meganium", image: "assets/meganium.png"},
            {name:"magicarpe", image: "assets/magicarpe.png"},
            {name:"libegon", image: "assets/libegon.png"},
            {name:"simiabraz", image: "assets/simiabraz.png"},
            {name:"boumata", image: "assets/boumata.png"},
            {name:"zeroid", image: "assets/zeroid.png"},
            {name:"sablaireau", image: "assets/sablaireau.png"},
            {name:"machoc", image: "assets/machoc.png"},
            {name:"otaria", image: "assets/otaria.png"},
            {name:"kaiminus", image: "assets/kaiminus.png"},
            {name:"pichu", image: "assets/pichu.png"},
            {name:"debugant", image: "assets/debugant.png"},
            {name:"arcko", image: "assets/arcko.png"},
            {name:"poussifeu", image: "assets/poussifeu.png"},
            {name:"gobou", image: "assets/gobou.png"},
            {name:"misdibulle", image: "assets/misdibulle.png"},
            {name:"sharpedo", image: "assets/sharpedo.png"},
            {name:"lockpin", image: "assets/lockpin.png"},
            {name:"hippopotas", image: "assets/hippopotas.png"},
            {name:"dimoret", image: "assets/dimoret.png"},
            {name:"crehelf", image: "assets/crehelf.png"},
            {name:"crefollet", image: "assets/crefolet.png"},
            {name:"crefadet", image: "assets/crefadet.png"},
            {name:"terra1", image: "assets/terra1.png"},
            {name:"terra2", image: "assets/terra2.png"},
            {name:"terra3", image: "assets/terra3.png"},
            {name:"reshiram", image: "assets/reshiram.png"},
            {name:"zekrom", image: "assets/zekrom.png"},
            {name:"kyurem", image: "assets/kyurem.png"},
            {name:"rexilius", image: "assets/rexilius.png"},
            {name:"dodoala", image: "assets/dodoala.png"},
            {name:"carabaffe", image: "assets/carabaffe.png"}, 
            {name:"nidoqueen", image: "assets/nidoqueen.png"}, 
            {name:"onix", image: "assets/onix.png"}, 
            {name:"ossatueur", image: "assets/ossatueur.png"}, 
            {name:"minidraco", image: "assets/minidraco.png"}, 
            {name:"mewtwoY", image: "assets/mewtwoY.png"}, 
            {name:"pharamp", image: "assets/pharamp.png"}, 
            {name:"draco", image: "assets/draco.png"}, 
            {name:"nucleos", image: "assets/nucleos.png"}, 
            {name:"agma", image: "assets/agma.png"}, 
            {name:"amagma", image: "assets/amagma.png"}, 
            {name:"psytigri", image: "assets/psytigri.png"}, //10
            {name:"evoli", image: "assets/evoli.png"}, 
            {name:"roucool", image: "assets/roucool.png"}, 
            {name:"togepi", image: "assets/togepi.png"}, 
            {name:"nameoui", image: "assets/nameoui.png"}, 
            {name:"meganameoui", image: "assets/meganameoui.png"}, 
            {name:"ptiravi", image: "assets/ptiravi.png"}, 
            {name:"wouatwouat", image: "assets/wouatwouat.png"}, 
            {name:"chacripan", image: "assets/chacripan.png"}, 
            {name:"phampy", image: "assets/phampy.png"}, 
            {name:"nidoranf", image: "assets/nidoranf.png"}, //20
            {name:"nidorang", image: "assets/nidorang.png"}, 
            {name:"trousselin", image: "assets/trousselin.png"}, 
            {name:"kangourex", image: "assets/kangourex.png"}, 
            {name:"megakangourex", image: "assets/megakangourex.png"}, 
            {name:"korillon", image: "assets/korillon.png"}, 
            {name:"sucroquin", image: "assets/sucroquin.png"}, 
            {name:"muciole", image: "assets/muciole.png"}, 
            {name:"lumivol", image: "assets/lumivol.png"}, 
            {name:"ramoloss", image: "assets/ramoloss.png"}, 
            {name:"azurill", image: "assets/azurill.png"}, //30
            {name:"tylton", image: "assets/tylton.png"}, 
            {name:"arakdo", image: "assets/arakdo.png"}, 
            {name:"nirondelle", image: "assets/nirondelle.png"}, 
            {name:"miaouss", image: "assets/miaouss.png"}, 
            {name:"cradopaud", image: "assets/cradopaud.png"}, 
            {name:"corayon", image: "assets/corayon.png"}, 
            {name:"marill", image: "assets/marill.png"}, 
            {name:"goupix", image: "assets/goupix.png"}, 
            {name:"lokhlass", image: "assets/lokhlass.png"}, 
            {name:"roucoups", image: "assets/roucoups.png"}, //40
            {name:"megaflagadoss", image: "assets/megaflagadoss.png"}, 
            {name:"chinchidou", image: "assets/chinchidou.png"}, 
            {name:"sorbébé", image: "assets/sorbébé.png"}, 
            {name:"pijako", image: "assets/pijako.png"}, 
            {name:"coupenotte", image: "assets/coupenotte.png"}, 
            {name:"zorua", image: "assets/zorua.png"}, 
            {name:"lainergie", image: "assets/lainergie.png"}, 
            {name:"aquali", image: "assets/aquali.png"}, 
            {name:"reptincel", image: "assets/reptincel.png"}, 
            {name:"mustebouee", image: "assets/mustebouee.png"}, //50
            {name:"brutalibre", image: "assets/brutalibre.png"}, 
            {name:"herbizarre", image: "assets/herbizarre.png"}, 
            {name:"manzai", image: "assets/manzai.png"}, 
            {name:"fantominus", image: "assets/fantominus.png"}, 
            {name:"flobio", image: "assets/flobio.png"}, 
            {name:"galifeu", image: "assets/galifeu.png"}, 
            {name:"togetic", image: "assets/togetic.png"}, 
            {name:"noctali", image: "assets/noctali.png"}, 
            {name:"mentali", image: "assets/mentali.png"}, 
            {name:"massko", image: "assets/massko.png"}, //60
            {name:"megaaltaria", image: "assets/megaaltaria.png"}, 
            {name:"azumarill", image: "assets/azumarill.png"}, 
            {name:"kungfouine", image: "assets/kungfouine.png"}, 
            {name:"stalgamin", image: "assets/stalgamin.png"}, 
            {name:"nymphali", image: "assets/nymphali.png"}, 
            {name:"ecremeuh", image: "assets/ecremeuh.png"}, 
            {name:"maskadra", image: "assets/maskadra.png"}, 
            {name:"doudouvet", image: "assets/doudouvet.png"}, 
            {name:"chlorobulle", image: "assets/chlorobulle.png"}, 
            {name:"dedenne", image: "assets/dedenne.png"}, //70
            {name:"cupcanaille", image: "assets/cupcanaille.png"}, 
            {name:"leopardus", image: "assets/leopardus.png"}, 
            {name:"leveinard", image: "assets/leveinard.png"}, 
            {name:"gloupti", image: "assets/gloupti.png"}, 
            {name:"archeomire", image: "assets/archeomire.png"}, 
            {name:"emolga", image: "assets/emolga.png"}, 
            {name:"simularbre", image: "assets/simularbre.png"}, 
            {name:"nidorina", image: "assets/nidorina.png"}, 
            {name:"nidorino", image: "assets/nidorino.png"}, 
            {name:"strassie", image: "assets/strassie.png"}, //80
            {name:"judocrack", image: "assets/judocrack.png"}, 
            {name:"karaclee", image: "assets/karaclee.png"}, 
            {name:"eoko", image: "assets/eoko.png"}, 
            {name:"donphan", image: "assets/donphan.png"}, 
            {name:"incisache", image: "assets/incisache.png"}, 
            {name:"raichu", image: "assets/raichu.png"}, 
            {name:"ptera", image: "assets/ptera.png"}, 
            {name:"megapharamp", image: "assets/megapharamp.png"}, 
            {name:"cadoizo", image: "assets/cadoizo.png"}, 
            {name:"feuforeve", image: "assets/feuforeve.png"}, //90
            {name:"oniglali", image: "assets/oniglali.png"}, 
            {name:"drago", image: "assets/drago.png"}, 
            {name:"shaofouine", image: "assets/shaofouine.png"}, 
            {name:"sorboul", image: "assets/sorbouk.png"}, 
            {name:"voltali", image: "assets/voltali.png"}, 
            {name:"pashmilla", image: "assets/pashmilla.png"}, 
            {name:"givrali", image: "assets/givrali.png"}, 
            {name:"leuphorie", image: "assets/leuphorie.png"}, 
            {name:"feunard", image: "assets/feunard.png"}, 
            {name:"altaria", image: "assets/altaria.png"}, //100
            {name:"sorbouboul", image: "assets/sorbouboul.png"}, 
            {name:"megaoniglalie", image: "assets/megaoniglalie.png"}, 
            {name:"spectrum", image: "assets/spectrum.png"}, 
            {name:"melancolux", image: "assets/melancolux.png"}, 
            {name:"avaltou", image: "assets/avaltou.png"}, 
            {name:"ectoplasma", image: "assets/ectoplasma.png"}, 
            {name:"persian", image: "assets/persian.png"}, 
            {name:"fragilady", image: "assets/fragilady.png"}, 
            {name:"momartik", image: "assets/momartik.png"}, 
            {name:"magireve", image: "assets/magireve.png"}, //110
            {name:"roigada", image: "assets/roigada.png"}, 
            {name:"archeodong", image: "assets/archeodong.png"}, 
            {name:"lugularbre", image: "assets/lugularbre.png"}, 
            {name:"limonde", image: "assets/limonde.png"}, 
            {name:"farfaduvet", image: "assets/farfaduvet.png"}, 
            {name:"phylalie", image: "assets/phylalie.png"}, 
            {name:"airmure", image: "assets/airmure.png"}, 
            {name:"coatox", image: "assets/coatox.png"}, 
            {name:"togekiss", image: "assets/togekiss.png"}, 
            {name:"scarhino", image: "assets/scarhino.png"}, //120
            {name:"tranchodon", image: "assets/tranchodon.png"}, 
            {name:"goinfrex", image: "assets/goinfrex.png"}, 
            {name:"marisson", image: "assets/marisson.png"}, 
            {name:"grenousse", image: "assets/grenousse.png"}, 
            {name:"feunnec", image: "assets/feunnec.png"}, 
            {name:"pyronille", image: "assets/pyronille.png"}, 
            {name:"barpeau", image: "assets/barpeau.png"}, 
            {name:"miasmiasme", image: "assets/miasmiasme.png"}, //128


            

            ];
        
    }

}
else if (the == "Drapeau") {

    if (difficulty == "Facile") {
        difficulty = 6;
        console.log(difficulty);
        
        items = [
            {name:"bulbizarre", image: "assets/ad.png"},
            {name:"florizarre", image: "assets/ae.png"},
            {name:"dracaufeu", image: "assets/ag.png"},
            {name:"salameche", image: "assets/af.png"},
            {name:"carapuce", image: "assets/ai.png"},
            {name:"electrique", image: "assets/al.png"},
            {name:"tortank", image: "assets/am.png"},
            {name:"pikachu", image: "assets/ao.png"},
            {name:"absol", image: "assets/aq.png"},
            {name:"laporeille", image: "assets/ar.png"},
            {name:"zoroark", image: "assets/as.png"},
            {name:"funecire", image: "assets/at.png"},
            {name:"tenefix", image: "assets/au.png"},
            {name:"riolu", image: "assets/aw.png"},
            {name:"lucario", image: "assets/ax.png"},
            {name:"flagadoss", image: "assets/az.png"},
            {name:"sulfura", image: "assets/ba.png"},
            {name:"yveltal", image: "assets/bb.png"},
            
            
            
            ];

        
        
    }
    else if (difficulty == "Intermediaire") {
        difficulty = 8;
        console.log(difficulty);
        contboy.style.cssText = `margin-top : 150px;`
        
        items = [
            {name:"bulbizarre", image: "assets/ad.png"},
            {name:"florizarre", image: "assets/ae.png"},
            {name:"dracaufeu", image: "assets/ag.png"},
            {name:"salameche", image: "assets/af.png"},
            {name:"carapuce", image: "assets/ai.png"},
            {name:"electrique", image: "assets/al.png"},
            {name:"tortank", image: "assets/am.png"},
            {name:"pikachu", image: "assets/ao.png"},
            {name:"absol", image: "assets/aq.png"},
            {name:"laporeille", image: "assets/ar.png"},
            {name:"zoroark", image: "assets/as.png"},
            {name:"funecire", image: "assets/at.png"},
            {name:"tenefix", image: "assets/au.png"},
            {name:"riolu", image: "assets/aw.png"},
            {name:"lucario", image: "assets/ax.png"},
            {name:"flagadoss", image: "assets/az.png"},
            {name:"sulfura", image: "assets/ba.png"},
            {name:"yveltal", image: "assets/bb.png"},
            {name:"osselait", image: "assets/bd.png"},
            {name:"artikodin", image: "assets/be.png"},
            {name:"cizayox", image: "assets/bf.png"},
            {name:"electhor", image: "assets/bg.png"},
            {name:"exagide", image: "assets/bh.png"},
            {name:"groudon", image: "assets/bi.png"},
            {name:"kyogre", image: "assets/bj.png"},
            {name:"mew", image: "assets/bl.png"},
            {name:"mewtwo", image: "assets/bm.png"},
            {name:"queulorior", image: "assets/bn.png"},
            {name:"ronflex", image: "assets/bo.png"},
            {name:"xerneas", image: "assets/bq.png"},
            {name:"marshadow", image: "assets/br.png"},
            {name:"leviator", image: "assets/bs.png"},
            

            
            
            
            ];
        
        
    }

}
else if (the == "emoji") {

    if (difficulty == "Facile") {
        difficulty = 6;
        console.log(difficulty);
        
        items = [
            {name:"bulbizarre", image: "assets/1011.png"},
            {name:"florizarre", image: "assets/1012.png"},
            {name:"dracaufeu", image: "assets/1013.png"},
            {name:"salameche", image: "assets/1014.png"},
            {name:"carapuce", image: "assets/1015.png"},
            {name:"electrique", image: "assets/1016.png"},
            {name:"tortank", image: "assets/1017.png"},
            {name:"pikachu", image: "assets/1018.png"},
            {name:"absol", image: "assets/1019.png"},
            {name:"laporeille", image: "assets/1020.png"},
            {name:"zoroark", image: "assets/1021.png"},
            {name:"funecire", image: "assets/1022.png"},
            {name:"tenefix", image: "assets/1023.png"},
            {name:"riolu", image: "assets/1024.png"},
            {name:"lucario", image: "assets/1025.png"},
            {name:"flagadoss", image: "assets/1026.png"},
            {name:"sulfura", image: "assets/1027.png"},
            {name:"yveltal", image: "assets/1028.png"},
            
            
            
            ];

        
        
    }
    else if (difficulty == "Intermediaire") {
        difficulty = 8;
        console.log(difficulty);
        contboy.style.cssText = `margin-top : 150px;`
        
        items = [
            {name:"bulbizarre", image: "assets/1011.png"},
            {name:"florizarre", image: "assets/1012.png"},
            {name:"dracaufeu", image: "assets/1013.png"},
            {name:"salameche", image: "assets/1014.png"},
            {name:"carapuce", image: "assets/1015.png"},
            {name:"electrique", image: "assets/1016.png"},
            {name:"tortank", image: "assets/1017.png"},
            {name:"pikachu", image: "assets/1018.png"},
            {name:"absol", image: "assets/1019.png"},
            {name:"laporeille", image: "assets/1020.png"},
            {name:"zoroark", image: "assets/1021.png"},
            {name:"funecire", image: "assets/1022.png"},
            {name:"tenefix", image: "assets/1023.png"},
            {name:"riolu", image: "assets/1024.png"},
            {name:"lucario", image: "assets/1025.png"},
            {name:"flagadoss", image: "assets/1026.png"},
            {name:"sulfura", image: "assets/1027.png"},
            {name:"yveltal", image: "assets/1028.png"},
            {name:"osselait", image: "assets/1029.png"},
            {name:"artikodin", image: "assets/1030.png"},
            {name:"cizayox", image: "assets/1031.png"},
            {name:"electhor", image: "assets/1032.png"},
            {name:"exagide", image: "assets/1033.png"},
            {name:"groudon", image: "assets/1034.png"},
            {name:"kyogre", image: "assets/1035.png"},
            {name:"mew", image: "assets/1036.png"},
            {name:"mewtwo", image: "assets/1037.png"},
            {name:"queulorior", image: "assets/1038.png"},
            {name:"ronflex", image: "assets/1039.png"},
            {name:"xerneas", image: "assets/1040.png"},
            {name:"marshadow", image: "assets/1041.png"},
            {name:"leviator", image: "assets/1042.png"},
            

            
            
            
            ];
        
        
    }


}})



    
    let seconds = 0,
    minutes = 0;
    
    let movesCount = 0,
    winCount = 0;
    
    const timeGenerator = () => {
        seconds +=1; 
    
    
    if (seconds >= 60) {
        minutes +=1;
        seconds = 0;
    }
    let secondsValue = seconds < 10 ? `0${seconds}` :
    seconds;
    let minutesValue = minutes < 10 ? `0${minutes}`:
    minutes;
    timeValue.innerHTML = `<span>Time:</span>
    ${minutesValue}:${secondsValue}`;
    };
    
    const movesCounter = () => {
        movesCount +=1;
        moves.innerHTML = `<span>Moves:</span>${movesCount}`;
    };
    
    const generateRandom = (size = difficulty) => {
        let tempArray = [...items];
        let cardValues = [];
        size = (size * size) / 2;
        for (let i = 0; i< size;i++) {
            const randomIndex = Math.floor(Math.random() * tempArray.length);
            cardValues.push(tempArray[randomIndex]);
            tempArray.splice(randomIndex,1);
    
        }
        return cardValues;
    };
    
    
    const matrixGenerator = (cardValues, size = difficulty ) => {
        gameContainer.innerHTML = "";
        cardValues = [...cardValues, ...cardValues];
        cardValues.sort(() => Math.random() - 0.5);
        for(let i=0; i<size*size;i++) {
            gameContainer.innerHTML +=`
            <div class="card-container" data-card-value="${cardValues[i].name}">
            <div class="card-before"> <img src= "assets/pokeball.png"></div>
            <div class="card-after">
            <img src="${cardValues[i].image}"
            class="image"/></div>
            </div>
            `;
        }
        gameContainer.style.gridTemplateColumns = `repeat(${size},auto)`;
        cards = document.querySelectorAll(".card-container");
        cards.forEach((card) => {
            card.addEventListener("click", () => {
                if(!card.classList.contains("matched")) {
                    card.classList.add("flipped");
                    if(!firstCard) {
                        firstCard = card;
                        firstCardValue = card.getAttribute
                        ("data-card-value");
                    }
                    
                    else {
                        movesCounter();
                        secondCard = card;
                        let secondCardvalue = card.getAttribute
                        ("data-card-value");
                        if(firstCardValue == secondCardvalue) { //on ignore les 2cartes similaires
                            firstCard.classList.add("matched");
                            secondCard.classList.add("matched");
                            firstCard = false;
                            winCount+=1;
                            if(winCount == Math.floor(cardValues.length / 2)) {
                                result.innerHTML = `<h2>You Won</h2>
                                <h4>Moves: ${movesCount}</h4>`;
                                stopGame();
                            }
                        }
                        else{
                            let [tempFirst, tempSecond] = [firstCard, secondCard];
                            firstCard = false;
                            secondCard = false;
                            let delay = setTimeout(() => {
                                tempFirst.classList.remove("flipped");
                                tempSecond.classList.remove("flipped");
                            }, 900);
                        }
                    }
                }
                
            });
        })
    };
    console.log(mode.value)

    mode.value = difficulty;

    console.log(difficulty)

    function generateTable(){
        if(move.value == 'Facile'){
        console.log('ON EST PAS DES CRACK NOUS');
        } else {
            console.log('je suis une merde');
        }
        return generateTable();
    }










    startButton.addEventListener("click", () => {
        console.log(difficulty)
        movesCount = 0;
        seconds = 0;
        minutes = 0;
        controls.classList.add("hide");
        stopButton.classList.remove("hide");
        startButton.classList.add("hide");
        interval = setInterval(timeGenerator, 1000);
        moves.innerHTML =`<span>Moves:</span> ${movesCount}
        `;
        initializer();
     });
    
    stopButton.addEventListener("click",(stopGame = () => {
        controls.classList.remove("hide");
        stopButton.classList.add("hide");
        startButton.classList.remove("hide");
        clearInterval(interval);
    })
    );
    
    const initializer = () => {
        result.innerText = "";
        winCount = 0;
        let cardValues = generateRandom();
        console.log(cardValues);
        matrixGenerator(cardValues);
    };