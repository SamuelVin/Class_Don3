const reaction1 = document.getElementById("Reaction_1");
const reaction2 = document.getElementById("Reaction_2");
const reaction3 = document.getElementById("Reaction_3");
const selectValue = document.getElementById("selectionValue")

const input_nip = document.getElementById("Input_Nip")
const input_button = document.getElementById("Input_Button")

selectValue.value = "";
reaction1.addEventListener("click", changeGreen);
function changeGreen(){
    reaction1.style.borderColor= "green";
    reaction2.style.borderColor= "#595959";
    reaction3.style.borderColor= "#595959";
    selectValue.value = "Vert";
}
reaction2.addEventListener("click", changeYellow);
function changeYellow(){
    reaction1.style.borderColor= "#595959";
    reaction2.style.borderColor= "yellow";
    reaction3.style.borderColor= "#595959";
    selectValue.value = "Jaune";
}
reaction3.addEventListener("click", changeRed);
function changeRed(){
    reaction1.style.borderColor= "#595959";
    reaction2.style.borderColor= "#595959";
    reaction3.style.borderColor= "red";
    selectValue.value = "Rouge";
}

input_button.addEventListener("click", goAdmin)
function goAdmin(){
    const nip = 4390;
    if(input_nip.value==nip){
        document.location.href = "../Web/Affichage.php";
    }else{
        alert("Mots de passe inccorect");
    }
}