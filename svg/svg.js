window.addEventListener("load", function() {

    var example = document.querySelector("#svgExample").contentDocument;
    var popup = document.querySelector("#popup");
    example.addEventListener('mouseover', on);
    example.addEventListener('mouseout', onout);

    function on(e){
        e.target.classList.add("on");
        if(e.target.classList.contains("st0")) {
            popup.style.display = "block";
            popup.children[0].innerHTML = "안녕하세요";
        }
        if(e.target.classList.contains("st1")) {
            popup.style.display = "block";
            popup.children[0].innerHTML = "방가방가";
        }
        if(e.target.classList.contains("st2")) {
            popup.style.display = "block";
            popup.children[0].innerHTML = "굿모닝";
        }
        if(e.target.classList.contains("st3")) {
            popup.style.display = "block";
            popup.children[0].innerHTML = "식사하셨습니까?";
        }
        if(e.target.classList.contains("st4")) {
            popup.style.display = "block";
            popup.children[0].innerHTML = "잘가요~~";
        }

    }
    function onout(e){
        e.target.classList.remove("on");
        popup.style.display = "none";
    }


});