const toggle = document.querySelector(".dark-toggle");

let toggled = localStorage.getItem("dark-mode") || false

if(toggled === "true"){
    document.body.classList.toggle('dark-mode');
}

toggle.onclick = () => {
    document.body.classList.toggle('dark-mode');

    toggled = toggled == "true" ? "false" : "true" 
    localStorage.setItem("dark-mode", toggled)

}