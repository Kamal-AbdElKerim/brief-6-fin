

const limit = 6;
let filteredProducts = []; // Initialize as an empty array to avoid 'undefined' errors

function paginateFun(number_page) {
  const tableElement = document.getElementById("data");

  tableElement.innerHTML = "";

  const start = (number_page - 1) * limit;
  const end = number_page * limit;

  const paginate_items = filteredProducts.slice(start, end).map((elem) => {
    return `<div class="col-lg-6">
      <div class="item">
        <div class="row g-0 mb-4 position-relative" style="border-bottom: 2px #857979 solid;border-top: 2px #857979 solid;border-radius: 20%;">
          <div class="col-md-6 mb-md-0 p-md-4">
            <img src="${elem["img"]}" class="w-100" alt="..." width="170px" height="190px">
          </div>
          <div class="col-md-6 p-4 ps-md-0">
            <h5 class="mb-4"></h5>
            <h4 class="text-subtle">${elem["Etiquette"]} </h4>
            <h6 class="text-secondary"><del>${elem["PrixFinal"]} MAD</del></h6>
            <h5 class="text-primary">${elem["OffreDePrix"]} MAD</h5>
            <h6 class="text-success">Produit en stock (${elem["QuantiteStock"]}) </h6>
            <h6 class="text-danger">Quantite min : ${elem["QuantiteMin"]} </h6>
          </div>
        </div>
      </div>
    </div>`;
  });

  tableElement.innerHTML = paginate_items.join("");

  const buttons = [...Array(Math.ceil(filteredProducts.length / limit)).keys()].map((elem) => {
    return `<li class="page-item">
      <button class="page-link" data-page="${elem + 1}" onclick="paginateFun(${elem + 1})">${elem + 1}</button>
    </li>`;
  });

  document.getElementById("paginate").innerHTML = buttons.join("");

  const buttone = document.querySelectorAll('.page-link');
  buttone.forEach(button => {
    button.classList.remove('active');
  });

  const activeButton = document.querySelector(`.page-link[data-page="${number_page}"]`);
  if (activeButton) {
    activeButton.classList.add('active');
  }
}

function fetchDataAndUpdateTable(selectedValue) {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', "products_select.php?selectedValue=" + selectedValue, true);

  xhr.onload = function () {
    if (xhr.status >= 200 && xhr.status < 300) {
      const data = JSON.parse(xhr.responseText);

      // Update filteredProducts with fetched data
      filteredProducts = data;

      if (selectedValues.length > 0) {
        const selectedValuesIds = selectedValues.map(id => parseInt(id));
        
        filteredProducts = data.filter(product => {
        return selectedValuesIds.includes(product.CategorieID);
        });
        }

      paginateFun(1); // Call paginateFun after fetching data
    } else {
      console.error('Request failed with status ' + xhr.status);
    }
  };

  xhr.onerror = function () {
    console.error('Request failed');
  };

  xhr.send();
}

// Call fetchDataAndUpdateTable to initially fetch and display data
fetchDataAndUpdateTable('');

function handleSelectionChange() {
  var selectElement = document.getElementById('mySelect');
  var selectedValue = selectElement.value;
  fetchDataAndUpdateTable(selectedValue);
}
