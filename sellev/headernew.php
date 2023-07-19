<!DOCTYPE html>
<html lang="en">

<head>
    
    <style>
      :root {

/**
 * colors
 */

--spanish-gray: hsl(0, 0%, 60%);
--sonic-silver: hsl(0, 0%, 47%);
--eerie-black: hsl(0, 0%, 13%);
--salmon-pink: hsl(353, 100%, 78%);
--sandy-brown: hsl(29, 90%, 65%);
--bittersweet: hsl(0, 100%, 70%);
--ocean-green: hsl(152, 51%, 52%);
--davys-gray: hsl(0, 0%, 33%);
--cultured: hsl(0, 0%, 93%);
--white: hsl(0, 100%, 100%);
--onyx: hsl(0, 0%, 27%);

--green: #00b894;
--light-green: #90ee90;
--yellow: #f9d806;
--light-yellow: #ffee80;
--black: #130f40;
--light-color: #666;
--box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
--border: .1rem solid rgba(0, 0, 0, .1);

/**
 * typography
 */

--fs-1: 1.563rem;
--fs-2: 1.375rem;
--fs-3: 1.25rem;
--fs-4: 1.125rem;
--fs-5: 1rem;
--fs-6: 0.938rem;
--fs-7: 0.875rem;
--fs-8: 0.813rem;
--fs-9: 0.75rem;
--fs-10: 0.688rem;
--fs-11: 0.625rem;

--weight-300: 300;
--weight-400: 400;
--weight-500: 500;
--weight-600: 600;
--weight-700: 700;

/**
 * border-radius
 */

--border-radius-md: 10px;
--border-radius-sm: 5px;

/**
 * transition 
 */

--transition-timing: 0.2s ease;

}


/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}

a {
text-decoration: none;
}

li {
list-style: none;
}

button {
background: none;
font: inherit;
border: none;
cursor: pointer;
}

img,
ion-icon,
button,
a {
display: block;
}

span {
display: inline-block;
}

html {
font-family: "Poppins", sans-serif;
-ms-scroll-chaining: none;
overscroll-behavior: contain;
}

.search-field {
display: block;
width: 100%;
font: inherit;
}

.search-field::-webkit-input-placeholder {
font: inherit;
}

.search-field::-moz-placeholder {
font: inherit;
}

.search-field:-ms-input-placeholder {
font: inherit;
}

.search-field::-ms-input-placeholder {
font: inherit;
}

.search-field::placeholder {
font: inherit;
}

body {
background: var(--white);
}

.title {
color: var(--eerie-black);
font-size: var(--fs-5);
font-weight: var(--weight-600);
letter-spacing: 0.4px;
text-transform: capitalize;
padding-bottom: 10px;
border-bottom: 1px solid var(--cultured);
margin-bottom: 30px;
}

.title_l {
color: var(--eerie-black);
font-size: var(--fs-5);
font-weight: var(--weight-600);
letter-spacing: 0.4px;
text-transform: capitalize;
padding-bottom: 10px;
margin-bottom: 10px;
margin-left: 5%;
}

.title_n {
color: var(--eerie-black);
font-size: var(--fs-5);
font-weight: var(--weight-600);
letter-spacing: 0.4px;
text-transform: capitalize;
padding-bottom: 10px;
margin-bottom: 10px;
/* padding-left: 40px; */
}


.line {
color: var(--eerie-black);
font-size: var(--fs-5);
font-weight: var(--weight-200);
letter-spacing: 0.4px;
text-transform: capitalize;
padding-bottom: 5px;
margin-bottom: 5px;
}

/*-----------------------------------*\
#HEADER
\*-----------------------------------*/

.header-top,
.header-user-actions,
.desktop-navigation-menu {
display: none;
}

.header-main {
padding: 20px 0;
border-bottom: 1px solid var(--cultured);
}

.header-logo {
margin-bottom: 20px;
color: var(--black);
font-weight: bold;
}

.header-logo img {
/* margin: auto; */
font-size: 2.5rem;
color: var(--eerie-black);
font-weight: bold;
}

.header-logo span {
color: var(--green);
}

