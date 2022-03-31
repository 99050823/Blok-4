const navbar = document.querySelector(".nav");

const newListNames = ['Filter Status', 'Filter Duration'];
const listFunction = ['status', 'duration'];

for (let i = 0; i < 2; i++) {
    let listItem = document.createElement("li");
    let anchorItem = document.createElement("a");

    anchorItem.innerHTML = newListNames[i];
    anchorItem.href = `index.php?pagina=filter&filterType=${listFunction[i]}`;

    listItem.append(anchorItem);
    navbar.append(listItem);
}


