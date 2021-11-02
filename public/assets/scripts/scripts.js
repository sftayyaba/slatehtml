document.querySelector('#changeStyle').addEventListener('change', event => {
	var selection = event.target.value;
	if (selection == 2) {
		window.location.href = 'sidebar2.html';
	} else if (selection == 3) {
		window.location.href = 'sidebar3.html';
	} else if (selection == 4) {
		window.location.href = 'sidebar4.html';
	} else {
		window.location.href = 'index.html';
	}
});

document.querySelector('#changeGradient').addEventListener('change', event => {
	var selection = event.target.value;
	if (selection == 1) {
		sidebar.classList.remove("gradient2", "gradient5", "gradient6", "gradient7", "gradient8", "gradient9");
		sidebar.classList.add("gradient1");
	} else if (selection == 2) {
		sidebar.classList.remove("gradient1", "gradient3", "gradient6", "gradient7", "gradient8", "gradient9");
		sidebar.classList.add("gradient2");
	} else if (selection == 3) {
		sidebar.classList.remove("gradient1", "gradient2", "gradient6", "gradient7", "gradient8", "gradient9");
		sidebar.classList.add("gradient3");
	} else if (selection == 6) {
		sidebar.classList.remove("gradient1", "gradient2", "gradient3", "gradient7", "gradient8", "gradient9");
		sidebar.classList.add("gradient6");
	} else if (selection == 7) {
		sidebar.classList.remove("gradient1", "gradient2", "gradient3", "gradient6", "gradient8", "gradient9");
		sidebar.classList.add("gradient7");
	} else if (selection == 8) {
		sidebar.classList.remove("gradient1", "gradient2", "gradient3", "gradient6", "gradient7", "gradient9");
		sidebar.classList.add("gradient8");
	} else if (selection == 9) {
		sidebar.classList.remove("gradient1", "gradient2", "gradient3", "gradient6", "gradient7", "gradient8");
		sidebar.classList.add("gradient9");
	} else {
		sidebar.classList.remove("gradient1", "gradient2", "gradient3", "gradient6", "gradient7", "gradient8", "gradient9");
	}
});

document.querySelector('#lightGradient').addEventListener('change', event => {
	var checked = event.target.checked;
	if (checked) {
		sidebar.classList.add("lightGradient");
	} else {
		sidebar.classList.remove("lightGradient");
	}
});
var header = document.getElementById("page_header");
document.querySelector('#lightHeader').addEventListener('change', event => {
	var checked = event.target.checked;
	if (checked) {
		header.classList.add("lightHeader");
		header.classList.remove("whiteHeader");
		document.getElementById("whiteHeader").checked = false;
	} else {
		header.classList.remove("lightHeader");
	}
});
document.querySelector('#whiteHeader').addEventListener('change', event => {
	var checked = event.target.checked;
	if (checked) {
		header.classList.add("whiteHeader");
		header.classList.remove("lightHeader");
		document.getElementById("lightHeader").checked = false;
	} else {
		header.classList.remove("whiteHeader");
	}
});

