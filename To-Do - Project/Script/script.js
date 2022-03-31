const list = document.getElementById('to-do');
const items = list.querySelectorAll('li');

var line_bool = false; 

items.forEach(el => {
    el.addEventListener("click", () => {
        if (line_bool == false) {
            el.style.textDecoration = "line-through";
            line_bool = true;
        } else if (line_bool == true) {
            el.style.textDecoration = "none";
            line_bool = false;
        }
    })
})