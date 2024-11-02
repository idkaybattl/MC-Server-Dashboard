function expand_nav() {
    document.getElementById("nav").classList.toggle("expanded_nav");
    document.getElementById("expand_arrow").classList.toggle("expanded_arrow");
    document.querySelectorAll("icon_name").classList.toggle("expanded_icon_name");
}