/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */


// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

require('bootstrap');
require("@fortawesome/fontawesome-free/css/all.min.css");
require("@fortawesome/fontawesome-free/js/all.js");

window.onload = () => {
    /*====== Sidebar user ======*/

    let aside = document.querySelector(".sidebar_user");
    let icon = aside.querySelector(".menu_icon");
    //let li = aside.querySelectorAll(".side_item");
    let menu = aside.querySelector(".side_user_menu");
    //let arrow = aside.querySelector(".test");

    icon.onclick = () => {
        aside.classList.toggle("reduce");
        //menu.style.display = "none";
    };


   /* for (let i of li) {
        i.onclick = activeLi;
    }

    function activeLi() {
        const list = Array.from(li);
        list.forEach((e) => e.classList.remove("active"));
        this.classList.add("active");
    } */
}
