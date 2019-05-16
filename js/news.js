
function intersection(A, B)
{
  var m = A.length, n = B.length, c = 0, C = [];
  for (var i = 0; i < m; i++)
  {
    var j = 0, k = 0;
    while (B[j] !== A[ i ] && j < n) j++;
    while (C[k] !== A[ i ] && k < c) k++;
    if (j != n && k == c) C[c++] = A[ i ];
  }
  return C;
}

let selectedTableIds = [];

function checkActiveTables() {
  selectedTableIds = [];

  let $menuItems = document.querySelectorAll('.news-menu .menu-item');

  for (let i = 0; i < $menuItems.length; i++) {
    let menuItem = $menuItems[i];
    if (menuItem.classList.contains('active')) {
      selectedTableIds.push(menuItem.getAttribute('data-category'))
    }
  }
}

checkActiveTables();

function setVisibleTables() {
  let $priceTables = document.querySelectorAll('.news-container');

  $priceTables.forEach(function(item) {
    let itemClasses = item.classList;
    console.log(itemClasses);
    console.log(selectedTableIds);
    if (intersection(itemClasses, selectedTableIds).length > 0) {
      item.classList.add("show")
    } else {
      item.classList.remove("show")
    }
  })

}

setVisibleTables();

let $menuItems = document.querySelectorAll('.news-menu .menu-item');

for (let i = 0; i < $menuItems.length; i++) {
  let menuItem = $menuItems[i];
  menuItem.addEventListener( "click" , function() {

    let $menuItems2 = document.querySelectorAll('.news-menu .menu-item');

    for (let i = 0; i < $menuItems2.length; i++) {
      $menuItems2[i].classList.remove('active')
    }

    if (!this.classList.contains('active')) {
      this.classList.add('active')
    }

    checkActiveTables();
    setVisibleTables();

  });
}




