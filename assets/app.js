/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */


// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';
//require('bootstrap');
// start the Stimulus application
import './bootstrap';

require('bootstrap');
require("@fortawesome/fontawesome-free/css/all.min.css");
require("@fortawesome/fontawesome-free/js/all.js");


window.onload = () => {
    /*====== Sidebar user ======*/

    let aside = document.querySelector(".sidebar_user");
    let icon = aside.querySelector(".menu_icon");
    let li = aside.querySelectorAll(".side_item");

    if (document.getElementById('open-auto')) {
            const buttonLangage = document.getElementById("arrow2");
            const buttonFeature = document.getElementById("arrow3");

            aside.classList.toggle("reduce");

            buttonLangage.addEventListener("click", () => {
                const menu = document.getElementById("sub_menu");
                const button = document.getElementById("fleche");
                menu.style.maxHeight = "150px";
                button.style.rotate = "90deg";
                if (menu.style.maxHeight = "150px") {
                    buttonLangage.addEventListener("click", () => { 
                        menu.style.maxHeight = "0px";
                        button.style.rotate = "0deg";
                    });
                } else if (menu.style.maxHeight = "0px") {
                    buttonLangage.addEventListener("click", () => { 
                        menu.style.maxHeight = "150px";
                    });
                } 
            });
        
        
           buttonFeature.addEventListener("click", () => {
            const menu = document.getElementById("sub_menu_feature");
            const button = document.getElementById("fleche1");
            menu.style.maxHeight = "200px";
            button.style.rotate = "90deg";
            if (menu.style.maxHeight = "200px") {
                buttonFeature.addEventListener("click", () => { 
                    menu.style.maxHeight = "0px";
                    button.style.rotate = "0deg";
                });
            } else if (menu.style.maxHeight = "0px") {
                buttonFeature.addEventListener("click", () => { 
                    menu.style.maxHeight = "200px";
                });
            } 
        });            
        
    
    }

    icon.onclick = () => {
        aside.classList.toggle("reduce");
    };
/* 
   for (let i of li) {
        i.onclick = activeLi;
    }

    function activeLi() {
        const list = Array.from(li);
        list.forEach((e) => e.classList.remove("active"));
        this.classList.add("active");
    }  */

    const buttonProject = document.getElementById("arrow1");
    const buttonLangage = document.getElementById("arrow2");
    const buttonFeature = document.getElementById("arrow3");
    const buttonDoamin = document.getElementById("arrow4");
    const menu = document.getElementById("sub_menu");
    

   buttonLangage.addEventListener("click", () => {
        const menu = document.getElementById("sub_menu");
        const button = document.getElementById("fleche");
        menu.style.maxHeight = "150px";
        button.style.rotate = "90deg";
        if (menu.style.maxHeight = "150px") {
            buttonLangage.addEventListener("click", () => { 
                menu.style.maxHeight = "0px";
                button.style.rotate = "0deg";
            });
        } else if (menu.style.maxHeight = "0px") {
            buttonLangage.addEventListener("click", () => { 
                menu.style.maxHeight = "150px";
            });
        } 
    });


   buttonFeature.addEventListener("click", () => {
    const menu = document.getElementById("sub_menu_feature");
    const button = document.getElementById("fleche1");
    menu.style.maxHeight = "200px";
    button.style.rotate = "90deg";
    if (menu.style.maxHeight = "200px") {
        buttonFeature.addEventListener("click", () => { 
            menu.style.maxHeight = "0px";
            button.style.rotate = "0deg";
        });
    } else if (menu.style.maxHeight = "0px") {
        buttonFeature.addEventListener("click", () => { 
            menu.style.maxHeight = "200px";
        });
    } 
});

}
