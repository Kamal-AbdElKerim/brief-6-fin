
 


        // Function to perform XHR request and update the table
        let selectedValues = [];

var xhr = new XMLHttpRequest();
xhr.open('GET', "Catégories_select.php", true);

xhr.onload = function() {
  if (xhr.status >= 200 && xhr.status < 300) {
    const data = JSON.parse(xhr.responseText);
 
    const tableElement = document.getElementById("data_Catégories");

// Create an HTML string to store the checkbox list
let htmlString = '';

// Iterate through the data array and build the HTML string
data.forEach(element => {
htmlString += `
    <li class="list-group-item">
        <input id="checkbox${element["id"]}" class="form-check-input me-1 min " type="checkbox" value="${element["id"]}">
        <label style="width: 192px;" class="form-check-label" for="checkbox${element["id"]}">${element["Nom"]}</label>
    </li>
`;

});

tableElement.innerHTML = htmlString;

const checkboxes = document.querySelectorAll('.min');

checkboxes.forEach(checkbox => {
  checkbox.addEventListener('change', function() {
      selectedValues = Array.from(document.querySelectorAll('.min:checked')).map(cb => cb.value);
      console.log(selectedValues); // Log selectedValues for debugging
      fetchDataAndUpdateTable();
  });
});



// Set the inner HTML of the table element with the generated HTML string

  
    

   
  } else {
    console.error('Request failed with status ' + xhr.status);
  }
};

xhr.onerror = function() {
  console.error('Request failed');
};

xhr.send();