feather.replace();

const input = document.querySelector('input')

input,addEventListener('input' , () => {

    const rxSpace = /\s+/g;
    const rxDashes = /-+/g;
    const rxDashSstart = /^-/;

    input.value = input.value
    .replace(rxSpace, ' ')
    .replace(rxDashes, '-')
    .replace(rxDashSstart, '');
});
