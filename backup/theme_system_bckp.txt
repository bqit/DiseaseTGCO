function preview(theme) {
    document.documentElement.className = theme;
}

function show_themes(button) {
    button.disabled = true;
    let target = document.getElementById("container_theme");
    target.classList.add("container_theme_shown");
    target.classList.remove("container_theme_hidden")
}

function set_theme(theme) {
    let button = document.getElementById("button");
    button.disabled = false;

    let target = document.getElementById("container_theme");
    target.classList.add("container_theme_hidden");
    target.classList.remove("container_theme_shown")
    button.innerHTML = update_string(theme);

    document.documentElement.className = theme;
    document.cookie = "theme=" + theme + "; path=/; max-age=" + (60*60*24*30);
}

window.onload = function() {
    const theme = document.cookie.replace(/(?:(?:^|.*;\s*)theme\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    if (theme) document.documentElement.className = theme;
    
    let button = document.getElementById("button");
    button.innerHTML = update_string(theme);
};

function quick_close(){
    let target = document.getElementById("container_theme");
    target.classList.add("container_theme_hidden");
    target.classList.remove("container_theme_shown")

    const theme = document.cookie.replace(/(?:(?:^|.*;\s*)theme\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    if (theme) document.documentElement.className = theme;
    
    button.disabled = false;
}

function update_string(theme){
    let string_title = "internal_error"
    switch(theme) {
        case 'default':
            string_title = "DTCGO Default";
        break;
        case 'light':
            string_title = "DTCGO Light";
        break;
        case 'retro':
            string_title = "Retrò";
        break;
        case 'hellokitty':
            string_title = "Hello Kitty";
        break;
        case 'peach':
            string_title = "Pesca";
        break;
        case 'tiramisu':
            string_title = "Tiramisù";
        break;
        case 'cyberred':
            string_title = "Cyber Red";
        break;
        case 'lavender':
            string_title = "Lavanda";
        break;
        case 'matrix':
            string_title = "Matrix";
        break;
        case 'stealth':
            string_title = "Stealth";
        break;
        case 'chiesenewyear':
            string_title = "Capodanno Cinese";
        break;
        case 'evangelion':
            string_title = "Evangelion";
        break;
        case 'pro':
            string_title = "DTCGO Pro";
        break;
        case 'mint':
            string_title = "Menta";
        break;
        case 'latte':
            string_title = "Latte";
        break;
        case 'inferno':
            string_title = "Inferno";
        break;
        case 'snes':
            string_title = "SNES";
        break;
        case 'vivid':
            string_title = "Vivido";
        break;
        case 'cyberred':
            string_title = "Cyber Red";
        break;
        case 'watermelon':
            string_title = "Cocomero";
        break;
        case 'igor':
            string_title = "IGOR";
        break;
        case 'tacos':
            string_title = "Tacos";
        break;
        case 'matchamocha':
            string_title = "Matcha Mocha";
        break;
        case 'deepocean':
            string_title = "Deep Ocean";
        break;
        case 'igor':
            string_title = "IGOR";
        break;
        case 'honey':
            string_title = "Honey";
        break;
        case 'incognito':
            string_title = "Incognito";
        break;
        case 'doomsday':
            string_title = "Doomsday";
        break;
        case 'discord':
            string_title = "Discord";
        break;
        case 'cherry':
            string_title = "Ciliegia";
        break;
    }

    return string_title;
}

function loadThemeContainer() {
    fetch('./../html/themes.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('container_theme').innerHTML = data;
        })
        .catch(error => console.error('Error loading theme container:', error));
}

loadThemeContainer();
set_theme("default");