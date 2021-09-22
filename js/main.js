function main(){
    AddSelectedHighlighting();

    HighlightById("aboutme-btn");
}

function HighlightById(id){
    document.getElementById(id).classList.toggle("selected");
}

function AddSelectedHighlighting(){
    var btns = document.querySelectorAll(".btn-toggle-nav a");

    btns.forEach(btn => {
        btn.addEventListener("click", () =>{
            if (btn.id === "github-btn"){
                // do nothing
            }
            else{
                btn.classList.toggle("selected");
            }
        })
    })
}
main();