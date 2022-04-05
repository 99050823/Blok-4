const navbar = document.querySelector(".nav");

const newListNames = ['Filter Status', 'Filter Duration - ASC', 'Filter Duration - DESC'];
const listFunction = ['status', 'duration', 'duration'];
const timeFilter = [null, 'ASC', 'DESC'];

for (let i = 0; i < 3; i++) {
    let listItem = document.createElement("li");
    let anchorItem = document.createElement("a");

    anchorItem.innerHTML = newListNames[i];
    anchorItem.href = `index.php?pagina=filter&filterType=${listFunction[i]}&timeFilter=${timeFilter[i]}`;

    listItem.append(anchorItem);
    navbar.append(listItem);
}



