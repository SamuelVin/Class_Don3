const reaction1 = document.getElementById("Reaction_1");
const reaction2 = document.getElementById("Reaction_2");
const reaction3 = document.getElementById("Reaction_3");
const selectValue = document.getElementById("selectionValue")

reaction1.addEventListener("click", changeGreen);
function changeGreen(){
    reaction1.style.borderColor= "green";
    reaction2.style.borderColor= "#595959";
    reaction3.style.borderColor= "#595959";
    selectValue.innerHTML = "Vert"
}
reaction2.addEventListener("click", changeYellow);
function changeYellow(){
    reaction1.style.borderColor= "#595959";
    reaction2.style.borderColor= "yellow";
    reaction3.style.borderColor= "#595959";
    selectValue.innerHTML = "Jaune"
}
reaction3.addEventListener("click", changeRed);
function changeRed(){
    reaction1.style.borderColor= "#595959";
    reaction2.style.borderColor= "#595959";
    reaction3.style.borderColor= "red";
    selectValue.innerHTML = "Rouge"
}