.header-search-container {
position: relative;
}

.header-search-container .search-field {
font-size: var(--fs-7);
color: var(--onyx);
padding: 10px 15px;
padding-right: 50px;
border: 1px solid var(--cultured);
-webkit-border-radius: var(--border-radius-md);
border-radius: var(--border-radius-md);
}

.search-field::-webkit-search-cancel-button {
display: none;
}

.search-btn {
background: var(--white);
position: absolute;
top: 50%;
right: 2px;
-webkit-transform: translateY(-50%);
-ms-transform: translateY(-50%);
transform: translateY(-50%);
color: var(--onyx);
font-size: 18px;
padding: 8px 15px;
-webkit-border-radius: var(--border-radius-md);
border-radius: var(--border-radius-md);
-webkit-transition: color var(--transition-timing);
-o-transition: color var(--transition-timing);
transition: color var(--transition-timing);
}

.search-btn:hover {
color: var(--salmon-pink);
}

.mobile-bottom-navigation {
background: var(--white);
position: fixed;
bottom: 0;
left: 50%;
-webkit-transform: translateX(-50%);
-ms-transform: translateX(-50%);
transform: translateX(-50%);
width: 100%;
max-width: 500px;
margin: auto;
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-justify-content: space-around;
-ms-flex-pack: distribute;
justify-content: space-around;
-webkit-box-align: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
padding: 5px 0;
-webkit-box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.25);
box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.25);
z-index: 5;
}

.mobile-bottom-navigation .action-btn {
position: relative;
font-size: 26px;
color: var(--eerie-black);
padding: 10px;
}

.mobile-bottom-navigation .count {
background: var(--bittersweet);
color: var(--white);
position: absolute;
top: 0;
right: 0;
font-size: 12px;
font-weight: var(--weight-500);
line-height: 1;
padding: 2px 4px;
-webkit-border-radius: 20px;
border-radius: 20px;
}

.mobile-navigation-menu {
background: var(--white);
position: fixed;
top: 0;
left: -100%;
width: 100%;
max-width: 320px;
height: 100vh;
padding: 20px;
-webkit-box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.1);
box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.1);
overflow-y: scroll;
-ms-scroll-chaining: none;
overscroll-behavior: contain;
visibility: hidden;
-webkit-transition: 0.5s ease;
-o-transition: 0.5s ease;
transition: 0.5s ease;
z-index: 20;
}

.mobile-navigation-menu.active {
left: 0;
visibility: visible;
}

.menu-top {
padding-bottom: 15px;
margin-bottom: 10px;
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: justify;
-webkit-justify-content: space-between;
-ms-flex-pack: justify;
justify-content: space-between;
-webkit-box-align: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
border-bottom: 2px solid var(--cultured);
}

.menu-top .menu-title {
color: var(--salmon-pink);
font-size: var(--fs-4);
font-weight: var(--weight-600);
}

.menu-close-btn {
color: var(--eerie-black);
font-size: 22px;
}

.menu-close-btn ion-icon {
--ionicon-stroke-width: 50px;
}

.mobile-menu-category-list {
margin-bottom: 30px;
}

.menu-category .accordion-menu {
width: 100%;
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: justify;
-webkit-justify-content: space-between;
-ms-flex-pack: justify;
justify-content: space-between;
-webkit-box-align: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
}

.mobile-menu-category-list .menu-category {
border-bottom: 1px solid var(--cultured);
}

.mobile-menu-category-list .menu-title {
color: var(--onyx);
font-size: var(--fs-6);
font-weight: var(--weight-500);
padding: 12px 0;
}

.accordion-menu>div {
font-size: 14px;
}

.accordion-menu ion-icon {
color: var(--onyx);
--ionicon-stroke-width: 90px;
}

.accordion-menu.active .add-icon,
.accordion-menu .remove-icon {
display: none;
}

.accordion-menu .add-icon,
.accordion-menu.active .remove-icon {
display: block;
}

.menu-category .submenu-category-list {
margin-left: 10px;
}

.submenu-title {
padding: 6px 0;
font-size: var(--fs-6);
color: var(--sonic-silver);
font-weight: var(--weight-300);
}

