




// Function to perform XHR request and update the table

function fetchDataAndUpdateTable(selectedValue) {
var xhr = new XMLHttpRequest();
xhr.open('GET', "products_select.php?selectedValue=" + selectedValue, true);

xhr.onload = function() {
  if (xhr.status >= 200 && xhr.status < 300) {
    const data = JSON.parse(xhr.responseText);
 
    const tableElement = document.getElementById("data");

// Create an HTML string to store the checkbox list
let htmlString = '';

// console.log(selectedValues);

let filteredProducts = data; // Default to all products if selectedValues is empty

if (selectedValues.length > 0) {
const selectedValuesIds = selectedValues.map(id => parseInt(id));

filteredProducts = data.filter(product => {
return selectedValuesIds.includes(product.CategorieID);
});
}






// Iterate through the data array and build the HTML string
filteredProducts.forEach(element => {
htmlString += `
  
            <div class="col-lg-6">
            <div class="item ">
            <div class="row g-0  mb-4 position-relative" style="    border-bottom: 2px #857979 solid;border-top: 2px #857979 solid;border-radius: 20%;">
                <div class="col-md-6 mb-md-0 p-md-4">
                    <img src="${element["img"]}" class="w-100" alt="..." width="170px" height="190px">
                </div>
                <div class="col-md-6 p-4 ps-md-0">
                    <h5 class="mb-4"></h5>
                    <h3 class="text-subtle">${element["Etiquette"]} </h3>
                    <h6 class="text-primary">${element["PrixFinal"]} MAD</h6>
                    <h6 class="text-success">Produit en stock (${element["QuantiteStock"]}) </h6>

                    <h6 class="text-danger">Quantite min : ${element["QuantiteMin"]} </h6>

                </div>
                </div>
            </div>
            </div>
`;
});

// Set the inner HTML of the table element with the generated HTML string
tableElement.innerHTML = htmlString;
  
    

   
  } else {
    console.error('Request failed with status ' + xhr.status);
  }
};

xhr.onerror = function() {
  console.error('Request failed');
};

xhr.send();
}

fetchDataAndUpdateTable();



function handleSelectionChange() {
  // Get the select element
  var selectElement = document.getElementById('mySelect');
  
  // Get the selected value
  var selectedValue = selectElement.value;

  // Call the function to fetch and update the table based on the selected sorting criteria
  fetchDataAndUpdateTable(selectedValue);
}
