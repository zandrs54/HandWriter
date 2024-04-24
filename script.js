const convertButton = document.querySelector("#convert");

function addWord(words) {
	words.forEach(word => {
		document.querySelector("#text_preview").innerHTML += `<span id="word" style="color: rgba(0, 62, 126, 0.94); font-family: Montekky; font-size: 16px" >${word} </span>`;
	});
}
//Конвертация
convertButton.addEventListener("click", () => {

	const textPreview = document.querySelector("#text_preview");
	while (textPreview.firstChild) {
		textPreview.removeChild(textPreview.firstChild);
	}

	const input = document.querySelector("#text");
	const value = input.value;
	const formatedValue = value.replace(/\n/g, "<br>");
	const words = formatedValue.split(" ");
    console.log(formatedValue);
	addWord(words)

});
//Шрифт
const font = document.querySelector("#font");
font.addEventListener("change", () => {
	const value = font.value;
	console.log(value);
	const textPreview = document.querySelector("#text_preview");
	textPreview.childNodes.forEach(word => {
		word.style.fontFamily = value;
	})
});
//Ползунки
//Размер текста
const fontSize = document.querySelector("#fontSize");
fontSize.addEventListener("change", () => {
	const value = fontSize.value;
	console.log(value);
	const textPreview = document.querySelector("#text_preview");
	textPreview.childNodes.forEach(word => {
		word.style.fontSize = `${value}px`;
	});
});

//Растояние между словами
const wordSpace = document.querySelector("#wordSpace");
wordSpace.addEventListener("change", () => {
	const value = wordSpace.value;
	console.log(value);
	const textPreview = document.querySelector("#text_preview");
	textPreview.childNodes.forEach(word => {
		word.style.wordSpacing = `${value}px`;
	});
});

