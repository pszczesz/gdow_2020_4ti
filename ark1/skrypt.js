window.onload = function(){
    document.querySelector("#sprawdz").onclick = function(){
       // alert("ffff");
       let text = document.querySelector("#haslo").value;
       if(text.trim().length==0){
           document.querySelector("#wynik").innerHTML = 
           "<div style='color:red'>WPISZ HASŁO!</div>";
       }else if(czyJestCyfra(text) && text.trim().length>=7){
        document.querySelector("#wynik").innerHTML = 
        "<div style='color:green'>DOBRE</div>";
       }else if(czyJestCyfra(text) && text.trim().length>=4){
        document.querySelector("#wynik").innerHTML = 
        "<div style='color:blue'>ŚREDNIE</div>";
       }else{
        document.querySelector("#wynik").innerHTML = 
        "<div style='color:yellow'>SŁABE</div>";
       }
    };
};
function czyJestCyfra(text){
    for(let i=0;i<text.length;i++){
        if(text[i]>='0' && text[i]<='9'){
            return true;
        }
    }
    return false;
}