
let selectedTableIds = [];

function checkActiveTables() {
  selectedTableIds = [];

  let $menuItems = document.querySelectorAll('.price-menu .menu-item');

  for (let i = 0; i < $menuItems.length; i++) {
    let menuItem = $menuItems[i];
    if (menuItem.classList.contains('active')) {
      selectedTableIds.push(parseInt(menuItem.getAttribute('data-id')))
    }
  }
}

checkActiveTables();

function setVisibleTables() {
  let $priceTables = document.querySelectorAll('.price-table');

  $priceTables.forEach(function(item) {
    let itemId = parseInt(item.getAttribute('data-id'));
    if (selectedTableIds.indexOf(itemId) !== -1) {
      item.classList.add("show")
    } else {
      item.classList.remove("show")
    }
  })

}

setVisibleTables();

let $menuItems = document.querySelectorAll('.price-menu .menu-item');

for (let i = 0; i < $menuItems.length; i++) {
  let menuItem = $menuItems[i];
  menuItem.addEventListener( "click" , function() {

    let $menuItems2 = document.querySelectorAll('.price-menu .menu-item');

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




