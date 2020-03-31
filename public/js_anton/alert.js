const allBtn = document.querySelectorAll('.btn-alert')
allBtn.forEach(element => {
    element.addEventListener('click', () => {
        element.parentNode.style.display = 'none'
    })
});