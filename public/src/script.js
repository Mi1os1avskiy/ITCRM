(function() {

    let links = ['{{ links.0 }}', '{{ links.1 }}', '{{ links.2 }}', '{{ links.3 }}', '{{ links.4 }}', '{{ links.5 }}', '{{ links.6 }}', '{{ links.7 }}', '{{ links.8 }}'];

    links.forEach(function (link) {
        document.getElementById(link + '_link').addEventListener('click', function () {
            document.getElementById(link).classList.remove('hidden');
            links.forEach(function (i) {
                if (i !== link) {
                    document.getElementById(i).classList.add('hidden');
                }
            });
        });
    });

    document.getElementById('qactions').addEventListener("click", () => document.querySelector('[role="menu"]').classList.toggle('hidden'));

});