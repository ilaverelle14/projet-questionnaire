window.onload = function () {
    console.log('Contenu charge avec succes')
}

var allInputs = document.querySelectorAll("input[type='radio']");
var data = [];
var defaultData = ['Jamais vrai', 'Parfois vrai', 'Souvent vrai', 'Toujours vrai'];

allInputs.forEach((item) => {
    item.addEventListener('click', (event) => {
        const lineNumber = +event.target.name.split('-')[1]; // numero de la ligne
        const lineValue = defaultData.indexOf(event.target.value);
        if(data.length > 0) {
            const isAlreadyIn = data.filter(item => +item.value == lineValue && item.line == lineNumber);
            if(isAlreadyIn.length > 0) {
                data = data.filter(i => i.line != isAlreadyIn[0].line && i.value != isAlreadyIn[0].value);
                console.log(data)
            } else {
                data = [...data, {
                    line: lineNumber,
                    value: lineValue
                }];
            }
        } else {
            data = [...data, {
                line: lineNumber,
                value: lineValue
            }];
        }
        // console.log(lineNumber, lineValue, data)
    });
});