.submenu-title:hover {
color: var(--davys-gray);
}

.submenu-category-list {
max-height: 0;
overflow: hidden;
visibility: hidden;
-webkit-transition: 0.5s ease-in-out;
-o-transition: 0.5s ease-in-out;
transition: 0.5s ease-in-out;
}

.submenu-category-list.active {
max-height: 148px;
visibility: visible;
}

.menu-bottom .menu-category-list {
margin-bottom: 20px;
}

.menu-bottom .menu-category {
border-bottom: none;
}

.menu-bottom .menu-title {
font-size: var(--fs-6);
font-weight: var(--weight-500);
color: var(--eerie-black);
padding: 12px 0;
}

.accordion-menu.active .caret-back {
-webkit-transform: rotate(-0.25turn);
-ms-transform: rotate(-0.25turn);
transform: rotate(-0.25turn);
}

.menu-bottom .submenu-category-list {
border: 1px solid var(--cultured);
-webkit-border-radius: var(--border-radius-md);
border-radius: var(--border-radius-md);
padding: 0 15px;
margin-left: 0;
-webkit-box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.05);
box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.05);
}

.menu-bottom .submenu-category:not(:last-child) {
border-bottom: 1px solid var(--cultured);
}

.menu-social-container {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-webkit-justify-content: center;
-ms-flex-pack: center;
justify-content: center;
-webkit-box-align: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
gap: 10px;
}

.menu-social-container .social-link {
background: var(--cultured);
color: var(--eerie-black);
font-size: 20px;
padding: 10px;
-webkit-border-radius: var(--border-radius-md);
border-radius: var(--border-radius-md);
}


/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

footer {
background: var(--eerie-black);
/* color: white; */
bottom: 0;
width: 100vw;
font-size: 16px;
/* padding: 30px 0; */
}

footer * {
box-sizing: border-box;
border: none;
outline: none;
}

.row {
padding: 1em 1em;
}

.row.primary {
display: grid;
grid-template-columns: 3fr 2fr 4fr;
align-items: stretch;
}

.column {
width: 100%;
display: flex;
flex-direction: column;
padding: 0 2em;
min-height: 15em;
}

.h3 {
width: 100%;
text-align: left;
color: white;
font-size: 1.4em;
white-space: nowrap;
}

.colink {
list-style: none;
display: flex;
flex-direction: column;
padding: 0;
margin: 0;
}

.link:not(:first-child) {
margin-top: 0.8em;
}

.colink .link .alink {
color: #a7a7a7;
text-decoration: none;
}

.colink .link .alink:hover {
color: #c7940a;
}

.about p {
text-align: justify;
line-height: 0;
margin: 0;
}

#email,
#sub {
font-size: 1em;
padding: 1em;
width: 100%;
border-radius: 5px;
margin-bottom: 5px;
}

#sub {
background-color: #c7940a;
font-size: 1.2em;
font-weight: lighter;
color: var(--eerie-black);
}

#sub:hover{
color: var(--transition-timing);
font-weight: bolder;
}

div.social {
display: flex;
justify-content: space-around;
font-size: 2.4em;
flex-direction: row;
margin-top: 0.5em;
}

.social i {
color: #bac6d9;
}

.copyright {
padding: 0.3em 1em;
background-color: #25262e;
}

.footer-menu {
float: right;
margin-top: 10px;
}

.footer-menu a {
color: #cfd2d6;
padding: 6px;
text-decoration: none;
}

.footer-menu a:hover,
.social i:hover {
color: #c7940a;
}

/*-----------------------------------*\
#FOOTER BOTTOM
\*-----------------------------------*/

.footer-bottom {
margin-bottom: 50px;
text-align: center;
}

.payment-img {
max-width: 335px;
width: 100%;
margin: auto;
margin-bottom: 15px;
justify-content: center;
}

.copyright {
color: var(--sonic-silver);
text-align: right;
font-size: var(--fs-8);
font-weight: var(--weight-500);
text-transform: capitalize;
letter-spacing: 1.2px;
}

.copyright a {
display: inline;
color: inherit;
}

/**
* responsive larger than 480px screen
*/

