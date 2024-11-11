function expand_nav() {
    document.getElementById("nav").classList.toggle("expanded_nav");
    document.getElementById("expand_arrow").classList.toggle("expanded_arrow");
    const icon_names = document.getElementsByClassName("icon_name");
    for (let i = 0; i < icon_names.length; i++) {
        icon_names[i].classList.toggle("expanded_icon_name");
    }
}