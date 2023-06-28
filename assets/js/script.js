
// начало код срабатывания бургер меню на чистом javascript
var burgerCtr = document.querySelector("#burger-menu");
var menuCtr = document.querySelector("#mobile-menu");
burgerCtr.addEventListener("click", function () {
  this.classList.toggle("active");
  menuCtr.classList.toggle("show_mobile_menu");
});
// конец бургера

// ---------------------------------------------------------------------

$(document).click(function (e) { // скрипт для клика по элементу и вне его
  if ($(e.target).closest(".pop-up").length) {
    // вместо .pop-up ставим свой клас
    // клик по элементу .pop-up
    return;
  }
  // условие по клику снаружи элемента
});


// ---------------------------------------------------------------------

var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function (e) {
      /* When an item is clicked, update the original select box,
      and the selected item: */
      var y, i, k, s, h, sl, yl;
      s = this.parentNode.parentNode.getElementsByTagName("select")[0];
      sl = s.length;
      h = this.parentNode.previousSibling;
      for (i = 0; i < sl; i++) {
        if (s.options[i].innerHTML == this.innerHTML) {
          s.selectedIndex = i;
          h.innerHTML = this.innerHTML;
          y = this.parentNode.getElementsByClassName("same-as-selected");
          yl = y.length;
          for (k = 0; k < yl; k++) {
            y[k].removeAttribute("class");
          }
          this.setAttribute("class", "same-as-selected");
          break;
        }
      }
      h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function (e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

document.addEventListener("click", closeAllSelect);


// ---------------------------------------------------------------------



// начало скрипт аккордеона

let accordeon = document.querySelectorAll('.accordeon');

accordeon.forEach(element => {
  let aLine = element.querySelectorAll('.accordeon__line');
  let aContent = element.querySelectorAll('.accordeon__content');

  // accordeonHideContent();
  // accordeonShowContent();

  element.addEventListener('click', function (e) {
    if (e.target && e.target.classList.contains('accordeon__line')) {
      aLine.forEach((element, i) => {
        if (e.target == element) {
          accordeonHideContent();
          accordeonShowContent(i);
        }
      });
    }
  });

  function accordeonHideContent() {
    aLine.forEach(element => {
      element.classList.remove('active');
    });
    aContent.forEach(element => {
      element.classList.remove('active');
    });
  }

  function accordeonShowContent(i = 0) {
    aLine[i].classList.toggle('active');
    aContent[i].classList.toggle('active');
  }
});

// конец скрипт аккордеона