@media (min-width: 480px) {

/**
* #CUSTOM PROPERTY
*/

:root {

/**
 * typography 
 */

--fs-1: 1.875rem;

}



/**
* #HEADER
*/

.header-top {
display: block;
padding: 10px 0;
border-bottom: 1px solid var(--cultured);
}

.header-social-container,
.header-top-actions {
display: none;
}

.header-alert-news {
color: var(--sonic-silver);
font-size: var(--fs-9);
text-transform: uppercase;
}

.header-alert-news b {
font-weight: var(--weight-500);
}

.header-main {
padding: 25px 0;
}
/**
* #FOOTER
*/

.copyright {
--fs-8: 0.875rem;
}

}

/**
* responsive larger than 570px screen
*/

@media (min-width: 570px) {

/**
* #HEADER
*/

.header-top .container,
.header-main .container {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: justify;
-webkit-justify-content: space-between;
-ms-flex-pack: justify;
justify-content: space-between;
-webkit-box-align: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
}

.header-logo {
margin-bottom: 0;
}

.header-top-actions {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
gap: 10px;
}

.header-top-actions select {
border: none;
display: block;
min-width: 80px;
padding: 5px 0;
font: inherit;
color: var(--sonic-silver);
font-size: var(--fs-8);
text-transform: uppercase;
cursor: pointer;
-webkit-transition: var(--transition-timing);
-o-transition: var(--transition-timing);
transition: var(--transition-timing);
}

.header-top-actions select:hover {
color: var(--eerie-black);
}

.header-search-container {
min-width: 300px;
}

/**
* #PRODUCT
*/

.product-minimal .showcase-container {
min-width: 50%;
}

.product-featured .showcase-img {
max-width: 450px;
margin: auto;
}

.product-featured .countdown {
gap: 20px;
}
/**
* #BLOG
*/

.blog-container {
gap: 30px;
}

.blog-card {
min-width: -webkit-calc(50% - 15px);
min-width: calc(50% - 15px);
}
}

/**
* responsive larger than 768px screen
*/

@media (min-width: 768px) {

/**
* #CUSTOM PROPERTY
*/

:root {

/**
 * typography 
 */

--fs-1: 2.375rem;

}



/**
* #BASE 
*/

html {
font-size: 17px;
}



/**
* #REUSED STYLE 
*/

.container {
max-width: 750px;
margin: auto;
}

/**
* #HEADER 
*/

.header-main .container {
gap: 80px;
}

.header-search-container {
-webkit-box-flex: 1;
-webkit-flex-grow: 1;
-ms-flex-positive: 1;
flex-grow: 1;
}

/**
* #PRODUCT 
*/

.product-minimal {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-flex-wrap: wrap;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
-webkit-box-pack: center;
-webkit-justify-content: center;
-ms-flex-pack: center;
justify-content: center;
gap: 20px;
}

.product-minimal .product-showcase {
min-width: -webkit-calc(50% - 10px);
min-width: calc(50% - 10px);
width: -webkit-calc(50% - 10px);
width: calc(50% - 10px);
}

.product-minimal .showcase-container {
min-width: 100%;
}

.product-featured .showcase {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-webkit-justify-content: center;
-ms-flex-pack: center;
justify-content: center;
-webkit-box-align: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
gap: 20px;
}

.product-featured .showcase-img {
max-width: -webkit-fit-content;
max-width: -moz-fit-content;
max-width: fit-content;
}

.product-featured .showcase-content {
margin-top: 0;
min-width: -webkit-calc(100% - 345px);
min-width: calc(100% - 345px);
}
}

@media screen and (max-width: 850px) {
.row.primary {
grid-template-columns: 1fr;
}
}


/**
* responsive larger than 1024px screen
*/

