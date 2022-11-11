document.getElementById('themes').onclick = function() {
 
    var values = ["Mario", "Pokemon", "Drapeau", "Marques"];
 
    var select = document.createElement("select");
    select.name = "pets";
    select.id = "pets"
 
    for (const val of values)
    {
        var option = document.createElement("option");
        option.value = val;
        option.text = val.charAt(0).toUpperCase() + val.slice(1);
        select.appendChild(option);
    }
 
    var label = document.createElement("label");
    label.innerHTML = "Choisi ton thÃ¨me: "
    label.htmlFor = "pets";
 
    document.getElementById("container").appendChild(label).appendChild(select);
}