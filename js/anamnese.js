let displays = document.querySelectorAll('.formDisplay');

for (let index = 0; index < displays.length; index++) {
    const element = displays[index];
    element.onclick = function () {
        let name = this.getAttribute('name');
        let itens = document.querySelectorAll('.'+name);
        for (let i = 0; i < itens.length; i++) {
            const item = itens[i];
            if (this.value=='0') {
                item.classList.remove('none');
            } else {
                item.classList.add('none');
            }
        }
    }
}