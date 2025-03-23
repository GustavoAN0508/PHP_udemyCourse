<?php 

if (5 > 2){

    echo "true <br>";

}
if (2>5){
    echo "não vai printar";
} else {
    echo "false <br>";
}

if(5>2){
    echo "entrou no primeiro if<br>";
    if (11>10){
        echo "entrou no segundo if<br>";
    } else {
        echo "entrou no segundo else<br>";
    }
} else {
echo "entrou no primeiro else<br>";
}
if (3>9){
    echo "não printa";

} else if (5 > 4){
    echo "printalololololol<br>";
} else {
    echo "só printa se todos os else if forem falsos";
}