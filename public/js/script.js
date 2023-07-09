let sidebar = document.getElementsByClassName('sdnav')[0];
let side_content = document.getElementsByClassName('content-wrapper')[0];


window.onscroll = () => {
    let scrollTop = window.scrollY
    let viewportHeight = window.innerHeight;
    let contentHeight = side_content.getBoundingClientRect().height;
    let sidebarTop = sidebar.getBoundingClientRect().top + window.pageYOffset

    if (scrollTop>=contentHeight-viewportHeight+sidebarTop) {
        side_content.style.position = 'translateY(-${contentHeight - viewportHeight + sidebarTop}px)';
        side_content.style.position = 'fixed'
    } else {
        side_content.style.position = ''
    }
}