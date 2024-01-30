export const InputSearchMixin = {
    data() {
        return {}
    },
    methods: {
        inputSearch() {
            const input = document.getElementById('myInput') as HTMLInputElement;
            const ul = document.getElementById('myUL') as HTMLElement;
            const li = ul.getElementsByTagName('li');

            input.addEventListener('input', function (event) {
                const searchValue = input.value.toLowerCase();

                for (let i = 0; i < li.length; i++) {
                    const txtValue = li[i].textContent || li[i].innerText;
                    txtValue.toLowerCase().includes(searchValue)
                        ? (li[i].style.display = "")
                        : (li[i].style.display = "none");
                }
            });
        }
    },
}
