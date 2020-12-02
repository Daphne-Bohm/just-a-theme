(function(){
    const hamburger = document.querySelector('.hamburger-menu');
    const menuItem = document.querySelector('.nav-links');
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('animate');
        menuItem.classList.toggle('display-menu');
    });
})();