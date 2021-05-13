
	var anh=[];
    anh[0]="./public/img/slide/slide-02.jpg";
    anh[1]="./public/img/slide/slide-03.jpg";
    anh[2]="./public/img/slide/slide-07.jpg";
    var i=0;
    var au=0;
function auto(){
      i++;
     document.getElementById("image").src=anh[i];
     if(i==anh.length-1){
         i=-1;
     };  
    au=setTimeout(auto,2000);
      }
window.onload=function(){
    au=setTimeout(auto,2000);	
}
