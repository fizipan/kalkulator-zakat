const container = document.querySelector('#sidebar-wrapper');
const list = document.querySelectorAll('.list-group-item');

container.addEventListener('click', function (e) {
    list.forEach(li => {
        if (li.classList.contains('active')) {
            li.classList.remove('active');
        }

    });

    e.target.classList.add('active');
});