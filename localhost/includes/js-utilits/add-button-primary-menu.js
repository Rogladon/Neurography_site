



function ElementsNotLogged(){
	var uls = document.querySelectorAll("nav");
	for(var i = 0; i < uls.length; i++){
		var ul = uls[i].querySelector("ul");
		var defaultLi = ul.querySelector("li");

		var setting = new Array({"label":"Вход", "id":"log-in", "class":"popmake-200"},
			{"label":"Регистрация", "id":"sign-in","class":"popmake-268"})
		for(var j =0; j < setting.length; j++){
			var li = createAndAppend("li", ul);
			var label = createAndAppend("a", li);
			label.appendChild(document.createTextNode(setting[j]["label"]));

			li.setAttribute("id", setting[j]["id"]);
			li.classList.add(setting[j]["class"]);
			addClasses(li, defaultLi);
		}
	}
}
function ElementsLogged(){
	var uls = document.querySelectorAll("nav");
	for(var i = 0; i < uls.length; i++){
		var ul = uls[i].querySelector("ul");
		var defaultLi = ul.querySelector("li");
		var li = createAndAppend("li", ul);
		var label = createAndAppend("a", li);
		label.appendChild(document.createTextNode("Личный кабинет"));
		label.setAttribute("href", window.location.hostname+"/lk");
		li.setAttribute("id", "lk");
		addClasses(li, defaultLi);
	}
}

function createAndAppend(el, parent){
	var e = document.createElement(el);
	parent.appendChild(e);
	return e;
}
function addClasses(el, defaultLi){
	for (var j = 0; j < defaultLi.classList.length; j++) {
		el.classList.add(defaultLi.classList[j]);
	}

	el.classList.add("pum-trigger");
}