@media (min-width: 1024px) {

/**
* #CUSTOM PROPERTY
*/

:root {

/**
 * typography 
 */

--fs-1: 2.625rem;
--fs-2: 1.125rem;

}



/**
* #REUSED STYLE 
*/

.container {
max-width: 980px;
}
/**
* #HEADER 
*/

.header-social-container {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
gap: 5px;
}

.header-social-container .social-link {
padding: 5px;
background: hsl(0, 0%, 95%);
-webkit-border-radius: var(--border-radius-sm);
border-radius: var(--border-radius-sm);
color: var(--sonic-silver);
-webkit-transition: var(--transition-timing);
-o-transition: var(--transition-timing);
transition: var(--transition-timing);
}

.header-social-container .social-link:hover {
background: var(--salmon-pink);
color: var(--white);
}

.header-user-actions {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
gap: 15px;
}

.header-user-actions .action-btn {
position: relative;
font-size: 35px;
color: var(--onyx);
padding: 5px;
}

.header-user-actions .count {
position: absolute;
top: -2px;
right: -3px;
background: var(--bittersweet);
color: var(--white);
font-size: 12px;
font-weight: var(--weight-500);
line-height: 1;
padding: 2px 4px;
-webkit-border-radius: 20px;
border-radius: 20px;
}

.desktop-navigation-menu {
display: block;
}

.desktop-menu-category-list {
position: relative;
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-webkit-justify-content: center;
-ms-flex-pack: center;
justify-content: center;
-webkit-box-align: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
gap: 30px;
}

.desktop-menu-category-list .menu-category:not(:nth-child(2)) {
position: relative;
}

.desktop-menu-category-list .menu-category>.menu-title {
position: relative;
color: var(--onyx);
font-size: var(--fs-7);
font-weight: var(--weight-600);
text-transform: uppercase;
padding: 15px 0;
-webkit-transition: var(--transition-timing);
-o-transition: var(--transition-timing);
transition: var(--transition-timing);
}

.desktop-menu-category-list .menu-category>.menu-title:hover {
color: var(--salmon-pink);
}

.desktop-menu-category-list .menu-category>.menu-title::after {
content: '';
position: absolute;
bottom: 0;
left: 0;
width: 100%;
height: 2px;
background: var(--salmon-pink);
-webkit-transform: scaleX(0);
-ms-transform: scaleX(0);
transform: scaleX(0);
-webkit-transform-origin: left;
-ms-transform-origin: left;
transform-origin: left;
-webkit-transition: var(--transition-timing);
-o-transition: var(--transition-timing);
transition: var(--transition-timing);
}

.desktop-menu-category-list .menu-category>.menu-title:hover::after {
-webkit-transform: scaleX(1);
-ms-transform: scaleX(1);
transform: scaleX(1);
}

.dropdown-panel {
position: absolute;
top: 100%;
left: 0;
background: var(--white);
width: 100%;
display: -ms-grid;
display: grid;
-ms-grid-columns: 1fr 30px 1fr 30px 1fr 30px 1fr;
grid-template-columns: repeat(4, 1fr);
gap: 30px;
padding: 30px;
border: 1px solid var(--cultured);
-webkit-box-shadow: 0 3px 5px hsla(0, 0%, 0%, 0.1);
box-shadow: 0 3px 5px hsla(0, 0%, 0%, 0.1);
-webkit-border-radius: var(--border-radius-md);
border-radius: var(--border-radius-md);
-webkit-transform: translateY(50px);
-ms-transform: translateY(50px);
transform: translateY(50px);
opacity: 0;
visibility: hidden;
pointer-events: none;
-webkit-transition: var(--transition-timing);
-o-transition: var(--transition-timing);
transition: var(--transition-timing);
z-index: 5;
}

.desktop-menu-category-list .menu-category:hover>.dropdown-panel {
-webkit-transform: translateY(0);
-ms-transform: translateY(0);
transform: translateY(0);
opacity: 1;
visibility: visible;
pointer-events: all;
}

.dropdown-panel-list .menu-title a {
color: var(--onyx);
font-size: var(--fs-7);
font-weight: var(--weight-600);
padding-bottom: 10px;
border-bottom: 1px solid var(--cultured);
margin-bottom: 10px;
}

.panel-list-item a {
color: var(--sonic-silver);
font-size: var(--fs-7);
text-transform: capitalize;
-webkit-transition: var(--transition-timing);
-o-transition: var(--transition-timing);
transition: var(--transition-timing);
}

.panel-list-item a:hover {
color: var(--salmon-pink);
}

.panel-list-item:not(:last-child) a {
padding: 4px 0;
}

.panel-list-item:last-child {
margin-top: 20px;
}

.panel-list-item img {
width: 100%;
height: auto;
-webkit-border-radius: var(--border-radius-sm);
border-radius: var(--border-radius-sm);
}

.dropdown-list {
position: absolute;
top: 100%;
left: 0;
width: 200px;
background: var(--white);
padding: 20px 0;
-webkit-border-radius: var(--border-radius-md);
border-radius: var(--border-radius-md);
border: 1px solid var(--cultured);
-webkit-box-shadow: 0 3px 5px hsla(0, 0%, 0%, 0.1);
box-shadow: 0 3px 5px hsla(0, 0%, 0%, 0.1);
-webkit-transform: translateY(50px);
-ms-transform: translateY(50px);
transform: translateY(50px);
opacity: 0;
visibility: hidden;
pointer-events: none;
-webkit-transition: var(--transition-timing);
-o-transition: var(--transition-timing);
transition: var(--transition-timing);
z-index: 5;
}

.desktop-menu-category-list .menu-category:hover>.dropdown-list {
-webkit-transform: translateY(0);
-ms-transform: translateY(0);
transform: translateY(0);
opacity: 1;
visibility: visible;
pointer-events: all;
}

.dropdown-list .dropdown-item a {
color: var(--sonic-silver);
font-size: var(--fs-7);
text-transform: capitalize;
padding: 4px 20px;
-webkit-transition: var(--transition-timing);
-o-transition: var(--transition-timing);
transition: var(--transition-timing);
}

.dropdown-list .dropdown-item a:hover {
color: var(--salmon-pink);
}

.mobile-bottom-navigation {
display: none;
}

/**
* #BLOG
*/

.blog-card {
min-width: -webkit-calc(33.33% - 20px);
min-width: calc(33.33% - 20px);
}

.blog-title {
--fs-5: 1rem;
}

/**
* #FOOTER
*/
.footer-bottom {
margin-bottom: 0;
}
}


