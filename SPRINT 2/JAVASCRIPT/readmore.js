var v=0;
    function show(){
        if(!v){
            document.getElementById("more").style.display="inline";
            document.getElementById("dots").style.display="none";
            document.getElementById("read").innerHTML="show less";
            v=1;
        }
        else{
            document.getElementById("more").style.display="none";
            document.getElementById("dots").style.display="inline";
            document.getElementById("read").innerHTML="show more";
            v=0;
        }
    }