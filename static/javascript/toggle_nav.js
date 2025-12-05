const getToggleBar = document.querySelector('.toggle-bar');
const getNavVertical = document.querySelector('.nav-vertical');

getToggleBar.addEventListener('click', function() {
    getNavVertical.classList.toggle('hidden');
});
getNavVertical.addEventListener('click', function() {
    getNavVertical.classList.toggle('hidden');
});