/**
* responsive larger than 1200px screen
*/

@media (min-width: 1200px) {

/**
* #REUSED STYLE 
*/

.container {
max-width: 1200px;
} 

/**
* #HEADER
*/

.desktop-menu-category-list {
gap: 45px;
}
/**
* #BLOG
*/

.blog {
margin-bottom: 50px;
}

.blog-card {
min-width: -webkit-calc(25% - 22.5px);
min-width: calc(25% - 22.5px);
}

}
</style>
</head>

    <header>

    <div class="header-main">
      <div class="container">
        <a href="http://localhost/GreenWheels/" class="header-logo">
          <span>Green </span>Wheels
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">
          <div id="login-btn">
            <button id="redirectButton">
              <a href="http://localhost/GreenWheels/session_decider.php">
                <ion-icon name="person-outline"></ion-icon>
              </a>
            </button>
            
          </div>

        </div>
        <a href="http://localhost/GreenWheels/loginsystem/login_form.php" ><button type="button">LogOut</button></a>
      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="#" class="menu-title">New Ev</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Car</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bike</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Scooter</a>
              </li>

            </ul>
          </li>


          <li class="menu-category">
            <a href="./sellev/mainsellev.php" class="menu-title">Sell Ev</a>
          </li>

          <li class="menu-category">
            <a href="./retrofication/retrofitter.html" class="menu-title">Retrofitter</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Charging Point</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Ahmedabad</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bengaluru</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Delhi</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Mumbai</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Accessories</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#"> car floor mat</a>
              </li>

              <li class="dropdown-item">
                <a href="#"> Tyre</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Electric Car Blanket </a>
              </li>

              <li class="dropdown-item">
                <a href="#">Extra Electric Car Cables</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Electric Car Jack</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <button class="menu-title" id="serBtn" onclick="serviceBtn()">Services</button>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Reviews & Videos</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Ev News</a>
              </li>

              <li class="dropdown-item">
                <a href="#">User Reviews</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Videos</a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    
      </header>


</html>